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


                    <div class="table-responsive container">
                        <br>

                        <button
                            class="btn btn-addDawra btn-outline-dark btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                            <samp> إضافة دورة تثبيت </span>
                        </button>


                        <table class="table  table-bordered table-dawratTathbeet containe">

                            <tbody>
                                <tr class="tathbeetRow">
                                    <td  rowspan="2" class="text-center tathbeetTitel">الخمسة الأولى</td>
                                    <td class="text-center">
                                        <h6  class="my-0 mx-0" style="text-align: right;"> للذكور</h6>
                                        <button onclick="toggleVisibility('tathbeet1_female')"
                                            class=" tathbeetTitel btn btn-dark btn-rounded btn-outline-success mb-2 me-4 _effect--ripple waves-effect waves-light">عرض
                                            علامات الخاصة الدورة</button>

                                        <button
                                            class="tathbeetTitel btn-createMarks btn btn-dark btn-rounded btn-outline-dark mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            إضافة علامة اختبار</button>
                                        <button
                                            class="tathbeetTitel btn-ArchefDawra btn btn-dark btn-rounded btn-outline-warning mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            أرشفة الدورة</button>

                                        <button
                                            class="btn btn-deleteDawra btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            <?xml version="1.0" ?><svg viewBox="0 0 32 32"
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
                                                    <line class="cls-1" x1="7" x2="25" y1="7"
                                                        y2="25" />
                                                    <line class="cls-1" x1="7" x2="25" y1="25"
                                                        y2="7" />
                                                </g>
                                            </svg><span class="btn-text-inner">حذف
                                                الدورة</span>
                                        </button>


                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <h6  class="my-0 mx-0" style="text-align: right;"> للإناث</h6>
                                        <button onclick="toggleVisibility('tathbeet1_female')"
                                            class=" tathbeetTitel btn btn-dark btn-rounded btn-outline-success mb-2 me-4 _effect--ripple waves-effect waves-light">عرض
                                            علامات الخاصة الدورة</button>

                                        <button
                                            class="tathbeetTitel btn-createMarks btn btn-dark btn-rounded btn-outline-dark mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            إضافة علامة اختبار</button>
                                        <button
                                            class="tathbeetTitel btn-ArchefDawra btn btn-dark btn-rounded btn-outline-warning mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            أرشفة الدورة</button>

                                        <button
                                            class="btn btn-deleteDawra btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            <?xml version="1.0" ?><svg viewBox="0 0 32 32"
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
                                                    <line class="cls-1" x1="7" x2="25" y1="7"
                                                        y2="25" />
                                                    <line class="cls-1" x1="7" x2="25" y1="25"
                                                        y2="7" />
                                                </g>
                                            </svg><span class="btn-text-inner">حذف
                                                الدورة</span>
                                        </button>


                                    </td>
                                </tr>
                                <tr id="tathbeet1_female" class="hidden">
                                        @include('Admin.DawratTahbeet.1.marks')
                                </tr>




                                <tr class="tathbeetRow" style="background-color: #e6e1e9 !important;">
                                    <td  rowspan="2" class="text-center tathbeetTite2">الخمسة الثانية</td>
                                    <td class="text-center">
                                        <h6  class="my-0 mx-0" style="text-align: right;"> للذكور</h6>
                                        <button onclick="toggleVisibility('tathbeet2_female')"
                                            class=" tathbeetTitel btn btn-dark btn-rounded btn-outline-success mb-2 me-4 _effect--ripple waves-effect waves-light">عرض
                                            علامات الخاصة الدورة</button>

                                        <button
                                            class="tathbeetTitel btn-createMarks btn btn-dark btn-rounded btn-outline-dark mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            إضافة علامة اختبار</button>
                                        <button
                                            class="tathbeetTitel btn-ArchefDawra btn btn-dark btn-rounded btn-outline-warning mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            أرشفة الدورة</button>

                                        <button
                                            class="btn btn-deleteDawra btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            <?xml version="1.0" ?><svg viewBox="0 0 32 32"
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
                                                    <line class="cls-1" x1="7" x2="25" y1="7"
                                                        y2="25" />
                                                    <line class="cls-1" x1="7" x2="25" y1="25"
                                                        y2="7" />
                                                </g>
                                            </svg><span class="btn-text-inner">حذف
                                                الدورة</span>
                                        </button>


                                    </td>
                                </tr>
                                <tr style="background-color: #e6e1e9 !important;">
                                    <td class="text-center">
                                        <h6  class="my-0 mx-0" style="text-align: right;"> للإناث</h6>
                                        <button onclick="toggleVisibility('tathbeet2_female')"
                                            class=" tathbeetTitel btn btn-dark btn-rounded btn-outline-success mb-2 me-4 _effect--ripple waves-effect waves-light">عرض
                                            علامات الخاصة الدورة</button>

                                        <button
                                            class="tathbeetTitel btn-createMarks btn btn-dark btn-rounded btn-outline-dark mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            إضافة علامة اختبار</button>
                                        <button
                                            class="tathbeetTitel btn-ArchefDawra btn btn-dark btn-rounded btn-outline-warning mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            أرشفة الدورة</button>

                                        <button
                                            class="btn btn-deleteDawra btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            <?xml version="1.0" ?><svg viewBox="0 0 32 32"
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
                                                    <line class="cls-1" x1="7" x2="25" y1="7"
                                                        y2="25" />
                                                    <line class="cls-1" x1="7" x2="25" y1="25"
                                                        y2="7" />
                                                </g>
                                            </svg><span class="btn-text-inner">حذف
                                                الدورة</span>
                                        </button>


                                    </td>
                                </tr>
                                <tr id="tathbeet1_female" class="hidden">
                                        @include('Admin.DawratTahbeet.2.marks')
                                </tr>



                                <tr class="tathbeetRow">
                                    <td  rowspan="2" class="text-center tathbeetTite2">الخمسة الثالثة</td>
                                    <td class="text-center">
                                        <h6  class="my-0 mx-0" style="text-align: right;"> للذكور</h6>
                                        <button onclick="toggleVisibility('tathbeet2_female')"
                                            class=" tathbeetTitel btn btn-dark btn-rounded btn-outline-success mb-2 me-4 _effect--ripple waves-effect waves-light">عرض
                                            علامات الخاصة الدورة</button>

                                        <button
                                            class="tathbeetTitel btn-createMarks btn btn-dark btn-rounded btn-outline-dark mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            إضافة علامة اختبار</button>
                                        <button
                                            class="tathbeetTitel btn-ArchefDawra btn btn-dark btn-rounded btn-outline-warning mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            أرشفة الدورة</button>

                                        <button
                                            class="btn btn-deleteDawra btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            <?xml version="1.0" ?><svg viewBox="0 0 32 32"
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
                                                    <line class="cls-1" x1="7" x2="25" y1="7"
                                                        y2="25" />
                                                    <line class="cls-1" x1="7" x2="25" y1="25"
                                                        y2="7" />
                                                </g>
                                            </svg><span class="btn-text-inner">حذف
                                                الدورة</span>
                                        </button>


                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <h6  class="my-0 mx-0" style="text-align: right;"> للإناث</h6>
                                        <button onclick="toggleVisibility('tathbeet2_female')"
                                            class=" tathbeetTitel btn btn-dark btn-rounded btn-outline-success mb-2 me-4 _effect--ripple waves-effect waves-light">عرض
                                            علامات الخاصة الدورة</button>

                                        <button
                                            class="tathbeetTitel btn-createMarks btn btn-dark btn-rounded btn-outline-dark mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            إضافة علامة اختبار</button>
                                        <button
                                            class="tathbeetTitel btn-ArchefDawra btn btn-dark btn-rounded btn-outline-warning mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            أرشفة الدورة</button>

                                        <button
                                            class="btn btn-deleteDawra btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            <?xml version="1.0" ?><svg viewBox="0 0 32 32"
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
                                                    <line class="cls-1" x1="7" x2="25" y1="7"
                                                        y2="25" />
                                                    <line class="cls-1" x1="7" x2="25" y1="25"
                                                        y2="7" />
                                                </g>
                                            </svg><span class="btn-text-inner">حذف
                                                الدورة</span>
                                        </button>


                                    </td>
                                </tr>
                                <tr id="tathbeet1_female" class="hidden">
                                        @include('Admin.DawratTahbeet.2.marks')
                                </tr>


                                <tr class="tathbeetRow" style="background-color: #e6e1e9 !important;">
                                    <td  rowspan="2" class="text-center tathbeetTite2">الخمسة الرابعة</td>
                                    <td class="text-center">
                                        <h6  class="my-0 mx-0" style="text-align: right;"> للذكور</h6>
                                        <button onclick="toggleVisibility('tathbeet2_female')"
                                            class=" tathbeetTitel btn btn-dark btn-rounded btn-outline-success mb-2 me-4 _effect--ripple waves-effect waves-light">عرض
                                            علامات الخاصة الدورة</button>

                                        <button
                                            class="tathbeetTitel btn-createMarks btn btn-dark btn-rounded btn-outline-dark mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            إضافة علامة اختبار</button>
                                        <button
                                            class="tathbeetTitel btn-ArchefDawra btn btn-dark btn-rounded btn-outline-warning mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            أرشفة الدورة</button>

                                        <button
                                            class="btn btn-deleteDawra btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            <?xml version="1.0" ?><svg viewBox="0 0 32 32"
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
                                                    <line class="cls-1" x1="7" x2="25" y1="7"
                                                        y2="25" />
                                                    <line class="cls-1" x1="7" x2="25" y1="25"
                                                        y2="7" />
                                                </g>
                                            </svg><span class="btn-text-inner">حذف
                                                الدورة</span>
                                        </button>


                                    </td>
                                </tr>
                                <tr style="background-color: #e6e1e9 !important;">
                                    <td class="text-center">
                                        <h6  class="my-0 mx-0" style="text-align: right;"> للإناث</h6>
                                        <button onclick="toggleVisibility('tathbeet2_female')"
                                            class=" tathbeetTitel btn btn-dark btn-rounded btn-outline-success mb-2 me-4 _effect--ripple waves-effect waves-light">عرض
                                            علامات الخاصة الدورة</button>

                                        <button
                                            class="tathbeetTitel btn-createMarks btn btn-dark btn-rounded btn-outline-dark mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            إضافة علامة اختبار</button>
                                        <button
                                            class="tathbeetTitel btn-ArchefDawra btn btn-dark btn-rounded btn-outline-warning mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            أرشفة الدورة</button>

                                        <button
                                            class="btn btn-deleteDawra btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            <?xml version="1.0" ?><svg viewBox="0 0 32 32"
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
                                                    <line class="cls-1" x1="7" x2="25" y1="7"
                                                        y2="25" />
                                                    <line class="cls-1" x1="7" x2="25" y1="25"
                                                        y2="7" />
                                                </g>
                                            </svg><span class="btn-text-inner">حذف
                                                الدورة</span>
                                        </button>


                                    </td>
                                </tr>
                                <tr id="tathbeet1_female" class="hidden">
                                        @include('Admin.DawratTahbeet.2.marks')
                                </tr>


                                <tr class="tathbeetRow">
                                    <td  rowspan="2" class="text-center tathbeetTite2">الخمسة الخامسة</td>
                                    <td class="text-center">
                                        <h6  class="my-0 mx-0" style="text-align: right;"> للذكور</h6>
                                        <button onclick="toggleVisibility('tathbeet2_female')"
                                            class=" tathbeetTitel btn btn-dark btn-rounded btn-outline-success mb-2 me-4 _effect--ripple waves-effect waves-light">عرض
                                            علامات الخاصة الدورة</button>

                                        <button
                                            class="tathbeetTitel btn-createMarks btn btn-dark btn-rounded btn-outline-dark mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            إضافة علامة اختبار</button>
                                        <button
                                            class="tathbeetTitel btn-ArchefDawra btn btn-dark btn-rounded btn-outline-warning mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            أرشفة الدورة</button>

                                        <button
                                            class="btn btn-deleteDawra btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            <?xml version="1.0" ?><svg viewBox="0 0 32 32"
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
                                                    <line class="cls-1" x1="7" x2="25" y1="7"
                                                        y2="25" />
                                                    <line class="cls-1" x1="7" x2="25" y1="25"
                                                        y2="7" />
                                                </g>
                                            </svg><span class="btn-text-inner">حذف
                                                الدورة</span>
                                        </button>


                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <h6  class="my-0 mx-0" style="text-align: right;"> للإناث</h6>
                                        <button onclick="toggleVisibility('tathbeet2_female')"
                                            class=" tathbeetTitel btn btn-dark btn-rounded btn-outline-success mb-2 me-4 _effect--ripple waves-effect waves-light">عرض
                                            علامات الخاصة الدورة</button>

                                        <button
                                            class="tathbeetTitel btn-createMarks btn btn-dark btn-rounded btn-outline-dark mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            إضافة علامة اختبار</button>
                                        <button
                                            class="tathbeetTitel btn-ArchefDawra btn btn-dark btn-rounded btn-outline-warning mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            أرشفة الدورة</button>

                                        <button
                                            class="btn btn-deleteDawra btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            <?xml version="1.0" ?><svg viewBox="0 0 32 32"
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
                                                    <line class="cls-1" x1="7" x2="25" y1="7"
                                                        y2="25" />
                                                    <line class="cls-1" x1="7" x2="25" y1="25"
                                                        y2="7" />
                                                </g>
                                            </svg><span class="btn-text-inner">حذف
                                                الدورة</span>
                                        </button>


                                    </td>
                                </tr>
                                <tr id="tathbeet1_female" class="hidden">
                                        @include('Admin.DawratTahbeet.2.marks')
                                </tr>


                                <tr class="tathbeetRow" style="background-color: #e6e1e9 !important;">
                                    <td  rowspan="2" class="text-center tathbeetTite2">الخمسة السادسة</td>
                                    <td class="text-center">
                                        <h6  class="my-0 mx-0" style="text-align: right;"> للذكور</h6>
                                        <button onclick="toggleVisibility('tathbeet2_female')"
                                            class=" tathbeetTitel btn btn-dark btn-rounded btn-outline-success mb-2 me-4 _effect--ripple waves-effect waves-light">عرض
                                            علامات الخاصة الدورة</button>

                                        <button
                                            class="tathbeetTitel btn-createMarks btn btn-dark btn-rounded btn-outline-dark mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            إضافة علامة اختبار</button>
                                        <button
                                            class="tathbeetTitel btn-ArchefDawra btn btn-dark btn-rounded btn-outline-warning mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            أرشفة الدورة</button>

                                        <button
                                            class="btn btn-deleteDawra btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            <?xml version="1.0" ?><svg viewBox="0 0 32 32"
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
                                                    <line class="cls-1" x1="7" x2="25" y1="7"
                                                        y2="25" />
                                                    <line class="cls-1" x1="7" x2="25" y1="25"
                                                        y2="7" />
                                                </g>
                                            </svg><span class="btn-text-inner">حذف
                                                الدورة</span>
                                        </button>


                                    </td>
                                </tr>
                                <tr style="background-color: #e6e1e9 !important;">
                                    <td class="text-center">
                                        <h6  class="my-0 mx-0" style="text-align: right;"> للإناث</h6>
                                        <button onclick="toggleVisibility('tathbeet2_female')"
                                            class=" tathbeetTitel btn btn-dark btn-rounded btn-outline-success mb-2 me-4 _effect--ripple waves-effect waves-light">عرض
                                            علامات الخاصة الدورة</button>

                                        <button
                                            class="tathbeetTitel btn-createMarks btn btn-dark btn-rounded btn-outline-dark mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            إضافة علامة اختبار</button>
                                        <button
                                            class="tathbeetTitel btn-ArchefDawra btn btn-dark btn-rounded btn-outline-warning mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            أرشفة الدورة</button>

                                        <button
                                            class="btn btn-deleteDawra btn-outline-danger btn-rounded mb-2 me-4 _effect--ripple waves-effect waves-light">
                                            <?xml version="1.0" ?><svg viewBox="0 0 32 32"
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
                                                    <line class="cls-1" x1="7" x2="25" y1="7"
                                                        y2="25" />
                                                    <line class="cls-1" x1="7" x2="25" y1="25"
                                                        y2="7" />
                                                </g>
                                            </svg><span class="btn-text-inner">حذف
                                                الدورة</span>
                                        </button>


                                    </td>
                                </tr>
                                <tr id="tathbeet1_female" class="hidden">
                                        @include('Admin.DawratTahbeet.2.marks')
                                </tr>




                            </tbody>
                        </table>



                    </div>

                </div>
            </div>
        </div>
    </div>








        <!-- pop up add  Marks    -->
        @include('Admin.DawratTahbeet.popUp.createMarks')
        <!-- pop up edit  Marks    -->
        @include('Admin.DawratTahbeet.popUp.editMarks')
        <!-- pop up add Dawra    -->
        @include('Admin.DawratTahbeet.popUp.createDawra')
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

        // delete Dawra

        const deleteButtonsDawra = document.querySelectorAll(".btn-deleteDawra");
        deleteButtonsDawra.forEach(button => {
            button.addEventListener("click", function() {
                Swal.fire({
                    title: "هل أنت متأكد من حذف الدورة بالكامل  ؟",
                    text: "لن تتمكن من استعادتها !",
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
                            "تم حذف الدورة بنجاح.",
                            "success"
                        );
                    }
                });
            });
        });


        // delete student from Dawra
        const deleteButtonsStudent = document.querySelectorAll(".btn-deleteStudent");
        deleteButtonsStudent.forEach(button => {
            button.addEventListener("click", function() {
                Swal.fire({
                    title: "هل أنت متأكد من حذف الطالب من الدورة ؟",
                    text: "لن تتمكن من استعادتها !",
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
                            "تم حذف الدورة بنجاح.",
                            "success"
                        );
                    }
                });
            });
        });

        // Archef for Dawra
        const btnArchefDawra = document.querySelectorAll(".btn-ArchefDawra");
        btnArchefDawra.forEach(button => {
            button.addEventListener("click", function() {
                Swal.fire({
                    title: "هل أنت متأكد من نقل هذه الدورة إلى الأرشيف؟",
                    text: "",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "نعم، أرشفها!",
                    cancelButtonText: "إلغاء"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // هنا يمكنك تنفيذ وظيفة الحذف لكل عنصر
                        Swal.fire(
                            "تم الحذف!",
                            "تم إرشفة الدورة بنجاح.",
                            "success"
                        );
                    }
                });
            });
        });

        // --------------------------------------------------------------------------------------
        // marks for exam
        // --------------------------------------------------------------------------------------

        $(document).ready(function() {
            // عند الضغط على زر التعديل
            $('.btn-createMarks').on('click', function() {
                // فتح الـ Modal
                $('#createMarks').modal('show');

                // يمكن تعبئة النموذج بالبيانات الحالية هنا إذا لزم الأمر
                // var row = $(this).closest('tr');
                // var name = row.find('td:eq(0)').text(); // استخراج الاسم
                // var status = row.find('td:eq(1) .badge').text(); // استخراج حالة الطالب

                // تعبئة النموذج بالبيانات المستخرجة
                // $('#name').val(name);
                // $('#status').val(status);
            });

            // حفظ التغييرات (يمكنك تعديل هذا الجزء لتنفيذ AJAX أو تحديث البيانات)
            $('#btn-saveCreateMarks').on('click', function() {
                // هنا يمكن تنفيذ حفظ التغييرات، مثل إرسال البيانات عبر AJAX
                // var updatedName = $('#name').val();
                // var updatedStatus = $('#status').val();

                // أغلق الـ Modal بعد الحفظ
                $('#createMarks').modal('hide');
            });
        });


        document.getElementById("saveCreateMarks").addEventListener("click", function() {
            Swal.fire({
                title: "هل انتهيت من إضافة العلامات ؟؟",
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
        // edit marks for exam
        // --------------------------------------------------------------------------------------



        $(document).ready(function() {
            // عند الضغط على زر التعديل
            $('.btn-editMarks').on('click', function() {
                // فتح الـ Modal
                $('#editMarks').modal('show');

                // يمكن تعبئة النموذج بالبيانات الحالية هنا إذا لزم الأمر
                // var row = $(this).closest('tr');
                // var name = row.find('td:eq(0)').text(); // استخراج الاسم
                // var status = row.find('td:eq(1) .badge').text(); // استخراج حالة الطالب

                // تعبئة النموذج بالبيانات المستخرجة
                // $('#name').val(name);
                // $('#status').val(status);
            });

            // حفظ التغييرات (يمكنك تعديل هذا الجزء لتنفيذ AJAX أو تحديث البيانات)
            $('#btn-saveEditMarks').on('click', function() {
                // هنا يمكن تنفيذ حفظ التغييرات، مثل إرسال البيانات عبر AJAX
                // var updatedName = $('#name').val();
                // var updatedStatus = $('#status').val();

                // أغلق الـ Modal بعد الحفظ
                $('#editMarks').modal('hide');
            });
        });


        document.getElementById("saveEditMarks").addEventListener("click", function() {
            Swal.fire({
                title: "هل انتهيت من تعديل العلامات ؟؟",
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

        // show mark for student
        document.getElementById("showMarkForstudent").addEventListener("click", function() {
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "تم إظهار علامات اختبار سورة الانعام لدى الطلاب ",
                showConfirmButton: false,
                timer: 1500
            });
        });

        //hide mark For Student
        document.getElementById("hideMarkForstudent").addEventListener("click", function() {
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "تم إخفاء علامات اختبار سورة الانعام لدى الطلاب ",
                showConfirmButton: false,
                timer: 1500
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
