@extends('masterForUnsignedUser')


@section('css')
    <link href="{{ asset('AdminAssets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('AdminAssets/css/components/carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('AdminAssets/css/pages/faq.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('AdminAssets/css/customPoster.css') }}" rel="stylesheet" type="text/css" />
@endsection



@section('content')
    {{-- slider --}}
    @include('layout.silder')


    <div class="row ">
        <div class="faq">
            <div class="faq-layouting layout-spacing">

                <div class="fq-tab-section">
                    <div class="row">
                        <div class="col-md-12">

                            <h1> تعريف عام بـ <span> ملتقى الأقصى القرآني</span> </h1>


                            <div class="row mx-auto ">
                                <div class="col-lg-8 mx-auto">
                                    <div class="accordion" id="simple_faq">

                                        <div class="card">
                                            <div class="card-header" id="fqheadingOne">
                                                <div class="mb-0" data-bs-toggle="collapse" role="navigation"
                                                    data-bs-target="#fqcollapseOne" aria-expanded="false"
                                                    aria-controls="fqcollapseOne">
                                                    <span class="faq-q-title">رؤية الملتقى</span>
                                                    <div class="icons"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-chevron-down">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div id="fqcollapseOne" class="collapse" aria-labelledby="fqheadingOne"
                                                data-bs-parent="#simple_faq">
                                                <div class="card-body">
                                                    <p>يهدف هذا الملتقى إلى تعزيز الهوية القرآنية في النفس، عن طريق
                                                        توثيق
                                                        الصحبة
                                                        فيما بين المشتركين والقرآن الكريم، عن طريق إدراج قضيتي الحفظ
                                                        والمراجعة،
                                                        التي تعين على تحقيق هذا
                                                        الهدف وهذه الرؤية.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="fqheading_two">
                                                <div class="mb-0" data-bs-toggle="collapse" role="navigation"
                                                    data-bs-target="#fqcollapse_Two" aria-expanded="false"
                                                    aria-controls="fqcollapse_Two">
                                                    <span class="faq-q-title">شروط الانضمام إلى الملتقى </span>
                                                    <div class="icons"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-chevron-down">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div id="fqcollapse_Two" class="collapse" aria-labelledby="fqheading_two"
                                                data-bs-parent="#simple_faq">
                                                <div class="card-body">

                                                    <ol>
                                                        <li>الالتزام ثم الالتزام ثم الالتزام
                                                            أي: يتوجب على المشارك حفظ صفحة واحدة على الأقل يوميًا.</li>
                                                        <br>
                                                        <li>أن لا يتعدى حفظ المشترك الجديد عن 10 أجزاء.
                                                        </li>
                                                    </ol>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="fqheading_Three">
                                                <div class="mb-0" data-bs-toggle="collapse" role="navigation"
                                                    data-bs-target="#fqBody_Three" aria-expanded="false"
                                                    aria-controls="fqBody_Three">
                                                    <span class="faq-q-title"> ما يتميز به الملتقى </span>
                                                    <div class="icons"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-chevron-down">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div id="fqBody_Three" class="collapse" aria-labelledby="fqheading_Three"
                                                data-bs-parent="#simple_faq">
                                                <div class="card-body">
                                                    <p> يتميز الملتقى بأنه يقوم على المتابعة اليومية المفضية إلى
                                                        الالتزام،
                                                        وذلك عن طريق:
                                                    </p>
                                                    <br>
                                                    <ol>
                                                        <li>إمداد المشتركين بخطط شهرية، ترسل لهم على رأس كل شهر، يتم
                                                            صياغتها
                                                            بالتعاون مع المشرف.</li>
                                                        <br>
                                                        <li>يتم مفاتشة الطلاب 3 مرات في كل شهر، وذلك في كل من 10، 20،
                                                            30، من
                                                            كل شهر، من قبل مراقب الجودة، وتوجيه 3 نماذج من الرسائل:

                                                            <ul>
                                                                <br>
                                                                <li>الرسالة الأولى: تهنئة وشكر لمن حقق المخرجات المطلوبة
                                                                    في
                                                                    كل ثلث من أثلاث الشهر الواحد.</li>
                                                                <li>الرسالة الثانية: لفت نظر، وذلك لمن لم يحقق نصف
                                                                    المخرجات
                                                                    المطلوبة من كل ثلث.</li>
                                                                <li>الرسالة الثالثة: إنذار لمن لم يحقق شيء من المخرجات
                                                                    المطلوبة.</li>
                                                            </ul>
                                                        </li>
                                                        <br>
                                                        <li> يقوم على الجمع بين الحفظ والمراجعة، ويعتبر كل منهما
                                                            كالجناحان
                                                            للحافظ،
                                                            لا غنى لأحدهما عن الآخر.</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="fqheading_Four">
                                                <div class="mb-0" data-bs-toggle="collapse" role="navigation"
                                                    data-bs-target="#fqBody_Four" aria-expanded="false"
                                                    aria-controls="fqBody_Four">
                                                    <span class="faq-q-title">طريقة التسجيل </span>
                                                    <div class="icons"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-chevron-down">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div id="fqBody_Four" class="collapse" aria-labelledby="fqheading_Four"
                                                data-bs-parent="#simple_faq">
                                                <div class="card-body">

                                                    <p>على الراغبين بالالتحاق ببرنامج ملتقى الاقصى القرآني، التواصل مع
                                                    </p>
                                                    <ul>
                                                        <li>
                                                            <p><a
                                                                    href="https://www.facebook.com/profile.php?id=100090596486108">صفحة
                                                                    الملتقى الخاصة على الفيسبوك</a></p>
                                                        </li>
                                                        <p style="color:#d88751">أو</p>
                                                        <li>
                                                            <p><a href="https://wa.me/972569023259">التواصل مع قسم
                                                                    التسجيل
                                                                    والقبول على الواتس آب
                                                                    <span>00972569023259</span></a>
                                                            </p>
                                                        </li>

                                                    </ul>
                                                    <p>ليتم أخذ البيانات اللازمة، ثم إدخالهم على المجموعة الخاصة بطلاب
                                                        الملتقى، وتوزيعهم على المشرفين.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mx-auto">
                                <div class="col-lg-8 mx-auto">
                                    <h2> السياسات والقوانين العامة</h2>
                                    <div class="accordion" id="simple_faq2">
                                        <div class="card">
                                            <div class="card-header" id="fqheadingTwo">

                                                <div class="mb-0" data-bs-toggle="collapse" role="navigation"
                                                    data-bs-target="#fqcollapseTwo" aria-expanded="false"
                                                    aria-controls="fqcollapseTwo">
                                                    <span class="faq-q-title">آلية الحفظ المعتمدة في الملتقى </span>
                                                    <div class="icons">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-chevron-down">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="fqcollapseTwo" class="collapse" aria-labelledby="fqheadingTwo"
                                                data-bs-parent="#simple_faq2">
                                                <div class="card-body">
                                                    <ul>
                                                        <li>يبدأ المشترك بالحفظ من سورة البقرة، إلى أن يصل إلى نهاية
                                                            المصحف.
                                                        </li>
                                                        <br>
                                                        <li>يتوجب على الطالب قبل الشروع بالحفظ التوجه إلى
                                                            <a href="https://t.me/aladdassi_quran">قناة التلجرام
                                                                المعتمدة
                                                                للقارئ (غسّان العدّاسي)</a>، بهدف ضبط الصفحة أو
                                                            الصفحات المطلوب حفظها ضبطًا جيدًا محكمًا؛ خاليًا ومجردًا من
                                                            الخطأ.
                                                        </li>
                                                        <br>

                                                        <li> بعد الاستماع إلى الصفحة/ات المطلوب حفظها، تأتي مرحلة الحفظ
                                                            الثانية وهي تسجيل ما تم حفظه برسالة صوتية، ترسل على الواتس
                                                            اب – على حساب المشرف.</li>
                                                        <br>

                                                        <li> يشترط في التسجيل، أن تكون كل صفحة أو صفحتين فقط بتسجيل
                                                            صوتي،
                                                            وأن يكون التسجيل الخاص بالحفظ خالٍ من الخطأ، ليقوم المشرف
                                                            بالاستماع إلى التسجيل، وتصحيح الخطأ، ثم توثيقه في المجموعة
                                                            التي
                                                            تمت إضافة الطالب عليها.
                                                        </li>
                                                        <br>

                                                        <li>يقوم الطالب بارسال الإنجاز القرآني للمشرف في أي ساعة من
                                                            يومه،
                                                            شريطة أن لا يمضي يومه دون إرسال ما عليه من حفظ او مراجعة.
                                                        </li>
                                                        <br>

                                                        <li>يقوم الطالب بارسال الإنجاز القرآني للمشرف في أي ساعة من
                                                            يومه،
                                                            شريطة أن لا يمضي يومه دون إرسال ما عليه من حفظ او مراجعة.
                                                        </li>
                                                        <br>

                                                        <li>في حال تخلف الطالب عن أوراده المطلوبة منه في الخطة التي تم
                                                            اعتمادها، يتم إقصاءه من مجموعات الملتقى.</li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="fqheadingThree">
                                                <div class="mb-0" data-bs-toggle="collapse" role="navigation"
                                                    data-bs-target="#fqcollapseThree" aria-expanded="false"
                                                    aria-controls="fqcollapseThree">
                                                    <span class="faq-q-title">مجموعة من التعليمات التي يتوجب على مشتركي
                                                        ملتقى
                                                        الأقصى القرآني الاهتمام بها</span>
                                                    <div class="icons">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-chevron-down">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="fqcollapseThree" class="collapse" aria-labelledby="fqheadingThree"
                                                data-bs-parent="#simple_faq2">
                                                <div class="card-body">
                                                    <ul>
                                                        <li> عند ارسال الورد اليومي المطلوب إلى المشرف، يرجى من المشترك
                                                            القيام
                                                            بكتابة رقم الصفحة التي قام بإرسالها في رسالة نصية فور إرساله
                                                            للتسجيل
                                                            الصوتي، وكذلك الأمر فيما يخصّ المراجعة.
                                                        </li>
                                                        <br>
                                                        <li>يرجى من المشتركين الاستمرار في إرسال اورادهم اليومية من حفظٍ
                                                            ومراجعة،
                                                            حتّى وإن تأخّر المشرف في توثيق المحفوظ لظروفه الخاصّة،
                                                            فتأخّر
                                                            المشرف
                                                            لا
                                                            يُعطي للمشترك المبرّر للتوقّف عن إرسال التسجيلات والأوراد
                                                        </li>
                                                        <br>

                                                        <li> رجى العلم أن الحدّ الأقصى للأخطاء المسموح بها في تسجيلات
                                                            الحفظ
                                                            الجديد، هو خطأ واحد في الصفحة، أما بخصوص المراجعة، فخطئين
                                                            فقط في
                                                            تسجيل
                                                            الخمس صفحات، ويُقاس على ذلك ما كان أقلّ أو اكثرّ نسبةً
                                                            وتناسب،
                                                            (الخطأ :
                                                            حركة، حرف، نسيان، تردّد، تلكّؤ).</li>
                                                        <br>

                                                        <li> يشترط في التسجيل، أن تكون كل صفحة أو صفحتين فقط بتسجيل
                                                            صوتي،
                                                            وأن يكون التسجيل الخاص بالحفظ خالٍ من الخطأ، ليقوم المشرف
                                                            بالاستماع إلى التسجيل، وتصحيح الخطأ، ثم توثيقه في المجموعة
                                                            التي
                                                            تمت إضافة الطالب عليها.
                                                        </li>
                                                        <br>

                                                        <li>يقوم الطالب بارسال الإنجاز القرآني للمشرف في أي ساعة من
                                                            يومه،
                                                            شريطة أن لا يمضي يومه دون إرسال ما عليه من حفظ او مراجعة.
                                                        </li>
                                                        <br>

                                                        <li>يقوم الطالب بارسال الإنجاز القرآني للمشرف في أي ساعة من
                                                            يومه،
                                                            شريطة أن لا يمضي يومه دون إرسال ما عليه من حفظ او مراجعة.
                                                        </li>
                                                        <br>

                                                        <li>أخيرًا؛ هذا رجاء من ملتقانا العزيز بفريقه الإداري والأكاديمي
                                                            إلى
                                                            جميع
                                                            الأعضاء بضروره إقتنائهم لنسخة المصحف -التفسير الميسّر -.
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="fqheadingSix">
                                                <div class="mb-0" data-bs-toggle="collapse" role="navigation"
                                                    data-bs-target="#fqcollapseSix" aria-expanded="false"
                                                    aria-controls="fqcollapseSix">
                                                    <span class="faq-q-title">الجهات التي ستتواصل معك خلال رحلتك نحو
                                                        الختم</span>
                                                    <div class="icons"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-chevron-down">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div id="fqcollapseSix" class="collapse" aria-labelledby="fqheadingSix"
                                                data-bs-parent="#simple_faq2">
                                                <div class="card-body">
                                                    <ul>
                                                        <li>المشرف العام لملتقى الأقصى القرآني الدكتور أسامة مهنا.</li>
                                                        <br>
                                                        <li>
                                                            مشرف الحفظ: سيرافقك خلال رحلتك في الحفظ مشرفًا، يتابع معك في
                                                            هذه
                                                            الرحلة المباركة.
                                                        </li>
                                                        <br>
                                                        <li>
                                                            مشرف التثبيت: سيرافقك خلال رحلتك في دورات التثبيت غير مشرف
                                                            الحفظ.
                                                        </li>
                                                        <br>
                                                        <li> مراقب الجودة: يقوم بمتابعة الخطة التي تم الاتفاق عليها بين
                                                            المشترك والمشرف.</li>
                                                        <br>
                                                        <li>
                                                            المساعد الإداري: المخول بإرسال التعميمات الإدارية التي يقرها
                                                            الفريق إداري الخاص بالملتقى، على مجموعات الملتقى، وتوجيه
                                                            رسائل
                                                            الإنذار وإقصاء المقصرين وغير المتفاعلين من مجموعات الملتقى.
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="fqheadingFive">
                                                <div class="mb-0" data-bs-toggle="collapse" role="navigation"
                                                    data-bs-target="#fqcollapseFive" aria-expanded="false"
                                                    aria-controls="fqcollapseFive">
                                                    <span class="faq-q-title">فعاليات الملتقى</span>
                                                    <div class="icons"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-chevron-down">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div id="fqcollapseFive" class="collapse" aria-labelledby="fqheadingFive"
                                                data-bs-parent="#simple_faq2">
                                                <div class="card-body">

                                                    <p>يتم عقد عدة فعاليات في الملتقى، بهدف إحياء أجواء التنافس الواقعة
                                                        في
                                                        المجموعات؛ وذلك لإضفاء نوع من الحماس والتغيير في الملتقى ،من
                                                        أبرزها:
                                                    </p>
                                                    <br>
                                                    <ul>
                                                        <li>
                                                            مسابقة الجمعة: تقوم هذه المسابقة على حفظ أكبر قدر ممكن من
                                                            المحفوظ، على أن يكون محكمًا متقنًا، والتي تُتيح فرصة زيادة
                                                            أوراد
                                                            الطلبة في الحفظ واستدراك ما فاتهم من المحفوظ؛ تعويضًا عن
                                                            القصور
                                                            الواقعة في بعض الخطط، من جهة أخرى خلق جو من أجواء التنافس
                                                            فيما
                                                            بين الأعضاء، على أن يكون الحفظ متقنًا محكمًا، خاليًا من
                                                            الخطأ.
                                                        </li>
                                                        <br>
                                                        <li>
                                                            فعالية السرد، يعمل ملتقى الأقصى القرآني على تنظيم مجالس سرد
                                                            بعد
                                                            انتهاء كل دورة من دورات التثبيت، على عدة مستويات؛ ليتمكن
                                                            المشارك
                                                            من استعراض أكبر قدر ممكن من الأجزاء في مجلس واحد.
                                                        </li>
                                                        <br>

                                                        <li>
                                                            ورشات تفسير: يتم عقد مجالس الكترونية ووجاهية بين الفينة
                                                            والأخرى،
                                                            وذلك بهدف الجمع بين الحفظ والتدبر؛ للتعرف على بعض السور
                                                            القرآنية، تفسيرًا وتحليلًا، واستنباط ما فيها من دروس وعبر.
                                                        </li>
                                                        <br>

                                                        <li>
                                                            دورة مع الحبيب: حيث تعقد سنويا
                                                        </li>
                                                        <br>

                                                        <li>
                                                            دورات في التجويد، يتم عقد بين الفينة والأخرى دورات تجويد
                                                            للجنسين؛ لمن يرغب في ضبط قرائته وتحسينها في برامج مدروسة ومن
                                                            قبل
                                                            أساتذة كرام.
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mx-auto">
                                <div class="col-lg-8 mx-auto">
                                    <h2> دورات التثبيت </h2>
                                    <div class="accordion" id="simple_faq1">
                                        <div class="card">
                                            <div class="card-header" id="fqheadingOne1">
                                                <div class="mb-0" data-bs-toggle="collapse" role="navigation"
                                                    data-bs-target="#fqcollapseOne1" aria-expanded="false"
                                                    aria-controls="fqcollapseOne1">
                                                    <span class="faq-q-title">الهدف من دورات التثبيت</span>
                                                    <div class="icons"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-chevron-down">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div id="fqcollapseOne1" class="collapse" aria-labelledby="fqheadingOne1"
                                                data-bs-parent="#simple_faq1">
                                                <div class="card-body">
                                                    <p>يحرص ملتقى الأقصى القرآني على الجمع بين الحفظ والمراجعة، وعليه،
                                                        تأتي
                                                        دورة
                                                        التثبيت بعد إتمام حفظ ومراجعة خمسة أجزاء كاملة، فبعد أن ينهي
                                                        الطالب
                                                        إتمام خمسة أجزاء حفظًا ومراجعة، يخضع لدورة تثبيت أخرى؛ بهدف ضبط
                                                        وتثبيت
                                                        الأجزاء الخمسة السابقة من جديد بصورة أكثر إحكامًا وإتقانًا ضمن
                                                        النظام
                                                        الموحد المعتمد في الملتقى؛ ومن الجدير ذكره، أنّ هذه الدورة تعتبر
                                                        إلزامية
                                                        لطلاب وطالبات ملتقى الأقصى القرآني.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="fqheading_One1">
                                                <div class="mb-0" data-bs-toggle="collapse" role="navigation"
                                                    data-bs-target="#fqcollapse_One1" aria-expanded="false"
                                                    aria-controls="fqcollapse_One1">
                                                    <span class="faq-q-title">مشرفو دورة التثبيت </span>
                                                    <div class="icons"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-chevron-down">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div id="fqcollapse_One1" class="collapse" aria-labelledby="fqheading_One1"
                                                data-bs-parent="#simple_faq1">

                                                <div class="card-body">
                                                    <p>يحرص كل مشرف على متابعة أوراد طلابه من تسجيلات
                                                        واتصالات،
                                                        وعليه يُطلب من المشرف كجزء من متطلبات حفظه ومراجعته في الملتقى-
                                                        الإشراف
                                                        على
                                                        عدد من الطلاب؛ بهدف ضمان التواصل الدائم مع محفوظه السابق أثناء
                                                        انشغاله
                                                        بتثبيت الأجزاء الخمسة الجديدة.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="fqheadingTwo2">
                                                <div class="mb-0" data-bs-toggle="collapse" role="navigation"
                                                    data-bs-target="#fqcollapseTwo2" aria-expanded="false"
                                                    aria-controls="fqcollapseTwo2">
                                                    <span class="faq-q-title">مواعيد دورة التثبيت</span>
                                                    <div class="icons"> <svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-chevron-down">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div id="fqcollapseTwo2" class="collapse" aria-labelledby="fqheadingTwo2"
                                                data-bs-parent="#simple_faq1">
                                                <div class="card-body">
                                                    <p>تعقد هذه الدورة على مدار ثلاثة فصول في كل عام، ومواعيدها على
                                                        النحو
                                                        التالي:</p><br>
                                                    <ul>
                                                        <li>
                                                            الفصل الأول: من شهر 1 إلى نهاية شهر 3
                                                        </li><br>
                                                        <li>
                                                            الفصل الثاني: من شهر 5 إلى نهاية شهر 7
                                                        </li><br>
                                                        <li>
                                                            الفصل الثالث: من شهر 9 إلى نهاية شهر 11
                                                        </li><br>
                                                    </ul>
                                                    <p>
                                                        ❖ ملاحظة: يفصل بين كل دورة وأخرى شهر واحد فقط؛ وذلك بهدف تأهيل
                                                        الطلاب
                                                        للدورة القادمة.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="fqheadingThree3">
                                                <div class="mb-0" data-bs-toggle="collapse" role="navigation"
                                                    data-bs-target="#fqcollapseThree3" aria-expanded="false"
                                                    aria-controls="fqcollapseThree3">
                                                    <span class="faq-q-title">حقيبة دورة التثبيت</span>
                                                    <div class="icons"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-chevron-down">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div id="fqcollapseThree3" class="collapse" aria-labelledby="fqheadingThree3"
                                                data-bs-parent="#simple_faq1">
                                                <div class="card-body">
                                                    <p>
                                                        يتم تزويد طلاب الدورة بحقيبة خاصة بالدورة التي ينتسبون إليها،
                                                        تحوي
                                                        هذه
                                                        الحقيبة مجموعة من الملفات التي تهم الطالب، والتي تضم ما يلي:
                                                    </p>

                                                    <ul>
                                                        <li>
                                                            الخطة المجدولة التي سيلتزم به جميع طلاب الدورة.
                                                        </li>
                                                        <br>
                                                        <li> برنامج تقويم الاختبارات، حيث يخضع طلاب هذه الدورة إلى عدد
                                                            من
                                                            الاختبارات الإلزامية، وفق النظام الموحد. </li>
                                                        <br>
                                                        <li>
                                                            ملف تشكيل طلاب الدورة؛ حيث يتم توزيع الطلاب على مشرفي
                                                            الدورة،
                                                            بحيث يخضع عددا من الطلاب تحت إشراف مشرف واحد. </li>
                                                        <br>
                                                        <li>
                                                            ملف السياسات الخاصة بالدورة.
                                                        </li>
                                                        <br>
                                                        <li>
                                                            ملف متابعة طلاب الدورة الذي يتم تزويد بمشرفي دورة التثبيت
                                                            به؛
                                                            وذلك
                                                            لرصد درجات طلابهم، وتعبئة إنجازاتهم المطلوبة في الملف. </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="fqheadingFive5">
                                                <div class="mb-0" data-bs-toggle="collapse" role="navigation"
                                                    data-bs-target="#fqcollapseFive5" aria-expanded="false"
                                                    aria-controls="fqcollapseFive5">
                                                    <span class="faq-q-title">معايير التحكيم الخاصة بدورات
                                                        التثبيت</span>
                                                    <div class="icons"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-chevron-down">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div id="fqcollapseFive5" class="collapse" aria-labelledby="fqheadingFive5"
                                                data-bs-parent="#simple_faq1">
                                                <div class="card-body">

                                                    <p> ❖ معايير التحكيم الخاص بالتسجيلات </p>

                                                    <ul>
                                                        <li>
                                                            في حال خلو التسجيل من الخطأ؛ يتم رصد درجة امتياز.
                                                        </li><br>
                                                        <li>
                                                            في حال وقوع خطأ واحد؛ يتم رصد درجة ممتاز.
                                                        </li><br>
                                                        <li>
                                                            في حال وقوع خطأين، يتم رصد درجة جيد جدًا.
                                                        </li><br>
                                                        <li>
                                                            في حال وقوع 3 أخطاء فأكثر؛ يترتب على المشترك إعادة التسجيل.
                                                        </li>
                                                    </ul>
                                                    <p>
                                                        !!
                                                        ملاحظة: إذا أسقط الطالب آية من الورد، يتوجب عليه إعادة
                                                        التسجيل.</p>
                                                    <hr>
                                                    <p> ❖ معايير التحكيم الخاص بالاتصال: </p>
                                                    <ul>
                                                        <li>
                                                            في حال خلو الاتصال من التنبيه؛ يتم احتساب درجة امتياز.
                                                        </li>
                                                        <br>
                                                        <li>
                                                            في حال وقوع تنبيه واحد؛ يتم احتساب درجة ممتاز.
                                                        </li><br>
                                                        <li>
                                                            في حال وقوع تنبيهين؛ يتم احتساب درجة جيد جدًا
                                                        </li><br>
                                                        <li>
                                                            في حال وقوع 3 تنبيهات؛ يتم احتساب درجة جيد
                                                        </li><br>
                                                        <li>
                                                            في حال وقوع 4 تنبيهات في الاتصال أو أكثر؛ يترتب على المشترك
                                                            إعادة الاتصال.
                                                        </li>
                                                    </ul>
                                                    <hr>
                                                    <p> ❖ معايير التحكيم الخاص الاختبارات: </p>
                                                    <ul>
                                                        <li>
                                                            يشترط فتح الكاميرا وفقاً للمعايير المطلوبة.
                                                        </li><br>
                                                        <li>
                                                            علامة النجاح في الاختبار 90، وما دون ذلك يُحتسب غير مكتمل
                                                            وتتم
                                                            الإعادة.
                                                        </li><br>
                                                        <li>
                                                            عند فتح الممتحن على الطالب/ة يتم خصم علامتين.
                                                        </li><br>
                                                        <li>
                                                            عند توجيه وتنبيه الممتحن للطالب/ة يتم خصم علامة.
                                                        </li><br>
                                                        <li>
                                                            في كل تعتعتين، يتم خصم علامة واحدة.
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
        @endsection

        @section('script')
            <script src="{{ asset('AdminAssets/js/pages/faq.js') }}"></script>
            <script src="{{ asset('AdminAssets/plugins/src/highlight/highlight.pack.js') }}"></script>
            <script src="{{ asset('AdminAssets/js/scrollspyNav.js') }}"></script>
        @endsection
