<style>
    .CoverDiv {
        width: 100%;
        height: 350px;
        background-image: url("{{ asset('AdminAssets/img/logo/RegPicture.PNG') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        border: 0.4rem;
    }
    @media (max-width: 991px) and (min-width: 574px) {
        #CoverDiv {
            height: 280px;
        }
    }

    @media (max-width: 574px) and (min-width: 450px) {
        #CoverDiv {
            height: 245px;
        }
    }

    @media (max-width: 450px) and (min-width: 315px) {
        #CoverDiv {
            height: 170px;
        }
    }
</style>


<div class="modal fade" id="signUpPopUp" tabindex="-1" role="dialog" aria-labelledby="signUpPopUp" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content shadow-lg signPop">


            <div class="CoverDiv" id="CoverDiv">
            </div>


            <div class="head_join">
                <h5 class="text-white text-center" id="joinHeder">انضم إلينا الآن </h5>
            </div>

            <div class="modal-body container bodySignUp">
                <form id="editForm" class="row g-3">

                    <div class="col-md-4 ">
                        <label for="fullName" class="form-label lable_color ">الاسم الرباعي</label>
                        <input type="text" class="form-control rounded-pill shadow-sm" id="fullName">
                    </div>
                    <div class="col-md-4">
                        <label for="gender" class="form-label  lable_color">الجنس</label>
                        <select class="form-select rounded-pill shadow-sm p-3" id="gender">
                            <option value="" disabled selected></option>
                            <option value="male">ذكر</option>
                            <option value="female">أنثى</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="dob" class="form-label lable_color">تاريخ الميلاد</label>
                        <input type="date" class="form-control rounded-pill shadow-sm" id="dob">
                    </div>
                    <div class="col-md-4">
                        <label for="country" class="form-label lable_color">الدولة</label>
                        <input type="text" class="form-control rounded-pill shadow-sm" id="country">

                    </div>
                    <div class="col-md-4">
                        <label for="city" class="form-label lable_color">المدينة</label>
                        <input type="text" class="form-control rounded-pill shadow-sm" id="city">
                    </div>
                    <div class="col-md-4">
                        <label for="village" class="form-label lable_color">القرية/الحي</label>
                        <input type="text" class="form-control rounded-pill shadow-sm" id="village">
                    </div>

                    <div class="col-md-6">
                        <label for="" class="form-label  lable_color">المستوى العلمي</label>
                        <select class="form-select rounded-pill shadow-sm p-3" id="">
                            <option value="" disabled selected></option>
                            <option value="male">طالب</option>
                            <option value="female">دبلوم</option>
                            <option value="female">بكالوريوس</option>
                            <option value="female">ماسجتير</option>
                            <option value="female">دكتوراة</option>

                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="major" class="form-label lable_color">التخصص العلمي</label>
                        <input type="text" class="form-control rounded-pill shadow-sm" id="major">
                    </div>

                    <div class="col-md-4">
                        <label for="phoneNumber" class="form-label lable_color">رقم الهاتف</label>
                        <input type="text" class="form-control rounded-pill shadow-sm" id="phoneNumber">
                    </div>

                    <div class="col-md-4">
                        <label for="email" class="form-label lable_color">البريد الإلكتروني</label>
                        <input type="email" class="form-control rounded-pill shadow-sm" id="email"
                            style="direction: rtl;">
                    </div>

                    <div class="col-md-4">
                        <label for="email" class="form-label lable_color">كلمة السر </label>
                        <input type="password" class="form-control rounded-pill shadow-sm" id="email"
                            style="direction: rtl;">
                    </div>

                    <div class="col-md-6">
                        <label for="memorization" class="form-label lable_color">مقدار الحفظ قبل الملتقى</label>
                        <input type="text" class="form-control rounded-pill shadow-sm" id="memorization">
                    </div>
                    <div class="col-md-6">
                        <label for="howJoined" class="form-label lable_color">كيف يسر الله لك الانضمام معنا</label>
                        <input type="text" class="form-control rounded-pill shadow-sm" id="howJoined">
                    </div>

                </form>
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-danger rounded-pill px-4" data-bs-dismiss="modal">إغلاق</button>
                <button type="button" class="btn btn-saveChanges rounded-pill px-4" id="saveChanges"> إنشاء
                    حساب</button>
            </div>
        </div>
    </div>
</div>
