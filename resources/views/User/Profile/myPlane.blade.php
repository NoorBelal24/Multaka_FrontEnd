<div class="container">

    {{-- <embed class="p-4" src="{{ asset('الهكر.pdf') }}" type="application/pdf" width="100%" height="800px" /> --}}

    <div class="embed-responsive" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%;">
        <iframe src="{{ asset('الهكر.pdf') }}" type="application/pdf" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" allowfullscreen></iframe>
    </div>

    <br>



    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-outline-warning mb-4" id="btn-dawonLoadePlane">
            <a href="{{ asset('pdfs/الهكر.pdf') }}" download="الهكر.pdf">تنزيل
                الخطة</a>
        </button>
    </div>


    <br>
    <div class="mb-3">
        <label for="formFileMultiple" class="form-label">قم بتحميل الملف الخاص
            بطالبك</label>
        <input class="form-control" type="file" id="formFileMultiple" multiple>
        <br>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-outline-dark mb-4 btn-addPlane" id="btn-addPlane">
                حفظ الخطة
            </button>
        </div>
    </div>



</div>
