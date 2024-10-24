


<td colspan="2">
    <table class="table table-bordered table-dawratTathbeet container">
        <thead>
            <tr>
                <th class="text-center" scope="col">اسم الطالبة / الاختبار </th>
                <th class="text-center" scope="col"> الجزء الأول من سورة البقرة
                    <div class="action-btns showMarkForstudent">

                        <a href="javascript:void(0);" id="showMarkForstudent"
                            onclick="toggleStudents('mushref_osama')"
                            class="action-btn btn-view bs-tooltip me-2"
                            data-toggle="tooltip" data-placement="top"
                            title="عرض العلامات للطلاب">
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

                        {{-- <img class="calenderImg"
                            src="{{ asset('AdminAssets/img/icon/eye-blind-icon.svg') }}"
                            alt=""
                            style="width: 24px; height: 24px; filter: invert(52%) sepia(7%) saturate(196%) hue-rotate(183deg) brightness(92%) contrast(94%);">
                            --}}


                        <a href="javascript:void(0);"
                            class="action-btn btn-editMarks bs-tooltip me-2"
                            data-toggle="tooltip" data-placement="top"
                            title="تعديل علامات الاختبار">
                            <img class="calenderImg"
                                src="{{ asset('AdminAssets/img/icon/pencil-outline-icon.svg') }}"
                                alt=""
                                style="width: 22px; height: 22px;filter: invert(52%) sepia(7%) saturate(196%) hue-rotate(183deg) brightness(92%) contrast(94%);">
                        </a>

                        <a href="javascript:void(0);"
                            class="action-btn btn-delete bs-tooltip"
                            data-toggle="tooltip" data-placement="top"
                            title="حذف علامات الاختبار">
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
                </th>

                <th class="text-center" scope="col"> الجزء الثاني من سورة البقرة
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
                </th>
                <th class="text-center" scope="col"> سورة البقرة


                </th>
                <th class="text-center" scope="col"> سورة آل عمران</th>
                <th class="text-center" scope="col"> سورتي البقرة وآل عمران </th>

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
                            <h6 class="mb-0">ميسم حمادنه</h6>
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <span class="badge badge-light-success mb-0">100 </span>

                </td>

                <td class="text-center">
                    <span class="badge badge-light-danger mb-0">100 </span>
                </td>
                <td class="text-center">
                    <span class="badge badge-light-warning mb-0">100 </span>
                </td>
                <td class="text-center">
                    <span class="badge badge-light-warning mb-0">غير مكتمل </span>
                </td>
                <td class="text-center">
                    <span class="badge badge-light-danger mb-0">غير مكتمل </span>
                </td>
                <td class="text-center">
                    <div class="action-btns">
                        <a href="javascript:void(0);"
                            class="action-btn btn-deleteStudent bs-tooltip"
                            data-toggle="tooltip" data-placement="top"
                            title="حذف الطالبة">
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


            <tr>
                <td>
                    <div class="media">
                        <div class="avatar me-2">
                            <img alt="avatar"
                                src="{{ asset('AdminAssets/img/profile-7.jpeg') }}"
                                class="rounded-circle" />
                        </div>
                        <div class="media-body align-self-center">
                            <h6 class="mb-0">ميسم حمادنه</h6>
                            <span>shaun.park@mail.com</span>
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <span class="badge badge-light-success mb-0">100 </span>

                </td>

                <td class="text-center">
                    <span class="badge badge-light-danger mb-0">100 </span>
                </td>
                <td class="text-center">
                    <span class="badge badge-light-warning mb-0">100 </span>
                </td>
                <td class="text-center">
                    <span class="badge badge-light-warning mb-0">غير مكتمل </span>
                </td>
                <td class="text-center">
                    <span class="badge badge-light-danger mb-0">غير مكتمل </span>
                </td>
                <td class="text-center">
                    <div class="action-btns">
                        <a href="javascript:void(0);"
                            class="action-btn btn-delete bs-tooltip"
                            data-toggle="tooltip" data-placement="top"
                            title="حذف الطالبة">
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
            <tr>
                <td>
                    <div class="media">
                        <div class="avatar me-2">
                            <img alt="avatar"
                                src="{{ asset('AdminAssets/img/profile-7.jpeg') }}"
                                class="rounded-circle" />
                        </div>
                        <div class="media-body align-self-center">
                            <h6 class="mb-0">ميسم حمادنه</h6>
                            <span>shaun.park@mail.com</span>
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <span class="badge badge-light-success mb-0">100 </span>

                </td>

                <td class="text-center">
                    <span class="badge badge-light-danger mb-0">100 </span>
                </td>
                <td class="text-center">
                    <span class="badge badge-light-warning mb-0">100 </span>
                </td>
                <td class="text-center">
                    <span class="badge badge-light-warning mb-0">غير مكتمل </span>
                </td>
                <td class="text-center">
                    <span class="badge badge-light-danger mb-0">غير مكتمل </span>
                </td>
                <td class="text-center">
                    <div class="action-btns">
                        <a href="javascript:void(0);"
                            class="action-btn btn-delete bs-tooltip"
                            data-toggle="tooltip" data-placement="top"
                            title="حذف الطالبة">
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

        </tbody>
    </table>
</td>







