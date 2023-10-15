<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
@if(session()->has('suc'))
    <p style="width: 100%;padding: 20px;display: flex;align-items: center;justify-content: center;background-color: #26be33;color: white;font-size: 20px;position: relative" id="flashm">
        {{session('suc')}}
        <img src="imageAndIcons/close_FILL0_wght400_GRAD0_opsz48.png" style="width: 20px;height: 20px;cursor: pointer" onclick="document.querySelector('#flashm').style.display='none'" alt="">
    </p>
@endif
<div class="main">
    <div class="header">
        <div class="menu">
            <ul>
                <a href="#"><li>
                        <p style="width: 60px ; height: 100px;position: relative;bottom: 10px">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="19 5.5 238.5 188.6"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="131.975" y1="30.917" x2="179.208" y2="30.917"><stop offset="0" stop-color="#71ee6f"/><stop offset=".995" stop-color="#0cc32e"/></linearGradient><path d="M179.2 13.4l-47.2 35v-35z" fill="url(#a)"/><linearGradient id="b" gradientUnits="userSpaceOnUse" x1="20.673" y1="46.25" x2="118.448" y2="46.25"><stop offset="0" stop-color="#71ee6f"/><stop offset=".995" stop-color="#0cc32e"/></linearGradient><path d="M118.4 13.4v41.5L85.8 79.1V46H20.7V13.4z" fill="url(#b)"/><linearGradient id="c" gradientUnits="userSpaceOnUse" x1="154.775" y1="-2.741" x2="71.577" y2="222.482"><stop offset="0" stop-color="#00d3ff"/><stop offset=".995" stop-color="#008eb6"/></linearGradient><path d="M118.2 71.1v112l-31.5-.1V94.6z" fill="url(#c)"/><linearGradient id="d" gradientUnits="userSpaceOnUse" x1="222.004" y1="20.042" x2="122.076" y2="290.552" gradientTransform="rotate(-90 313.55 0)"><stop offset="0" stop-color="#00d3ff"/><stop offset=".995" stop-color="#008eb6"/></linearGradient><path d="M256.4 117.5H132.5V149h96.3z" fill="url(#d)"/><linearGradient id="e" gradientUnits="userSpaceOnUse" x1="184.391" y1="7.199" x2="96.39" y2="245.425"><stop offset="0" stop-color="#00d3ff"/><stop offset=".995" stop-color="#008eb6"/></linearGradient><path d="M163.5 40.6v107.7H132V64.6z" fill="url(#e)"/><text transform="matrix(.9 0 0 1 121.975 182.129)" fill="#00aed7" font-family="IRHoma" font-size="34.743">TopLearn</text></svg>
                        </p>
                    </li></a>
                <a href="/thelastsessions">
                    <li>
                        آخرین دوره ها
                    </li>
                </a>
                <a href="/offDay">
                    <li>
                        تخفیفات روزانه
                    </li>
                </a>
                <a href="/article">
                    <li>
                        بلاگ
                    </li>
                </a>
                <a href="#">
                    <li>
                        فرصت های شغلی
                    </li>
                </a>
                <a href="#">
                    <li>
                        همکاری با تاپ لرن
                    </li>
                </a>
                <a href="#">
                    <li>
                    مشاوره و رفع اشکال رایگان
                    </li>
                </a>
                <a href="#" class="implinks">
                    <li>
                        لینک های مفید
                    </li>
                </a>
                <a href="#">
                    <li>
                        تماس با ما
                    </li>
                </a>
                <div class="regesterHolder">
                    @if(session('email'))
                        <p>
                           خوش آمدید/<a href="/logout">خروج</a>
                        </p>
                    @else
                        <a href="/login">ورود</a>/ <a href="/signin">ثبت نام</a>
                    @endif

                </div>

            </ul>
            <div class="dropDown">
                <ul>
                    <li>
                        درخوات دوره
                    </li>
                    <li>
                        آکادمی تاپ لرن
                    </li>
                    <li>
                        پرسش و پاسخ
                    </li>
                    <li>
                        معرفی دوره
                    </li>
                </ul>
            </div>
        </div>
        <div class="header-discription">
            <h2>خودآموزی ، کسب تجربه ، ورود به بازار کار با تاپ لرن <br>با کمترین هزینه خودت حرفه ای یاد بگیر </h2>
        </div>
        <div class="header-search">
            <input type="text" name="searchContent" placeholder="چی میخوای یاد بگیری؟">
        </div>
        <div class="header-status">
            <div class="status-holder">
                <img  style="width: 200px;height: 150px" src="imageAndIcons/stat-time.svg" alt="">
                <p>324.234</p>
                <p>دقیقه آموزش</p>
            </div>
            <div class="status-holder">
                <img style="width: 200px;height: 150px" src="imageAndIcons/stat-teacher.svg" alt="">
                <p>160</p>
                <p>مدرس محبوب</p>
            </div>
            <div class="status-holder">
                <img style="width: 200px;height: 150px" src="https://toplearn.com/Site/images/stat-student.svg" alt="">
                <p>23765</p>
                <p>دانشجو</p>
            </div>
        </div>
    </div>
    <div class="header-items">
    <ul class="header-items-holder">
            <li class="sessions">
                برنامه نویسی و طراحی وب <img src="imageAndIcons/down.png" style="width: 20px;position:relative; top: 10px" alt="">
                <ul class="sideDownItems">
                   <li class="mobile"> <a href="#" >
                            برنامه نویسی موبایل<img src="imageAndIcons/down.png" style="width: 20px;position:relative; top: 8px;transform: rotateZ(90deg)" alt="">
                       </a>
                            <ul class="mobile-items">
                                <a href="#"><li>
                                        زامارین(Xamarin)
                                    </li></a>
                                <a href="#"><li>
                                        Kotlin
                                    </li></a>
                                <a href="#"><li>
                                        Lonic
                                    </li></a>
                                <a href="#"><li>
                                        Android
                                    </li></a>
                                <a href="#"><li>
                                        Cordova
                                    </li></a>
                                <a href="#"><li>
                                        PWA
                                    </li></a>
                                <a href="#"><li>
                                        Dart
                                    </li></a>
                                <a href="#"><li>
                                        Flutter
                                    </li></a>
                                <a href="#"><li>
                                        MAUI
                                    </li></a>
                            </ul>

                        </li>

                    <li class="mobile"><a href="#">
                            برنامه نویسی وب<img src="imageAndIcons/down.png" style="width: 20px;position:relative; top: 8px;transform: rotateZ(90deg)" alt="">
                        </a>
                        <ul class="mobile-items">
                            <a href="#"><li>
                                    ASP.NET WebForms
                                </li></a>
                            <a href="#"><li>
                                    ASP.NET MVC
                                </li></a>
                            <a href="#"><li>
                                    PHP
                                </li></a>
                            <a href="#"><li>
                                    Asp.Net Core
                                </li></a>
                            <a href="#"><li>
                                    Wordpress
                                </li></a>
                            <a href="#"><li>
                                    WCF
                                </li></a>
                            <a href="#"><li>
                                    Blazor
                                </li></a>
                            <a href="#"><li>
                                    Ruby
                                </li></a>
                            <a href="#"><li>
                                    GraphQL
                                </li></a>
                            <a href="#"><li>
                                    Web GIS
                                </li></a>
                            <a href="#"><li>
                                    Django
                                </li></a>
                        </ul>
                        </li>

                    <li class="mobile"><a href="#">
                            طراحی سایت<img src="imageAndIcons/down.png" style="width: 20px;position:relative; top: 8px;transform: rotateZ(90deg)" alt="">
                        </a>
                        <ul class="mobile-items">
                            <a href="#"><li>
                                    Angular
                                </li></a>
                            <a href="#"><li>
                                    BootStrap
                                </li></a>
                            <a href="#"><li>
                                    طراحی سایت
                                </li></a>
                            <a href="#"><li>
                                    React
                                </li></a>
                            <a href="#"><li>
                                    VueJs
                                </li></a>
                            <a href="#"><li>
                                    Electron
                                </li></a>
                            <a href="#"><li>
                                    TypeScript
                                </li></a>
                            <a href="#"><li>
                                    FlexBox
                                </li></a>
                            <a href="#"><li>
                                    Sass
                                </li></a>
                            <a href="#"><li>
                                    Composer
                                </li></a>
                            <a href="#"><li>
                                    Stylus
                                </li></a>
                            <a href="#"><li>
                                    Adobe Muse
                                </li></a>
                            <a href="#"><li>
                                    Kendo UI
                                </li></a>
                            <a href="#"><li>
                                    Tailwind CSS
                                </li></a>
                        </ul>
                        </li>

                   <li class="mobile"> <a href="#">
                            بانک های اطلاعاتی<img src="imageAndIcons/down.png" style="width: 20px;position:relative; top: 8px;transform: rotateZ(90deg)" alt="">
                       </a>
                       <ul class="mobile-items">
                           <a href="#"><li>
                                   SQL Server
                               </li></a>
                           <a href="#"><li>
                                   NoSql
                               </li></a>
                           <a href="#"><li>
                                   MySql
                               </li></a>
                           <a href="#"><li>
                                   Redis
                               </li></a>
                           <a href="#"><li>
                                   Oracle
                               </li></a>
                           <a href="#"><li>
                                   Neo4j
                               </li></a>
                           <a href="#"><li>
                                   PostgreSQL
                               </li></a>
                       </ul>
                        </li>

                    <li class="mobile"><a href="#">
                            تحت ویندوز<img src="imageAndIcons/down.png" style="width: 20px;position:relative; top: 8px;transform: rotateZ(90deg)" alt="">
                        </a>
                        <ul class="mobile-items">
                            <a href="#"><li>
                                    CSharp
                                </li></a>
                            <a href="#"><li>
                                    Unity
                                </li></a>
                            <a href="#"><li>
                                    NodeJs
                                </li></a>
                            <a href="#"><li>
                                    Python
                                </li></a>
                            <a href="#"><li>
                                    Java
                                </li></a>
                            <a href="#"><li>
                                    WPF
                                </li></a>
                            <a href="#"><li>
                                    Go
                                </li></a>
                            <a href="#"><li>
                                    C
                                </li></a>
                            <a href="#"><li>
                                    UWP
                                </li></a>
                            <a href="#"><li>
                                    DotNet Core
                                </li></a>
                            <a href="#"><li>
                                    BlockChain
                                </li></a>
                            <a href="#"><li>
                                    Adobe
                                </li></a>
                            <a href="#"><li>
                                    مهندسی نرم افزار
                                </li></a>
                            <a href="#"><li>
                                    بازی سازی
                                </li></a>
                            <a href="#"><li>
                                    Scratch
                                </li></a>
                            <a href="#"><li>
                                    Visual Basic
                                </li></a>
                            <a href="#"><li>
                                    Matlab
                                </li></a>
                            <a href="#"><li>
                                    هوش مصنوعی
                                </li></a>
                            <a href="#"><li>
                                    Julia
                                </li></a>
                        </ul>
                        </li>

                    <li><a href="#">
                            سیو
                        </a>
                        </li>

                    <li class="mobile"><a href="#">
                            سیستم عامل<img src="imageAndIcons/down.png" style="width: 20px;position:relative; top: 8px;transform: rotateZ(90deg)" alt="">
                        </a>
                        <ul class="mobile-items">
                            <a href="#"><li>
                                    مدیریت پروژه
                                </li></a>
                            <a href="#"><li>
                                    Linux
                                </li></a>
                            <a href="#"><li>
                                    اینترنت
                                </li></a>
                            <a href="#"><li>
                                    Docker
                                </li></a>
                            <a href="#"><li>
                                    ساخت ستاپ
                                </li></a>
                            <a href="#"><li>
                                    برنامه های کاربردی
                                </li></a>
                            <a href="#"><li>
                                    Excel
                                </li></a>
                            <a href="#"><li>
                                    واقعیت افزودن
                                </li></a>
                            <a href="#"><li>
                                    تولید محتوا
                                </li></a>
                            <a href="#"><li>
                                    مهارت
                                </li></a>
                            <a href="#"><li>
                                    Security
                                </li></a>
                            <a href="#"><li>
                                    Network
                                </li></a>
                            <a href="#"><li>
                                    Word
                                </li></a>
                        </ul>
                        </li>

                    <li><a href="#">
                            امنیت
                        </a>
                        </li>

                    <li class="mobile"><a href="#">
                            گرافیک<img src="imageAndIcons/down.png" style="width: 20px;position:relative; top: 8px;transform: rotateZ(90deg)" alt="">
                        </a>
                        <ul class="mobile-items">
                            <a href="#"><li>
                                    Photoshop
                                </li></a>
                            <a href="#"><li>
                                    گرافیک
                                </li></a>
                            <a href="#"><li>
                                    Premiere
                                </li></a>
                            <a href="#"><li>
                                    موشن گرافیک
                                </li></a>
                            <a href="#"><li>
                                    لوگو
                                </li></a>
                            <a href="#"><li>
                                    Adobe Dreamweave
                                </li></a>
                            <a href="#"><li>
                                    illustrator
                                </li></a>
                            <a href="#"><li>
                                    انیمیشن سازی
                                </li></a>
                            <a href="#"><li>
                                    Cinema 4D
                                </li></a>
                            <a href="#"><li>
                                    Corel Draw
                                </li></a>
                            <a href="#"><li>
                                    3DMax
                                </li></a>
                            <a href="#"><li>
                                    Network
                                </li></a>
                            <a href="#"><li>
                                    Word
                                </li></a>
                        </ul>
                        </li>

                    <li><a href="#">
                            الکترونیک
                        </a>
                        </li>

                </ul>
            </li>
        <a href="#" style="position: relative;top: 5px">
            <li>
                آموزش برنامه نویسی به کودکان
            </li>
        </a>
        <a href="#" style="position: relative;top: 5px">
            <li>
                آموزش ورود به دنیای برنامه نویسی
            </li>
        </a>  <a href="#" style="position: relative;top: 5px">
            <li>
                دورههای تخصصی ناشنوایان
            </li>
        </a>
        </a>  <a href="#" style="position: absolute;top: 5px;left: 170px;color: #1dcdf5">
            <li>
                مخصوص اعضای ویژه
            </li>
        </a>
    </ul>
    </div>
    <div class="slider-box">
        <div class="slider">
         <img src="imageAndIcons/isfehanCamp.jpg"  alt="" id="slider-iamge1" >
         <img src="imageAndIcons/lowPrice.jpg"  alt="" id="slider-iamge2" >
            <img src="imageAndIcons/lowPrice.jpg"  alt="" id="slider-iamge3" >
        </div>
    </div>
    <div class="the-last-sessions-header">
        <div class="after-icon">

        </div>
        <h3>
            آخرین دوره های تاپ لرن
        </h3>
        <a href="#">مشاهده همه دوره ها</a>
        <a href="#">برنامه نویسی و طراحی وب</a>
    </div>
    <div class="the-last-sessions">
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder"><img src="imageAndIcons/theLastSessions/c%23.jpg" alt=""></a>
            <a href="#">دوره های c# برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder"><img src="imageAndIcons/theLastSessions/asp.net.jpg" alt=""></a>
            <a href="#">دوره های asp.net براب شما</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder">  <img src="imageAndIcons/theLastSessions/mern.jpg" alt=""></a>
            <a href="#">دوره های mern برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder"> <img src="imageAndIcons/theLastSessions/webchat.jpg" alt=""></a>
            <a href="#">دوره های webChat برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder">  <img src="imageAndIcons/theLastSessions/msql.jpg" alt=""></a>
            <a href="#">دوره های MSQL برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder">   <img src="imageAndIcons/theLastSessions/digicala.jpg" alt=""></a>
            <a href="#">دوره های طزاحی digicala برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder"> <img src="imageAndIcons/theLastSessions/sinema.jpg" alt=""></a>
            <a href="#">دوره های موشنری1 برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder"> <img src="imageAndIcons/theLastSessions/sinema2.jpg" alt=""></a>
            <a href="#">دوره های موشنری 2 برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder">  <img src="imageAndIcons/theLastSessions/sinema2.jpg" alt=""></a>
            <a href="#">دوره های موشنری 2 برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder">  <img src="imageAndIcons/theLastSessions/msql.jpg" alt=""></a>
            <a href="#">دوره های MSQL برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder">  <img src="imageAndIcons/theLastSessions/mern.jpg" alt=""></a>
            <a href="#">دوره های mern برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <img src="imageAndIcons/theLastSessions/asp.net.jpg" alt="">
            <a href="#">دوره های asp.net براب شما</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
    </div>
    <div class="the-last-sessions-header the-last-sessions-header1">
        <div class="after-icon">

        </div>
        <h3>
            دوره های پیشنهادی تاپ لرن
        </h3>
    </div>
    <div class="the-last-sessions" style="position: relative;bottom: 100px">
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder"> <img src="imageAndIcons/theLastSessions/c%23.jpg" alt=""></a>
            <a href="#">دوره های c# برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder">  <img src="imageAndIcons/theLastSessions/asp.net.jpg" alt=""></a>
            <a href="#">دوره های asp.net براب شما</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder">  <img src="imageAndIcons/theLastSessions/mern.jpg" alt=""></a>
            <a href="#">دوره های mern برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder">  <img src="imageAndIcons/theLastSessions/mern.jpg" alt=""></a>
            <a href="#">دوره های mern برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
    </div>

    <div class="the-last-sessions-header the-last-sessions-header1">
        <div class="after-icon">

        </div>
        <h3>
            آخرین مقالات تاپ لرن
        </h3>
        <a href="#">مشاهده همه مقالات</a>
    </div>
    <div class="the-last-sessions2" style="position: relative;bottom: 100px;">
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder"> <img src="imageAndIcons/theLastSessions/c%23.jpg" alt=""></a>
            <a href="#">دوره های c# برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder"> <img src="imageAndIcons/theLastSessions/asp.net.jpg" alt=""></a>
            <a href="#">دوره های asp.net براب شما</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder">  <img src="imageAndIcons/theLastSessions/mern.jpg" alt=""></a>
            <a href="#">دوره های mern برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder">   <img src="imageAndIcons/theLastSessions/webchat.jpg" alt=""></a>
            <a href="#">دوره های mern برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder">  <img src="imageAndIcons/theLastSessions/sinema.jpg" alt=""></a>
            <a href="#">دوره های c# برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder">   <img src="imageAndIcons/theLastSessions/msql.jpg" alt=""></a>
            <a href="#">دوره های mern برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
    </div>
    <div class="the-last-sessions-header the-last-sessions-header1">
        <div class="after-icon">

        </div>
        <h3>
            دوره های محبوب تاپ لرن
        </h3>
    </div>
    <div class="the-last-sessions" style="position: relative;bottom: 100px">
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder">   <img src="imageAndIcons/theLastSessions/c%23.jpg" alt=""></a>
            <a href="#">دوره های c# برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder">  <img src="imageAndIcons/theLastSessions/asp.net.jpg" alt=""></a>
            <a href="#">دوره های asp.net براب شما</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder">  <img src="imageAndIcons/theLastSessions/mern.jpg" alt=""></a>
            <a href="#">دوره های mern برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder">  <img src="imageAndIcons/theLastSessions/digicala.jpg" alt=""></a>
            <a href="#">دوره های mern برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder">  <img src="imageAndIcons/theLastSessions/webchat.jpg" alt=""></a>
            <a href="#">دوره های c# برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder">  <img src="imageAndIcons/theLastSessions/msql.jpg" alt=""></a>
            <a href="#">دوره های asp.net براب شما</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder">  <img src="imageAndIcons/theLastSessions/sinema2.jpg" alt=""></a>
            <a href="#">دوره های mern برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
        <div class="the-last-sessions-items">
            <a href="#" class="item-image-holder">  <img src="imageAndIcons/theLastSessions/sinema.jpg" alt=""></a>
            <a href="#">دوره های mern برای مبتدیان</a>
            <a href="#">آقای فلانی</a>
            <div class="priceAndDate">
                <span>6:03:12</span>
                <span>190.000 تومان</span>
            </div>
        </div>
    </div>
</div>
<script src="js/js.js"></script>
</body>
</html>
