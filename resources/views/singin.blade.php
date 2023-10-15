<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body>
<div class="main">
    <div class="rotate-div">
    </div>
    <div class="main-content">
        <div class="header">
            <p>
                ورود به سایت
            </p>
            <a href="/"> صفحه اصلی<img src="imageAndIcons/home.png" alt=""></a>
        </div>
        <div class="icon">
            <p >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="19 5.5 238.5 188.6"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="131.975" y1="30.917" x2="179.208" y2="30.917"><stop offset="0" stop-color="#71ee6f"/><stop offset=".995" stop-color="#0cc32e"/></linearGradient><path d="M179.2 13.4l-47.2 35v-35z" fill="url(#a)"/><linearGradient id="b" gradientUnits="userSpaceOnUse" x1="20.673" y1="46.25" x2="118.448" y2="46.25"><stop offset="0" stop-color="#71ee6f"/><stop offset=".995" stop-color="#0cc32e"/></linearGradient><path d="M118.4 13.4v41.5L85.8 79.1V46H20.7V13.4z" fill="url(#b)"/><linearGradient id="c" gradientUnits="userSpaceOnUse" x1="154.775" y1="-2.741" x2="71.577" y2="222.482"><stop offset="0" stop-color="#00d3ff"/><stop offset=".995" stop-color="#008eb6"/></linearGradient><path d="M118.2 71.1v112l-31.5-.1V94.6z" fill="url(#c)"/><linearGradient id="d" gradientUnits="userSpaceOnUse" x1="222.004" y1="20.042" x2="122.076" y2="290.552" gradientTransform="rotate(-90 313.55 0)"><stop offset="0" stop-color="#00d3ff"/><stop offset=".995" stop-color="#008eb6"/></linearGradient><path d="M256.4 117.5H132.5V149h96.3z" fill="url(#d)"/><linearGradient id="e" gradientUnits="userSpaceOnUse" x1="184.391" y1="7.199" x2="96.39" y2="245.425"><stop offset="0" stop-color="#00d3ff"/><stop offset=".995" stop-color="#008eb6"/></linearGradient><path d="M163.5 40.6v107.7H132V64.6z" fill="url(#e)"/><text transform="matrix(.9 0 0 1 121.975 182.129)" fill="#00aed7" font-family="IRHoma" font-size="34.743">TopLearn</text></svg>
            </p>
        </div>
        <form action="/signin" method="POST" enctype="multipart/form-data" class="forms">
            @csrf
            <input type="text" name="email" value="{{old('email')}}" placeholder="ایمیل">
            @error('email')
            <p style="background-color: red;color: white;text-align: left">
                {{$message}}
            </p>
            @enderror
            <input type="password" name="password" placeholder="کلمه عبور">
            @error('password')
            <p style="background-color: red;color: white;text-align: left">
                {{$message}}
            </p>
            @enderror
            <input type="password" name="password_confirmation" placeholder="تکرار کلم عبور">
            <p>
                با ورود به سایت تاپ لرن،شما <a href="#">شرایط و قوانین</a> استفاده از تاپ لرن را می پذیرید.
            </p>
            <button type="submit">ورود</button>
        </form>
        <div class="links">
            <a href="/login">ورود به سایت</a>
        </div>
    </div>
</div>
</body>
</html>
