<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/makeItem.css">
    <title>Document</title>
</head>
<body>
@if(session()->has('suc'))
    <p style="width: 100%;padding: 20px;display: flex;align-items: center;justify-content: center;background-color: #26be33;color: white;font-size: 20px;position: relative">
        {{session('suc')}}
    </p>
@endif
<form action="/test" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="نام آیتم">
    <input type="text" name="content" placeholder="متن مورذ نظر">
    <input type="text" name="descript" placeholder="توضیحات">
    <input type="text" name="teacher" placeholder="نام معلم">
    <input type="time" name="time" placeholder="مدت زمان">
    <input type="text" name="price" placeholder="قیمت">
    <input type="hidden" name="img_src">
    <input type="text" name="category" placeholder="دسته بندی">
    <input type="file" name="file">
    <button type="submit">
        ساخت
    </button>
</form>
</body>
</html>
