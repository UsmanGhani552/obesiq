@extends('admin.layout.master')
@section('content')
<div class="body">
    <div class="tableDiv">
        <div class="container-fluid">
            <div class="headingSec d-flex w-100">
                <nav aria-label="breadcrumb" class="w-100">
                    <ol class="breadcrumb d-flex justify-content-between">
                        <div class="d-flex">
                            <li class="breadcrumb-item"><a href="#">Quizes</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Questions</li>
                        </div>
                        <button class="btn">Add Question</button>
                    </ol>
                </nav>
                <!-- <h2>Progress</h2> -->
                <!-- <button class="btn">Start Quiz</button> -->
            </div>
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="tableBox">
                <div class="info">
                    <h2>All Questions & Subject</h2>
                    <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look.</p>
                    <!-- <h6>Create Questions</h6> -->

                </div>
                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>Questions</th>
                            <th>Subjects</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subjects as $subject)
                        <tr>
                            <td>
                                <div class="d-flex">
                                    <span class="number">1</span>
                                    <p>{{ $subject->title }}</p>
                                </div>
                            </td>
                            <td>
                                <div class="pill">
                                    <p>{{ $subject->time }}</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <button class="btn">
                                        <a href="{{ route('admin.subject.edit', $subject->id) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                <path d="M22.9289 0H7.07109C5.19572 0 3.39716 0.744988 2.07108 2.07108C0.744988 3.39716 0 5.19572 0 7.07109L0 22.9289C0 24.8043 0.744988 26.6028 2.07108 27.9289C3.39716 29.255 5.19572 30 7.07109 30H22.9289C24.8043 30 26.6028 29.255 27.9289 27.9289C29.255 26.6028 30 24.8043 30 22.9289V7.07109C30 5.19572 29.255 3.39716 27.9289 2.07108C26.6028 0.744988 24.8043 0 22.9289 0ZM8.18027 18.7084L8.8875 14.9584C8.92701 14.7506 9.02806 14.5596 9.17754 14.41L16.2703 7.32012C16.7818 6.80801 17.5465 6.62344 18.3674 6.8127C19.023 6.96445 19.684 7.34707 20.2277 7.89082C20.7715 8.43457 21.1523 9.09375 21.3053 9.74941C21.4951 10.5697 21.3105 11.3344 20.7984 11.8465L13.7086 18.9393C13.5591 19.0887 13.3679 19.1896 13.1602 19.2287L9.41016 19.9365C9.24156 19.9689 9.06761 19.9595 8.9035 19.9091C8.73939 19.8587 8.59011 19.7689 8.46873 19.6475C8.34734 19.5261 8.25752 19.3768 8.20714 19.2127C8.15675 19.0486 8.14733 18.8746 8.17969 18.7061L8.18027 18.7084ZM22.1842 23.2617H7.81816C7.5436 23.2552 7.28245 23.1416 7.09056 22.9451C6.89866 22.7486 6.79123 22.4849 6.79123 22.2103C6.79123 21.9356 6.89866 21.6719 7.09056 21.4754C7.28245 21.2789 7.5436 21.1653 7.81816 21.1588H22.1818C22.4564 21.1653 22.7175 21.2789 22.9094 21.4754C23.1013 21.6719 23.2088 21.9356 23.2088 22.2103C23.2088 22.4849 23.1013 22.7486 22.9094 22.9451C22.7175 23.1416 22.4564 23.2552 22.1818 23.2617H22.1842Z" fill="#1581B1" />
                                            </svg>
                                        </a>
                                    </button>
                                    <button class="btn">
                                        <a href="{{ route('admin.subject.delete', $subject->id) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                <g clip-path="url(#clip0_547_548)">
                                                    <rect width="30" height="30" rx="6" fill="#1581B1" />
                                                    <path d="M21.7479 11.17V21.7043C21.7479 23.1224 20.5625 24.2704 19.1037 24.2704H10.8964C9.43334 24.2704 8.2522 23.1224 8.2522 21.7043V11.17H21.7479Z" fill="white" />
                                                    <path d="M23 8.15639V8.85223C22.9998 8.95875 22.9787 9.06418 22.9377 9.16252C22.8968 9.26085 22.8369 9.35016 22.7614 9.42535C22.686 9.50053 22.5965 9.56012 22.498 9.60071C22.3995 9.6413 22.294 9.66209 22.1875 9.6619H7.81003C7.70363 9.66209 7.59824 9.64128 7.49991 9.60066C7.40157 9.56004 7.31221 9.50041 7.23696 9.4252C7.16171 9.34998 7.10204 9.26065 7.06138 9.16233C7.02072 9.06401 6.99986 8.95863 7 8.85223V8.15639C6.99981 8.04985 7.02062 7.94431 7.06123 7.84581C7.10184 7.74731 7.16146 7.65777 7.23668 7.58232C7.31191 7.50686 7.40126 7.44697 7.49963 7.40605C7.59801 7.36514 7.70348 7.34401 7.81003 7.34387H10.7094C10.7088 7.16723 10.7432 6.99223 10.8105 6.82893C10.8778 6.66563 10.9768 6.51726 11.1017 6.39235C11.2266 6.26745 11.375 6.16849 11.5383 6.10115C11.7016 6.03382 11.8766 5.99944 12.0532 6.00001H17.9439C18.1204 5.99991 18.2952 6.03461 18.4583 6.10211C18.6214 6.16961 18.7696 6.2686 18.8944 6.39341C19.0192 6.51821 19.1182 6.6664 19.1857 6.82948C19.2532 6.99257 19.2879 7.16736 19.2878 7.34387H22.1871C22.4026 7.34406 22.6092 7.42971 22.7616 7.58204C22.914 7.73436 22.9997 7.94092 23 8.15639Z" fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_547_548">
                                                        <rect width="30" height="30" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
