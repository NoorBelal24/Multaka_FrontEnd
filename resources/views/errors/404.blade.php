{{-- if signed or not --}}
@extends('masterForUnsignedUser')

@section('css')
    <link href="{{ asset('AdminAssets/css/navBar.css') }}" rel="stylesheet" type="text/css" />

    <style>
        .content-div {
            background-color: #e3e3e3;
        }

        .bg_img {
            min-height: 480px;
            min-width: 100%;
            width: 80%;
            max-width: 480px;
            background-image: url("{{ asset('AdminAssets/img/icon/main_how_to_design_404_page.webp') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
@endsection


@section('content')
    <section class="py-5 " style="">

        <br>
        <br>
        <br>
        <br>

        <div
            class="d-flex justify-content-center
                align-items-center flex-column
                text-center
                ">
            <div class="bg_img  rounded-pill">
            </div>
            <div>
                <br>
                <p class="display-4">عذرًا، الصفحة التي تبحث عنها غير موجودة!</p>
                {{-- <p>The page you are looking for not available...</p> --}}
                <a href="{{ asset('/') }}" class="btn btn-danger mb-2 me-4 _effect--ripple waves-effect waves-light"
                    style="font-size: 1.5rem">
                    العودة إلى الصفحة الرئيسية
                </a>
            </div>
        </div>
    </section>

    {{-- pop Up signIn --}}
    @include('home.popUp.signIn')

    {{-- pop Up signUp --}}
    @include('home.popUp.signUp')
@endsection


