@extends('Admin.master')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('AdminAssets/plugins/src/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('AdminAssets/plugins/css/light/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('AdminAssets/plugins/css/light/table/datatable/custom_dt_miscellaneous.css') }}">
    <link href="{{ asset('AdminAssets/css/elements/search.css') }}" rel="stylesheet" type="text/css" />



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
                            class="btn-addMushrefTathbeet btn btn-outline-dark btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light mx-4">
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
                            </svg><span class="btn-text-inner"> إضافة مشرف تثبيت </span>
                        </button>
                        <button
                            class="btn btn-addDawra btn-outline-dark btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                            <samp> إضافة دورة تثبيت </span>
                        </button>



                        <table class="table tableTathbeet table-bordered table-borderedMushref containe">

                            <tbody>
                                <tr class="tathbeetRow">
                                    <td class="text-center tathbeetTitel">الخمسة الأولى</td>
                                    <td class="text-center">
                                        <button onclick="toggleVisibility('tathbeet1')"
                                            class=" tathbeetTitel btn btn-dark btn-rounded btn-outline-dark mb-2 me-4 _effect--ripple waves-effect waves-light">عرض
                                            مشرففات الدورة وطالباتها</button>
                                            <button
                                            class="btn btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            <?xml version="1.0" ?><svg
                                                viewBox="0 0 32 32"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <defs>
                                                    <style>
                                                        .cls-1 {
                                                            fill: none;
                                                            stroke: #000;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                    </style>
                                                </defs>
                                                <title />
                                                <g id="cross">
                                                    <line class="cls-1" x1="7"
                                                        x2="25" y1="7"
                                                        y2="25" />
                                                    <line class="cls-1" x1="7"
                                                        x2="25" y1="25"
                                                        y2="7" />
                                                </g>
                                            </svg><span class="btn-text-inner">حذف
                                                الدورة</span>

                                        </button>
                                    </td>
                                </tr>
                                <tr id="tathbeet1" class="hidden">
                                    <td colspan="2">
                                        <table class="table table-bordered table-borderedMushref container">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" scope="col">اسم المشرف</th>
                                                    <th class="text-center" scope="col">عدد الطلاب</th>
                                                    <th class="text-center" scope="col">الإجراءات</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <div class="avatar me-2">
                                                                <img alt="avatar"
                                                                    src="{{ asset('AdminAssets/img/users/profile-7.jpeg') }}"
                                                                    class="rounded-circle" />
                                                            </div>
                                                            <div class="media-body align-self-center">
                                                                <h6 class="mb-0">أسامة مهنا</h6>
                                                                <span>shaun.park@mail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">3</p>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="action-btns">
                                                            <a href="javascript:void(0);"
                                                                onclick="toggleStudents('mushref_osama')"
                                                                class="action-btn btn-view bs-tooltip me-2"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="عرض طلاب المشرف">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-eye">
                                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                    </path>
                                                                    <circle cx="12" cy="12" r="3"></circle>
                                                                </svg>
                                                            </a>

                                                            <a href="javascript:void(0);"
                                                                class="action-btn btn-edit bs-tooltip me-2 btn-addStudent"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="أضافة طالب جديد">
                                                                <svg height="512" viewBox="0 0 512 512" width="512"
                                                                    xmlns="http://www.w3.org/2000/svg">

                                                                    <path
                                                                        d="M376,144c-3.92,52.87-44,96-88,96s-84.15-43.12-88-96c-4-55,35-96,88-96S380,90,376,144Z"
                                                                        style="fill:none;stroke:#888ea8;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                                                    <path
                                                                        d="M288,304c-87,0-175.3,48-191.64,138.6-2,10.92,4.21,21.4,15.65,21.4H464c11.44,0,17.62-10.48,15.65-21.4C463.3,352,375,304,288,304Z"
                                                                        style="fill:none;stroke:#888ea8;stroke-miterlimit:10;stroke-width:32px" />
                                                                    <line
                                                                        style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                                        x1="88" x2="88" y1="176"
                                                                        y2="288" />
                                                                    <line
                                                                        style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                                        x1="144" x2="32" y1="232"
                                                                        y2="232" />
                                                                </svg>
                                                            </a>

                                                            <a href="javascript:void(0);"
                                                                class="action-btn btn-delete bs-tooltip"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="حذف المشرف">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-trash-2">
                                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                                    <path
                                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                    </path>
                                                                    <line x1="10" y1="11" x2="10"
                                                                        y2="17">
                                                                    </line>
                                                                    <line x1="14" y1="11" x2="14"
                                                                        y2="17">
                                                                    </line>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr id="mushref_osama" class="student-row">

                                                    <td colspan="3">
                                                        <table class="justify-content-center studentTable">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center" scope="col"> اسم الطالب
                                                                    </th>
                                                                    <th class="text-center" scope="col">الإجراءات</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="media">
                                                                            <div class="avatar me-2">

                                                                                <img alt="avatar"
                                                                                    src="{{ asset('AdminAssets/img/users/profile-13.jpeg') }}"
                                                                                    class="rounded-circle" />
                                                                            </div>
                                                                            <div class="media-body align-self-center">
                                                                                <h6 class="mb-0">ماجد محمد  </h6>
                                                                                <span>shaun.park@mail.com</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <button
                                                                            class="btn-changeMushref btn btn-outline-dark btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg fill="none"
                                                                                height="24" viewBox="0 0 24 24"
                                                                                width="24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M15.7506 13.9972C16.7312 13.9972 17.5652 14.6248 17.8728 15.5002H15.8174C15.7954 15.4982 15.7731 15.4972 15.7506 15.4972H4.24888C3.83528 15.4972 3.5 15.8325 3.5 16.2461V16.8238C3.5 17.3595 3.69111 17.8776 4.03897 18.2849C5.29228 19.7526 7.25815 20.4984 9.99646 20.4984C10.0526 20.4984 10.1085 20.4981 10.164 20.4975C10.2496 20.6809 10.3672 20.8499 10.5133 20.9957L11.4478 21.9288C10.9836 21.9752 10.4997 21.9984 9.99646 21.9984C6.8506 21.9984 4.46458 21.0932 2.89828 19.259C2.31852 18.5801 2 17.7166 2 16.8238V16.2461C2 15.0041 3.00686 13.9972 4.24888 13.9972H15.7506Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M9.99646 2.00195C12.7579 2.00195 14.9965 4.24053 14.9965 7.00195C14.9965 9.76338 12.7579 12.002 9.99646 12.002C7.23503 12.002 4.99646 9.76338 4.99646 7.00195C4.99646 4.24053 7.23503 2.00195 9.99646 2.00195ZM9.99646 3.50195C8.06346 3.50195 6.49646 5.06896 6.49646 7.00195C6.49646 8.93495 8.06346 10.502 9.99646 10.502C11.9295 10.502 13.4965 8.93495 13.4965 7.00195C13.4965 5.06896 11.9295 3.50195 9.99646 3.50195Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M14.7802 17.7835C15.073 17.4906 15.0729 17.0157 14.78 16.7229C14.487 16.4301 14.0121 16.4302 13.7193 16.7231L11.2193 19.2242C11.0787 19.3649 10.9997 19.5557 10.9998 19.7546C10.9998 19.9535 11.0789 20.1442 11.2195 20.2849L13.7195 22.7838C14.0125 23.0766 14.4874 23.0765 14.7802 22.7835C15.073 22.4906 15.0729 22.0157 14.78 21.7229L13.5599 20.5033H20.4399L19.2196 21.7228C18.9266 22.0156 18.9265 22.4905 19.2193 22.7835C19.5121 23.0765 19.9869 23.0766 20.2799 22.7838L22.7799 20.2854C22.9206 20.1448 22.9997 19.9541 22.9998 19.7552C22.9998 19.5563 22.9209 19.3655 22.7803 19.2248L20.2803 16.7232C19.9875 16.4302 19.5126 16.43 19.2196 16.7228C18.9266 17.0156 18.9265 17.4905 19.2193 17.7835L20.4383 19.0033H13.5609L14.7802 17.7835Z"
                                                                                    fill="#212121" />
                                                                            </svg> <span class="btn-text-inner">تغيير
                                                                                المشرف</span>
                                                                        </button>
                                                                        <button
                                                                            onclick="window.location.href='{{ route('profile') }}'"
                                                                            class="btn btn-outline-info btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?>
                                                                            <!DOCTYPE svg
                                                                                PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>
                                                                            <svg enable-background="new 0 0 32 32"
                                                                                height="32px" id="Layer_1"
                                                                                version="1.1" viewBox="0 0 32 32"
                                                                                width="32px" xml:space="preserve"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                                <g id="eye">
                                                                                    <path
                                                                                        d="M31.965,15.776c-0.01-0.042-0.004-0.087-0.02-0.128c-0.006-0.017-0.021-0.026-0.027-0.042   c-0.01-0.024-0.008-0.051-0.021-0.074c-2.9-5.551-9.213-9.528-15.873-9.528c-6.661,0-12.973,3.971-15.875,9.521   c-0.013,0.023-0.011,0.05-0.021,0.074c-0.007,0.016-0.021,0.025-0.027,0.042c-0.016,0.041-0.01,0.086-0.02,0.128   c-0.018,0.075-0.035,0.147-0.035,0.224s0.018,0.148,0.035,0.224c0.01,0.042,0.004,0.087,0.02,0.128   c0.006,0.017,0.021,0.026,0.027,0.042c0.01,0.024,0.008,0.051,0.021,0.074c2.901,5.551,9.214,9.528,15.875,9.528   c6.66,0,12.973-3.971,15.873-9.521c0.014-0.023,0.012-0.05,0.021-0.074c0.006-0.016,0.021-0.025,0.027-0.042   c0.016-0.041,0.01-0.086,0.02-0.128C31.982,16.148,32,16.076,32,16S31.982,15.851,31.965,15.776z M16.023,23.988   c-5.615,0-11.112-3.191-13.851-7.995c2.754-4.81,8.243-7.99,13.851-7.99c5.613,0,11.111,3.192,13.85,7.995   C27.119,20.809,21.631,23.988,16.023,23.988z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16.023,11.999c-0.002,0-0.004,0.001-0.006,0.001c-2.205,0.004-3.992,1.791-3.992,3.996   c0,0.276,0.224,0.5,0.5,0.5c0.275,0,0.499-0.224,0.499-0.5c0-1.652,1.345-2.997,2.999-2.997v-0.001   c0.275,0,0.498-0.224,0.498-0.499C16.521,12.222,16.299,11.999,16.023,11.999z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16,9c-3.867,0-7,3.134-7,7c0,3.866,3.134,7,7,7c3.865,0,7-3.135,7-7C23,12.133,19.865,9,16,9z M16,22   c-3.309,0-6-2.691-6-6c0-3.309,2.691-6,6-6c3.309,0,6,2.691,6,6C22,19.309,19.309,22,16,22z"
                                                                                        fill="#333333" />
                                                                                </g>
                                                                            </svg> <span class="btn-text-inner">عرض صفحة
                                                                                الطالب</span>
                                                                        </button>
                                                                        <button
                                                                            class="btn btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg
                                                                                viewBox="0 0 32 32"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .cls-1 {
                                                                                            fill: none;
                                                                                            stroke: #000;
                                                                                            stroke-linecap: round;
                                                                                            stroke-linejoin: round;
                                                                                            stroke-width: 2px;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <title />
                                                                                <g id="cross">
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="7"
                                                                                        y2="25" />
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="25"
                                                                                        y2="7" />
                                                                                </g>
                                                                            </svg><span class="btn-text-inner">حذف
                                                                                الطالب</span>

                                                                        </button>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <div class="media">
                                                                            <div class="avatar me-2">
                                                                                <img alt="avatar"
                                                                                    src="{{ asset('AdminAssets/img/users/profile-14.jpeg') }}"
                                                                                    class="rounded-circle" />
                                                                            </div>
                                                                            <div class="media-body align-self-center">
                                                                                <h6 class="mb-0">أحمد محمد</h6>
                                                                                <span>shaun.park@mail.com</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <button
                                                                            class="btn btn-outline-dark btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg fill="none"
                                                                                height="24" viewBox="0 0 24 24"
                                                                                width="24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M15.7506 13.9972C16.7312 13.9972 17.5652 14.6248 17.8728 15.5002H15.8174C15.7954 15.4982 15.7731 15.4972 15.7506 15.4972H4.24888C3.83528 15.4972 3.5 15.8325 3.5 16.2461V16.8238C3.5 17.3595 3.69111 17.8776 4.03897 18.2849C5.29228 19.7526 7.25815 20.4984 9.99646 20.4984C10.0526 20.4984 10.1085 20.4981 10.164 20.4975C10.2496 20.6809 10.3672 20.8499 10.5133 20.9957L11.4478 21.9288C10.9836 21.9752 10.4997 21.9984 9.99646 21.9984C6.8506 21.9984 4.46458 21.0932 2.89828 19.259C2.31852 18.5801 2 17.7166 2 16.8238V16.2461C2 15.0041 3.00686 13.9972 4.24888 13.9972H15.7506Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M9.99646 2.00195C12.7579 2.00195 14.9965 4.24053 14.9965 7.00195C14.9965 9.76338 12.7579 12.002 9.99646 12.002C7.23503 12.002 4.99646 9.76338 4.99646 7.00195C4.99646 4.24053 7.23503 2.00195 9.99646 2.00195ZM9.99646 3.50195C8.06346 3.50195 6.49646 5.06896 6.49646 7.00195C6.49646 8.93495 8.06346 10.502 9.99646 10.502C11.9295 10.502 13.4965 8.93495 13.4965 7.00195C13.4965 5.06896 11.9295 3.50195 9.99646 3.50195Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M14.7802 17.7835C15.073 17.4906 15.0729 17.0157 14.78 16.7229C14.487 16.4301 14.0121 16.4302 13.7193 16.7231L11.2193 19.2242C11.0787 19.3649 10.9997 19.5557 10.9998 19.7546C10.9998 19.9535 11.0789 20.1442 11.2195 20.2849L13.7195 22.7838C14.0125 23.0766 14.4874 23.0765 14.7802 22.7835C15.073 22.4906 15.0729 22.0157 14.78 21.7229L13.5599 20.5033H20.4399L19.2196 21.7228C18.9266 22.0156 18.9265 22.4905 19.2193 22.7835C19.5121 23.0765 19.9869 23.0766 20.2799 22.7838L22.7799 20.2854C22.9206 20.1448 22.9997 19.9541 22.9998 19.7552C22.9998 19.5563 22.9209 19.3655 22.7803 19.2248L20.2803 16.7232C19.9875 16.4302 19.5126 16.43 19.2196 16.7228C18.9266 17.0156 18.9265 17.4905 19.2193 17.7835L20.4383 19.0033H13.5609L14.7802 17.7835Z"
                                                                                    fill="#212121" />
                                                                            </svg> <span class="btn-text-inner">تغيير
                                                                                المشرف</span>
                                                                        </button>
                                                                        <button
                                                                            class="btn btn-outline-info btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?>
                                                                            <!DOCTYPE svg
                                                                                PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>
                                                                            <svg enable-background="new 0 0 32 32"
                                                                                height="32px" id="Layer_1"
                                                                                version="1.1" viewBox="0 0 32 32"
                                                                                width="32px" xml:space="preserve"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                                <g id="eye">
                                                                                    <path
                                                                                        d="M31.965,15.776c-0.01-0.042-0.004-0.087-0.02-0.128c-0.006-0.017-0.021-0.026-0.027-0.042   c-0.01-0.024-0.008-0.051-0.021-0.074c-2.9-5.551-9.213-9.528-15.873-9.528c-6.661,0-12.973,3.971-15.875,9.521   c-0.013,0.023-0.011,0.05-0.021,0.074c-0.007,0.016-0.021,0.025-0.027,0.042c-0.016,0.041-0.01,0.086-0.02,0.128   c-0.018,0.075-0.035,0.147-0.035,0.224s0.018,0.148,0.035,0.224c0.01,0.042,0.004,0.087,0.02,0.128   c0.006,0.017,0.021,0.026,0.027,0.042c0.01,0.024,0.008,0.051,0.021,0.074c2.901,5.551,9.214,9.528,15.875,9.528   c6.66,0,12.973-3.971,15.873-9.521c0.014-0.023,0.012-0.05,0.021-0.074c0.006-0.016,0.021-0.025,0.027-0.042   c0.016-0.041,0.01-0.086,0.02-0.128C31.982,16.148,32,16.076,32,16S31.982,15.851,31.965,15.776z M16.023,23.988   c-5.615,0-11.112-3.191-13.851-7.995c2.754-4.81,8.243-7.99,13.851-7.99c5.613,0,11.111,3.192,13.85,7.995   C27.119,20.809,21.631,23.988,16.023,23.988z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16.023,11.999c-0.002,0-0.004,0.001-0.006,0.001c-2.205,0.004-3.992,1.791-3.992,3.996   c0,0.276,0.224,0.5,0.5,0.5c0.275,0,0.499-0.224,0.499-0.5c0-1.652,1.345-2.997,2.999-2.997v-0.001   c0.275,0,0.498-0.224,0.498-0.499C16.521,12.222,16.299,11.999,16.023,11.999z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16,9c-3.867,0-7,3.134-7,7c0,3.866,3.134,7,7,7c3.865,0,7-3.135,7-7C23,12.133,19.865,9,16,9z M16,22   c-3.309,0-6-2.691-6-6c0-3.309,2.691-6,6-6c3.309,0,6,2.691,6,6C22,19.309,19.309,22,16,22z"
                                                                                        fill="#333333" />
                                                                                </g>
                                                                            </svg> <span class="btn-text-inner">عرض صفحة
                                                                                الطالب</span>
                                                                        </button>
                                                                        <button
                                                                            class="btn btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg
                                                                                viewBox="0 0 32 32"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .cls-1 {
                                                                                            fill: none;
                                                                                            stroke: #000;
                                                                                            stroke-linecap: round;
                                                                                            stroke-linejoin: round;
                                                                                            stroke-width: 2px;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <title />
                                                                                <g id="cross">
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="7"
                                                                                        y2="25" />
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="25"
                                                                                        y2="7" />
                                                                                </g>
                                                                            </svg><span class="btn-text-inner">حذف
                                                                                الطالب</span>

                                                                        </button>
                                                                    </td>
                                                                </tr>


                                                                <tr>
                                                                    <td>
                                                                        <div class="media">
                                                                            <div class="avatar me-2">
                                                                                <img alt="avatar"
                                                                                    src="{{ asset('AdminAssets/img/users/profile-14.jpeg') }}"
                                                                                    class="rounded-circle" />
                                                                            </div>
                                                                            <div class="media-body align-self-center">
                                                                                <h6 class="mb-0"> عبد الرحمن  </h6>
                                                                                <span>shaun.park@mail.com</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <button
                                                                            class="btn btn-outline-dark btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg fill="none"
                                                                                height="24" viewBox="0 0 24 24"
                                                                                width="24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M15.7506 13.9972C16.7312 13.9972 17.5652 14.6248 17.8728 15.5002H15.8174C15.7954 15.4982 15.7731 15.4972 15.7506 15.4972H4.24888C3.83528 15.4972 3.5 15.8325 3.5 16.2461V16.8238C3.5 17.3595 3.69111 17.8776 4.03897 18.2849C5.29228 19.7526 7.25815 20.4984 9.99646 20.4984C10.0526 20.4984 10.1085 20.4981 10.164 20.4975C10.2496 20.6809 10.3672 20.8499 10.5133 20.9957L11.4478 21.9288C10.9836 21.9752 10.4997 21.9984 9.99646 21.9984C6.8506 21.9984 4.46458 21.0932 2.89828 19.259C2.31852 18.5801 2 17.7166 2 16.8238V16.2461C2 15.0041 3.00686 13.9972 4.24888 13.9972H15.7506Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M9.99646 2.00195C12.7579 2.00195 14.9965 4.24053 14.9965 7.00195C14.9965 9.76338 12.7579 12.002 9.99646 12.002C7.23503 12.002 4.99646 9.76338 4.99646 7.00195C4.99646 4.24053 7.23503 2.00195 9.99646 2.00195ZM9.99646 3.50195C8.06346 3.50195 6.49646 5.06896 6.49646 7.00195C6.49646 8.93495 8.06346 10.502 9.99646 10.502C11.9295 10.502 13.4965 8.93495 13.4965 7.00195C13.4965 5.06896 11.9295 3.50195 9.99646 3.50195Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M14.7802 17.7835C15.073 17.4906 15.0729 17.0157 14.78 16.7229C14.487 16.4301 14.0121 16.4302 13.7193 16.7231L11.2193 19.2242C11.0787 19.3649 10.9997 19.5557 10.9998 19.7546C10.9998 19.9535 11.0789 20.1442 11.2195 20.2849L13.7195 22.7838C14.0125 23.0766 14.4874 23.0765 14.7802 22.7835C15.073 22.4906 15.0729 22.0157 14.78 21.7229L13.5599 20.5033H20.4399L19.2196 21.7228C18.9266 22.0156 18.9265 22.4905 19.2193 22.7835C19.5121 23.0765 19.9869 23.0766 20.2799 22.7838L22.7799 20.2854C22.9206 20.1448 22.9997 19.9541 22.9998 19.7552C22.9998 19.5563 22.9209 19.3655 22.7803 19.2248L20.2803 16.7232C19.9875 16.4302 19.5126 16.43 19.2196 16.7228C18.9266 17.0156 18.9265 17.4905 19.2193 17.7835L20.4383 19.0033H13.5609L14.7802 17.7835Z"
                                                                                    fill="#212121" />
                                                                            </svg> <span class="btn-text-inner">تغيير
                                                                                المشرف</span>
                                                                        </button>
                                                                        <button
                                                                            onclick="window.location.href='{{ route('profile') }}'"
                                                                            class="btn btn-outline-info btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?>
                                                                            <!DOCTYPE svg
                                                                                PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>
                                                                            <svg enable-background="new 0 0 32 32"
                                                                                height="32px" id="Layer_1"
                                                                                version="1.1" viewBox="0 0 32 32"
                                                                                width="32px" xml:space="preserve"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                                <g id="eye">
                                                                                    <path
                                                                                        d="M31.965,15.776c-0.01-0.042-0.004-0.087-0.02-0.128c-0.006-0.017-0.021-0.026-0.027-0.042   c-0.01-0.024-0.008-0.051-0.021-0.074c-2.9-5.551-9.213-9.528-15.873-9.528c-6.661,0-12.973,3.971-15.875,9.521   c-0.013,0.023-0.011,0.05-0.021,0.074c-0.007,0.016-0.021,0.025-0.027,0.042c-0.016,0.041-0.01,0.086-0.02,0.128   c-0.018,0.075-0.035,0.147-0.035,0.224s0.018,0.148,0.035,0.224c0.01,0.042,0.004,0.087,0.02,0.128   c0.006,0.017,0.021,0.026,0.027,0.042c0.01,0.024,0.008,0.051,0.021,0.074c2.901,5.551,9.214,9.528,15.875,9.528   c6.66,0,12.973-3.971,15.873-9.521c0.014-0.023,0.012-0.05,0.021-0.074c0.006-0.016,0.021-0.025,0.027-0.042   c0.016-0.041,0.01-0.086,0.02-0.128C31.982,16.148,32,16.076,32,16S31.982,15.851,31.965,15.776z M16.023,23.988   c-5.615,0-11.112-3.191-13.851-7.995c2.754-4.81,8.243-7.99,13.851-7.99c5.613,0,11.111,3.192,13.85,7.995   C27.119,20.809,21.631,23.988,16.023,23.988z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16.023,11.999c-0.002,0-0.004,0.001-0.006,0.001c-2.205,0.004-3.992,1.791-3.992,3.996   c0,0.276,0.224,0.5,0.5,0.5c0.275,0,0.499-0.224,0.499-0.5c0-1.652,1.345-2.997,2.999-2.997v-0.001   c0.275,0,0.498-0.224,0.498-0.499C16.521,12.222,16.299,11.999,16.023,11.999z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16,9c-3.867,0-7,3.134-7,7c0,3.866,3.134,7,7,7c3.865,0,7-3.135,7-7C23,12.133,19.865,9,16,9z M16,22   c-3.309,0-6-2.691-6-6c0-3.309,2.691-6,6-6c3.309,0,6,2.691,6,6C22,19.309,19.309,22,16,22z"
                                                                                        fill="#333333" />
                                                                                </g>
                                                                            </svg> <span class="btn-text-inner">عرض صفحة
                                                                                الطالب</span>
                                                                        </button>
                                                                        <button
                                                                            class="btn btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg
                                                                                viewBox="0 0 32 32"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .cls-1 {
                                                                                            fill: none;
                                                                                            stroke: #000;
                                                                                            stroke-linecap: round;
                                                                                            stroke-linejoin: round;
                                                                                            stroke-width: 2px;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <title />
                                                                                <g id="cross">
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="7"
                                                                                        y2="25" />
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="25"
                                                                                        y2="7" />
                                                                                </g>
                                                                            </svg><span class="btn-text-inner">حذف
                                                                                الطالب</span>

                                                                        </button>
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <div class="avatar me-2">
                                                                <img alt="avatar"
                                                                    src="{{ asset('AdminAssets/img/users/profile-13.jpeg') }}"
                                                                    class="rounded-circle" />
                                                            </div>
                                                            <div class="media-body align-self-center">
                                                                <h6 class="mb-0">علاء الرمحي</h6>
                                                                <span>shaun.park@mail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">3</p>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="action-btns">
                                                            <a href="javascript:void(0);"
                                                                onclick="toggleStudents('mushref_saeed')"
                                                                class="action-btn btn-view bs-tooltip me-2"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="عرض طلاب المشرف">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-eye">
                                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                    </path>
                                                                    <circle cx="12" cy="12" r="3"></circle>
                                                                </svg>
                                                            </a>

                                                            <a href="javascript:void(0);"
                                                                class="action-btn btn-edit bs-tooltip me-2"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="أضافة طالب جديد">
                                                                <svg height="512" viewBox="0 0 512 512" width="512"
                                                                    xmlns="http://www.w3.org/2000/svg">

                                                                    <path
                                                                        d="M376,144c-3.92,52.87-44,96-88,96s-84.15-43.12-88-96c-4-55,35-96,88-96S380,90,376,144Z"
                                                                        style="fill:none;stroke:#888ea8;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                                                    <path
                                                                        d="M288,304c-87,0-175.3,48-191.64,138.6-2,10.92,4.21,21.4,15.65,21.4H464c11.44,0,17.62-10.48,15.65-21.4C463.3,352,375,304,288,304Z"
                                                                        style="fill:none;stroke:#888ea8;stroke-miterlimit:10;stroke-width:32px" />
                                                                    <line
                                                                        style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                                        x1="88" x2="88" y1="176"
                                                                        y2="288" />
                                                                    <line
                                                                        style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                                        x1="144" x2="32" y1="232"
                                                                        y2="232" />
                                                                </svg>
                                                            </a>

                                                            <a href="javascript:void(0);"
                                                                class="action-btn btn-delete bs-tooltip"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="حذف المشرف">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-trash-2">
                                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                                    <path
                                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                    </path>
                                                                    <line x1="10" y1="11" x2="10"
                                                                        y2="17">
                                                                    </line>
                                                                    <line x1="14" y1="11" x2="14"
                                                                        y2="17">
                                                                    </line>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr id="mushref_alaa" class="student-row">

                                                    <td colspan="3">
                                                        <table class="justify-content-center studentTable">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center" scope="col"> اسم الطالب
                                                                    </th>
                                                                    <th class="text-center" scope="col">الإجراءات</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="media">
                                                                            <div class="avatar me-2">

                                                                                <img alt="avatar"
                                                                                    src="{{ asset('AdminAssets/img/users/profile-13.jpeg') }}"
                                                                                    class="rounded-circle" />
                                                                            </div>
                                                                            <div class="media-body align-self-center">
                                                                                <h6 class="mb-0">ماجد محمد  </h6>
                                                                                <span>shaun.park@mail.com</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <button
                                                                            class="btn-changeMushref btn btn-outline-dark btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg fill="none"
                                                                                height="24" viewBox="0 0 24 24"
                                                                                width="24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M15.7506 13.9972C16.7312 13.9972 17.5652 14.6248 17.8728 15.5002H15.8174C15.7954 15.4982 15.7731 15.4972 15.7506 15.4972H4.24888C3.83528 15.4972 3.5 15.8325 3.5 16.2461V16.8238C3.5 17.3595 3.69111 17.8776 4.03897 18.2849C5.29228 19.7526 7.25815 20.4984 9.99646 20.4984C10.0526 20.4984 10.1085 20.4981 10.164 20.4975C10.2496 20.6809 10.3672 20.8499 10.5133 20.9957L11.4478 21.9288C10.9836 21.9752 10.4997 21.9984 9.99646 21.9984C6.8506 21.9984 4.46458 21.0932 2.89828 19.259C2.31852 18.5801 2 17.7166 2 16.8238V16.2461C2 15.0041 3.00686 13.9972 4.24888 13.9972H15.7506Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M9.99646 2.00195C12.7579 2.00195 14.9965 4.24053 14.9965 7.00195C14.9965 9.76338 12.7579 12.002 9.99646 12.002C7.23503 12.002 4.99646 9.76338 4.99646 7.00195C4.99646 4.24053 7.23503 2.00195 9.99646 2.00195ZM9.99646 3.50195C8.06346 3.50195 6.49646 5.06896 6.49646 7.00195C6.49646 8.93495 8.06346 10.502 9.99646 10.502C11.9295 10.502 13.4965 8.93495 13.4965 7.00195C13.4965 5.06896 11.9295 3.50195 9.99646 3.50195Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M14.7802 17.7835C15.073 17.4906 15.0729 17.0157 14.78 16.7229C14.487 16.4301 14.0121 16.4302 13.7193 16.7231L11.2193 19.2242C11.0787 19.3649 10.9997 19.5557 10.9998 19.7546C10.9998 19.9535 11.0789 20.1442 11.2195 20.2849L13.7195 22.7838C14.0125 23.0766 14.4874 23.0765 14.7802 22.7835C15.073 22.4906 15.0729 22.0157 14.78 21.7229L13.5599 20.5033H20.4399L19.2196 21.7228C18.9266 22.0156 18.9265 22.4905 19.2193 22.7835C19.5121 23.0765 19.9869 23.0766 20.2799 22.7838L22.7799 20.2854C22.9206 20.1448 22.9997 19.9541 22.9998 19.7552C22.9998 19.5563 22.9209 19.3655 22.7803 19.2248L20.2803 16.7232C19.9875 16.4302 19.5126 16.43 19.2196 16.7228C18.9266 17.0156 18.9265 17.4905 19.2193 17.7835L20.4383 19.0033H13.5609L14.7802 17.7835Z"
                                                                                    fill="#212121" />
                                                                            </svg> <span class="btn-text-inner">تغيير
                                                                                المشرف</span>
                                                                        </button>
                                                                        <button
                                                                            onclick="window.location.href='{{ route('profile') }}'"
                                                                            class="btn btn-outline-info btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?>
                                                                            <!DOCTYPE svg
                                                                                PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>
                                                                            <svg enable-background="new 0 0 32 32"
                                                                                height="32px" id="Layer_1"
                                                                                version="1.1" viewBox="0 0 32 32"
                                                                                width="32px" xml:space="preserve"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                                <g id="eye">
                                                                                    <path
                                                                                        d="M31.965,15.776c-0.01-0.042-0.004-0.087-0.02-0.128c-0.006-0.017-0.021-0.026-0.027-0.042   c-0.01-0.024-0.008-0.051-0.021-0.074c-2.9-5.551-9.213-9.528-15.873-9.528c-6.661,0-12.973,3.971-15.875,9.521   c-0.013,0.023-0.011,0.05-0.021,0.074c-0.007,0.016-0.021,0.025-0.027,0.042c-0.016,0.041-0.01,0.086-0.02,0.128   c-0.018,0.075-0.035,0.147-0.035,0.224s0.018,0.148,0.035,0.224c0.01,0.042,0.004,0.087,0.02,0.128   c0.006,0.017,0.021,0.026,0.027,0.042c0.01,0.024,0.008,0.051,0.021,0.074c2.901,5.551,9.214,9.528,15.875,9.528   c6.66,0,12.973-3.971,15.873-9.521c0.014-0.023,0.012-0.05,0.021-0.074c0.006-0.016,0.021-0.025,0.027-0.042   c0.016-0.041,0.01-0.086,0.02-0.128C31.982,16.148,32,16.076,32,16S31.982,15.851,31.965,15.776z M16.023,23.988   c-5.615,0-11.112-3.191-13.851-7.995c2.754-4.81,8.243-7.99,13.851-7.99c5.613,0,11.111,3.192,13.85,7.995   C27.119,20.809,21.631,23.988,16.023,23.988z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16.023,11.999c-0.002,0-0.004,0.001-0.006,0.001c-2.205,0.004-3.992,1.791-3.992,3.996   c0,0.276,0.224,0.5,0.5,0.5c0.275,0,0.499-0.224,0.499-0.5c0-1.652,1.345-2.997,2.999-2.997v-0.001   c0.275,0,0.498-0.224,0.498-0.499C16.521,12.222,16.299,11.999,16.023,11.999z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16,9c-3.867,0-7,3.134-7,7c0,3.866,3.134,7,7,7c3.865,0,7-3.135,7-7C23,12.133,19.865,9,16,9z M16,22   c-3.309,0-6-2.691-6-6c0-3.309,2.691-6,6-6c3.309,0,6,2.691,6,6C22,19.309,19.309,22,16,22z"
                                                                                        fill="#333333" />
                                                                                </g>
                                                                            </svg> <span class="btn-text-inner">عرض صفحة
                                                                                الطالب</span>
                                                                        </button>
                                                                        <button
                                                                            class="btn btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg
                                                                                viewBox="0 0 32 32"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .cls-1 {
                                                                                            fill: none;
                                                                                            stroke: #000;
                                                                                            stroke-linecap: round;
                                                                                            stroke-linejoin: round;
                                                                                            stroke-width: 2px;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <title />
                                                                                <g id="cross">
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="7"
                                                                                        y2="25" />
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="25"
                                                                                        y2="7" />
                                                                                </g>
                                                                            </svg><span class="btn-text-inner">حذف
                                                                                الطالب</span>

                                                                        </button>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <div class="media">
                                                                            <div class="avatar me-2">
                                                                                <img alt="avatar"
                                                                                    src="{{ asset('AdminAssets/img/users/profile-14.jpeg') }}"
                                                                                    class="rounded-circle" />
                                                                            </div>
                                                                            <div class="media-body align-self-center">
                                                                                <h6 class="mb-0">أحمد محمد</h6>
                                                                                <span>shaun.park@mail.com</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <button
                                                                            class="btn btn-outline-dark btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg fill="none"
                                                                                height="24" viewBox="0 0 24 24"
                                                                                width="24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M15.7506 13.9972C16.7312 13.9972 17.5652 14.6248 17.8728 15.5002H15.8174C15.7954 15.4982 15.7731 15.4972 15.7506 15.4972H4.24888C3.83528 15.4972 3.5 15.8325 3.5 16.2461V16.8238C3.5 17.3595 3.69111 17.8776 4.03897 18.2849C5.29228 19.7526 7.25815 20.4984 9.99646 20.4984C10.0526 20.4984 10.1085 20.4981 10.164 20.4975C10.2496 20.6809 10.3672 20.8499 10.5133 20.9957L11.4478 21.9288C10.9836 21.9752 10.4997 21.9984 9.99646 21.9984C6.8506 21.9984 4.46458 21.0932 2.89828 19.259C2.31852 18.5801 2 17.7166 2 16.8238V16.2461C2 15.0041 3.00686 13.9972 4.24888 13.9972H15.7506Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M9.99646 2.00195C12.7579 2.00195 14.9965 4.24053 14.9965 7.00195C14.9965 9.76338 12.7579 12.002 9.99646 12.002C7.23503 12.002 4.99646 9.76338 4.99646 7.00195C4.99646 4.24053 7.23503 2.00195 9.99646 2.00195ZM9.99646 3.50195C8.06346 3.50195 6.49646 5.06896 6.49646 7.00195C6.49646 8.93495 8.06346 10.502 9.99646 10.502C11.9295 10.502 13.4965 8.93495 13.4965 7.00195C13.4965 5.06896 11.9295 3.50195 9.99646 3.50195Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M14.7802 17.7835C15.073 17.4906 15.0729 17.0157 14.78 16.7229C14.487 16.4301 14.0121 16.4302 13.7193 16.7231L11.2193 19.2242C11.0787 19.3649 10.9997 19.5557 10.9998 19.7546C10.9998 19.9535 11.0789 20.1442 11.2195 20.2849L13.7195 22.7838C14.0125 23.0766 14.4874 23.0765 14.7802 22.7835C15.073 22.4906 15.0729 22.0157 14.78 21.7229L13.5599 20.5033H20.4399L19.2196 21.7228C18.9266 22.0156 18.9265 22.4905 19.2193 22.7835C19.5121 23.0765 19.9869 23.0766 20.2799 22.7838L22.7799 20.2854C22.9206 20.1448 22.9997 19.9541 22.9998 19.7552C22.9998 19.5563 22.9209 19.3655 22.7803 19.2248L20.2803 16.7232C19.9875 16.4302 19.5126 16.43 19.2196 16.7228C18.9266 17.0156 18.9265 17.4905 19.2193 17.7835L20.4383 19.0033H13.5609L14.7802 17.7835Z"
                                                                                    fill="#212121" />
                                                                            </svg> <span class="btn-text-inner">تغيير
                                                                                المشرف</span>
                                                                        </button>
                                                                        <button
                                                                            class="btn btn-outline-info btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?>
                                                                            <!DOCTYPE svg
                                                                                PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>
                                                                            <svg enable-background="new 0 0 32 32"
                                                                                height="32px" id="Layer_1"
                                                                                version="1.1" viewBox="0 0 32 32"
                                                                                width="32px" xml:space="preserve"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                                <g id="eye">
                                                                                    <path
                                                                                        d="M31.965,15.776c-0.01-0.042-0.004-0.087-0.02-0.128c-0.006-0.017-0.021-0.026-0.027-0.042   c-0.01-0.024-0.008-0.051-0.021-0.074c-2.9-5.551-9.213-9.528-15.873-9.528c-6.661,0-12.973,3.971-15.875,9.521   c-0.013,0.023-0.011,0.05-0.021,0.074c-0.007,0.016-0.021,0.025-0.027,0.042c-0.016,0.041-0.01,0.086-0.02,0.128   c-0.018,0.075-0.035,0.147-0.035,0.224s0.018,0.148,0.035,0.224c0.01,0.042,0.004,0.087,0.02,0.128   c0.006,0.017,0.021,0.026,0.027,0.042c0.01,0.024,0.008,0.051,0.021,0.074c2.901,5.551,9.214,9.528,15.875,9.528   c6.66,0,12.973-3.971,15.873-9.521c0.014-0.023,0.012-0.05,0.021-0.074c0.006-0.016,0.021-0.025,0.027-0.042   c0.016-0.041,0.01-0.086,0.02-0.128C31.982,16.148,32,16.076,32,16S31.982,15.851,31.965,15.776z M16.023,23.988   c-5.615,0-11.112-3.191-13.851-7.995c2.754-4.81,8.243-7.99,13.851-7.99c5.613,0,11.111,3.192,13.85,7.995   C27.119,20.809,21.631,23.988,16.023,23.988z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16.023,11.999c-0.002,0-0.004,0.001-0.006,0.001c-2.205,0.004-3.992,1.791-3.992,3.996   c0,0.276,0.224,0.5,0.5,0.5c0.275,0,0.499-0.224,0.499-0.5c0-1.652,1.345-2.997,2.999-2.997v-0.001   c0.275,0,0.498-0.224,0.498-0.499C16.521,12.222,16.299,11.999,16.023,11.999z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16,9c-3.867,0-7,3.134-7,7c0,3.866,3.134,7,7,7c3.865,0,7-3.135,7-7C23,12.133,19.865,9,16,9z M16,22   c-3.309,0-6-2.691-6-6c0-3.309,2.691-6,6-6c3.309,0,6,2.691,6,6C22,19.309,19.309,22,16,22z"
                                                                                        fill="#333333" />
                                                                                </g>
                                                                            </svg> <span class="btn-text-inner">عرض صفحة
                                                                                الطالب</span>
                                                                        </button>
                                                                        <button
                                                                            class="btn btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg
                                                                                viewBox="0 0 32 32"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .cls-1 {
                                                                                            fill: none;
                                                                                            stroke: #000;
                                                                                            stroke-linecap: round;
                                                                                            stroke-linejoin: round;
                                                                                            stroke-width: 2px;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <title />
                                                                                <g id="cross">
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="7"
                                                                                        y2="25" />
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="25"
                                                                                        y2="7" />
                                                                                </g>
                                                                            </svg><span class="btn-text-inner">حذف
                                                                                الطالب</span>

                                                                        </button>
                                                                    </td>
                                                                </tr>


                                                                <tr>
                                                                    <td>
                                                                        <div class="media">
                                                                            <div class="avatar me-2">
                                                                                <img alt="avatar"
                                                                                    src="{{ asset('AdminAssets/img/users/profile-14.jpeg') }}"
                                                                                    class="rounded-circle" />
                                                                            </div>
                                                                            <div class="media-body align-self-center">
                                                                                <h6 class="mb-0"> عبد الرحمن  </h6>
                                                                                <span>shaun.park@mail.com</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <button
                                                                            class="btn btn-outline-dark btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg fill="none"
                                                                                height="24" viewBox="0 0 24 24"
                                                                                width="24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M15.7506 13.9972C16.7312 13.9972 17.5652 14.6248 17.8728 15.5002H15.8174C15.7954 15.4982 15.7731 15.4972 15.7506 15.4972H4.24888C3.83528 15.4972 3.5 15.8325 3.5 16.2461V16.8238C3.5 17.3595 3.69111 17.8776 4.03897 18.2849C5.29228 19.7526 7.25815 20.4984 9.99646 20.4984C10.0526 20.4984 10.1085 20.4981 10.164 20.4975C10.2496 20.6809 10.3672 20.8499 10.5133 20.9957L11.4478 21.9288C10.9836 21.9752 10.4997 21.9984 9.99646 21.9984C6.8506 21.9984 4.46458 21.0932 2.89828 19.259C2.31852 18.5801 2 17.7166 2 16.8238V16.2461C2 15.0041 3.00686 13.9972 4.24888 13.9972H15.7506Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M9.99646 2.00195C12.7579 2.00195 14.9965 4.24053 14.9965 7.00195C14.9965 9.76338 12.7579 12.002 9.99646 12.002C7.23503 12.002 4.99646 9.76338 4.99646 7.00195C4.99646 4.24053 7.23503 2.00195 9.99646 2.00195ZM9.99646 3.50195C8.06346 3.50195 6.49646 5.06896 6.49646 7.00195C6.49646 8.93495 8.06346 10.502 9.99646 10.502C11.9295 10.502 13.4965 8.93495 13.4965 7.00195C13.4965 5.06896 11.9295 3.50195 9.99646 3.50195Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M14.7802 17.7835C15.073 17.4906 15.0729 17.0157 14.78 16.7229C14.487 16.4301 14.0121 16.4302 13.7193 16.7231L11.2193 19.2242C11.0787 19.3649 10.9997 19.5557 10.9998 19.7546C10.9998 19.9535 11.0789 20.1442 11.2195 20.2849L13.7195 22.7838C14.0125 23.0766 14.4874 23.0765 14.7802 22.7835C15.073 22.4906 15.0729 22.0157 14.78 21.7229L13.5599 20.5033H20.4399L19.2196 21.7228C18.9266 22.0156 18.9265 22.4905 19.2193 22.7835C19.5121 23.0765 19.9869 23.0766 20.2799 22.7838L22.7799 20.2854C22.9206 20.1448 22.9997 19.9541 22.9998 19.7552C22.9998 19.5563 22.9209 19.3655 22.7803 19.2248L20.2803 16.7232C19.9875 16.4302 19.5126 16.43 19.2196 16.7228C18.9266 17.0156 18.9265 17.4905 19.2193 17.7835L20.4383 19.0033H13.5609L14.7802 17.7835Z"
                                                                                    fill="#212121" />
                                                                            </svg> <span class="btn-text-inner">تغيير
                                                                                المشرف</span>
                                                                        </button>
                                                                        <button
                                                                            onclick="window.location.href='{{ route('profile') }}'"
                                                                            class="btn btn-outline-info btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?>
                                                                            <!DOCTYPE svg
                                                                                PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>
                                                                            <svg enable-background="new 0 0 32 32"
                                                                                height="32px" id="Layer_1"
                                                                                version="1.1" viewBox="0 0 32 32"
                                                                                width="32px" xml:space="preserve"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                                <g id="eye">
                                                                                    <path
                                                                                        d="M31.965,15.776c-0.01-0.042-0.004-0.087-0.02-0.128c-0.006-0.017-0.021-0.026-0.027-0.042   c-0.01-0.024-0.008-0.051-0.021-0.074c-2.9-5.551-9.213-9.528-15.873-9.528c-6.661,0-12.973,3.971-15.875,9.521   c-0.013,0.023-0.011,0.05-0.021,0.074c-0.007,0.016-0.021,0.025-0.027,0.042c-0.016,0.041-0.01,0.086-0.02,0.128   c-0.018,0.075-0.035,0.147-0.035,0.224s0.018,0.148,0.035,0.224c0.01,0.042,0.004,0.087,0.02,0.128   c0.006,0.017,0.021,0.026,0.027,0.042c0.01,0.024,0.008,0.051,0.021,0.074c2.901,5.551,9.214,9.528,15.875,9.528   c6.66,0,12.973-3.971,15.873-9.521c0.014-0.023,0.012-0.05,0.021-0.074c0.006-0.016,0.021-0.025,0.027-0.042   c0.016-0.041,0.01-0.086,0.02-0.128C31.982,16.148,32,16.076,32,16S31.982,15.851,31.965,15.776z M16.023,23.988   c-5.615,0-11.112-3.191-13.851-7.995c2.754-4.81,8.243-7.99,13.851-7.99c5.613,0,11.111,3.192,13.85,7.995   C27.119,20.809,21.631,23.988,16.023,23.988z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16.023,11.999c-0.002,0-0.004,0.001-0.006,0.001c-2.205,0.004-3.992,1.791-3.992,3.996   c0,0.276,0.224,0.5,0.5,0.5c0.275,0,0.499-0.224,0.499-0.5c0-1.652,1.345-2.997,2.999-2.997v-0.001   c0.275,0,0.498-0.224,0.498-0.499C16.521,12.222,16.299,11.999,16.023,11.999z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16,9c-3.867,0-7,3.134-7,7c0,3.866,3.134,7,7,7c3.865,0,7-3.135,7-7C23,12.133,19.865,9,16,9z M16,22   c-3.309,0-6-2.691-6-6c0-3.309,2.691-6,6-6c3.309,0,6,2.691,6,6C22,19.309,19.309,22,16,22z"
                                                                                        fill="#333333" />
                                                                                </g>
                                                                            </svg> <span class="btn-text-inner">عرض صفحة
                                                                                الطالب</span>
                                                                        </button>
                                                                        <button
                                                                            class="btn btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg
                                                                                viewBox="0 0 32 32"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .cls-1 {
                                                                                            fill: none;
                                                                                            stroke: #000;
                                                                                            stroke-linecap: round;
                                                                                            stroke-linejoin: round;
                                                                                            stroke-width: 2px;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <title />
                                                                                <g id="cross">
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="7"
                                                                                        y2="25" />
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="25"
                                                                                        y2="7" />
                                                                                </g>
                                                                            </svg><span class="btn-text-inner">حذف
                                                                                الطالب</span>

                                                                        </button>
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>



                                            </tbody>
                                        </table>
                                    </td>

                                </tr>

                                <tr class="tathbeetRow">
                                    <td class="text-center tathbeetTitel">الخمسة الثانية</td>
                                    <td class="text-center">
                                        <button onclick="toggleVisibility('tathbeet2')"
                                            class=" tathbeetTitel btn btn-dark btn-rounded btn-outline-dark mb-2 me-4 _effect--ripple waves-effect waves-light">عرض
                                            التفاصيل</button>
                                            <button
                                            class="btn btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            <?xml version="1.0" ?><svg
                                                viewBox="0 0 32 32"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <defs>
                                                    <style>
                                                        .cls-1 {
                                                            fill: none;
                                                            stroke: #000;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                    </style>
                                                </defs>
                                                <title />
                                                <g id="cross">
                                                    <line class="cls-1" x1="7"
                                                        x2="25" y1="7"
                                                        y2="25" />
                                                    <line class="cls-1" x1="7"
                                                        x2="25" y1="25"
                                                        y2="7" />
                                                </g>
                                            </svg><span class="btn-text-inner">حذف
                                                الدورة</span>

                                        </button>
                                    </td>
                                </tr>
                                <tr id="tathbeet2" class="hidden">
                                    <td colspan="2">
                                        <table class="table table-bordered table-borderedMushref container">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" scope="col">اسم المشرف</th>
                                                    <th class="text-center" scope="col">عدد الطلاب</th>
                                                    <th class="text-center" scope="col">الإجراءات</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <div class="avatar me-2">
                                                                <img alt="avatar"
                                                                    src="{{ asset('AdminAssets/img/profile-7.jpeg') }}"
                                                                    class="rounded-circle" />
                                                            </div>
                                                            <div class="media-body align-self-center">
                                                                <h6 class="mb-0">أسامة مهنا</h6>
                                                                <span>shaun.park@mail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">3</p>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="action-btns">
                                                            <a href="javascript:void(0);"
                                                                onclick="toggleStudents('mushref_o')"
                                                                class="action-btn btn-view bs-tooltip me-2"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="عرض طلاب المشرف">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-eye">
                                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                    </path>
                                                                    <circle cx="12" cy="12" r="3"></circle>
                                                                </svg>
                                                            </a>

                                                            <a href="javascript:void(0);"
                                                                class="action-btn btn-edit bs-tooltip me-2 btn-addStudent"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="أضافة طالب جديد">
                                                                <svg height="512" viewBox="0 0 512 512" width="512"
                                                                    xmlns="http://www.w3.org/2000/svg">

                                                                    <path
                                                                        d="M376,144c-3.92,52.87-44,96-88,96s-84.15-43.12-88-96c-4-55,35-96,88-96S380,90,376,144Z"
                                                                        style="fill:none;stroke:#888ea8;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                                                    <path
                                                                        d="M288,304c-87,0-175.3,48-191.64,138.6-2,10.92,4.21,21.4,15.65,21.4H464c11.44,0,17.62-10.48,15.65-21.4C463.3,352,375,304,288,304Z"
                                                                        style="fill:none;stroke:#888ea8;stroke-miterlimit:10;stroke-width:32px" />
                                                                    <line
                                                                        style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                                        x1="88" x2="88" y1="176"
                                                                        y2="288" />
                                                                    <line
                                                                        style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                                        x1="144" x2="32" y1="232"
                                                                        y2="232" />
                                                                </svg>
                                                            </a>

                                                            <a href="javascript:void(0);"
                                                                class="action-btn btn-delete bs-tooltip"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="حذف المشرف">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-trash-2">
                                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                                    <path
                                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                    </path>
                                                                    <line x1="10" y1="11" x2="10"
                                                                        y2="17">
                                                                    </line>
                                                                    <line x1="14" y1="11" x2="14"
                                                                        y2="17">
                                                                    </line>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                
                                                <tr id="mushref_o" class="student-row">

                                                    <td colspan="3">
                                                        <table class="justify-content-center studentTable">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center" scope="col"> اسم الطالب
                                                                    </th>
                                                                    <th class="text-center" scope="col">الإجراءات</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="media">
                                                                            <div class="avatar me-2">

                                                                                <img alt="avatar"
                                                                                    src="{{ asset('AdminAssets/img/profile-13.jpeg') }}"
                                                                                    class="rounded-circle" />
                                                                            </div>
                                                                            <div class="media-body align-self-center">
                                                                                <h6 class="mb-0">ماجد محمد</h6>
                                                                                <span>shaun.park@mail.com</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <button
                                                                            class="btn-changeMushref btn btn-outline-dark btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg fill="none"
                                                                                height="24" viewBox="0 0 24 24"
                                                                                width="24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M15.7506 13.9972C16.7312 13.9972 17.5652 14.6248 17.8728 15.5002H15.8174C15.7954 15.4982 15.7731 15.4972 15.7506 15.4972H4.24888C3.83528 15.4972 3.5 15.8325 3.5 16.2461V16.8238C3.5 17.3595 3.69111 17.8776 4.03897 18.2849C5.29228 19.7526 7.25815 20.4984 9.99646 20.4984C10.0526 20.4984 10.1085 20.4981 10.164 20.4975C10.2496 20.6809 10.3672 20.8499 10.5133 20.9957L11.4478 21.9288C10.9836 21.9752 10.4997 21.9984 9.99646 21.9984C6.8506 21.9984 4.46458 21.0932 2.89828 19.259C2.31852 18.5801 2 17.7166 2 16.8238V16.2461C2 15.0041 3.00686 13.9972 4.24888 13.9972H15.7506Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M9.99646 2.00195C12.7579 2.00195 14.9965 4.24053 14.9965 7.00195C14.9965 9.76338 12.7579 12.002 9.99646 12.002C7.23503 12.002 4.99646 9.76338 4.99646 7.00195C4.99646 4.24053 7.23503 2.00195 9.99646 2.00195ZM9.99646 3.50195C8.06346 3.50195 6.49646 5.06896 6.49646 7.00195C6.49646 8.93495 8.06346 10.502 9.99646 10.502C11.9295 10.502 13.4965 8.93495 13.4965 7.00195C13.4965 5.06896 11.9295 3.50195 9.99646 3.50195Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M14.7802 17.7835C15.073 17.4906 15.0729 17.0157 14.78 16.7229C14.487 16.4301 14.0121 16.4302 13.7193 16.7231L11.2193 19.2242C11.0787 19.3649 10.9997 19.5557 10.9998 19.7546C10.9998 19.9535 11.0789 20.1442 11.2195 20.2849L13.7195 22.7838C14.0125 23.0766 14.4874 23.0765 14.7802 22.7835C15.073 22.4906 15.0729 22.0157 14.78 21.7229L13.5599 20.5033H20.4399L19.2196 21.7228C18.9266 22.0156 18.9265 22.4905 19.2193 22.7835C19.5121 23.0765 19.9869 23.0766 20.2799 22.7838L22.7799 20.2854C22.9206 20.1448 22.9997 19.9541 22.9998 19.7552C22.9998 19.5563 22.9209 19.3655 22.7803 19.2248L20.2803 16.7232C19.9875 16.4302 19.5126 16.43 19.2196 16.7228C18.9266 17.0156 18.9265 17.4905 19.2193 17.7835L20.4383 19.0033H13.5609L14.7802 17.7835Z"
                                                                                    fill="#212121" />
                                                                            </svg> <span class="btn-text-inner">تغيير
                                                                                المشرف</span>
                                                                        </button>
                                                                        <button
                                                                            onclick="window.location.href='{{ route('profile') }}'"
                                                                            class="btn btn-outline-info btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?>
                                                                            <!DOCTYPE svg
                                                                                PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>
                                                                            <svg enable-background="new 0 0 32 32"
                                                                                height="32px" id="Layer_1"
                                                                                version="1.1" viewBox="0 0 32 32"
                                                                                width="32px" xml:space="preserve"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                                <g id="eye">
                                                                                    <path
                                                                                        d="M31.965,15.776c-0.01-0.042-0.004-0.087-0.02-0.128c-0.006-0.017-0.021-0.026-0.027-0.042   c-0.01-0.024-0.008-0.051-0.021-0.074c-2.9-5.551-9.213-9.528-15.873-9.528c-6.661,0-12.973,3.971-15.875,9.521   c-0.013,0.023-0.011,0.05-0.021,0.074c-0.007,0.016-0.021,0.025-0.027,0.042c-0.016,0.041-0.01,0.086-0.02,0.128   c-0.018,0.075-0.035,0.147-0.035,0.224s0.018,0.148,0.035,0.224c0.01,0.042,0.004,0.087,0.02,0.128   c0.006,0.017,0.021,0.026,0.027,0.042c0.01,0.024,0.008,0.051,0.021,0.074c2.901,5.551,9.214,9.528,15.875,9.528   c6.66,0,12.973-3.971,15.873-9.521c0.014-0.023,0.012-0.05,0.021-0.074c0.006-0.016,0.021-0.025,0.027-0.042   c0.016-0.041,0.01-0.086,0.02-0.128C31.982,16.148,32,16.076,32,16S31.982,15.851,31.965,15.776z M16.023,23.988   c-5.615,0-11.112-3.191-13.851-7.995c2.754-4.81,8.243-7.99,13.851-7.99c5.613,0,11.111,3.192,13.85,7.995   C27.119,20.809,21.631,23.988,16.023,23.988z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16.023,11.999c-0.002,0-0.004,0.001-0.006,0.001c-2.205,0.004-3.992,1.791-3.992,3.996   c0,0.276,0.224,0.5,0.5,0.5c0.275,0,0.499-0.224,0.499-0.5c0-1.652,1.345-2.997,2.999-2.997v-0.001   c0.275,0,0.498-0.224,0.498-0.499C16.521,12.222,16.299,11.999,16.023,11.999z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16,9c-3.867,0-7,3.134-7,7c0,3.866,3.134,7,7,7c3.865,0,7-3.135,7-7C23,12.133,19.865,9,16,9z M16,22   c-3.309,0-6-2.691-6-6c0-3.309,2.691-6,6-6c3.309,0,6,2.691,6,6C22,19.309,19.309,22,16,22z"
                                                                                        fill="#333333" />
                                                                                </g>
                                                                            </svg> <span class="btn-text-inner">عرض صفحة
                                                                                الطالب</span>
                                                                        </button>
                                                                        <button
                                                                            class="btn btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg
                                                                                viewBox="0 0 32 32"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .cls-1 {
                                                                                            fill: none;
                                                                                            stroke: #000;
                                                                                            stroke-linecap: round;
                                                                                            stroke-linejoin: round;
                                                                                            stroke-width: 2px;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <title />
                                                                                <g id="cross">
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="7"
                                                                                        y2="25" />
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="25"
                                                                                        y2="7" />
                                                                                </g>
                                                                            </svg><span class="btn-text-inner">حذف
                                                                                الطالب</span>

                                                                        </button>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <div class="media">
                                                                            <div class="avatar me-2">
                                                                                <img alt="avatar"
                                                                                    src="{{ asset('AdminAssets/img/profile-14.jpeg') }}"
                                                                                    class="rounded-circle" />
                                                                            </div>
                                                                            <div class="media-body align-self-center">
                                                                                <h6 class="mb-0">أحمد محمد</h6>
                                                                                <span>shaun.park@mail.com</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <button
                                                                            class="btn btn-outline-dark btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg fill="none"
                                                                                height="24" viewBox="0 0 24 24"
                                                                                width="24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M15.7506 13.9972C16.7312 13.9972 17.5652 14.6248 17.8728 15.5002H15.8174C15.7954 15.4982 15.7731 15.4972 15.7506 15.4972H4.24888C3.83528 15.4972 3.5 15.8325 3.5 16.2461V16.8238C3.5 17.3595 3.69111 17.8776 4.03897 18.2849C5.29228 19.7526 7.25815 20.4984 9.99646 20.4984C10.0526 20.4984 10.1085 20.4981 10.164 20.4975C10.2496 20.6809 10.3672 20.8499 10.5133 20.9957L11.4478 21.9288C10.9836 21.9752 10.4997 21.9984 9.99646 21.9984C6.8506 21.9984 4.46458 21.0932 2.89828 19.259C2.31852 18.5801 2 17.7166 2 16.8238V16.2461C2 15.0041 3.00686 13.9972 4.24888 13.9972H15.7506Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M9.99646 2.00195C12.7579 2.00195 14.9965 4.24053 14.9965 7.00195C14.9965 9.76338 12.7579 12.002 9.99646 12.002C7.23503 12.002 4.99646 9.76338 4.99646 7.00195C4.99646 4.24053 7.23503 2.00195 9.99646 2.00195ZM9.99646 3.50195C8.06346 3.50195 6.49646 5.06896 6.49646 7.00195C6.49646 8.93495 8.06346 10.502 9.99646 10.502C11.9295 10.502 13.4965 8.93495 13.4965 7.00195C13.4965 5.06896 11.9295 3.50195 9.99646 3.50195Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M14.7802 17.7835C15.073 17.4906 15.0729 17.0157 14.78 16.7229C14.487 16.4301 14.0121 16.4302 13.7193 16.7231L11.2193 19.2242C11.0787 19.3649 10.9997 19.5557 10.9998 19.7546C10.9998 19.9535 11.0789 20.1442 11.2195 20.2849L13.7195 22.7838C14.0125 23.0766 14.4874 23.0765 14.7802 22.7835C15.073 22.4906 15.0729 22.0157 14.78 21.7229L13.5599 20.5033H20.4399L19.2196 21.7228C18.9266 22.0156 18.9265 22.4905 19.2193 22.7835C19.5121 23.0765 19.9869 23.0766 20.2799 22.7838L22.7799 20.2854C22.9206 20.1448 22.9997 19.9541 22.9998 19.7552C22.9998 19.5563 22.9209 19.3655 22.7803 19.2248L20.2803 16.7232C19.9875 16.4302 19.5126 16.43 19.2196 16.7228C18.9266 17.0156 18.9265 17.4905 19.2193 17.7835L20.4383 19.0033H13.5609L14.7802 17.7835Z"
                                                                                    fill="#212121" />
                                                                            </svg> <span class="btn-text-inner">تغيير
                                                                                المشرف</span>
                                                                        </button>
                                                                        <button
                                                                            class="btn btn-outline-info btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?>
                                                                            <!DOCTYPE svg
                                                                                PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>
                                                                            <svg enable-background="new 0 0 32 32"
                                                                                height="32px" id="Layer_1"
                                                                                version="1.1" viewBox="0 0 32 32"
                                                                                width="32px" xml:space="preserve"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                                <g id="eye">
                                                                                    <path
                                                                                        d="M31.965,15.776c-0.01-0.042-0.004-0.087-0.02-0.128c-0.006-0.017-0.021-0.026-0.027-0.042   c-0.01-0.024-0.008-0.051-0.021-0.074c-2.9-5.551-9.213-9.528-15.873-9.528c-6.661,0-12.973,3.971-15.875,9.521   c-0.013,0.023-0.011,0.05-0.021,0.074c-0.007,0.016-0.021,0.025-0.027,0.042c-0.016,0.041-0.01,0.086-0.02,0.128   c-0.018,0.075-0.035,0.147-0.035,0.224s0.018,0.148,0.035,0.224c0.01,0.042,0.004,0.087,0.02,0.128   c0.006,0.017,0.021,0.026,0.027,0.042c0.01,0.024,0.008,0.051,0.021,0.074c2.901,5.551,9.214,9.528,15.875,9.528   c6.66,0,12.973-3.971,15.873-9.521c0.014-0.023,0.012-0.05,0.021-0.074c0.006-0.016,0.021-0.025,0.027-0.042   c0.016-0.041,0.01-0.086,0.02-0.128C31.982,16.148,32,16.076,32,16S31.982,15.851,31.965,15.776z M16.023,23.988   c-5.615,0-11.112-3.191-13.851-7.995c2.754-4.81,8.243-7.99,13.851-7.99c5.613,0,11.111,3.192,13.85,7.995   C27.119,20.809,21.631,23.988,16.023,23.988z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16.023,11.999c-0.002,0-0.004,0.001-0.006,0.001c-2.205,0.004-3.992,1.791-3.992,3.996   c0,0.276,0.224,0.5,0.5,0.5c0.275,0,0.499-0.224,0.499-0.5c0-1.652,1.345-2.997,2.999-2.997v-0.001   c0.275,0,0.498-0.224,0.498-0.499C16.521,12.222,16.299,11.999,16.023,11.999z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16,9c-3.867,0-7,3.134-7,7c0,3.866,3.134,7,7,7c3.865,0,7-3.135,7-7C23,12.133,19.865,9,16,9z M16,22   c-3.309,0-6-2.691-6-6c0-3.309,2.691-6,6-6c3.309,0,6,2.691,6,6C22,19.309,19.309,22,16,22z"
                                                                                        fill="#333333" />
                                                                                </g>
                                                                            </svg> <span class="btn-text-inner">عرض صفحة
                                                                                الطالب</span>
                                                                        </button>
                                                                        <button
                                                                            class="btn btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg
                                                                                viewBox="0 0 32 32"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .cls-1 {
                                                                                            fill: none;
                                                                                            stroke: #000;
                                                                                            stroke-linecap: round;
                                                                                            stroke-linejoin: round;
                                                                                            stroke-width: 2px;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <title />
                                                                                <g id="cross">
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="7"
                                                                                        y2="25" />
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="25"
                                                                                        y2="7" />
                                                                                </g>
                                                                            </svg><span class="btn-text-inner">حذف
                                                                                الطالب</span>

                                                                        </button>
                                                                    </td>
                                                                </tr>


                                                                <tr>
                                                                    <td>
                                                                        <div class="media">
                                                                            <div class="avatar me-2">
                                                                                <img alt="avatar"
                                                                                    src="{{ asset('AdminAssets/img/profile-14.jpeg') }}"
                                                                                    class="rounded-circle" />
                                                                            </div>
                                                                            <div class="media-body align-self-center">
                                                                                <h6 class="mb-0">عبد الرحمن </h6>
                                                                                <span>shaun.park@mail.com</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <button
                                                                            class="btn btn-outline-dark btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg fill="none"
                                                                                height="24" viewBox="0 0 24 24"
                                                                                width="24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M15.7506 13.9972C16.7312 13.9972 17.5652 14.6248 17.8728 15.5002H15.8174C15.7954 15.4982 15.7731 15.4972 15.7506 15.4972H4.24888C3.83528 15.4972 3.5 15.8325 3.5 16.2461V16.8238C3.5 17.3595 3.69111 17.8776 4.03897 18.2849C5.29228 19.7526 7.25815 20.4984 9.99646 20.4984C10.0526 20.4984 10.1085 20.4981 10.164 20.4975C10.2496 20.6809 10.3672 20.8499 10.5133 20.9957L11.4478 21.9288C10.9836 21.9752 10.4997 21.9984 9.99646 21.9984C6.8506 21.9984 4.46458 21.0932 2.89828 19.259C2.31852 18.5801 2 17.7166 2 16.8238V16.2461C2 15.0041 3.00686 13.9972 4.24888 13.9972H15.7506Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M9.99646 2.00195C12.7579 2.00195 14.9965 4.24053 14.9965 7.00195C14.9965 9.76338 12.7579 12.002 9.99646 12.002C7.23503 12.002 4.99646 9.76338 4.99646 7.00195C4.99646 4.24053 7.23503 2.00195 9.99646 2.00195ZM9.99646 3.50195C8.06346 3.50195 6.49646 5.06896 6.49646 7.00195C6.49646 8.93495 8.06346 10.502 9.99646 10.502C11.9295 10.502 13.4965 8.93495 13.4965 7.00195C13.4965 5.06896 11.9295 3.50195 9.99646 3.50195Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M14.7802 17.7835C15.073 17.4906 15.0729 17.0157 14.78 16.7229C14.487 16.4301 14.0121 16.4302 13.7193 16.7231L11.2193 19.2242C11.0787 19.3649 10.9997 19.5557 10.9998 19.7546C10.9998 19.9535 11.0789 20.1442 11.2195 20.2849L13.7195 22.7838C14.0125 23.0766 14.4874 23.0765 14.7802 22.7835C15.073 22.4906 15.0729 22.0157 14.78 21.7229L13.5599 20.5033H20.4399L19.2196 21.7228C18.9266 22.0156 18.9265 22.4905 19.2193 22.7835C19.5121 23.0765 19.9869 23.0766 20.2799 22.7838L22.7799 20.2854C22.9206 20.1448 22.9997 19.9541 22.9998 19.7552C22.9998 19.5563 22.9209 19.3655 22.7803 19.2248L20.2803 16.7232C19.9875 16.4302 19.5126 16.43 19.2196 16.7228C18.9266 17.0156 18.9265 17.4905 19.2193 17.7835L20.4383 19.0033H13.5609L14.7802 17.7835Z"
                                                                                    fill="#212121" />
                                                                            </svg> <span class="btn-text-inner">تغيير
                                                                                المشرف</span>
                                                                        </button>
                                                                        <button
                                                                            onclick="window.location.href='{{ route('profile') }}'"
                                                                            class="btn btn-outline-info btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?>
                                                                            <!DOCTYPE svg
                                                                                PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>
                                                                            <svg enable-background="new 0 0 32 32"
                                                                                height="32px" id="Layer_1"
                                                                                version="1.1" viewBox="0 0 32 32"
                                                                                width="32px" xml:space="preserve"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                                <g id="eye">
                                                                                    <path
                                                                                        d="M31.965,15.776c-0.01-0.042-0.004-0.087-0.02-0.128c-0.006-0.017-0.021-0.026-0.027-0.042   c-0.01-0.024-0.008-0.051-0.021-0.074c-2.9-5.551-9.213-9.528-15.873-9.528c-6.661,0-12.973,3.971-15.875,9.521   c-0.013,0.023-0.011,0.05-0.021,0.074c-0.007,0.016-0.021,0.025-0.027,0.042c-0.016,0.041-0.01,0.086-0.02,0.128   c-0.018,0.075-0.035,0.147-0.035,0.224s0.018,0.148,0.035,0.224c0.01,0.042,0.004,0.087,0.02,0.128   c0.006,0.017,0.021,0.026,0.027,0.042c0.01,0.024,0.008,0.051,0.021,0.074c2.901,5.551,9.214,9.528,15.875,9.528   c6.66,0,12.973-3.971,15.873-9.521c0.014-0.023,0.012-0.05,0.021-0.074c0.006-0.016,0.021-0.025,0.027-0.042   c0.016-0.041,0.01-0.086,0.02-0.128C31.982,16.148,32,16.076,32,16S31.982,15.851,31.965,15.776z M16.023,23.988   c-5.615,0-11.112-3.191-13.851-7.995c2.754-4.81,8.243-7.99,13.851-7.99c5.613,0,11.111,3.192,13.85,7.995   C27.119,20.809,21.631,23.988,16.023,23.988z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16.023,11.999c-0.002,0-0.004,0.001-0.006,0.001c-2.205,0.004-3.992,1.791-3.992,3.996   c0,0.276,0.224,0.5,0.5,0.5c0.275,0,0.499-0.224,0.499-0.5c0-1.652,1.345-2.997,2.999-2.997v-0.001   c0.275,0,0.498-0.224,0.498-0.499C16.521,12.222,16.299,11.999,16.023,11.999z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16,9c-3.867,0-7,3.134-7,7c0,3.866,3.134,7,7,7c3.865,0,7-3.135,7-7C23,12.133,19.865,9,16,9z M16,22   c-3.309,0-6-2.691-6-6c0-3.309,2.691-6,6-6c3.309,0,6,2.691,6,6C22,19.309,19.309,22,16,22z"
                                                                                        fill="#333333" />
                                                                                </g>
                                                                            </svg> <span class="btn-text-inner">عرض صفحة
                                                                                الطالب</span>
                                                                        </button>
                                                                        <button
                                                                            class="btn btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg
                                                                                viewBox="0 0 32 32"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .cls-1 {
                                                                                            fill: none;
                                                                                            stroke: #000;
                                                                                            stroke-linecap: round;
                                                                                            stroke-linejoin: round;
                                                                                            stroke-width: 2px;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <title />
                                                                                <g id="cross">
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="7"
                                                                                        y2="25" />
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="25"
                                                                                        y2="7" />
                                                                                </g>
                                                                            </svg><span class="btn-text-inner">حذف
                                                                                الطالب</span>

                                                                        </button>
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <div class="avatar me-2">
                                                                <img alt="avatar"
                                                                    src="{{ asset('AdminAssets/img/profile-13.jpeg') }}"
                                                                    class="rounded-circle" />
                                                            </div>
                                                            <div class="media-body align-self-center">
                                                                <h6 class="mb-0">سعيد إغبارية</h6>
                                                                <span>shaun.park@mail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">3</p>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="action-btns">
                                                            <a href="javascript:void(0);"
                                                                onclick="toggleStudents('mushref_s')"
                                                                class="action-btn btn-view bs-tooltip me-2"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="عرض طلاب المشرف">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-eye">
                                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                    </path>
                                                                    <circle cx="12" cy="12" r="3"></circle>
                                                                </svg>
                                                            </a>

                                                            <a href="javascript:void(0);"
                                                                class="action-btn btn-edit bs-tooltip me-2"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="أضافة طالب جديد">
                                                                <svg height="512" viewBox="0 0 512 512" width="512"
                                                                    xmlns="http://www.w3.org/2000/svg">

                                                                    <path
                                                                        d="M376,144c-3.92,52.87-44,96-88,96s-84.15-43.12-88-96c-4-55,35-96,88-96S380,90,376,144Z"
                                                                        style="fill:none;stroke:#888ea8;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                                                    <path
                                                                        d="M288,304c-87,0-175.3,48-191.64,138.6-2,10.92,4.21,21.4,15.65,21.4H464c11.44,0,17.62-10.48,15.65-21.4C463.3,352,375,304,288,304Z"
                                                                        style="fill:none;stroke:#888ea8;stroke-miterlimit:10;stroke-width:32px" />
                                                                    <line
                                                                        style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                                        x1="88" x2="88" y1="176"
                                                                        y2="288" />
                                                                    <line
                                                                        style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                                        x1="144" x2="32" y1="232"
                                                                        y2="232" />
                                                                </svg>
                                                            </a>

                                                            <a href="javascript:void(0);"
                                                                class="action-btn btn-delete bs-tooltip"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="حذف المشرف">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-trash-2">
                                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                                    <path
                                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                    </path>
                                                                    <line x1="10" y1="11" x2="10"
                                                                        y2="17">
                                                                    </line>
                                                                    <line x1="14" y1="11" x2="14"
                                                                        y2="17">
                                                                    </line>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr id="mushref_s" class="student-row">

                                                    <td colspan="3">
                                                        <table class="justify-content-center studentTable">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center" scope="col"> اسم الطالب
                                                                    </th>
                                                                    <th class="text-center" scope="col">الإجراءات</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="media">
                                                                            <div class="avatar me-2">
                                                                                <img alt="avatar"
                                                                                    src="{{ asset('AdminAssets/img/profile-14.jpeg') }}"
                                                                                    class="rounded-circle" />
                                                                            </div>
                                                                            <div class="media-body align-self-center">
                                                                                <h6 class="mb-0">ماجد محمد</h6>
                                                                                <span>shaun.park@mail.com</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <button
                                                                            class="btn btn-outline-dark btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg fill="none"
                                                                                height="24" viewBox="0 0 24 24"
                                                                                width="24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M15.7506 13.9972C16.7312 13.9972 17.5652 14.6248 17.8728 15.5002H15.8174C15.7954 15.4982 15.7731 15.4972 15.7506 15.4972H4.24888C3.83528 15.4972 3.5 15.8325 3.5 16.2461V16.8238C3.5 17.3595 3.69111 17.8776 4.03897 18.2849C5.29228 19.7526 7.25815 20.4984 9.99646 20.4984C10.0526 20.4984 10.1085 20.4981 10.164 20.4975C10.2496 20.6809 10.3672 20.8499 10.5133 20.9957L11.4478 21.9288C10.9836 21.9752 10.4997 21.9984 9.99646 21.9984C6.8506 21.9984 4.46458 21.0932 2.89828 19.259C2.31852 18.5801 2 17.7166 2 16.8238V16.2461C2 15.0041 3.00686 13.9972 4.24888 13.9972H15.7506Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M9.99646 2.00195C12.7579 2.00195 14.9965 4.24053 14.9965 7.00195C14.9965 9.76338 12.7579 12.002 9.99646 12.002C7.23503 12.002 4.99646 9.76338 4.99646 7.00195C4.99646 4.24053 7.23503 2.00195 9.99646 2.00195ZM9.99646 3.50195C8.06346 3.50195 6.49646 5.06896 6.49646 7.00195C6.49646 8.93495 8.06346 10.502 9.99646 10.502C11.9295 10.502 13.4965 8.93495 13.4965 7.00195C13.4965 5.06896 11.9295 3.50195 9.99646 3.50195Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M14.7802 17.7835C15.073 17.4906 15.0729 17.0157 14.78 16.7229C14.487 16.4301 14.0121 16.4302 13.7193 16.7231L11.2193 19.2242C11.0787 19.3649 10.9997 19.5557 10.9998 19.7546C10.9998 19.9535 11.0789 20.1442 11.2195 20.2849L13.7195 22.7838C14.0125 23.0766 14.4874 23.0765 14.7802 22.7835C15.073 22.4906 15.0729 22.0157 14.78 21.7229L13.5599 20.5033H20.4399L19.2196 21.7228C18.9266 22.0156 18.9265 22.4905 19.2193 22.7835C19.5121 23.0765 19.9869 23.0766 20.2799 22.7838L22.7799 20.2854C22.9206 20.1448 22.9997 19.9541 22.9998 19.7552C22.9998 19.5563 22.9209 19.3655 22.7803 19.2248L20.2803 16.7232C19.9875 16.4302 19.5126 16.43 19.2196 16.7228C18.9266 17.0156 18.9265 17.4905 19.2193 17.7835L20.4383 19.0033H13.5609L14.7802 17.7835Z"
                                                                                    fill="#212121" />
                                                                            </svg> <span class="btn-text-inner">تغيير
                                                                                المشرف</span>
                                                                        </button>
                                                                        <button
                                                                            class="btn btn-outline-info btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?>
                                                                            <!DOCTYPE svg
                                                                                PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>
                                                                            <svg enable-background="new 0 0 32 32"
                                                                                height="32px" id="Layer_1"
                                                                                version="1.1" viewBox="0 0 32 32"
                                                                                width="32px" xml:space="preserve"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                                <g id="eye">
                                                                                    <path
                                                                                        d="M31.965,15.776c-0.01-0.042-0.004-0.087-0.02-0.128c-0.006-0.017-0.021-0.026-0.027-0.042   c-0.01-0.024-0.008-0.051-0.021-0.074c-2.9-5.551-9.213-9.528-15.873-9.528c-6.661,0-12.973,3.971-15.875,9.521   c-0.013,0.023-0.011,0.05-0.021,0.074c-0.007,0.016-0.021,0.025-0.027,0.042c-0.016,0.041-0.01,0.086-0.02,0.128   c-0.018,0.075-0.035,0.147-0.035,0.224s0.018,0.148,0.035,0.224c0.01,0.042,0.004,0.087,0.02,0.128   c0.006,0.017,0.021,0.026,0.027,0.042c0.01,0.024,0.008,0.051,0.021,0.074c2.901,5.551,9.214,9.528,15.875,9.528   c6.66,0,12.973-3.971,15.873-9.521c0.014-0.023,0.012-0.05,0.021-0.074c0.006-0.016,0.021-0.025,0.027-0.042   c0.016-0.041,0.01-0.086,0.02-0.128C31.982,16.148,32,16.076,32,16S31.982,15.851,31.965,15.776z M16.023,23.988   c-5.615,0-11.112-3.191-13.851-7.995c2.754-4.81,8.243-7.99,13.851-7.99c5.613,0,11.111,3.192,13.85,7.995   C27.119,20.809,21.631,23.988,16.023,23.988z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16.023,11.999c-0.002,0-0.004,0.001-0.006,0.001c-2.205,0.004-3.992,1.791-3.992,3.996   c0,0.276,0.224,0.5,0.5,0.5c0.275,0,0.499-0.224,0.499-0.5c0-1.652,1.345-2.997,2.999-2.997v-0.001   c0.275,0,0.498-0.224,0.498-0.499C16.521,12.222,16.299,11.999,16.023,11.999z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16,9c-3.867,0-7,3.134-7,7c0,3.866,3.134,7,7,7c3.865,0,7-3.135,7-7C23,12.133,19.865,9,16,9z M16,22   c-3.309,0-6-2.691-6-6c0-3.309,2.691-6,6-6c3.309,0,6,2.691,6,6C22,19.309,19.309,22,16,22z"
                                                                                        fill="#333333" />
                                                                                </g>
                                                                            </svg> <span class="btn-text-inner">عرض صفحة
                                                                                الطالب</span>
                                                                        </button>
                                                                        <button
                                                                            class="btn btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg
                                                                                viewBox="0 0 32 32"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .cls-1 {
                                                                                            fill: none;
                                                                                            stroke: #000;
                                                                                            stroke-linecap: round;
                                                                                            stroke-linejoin: round;
                                                                                            stroke-width: 2px;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <title />
                                                                                <g id="cross">
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="7"
                                                                                        y2="25" />
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="25"
                                                                                        y2="7" />
                                                                                </g>
                                                                            </svg><span class="btn-text-inner">حذف
                                                                                الطالب</span>

                                                                        </button>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <div class="media">
                                                                            <div class="avatar me-2">
                                                                                <img alt="avatar"
                                                                                    src="{{ asset('AdminAssets/img/profile-14.jpeg') }}"
                                                                                    class="rounded-circle" />
                                                                            </div>
                                                                            <div class="media-body align-self-center">
                                                                                <h6 class="mb-0">أحمد محمد</h6>
                                                                                <span>shaun.park@mail.com</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <button
                                                                            class="btn btn-outline-dark btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg fill="none"
                                                                                height="24" viewBox="0 0 24 24"
                                                                                width="24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M15.7506 13.9972C16.7312 13.9972 17.5652 14.6248 17.8728 15.5002H15.8174C15.7954 15.4982 15.7731 15.4972 15.7506 15.4972H4.24888C3.83528 15.4972 3.5 15.8325 3.5 16.2461V16.8238C3.5 17.3595 3.69111 17.8776 4.03897 18.2849C5.29228 19.7526 7.25815 20.4984 9.99646 20.4984C10.0526 20.4984 10.1085 20.4981 10.164 20.4975C10.2496 20.6809 10.3672 20.8499 10.5133 20.9957L11.4478 21.9288C10.9836 21.9752 10.4997 21.9984 9.99646 21.9984C6.8506 21.9984 4.46458 21.0932 2.89828 19.259C2.31852 18.5801 2 17.7166 2 16.8238V16.2461C2 15.0041 3.00686 13.9972 4.24888 13.9972H15.7506Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M9.99646 2.00195C12.7579 2.00195 14.9965 4.24053 14.9965 7.00195C14.9965 9.76338 12.7579 12.002 9.99646 12.002C7.23503 12.002 4.99646 9.76338 4.99646 7.00195C4.99646 4.24053 7.23503 2.00195 9.99646 2.00195ZM9.99646 3.50195C8.06346 3.50195 6.49646 5.06896 6.49646 7.00195C6.49646 8.93495 8.06346 10.502 9.99646 10.502C11.9295 10.502 13.4965 8.93495 13.4965 7.00195C13.4965 5.06896 11.9295 3.50195 9.99646 3.50195Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M14.7802 17.7835C15.073 17.4906 15.0729 17.0157 14.78 16.7229C14.487 16.4301 14.0121 16.4302 13.7193 16.7231L11.2193 19.2242C11.0787 19.3649 10.9997 19.5557 10.9998 19.7546C10.9998 19.9535 11.0789 20.1442 11.2195 20.2849L13.7195 22.7838C14.0125 23.0766 14.4874 23.0765 14.7802 22.7835C15.073 22.4906 15.0729 22.0157 14.78 21.7229L13.5599 20.5033H20.4399L19.2196 21.7228C18.9266 22.0156 18.9265 22.4905 19.2193 22.7835C19.5121 23.0765 19.9869 23.0766 20.2799 22.7838L22.7799 20.2854C22.9206 20.1448 22.9997 19.9541 22.9998 19.7552C22.9998 19.5563 22.9209 19.3655 22.7803 19.2248L20.2803 16.7232C19.9875 16.4302 19.5126 16.43 19.2196 16.7228C18.9266 17.0156 18.9265 17.4905 19.2193 17.7835L20.4383 19.0033H13.5609L14.7802 17.7835Z"
                                                                                    fill="#212121" />
                                                                            </svg> <span class="btn-text-inner">تغيير
                                                                                المشرف</span>
                                                                        </button>
                                                                        <button
                                                                            class="btn btn-outline-info btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?>
                                                                            <!DOCTYPE svg
                                                                                PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>
                                                                            <svg enable-background="new 0 0 32 32"
                                                                                height="32px" id="Layer_1"
                                                                                version="1.1" viewBox="0 0 32 32"
                                                                                width="32px" xml:space="preserve"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                                <g id="eye">
                                                                                    <path
                                                                                        d="M31.965,15.776c-0.01-0.042-0.004-0.087-0.02-0.128c-0.006-0.017-0.021-0.026-0.027-0.042   c-0.01-0.024-0.008-0.051-0.021-0.074c-2.9-5.551-9.213-9.528-15.873-9.528c-6.661,0-12.973,3.971-15.875,9.521   c-0.013,0.023-0.011,0.05-0.021,0.074c-0.007,0.016-0.021,0.025-0.027,0.042c-0.016,0.041-0.01,0.086-0.02,0.128   c-0.018,0.075-0.035,0.147-0.035,0.224s0.018,0.148,0.035,0.224c0.01,0.042,0.004,0.087,0.02,0.128   c0.006,0.017,0.021,0.026,0.027,0.042c0.01,0.024,0.008,0.051,0.021,0.074c2.901,5.551,9.214,9.528,15.875,9.528   c6.66,0,12.973-3.971,15.873-9.521c0.014-0.023,0.012-0.05,0.021-0.074c0.006-0.016,0.021-0.025,0.027-0.042   c0.016-0.041,0.01-0.086,0.02-0.128C31.982,16.148,32,16.076,32,16S31.982,15.851,31.965,15.776z M16.023,23.988   c-5.615,0-11.112-3.191-13.851-7.995c2.754-4.81,8.243-7.99,13.851-7.99c5.613,0,11.111,3.192,13.85,7.995   C27.119,20.809,21.631,23.988,16.023,23.988z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16.023,11.999c-0.002,0-0.004,0.001-0.006,0.001c-2.205,0.004-3.992,1.791-3.992,3.996   c0,0.276,0.224,0.5,0.5,0.5c0.275,0,0.499-0.224,0.499-0.5c0-1.652,1.345-2.997,2.999-2.997v-0.001   c0.275,0,0.498-0.224,0.498-0.499C16.521,12.222,16.299,11.999,16.023,11.999z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16,9c-3.867,0-7,3.134-7,7c0,3.866,3.134,7,7,7c3.865,0,7-3.135,7-7C23,12.133,19.865,9,16,9z M16,22   c-3.309,0-6-2.691-6-6c0-3.309,2.691-6,6-6c3.309,0,6,2.691,6,6C22,19.309,19.309,22,16,22z"
                                                                                        fill="#333333" />
                                                                                </g>
                                                                            </svg> <span class="btn-text-inner">عرض صفحة
                                                                                الطالب</span>
                                                                        </button>
                                                                        <button
                                                                            class="btn btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg
                                                                                viewBox="0 0 32 32"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .cls-1 {
                                                                                            fill: none;
                                                                                            stroke: #000;
                                                                                            stroke-linecap: round;
                                                                                            stroke-linejoin: round;
                                                                                            stroke-width: 2px;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <title />
                                                                                <g id="cross">
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="7"
                                                                                        y2="25" />
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="25"
                                                                                        y2="7" />
                                                                                </g>
                                                                            </svg><span class="btn-text-inner">حذف
                                                                                الطالب</span>

                                                                        </button>
                                                                    </td>
                                                                </tr>


                                                                <tr>
                                                                    <td>
                                                                        <div class="media">
                                                                            <div class="avatar me-2">
                                                                                <img alt="avatar"
                                                                                    src="{{ asset('AdminAssets/img/profile-14.jpeg') }}"
                                                                                    class="rounded-circle" />
                                                                            </div>
                                                                            <div class="media-body align-self-center">
                                                                                <h6 class="mb-0">عبد الرحمن </h6>
                                                                                <span>shaun.park@mail.com</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <button
                                                                            class="btn btn-outline-dark btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg fill="none"
                                                                                height="24" viewBox="0 0 24 24"
                                                                                width="24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M15.7506 13.9972C16.7312 13.9972 17.5652 14.6248 17.8728 15.5002H15.8174C15.7954 15.4982 15.7731 15.4972 15.7506 15.4972H4.24888C3.83528 15.4972 3.5 15.8325 3.5 16.2461V16.8238C3.5 17.3595 3.69111 17.8776 4.03897 18.2849C5.29228 19.7526 7.25815 20.4984 9.99646 20.4984C10.0526 20.4984 10.1085 20.4981 10.164 20.4975C10.2496 20.6809 10.3672 20.8499 10.5133 20.9957L11.4478 21.9288C10.9836 21.9752 10.4997 21.9984 9.99646 21.9984C6.8506 21.9984 4.46458 21.0932 2.89828 19.259C2.31852 18.5801 2 17.7166 2 16.8238V16.2461C2 15.0041 3.00686 13.9972 4.24888 13.9972H15.7506Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M9.99646 2.00195C12.7579 2.00195 14.9965 4.24053 14.9965 7.00195C14.9965 9.76338 12.7579 12.002 9.99646 12.002C7.23503 12.002 4.99646 9.76338 4.99646 7.00195C4.99646 4.24053 7.23503 2.00195 9.99646 2.00195ZM9.99646 3.50195C8.06346 3.50195 6.49646 5.06896 6.49646 7.00195C6.49646 8.93495 8.06346 10.502 9.99646 10.502C11.9295 10.502 13.4965 8.93495 13.4965 7.00195C13.4965 5.06896 11.9295 3.50195 9.99646 3.50195Z"
                                                                                    fill="#212121" />
                                                                                <path
                                                                                    d="M14.7802 17.7835C15.073 17.4906 15.0729 17.0157 14.78 16.7229C14.487 16.4301 14.0121 16.4302 13.7193 16.7231L11.2193 19.2242C11.0787 19.3649 10.9997 19.5557 10.9998 19.7546C10.9998 19.9535 11.0789 20.1442 11.2195 20.2849L13.7195 22.7838C14.0125 23.0766 14.4874 23.0765 14.7802 22.7835C15.073 22.4906 15.0729 22.0157 14.78 21.7229L13.5599 20.5033H20.4399L19.2196 21.7228C18.9266 22.0156 18.9265 22.4905 19.2193 22.7835C19.5121 23.0765 19.9869 23.0766 20.2799 22.7838L22.7799 20.2854C22.9206 20.1448 22.9997 19.9541 22.9998 19.7552C22.9998 19.5563 22.9209 19.3655 22.7803 19.2248L20.2803 16.7232C19.9875 16.4302 19.5126 16.43 19.2196 16.7228C18.9266 17.0156 18.9265 17.4905 19.2193 17.7835L20.4383 19.0033H13.5609L14.7802 17.7835Z"
                                                                                    fill="#212121" />
                                                                            </svg> <span class="btn-text-inner">تغيير
                                                                                المشرف</span>
                                                                        </button>
                                                                        <button
                                                                            class="btn btn-outline-info btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?>
                                                                            <!DOCTYPE svg
                                                                                PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>
                                                                            <svg enable-background="new 0 0 32 32"
                                                                                height="32px" id="Layer_1"
                                                                                version="1.1" viewBox="0 0 32 32"
                                                                                width="32px" xml:space="preserve"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                                <g id="eye">
                                                                                    <path
                                                                                        d="M31.965,15.776c-0.01-0.042-0.004-0.087-0.02-0.128c-0.006-0.017-0.021-0.026-0.027-0.042   c-0.01-0.024-0.008-0.051-0.021-0.074c-2.9-5.551-9.213-9.528-15.873-9.528c-6.661,0-12.973,3.971-15.875,9.521   c-0.013,0.023-0.011,0.05-0.021,0.074c-0.007,0.016-0.021,0.025-0.027,0.042c-0.016,0.041-0.01,0.086-0.02,0.128   c-0.018,0.075-0.035,0.147-0.035,0.224s0.018,0.148,0.035,0.224c0.01,0.042,0.004,0.087,0.02,0.128   c0.006,0.017,0.021,0.026,0.027,0.042c0.01,0.024,0.008,0.051,0.021,0.074c2.901,5.551,9.214,9.528,15.875,9.528   c6.66,0,12.973-3.971,15.873-9.521c0.014-0.023,0.012-0.05,0.021-0.074c0.006-0.016,0.021-0.025,0.027-0.042   c0.016-0.041,0.01-0.086,0.02-0.128C31.982,16.148,32,16.076,32,16S31.982,15.851,31.965,15.776z M16.023,23.988   c-5.615,0-11.112-3.191-13.851-7.995c2.754-4.81,8.243-7.99,13.851-7.99c5.613,0,11.111,3.192,13.85,7.995   C27.119,20.809,21.631,23.988,16.023,23.988z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16.023,11.999c-0.002,0-0.004,0.001-0.006,0.001c-2.205,0.004-3.992,1.791-3.992,3.996   c0,0.276,0.224,0.5,0.5,0.5c0.275,0,0.499-0.224,0.499-0.5c0-1.652,1.345-2.997,2.999-2.997v-0.001   c0.275,0,0.498-0.224,0.498-0.499C16.521,12.222,16.299,11.999,16.023,11.999z"
                                                                                        fill="#333333" />
                                                                                    <path
                                                                                        d="M16,9c-3.867,0-7,3.134-7,7c0,3.866,3.134,7,7,7c3.865,0,7-3.135,7-7C23,12.133,19.865,9,16,9z M16,22   c-3.309,0-6-2.691-6-6c0-3.309,2.691-6,6-6c3.309,0,6,2.691,6,6C22,19.309,19.309,22,16,22z"
                                                                                        fill="#333333" />
                                                                                </g>
                                                                            </svg> <span class="btn-text-inner">عرض صفحة
                                                                                الطالب</span>
                                                                        </button>
                                                                        <button
                                                                            class="btn btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                                                            <?xml version="1.0" ?><svg
                                                                                viewBox="0 0 32 32"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .cls-1 {
                                                                                            fill: none;
                                                                                            stroke: #000;
                                                                                            stroke-linecap: round;
                                                                                            stroke-linejoin: round;
                                                                                            stroke-width: 2px;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <title />
                                                                                <g id="cross">
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="7"
                                                                                        y2="25" />
                                                                                    <line class="cls-1" x1="7"
                                                                                        x2="25" y1="25"
                                                                                        y2="7" />
                                                                                </g>
                                                                            </svg><span class="btn-text-inner">حذف
                                                                                الطالب</span>

                                                                        </button>
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>



                                            </tbody>
                                        </table>
                                    </td>

                                </tr>


                                <tr class="tathbeetRow">
                                    <td class="text-center tathbeetTitel">الخمسة الثالثة</td>
                                    <td class="text-center">
                                        <button onclick="toggleVisibility('tathbeet2')"
                                            class=" tathbeetTitel btn btn-dark btn-rounded btn-outline-dark mb-2 me-4 _effect--ripple waves-effect waves-light">عرض
                                            التفاصيل</button>
                                            <button
                                            class="btn btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            <?xml version="1.0" ?><svg
                                                viewBox="0 0 32 32"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <defs>
                                                    <style>
                                                        .cls-1 {
                                                            fill: none;
                                                            stroke: #000;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                    </style>
                                                </defs>
                                                <title />
                                                <g id="cross">
                                                    <line class="cls-1" x1="7"
                                                        x2="25" y1="7"
                                                        y2="25" />
                                                    <line class="cls-1" x1="7"
                                                        x2="25" y1="25"
                                                        y2="7" />
                                                </g>
                                            </svg><span class="btn-text-inner">حذف
                                                الدورة</span>

                                        </button>
                                    </td>
                                </tr>

                                <tr class="tathbeetRow">
                                    <td class="text-center tathbeetTitel">الخمسة الرابعة</td>
                                    <td class="text-center">
                                        <button onclick="toggleVisibility('tathbeet2')"
                                            class=" tathbeetTitel btn btn-dark btn-rounded btn-outline-dark mb-2 me-4 _effect--ripple waves-effect waves-light">عرض
                                            التفاصيل</button>
                                            <button
                                            class="btn btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            <?xml version="1.0" ?><svg
                                                viewBox="0 0 32 32"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <defs>
                                                    <style>
                                                        .cls-1 {
                                                            fill: none;
                                                            stroke: #000;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                    </style>
                                                </defs>
                                                <title />
                                                <g id="cross">
                                                    <line class="cls-1" x1="7"
                                                        x2="25" y1="7"
                                                        y2="25" />
                                                    <line class="cls-1" x1="7"
                                                        x2="25" y1="25"
                                                        y2="7" />
                                                </g>
                                            </svg><span class="btn-text-inner">حذف
                                                الدورة</span>

                                        </button>
                                    </td>
                                </tr>

                                <tr class="tathbeetRow">
                                    <td class="text-center tathbeetTitel">الخمسة الخامسة</td>
                                    <td class="text-center">
                                        <button onclick="toggleVisibility('tathbeet2')"
                                            class=" tathbeetTitel btn btn-dark btn-rounded btn-outline-dark mb-2 me-4 _effect--ripple waves-effect waves-light">عرض
                                            التفاصيل</button>
                                            <button
                                            class="btn btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            <?xml version="1.0" ?><svg
                                                viewBox="0 0 32 32"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <defs>
                                                    <style>
                                                        .cls-1 {
                                                            fill: none;
                                                            stroke: #000;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                    </style>
                                                </defs>
                                                <title />
                                                <g id="cross">
                                                    <line class="cls-1" x1="7"
                                                        x2="25" y1="7"
                                                        y2="25" />
                                                    <line class="cls-1" x1="7"
                                                        x2="25" y1="25"
                                                        y2="7" />
                                                </g>
                                            </svg><span class="btn-text-inner">حذف
                                                الدورة</span>

                                        </button>
                                    </td>
                                </tr>

                                <tr class="tathbeetRow">
                                    <td class="text-center tathbeetTitel">الخمسة السادسة</td>
                                    <td class="text-center">
                                        <button onclick="toggleVisibility('tathbeet2')"
                                            class=" tathbeetTitel btn btn-dark btn-rounded btn-outline-dark mb-2 me-4 _effect--ripple waves-effect waves-light">عرض
                                            التفاصيل</button>
                                            <button
                                            class="btn btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            <?xml version="1.0" ?><svg
                                                viewBox="0 0 32 32"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <defs>
                                                    <style>
                                                        .cls-1 {
                                                            fill: none;
                                                            stroke: #000;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                    </style>
                                                </defs>
                                                <title />
                                                <g id="cross">
                                                    <line class="cls-1" x1="7"
                                                        x2="25" y1="7"
                                                        y2="25" />
                                                    <line class="cls-1" x1="7"
                                                        x2="25" y1="25"
                                                        y2="7" />
                                                </g>
                                            </svg><span class="btn-text-inner">حذف
                                                الدورة</span>

                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>



                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- pop up change mushref    -->
    <div class="modal fade" id="changeMushref" tabindex="-1" role="dialog" aria-labelledby="changeMushref"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content shadow-lg rounded-3 changeMushref">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="changeMushref">التغيير إلى مشرف جديد </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <br>
                <div class="modal-body container">
                    <form id="editForm" class="row g-3 ">

                        <div class="row p-1">
                            <div class="col-md-4">
                                <label for="fullName" class="form-label label-color"> المشرف الحالي </label>
                            </div>

                            <div class="col-md-4">
                                <input type="text" class="form-control rounded-pill shadow-sm" id="country"
                                    placeholder="علاء الرمحي">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label for="fullName" class="form-label label-color"> المشرف الجديد </label>
                            </div>

                            <div class="col-md-4">
                                <select class="form-select custom-select rounded-pill shadow-sm p-3 optionMushref"
                                    id="gender">
                                    <option value="" disabled selected>اختر المشرف الجديد</option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-danger rounded-pill px-4"
                        data-bs-dismiss="modal">إغلاق</button>
                    <button type="button" class="btn btn-saveChanges rounded-pill px-4" id="saveChanges"> تغيير
                        المشرف
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- pop up add mushref    -->
    <div class="modal fade" id="addMushref" tabindex="-1" role="dialog" aria-labelledby="addMushref"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content shadow-lg rounded-3 addMushref">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="addMushref">إضافة مشرف جديد </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <br>
                <div class="modal-body container">
                    <form id="editForm" class="row g-3 ">

                        {{-- <div class="row">
                        <div class="search-input-group-style input-group mb-3 col-md-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg></span>
                            </div>
                            <input type="text" class="form-control" placeholder="ابحث عن الاسم"
                                aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        </div> --}}
                        <br>

                        <div class="row">
                            <div class="col-md-4">
                                <label for="fullName" class="form-label label-color lable-add"> اختر مشرف جديد </label>
                            </div>

                            <div class="col-md-4">
                                <select class="form-select custom-select rounded-pill shadow-sm p-3 optionMushref"
                                    id="gender">
                                    <option value="" disabled selected>  </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-danger rounded-pill px-4"
                        data-bs-dismiss="modal">إغلاق</button>
                    <button type="button" class="btn btn-saveAdd rounded-pill px-4" id="saveAdd"> إضافة كمشرف
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!-- pop up add student    -->
    <div class="modal fade" id="addStudent" tabindex="-1" role="dialog" aria-labelledby="addStudent"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content shadow-lg rounded-3 addStudent">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="addStudent">إضافة طالب جديد </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <br>
                <div class="modal-body container">
                    <form id="editForm" class="row g-3 ">

                        {{-- <div class="row">
                        <div class="search-input-group-style input-group mb-3 col-md-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg></span>
                            </div>
                            <input type="text" class="form-control" placeholder="ابحث عن الاسم"
                                aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        </div> --}}
                        <br>

                        <div class="row">
                            <div class="col-md-4">
                                <label for="fullName" class="form-label label-color lable-add"> اسم طالب جديد </label>
                            </div>

                            <div class="col-md-4">
                                <select class="form-select custom-select rounded-pill shadow-sm p-3 optionMushref"
                                    id="gender">
                                    <option value="" disabled selected> </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-danger rounded-pill px-4"
                        data-bs-dismiss="modal">إغلاق</button>
                    <button type="button" class="btn btn-saveAddStudent rounded-pill px-4" id="saveAddStudent"> إضافة
                        الطالب
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!-- pop up add Dawra    -->
    <div class="modal fade" id="addDawra" tabindex="-1" role="dialog" aria-labelledby="addDawra"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content shadow-lg rounded-3 addDawra">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="addDawra">إضافة دورة جديدة </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <br>
                <div class="modal-body container">
                    <form id="editForm" class="row g-3 ">

                        {{-- <div class="row">
                        <div class="search-input-group-style input-group mb-3 col-md-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg></span>
                            </div>
                            <input type="text" class="form-control" placeholder="ابحث عن الاسم"
                                aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        </div> --}}
                        <br>

                        <div class="row">
                            <div class="col-md-4">
                                <label for="fullName" class="form-label label-color lable-add"> اختر الدورة المراد
                                    إضاقتها </label>
                            </div>

                            <div class="col-md-4">
                                <select class="form-select custom-select rounded-pill shadow-sm p-3 optionMushref"
                                    id="gender">
                                    <option value="" disabled selected> </option>
                                    <option value="male"> الخمسة الأولى </option>
                                    <option value="male"> الخمسة الثانية </option>
                                    <option value="male"> الخمسة الثالثة </option>
                                    <option value="male"> الخمسة الرابعة </option>
                                    <option value="male"> الخمسة الخامسة </option>
                                    <option value="male"> الخمسة السادسة </option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-danger rounded-pill px-4"
                        data-bs-dismiss="modal">إغلاق</button>
                    <button type="button" class="btn btn-saveAddDawra rounded-pill px-4" id="saveAddDawra"> إضافة
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!-- pop up add mushref thbeet    -->
    <div class="modal fade" id="addMushrefTathbeet" tabindex="-1" role="dialog"
        aria-labelledby="addMushrefTathbeet" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content shadow-lg rounded-3 addMushrefTathbeet">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="addMushrefTathbeet">إضافة مشرف جديد </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <br>
                <div class="modal-body container">
                    <form id="editForm" class="row g-3 ">

                        {{-- <div class="row">
                        <div class="search-input-group-style input-group mb-3 col-md-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg></span>
                            </div>
                            <input type="text" class="form-control" placeholder="ابحث عن الاسم"
                                aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        </div> --}}
                        <br>

                        <div class="row">
                            <div class="col-md-4">
                                <label for="fullName" class="form-label label-color lable-add"> اختر مشرف جديد </label>
                            </div>

                            <div class="col-md-4">
                                <select class="form-select custom-select rounded-pill shadow-sm p-3 optionMushref"
                                    id="gender">
                                    <option value="" disabled selected> </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                    <option value="male">محمد أسعد </option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-danger rounded-pill px-4"
                        data-bs-dismiss="modal">إغلاق</button>
                    <button type="button" class="btn btn-saveAddMushrefTathbeet rounded-pill px-4"
                        id="saveAddMushrefTathbeet"> إضافة كمشرف
                    </button>
                </div>
            </div>
        </div>
    </div>
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

        // --------------------------------------------------------------------------------------
        // pop change Mushref
        // --------------------------------------------------------------------------------------

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

        // change Mushref confirmed
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

// --------------------------------------------------------------------------------------
        // pop add Mushref

// --------------------------------------------------------------------------------------


        $(document).ready(function() {
            // عند الضغط على زر التعديل
            $('.btn-addMushref').on('click', function() {
                // فتح الـ Modal
                $('#MushrefTathbeet').modal('show');

                // يمكن تعبئة النموذج بالبيانات الحالية هنا إذا لزم الأمر
                // var row = $(this).closest('tr');
                // var name = row.find('td:eq(0)').text(); // استخراج الاسم
                // var status = row.find('td:eq(1) .badge').text(); // استخراج حالة الطالب

                // تعبئة النموذج بالبيانات المستخرجة
                // $('#name').val(name);
                // $('#status').val(status);
            });

            // حفظ التغييرات (يمكنك تعديل هذا الجزء لتنفيذ AJAX أو تحديث البيانات)
            $('#btn-saveAddMushrefTathbeet').on('click', function() {
                // هنا يمكن تنفيذ حفظ التغييرات، مثل إرسال البيانات عبر AJAX
                // var updatedName = $('#name').val();
                // var updatedStatus = $('#status').val();

                // أغلق الـ Modal بعد الحفظ
                $('#addMushrefTathbeet').modal('hide');
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

        // --------------------------------------------------------------------------------------
        // student

        // --------------------------------------------------------------------------------------


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


        // --------------------------------------------------------------------------------------
                // Dawra

        // --------------------------------------------------------------------------------------


        $(document).ready(function() {
            // عند الضغط على زر التعديل
            $('.btn-addDawra').on('click', function() {
                // فتح الـ Modal
                $('#addDawra').modal('show');

                // يمكن تعبئة النموذج بالبيانات الحالية هنا إذا لزم الأمر
                // var row = $(this).closest('tr');
                // var name = row.find('td:eq(0)').text(); // استخراج الاسم
                // var status = row.find('td:eq(1) .badge').text(); // استخراج حالة الطالب

                // تعبئة النموذج بالبيانات المستخرجة
                // $('#name').val(name);
                // $('#status').val(status);
            });

            // حفظ التغييرات (يمكنك تعديل هذا الجزء لتنفيذ AJAX أو تحديث البيانات)
            $('#btn-saveAddDawra').on('click', function() {
                // هنا يمكن تنفيذ حفظ التغييرات، مثل إرسال البيانات عبر AJAX
                // var updatedName = $('#name').val();
                // var updatedStatus = $('#status').val();

                // أغلق الـ Modal بعد الحفظ
                $('#addDawra').modal('hide');
            });
        });

        document.getElementById("saveAddDawra").addEventListener("click", function() {

Swal.fire({
    position: "top-end",
    icon: "success",
    title: "تمت الإضافة",
    showConfirmButton: false,
    timer: 1500
});
});

        // --------------------------------------------------------------------------------------
        // Mushref Tathbeet

                // --------------------------------------------------------------------------------------

        $(document).ready(function() {
            // عند الضغط على زر التعديل
            $('.btn-addMushrefTathbeet').on('click', function() {
                // فتح الـ Modal
                $('#addMushrefTathbeet').modal('show');

                // يمكن تعبئة النموذج بالبيانات الحالية هنا إذا لزم الأمر
                // var row = $(this).closest('tr');
                // var name = row.find('td:eq(0)').text(); // استخراج الاسم
                // var status = row.find('td:eq(1) .badge').text(); // استخراج حالة الطالب

                // تعبئة النموذج بالبيانات المستخرجة
                // $('#name').val(name);
                // $('#status').val(status);
            });

            // حفظ التغييرات (يمكنك تعديل هذا الجزء لتنفيذ AJAX أو تحديث البيانات)
            $('#btn-saveAddMushrefTathbeet').on('click', function() {
                // هنا يمكن تنفيذ حفظ التغييرات، مثل إرسال البيانات عبر AJAX
                // var updatedName = $('#name').val();
                // var updatedStatus = $('#status').val();

                // أغلق الـ Modal بعد الحفظ
                $('#addMushrefTathbeet').modal('hide');
            });
        });


        // add Mushref Thbeet
        document.getElementById("saveAddMushrefTathbeet").addEventListener("click", function() {
            Swal.fire({
                title: "هل متأكد من إضافة هذا المستخدم كمشرف في قسم التثبيت ؟؟",
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

    <script>
        // دالة إظهار أو إخفاء الجداول
        function toggleVisibility(id) {
            const element = document.getElementById(id);
            if (element.classList.contains('hidden')) {
                element.classList.remove('hidden');
            } else {
                element.classList.add('hidden');
            }
        }
    </script>
@endsection