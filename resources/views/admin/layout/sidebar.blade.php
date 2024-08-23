<div class="sidebar expanded">
    <div class="collapse collapse-horizontal show" id="collapseWidthExample">
        <div class="buttonBox">
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                <i class="bi bi-list"></i>
            </button>
        </div>
        <div class="logoBox">
            <img src="{{ asset('assets/img/logo.png') }}" alt="">
        </div>
        <ul class="navbar-nav flex-grow-1">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.024 22C16.277 22 17.352 21.934 18.251 21.735C19.161 21.532 19.949 21.18 20.565 20.565C21.18 19.949 21.532 19.161 21.735 18.251C21.935 17.352 22 16.277 22 15.024V12C22 11.4696 21.7893 10.9609 21.4142 10.5858C21.0391 10.2107 20.5304 10 20 10H12C11.4696 10 10.9609 10.2107 10.5858 10.5858C10.2107 10.9609 10 11.4696 10 12V20C10 20.5304 10.2107 21.0391 10.5858 21.4142C10.9609 21.7893 11.4696 22 12 22H15.024ZM2 15.024C2 16.277 2.066 17.352 2.266 18.251C2.468 19.161 2.82 19.949 3.436 20.565C4.051 21.18 4.839 21.532 5.749 21.735C5.836 21.754 5.924 21.772 6.012 21.789C7.096 21.999 8 21.081 8 19.976V12C8 11.4696 7.78929 10.9609 7.41421 10.5858C7.03914 10.2107 6.53043 10 6 10H4C3.46957 10 2.96086 10.2107 2.58579 10.5858C2.21071 10.9609 2 11.4696 2 12V15.024ZM8.976 2C7.723 2 6.648 2.066 5.749 2.266C4.839 2.468 4.051 2.82 3.435 3.436C2.82 4.051 2.468 4.839 2.265 5.749C2.249 5.824 2.233 5.899 2.219 5.974C2.004 7.073 2.939 8 4.059 8H19.976C21.081 8 21.999 7.096 21.789 6.012C21.7719 5.92409 21.7535 5.83641 21.734 5.749C21.532 4.839 21.18 4.051 20.564 3.435C19.949 2.82 19.161 2.468 18.251 2.265C17.352 2.065 16.277 2 15.024 2H8.976Z" fill="white" />
                    </svg>
                    <h4> Dashboard</h4>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12.934V15.066C22 15.952 22 16.716 21.918 17.328C21.83 17.983 21.631 18.612 21.121 19.121C20.611 19.631 19.983 19.83 19.328 19.918C18.716 20 17.952 20 17.066 20H10.934C10.048 20 9.284 20 8.672 19.918C8.017 19.83 7.388 19.631 6.879 19.121C6.369 18.611 6.17 17.983 6.082 17.328C6 16.716 6 15.952 6 15.066V12.934C6 12.048 6 11.284 6.082 10.672C6.17 10.017 6.369 9.388 6.879 8.879C7.389 8.369 8.017 8.17 8.672 8.082C9.284 8 10.048 8 10.934 8H17.066C17.952 8 18.716 8 19.328 8.082C19.983 8.17 20.612 8.369 21.121 8.879C21.631 9.389 21.83 10.017 21.918 10.672C22 11.284 22 12.048 22 12.934ZM11 14C11 13.606 11.0776 13.2159 11.2284 12.8519C11.3791 12.488 11.6001 12.1573 11.8787 11.8787C12.1573 11.6001 12.488 11.3791 12.8519 11.2284C13.2159 11.0776 13.606 11 14 11C14.394 11 14.7841 11.0776 15.1481 11.2284C15.512 11.3791 15.8427 11.6001 16.1213 11.8787C16.3999 12.1573 16.6209 12.488 16.7716 12.8519C16.9224 13.2159 17 13.606 17 14C17 14.7956 16.6839 15.5587 16.1213 16.1213C15.5587 16.6839 14.7956 17 14 17C13.2044 17 12.4413 16.6839 11.8787 16.1213C11.3161 15.5587 11 14.7956 11 14Z" fill="white" fill-opacity="0.5" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9989 7.004C17.7119 7 17.4189 7 17.1209 7H10.8819C10.0389 7 9.21894 7 8.53994 7.091C7.77394 7.194 6.89994 7.445 6.17294 8.171C5.44594 8.898 5.19494 9.773 5.09294 10.539C5.00194 11.218 5.00194 12.037 5.00194 12.881V15.119C5.00194 15.412 5.00194 15.702 5.00594 15.984C4.94322 15.9812 4.88055 15.9775 4.81794 15.973C4.44494 15.943 4.07294 15.88 3.71094 15.708C3.08998 15.4118 2.58971 14.9112 2.29394 14.29C2.12194 13.93 2.05794 13.557 2.02894 13.184C2.00466 12.7578 1.99565 12.3309 2.00194 11.904V8.934C2.00194 8.048 2.00194 7.284 2.08394 6.672C2.17194 6.017 2.37094 5.388 2.88094 4.879C3.39094 4.369 4.01894 4.17 4.67394 4.082C5.28594 4 6.04994 4 6.93594 4H14.5409C14.9629 4 15.3259 4 15.6499 4.07C16.208 4.19354 16.7192 4.47396 17.1233 4.87824C17.5274 5.28252 17.8076 5.79384 17.9309 6.352C17.9759 6.552 17.9919 6.768 17.9989 7.004Z" fill="white" fill-opacity="0.5" />
                    </svg>
                    <h4>Payment Info</h4>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('quiz') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.207 10.2931C10.1148 10.1976 10.0044 10.1214 9.8824 10.069C9.7604 10.0166 9.62918 9.98903 9.4964 9.98788C9.36362 9.98673 9.23194 10.012 9.10905 10.0623C8.98615 10.1126 8.8745 10.1868 8.78061 10.2807C8.68671 10.3746 8.61246 10.4863 8.56218 10.6092C8.5119 10.7321 8.4866 10.8638 8.48775 10.9965C8.4889 11.1293 8.51649 11.2605 8.5689 11.3825C8.62131 11.5045 8.69749 11.6149 8.793 11.7071L10.586 13.5001L8.793 15.2931C8.69749 15.3854 8.62131 15.4957 8.5689 15.6177C8.51649 15.7397 8.4889 15.871 8.48775 16.0037C8.4866 16.1365 8.5119 16.2682 8.56218 16.3911C8.61246 16.514 8.68671 16.6256 8.78061 16.7195C8.8745 16.8134 8.98615 16.8877 9.10905 16.938C9.23194 16.9882 9.36362 17.0135 9.4964 17.0124C9.62918 17.0112 9.7604 16.9836 9.8824 16.9312C10.0044 16.8788 10.1148 16.8026 10.207 16.7071L12 14.9141L13.793 16.7071C13.9816 16.8893 14.2342 16.9901 14.4964 16.9878C14.7586 16.9855 15.0094 16.8804 15.1948 16.695C15.3802 16.5095 15.4854 16.2587 15.4877 15.9965C15.49 15.7343 15.3892 15.4817 15.207 15.2931L13.414 13.5001L15.207 11.7071C15.3892 11.5185 15.49 11.2659 15.4877 11.0037C15.4854 10.7415 15.3802 10.4907 15.1948 10.3053C15.0094 10.1199 14.7586 10.0147 14.4964 10.0125C14.2342 10.0102 13.9816 10.111 13.793 10.2931L12 12.0861L10.207 10.2931ZM12.482 2.00013C13.161 1.99913 13.763 1.99813 14.32 2.22813C14.876 2.45813 15.301 2.88613 15.78 3.36613C16.73 4.31913 17.681 5.27013 18.634 6.21913C19.114 6.69913 19.541 7.12413 19.772 7.68013C20.002 8.23713 20.002 8.84013 20 9.51813C19.996 12.0341 20 14.5501 20 17.0661C20 17.9521 20 18.7161 19.918 19.3281C19.83 19.9831 19.631 20.6121 19.121 21.1211C18.611 21.6311 17.983 21.8301 17.328 21.9181C16.716 22.0001 15.952 22.0001 15.066 22.0001H8.934C8.048 22.0001 7.284 22.0001 6.672 21.9181C6.017 21.8301 5.388 21.6311 4.879 21.1211C4.369 20.6111 4.17 19.9831 4.082 19.3281C4 18.7161 4 17.9521 4 17.0661V6.93413C4 6.04813 4 5.28413 4.082 4.67213C4.17 4.01713 4.369 3.38813 4.879 2.87913C5.389 2.36913 6.017 2.17013 6.672 2.08213C7.284 2.00013 8.048 2.00013 8.934 2.00013C10.117 2.00013 11.299 2.00213 12.482 2.00013Z" fill="white" fill-opacity="0.5" />
                    </svg>
                    <h4>Quizes</h4>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.quiz.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.207 10.2931C10.1148 10.1976 10.0044 10.1214 9.8824 10.069C9.7604 10.0166 9.62918 9.98903 9.4964 9.98788C9.36362 9.98673 9.23194 10.012 9.10905 10.0623C8.98615 10.1126 8.8745 10.1868 8.78061 10.2807C8.68671 10.3746 8.61246 10.4863 8.56218 10.6092C8.5119 10.7321 8.4866 10.8638 8.48775 10.9965C8.4889 11.1293 8.51649 11.2605 8.5689 11.3825C8.62131 11.5045 8.69749 11.6149 8.793 11.7071L10.586 13.5001L8.793 15.2931C8.69749 15.3854 8.62131 15.4957 8.5689 15.6177C8.51649 15.7397 8.4889 15.871 8.48775 16.0037C8.4866 16.1365 8.5119 16.2682 8.56218 16.3911C8.61246 16.514 8.68671 16.6256 8.78061 16.7195C8.8745 16.8134 8.98615 16.8877 9.10905 16.938C9.23194 16.9882 9.36362 17.0135 9.4964 17.0124C9.62918 17.0112 9.7604 16.9836 9.8824 16.9312C10.0044 16.8788 10.1148 16.8026 10.207 16.7071L12 14.9141L13.793 16.7071C13.9816 16.8893 14.2342 16.9901 14.4964 16.9878C14.7586 16.9855 15.0094 16.8804 15.1948 16.695C15.3802 16.5095 15.4854 16.2587 15.4877 15.9965C15.49 15.7343 15.3892 15.4817 15.207 15.2931L13.414 13.5001L15.207 11.7071C15.3892 11.5185 15.49 11.2659 15.4877 11.0037C15.4854 10.7415 15.3802 10.4907 15.1948 10.3053C15.0094 10.1199 14.7586 10.0147 14.4964 10.0125C14.2342 10.0102 13.9816 10.111 13.793 10.2931L12 12.0861L10.207 10.2931ZM12.482 2.00013C13.161 1.99913 13.763 1.99813 14.32 2.22813C14.876 2.45813 15.301 2.88613 15.78 3.36613C16.73 4.31913 17.681 5.27013 18.634 6.21913C19.114 6.69913 19.541 7.12413 19.772 7.68013C20.002 8.23713 20.002 8.84013 20 9.51813C19.996 12.0341 20 14.5501 20 17.0661C20 17.9521 20 18.7161 19.918 19.3281C19.83 19.9831 19.631 20.6121 19.121 21.1211C18.611 21.6311 17.983 21.8301 17.328 21.9181C16.716 22.0001 15.952 22.0001 15.066 22.0001H8.934C8.048 22.0001 7.284 22.0001 6.672 21.9181C6.017 21.8301 5.388 21.6311 4.879 21.1211C4.369 20.6111 4.17 19.9831 4.082 19.3281C4 18.7161 4 17.9521 4 17.0661V6.93413C4 6.04813 4 5.28413 4.082 4.67213C4.17 4.01713 4.369 3.38813 4.879 2.87913C5.389 2.36913 6.017 2.17013 6.672 2.08213C7.284 2.00013 8.048 2.00013 8.934 2.00013C10.117 2.00013 11.299 2.00213 12.482 2.00013Z" fill="white" fill-opacity="0.5" />
                    </svg>
                    <h4>Quiz Questions</h4>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.subject.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.207 10.2931C10.1148 10.1976 10.0044 10.1214 9.8824 10.069C9.7604 10.0166 9.62918 9.98903 9.4964 9.98788C9.36362 9.98673 9.23194 10.012 9.10905 10.0623C8.98615 10.1126 8.8745 10.1868 8.78061 10.2807C8.68671 10.3746 8.61246 10.4863 8.56218 10.6092C8.5119 10.7321 8.4866 10.8638 8.48775 10.9965C8.4889 11.1293 8.51649 11.2605 8.5689 11.3825C8.62131 11.5045 8.69749 11.6149 8.793 11.7071L10.586 13.5001L8.793 15.2931C8.69749 15.3854 8.62131 15.4957 8.5689 15.6177C8.51649 15.7397 8.4889 15.871 8.48775 16.0037C8.4866 16.1365 8.5119 16.2682 8.56218 16.3911C8.61246 16.514 8.68671 16.6256 8.78061 16.7195C8.8745 16.8134 8.98615 16.8877 9.10905 16.938C9.23194 16.9882 9.36362 17.0135 9.4964 17.0124C9.62918 17.0112 9.7604 16.9836 9.8824 16.9312C10.0044 16.8788 10.1148 16.8026 10.207 16.7071L12 14.9141L13.793 16.7071C13.9816 16.8893 14.2342 16.9901 14.4964 16.9878C14.7586 16.9855 15.0094 16.8804 15.1948 16.695C15.3802 16.5095 15.4854 16.2587 15.4877 15.9965C15.49 15.7343 15.3892 15.4817 15.207 15.2931L13.414 13.5001L15.207 11.7071C15.3892 11.5185 15.49 11.2659 15.4877 11.0037C15.4854 10.7415 15.3802 10.4907 15.1948 10.3053C15.0094 10.1199 14.7586 10.0147 14.4964 10.0125C14.2342 10.0102 13.9816 10.111 13.793 10.2931L12 12.0861L10.207 10.2931ZM12.482 2.00013C13.161 1.99913 13.763 1.99813 14.32 2.22813C14.876 2.45813 15.301 2.88613 15.78 3.36613C16.73 4.31913 17.681 5.27013 18.634 6.21913C19.114 6.69913 19.541 7.12413 19.772 7.68013C20.002 8.23713 20.002 8.84013 20 9.51813C19.996 12.0341 20 14.5501 20 17.0661C20 17.9521 20 18.7161 19.918 19.3281C19.83 19.9831 19.631 20.6121 19.121 21.1211C18.611 21.6311 17.983 21.8301 17.328 21.9181C16.716 22.0001 15.952 22.0001 15.066 22.0001H8.934C8.048 22.0001 7.284 22.0001 6.672 21.9181C6.017 21.8301 5.388 21.6311 4.879 21.1211C4.369 20.6111 4.17 19.9831 4.082 19.3281C4 18.7161 4 17.9521 4 17.0661V6.93413C4 6.04813 4 5.28413 4.082 4.67213C4.17 4.01713 4.369 3.38813 4.879 2.87913C5.389 2.36913 6.017 2.17013 6.672 2.08213C7.284 2.00013 8.048 2.00013 8.934 2.00013C10.117 2.00013 11.299 2.00213 12.482 2.00013Z" fill="white" fill-opacity="0.5" />
                    </svg>
                    <h4>Subject</h4>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('flashcard') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22C6.477 22 2 17.523 2 12ZM8 10C8 9.73478 8.10536 9.48043 8.29289 9.29289C8.48043 9.10536 8.73478 9 9 9H15C15.2652 9 15.5196 9.10536 15.7071 9.29289C15.8946 9.48043 16 9.73478 16 10C16 10.2652 15.8946 10.5196 15.7071 10.7071C15.5196 10.8946 15.2652 11 15 11H9C8.73478 11 8.48043 10.8946 8.29289 10.7071C8.10536 10.5196 8 10.2652 8 10ZM8 14C8 13.7348 8.10536 13.4804 8.29289 13.2929C8.48043 13.1054 8.73478 13 9 13H15C15.2652 13 15.5196 13.1054 15.7071 13.2929C15.8946 13.4804 16 13.7348 16 14C16 14.2652 15.8946 14.5196 15.7071 14.7071C15.5196 14.8946 15.2652 15 15 15H9C8.73478 15 8.48043 14.8946 8.29289 14.7071C8.10536 14.5196 8 14.2652 8 14Z" fill="white" fill-opacity="0.5" />
                    </svg>
                    <h4>Flashcards</h4>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('progress') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9703 3.3437C13.0166 2.88543 10.9834 2.88543 9.02975 3.3437C6.20842 4.00549 4.0055 6.20841 3.3437 9.02975C2.88543 10.9834 2.88543 13.0166 3.3437 14.9703C4.0055 17.7916 6.20842 19.9945 9.02975 20.6563C10.9834 21.1146 13.0166 21.1146 14.9703 20.6563C17.7916 19.9945 19.9945 17.7916 20.6563 14.9703C21.1146 13.0166 21.1146 10.9834 20.6563 9.02975C19.9945 6.20842 17.7916 4.00549 14.9703 3.3437ZM12 7.57085C12.3314 7.57085 12.6 7.83948 12.6 8.17085V9.59335C12.6 9.92472 12.3314 10.1933 12 10.1933C11.6686 10.1933 11.4 9.92472 11.4 9.59335V8.17085C11.4 7.83948 11.6686 7.57085 12 7.57085ZM15.8357 9.78543C16.0014 10.0724 15.9031 10.4394 15.6161 10.605L14.3843 11.3162C14.0973 11.4819 13.7304 11.3836 13.5647 11.0966C13.399 10.8096 13.4973 10.4427 13.7843 10.277L15.0161 9.56581C15.3031 9.40013 15.6701 9.49845 15.8357 9.78543ZM8.16424 9.78543C8.32992 9.49845 8.69688 9.40013 8.98385 9.56581L10.2158 10.2771C10.5027 10.4427 10.6011 10.8097 10.4354 11.0967C10.2697 11.3836 9.90274 11.482 9.61577 11.3163L8.38385 10.605C8.09688 10.4394 7.99855 10.0724 8.16424 9.78543ZM10.4354 12.9033C10.6011 13.1903 10.5027 13.5573 10.2158 13.7229L8.98385 14.4342C8.69688 14.5999 8.32992 14.5015 8.16424 14.2146C7.99855 13.9276 8.09688 13.5606 8.38385 13.395L9.61577 12.6837C9.90274 12.518 10.2697 12.6164 10.4354 12.9033ZM13.5647 12.9034C13.7304 12.6164 14.0973 12.5181 14.3843 12.6838L15.6161 13.395C15.9031 13.5606 16.0014 13.9276 15.8357 14.2146C15.6701 14.5015 15.3031 14.5999 15.0161 14.4342L13.7843 13.723C13.4973 13.5573 13.399 13.1904 13.5647 12.9034ZM12 13.8068C12.3314 13.8068 12.6 14.0754 12.6 14.4068V15.8291C12.6 16.1605 12.3314 16.4291 12 16.4291C11.6686 16.4291 11.4 16.1605 11.4 15.8291L11.4 14.4068C11.4 14.0754 11.6686 13.8068 12 13.8068Z" fill="white" fill-opacity="0.5" />
                    </svg>
                    <h4>Progress</h4>
                </a>
            </li>
        </ul>
        <div class="logoutBox mt-auto">
            <button class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.293 14.2931C17.1108 14.4817 17.01 14.7343 17.0123 14.9965C17.0146 15.2587 17.1198 15.5095 17.3052 15.6949C17.4906 15.8803 17.7414 15.9855 18.0036 15.9878C18.2658 15.99 18.5184 15.8892 18.707 15.7071L21.62 12.7941L21.664 12.7481C21.77 12.6544 21.8549 12.5393 21.9131 12.4104C21.9712 12.2814 22.0013 12.1415 22.0013 12.0001C22.0013 11.8586 21.9712 11.7188 21.9131 11.5898C21.8549 11.4609 21.77 11.3457 21.664 11.2521C21.6498 11.2363 21.6351 11.221 21.62 11.2061L18.707 8.29308C18.6148 8.19757 18.5044 8.12139 18.3824 8.06898C18.2604 8.01657 18.1292 7.98898 17.9964 7.98783C17.8636 7.98668 17.7319 8.01198 17.609 8.06226C17.4862 8.11254 17.3745 8.18679 17.2806 8.28069C17.1867 8.37458 17.1125 8.48623 17.0622 8.60913C17.0119 8.73202 16.9866 8.8637 16.9877 8.99648C16.9889 9.12926 17.0165 9.26048 17.0689 9.38249C17.1213 9.50449 17.1975 9.61483 17.293 9.70708L18.586 11.0001H13C12.7348 11.0001 12.4804 11.1054 12.2929 11.293C12.1054 11.4805 12 11.7349 12 12.0001C12 12.2653 12.1054 12.5197 12.2929 12.7072C12.4804 12.8947 12.7348 13.0001 13 13.0001H18.586L17.293 14.2931Z" fill="white" fill-opacity="0.75" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5 2C4.20435 2 3.44129 2.31607 2.87868 2.87868C2.31607 3.44129 2 4.20435 2 5V19C2 19.7956 2.31607 20.5587 2.87868 21.1213C3.44129 21.6839 4.20435 22 5 22H14.5C15.163 22 15.7989 21.7366 16.2678 21.2678C16.7366 20.7989 17 20.163 17 19.5V16.733C16.5406 16.4676 16.2054 16.0306 16.0679 15.5182C15.9305 15.0057 16.0021 14.4597 16.267 14H13C12.4696 14 11.9609 13.7893 11.5858 13.4142C11.2107 13.0391 11 12.5304 11 12C11 11.4696 11.2107 10.9609 11.5858 10.5858C11.9609 10.2107 12.4696 10 13 10H16.267C16.1356 9.77245 16.0503 9.52122 16.016 9.26069C15.9817 9.00015 15.9991 8.73541 16.0671 8.4816C16.1352 8.22779 16.2526 7.98988 16.4127 7.78147C16.5728 7.57307 16.7723 7.39824 17 7.267V4.5C17 3.83696 16.7366 3.20107 16.2678 2.73223C15.7989 2.26339 15.163 2 14.5 2H5Z" fill="white" fill-opacity="0.75" />
                </svg>
                <h4>Logout</h4>
            </button>
        </div>
    </div>
</div>
