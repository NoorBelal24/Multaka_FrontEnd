@extends('masterForUnsignedUser')


@section('content')

    {{-- slider --}}
    @include('layout.silder')


    {{--  رؤية الملتقى --}}
    <section class="MainWrapper">
        <div class="title" id="aim"><span class="TitleContainer">رؤية الملتقى</span></div>
        <div class="VisionBox">
            <div class="row justify-content-start align-items-center h-100">
                <div class="col-md-12 col-xl-12">
                    <figure class=" p-4" id="figure">
                        <blockquote class="block_quote" style="width: 100%;">
                            <p class="pb-2">بناء جيل قرآني مبدع، حافظ لكتاب الله وساعِ للعمل به، للنهضة بالفرد المسلم
                                وبالأمة الإسلامية.
                            </p>
                        </blockquote>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    {{-- تجربة الحافظ --}}
    <section class="MainWrapper">
        <div class="title" id="huffaz"><span class="TitleContainer">تجربة حافظ</span></div>

        <div class="VideoContainer">
            <div class="container">
                <div class="ratio ratio-16x9"><iframe width="560" height="315" src="https://www.youtube.com/embed/zA0LCA0b_SM?si=rkS4_VtVsZZpFP9j" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
            </div>

            <div class="container">
                <div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/d-yu-Bv1Tzo?si=9BJXxxIKWiVgf3gE"
                        title="YouTube video" allowfullscreen=""></iframe></div>
            </div>
        </div>
        <div class="ButtonContainer"><a href="/huffaz"><button class="ripple ripple-surface btn btn-primary" role="button"
                    id="ShowMoreButton">مشاهدة المزيد</button></a></div>
    </section>

    {{-- الملتقى بعيون طلابه  --}}
    <section class="MainWrapper">
        <div class="title" id="feedBack"><span class="TitleContainer">الملتقى بعيون طلابه </span></div>
        @include('home.feedBack')
    </section>

    {{-- أعداد الملتقى --}}
    <section class="MainWrapper">
        <div class="title"><span class="TitleContainer">أعداد الملتقى</span></div>
        @include('home.numbers')
    </section>

    {{-- pop Up signIn --}}
    @include('home.popUp.signIn')

    {{-- pop Up signUp --}}
    @include('home.popUp.signUp')
@endsection



@section('script')
    {{-- carousel feedBack --}}
    <script>
        const carousel = document.getElementById('carousel');
        let isDown = false;
        let startX;
        let scrollLeft;

        carousel.addEventListener('mousedown', (e) => {
            isDown = true;
            carousel.classList.add('active');
            startX = e.pageX - carousel.offsetLeft;
            scrollLeft = carousel.scrollLeft;
        });

        carousel.addEventListener('mouseleave', () => {
            isDown = false;
            carousel.classList.remove('active');
        });

        carousel.addEventListener('mouseup', () => {
            isDown = false;
            carousel.classList.remove('active');
        });

        carousel.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - carousel.offsetLeft;
            const walk = (x - startX) * 3; // scroll-fast
            carousel.scrollLeft = scrollLeft - walk;
        });
    </script>
    {{-- For Numbers --}}
    <script>
        // Function to animate the counter
        function animateCounter(element) {
            const target = +element.getAttribute('data-target');
            const speed = 200; // Adjust this value to change the speed of counting

            const updateCount = () => {
                const currentValue = +element.innerText;
                const increment = target / speed;

                if (currentValue < target) {
                    element.innerText = Math.ceil(currentValue + increment);
                    setTimeout(updateCount, 10);
                } else {
                    element.innerText = target;
                }
            };
            updateCount();
        }

        // Intersection Observer to start the animation when the element is visible
        const counters = document.querySelectorAll('.counter');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target); // Stop observing once animation starts
                }
            });
        }, {
            threshold: 0.5
        }); // The counter should be at least 50% visible to trigger the animation

        counters.forEach(counter => {
            observer.observe(counter);
        });
    </script>
    {{-- pop up for signIn and singUp --}}
    <script>
        // {{-- pop Up signUp --}}
        $(document).ready(function() {
            $('.btn-sigUp').on('click', function() {
                $('#signUpPopUp').modal('show');
            });

            $('#saveChanges').on('click', function() {
                $('#signUpPopUp').modal('hide');
            });
        });

        // signInPopUp
        $(document).ready(function() {
            $('.btn-sigIn').on('click', function() {
                $('#signInPopUp').modal('show');
            });

            $('#saveChanges').on('click', function() {
                $('#signInPopUp').modal('hide');
            });
        });
    </script>
@endsection
