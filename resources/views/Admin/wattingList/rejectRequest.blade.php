@extends('Admin.master')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('AdminAssets/plugins/src/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('AdminAssets/plugins/css/light/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('AdminAssets/plugins/css/light/table/datatable/custom_dt_miscellaneous.css') }}">
    <link href="{{ asset('AdminAssets/css/customPopUp.css') }}" rel="stylesheet" type="text/css" />


    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')
    <div class="row layout-spacing">
        Active User
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <table id="show-hide-col-wattingList" class="table dt-table-hover" style="width:100%">
                        <thead style="border-bottom: none;">
                            <tr>
                                <th class="sorting">الاسم الرباعي</th>
                                <th class="text-center">الجنس</th>
                                <th>تاريخ الميلاد</th>
                                <th>الدولة</th>
                                <th>المدينة</th>
                                <th>القرية/الحي</th>
                                <th>التخصص العلمي</th>
                                <th>رقم الهاتف</th>
                                <th>مقدار الحفظ قبل الملتقى</th>
                                <th>كيف يسر الله لك الانضمام معنا</th>
                                <th>تاريخ الطلب</th>
                                <th>إجراءات</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr class="activeUser hafezFemale rejectRequestMale">
                                <td>
                                    <div class="media">
                                        <div class="avatar me-2">
                                            <img alt="avatar" src="{{ asset('AdminAssets/img/users/profile-7.jpeg') }}"
                                                class="rounded-circle" />
                                        </div>
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">نور بلال مهنا</h6>
                                            <span>shaun.park@mail.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td data-gender="female">أنثى</td>
                                <td>2011/04/25</td>
                                <td>فلسطين</td>
                                <td>رام الله</td>
                                <td>ديرجرير</td>
                                <td>
                                    <p class="mb-0">بكالوريوس</p>
                                    <span class="text-success">علم حاسوب</span>
                                </td>
                                <td>0599778333</td>
                                <td>5 أجزاء</td>
                                <td>عن طريق صديق
                                </td>
                                <td>2011/04/25</td>
                                <td class="text-center">
                                    <div class="action-btns">
                                        <a href="{{ route('profile') }}"
                                            class="action-btn btn-view bs-tooltip me-2 rounded " data-toggle="tooltip"
                                            data-placement="top" title="View Profile">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                        </a>
                                        <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2"
                                            data-toggle="tooltip" data-placement="top" title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                            </svg>
                                        </a>
                                        <a type="button" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip"
                                            data-placement="top" title="Delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash-2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                                <line x1="10" y1="11" x2="10" y2="17">
                                                </line>
                                                <line x1="14" y1="11" x2="14" y2="17">
                                                </line>
                                            </svg>
                                        </a>

                                        <a type="button" class="action-btn btn-recover-delete" bs-tooltip"
                                            data-toggle="tooltip" data-placement="top" title="استرجاع الطلب">
                                            <svg fill="#000000" width="24" height="24" viewBox="0 0 64 64"
                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                                                xmlns:serif="http://www.serif.com/"
                                                style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <rect id="Icons" x="-192" y="-256" width="1280" height="800"
                                                        style="fill:none;"></rect>
                                                    <g id="Icons1" serif:id="Icons">
                                                        <g id="Strike"> </g>
                                                        <g id="H1"> </g>
                                                        <g id="H2"> </g>
                                                        <g id="H3"> </g>
                                                        <g id="list-ul"> </g>
                                                        <g id="hamburger-1"> </g>
                                                        <g id="hamburger-2"> </g>
                                                        <g id="list-ol"> </g>
                                                        <g id="list-task"> </g>
                                                        <g id="trash"> </g>
                                                        <g id="vertical-menu"> </g>
                                                        <g id="horizontal-menu"> </g>
                                                        <g id="sidebar-2"> </g>
                                                        <g id="Pen"> </g>
                                                        <g id="Pen1" serif:id="Pen"> </g>
                                                        <g id="clock"> </g>
                                                        <g id="external-link"> </g>
                                                        <g id="hr"> </g>
                                                        <g id="info"> </g>
                                                        <g id="warning"> </g>
                                                        <g id="plus-circle"> </g>
                                                        <g id="minus-circle"> </g>
                                                        <g id="vue"> </g>
                                                        <g id="cog"> </g>
                                                        <g id="logo"> </g>
                                                        <path
                                                            d="M49.71,20.332l0,29.11c-0.043,3.347 -2.864,6.296 -6.277,6.427c-7.463,0.096 -14.927,0.002 -22.391,0.002c-3.396,-0.043 -6.385,-2.959 -6.429,-6.429l0,-29.11l-4.443,0l0,-4l9.106,0l0,-1.992c0.043,-3.347 2.865,-6.296 6.278,-6.428c3.071,-0.039 10.144,-0.039 13.215,0c3.346,0.129 6.234,3.013 6.277,6.428l0,1.992l9.106,0l0,4l-4.442,0Zm-4,0l-27.099,0c-0.014,9.72 -0.122,19.44 0.003,29.159c0.048,1.251 1.125,2.331 2.379,2.379c7.445,0.096 14.892,0.096 22.337,0c1.273,-0.049 2.363,-1.162 2.38,-2.454l0,-29.084Zm-11.545,28.938l-4.005,0l0,-19.109l-7.414,7.413l-2.832,-2.832l12.246,-12.246l0.001,0.001l0.001,-0.001l12.247,12.246l-2.833,2.832l-7.411,-7.411l0,19.107Zm6.845,-32.938c-0.014,-0.831 0,-1.973 0,-1.973c0,0 -0.059,-2.418 -2.344,-2.448c-3.003,-0.038 -10.007,-0.038 -13.01,0c-1.273,0.049 -2.363,1.163 -2.38,2.455l0,1.966l17.734,0Z"
                                                            style="fill-rule:nonzero;"></path>
                                                        <g id="radio-check"> </g>
                                                        <g id="eye-slash"> </g>
                                                        <g id="eye"> </g>
                                                        <g id="toggle-off"> </g>
                                                        <g id="shredder"> </g>
                                                        <g id="spinner--loading--dots-"
                                                            serif:id="spinner [loading, dots]"> </g>
                                                        <g id="react"> </g>
                                                        <g id="check-selected"> </g>
                                                        <g id="turn-off"> </g>
                                                        <g id="code-block"> </g>
                                                        <g id="user"> </g>
                                                        <g id="coffee-bean"> </g>
                                                        <g id="coffee-beans">
                                                            <g id="coffee-bean1" serif:id="coffee-bean"> </g>
                                                        </g>
                                                        <g id="coffee-bean-filled"> </g>
                                                        <g id="coffee-beans-filled">
                                                            <g id="coffee-bean2" serif:id="coffee-bean"> </g>
                                                        </g>
                                                        <g id="clipboard"> </g>
                                                        <g id="clipboard-paste"> </g>
                                                        <g id="clipboard-copy"> </g>
                                                        <g id="Layer1"> </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>



                                    </div>
                                </td>
                            </tr>



                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>


    {{-- add Student --}}
    @include('Admin.wattingList.popUp.addStudent')


    {{--     pop add request --}}
    @include('Admin.wattingList.popUp.editRequest')
@endsection

@section('script')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/button-ext/jszip.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/button-ext/buttons.print.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/custom_miscellaneous_wattingList.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- END PAGE LEVEL SCRIPTS -->

    <script>
        $(document).ready(function() {
            $('.btn-edit').on('click', function() {
                $('#editModal').modal('show');
                $('#name').val(name);
                $('#status').val(status);
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
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire("تم التعديل بنجاح!", "", "success");
                } else if (result.isDenied) {
                    Swal.fire("تم إلغاء التعديلات السابقة", "", "info");
                }
            });
        });

        const recoverDeleteButtons = document.querySelectorAll(".btn-recover-delete");

        recoverDeleteButtons.forEach(button => {
            button.addEventListener("click", function() {
                Swal.fire({
                    title: "هل أنت متأكد من استرجاع  طلب الطالب محمد مهنا؟",
                    text: "باسترجاعه سيتم إعادة طلبه إلى الطلبات المدروسة",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "نعم، استرجعه!",
                    cancelButtonText: "إلغاء"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // هنا يمكنك تنفيذ وظيفة الحذف لكل عنصر
                        Swal.fire(
                            "تم استرجاع الطلب!",
                            "تم استرجاع الطالب بنجاح.",
                            "success"
                        );
                    }
                });
            });
        });

        // // ..............................................................................

        // // متفاعلون مفصولون حفظة
        // // احصل على جميع عناصر القائمة في الشريط الجانبي
        // const sidebarItems = document.querySelectorAll('.listTypeUser');
        // const rows = document.querySelectorAll('#show-hide-col-huffaz tbody tr');
        // // أضف حدث النقر على كل عنصر في الشريط الجانبي
        // sidebarItems.forEach(item => {
        //     item.addEventListener('click', function() {
        //         const selectedValue = this.getAttribute('data-status');

        //         rows.forEach(row => {
        //             if (selectedValue === 'all') {
        //                 row.style.display = ''; // يظهر جميع الصفوف
        //             } else {
        //                 row.style.display = row.classList.contains(selectedValue) ? '' : 'none';
        //             }
        //         });
        //     });
        // });
        // // ..............................................................................



        // // لإظهار ذكزر واناث
        // document.addEventListener('DOMContentLoaded', function() {
        //     // الحصول على عنصر "الحافظون والحافظات"
        //     const hafezItem = document.querySelector('.listTypeUser[data-status="hafez"]');
        //     const subMenu = hafezItem.querySelector('.hafezList');

        //     // إضافة مستمع للنقر على عنصر "الحافظون والحافظات"
        //     hafezItem.addEventListener('click', function() {
        //         // التبديل بين إظهار وإخفاء القائمة الفرعية (ذكور/إناث)
        //         if (subMenu.style.display === 'none' || subMenu.style.display === '') {
        //             subMenu.style.display = 'block'; // إظهار القائمة الفرعية
        //         } else {
        //             subMenu.style.display = 'none'; // إخفاء القائمة الفرعية
        //         }
        //     });
        // });


        // حفاظ ذكور | إناث | كل
        const sidebarItems = document.querySelectorAll('.rejectRequestData');
        const rows = document.querySelectorAll('#show-hide-col-wattingList tbody tr');
        // أضف حدث النقر على كل عنصر في الشريط الجانبي
        sidebarItems.forEach(item => {
            item.addEventListener('click', function() {
                const selectedValue = this.getAttribute('data-status');

                rows.forEach(row => {
                    if (selectedValue === 'all') {
                        row.style.display = ''; // يظهر جميع الصفوف
                    } else {
                        row.style.display = row.classList.contains(selectedValue) ? '' : 'none';
                    }
                });
            });
        });




        // pop add request
        $(document).ready(function() {
            // عند الضغط على زر التعديل
            $('.btn-addHafezPop').on('click', function() {
                // فتح الـ Modal
                $('#addHafez').modal('show');

                // يمكن تعبئة النموذج بالبيانات الحالية هنا إذا لزم الأمر
                // var row = $(this).closest('tr');
                // var name = row.find('td:eq(0)').text(); // استخراج الاسم
                // var status = row.find('td:eq(1) .badge').text(); // استخراج حالة الطالب

                // تعبئة النموذج بالبيانات المستخرجة
                // $('#name').val(name);
                // $('#status').val(status);
            });

            // حفظ التغييرات (يمكنك تعديل هذا الجزء لتنفيذ AJAX أو تحديث البيانات)
            $('#btn-saveAddHafez').on('click', function() {
                // هنا يمكن تنفيذ حفظ التغييرات، مثل إرسال البيانات عبر AJAX
                // var updatedName = $('#name').val();
                // var updatedStatus = $('#status').val();

                // أغلق الـ Modal بعد الحفظ
                $('#addHafez').modal('hide');
            });
        });


        // add hafez success
        document.getElementById("saveAddHafez").addEventListener("click", function() {
            Swal.fire({
                title: "هل متأكد من إضافة الطالب أحمد مهنا كطالب جديد إلى المشرف يحيى ؟؟",
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: "نعم",
                denyButtonText: `لا`
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire("تمت الإضافة بنجاح! تهانيا", "", "success");
                    $('#addHafez').modal('hide');
                } else if (result.isDenied) {
                    Swal.fire("تم إلغاء التعديلات السابقة", "", "info");
                }
            });
        });
    </script>
@endsection
