

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content shadow-lg signPop editModal">
        <div class="popEditHeader text-white">
            <h5 class="mx-auto text-center">تعديل بيانات الطالب</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body container bodyEdit p-5">
            <form id="editForm" class="row g-3 text-center">

                <div class="col-md-4">
                    <label for="fullName" class="form-label labelEdit-color ">الاسم الرباعي</label>
                    <input type="text" class="form-control rounded-pill shadow-sm" id="fullName"
                        placeholder="  الاسم الرباعي">
                </div>
                <div class="col-md-4">
                    <label for="gender" class="form-label labelEdit-color ">الجنس</label>
                    <select class="form-select rounded-pill shadow-sm p-3" id="gender">
                        <option value="male">ذكر</option>
                        <option value="female">أنثى</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="dob" class="form-label labelEdit-color ">تاريخ الميلاد</label>
                    <input type="date" class="form-control rounded-pill shadow-sm" id="dob">
                </div>
                <div class="col-md-4">
                    <label for="country" class="form-label labelEdit-color ">الدولة</label>
                    <input type="text" class="form-control rounded-pill shadow-sm" id="country"
                        placeholder="  الدولة">
                </div>
                <div class="col-md-4">
                    <label for="city" class="form-label labelEdit-color ">المدينة</label>
                    <input type="text" class="form-control rounded-pill shadow-sm" id="city"
                        placeholder="  المدينة">
                </div>
                <div class="col-md-4">
                    <label for="village" class="form-label labelEdit-color ">القرية/الحي</label>
                    <input type="text" class="form-control rounded-pill shadow-sm" id="village"
                        placeholder="  القرية/الحي">
                </div>
                <div class="col-md-6">
                    <label for="educationLevel" class="form-label labelEdit-color ">المستوى العلمي</label>
                    <input type="text" class="form-control rounded-pill shadow-sm" id="educationLevel"
                        placeholder="  المستوى العلمي">
                </div>
                <div class="col-md-6">
                    <label for="major" class="form-label labelEdit-color ">التخصص العلمي</label>
                    <input type="text" class="form-control rounded-pill shadow-sm" id="major"
                        placeholder="  التخصص العلمي">
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label labelEdit-color ">البريد الإلكتروني</label>
                    <input type="email" class="form-control rounded-pill shadow-sm" id="email"
                        placeholder="البريد الإلكتروني" style="direction: rtl;">
                </div>
                <div class="col-md-6">
                    <label for="phoneNumber" class="form-label labelEdit-color ">رقم الهاتف</label>
                    <input type="text" class="form-control rounded-pill shadow-sm" id="phoneNumber"
                        placeholder="  رقم الهاتف">
                </div>
                <div class="col-md-6">
                    <label for="memorization" class="form-label labelEdit-color ">مقدار الحفظ قبل الملتقى</label>
                    <input type="text" class="form-control rounded-pill shadow-sm" id="memorization"
                        placeholder="  مقدار الحفظ الحال ">
                </div>
                <div class="col-md-6">
                    <label for="howJoined" class="form-label labelEdit-color ">كيف يسر الله لك الانضمام إلينا</label>
                    <input type="text" class="form-control rounded-pill shadow-sm" id="howJoined"
                        placeholder="كيف يسر الله لك الانضمام إلينا">
                </div>

                <div class="col-md-6">
                    <label for="memorization" class="form-label labelEdit-color "> مستوى القراءة </label>
                    <input type="text" class="form-control rounded-pill shadow-sm" id="memorization"
                        placeholder=" مستوى القراءة ">
                </div>
                <div class="col-md-6">
                    <label for="memorization" class="form-label labelEdit-color "> مستوى التجويد </label>
                    <input type="text" class="form-control rounded-pill shadow-sm" id="memorization"
                        placeholder=" مستوى التجويد ">
                </div>
                <div class="col-md-12">
                    <label for="memorization" class="form-label labelEdit-color "> ملاحظات أخرى </label>
                    <input type="text" class="form-control rounded-pill shadow-sm" id="memorization"
                        placeholder=" ..  ">
                </div>
                <br>
            </form>
        </div>
        <div class="modal-footer d-flex justify-content-between">
            <button type="button" class="btn btn-danger rounded-pill px-4"
                data-bs-dismiss="modal">إغلاق</button>
            <button type="button" class="btn btn-saveChanges rounded-pill px-4" id="saveChanges">حفظ
                التغييرات</button>
        </div>
    </div>
</div>
</div>
