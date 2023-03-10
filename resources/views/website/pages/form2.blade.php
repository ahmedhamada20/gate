<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.epic-webdesign.com/tf-square/v1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Jan 2023 21:21:11 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>IMCT</title>

    <!-- Loading Bootstrap -->
    <link href="{{asset('website/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Loading Template CSS -->
    <link href="{{asset('website/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('website/css/animate.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('website/css/pe-icon-7-stroke.css')}}">
    <link href="{{asset('website/css/style-magnific-popup.css')}}" rel="stylesheet">

    <!-- Awsome Fonts -->
    <link rel="stylesheet" href="{{asset('website/css/all.min.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700" rel="stylesheet">

    <!-- Font Favicon -->
    <link rel="shortcut icon" href="{{asset('website/images/favicon.ico')}}">

</head>

<body dir="rtl">

<!--begin header -->
<header class="header">

    <!--begin navbar-fixed-top -->
    <nav class="navbar navbar-default navbar-fixed-top">

        <!--begin container -->
        <div class="container">

            <!--begin navbar -->
            <nav class="navbar navbar-expand-lg">

                <!--begin logo -->
                <a class="navbar-brand" href="{{route('home')}}">IMCT</a>
                <!--end logo -->

                <!--begin navbar-toggler -->
                <!--<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">-->
                <!--    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>-->
                <!--</button>-->
                <!--end navbar-toggler -->

                <!--begin navbar-collapse -->
                <!--<div class="navbar-collapse collapse" id="navbarCollapse" style="">-->

                <!--begin navbar-nav -->
                <!--<ul class="navbar-nav ml-auto">-->

                <!--    <li><a href="#home">Home</a></li>-->

                <!--    <li><a href="#about">About</a></li>-->

                <!--    <li><a href="#features">Features</a></li>-->

                <!--    <li><a href="#team">Team</a></li>-->

                <!--    <li><a href="#showcase">Showcase</a></li>-->

                <!--    <li><a href="#pricing">Pricing</a></li>-->

                <!--    <li><a href="#blog">Blog</a></li>-->

                <!--    <li><a href="#contact">Contact</a></li>-->

                <!--    <li class="discover-link"><a href="#" class="external discover-btn">Get Started</a></li>-->

                <!--</ul>-->
                <!--end navbar-nav -->

                <!--</div>-->
                <!--end navbar-collapse -->

            </nav>
            <!--end navbar -->

        </div>
        <!--end container -->

    </nav>
    <!--end navbar-fixed-top -->

</header>
<!--end header -->

<!--begin home section -->
<section class="home-section" id="home">

    <!--begin container -->
    <div class="container">

        <!--begin row -->
        <div class="row">

            <!--begin col-md-5-->
            <div class="col-md-5 padding-top-20">

                <h1>انضم إلى أكثر من 1000 خبير في مجال التحكيم الدولى</h1>

                <p>توفر الهيئة الدولية للتحكيم دبلومة وماجستير ودكتوراة فى التحكيم التجارى الدولى.
                    معتمد من الهيئة وبأعتماد من كبرى الجامعات البريطانية،
                    أنضم الينا لتصبح خبير ومستشار فى فض كافة النزاعات المالية و التجارية
                    التي تنشأ بين المؤسسات المالية أو التجارية وعملائها.</p>

                <!--begin register-form-wrapper-->
                <div class="register-form-wrapper wow bounceIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">

                    <!--begin form-->
                    <div>

                        <!--begin success message -->
                        <p class="register_success_box" style="display:none;">شكرأ لتسجيلك</p>
                        <!--end success message -->

                        <!--begin register form -->
                        <form  class="register-form register" action="{{route('registers.store')}}" method="post">
                            @csrf

                            <input type="hidden" value="توتير" name="pagesTypes">

                            <input class="register-input white-input" required  name="name" placeholder="الاسم*" type="text">
                            <select class="register-input white-input" required="" name="code">

                                <option value="" disabled selected>اختر كود دولتك*</option>
                                <option value="002">جمهورية مصر العربية 002</option>
                                <option value="0966">المملكة العربية السعودية0966</option>
                                <option value="0964">العراق 0964</option>
                                <option value="218">ليبيا 218</option>
                                <option value="0972">دولة فلسطين 0972</option>
                                <option value="0971">الإمارات 0971</option>
                                <option value="962">الأردن 962</option>
                                <option value="0965">الكويت 0965</option>
                                <option value="974">قطر 974</option>
                                <option value="967">اليمن 967</option>
                                <option value="212">المغرب 212</option>
                                <option value="968">سلطنة عمان  968</option>
                                <option value="973">مملكة البحرين 973</option>
                                <option value="216">الجمهورية التونسية 216</option>
                                <option value="963">الجمهورية العربية السورية 963</option>
                                <option value="961">الجمهورية اللبنانية  961</option>
                                <option value="000">غير ذلك يرجي كتابة كود الدولة قبل رقم التليفون</option>

                            </select>

                            <input class="register-input white-input" required name="phone" placeholder="رقم الهاتف*" type="text">

                            <select class="register-input white-input" required name="type">

                                <option value="" disabled selected>التخصص المطلوب*</option>
                                <option value="إدارة الاعمال">إدارة الاعمال</option>
                                <option value="التحكيم التجارى الدولى">التحكيم التجارى الدولى</option>
                                <option value="العلاقات الدبلوماسية والقنصلية">العلاقات الدبلوماسية والقنصلية</option>
                                <option value="موارد بشرية">موارد بشرية</option>

                            </select>


                            <input class="register-input white-input" required name="sloppy" placeholder="المؤهل الدراسى الحاصل عليه" type="text">
                            <input class="register-input white-input" required name="jops" placeholder="الوظيفة" type="text">

                            <input class="register-input white-input" required name="email" placeholder="البريد الإلكترونى*" type="email">
                            <input value="أحصل على أستشارتك مجاناً" class="register-submit" type="submit">

                        </form>
                        <!--end register form -->



                    </div>
                    <!--end form-->

                </div>
                <!--end register-form-wrapper-->

            </div>
            <!--end col-md-5-->


            <!--begin col-md-7-->
            <div class="col-md-7 margin-top-20">

                <!--begin video-popup-wrapper-->
                <div class="video-popup-wrapper margin-left-20">

                    <!--begin popup-gallery-->
                    <div class="popup-gallery">

                        <img src="{{asset('website/images/hero-img2.jpg')}}" class="width-100 hero-images" alt="pic">

                        <a class="popup4 video-play-icon" href="https://www.youtube.com/watch?v=FPfQMVf4vwQ">
                            <i class="fas fa-play"></i>
                        </a>

                    </div>
                    <!--end popup-gallery-->

                </div>
                <!--end video-popup-wrapper-->

                <!--begin integration-platforms-->
                <div class="integration-platforms">

                    <h5>Easy To Integrate With:</h5>

                    <ul class="integration-mentions">
                        <li><img src="{{asset('website/images/app01.png')}}" alt="Name"></li>
                        <li><img src="{{asset('website/images/app02.png')}}" alt="Name"></li>
                        <li><img src="{{asset('website/images/app03.png')}}" alt="Name"></li>
                        <li><img src="{{asset('website/images/app04.png')}}" alt="Name"></li>
                        <li><img src="{{asset('website/images/app05.png')}}" alt="Name"></li>
                        <li><img src="{{asset('website/images/app06.png')}}" alt="Name"></li>
                    </ul>

                </div>
                <!--end integration-platforms-->

            </div>
            <!--end col-md-7-->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

</section>
<!--end home section -->



<!--begin section-grey -->
<section class="section-grey section-top-border">

    <!--begin container -->
    <div class="container">

        <!--begin row -->
        <div class="row">

            <!--begin col-md-6 -->
            <div class="col-md-6 margin-top-20">

                <h3>كن خبيراً فى مجال التحكيم الدولى وتواصل معنا لمعرفة لمزيد من التفاصيل</h3>

                <p class="margin-bottom-40">


                </p>

                <div class="nav flex-column nav-pills margin-right-25" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">

                        <!--begin features-second -->
                        <div class="features-second">

                            <div class="dropcaps-circle">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div>

                                <h4 class="margin-bottom-5">مدة الدراسة </h4>

                                <p>مدة الدراسة 60 ساعة معتمدة بنظام التعليم عن بُعد بإستخدام أحدث وأفضل الطرق التفاعلية لتحقيق أعلى فائدة للمتدربين</p>
                            </div>
                        </div>

                        <!--end features-second-->
                    </a>

                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">

                        <!--begin features-second-->
                        <div class="features-second">

                            <div class="dropcaps-circle">
                                <i class="fas fa-network-wired"></i>
                            </div>
                            <div>

                                <h4 class="margin-bottom-5">الاستفاده من برنامج التحكيم الدولي</h4>

                                <p>فض وتسوية النزاعات بين الأفراد و الشركات و تعزيز السيرة الذاتية كما تؤهلك مجالات عمل و تحكيم دولى، وايضا الحصول على كارنية من لجنة حقوق الإنسان بغرفة التحكيم بالنقابة العامة للمُحامين و كارنية عضوية الهيئة الدولية للتحكيم.</p>
                            </div>
                        </div>
                        <!--end features-second-->

                    </a>

                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">

                        <!--begin features-second-->
                        <div class="features-second">

                            <div class="dropcaps-circle">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <div>

                                <h4 class="margin-bottom-5">شروط الألتحاق بالبرنامج التدريبى</h4>

                                <p>

                                <ul>

                                    <li>
                                        الحصول على مؤهل عالى أو فوق متوسط.
                                    </li>
                                    <li>
                                        أن یكون المتقدم للبرنامج حسـن السـمعة.
                                    </li>
                                    <li>
                                        متمتع بكامل الاهلیة وأن لا یكون قد صدر ضده حكم بعقوبة جنائية.
                                    </li>
                                    <li>
                                        أن یكون لدیه القدرة على الحكم وحسن تقدیر الأمور
                                    </li>
                                </ul>
                                </p>
                            </div>
                        </div>
                        <!--end features-second-->

                    </a>

                </div>

            </div>
            <!--end col-md-6 -->

            <!--begin col-md-6 -->
            <div class="col-md-6">

                <div class="tab-content margin-left-20" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <img src="{{asset('website/images/iphone-1a.png')}}" class="width-100" alt="pic">
                    </div>

                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <img src="{{asset('website/images/iphone-1b.png')}}" class="width-100" alt="pic">
                    </div>

                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <img src="{{asset('website/images/iphone-1c.png')}}" class="width-100" alt="pic">
                    </div>

                </div>

            </div>
            <!--end col-md-6 -->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

</section>
<!--end section-grey -->



<!--begin footer -->
<div class="footer">

    <!--begin container -->
    <div class="container-fluid px-0">

        <!--begin row -->
        <div class="row no-gutters mx-0">

            <!--begin col-md-4 -->
            <div class="col-md-4 footer-white-box text-center">

                <i class="pe-7s-map-2"></i>

                <h5>Get In Touch</h5>

                <p>10 Oxford Street, London, UK, E1 1EC</p>

                <p><a href="mailto:contact@youremail.com">the-office@square.co.uk</a></p>

                <p>+44 987 654 321</p>

            </div>
            <!--end col-md-4 -->

            <!--begin col-md-4 -->
            <div class="col-md-4 footer-dark-grey-box text-center">

                <i class="pe-7s-comment"></i>

                <h5>Social Media</h5>

                <p>See bellow where you can find us.</p>

                <!--begin footer_social -->
                <ul class="footer_social">

                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>

                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>

                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>

                    <li><a href="#"><i class="fab fa-skype"></i></a></li>

                    <li><a href="#"><i class="fab fa-dribble"></i></a></li>

                </ul>
                <!--end footer_social -->

            </div>
            <!--end col-md-4 -->

            <!--begin col-md-4 -->
            <div class="col-md-4 footer-grey-box text-center">

                <i class="pe-7s-link"></i>

                <h5>Useful Links</h5>

                <a href="#" class="footer-links">Our Cookies Policy</a>

                <a href="#" class="footer-links">Meet The Team Behind Square</a>

                <a href="#" class="footer-links">Terms and Conditions</a>

            </div>
            <!--end col-md-4 -->

        </div>
        <!--end row -->

        <!--begin row -->
        <div class="row">

            <!--begin col-md-12 -->
            <div class="col-md-12 footer-bottom text-center">

                <p>Copyright © {{date('Y')}}  <a href="https://faroukgroup.com/ar" target="_blank">Farouk Group</a></p>

            </div>
            <!--end col-md-6 -->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

</div>
<!--end footer -->


<!-- Load JS here for greater good =============================-->
<script src="{{asset('website/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('website/js/bootstrap.min.js')}}"></script>
<script src="{{asset('website/js/jquery.scrollTo-min.js')}}"></script>
<script src="{{asset('website/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('website/js/jquery.nav.js')}}"></script>
<script src="{{asset('website/js/wow.js')}}"></script>
<script src="{{asset('website/js/plugins.js')}}"></script>
<script src="{{asset('website/js/custom.js')}}"></script>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

</body>

</html>
