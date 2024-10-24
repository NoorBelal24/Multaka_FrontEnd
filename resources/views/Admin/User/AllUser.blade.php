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
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <table id="show-hide-col-AllUsers" class="table dt-table-hover" style="width:100%">
                        <thead style="border-bottom: none;">
                            <tr>
                                <th class="sorting">الاسم الرباعي</th>
                                <th>حالة الطالب</th>
                                <th class="text-center">الجنس</th>
                                <th>تاريخ الميلاد</th>
                                <th>الدولة</th>
                                <th>المدينة</th>
                                <th>القرية/الحي</th>
                                <th>التخصص العلمي</th>
                                <th>رقم الهاتف</th>
                                <th>مقدار الحفظ قبل الملتقى</th>
                                <th>كيف يسر الله لك الانضمام معنا</th>
                                <th>إجراءات</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr class="activeUser activeUserFemale">
                                <td>
                                    <div class="media">
                                        <div class="avatar me-2">
                                            <img alt="avatar" src="{{ asset('AdminAssets/img/users/profile-7.jpeg') }}"
                                                class="rounded-circle" />
                                        </div>
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">ليث بلال مهنا</h6>
                                            <span>shaun.park@mail.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="active text-center">
                                    <span value="" class="badge badge-light-success">متفاعل</span>
                                </td>
                                <td data-gender="male">ذكر</td>
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
                                    </div>
                                </td>

                            </tr>
                            <tr class="activeUser activeUserMale">
                                <td>
                                    <div class="media">
                                        <div class="avatar me-2">
                                            <img alt="avatar" src="{{ asset('AdminAssets/img/users/profile-7.jpeg') }}"
                                                class="rounded-circle" />
                                        </div>
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">مهنا بلال مهنا</h6>
                                            <span>shaun.park@mail.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="active text-center">
                                    <span value="" class="badge badge-light-success">متفاعل</span>
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
                                    </div>
                                </td>

                            </tr>
                            <tr class="inactiveUser">
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
                                <td class="text-center inactive">
                                    <span value="inactive" class="badge badge-light-danger">مفصول</span>
                                </td>
                                <td data-gender="male">أنثى</td>
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

                                <td class="text-center">
                                    <div class="action-btns">
                                        <a class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip"
                                            data-placement="top" title="View">
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
                                        <a href="javascript:void(0);" type="button"
                                            class="action-btn btn-delete bs-tooltip" data-toggle="tooltip"
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
                                    </div>
                                </td>

                            </tr>

                            <tr class="hafez">
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
                                <td class="text-center">
                                    <span class="badge badge-light-secondary">حافظ</span>
                                </td>
                                <td>أنثى</td>
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
                                <td>عن طريق أخي
                                </td>

                                <td class="text-center">
                                    <div class="action-btns">
                                        <a href="javascript:void(0);" class="action-btn btn-view bs-tooltip me-2"
                                            data-toggle="tooltip" data-placement="top" title="View">
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
                                        <a href="javascript:void(0);" type="button"
                                            class="action-btn btn-delete bs-tooltip" data-toggle="tooltip"
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
                                    </div>
                                </td>

                            </tr>
                            <tr class="hafez">
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
                                <td class="text-center">
                                    <span class="badge badge-light-secondary">حافظ</span>
                                </td>
                                <td>أنثى</td>
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
                                <td>عن طريق أخي
                                </td>

                                <td class="text-center">
                                    <div class="action-btns">
                                        <a href="javascript:void(0);" class="action-btn btn-view bs-tooltip me-2"
                                            data-toggle="tooltip" data-placement="top" title="View">
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
                                        <a href="javascript:void(0);" type="button"
                                            class="action-btn btn-delete bs-tooltip" data-toggle="tooltip"
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
                                    </div>
                                </td>

                            </tr>
                            <tr class="hafez">
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
                                <td class="text-center">
                                    <span class="badge badge-light-secondary">حافظ</span>
                                </td>
                                <td>أنثى</td>
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
                                <td>عن طريق أخي
                                </td>

                                <td class="text-center">
                                    <div class="action-btns">
                                        <a href="javascript:void(0);" class="action-btn btn-view bs-tooltip me-2"
                                            data-toggle="tooltip" data-placement="top" title="View">
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
                                        <a href="javascript:void(0);" type="button"
                                            class="action-btn btn-delete bs-tooltip" data-toggle="tooltip"
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
                                    </div>
                                </td>

                            </tr>
                            <tr class="hafez">
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
                                <td class="text-center">
                                    <span class="badge badge-light-secondary">حافظ</span>
                                </td>
                                <td>أنثى</td>
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
                                <td>عن طريق أخي
                                </td>

                                <td class="text-center">
                                    <div class="action-btns">
                                        <a href="javascript:void(0);" class="action-btn btn-view bs-tooltip me-2"
                                            data-toggle="tooltip" data-placement="top" title="View">
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
                                        <a href="javascript:void(0);" type="button"
                                            class="action-btn btn-delete bs-tooltip" data-toggle="tooltip"
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
                                    </div>
                                </td>

                            </tr>
                            <tr class="hafez">
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
                                <td class="text-center">
                                    <span class="badge badge-light-secondary">حافظ</span>
                                </td>
                                <td>أنثى</td>
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
                                <td>عن طريق أخي
                                </td>

                                <td class="text-center">
                                    <div class="action-btns">
                                        <a href="javascript:void(0);" class="action-btn btn-view bs-tooltip me-2"
                                            data-toggle="tooltip" data-placement="top" title="View">
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
                                        <a href="javascript:void(0);" type="button"
                                            class="action-btn btn-delete bs-tooltip" data-toggle="tooltip"
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
                                    </div>
                                </td>

                            </tr>
                            <tr class="hafez">
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
                                <td class="text-center">
                                    <span class="badge badge-light-secondary">حافظ</span>
                                </td>
                                <td>أنثى</td>
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
                                <td>عن طريق أخي
                                </td>

                                <td class="text-center">
                                    <div class="action-btns">
                                        <a href="javascript:void(0);" class="action-btn btn-view bs-tooltip me-2"
                                            data-toggle="tooltip" data-placement="top" title="View">
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
                                        <a href="javascript:void(0);" type="button"
                                            class="action-btn btn-delete bs-tooltip" data-toggle="tooltip"
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
                                    </div>
                                </td>

                            </tr>
                            <tr class="hafez">
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
                                <td class="text-center">
                                    <span class="badge badge-light-secondary">حافظ</span>
                                </td>
                                <td>أنثى</td>
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
                                <td>عن طريق أخي
                                </td>

                                <td class="text-center">
                                    <div class="action-btns">
                                        <a href="javascript:void(0);" class="action-btn btn-view bs-tooltip me-2"
                                            data-toggle="tooltip" data-placement="top" title="View">
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
                                        <a href="javascript:void(0);" type="button"
                                            class="action-btn btn-delete bs-tooltip" data-toggle="tooltip"
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
                                    </div>
                                </td>

                            </tr>
                            <tr class="hafez">
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
                                <td class="text-center">
                                    <span class="badge badge-light-secondary">حافظ</span>
                                </td>
                                <td>أنثى</td>
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
                                <td>عن طريق أخي
                                </td>

                                <td class="text-center">
                                    <div class="action-btns">
                                        <a href="javascript:void(0);" class="action-btn btn-view bs-tooltip me-2"
                                            data-toggle="tooltip" data-placement="top" title="View">
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
                                        <a href="javascript:void(0);" type="button"
                                            class="action-btn btn-delete bs-tooltip" data-toggle="tooltip"
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
                                    </div>
                                </td>

                            </tr>


                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>


    {{-- pop up edit user --}}
    @include('Admin.User.popUp.editUser')
@endsection

@section('script')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/button-ext/jszip.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/button-ext/buttons.print.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/plugins/src/table/datatable/custom_miscellaneous_allUsers.js') }}"></script>
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


        // //للحفظة: لإظهار قائمة ذكور واناث
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

        // //للمفصولين: لإظهار ذكزر واناث
        // document.addEventListener('DOMContentLoaded', function() {
        //     // الحصول على عنصر "الحافظون والحافظات"
        //     const hafezItem = document.querySelector('.listTypeUser[data-status="inactiveUser"]');
        //     const subMenu = hafezItem.querySelector('.inactiveUserList');

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


        // //  لللمتفاعلين : إظهار ذكزر واناث
        // document.addEventListener('DOMContentLoaded', function() {
        //     // الحصول على عنصر "الحافظون والحافظات"
        //     const hafezItem = document.querySelector('.listTypeUser[data-status="activeUser"]');
        //     const subMenu = hafezItem.querySelector('.activeUserList');

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


        // // متفاعلون ذكور | إناث | كل
        // const sidebarItems2 = document.querySelectorAll('.activeUserData');
        // const rows2 = document.querySelectorAll('#show-hide-col-AllUsers tbody tr');
        // // أضف حدث النقر على كل عنصر في الشريط الجانبي
        // sidebarItems2.forEach(item => {
        //     item.addEventListener('click', function() {
        //         const selectedValue = this.getAttribute('data-status');

        //         rows2.forEach(row => {
        //             if (selectedValue === 'allActive') {
        //                 row.style.display = ''; // يظهر جميع الصفوف
        //             } else {
        //                 row.style.display = row.classList.contains(selectedValue) ? '' : 'none';
        //             }
        //         });
        //     });
        // });
    </script>
@endsection