


{{-- pop Edit evaluation --}}

<div class="modal fade" id="edie-Evalution" tabindex="-1" role="dialog" aria-labelledby="edie-Evalution" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content shadow-lg signPop">

            <div class="popEditHeader text-white">
                <h5 class="mx-auto text-center" id="addStudent">تتغيير تقييم الطالب أحمد </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <br>
            <div class="modal-body container bodyEdit p-5">
                <form id="editForm" class="row g-3 text-center">
                    <br>

                    <div class="row mx-auto px-5">
                        <div class="col-md-4">
                            <label for="fullName" class="form-label labelEdit-color lable-add"> اختر الشهر
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

                    <div class="row mx-auto px-5">
                        <div class="col-md-4 p-2">
                            <label for="fullName" class="form-label labelEdit-color lable-add text-center"> اختر الثلث
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

                    <div class="row mx-auto px-5">
                        <div class="col-md-4 p-2">
                            <label for="fullName" class="form-label labelEdit-color lable-add text-center"> تقييم
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

                    <div class="row mx-auto px-5">
                        <div class="col-md-4 p-2">
                            <label for="fullName" class="form-label labelEdit-color lable-add text-center"> ملاحظات إن
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
                <button type="button" class="btn btn-danger btn-closeProfile rounded-pill px-4" data-bs-dismiss="modal">إغلاق</button>
                <button type="button" class="btn btn-saveChangeRating rounded-pill" id="saveChangeRating">
                    تغيير
                    التقييم
                </button>
            </div>
        </div>
    </div>
</div>
