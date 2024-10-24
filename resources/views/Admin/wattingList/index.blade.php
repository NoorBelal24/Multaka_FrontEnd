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

                            <tr class="activeUser hafezFemale">
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
                                        <a href="javascript:void(0);" class="action-btn btn-addHafezPop bs-tooltip me-2"
                                            data-toggle="tooltip" data-placement="top" title="قبول الطلب">
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M5 14L8.23309 16.4248C8.66178 16.7463 9.26772 16.6728 9.60705 16.2581L18 6"
                                                        stroke="#48ff05" stroke-linecap="round"></path>
                                                </g>
                                            </svg> </a>
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
            // عند الضغط على زر التعديل
            $('.btn-edit').on('click', function() {
                // فتح الـ Modal
                $('#editModal').modal('show');

                // يمكن تعبئة النموذج بالبيانات الحالية هنا إذا لزم الأمر
                var row = $(this).closest('tr');
                var name = row.find('td:eq(0)').text(); // استخراج الاسم
                var status = row.find('td:eq(1) .badge').text(); // استخراج حالة الطالب

                // تعبئة النموذج بالبيانات المستخرجة
                $('#name').val(name);
                $('#status').val(status);
            });

            // حفظ التغييرات (يمكنك تعديل هذا الجزء لتنفيذ AJAX أو تحديث البيانات)
            $('#saveChanges').on('click', function() {
                // هنا يمكن تنفيذ حفظ التغييرات، مثل إرسال البيانات عبر AJAX
                var updatedName = $('#name').val();
                var updatedStatus = $('#status').val();

                // أغلق الـ Modal بعد الحفظ
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

        const deleteButtons = document.querySelectorAll(".btn-delete");

        deleteButtons.forEach(button => {
            button.addEventListener("click", function() {
                Swal.fire({
                    title: "هل أنت متأكد من إلغاء هذا الطلب؟؟",
                    text: "سوف يتم نقل الطلب إلى الطلبات المرفوضة!!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "نعم، احذف!",
                    cancelButtonText: "إلغاء"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // هنا يمكنك تنفيذ وظيفة الحذف لكل عنصر
                        Swal.fire(
                            "تم الحذف!",
                            "تم إلغاء الططلب بنجاح.",
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
        const sidebarItems = document.querySelectorAll('.huffazData');
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
