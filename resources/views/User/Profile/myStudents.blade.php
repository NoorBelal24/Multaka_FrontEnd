<div class='parent ex-1'>
    <div class="row">

        <div class="  col-xl-8 col-lg-8 col-md-10 col-sm-12 mx-auto">
            <div id='left-defaults' class="dragula" >

                <div class="media  d-flex d-block">
                    <img alt="avatar" src="{{ asset('AdminAssets/img/users/profile-1.jpeg') }}" class="img-fluid ">
                    <div class="media-body p-2">
                        <div class="d-flex d-block justify-content-between">
                            <div class="">
                                <h6 class="">Need to be approved</h6>
                                <p class="">Kelly Young</p>
                            </div>
                            <div>
                                <button class="btn btn-warning btn-sm btn-addRating">تقييم</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="media  d-flex d-block">
                    <img alt="avatar" src="{{ asset('AdminAssets/img/users/profile-23.jpeg') }}" class="img-fluid ">
                    <div class="media-body p-2">
                        <div class="d-flex d-block justify-content-between">
                            <div class="">
                                <h6 class="">Need to be approved</h6>
                                <p class="">Kelly Young</p>
                            </div>
                            <div>
                                <button class="btn btn-warning btn-sm btn-addRating">تقييم</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="media  d-flex d-block">
                    <img alt="avatar" src="{{ asset('AdminAssets/img/users/profile-3.jpeg') }}" class="img-fluid ">
                    <div class="media-body p-2">
                        <div class="d-flex d-block justify-content-between">
                            <div class="">
                                <h6 class="">Need to be approved</h6>
                                <p class="">Kelly Young</p>
                            </div>
                            <div>
                                <button class="btn btn-warning btn-sm btn-addRating">تقييم</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="media  d-flex d-block">
                    <img alt="avatar" src="{{ asset('AdminAssets/img/users/profile-5.jpeg') }}" class="img-fluid ">
                    <div class="media-body p-2">
                        <div class="d-flex d-block justify-content-between">
                            <div class="">
                                <h6 class="">Need to be approved</h6>
                                <p class="">Kelly Young</p>
                            </div>
                            <div>
                                <button class="btn btn-warning btn-sm btn-addRating">تقييم</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="media  d-flex d-block">
                    <img alt="avatar" src="{{ asset('AdminAssets/img/users/profile-1.jpeg') }}" class="img-fluid ">
                    <div class="media-body p-2">
                        <div class="d-flex d-block justify-content-between">
                            <div class="">
                                <h6 class="">Need to be approved</h6>
                                <p class="">Kelly Young</p>
                            </div>
                            <div>
                                <button class="btn btn-warning btn-sm btn-addRating">تقييم</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="media  d-flex d-block">
                    <img alt="avatar" src="{{ asset('AdminAssets/img/users/profile-3.jpeg') }}" class="img-fluid ">
                    <div class="media-body p-2">
                        <div class="d-flex d-block justify-content-between">
                            <div class="">
                                <h6 class="">Need to be approved</h6>
                                <p class="">Kelly Young</p>
                            </div>
                            <div>
                                <button class="btn btn-warning btn-sm btn-addRating">تقييم</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="media  d-flex d-block">
                    <img alt="avatar" src="{{ asset('AdminAssets/img/users/user-profile.jpeg') }}" class="img-fluid ">
                    <div class="media-body p-2">
                        <div class="d-flex d-block justify-content-between">
                            <div class="">
                                <h6 class="">Need to be approved</h6>
                                <p class="">Kelly Young</p>
                            </div>
                            <div>
                                <button class="btn btn-warning btn-sm btn-addRating">تقييم</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="media  d-flex d-block">
                    <img alt="avatar" src="{{ asset('AdminAssets/img/users/profile-34.jpeg') }}" class="img-fluid ">
                    <div class="media-body p-2">
                        <div class="d-flex d-block justify-content-between">
                            <div class="">
                                <h6 class="">Need to be approved</h6>
                                <p class="">Kelly Young</p>
                            </div>
                            <div>
                                <button class="btn btn-warning btn-sm btn-addRating">تقييم</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>



<!---------- pop up ratting student ------>
<div class="modal fade" id="addRating" tabindex="-1" role="dialog" aria-labelledby="addRating" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content shadow-lg rounded-3 addRating">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addStudent" style="padding-right: 18.5rem">تقييم الطالب أحمد </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <br>
            <div class="modal-body container" >
                <form id="editForm" class="row g-3 ">
                    <br>

                    <div class="row">
                        <div class="col-md-4">
                            <label for="fullName" class="form-label label-color lable-add"> اختر الشهر
                            </label>
                        </div>

                        <div class="col-md-4">
                            <select
                                class="form-select custom-select text-center rounded-pill shadow-sm p-3 optionMushref"
                                id="gender">
                                <option value="" disabled selected> </option>
                                <option value="male"> 10 </option>
                                <option value="male"> 11 </option>
                                <option value="male"> 12 </option>
                                <option value="male"> 1 </option>
                                <option value="male"> 2 </option>
                                <option value="male"> 3 </option>
                                <option value="male"> 4 </option>
                                <option value="male"> 5 </option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 p-2">
                            <label for="fullName" class="form-label label-color lable-add text-center"> اختر الثلث
                            </label>
                        </div>

                        <div class="col-md-4 p-2">
                            <select
                                class="form-select custom-select text-center rounded-pill shadow-sm p-3 optionMushref"
                                id="gender">
                                <option value="" disabled selected> </option>
                                <option value="male"> الثلث الأول </option>
                                <option value="male"> الثلث الثاني </option>
                                <option value="male"> الثلث الثالث </option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 p-2">
                            <label for="fullName" class="form-label label-color lable-add text-center"> تقييم
                                الأداء
                            </label>
                        </div>
                        <div class="col-md-4">
                            <div class="rating">
                                <input type="radio" name="rating" value="5" id="5"><label
                                    for="5">☆</label>
                                <input type="radio" name="rating" value="4" id="4"><label
                                    for="4">☆</label>
                                <input type="radio" name="rating" value="3" id="3"><label
                                    for="3">☆</label>
                                <input type="radio" name="rating" value="2" id="2"><label
                                    for="2">☆</label>
                                <input type="radio" name="rating" value="1" id="1"><label
                                    for="1">☆</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 p-2">
                            <label for="fullName" class="form-label label-color lable-add text-center"> ملاحظات إن
                                وجدت
                            </label>
                        </div>

                        <div class="col-md-4 p-2">
                            <input type="text" class="form-control rounded-pill" id="exampleFormControlInput1"
                                value="">

                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-danger rounded-pill px-4"
                    data-bs-dismiss="modal">إغلاق</button>
                <button type="button" class="btn btn-saveAddRating rounded-pill px-4" id="saveAddRating">
                    إضافة
                    التقييم
                </button>
            </div>
        </div>
    </div>
</div>
