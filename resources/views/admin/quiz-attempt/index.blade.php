@extends('admin.layout.master')
@section('content')
    @include('admin.layout.banner')
    <div class="quizDiv">
        <div class="container-fluid">
            <div class="headingSec d-flex">
                <h2>Name of quiz</h2>
                <div class="btn-group">
                    <h5>05:25</h5>
                    <button class="btn">Save & Exit</button>
                </div>
            </div>
            <div class="quizBox">
                <div class="question">
                    <div class="questionBox">
                        <h6>Question No 1</h6>
                        <p>This is dummy question to check the feel of the quiz about the doctors test, when should the needle on the system air pressure gauge stop climbing? (p. 95).</p>
                    </div>
                    <div class="flag">
                        <button class="btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <g clip-path="url(#clip0_423_1156)">
                                <path d="M13.2131 6.09618C12.8008 5.81823 12.2749 5.64566 11.7663 5.47876C11.3035 5.32689 10.8281 5.17087 10.4905 4.94744C10.6985 4.53556 11.1148 3.74071 11.6094 2.95239C12.8828 0.923098 13.4835 0.820312 13.591 0.820312C13.8175 0.820312 14.0011 0.636672 14.0011 0.410156C14.0011 0.183641 13.8175 0 13.591 0C11.6699 0 10.7017 0.586168 9.76533 1.15303C8.88664 1.68503 8.05667 2.1875 6.36456 2.1875C5.59212 2.1875 4.95491 2.08671 4.35925 1.87034C3.83255 1.67902 3.41053 1.42352 2.96373 1.15303C2.80112 1.05459 2.63424 0.953859 2.46094 0.855504V8.91704C2.48691 8.93277 2.51262 8.94821 2.53889 8.96413C2.99994 9.24328 3.4767 9.53189 4.07917 9.75075C4.75798 9.99731 5.50553 10.1172 6.36456 10.1172C8.28565 10.1172 9.25386 9.53102 10.1902 8.96416C11.0689 8.43216 11.8989 7.92969 13.591 7.92969C13.8175 7.92969 14.0011 7.74605 14.0011 7.51953C14.0011 6.92754 13.736 6.44864 13.2131 6.09618Z" fill="#1581B1"/>
                                <path d="M0 13.9999V0.820312C0 0.367254 0.367008 0 0.819738 0C1.27247 0 1.63948 0.367254 1.63948 0.820312V13.9999H0Z" fill="#1581B1"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_423_1156">
                                <rect width="14" height="14" fill="white"/>
                                </clipPath>
                            </defs>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="options">
                    <button class="nav-link pill" type="button">Timed</button>
                    <button class="nav-link pill" type="button">Timed</button>
                    <button class="nav-link pill" type="button">Timed</button>
                    <button class="nav-link pill" type="button">Timed</button>
                </div>
                <div class="navigation">
                    <button class="previous btn">PREVIOUS</button>
                    <button class="next btn">NEXT</button>
                </div>
            </div>
        </div>
    </div>
@endsection