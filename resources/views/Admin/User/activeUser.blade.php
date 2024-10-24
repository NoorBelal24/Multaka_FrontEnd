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
                    <table id="show-hide-col-actevUsers" class="table dt-table-hover" style="width:100%">
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
                                <th>مشرف الطالب </th>
                                <th>تاريخ الانضمام</th>
                                <th>إجراءات</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr class="activeUserMale ">
                                <td>
                                    <div class="media">
                                        <div class="avatar me-2">
                                            <img alt="avatar" src="{{ asset('AdminAssets/img/users/profile-7.jpeg') }}"
                                                class="rounded-circle" />
                                        </div>
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">محمد بلال مهنا</h6>
                                        </div>
                                    </div>
                                </td>

                                <td data-gender="female">ذكر</td>
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
                                <td> عبد الله الخطيب </td>
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
                                            data-toggle="tooltip" data-placement="top" title="أضافة حافظ جديد">
                                            <svg viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                class="si-glyph si-glyph-congratulation-hat" fill="#000000">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <title>congratulation-hat</title>
                                                    <defs> </defs>
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g transform="translate(0.000000, 1.000000)" fill="#434343">
                                                            <g transform="translate(0.000000, 7.000000)">
                                                                <path
                                                                    d="M8,5.099 L4.125,2.64 L4.125,5.794 C4.125,5.794 4.125,6.342 4.48,6.427 C5.594,6.691 6.759,6.943 8,6.943 C9.27,6.943 10.485,6.752 11.604,6.4 C11.875,6.342 11.875,5.849 11.875,5.849 L11.875,2.64 L8,5.099 L8,5.099 Z"
                                                                    class="si-glyph-fill"> </path>
                                                                <path
                                                                    d="M1.246,0.066 L0.766,0.066 C0.355,1.63 0.052,6.603 0.052,6.912 C0.052,6.94 0.059,6.969 0.065,6.996 L1.948,6.996 C1.954,6.969 1.959,6.94 1.959,6.912 C1.958,6.604 1.654,1.631 1.246,0.066 L1.246,0.066 Z"
                                                                    class="si-glyph-fill"> </path>
                                                            </g>
                                                            <path
                                                                d="M8,0.062 L0,5.043 L1.33,6.042 L6.885,4.784 C6.977,4.255 7.413,3.843 7.969,3.843 C8.59,3.843 9.094,4.347 9.094,4.968 C9.094,5.589 8.59,6.093 7.969,6.093 C7.655,6.093 7.385,5.952 7.186,5.741 L2.374,6.83 L8,10.702 L16,5.043 L8,0.062 L8,0.062 Z"
                                                                class="si-glyph-fill"> </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>

                                    </div>
                                </td>

                            </tr>


                            <tr class=" activeUserFemale ">
                                <td>
                                    <div class="media">
                                        <div class="avatar me-2">
                                            <img alt="avatar" src="{{ asset('AdminAssets/img/users/profile-7.jpeg') }}"
                                                class="rounded-circle" />
                                        </div>
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">رنا بلال مهنا</h6>
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
                                <td> عبد الله الخطيب </td>
                                <td>2011/04/25</td>
                                <td class="text-center">
                                    <div class="action-btns">
                                        <a href="{{ route('profile') }}"
                                            class="action-btn btn-view bs-tooltip me-2 rounded " data-toggle="tooltip"
                                            data-placement="top" title="View Profile">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-eye">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                        </a>
                                        <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2"
                                            data-toggle="tooltip" data-placement="top" title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                            </svg>
                                        </a>
                                        <a type="button" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip"
                                            data-placement="top" title="Delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
                                            data-toggle="tooltip" data-placement="top"title="أضافة حافظ جديد">
                                            <svg viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                class="si-glyph si-glyph-congratulation-hat" fill="#000000">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <title>congratulation-hat</title>
                                                    <defs> </defs>
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g transform="translate(0.000000, 1.000000)" fill="#434343">
                                                            <g transform="translate(0.000000, 7.000000)">
                                                                <path
                                                                    d="M8,5.099 L4.125,2.64 L4.125,5.794 C4.125,5.794 4.125,6.342 4.48,6.427 C5.594,6.691 6.759,6.943 8,6.943 C9.27,6.943 10.485,6.752 11.604,6.4 C11.875,6.342 11.875,5.849 11.875,5.849 L11.875,2.64 L8,5.099 L8,5.099 Z"
                                                                    class="si-glyph-fill"> </path>
                                                                <path
                                                                    d="M1.246,0.066 L0.766,0.066 C0.355,1.63 0.052,6.603 0.052,6.912 C0.052,6.94 0.059,6.969 0.065,6.996 L1.948,6.996 C1.954,6.969 1.959,6.94 1.959,6.912 C1.958,6.604 1.654,1.631 1.246,0.066 L1.246,0.066 Z"
                                                                    class="si-glyph-fill"> </path>
                                                            </g>
                                                            <path
                                                                d="M8,0.062 L0,5.043 L1.33,6.042 L6.885,4.784 C6.977,4.255 7.413,3.843 7.969,3.843 C8.59,3.843 9.094,4.347 9.094,4.968 C9.094,5.589 8.59,6.093 7.969,6.093 C7.655,6.093 7.385,5.952 7.186,5.741 L2.374,6.83 L8,10.702 L16,5.043 L8,0.062 L8,0.062 Z"
                                                                class="si-glyph-fill"> </path>
                                                        </g>
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


    <!--     pop Edit user info -->
    @include('Admin.User.popUp.editUser')

    {{--     pop add hafez --}}
    @include('Admin.User.popUp.addHafez')

@endsection

@section('script')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/button-ext/jszip.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/button-ext/buttons.print.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/custom_miscellaneous_activeUser.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- END PAGE LEVEL SCRIPTS -->

    <script>
        // pop edit
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

        // save change for edit
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

        // delete
        const deleteButtons = document.querySelectorAll(".btn-delete");
        deleteButtons.forEach(button => {
            button.addEventListener("click", function() {
                Swal.fire({
                    title: "هل أنت متأكد أنك تريد الحذف؟",
                    text: "لن تتمكن من استعادة هذا العنصر!",
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
                            "تم حذف العنصر بنجاح.",
                            "success"
                        );
                    }
                });
            });
        });

        // ..............................................................................



        // متفاعلون ذكور | إناث | كل
        const sidebarItems = document.querySelectorAll('.activeUserData');
        const rows = document.querySelectorAll('#show-hide-col-actevUsers tbody tr');
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

        // ..............................................................................



        // pop add hafez
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
                title: "هل متأكد من أن  حاتم شوخة أصبح حافظاَ ؟؟",
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: "نعم",
                denyButtonText: `لا`
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire("تم التعديل بنجاح! تهانيا", "", "success");
                    $('#addHafez').modal('hide');
                } else if (result.isDenied) {
                    Swal.fire("تم إلغاء التعديلات السابقة", "", "info");
                }
            });
        });
    </script>
@endsection
