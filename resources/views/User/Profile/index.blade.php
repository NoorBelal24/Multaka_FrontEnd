@extends('masterForSignedUser')


@section('css')
    <link href="{{ asset('AdminAssets/css/users/user-profile.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('AdminAssets/plugins/src/drag-and-drop/dragula/dragula.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('AdminAssets/plugins/css/light/drag-and-drop/dragula/example.css') }}" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('AdminAssets/plugins/src/glightbox/glightbox.min.css') }}">
    <link href="{{ asset('AdminAssets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('AdminAssets/css/components/timeline.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('AdminAssets/css/profile.css') }}" rel="stylesheet" type="text/css" />



    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.worker.min.js"></script>
@endsection


@section('content')
    <div class="contaner mx-auto">
        <div class="row contaner">
            <!-- Content -->
            <div class="contaner col-xl-4 col-lg-4 col-md-12 col-sm-12 layout-top-spacing-profile">
                <div class="user-profile scrollableCover-div ">
                    {{-- المعلومات العامة --}}
                    @include('User.Profile.coverInfo')
                    @include('User.Profile.popUp.editCoverInfo')
                </div>
            </div>

            <div class="contaner col-xl-8 col-lg-8 col-md-12 col-sm-12 layout-top-spacing-profile">
                <div class="widget-content widget-content-area">

                    <div id="tabsSimple" class="col-xl-12 col-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4></h4>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content widget-content-area">
                                <div class="simple-tab">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        {{-- خطة الحفظ --}}
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="myPlane-tab-icon" data-bs-toggle="tab"
                                                data-bs-target="#home-tab-icon-pane" type="button" role="tab"
                                                aria-controls="home-tab-icon-pane" aria-selected="true">
                                                <img class="calenderImg"
                                                    src="{{ asset('AdminAssets/img/icon/pdf-files-icon.svg') }}"
                                                    alt="" style="width: 24px; height: 24px;">
                                                خطتي في الحفظ
                                            </button>
                                        </li>

                                        {{-- تقييم تفاعلي --}}
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab-icon" data-bs-toggle="tab"
                                                data-bs-target="#profile-tab-icon-pane" type="button" role="tab"
                                                aria-controls="profile-tab-icon-pane" aria-selected="false">
                                                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg> --}}
                                                <img class="calenderImg"
                                                    src="{{ asset('AdminAssets/img/icon/evaluation-icon.svg') }}"
                                                    alt="" style="width: 24px; height: 24px;">

                                                تقييم تفاعلي
                                            </button>
                                        </li>

                                        {{-- الشهادات --}}
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="Certificates-tab-icon" data-bs-toggle="tab"
                                                data-bs-target="#Certificates-tab-icon-pane" type="button" role="tab"
                                                aria-controls="contact-tab-icon-pane" aria-selected="false">
                                                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-phone">
                                                <path
                                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                                </path>

                                            </svg> --}}
                                                <img class="calenderImg"
                                                    src="{{ asset('AdminAssets/img/icon/certificate-icon.svg') }}"
                                                    alt="" style="width: 24px; height: 24px;">

                                                الشهادات الحاصل عليها
                                            </button>
                                        </li>

                                        {{-- الدورات --}}
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="dawrat-tab-icon" data-bs-toggle="tab"
                                                data-bs-target="#dawrat-tab-icon-pane" type="button" role="tab"
                                                aria-controls="contact-tab-icon-pane" aria-selected="false">
                                                <img class="calenderImg"
                                                    src="{{ asset('AdminAssets/img/icon/dawrat-v-icon.svg') }}"
                                                    alt="" style="width: 20px; height: 20px;" />

                                                دورات التثبيت المشترك فيها
                                            </button>
                                        </li>



                                        {{-- طلابي --}}
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="student-tab-icon" data-bs-toggle="tab"
                                                data-bs-target="#myStudent" type="button" role="tab"
                                                aria-controls="contact-tab-icon-pane" aria-selected="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-user">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg>
                                                طلابي
                                            </button>
                                        </li>
                                    </ul>

                                    <div class="tab-content scrollable-div" id="myTabContent">
                                        {{-- تحميل الخطة --}}
                                        <div class="tab-pane fade show active" id="home-tab-icon-pane" role="tabpanel"
                                            aria-labelledby="myPlane-tab-icon22" tabindex="0">
                                            @include('User.Profile.myPlane')
                                        </div>


                                        {{-- تقييم التفاعل --}}
                                        <div class="tab-pane fade" id="profile-tab-icon-pane" role="tabpanel"
                                            aria-labelledby="profile-tab-icon" tabindex="0">
                                            @include('User.Profile.evaluation')
                                        </div>

                                        {{-- الشهادات الحاصل عليها  --}}
                                        {{-- <div class="tab-pane fade" id="dawrat-tab-icon-pane" role="tabpanel"
                                            aria-labelledby="dawrat-tab-icon" tabindex="0">
                                            @include('User.Profile.dawratTathbeet')
                                        </div> --}}

                                        {{-- الشهادات الحاصل عليها  --}}
                                        <div class="tab-pane fade" id="dawrat-tab-icon-pane" role="tabpanel"
                                            aria-labelledby="dawrat-tab-icon" tabindex="0">
                                            @include('User.Profile.dawratTathbeetCopy')
                                        </div>


                                        {{-- الشهادات الحاصل عليها  --}}
                                        <div class="tab-pane fade" id="Certificates-tab-icon-pane" role="tabpanel"
                                            aria-labelledby="Certificates-tab-icon" tabindex="0">
                                            @include('User.Profile.myCertificates')
                                        </div>


                                        {{-- طلابي --}}
                                        <div class="tab-pane fade" id="myStudent" role="tabpanel"
                                            aria-labelledby="student-tab-icon" tabindex="0">
                                            @include('User.Profile.myStudents')
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
            </div>
        </div>

        {{-- pop Edit evaluation --}}
        @include('User.Profile.popUp.editEvaluated')
        {{-- pop Edit Certificates --}}
        @include('User.Profile.popUp.editCertificates')
        {{-- pop add Certificates --}}
        @include('User.Profile.popUp.addCertificates')
        {{-- pop marks --}}
        @include('User.Profile.popUp.marksForDawrat')



    </div>
@endsection


@section('script')
    <script src="{{ asset('AdminAssets/plugins/src/drag-and-drop/dragula/dragula.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('AdminAssets/plugins/src/drag-and-drop/dragula/custom-dragula.js') }}"></script>
    <script src="{{ asset('AdminAssets/plugins/src/glightbox/glightbox.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/plugins/src/glightbox/custom-glightbox.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/js/scrollspyNav.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        // create plane
        document.getElementById("btn-addPlane").addEventListener("click", function() {
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "تمت إضافة الخطة بنجاح",
                showConfirmButton: false,
                timer: 1500
            });
        });

        // download plane
        document.getElementById("btn-dawonLoadePlane").addEventListener("click", function() {
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "تمت تنزيل الخطة بنجاح",
                showConfirmButton: false,
                timer: 1500
            });
        });


        // pop reting
        $(document).ready(function() {
            $('.btn-addRating').on('click', function() {
                $('#addRating').modal('show');
            });

            $('#btn-saveAddRating').on('click', function() {
                $('#addRating').modal('hide');
            });
        });


        // add Student
        document.getElementById("saveAddRating").addEventListener("click", function() {
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "تم التقييم",
                showConfirmButton: false,
                timer: 1500
            });
        });

        $(document).ready(function() {
            $('.btn-marksPop').on('click', function() {
                $('#marksPop').modal('show');
            });
        });


        //=======================================================================
        // {{-- pop up for Edit evalution --}}
        //=======================================================================
        $(document).ready(function() {
            $('.btn-edie-Evalution').on('click', function() {
                $('#edie-Evalution').modal('show');
            });
            $('#btn-edie-Evalution').on('click', function() {
                $('#edie-Evalution').modal('hide');
            });
        });

        // pop change rating

        document.getElementById("saveChangeRating").addEventListener("click", function() {
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "تم تغيير التقييم",
                showConfirmButton: false,
                timer: 1500
            });
        });

        // delete ratting
        const deleteButtons = document.querySelectorAll(".btn-deleteEvalution");
        deleteButtons.forEach(button => {
            button.addEventListener("click", function() {
                Swal.fire({
                    title: "هل أنت متأكد من حذف التقييم ؟",
                    text: "لن تتمكن من استعادته !",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "نعم، احذف!",
                    cancelButtonText: "إلغاء"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            "تم الحذف!",
                            "تم حذف التقييم بنجاح.",
                            "success"
                        );
                    }
                });
            });
        });
        // ----------------------------------------------------------------------------
        //                          Certificate
        // ----------------------------------------------------------------------------

        $(document).ready(function() {
            $('.btn-addCertificate').on('click', function() {
                $('#addCertificate').modal('show');
            });

            $('#btn-addCertificate').on('click', function() {
                $('#addCertificate').modal('hide');
            });
        });

        document.getElementById("saveAddCertificate").addEventListener("click", function() {
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "تم إضافة الشهادة",
                showConfirmButton: false,
                timer: 1500
            });
        });

        // edit
        $(document).ready(function() {
            $('.btn-edie-Certificate').on('click', function() {
                $('#editCertificate').modal('show');

            });

            $('#btn-edie-Certificate').on('click', function() {
                $('#editCertificate').modal('hide');
            });
        });

        // pop change rating

        document.getElementById("saveEditCertificate").addEventListener("click", function() {
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "تم تغيير الشهادة",
                showConfirmButton: false,
                timer: 1500
            });
        });

        //  pop delete
        const deleteButtons2 = document.querySelectorAll(".btn-deleteCertificate");
        deleteButtons2.forEach(button => {
            button.addEventListener("click", function() {
                Swal.fire({
                    title: "هل أنت متأكد من حذف هذه الشهادة ؟",
                    text: "لن تتمكن من استعادتها !",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "نعم، احذف!",
                    cancelButtonText: "إلغاء"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            "تم الحذف!",
                            "تم حذف الشهادة بنجاح.",
                            "success"
                        );
                    }
                });
            });
        });


        // ----------------------------------------------------------------------------
        //                          edit cover page
        // ----------------------------------------------------------------------------


        $(document).ready(function() {
            $('.btn-edit').on('click', function() {
                $('#editModal').modal('show');
            });
            $('#saveChanges').on('click', function() {
                $('#editModal').modal('hide');
            });
        });


        document.getElementById("saveChanges").addEventListener("click", function() {
            Swal.fire({
                title: "هل تريد حفظ ما تم تعديله ؟؟",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: "نعم",
                denyButtonText: `لا`
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire("تم التعديل بنجاح!", "", "success");
                } else if (result.isDenied) {
                    Swal.fire("تم إلغاء التعديلات السابقة", "", "info");
                }
            });
        });




        // ----------------------------------------------------------------------------
        //                          call whatsApp
        // ----------------------------------------------------------------------------

        function contactStudent(studentNumber) {
            // عرض تنبيه SweetAlert
            Swal.fire({
                title: 'هل تريد التواصل مع الطالب على الواتساب مباشرة؟',
                text: 'سيتم تحويلك إلى تطبيق الواتساب إذا وافقت',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'نعم، تواصل الآن',
                cancelButtonText: 'لا، إلغاء',

                customClass: {
                    confirmButton: 'custom-confirm-button',
                    cancelButton: 'custom-close-button'

                }

            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'https://wa.me/' + studentNumber;
                }
            });
        }
    </script>
@endsection
