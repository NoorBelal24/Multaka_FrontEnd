
<div class="modal fade" id="addStudent" tabindex="-1" role="dialog" aria-labelledby="addStudent"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content shadow-lg signPop addStudent">

        <div class="popEditHeader text-white">
            <h5 class="mx-auto text-center"  id="addStudent">إضافة طالب جديد </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <br>
        <div class="modal-body container bodyEdit p-5">
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
                        <label for="fullName" class="form-label labelEdit-color lable-add"> اسم الطالب جديد </label>
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
