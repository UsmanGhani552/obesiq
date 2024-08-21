<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Subject\StoreSubjectRequest;
use App\Http\Requests\Admin\Subject\UpdateSubjectRequest;
use App\Models\Subject;
use Exception;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('admin.subject.index', [
            'subjects' => $subjects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubjectRequest $request)
    {   
        // try {
            // Subject::create($request->validated());
        // } catch (Exception $e) {
        //     return redirect()->back()->with('error', 'Something Went Wrong!');
        // }
        $subject = new Subject();
        $subject->title = $request->input('title');
        $subject->time = $request->input('time');
        $subject->save();
        return redirect()->route('admin.subject.index')->with('success', 'Subject created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        return view('admin.subject.edit', [
            'subject' => $subject
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        // try {
        //     $subject->update($request->validated());
        // } catch (Exception $e) {
        //     return redirect()->back()->with('error', 'Something Went Wrong!');
        // }
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'time' => 'required|integer',
        ]);
    
        try {
            $subject->fill($validatedData);
            $subject->save();
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
        return redirect()->route('admin.subject.index')->with('success', 'Subject updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        try {
            $subject->delete();
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
        return redirect()->route('admin.subject.index')->with('success', 'Subject deleted successfully!');
    }
}
