@php
$carts = \Cart::getListCart();
@endphp
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <base href="{{asset('/uray')}}/" target="_blank">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="{{ $description??sc_store('description') }}">
  <meta name="keyword" content="{{ $keyword??sc_store('keyword') }}">
  <title>{{$title??sc_store('title')}}</title>
  <meta property="og:image" content="{{ !empty($og_image)?$og_image:asset('images/org.jpg') }}" />
  <meta property="og:url" content="{{ \Request::fullUrl() }}" />
  <meta property="og:type" content="Website" />
  <meta property="og:title" content="{{ $title??sc_store('title') }}" />
  <meta property="og:description" content="{{ $description??sc_store('description') }}" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!--Module meta -->
  @isset ($blocksContent['meta'])
  @foreach ( $blocksContent['meta'] as $layout)
  @php
  $arrPage = explode(',', $layout->page)
  @endphp
  @if ($layout->page == '*' || (isset($layout_page) && in_array($layout_page, $arrPage)))
  @if ($layout->page =='html')
  {{$layout->text }}
  @endif
  @endif
  @endforeach
  @endisset
  <!--//Module meta -->
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css" tppabs="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
  <link rel="stylesheet" href="owl.carousel.css" tppabs="http://html.physcode.com/uray/asset/css/owl.carousel.css">
  <link rel="stylesheet" href="owl.theme.default.css" tppabs="http://html.physcode.com/uray/asset/css/owl.theme.default.css">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="style.css-ver=1.css" tppabs="http://html.physcode.com/uray/style.css?ver=1">
  <link rel="stylesheet" type="text/css" href="flexslider.css" tppabs="http://html.physcode.com/uray/asset/css/flexslider.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css" tppabs="http://html.physcode.com/uray/asset/css/bootstrap.min.css">
  <link href="all.css" tppabs="http://html.physcode.com/uray/asset/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=El+Messiri:400,500,600,700|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,700,700i,800,800i,900,900i" tppabs="https://fonts.googleapis.com/css?family=El+Messiri:400,500,600,700|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="icon" href="favicon.png" tppabs="http://html.physcode.com/uray/favicon.png" type="image/png">
  <!--Module header -->
  @isset ($blocksContent['header'])
  @foreach ( $blocksContent['header'] as $layout)
  @php
  $arrPage = explode(',', $layout->page)
  @endphp
  @if ($layout->page == '*' || (isset($layout_page) && in_array($layout_page, $arrPage)))
  @if ($layout->page =='html')
  {{$layout->text }}
  @endif
  @endif
  @endforeach
  @endisset
  <!--//Module header -->

</head>
<!--/head-->

<body>

  @include('templates.'.sc_store('template').'.header')

  <!--Module banner -->
  @isset ($blocksContent['banner_top'])
  @foreach ( $blocksContent['banner_top'] as $layout)
  @php
  $arrPage = explode(',', $layout->page)
  @endphp
  @if ($layout->page == '*' || (isset($layout_page) && in_array($layout_page, $arrPage)))
  @if ($layout->type =='html')
  {!! $layout->text !!}
  @elseif($layout->type =='view')
  @if (view()->exists('block.'.$layout->text))
  @include('block.'.$layout->text)
  @endif
  @elseif($layout->type =='module')
  {!! sc_block_render($layout->text) !!}
  @endif
  @endif
  @endforeach
  @endisset
  <!--//Module banner -->


  <!--Module top -->
  @isset ($blocksContent['top'])
  @foreach ( $blocksContent['top'] as $layout)
  @php
  $arrPage = explode(',', $layout->page)
  @endphp
  @if ($layout->page == '*' || (isset($layout_page) && in_array($layout_page, $arrPage)))
  @if ($layout->type =='html')
  {!! $layout->text !!}
  @elseif($layout->type =='view')
  @if (view()->exists('block.'.$layout->text))
  @include('block.'.$layout->text)
  @endif
  @elseif($layout->type =='module')
  {!! sc_block_render($layout->text) !!}
  @endif
  @endif
  @endforeach
  @endisset
  <!--//Module top -->
  <!--breadcrumb-->
  @yield('breadcrumb')
  <!--//breadcrumb-->

  <!--//fillter-->
  @yield('filter')
  <!--//fillter-->


  <!--body-->
  @section('main')
  @include('templates.'.sc_store('template').'.center')
  @show
  <!--//body-->

  @include('templates.'.sc_store('template').'.footer')


  @stack('scripts')

  <!--message-->
  @if(Session::has('success'))
  <script type="text/javascript">
    $.notify({
      icon: 'glyphicon glyphicon-star',
      message: "{!! Session::get('success') !!}"
    }, {
      type: 'success'
    });
  </script>
  @endif
  @if(Session::has('error'))
  <script type="text/javascript">
    $.notify({
      icon: 'glyphicon glyphicon-warning-sign',
      message: "{!! Session::get('error') !!}"
    }, {
      type: 'danger'
    });
  </script>
  @endif
  @if(Session::has('warning'))
  <script type="text/javascript">
    $.notify({
      icon: 'glyphicon glyphicon-warning-sign',
      message: "{!! Session::get('warning') !!}"
    }, {
      type: 'warning'
    });
  </script>
  @endif
  <!--//message-->


  <!--Module bottom -->
  @isset ($blocksContent['bottom'])
  @foreach ( $blocksContent['bottom'] as $layout)
  @php
  $arrPage = explode(',', $layout->page)
  @endphp
  @if ($layout->page == '*' || (isset($layout_page) && in_array($layout_page, $arrPage)))
  @if ($layout->type =='html')
  {!! $layout->text !!}
  @elseif($layout->type =='view')
  @if (view()->exists('block.'.$layout->text))
  @include('block.'.$layout->text)
  @endif
  @elseif($layout->type =='module')
  {!! sc_block_render($layout->text) !!}
  @endif
  @endif
  @endforeach
  @endisset
  <!--//Module bottom -->

  <script type="text/javascript" src="jquery-3.3.1.min.js" tppabs="http://html.physcode.com/uray/asset/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="bootstrap.min.js" tppabs="http://html.physcode.com/uray/asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="jquery.flexslider-min.js" tppabs="http://html.physcode.com/uray/asset/js/jquery.flexslider-min.js"></script>
  <script type="text/javascript" src="owl.carousel.js" tppabs="http://html.physcode.com/uray/asset/js/owl.carousel.js"></script>
  <script type="text/javascript" src="custom.js" tppabs="http://html.physcode.com/uray/asset/js/custom.js"></script>
</body>

</html>