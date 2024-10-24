{{-- <div class="overlay"></div>
<div class="search-overlay"></div> --}}

<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">

        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu active">
                <a href="{{ route('AllUsers') }}" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>عام</span>
                    </div>

                </a>
            </li>

            {{-- المشرفون --}}
            <li class="menu">
                <a href="#pages" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <span>المشرفون</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="pages" data-bs-parent="#accordionExample">
                    <li>
                        <a href="{{ route('AllMushrfeenHefethM') }}">مشرفو قسم الحفظ </a>
                        <a href="{{ route('AllMushrfeenHefethM') }}">مشرفات قسم الحفظ </a>
                        <a href="{{ route('AllMushrfeenTathbeetM') }}">مشرفو قسم التثبيت </a>
                        <a href="{{ route('AllMushrfeenTathbeetM') }}">مشرفات قسم التثبيت </a>
                    </li>

                </ul>
            </li>
            {{-- الطلاب --}}
            <li class="menu">
                <a href="#users" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <span>الطلاب</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>

                <ul class="collapse submenu list-unstyled list-group show" id="users"
                    data-bs-parent="#accordionExample">
                    <li class="listTypeUser" data-status="all">
                        <a href="{{ route('AllUsers') }}"> كافة المشاركين </a>
                    </li>


                    <li class="listTypeUser" data-status="hafez">
                        <a href="{{ route('huffaz') }}"> الحافظون والحافظات </a>
                        <ul class="hafezList" style="display:  {{ request()->routeIs('huffaz') ? 'block' : '' }} ">
                            <li class="nested-item huffazData" data-status="all">الكل</li>
                            <li class="nested-item huffazData" data-status="hafezMale">ذكور</li>
                            <li class="nested-item huffazData" data-status="hafezFemale">إناث</li>
                        </ul>
                    </li>

                    <li class="listTypeUser" data-status="activeUser">
                        <a href="{{ route('ActiveUser') }}"> الطلبة المتفاعلون </a>
                        <ul class="activeUserList"
                            style="display:  {{ request()->routeIs('ActiveUser') ? 'block' : '' }} ">
                            <li class="nested-item activeUserData" data-status="all">الكل</li>
                            <li class="nested-item activeUserData" data-status="activeUserMale">ذكور</li>
                            <li class="nested-item activeUserData" data-status="activeUserFemale">إناث</li>
                        </ul>
                    </li>

                    <li class="listTypeUser" data-status="inactiveUser">
                        <a href="{{ route('nonActiveUser') }}"> الطلبة المفصولون </a>
                        <ul class="inactiveUserList"
                            style="display:  {{ request()->routeIs('nonActiveUser') ? 'block' : '' }} ">
                            <li class="nested-item nonactiveUserData" data-status="all">الكل</li>
                            <li class="nested-item nonactiveUserData" data-status="inactiveUserMale">ذكور</li>
                            <li class="nested-item nonactiveUserData" data-status="inactiveUserFemale">إناث</li>
                        </ul>
                    </li>
                </ul>
            </li>

            {{-- لائحة الانتظار --}}
            <li class="menu">

                <a href="#request" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg fill="#506690" height="256px" width="256px" version="1.1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" xml:space="preserve" stroke="#506690">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <g>
                                        <path
                                            d="M354.338,34.205h-61.71c-3.354-9.93-12.752-17.102-23.8-17.102h-17.547C243.359,6.451,230.813,0,217.521,0 s-25.839,6.451-33.76,17.102h-17.547c-11.048,0-20.446,7.172-23.8,17.102H80.701c-18.566,0-33.67,15.105-33.67,33.67v359.148 c0,18.566,15.105,33.67,33.67,33.67h171.023c4.427,0,8.017-3.589,8.017-8.017c0-4.427-3.589-8.017-8.017-8.017H80.701 c-9.725,0-17.637-7.912-17.637-17.637V67.875c0-9.725,7.912-17.637,17.637-17.637h60.394v26.188c0,4.427,3.589,8.017,8.017,8.017 H285.93c4.427,0,8.017-3.589,8.017-8.017V50.238h60.391c9.725,0,17.637,7.912,17.637,17.637v230.881 c0,4.427,3.589,8.017,8.017,8.017c4.427,0,8.017-3.589,8.017-8.017V67.875C388.008,49.309,372.904,34.205,354.338,34.205z M277.914,68.409H157.129V42.252c0-0.011,0.001-0.02,0.001-0.031c0-0.005-0.001-0.011-0.001-0.015 c0.009-5.004,4.08-9.071,9.085-9.071h21.846c2.854,0,5.493-1.517,6.929-3.985c4.781-8.213,13.204-13.117,22.532-13.117 s17.751,4.904,22.532,13.117c1.435,2.467,4.075,3.985,6.929,3.985h21.846c4.999,0,9.067,4.059,9.085,9.055 c0,0.011-0.001,0.02-0.001,0.031c0,0.021,0.003,0.041,0.003,0.062V68.409z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M251.722,410.455H97.269V84.443h17.64c4.427,0,8.017-3.589,8.017-8.017s-3.589-8.017-8.017-8.017H89.253 c-4.427,0-8.017,3.589-8.017,8.017v342.046c0,4.427,3.589,8.017,8.017,8.017h162.47c4.427,0,8.017-3.589,8.017-8.017 C259.739,414.044,256.15,410.455,251.722,410.455z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M345.787,68.409h-25.653c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h17.637v214.311 c0,4.427,3.589,8.017,8.017,8.017s8.017-3.589,8.017-8.017V76.426C353.804,71.999,350.214,68.409,345.787,68.409z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M294.48,171.023h-85.511c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h85.511 c4.427,0,8.017-3.589,8.017-8.017S298.908,171.023,294.48,171.023z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M268.827,136.818h-59.858c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h59.858 c4.427,0,8.017-3.589,8.017-8.017S273.254,136.818,268.827,136.818z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M412.738,448.433l-33.281-33.281v-53.687c0-4.427-3.589-8.017-8.017-8.017c-4.427,0-8.017,3.589-8.017,8.017v57.007 c0,2.126,0.844,4.166,2.348,5.668l35.629,35.629c1.565,1.565,3.617,2.348,5.668,2.348s4.103-0.782,5.668-2.348 C415.869,456.639,415.869,451.563,412.738,448.433z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M371.44,324.944c-51.572,0-93.528,41.956-93.528,93.528S319.869,512,371.44,512s93.528-41.956,93.528-93.528 S423.012,324.944,371.44,324.944z M371.44,495.967c-42.731,0-77.495-34.764-77.495-77.495s34.764-77.495,77.495-77.495 s77.495,34.764,77.495,77.495S414.172,495.967,371.44,495.967z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M176.49,163.55c-3.831-2.217-8.736-0.909-10.954,2.924c-1.624,2.806-4.64,4.548-7.875,4.548 c-5.01,0-9.086-4.076-9.086-9.086s4.076-9.086,9.086-9.086c4.427,0,8.017-3.589,8.017-8.017s-3.589-8.017-8.017-8.017 c-13.851,0-25.119,11.268-25.119,25.119s11.268,25.119,25.119,25.119c8.938,0,17.273-4.81,21.753-12.553 C181.632,170.671,180.322,165.767,176.49,163.55z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M294.48,256.534h-85.511c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h85.511 c4.427,0,8.017-3.589,8.017-8.017S298.908,256.534,294.48,256.534z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M268.827,222.33h-59.858c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h59.858 c4.427,0,8.017-3.589,8.017-8.017S273.254,222.33,268.827,222.33z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M176.49,249.061c-3.831-2.218-8.736-0.91-10.954,2.924c-1.624,2.806-4.64,4.548-7.875,4.548 c-5.01,0-9.086-4.076-9.086-9.086c0-5.01,4.076-9.084,9.086-9.084c4.427,0,8.017-3.589,8.017-8.017s-3.589-8.017-8.017-8.017 c-13.851,0-25.119,11.268-25.119,25.119s11.268,25.119,25.119,25.119c8.938,0,17.273-4.81,21.753-12.553 C181.632,256.183,180.323,251.279,176.49,249.061z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M268.827,342.046h-59.858c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h59.858 c4.427,0,8.017-3.589,8.017-8.017S273.254,342.046,268.827,342.046z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M268.827,307.841h-59.858c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h59.858 c4.427,0,8.017-3.589,8.017-8.017S273.254,307.841,268.827,307.841z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M176.49,334.572c-3.831-2.219-8.736-0.909-10.954,2.924c-1.624,2.806-4.64,4.548-7.875,4.548 c-5.01,0-9.086-4.076-9.086-9.086c0-5.01,4.076-9.086,9.086-9.086c4.427,0,8.017-3.589,8.017-8.017s-3.589-8.017-8.017-8.017 c-13.851,0-25.119,11.268-25.119,25.119c0,13.851,11.268,25.12,25.119,25.12c8.938,0,17.273-4.81,21.753-12.553 C181.632,341.694,180.323,336.79,176.49,334.572z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M217.607,34.205h-0.086c-4.427,0-7.974,3.589-7.974,8.017c0,4.427,3.631,8.017,8.059,8.017 c4.427,0,8.017-3.589,8.017-8.017C225.624,37.794,222.035,34.205,217.607,34.205z">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span>لائحة الانتظار</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>

                <ul class="collapse submenu list-unstyled list-group show" id="request"
                    data-bs-parent="#accordionExample">

                    <li class="listTypeUser" data-status="all">
                        <a href="{{ route('AllwattingList') }}"> كافة الطلبات </a>
                        {{-- <span class="badge badge-primary sidebar-label">New</span> --}}
                    </li>
                    <li class="listTypeUser">
                        <a href="{{ route('AllwattingList.study') }}"> الطلبات المدروسة </a>
                        <ul class="hafezList"
                            style="display:  {{ request()->routeIs('AllwattingList.study') ? 'block' : '' }} ">
                            <li class="nested-item studyRequestData" data-status="all">الكل</li>
                            <li class="nested-item studyRequestData" data-status="studyRequestMale">ذكور</li>
                            <li class="nested-item studyRequestData" data-status="studyRequestFemale">إناث</li>
                        </ul>
                    </li>
                    <li class="listTypeUser">
                        <a href="{{ route('AllwattingList.nonStudy') }}"> الطلبات غير المدروسة </a>
                        <ul class="hafezList"
                            style="display:  {{ request()->routeIs('AllwattingList.nonStudy') ? 'block' : '' }}">
                            <li class="nested-item nonStudyRequestData" data-status="all">الكل</li>
                            <li class="nested-item nonStudyRequestData" data-status="nonStudyRequestMale">ذكور</li>
                            <li class="nested-item nonStudyRequestData" data-status="nonStudyRequestFemale">إناث</li>
                        </ul>
                    </li>
                    <li class="listTypeUser">
                        <a href="{{ route('AllwattingList.reject') }}"> الطلبات المرفوضة </a>
                        <ul class="hafezList"
                            style="display:  {{ request()->routeIs('AllwattingList.reject') ? 'block' : '' }} ">
                            <li class="nested-item rejectRequestData" data-status="all">الكل</li>
                            <li class="nested-item rejectRequestData" data-status="rejectRequestMale">ذكور</li>
                            <li class="nested-item rejectRequestData" data-status="rejectRequestFemale">إناث</li>
                        </ul>
                    </li>
                </ul>
            </li>

            <br><br>
            {{-- دورات التثبيت --}}
            <li class="menu">
                <a href="#tathbeet" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-book">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                        </svg>

                        <span>دورات التثبيت</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="tathbeet" data-bs-parent="#accordionExample">
                    <li>
                        <a> 2024 </a>
                    </li>
                    <li>
                        <a> 2023 </a>
                    </li>
                </ul>
            </li>


            <br><br>
            {{-- الإعلانات --}}
            <li class="menu">
                <a target="_blank" href="../../documentation/index.html" aria-expanded="false"
                    class="dropdown-toggle">
                    <div class="">
                        <svg fill="#506690" width="244px" height="244px" viewBox="0 0 32 32" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M24.98 30.009h-23v-25h14.050l2.022-1.948-0.052-0.052h-16.020c-1.105 0-2 0.896-2 2v25c0 1.105 0.895 2 2 2h23c1.105 0 2-0.895 2-2v-14.646l-2 1.909v12.736zM30.445 1.295c-0.902-0.865-1.898-1.304-2.961-1.304-1.663 0-2.876 1.074-3.206 1.403-0.468 0.462-13.724 13.699-13.724 13.699-0.104 0.106-0.18 0.235-0.219 0.38-0.359 1.326-2.159 7.218-2.176 7.277-0.093 0.302-0.010 0.631 0.213 0.851 0.159 0.16 0.373 0.245 0.591 0.245 0.086 0 0.172-0.012 0.257-0.039 0.061-0.020 6.141-1.986 7.141-2.285 0.132-0.039 0.252-0.11 0.351-0.207 0.631-0.623 12.816-12.618 13.802-13.637 1.020-1.052 1.526-2.146 1.507-3.253-0.019-1.094-0.55-2.147-1.575-3.129zM29.076 6.285c-0.556 0.574-4.914 4.88-12.952 12.798l-0.615 0.607c-0.921 0.285-3.128 0.994-4.796 1.532 0.537-1.773 1.181-3.916 1.469-4.929 1.717-1.715 13.075-13.055 13.506-13.48 0.084-0.084 0.851-0.821 1.795-0.821 0.536 0 1.053 0.244 1.577 0.748 0.627 0.602 0.95 1.179 0.959 1.72 0.010 0.556-0.308 1.171-0.943 1.827z">
                                </path>
                            </g>
                        </svg>
                        <span>الإعلانات</span>
                    </div>
                </a>
            </li>

        </ul>

    </nav>

</div>
