
<div class="modal fade" id="changeMushref" tabindex="-1" role="dialog" aria-labelledby="changeMushref"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content shadow-lg signPop changeMushref">


        <div class="popEditHeader text-white">
            <h5 class="mx-auto text-center" >التغيير إلى مشرف جديد  </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <br>
        <div class="modal-body container bodyEdit p-5">
            <form id="editForm" class="row g-3 text-center">

                <div class="row p-1">
                    <div class="col-md-4">
                        <label for="fullName" class="form-label labelEdit-color"> المشرف الحالي </label>
                    </div>

                    <div class="col-md-4">
                        <input type="text" class="form-control rounded-pill shadow-sm" id="country"
                            placeholder="علاء الرمحي">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label for="fullName" class="form-label labelEdit-color"> المشرف الجديد </label>
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
