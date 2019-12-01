<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1"/>
    <title>Black Friday</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="/css/app.css"/>
    <link rel="stylesheet" href="/css/header.css"/>
    <link rel="stylesheet" href="/css/catalog.css"/>
    <link rel="stylesheet" href="/css/slider.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css"/>
</head>
<body>
  @include('header')
  @include('slider')
  @include('her')
  @include('catalog',['items' => $items,'success'=>$success])
  <script src="/js/app.js"></script>
</body>
</html>
