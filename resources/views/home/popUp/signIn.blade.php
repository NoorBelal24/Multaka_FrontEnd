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

<div class="modal fade " id="signInPopUp" tabindex="-1" role="dialog" aria-labelledby="signInPopUp" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content shadow-lg signPop">

            <div class="CoverDiv" id="CoverDiv">
            </div>

            <div class="head_join">
                <h5 class="text-white text-center" id="joinHeder"> تسجيل الدخول </h5>
            </div>


            <div class="modal-body container bodySignUp p-4">
                <form id="editForm" class="row text-center mx-auto">

                    <div class="row p-2 mx-3">
                        <div class="col-md-4">
                            <label for="fullName" class="form-label lable_color lable-add"> البريد الإلكتروني </label>
                        </div>

                        <div class="col-md-4">
                            <input type="email" class="form-control rounded-pill shadow-sm" id="email"
                                placeholder="أدخل بريدك الإلكتروني " style="direction: rtl;">
                        </div>
                    </div>

                    <div class="row p-2 mx-3">
                        <div class="col-md-4">
                            <label for="email" class="form-label lable_color lable-add">كلمة السر </label>

                        </div>

                        <div class="col-md-4">
                            <input type="password" class="form-control rounded-pill shadow-sm" id="email"
                                placeholder=" أدخل كلمة السر" style="direction: rtl;">
                        </div>

                    </div>
                </form>
            </div>


            <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-danger rounded-pill px-4" data-bs-dismiss="modal">إغلاق</button>
                <button type="button" class="btn btn-saveChanges rounded-pill px-4" id="saveChanges">تسجيل
                    دخول</button>
            </div>
        </div>
    </div>
</div>
