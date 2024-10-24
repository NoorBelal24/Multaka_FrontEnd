
<section class="slider" id="#">

    <div id="custom_carousel" class="col-lg-12">
        <div class="statbox widget box box-shadow">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner card-wrapper-Poster">

                    <div class="carousel-item active Poster-card">
                        <div class="card-image">
                            <img src="{{ asset('AdminAssets/img/poster/poster1.jpg') }}" class="d-block w-100"
                                alt="...">
                            <div id="card-paragraphs">
                                <p id="card-title">ملتقى الأقصى القرآني</p>
                                <p id="card-text">"ثُمَّ أَوْرَثْنَا الْكِتَابَ الَّذِينَ اصْطَفَيْنَا مِنْ عِبَادِنَا"</p>
                            </div>
                        </div>
                    </div>


                    <div class="carousel-item Poster-card">
                        <div class="card-image">
                            <img src="{{ asset('AdminAssets/img/poster/poster2.jpg') }}" class="d-block w-100"
                                alt="...">
                            <div id="card-paragraphs">
                                <p id="card-title">ملتقى الأقصى القرآني</p>
                                <p id="card-text">"ثُمَّ أَوْرَثْنَا الْكِتَابَ الَّذِينَ اصْطَفَيْنَا مِنْ عِبَادِنَا"</p>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="carousel-item Poster-card">
                        <div class="card-image">
                            <img src="{{ asset('AdminAssets/img/poster/WhatsApp Image 2024-10-18 at 00.38.11_412d610a.jpg') }}"
                                class="d-block w-100" style=" height: 650px !important; object-fit: cover;"
                                alt="...">
                            <div id="card-paragraphs">
                                <p id="card-title">ملتقى الأقصى القرآني</p>
                                <p id="card-text">"ثُمَّ أَوْرَثْنَا الْكِتَابَ الَّذِينَ اصْطَفَيْنَا مِنْ عِبَادِنَا"</p>
                            </div>
                        </div>
                    </div> --}}


                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </div>
    </div>

</section>

