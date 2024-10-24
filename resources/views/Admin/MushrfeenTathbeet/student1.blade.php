
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
                        onclick="toggleStudents('mushref_alaa')"
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
