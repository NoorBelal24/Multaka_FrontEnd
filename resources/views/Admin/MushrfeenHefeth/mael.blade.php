@extends('Admin.master')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('AdminAssets/plugins/src/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('AdminAssets/plugins/css/light/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('AdminAssets/plugins/css/light/table/datatable/custom_dt_miscellaneous.css') }}">
    <link href="{{ asset('AdminAssets/css/elements/search.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('AdminAssets/css/customPopUp.css') }}" rel="stylesheet" type="text/css" />



    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')
    <div class="row layout-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">


                    <div class="table-responsive">
                        <br>
                        <button
                            class="btn-addMushref btn btn-outline-dark btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light mx-4">
                            <?xml version="1.0" ?>
                            <!DOCTYPE svg
                                PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg
                                enable-background="new 0 0 91 91" height="91px" id="Layer_1" version="1.1"
                                viewBox="0 0 91 91" width="91px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g>
                                    <g>
                                        <path
                                            d="M45.799,35.212c0,10.729-8.643,19.43-19.305,19.43c-10.658,0-19.296-8.701-19.296-19.43    c0-10.727,8.638-19.426,19.296-19.426C37.156,15.787,45.799,24.486,45.799,35.212z"
                                            fill="#E0F1F8" />
                                        <path
                                            d="M26.494,57.156c-12.025,0-21.809-9.844-21.809-21.944c0-12.098,9.783-21.939,21.809-21.939    c12.03,0,21.818,9.842,21.818,21.939C48.313,47.313,38.524,57.156,26.494,57.156z M26.494,18.298    c-9.254,0-16.783,7.588-16.783,16.914c0,9.329,7.529,16.918,16.783,16.918c9.26,0,16.793-7.59,16.793-16.918    C43.287,25.886,35.754,18.298,26.494,18.298z"
                                            fill="#454B53" />
                                    </g>
                                    <path
                                        d="M50.429,78.355c-1.388,0-2.513-1.125-2.513-2.514V60.537c0-4.73-2.516-7.941-7.918-10.104   c-1.289-0.516-1.915-1.979-1.399-3.268c0.515-1.287,1.977-1.916,3.267-1.398c9.154,3.664,11.076,10.055,11.076,14.77v15.305   C52.941,77.23,51.816,78.355,50.429,78.355z"
                                        fill="#454B53" />
                                    <path
                                        d="M2.87,78.354c-1.388,0-2.513-1.125-2.513-2.514V60.537c0-4.703,1.865-11.08,10.748-14.758   c1.281-0.533,2.752,0.078,3.283,1.359c0.53,1.283-0.078,2.752-1.361,3.283c-5.145,2.129-7.645,5.438-7.645,10.115V75.84   C5.383,77.229,4.258,78.354,2.87,78.354z"
                                        fill="#454B53" />
                                    <g>
                                        <path
                                            d="M88.129,28.437c0,9.168-7.431,16.594-16.6,16.594c-9.163,0-16.591-7.426-16.591-16.594    c0-9.166,7.428-16.596,16.591-16.596C80.698,11.841,88.129,19.271,88.129,28.437z"
                                            fill="#FDE497" />
                                        <path
                                            d="M71.529,47.545c-10.533,0-19.104-8.573-19.104-19.108c0-10.537,8.57-19.109,19.104-19.109    c10.538,0,19.112,8.572,19.112,19.109C90.642,38.972,82.067,47.545,71.529,47.545z M71.529,14.353    c-7.763,0-14.078,6.318-14.078,14.084c0,7.765,6.315,14.082,14.078,14.082c7.768,0,14.087-6.317,14.087-14.082    C85.616,20.671,79.297,14.353,71.529,14.353z"
                                            fill="#454B53" />
                                    </g>
                                    <g>
                                        <polygon fill="#9ABFDA"
                                            points="33.43,77.238 26.651,82.658 19.869,77.238 24.172,56.277 26.639,56.277 29.065,56.277   " />
                                        <path
                                            d="M26.651,85.172c-0.556,0-1.11-0.184-1.569-0.551l-6.781-5.42c-0.737-0.59-1.082-1.543-0.893-2.469    l4.302-20.961c0.24-1.168,1.269-2.008,2.462-2.008h4.894c1.19,0,2.218,0.836,2.46,2.002l4.364,20.961    c0.192,0.926-0.151,1.883-0.891,2.473l-6.778,5.422C27.762,84.988,27.207,85.172,26.651,85.172z M22.641,76.236l4.01,3.205    l4.005-3.201l-3.634-17.451h-0.801L22.641,76.236z"
                                            fill="#454B53" />
                                    </g>
                                    <path
                                        d="M79.296,31.117H63.36c-1.388,0-2.513-1.125-2.513-2.514c0-1.387,1.125-2.512,2.513-2.512h15.936   c1.388,0,2.513,1.125,2.513,2.512C81.809,29.992,80.684,31.117,79.296,31.117z"
                                        fill="#454B53" />
                                    <path
                                        d="M71.33,39.085c-1.388,0-2.513-1.125-2.513-2.514V20.641c0-1.388,1.125-2.513,2.513-2.513   s2.513,1.125,2.513,2.513v15.931C73.843,37.96,72.718,39.085,71.33,39.085z"
                                        fill="#454B53" />
                                </g>
                            </svg><span class="btn-text-inner"> إضافة مشرف </span>
                        </button>
                        <table class="table table-bordered table-borderedMushref container">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col">اسم المشرف</th>
                                    <th class="text-center" scope="col">عدد الطلاب</th>
                                    <th class="text-center" scope="col">الإجراءات</th>
                                </tr>
                            </thead>


                            <tbody>
                                @include('Admin.MushrfeenHefeth.student')
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- pop up change mushref    -->
    @include('Admin.MushrfeenHefeth.popUp.editMushref')

    <!-- pop up add mushref    -->
    @include('Admin.MushrfeenHefeth.popUp.addMushref')

    <!-- pop up add student    -->
    @include('Admin.MushrfeenHefeth.popUp.addStudent')

@endsection

@section('script')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/button-ext/jszip.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/button-ext/buttons.print.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/custom_miscellaneous_allMushrefeen.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('AdminAssets/js/elements/custom-search.js') }}"></script>

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('AdminAssets/js/scrollspyNav.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        // pop change Mushref
        $(document).ready(function() {
            // عند الضغط على زر التعديل
            $('.btn-changeMushref').on('click', function() {
                // فتح الـ Modal
                $('#changeMushref').modal('show');

                // يمكن تعبئة النموذج بالبيانات الحالية هنا إذا لزم الأمر
                // var row = $(this).closest('tr');
                // var name = row.find('td:eq(0)').text(); // استخراج الاسم
                // var status = row.find('td:eq(1) .badge').text(); // استخراج حالة الطالب

                // تعبئة النموذج بالبيانات المستخرجة
                // $('#name').val(name);
                // $('#status').val(status);
            });

            // حفظ التغييرات (يمكنك تعديل هذا الجزء لتنفيذ AJAX أو تحديث البيانات)
            $('#saveChanges').on('click', function() {
                // هنا يمكن تنفيذ حفظ التغييرات، مثل إرسال البيانات عبر AJAX
                // var updatedName = $('#name').val();
                // var updatedStatus = $('#status').val();

                // أغلق الـ Modal بعد الحفظ
                $('#changeMushref').modal('hide');
            });
        });


        // pop add Mushref
        $(document).ready(function() {
            // عند الضغط على زر التعديل
            $('.btn-addMushref').on('click', function() {
                // فتح الـ Modal
                $('#addMushref').modal('show');

                // يمكن تعبئة النموذج بالبيانات الحالية هنا إذا لزم الأمر
                // var row = $(this).closest('tr');
                // var name = row.find('td:eq(0)').text(); // استخراج الاسم
                // var status = row.find('td:eq(1) .badge').text(); // استخراج حالة الطالب

                // تعبئة النموذج بالبيانات المستخرجة
                // $('#name').val(name);
                // $('#status').val(status);
            });

            // حفظ التغييرات (يمكنك تعديل هذا الجزء لتنفيذ AJAX أو تحديث البيانات)
            $('#btn-saveAdd').on('click', function() {
                // هنا يمكن تنفيذ حفظ التغييرات، مثل إرسال البيانات عبر AJAX
                // var updatedName = $('#name').val();
                // var updatedStatus = $('#status').val();

                // أغلق الـ Modal بعد الحفظ
                $('#addMushref').modal('hide');
            });
        });


        $(document).ready(function() {
            // عند الضغط على زر التعديل
            $('.btn-addStudent').on('click', function() {
                // فتح الـ Modal
                $('#addStudent').modal('show');

                // يمكن تعبئة النموذج بالبيانات الحالية هنا إذا لزم الأمر
                // var row = $(this).closest('tr');
                // var name = row.find('td:eq(0)').text(); // استخراج الاسم
                // var status = row.find('td:eq(1) .badge').text(); // استخراج حالة الطالب

                // تعبئة النموذج بالبيانات المستخرجة
                // $('#name').val(name);
                // $('#status').val(status);
            });

            // حفظ التغييرات (يمكنك تعديل هذا الجزء لتنفيذ AJAX أو تحديث البيانات)
            $('#btn-saveAddStudent').on('click', function() {
                // هنا يمكن تنفيذ حفظ التغييرات، مثل إرسال البيانات عبر AJAX
                // var updatedName = $('#name').val();
                // var updatedStatus = $('#status').val();

                // أغلق الـ Modal بعد الحفظ
                $('#addStudent').modal('hide');
            });
        });
    </script>

    <script>
        // student for mushref
        function toggleStudents(supervisorId) {
            const studentRow = document.getElementById(supervisorId);
            if (studentRow.style.display === "none" || studentRow.style.display === "") {
                studentRow.style.display = "table-row";
            } else {
                studentRow.style.display = "none";
            }
        }
    </script>


    <script>
        // change Mushref
        document.getElementById("saveChanges").addEventListener("click", function() {
            Swal.fire({
                title: "هل متأكد من تعدييل المشرف المختار إلى المشرف المختار ؟؟",
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


        // add Mushref
        document.getElementById("saveAdd").addEventListener("click", function() {
            Swal.fire({
                title: "هل متأكد من إضافة هذا المستخدم كمشرف في قسم التحفيظ ؟؟",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: "نعم",
                denyButtonText: `لا`
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire("تم إضافته بنجاح!", "", "success");
                } else if (result.isDenied) {
                    Swal.fire("تم إلغاء الإضافة السابقة", "", "info");
                }
            });
        });

        // add Student
        document.getElementById("saveAddStudent").addEventListener("click", function() {

            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "تمت الإضافة",
                showConfirmButton: false,
                timer: 1500
            });


        });

        //delete
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
                        // هنا يمكنك تنفيذ وظيفة الحذف لكل عنصر
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

        // // متفاعلون مفصولون حفظة
        // // احصل على جميع عناصر القائمة في الشريط الجانبي
        // const sidebarItems = document.querySelectorAll('.listTypeUser');
        // const rows = document.querySelectorAll('#show-hide-col-AllUsers tbody tr');
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
        // ..............................................................................


        //
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
    </script>
@endsection
