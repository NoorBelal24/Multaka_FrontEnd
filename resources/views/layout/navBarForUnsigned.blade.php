
<section class="navBarForUser">
    <div class="header-container container-xxl">
        <header class="header navbar navbar-expand-sm expand-header justify-content-between ">
            <ul class="navbar-item theme-brand flex-row  text-center ">

                <li class="nav-item theme-logo">
                    <a href="{{ asset('/') }}">
                        <img src="{{ asset('AdminAssets/img/logo/logo.jpeg') }}" class="navbar-logo" alt="logo"
                            style="border-radius: 50%">
                    </a>
                </li>

                <li class="nav-item titelLogo p-1">
                    <a href="{{ asset('/') }}" class="Title nav-link TitleColor"> ملتقى <span
                            id="TitleColor">الأقصى</span> القرآني</a>
                </li>
            </ul>

            <ul class="headerCenter navbar-item theme-brand  flex-row ">
                <li><a class="ListItemNav " href="#"> الرئيسية</a></li>
                <li><a class="ListItemNav" href="{{ route('Policies') }}">عن الملتقى </a></li>
                <li><a class="ListItemNav" href="#huffaz">عن الحفاظ</a></li>
            </ul>

            <ul class="headerLeft navbar-item flex-row ">
                <li><a class="ListItemNav btn-sigIn p-2"> تسجيل الدخول</a></li>
                <li><button
                        class="btn btn-sigUp btn-warning btn-rounded me-2
                 _effect--ripple waves-effect waves-light">انضم
                        إلينا </button> </li>
            </ul>
        </header>
    </div>
</section>
