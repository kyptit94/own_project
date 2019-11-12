@php
  $carts = \Cart::getListCart();
@endphp
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<base href="{{asset('html_template/shop_html')}}" target="_blank">
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
      @foreach ( $blocksContent['meta']  as $layout)
        @php
          $arrPage = explode(',', $layout->page)
        @endphp
        @if ($layout->page == '*' ||  (isset($layout_page) && in_array($layout_page, $arrPage)))
          @if ($layout->page =='html')
            {{$layout->text }}
          @endif
        @endif
      @endforeach
  @endisset
<!--//Module meta -->
  <link rel='stylesheet' href='css/fontello/css/fontello-embedded.css' type='text/css' media='all'/>  
  <link rel='stylesheet' href='css/font-face/arkanaregular/stylesheet.css' type='text/css' media='all' />
  <link rel='stylesheet' href='js/vendor/wc-secondary-product-thumbnail/assets/css/style.min.css' type='text/css' media='all'/>
  <link rel='stylesheet' href='js/vendor/revslider/public/assets/css/settings.css' type='text/css' media='all'/>
  <link rel='stylesheet' href='js/vendor/woocommerce/assets/css/woocommerce-layout.css' type='text/css' media='all'/>
  <link rel='stylesheet' href='js/vendor/woocommerce/assets/css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)'/>
  <link rel='stylesheet' href='js/vendor/woocommerce/assets/css/woocommerce.css' type='text/css' media='all'/>
  <link rel='stylesheet' href='css/shortcodes.css' type='text/css' media='all'/>
  <link rel='stylesheet' href='css/style.css' type='text/css' media='all'/>
  <link rel='stylesheet' href='js/vendor/theme.hovers/theme.hovers.css' type='text/css' media='all'/>
  <link rel='stylesheet' href='js/vendor/woocommerce-currency-switcher/js/chosen/chosen.min.css' type='text/css' media='all' />
  <link rel='stylesheet' href='js/vendor/woocommerce-currency-switcher/css/front.css' type='text/css' media='all' />
  <link rel='stylesheet' href='css/template-color.css' type='text/css' media='all'/>
  <link rel='stylesheet' href='css/woocommerce.css' type='text/css' media='all'/>
  <link rel='stylesheet' href='css/responsive.css' type='text/css' media='all'/>
<!--Module header -->
  @isset ($blocksContent['header'])
      @foreach ( $blocksContent['header']  as $layout)
      @php
        $arrPage = explode(',', $layout->page)
      @endphp
        @if ($layout->page == '*' ||  (isset($layout_page) && in_array($layout_page, $arrPage)))
          @if ($layout->page =='html')
            {{$layout->text }}
          @endif
        @endif
      @endforeach
  @endisset
<!--//Module header -->

</head><!--/head-->
<body class="home page-template-default page frontpage scheme_default blog_mode_home body_style_wide blog_style_excerpt expand_content remove_margins no_layout">
  <div class="body_wrap">
      <div class="page_wrap">

@include('templates.'.sc_store('template').'.header')

<!--Module banner -->
  @isset ($blocksContent['banner_top'])
      @foreach ( $blocksContent['banner_top']  as $layout)
      @php
        $arrPage = explode(',', $layout->page)
      @endphp
        @if ($layout->page == '*' ||  (isset($layout_page) && in_array($layout_page, $arrPage)))
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
      @foreach ( $blocksContent['top']  as $layout)
        @php
          $arrPage = explode(',', $layout->page)
        @endphp
        @if ($layout->page == '*' ||  (isset($layout_page) && in_array($layout_page, $arrPage)))
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


  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-12" id="breadcrumb">
          <!--breadcrumb-->
          @yield('breadcrumb')
          <!--//breadcrumb-->

          <!--//fillter-->
          @yield('filter')
          <!--//fillter-->
        </div>

        <!--body-->
        @section('main')
          @include('templates.'.sc_store('template').'.left')
          @include('templates.'.sc_store('template').'.center')
          @include('templates.'.sc_store('template').'.right')
        @show
        <!--//body-->

      </div>
    </div>
  </section>

@include('templates.'.sc_store('template').'.footer')

<script src="{{ asset('templates/'.sc_store('template').'/js/jquery.js')}}"></script>
<script src="{{ asset('templates/'.sc_store('template').'/js/jquery-ui.min.js')}}"></script>
<script src="{{ asset('templates/'.sc_store('template').'/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('templates/'.sc_store('template').'/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{ asset('templates/'.sc_store('template').'/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{ asset('templates/'.sc_store('template').'/js/main.js')}}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.7/bootstrap-notify.min.js"></script>


@stack('scripts')

    <script type="text/javascript">
      function formatNumber (num) {
          return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
      }
      $('#shipping').change(function(){
          $('#total').html(formatNumber(parseInt({{ Cart::subtotal() }})+ parseInt($('#shipping').val())));
      });
    </script>

    <script type="text/javascript">
        function addToCartAjax(id,instance = null){
        $.ajax({
            url: "{{ route('cart.add_ajax') }}",
            type: "POST",
            dataType: "JSON",
            data: {"id": id,"instance":instance, "_token":"{{ csrf_token() }}"},
            async: false,
            success: function(data){
              // console.log(data);
                error= parseInt(data.error);
                if(error ==0)
                {
                  setTimeout(function () {
                    if(data.instance =='default'){
                      $('.shopping-cart').html(data.count_cart);
                    }else{
                      $('.shopping-'+data.instance).html(data.count_cart);
                    }
                  }, 1000);

                    $.notify({
                      icon: 'glyphicon glyphicon-star',
                      message: data.msg
                    },{
                      type: 'success'
                    });
                }else{
                  if(data.redirect){
                    window.location.replace(data.redirect);
                    return;
                  }
                  $.notify({
                  icon: 'glyphicon glyphicon-warning-sign',
                    message: data.msg
                  },{
                    type: 'danger'
                  });
                }

                }
        });
    }
</script>

<!--message-->
    @if(Session::has('success'))
    <script type="text/javascript">
        $.notify({
          icon: 'glyphicon glyphicon-star',
          message: "{!! Session::get('success') !!}"
        },{
          type: 'success'
        });
    </script>
    @endif
    @if(Session::has('error'))
    <script type="text/javascript">
        $.notify({
        icon: 'glyphicon glyphicon-warning-sign',
          message: "{!! Session::get('error') !!}"
        },{
          type: 'danger'
        });
    </script>
    @endif
    @if(Session::has('warning'))
    <script type="text/javascript">
        $.notify({
        icon: 'glyphicon glyphicon-warning-sign',
          message: "{!! Session::get('warning') !!}"
        },{
          type: 'warning'
        });
    </script>
    @endif
<!--//message-->


<!--Module bottom -->
  @isset ($blocksContent['bottom'])
      @foreach ( $blocksContent['bottom']  as $layout)
        @php
          $arrPage = explode(',', $layout->page)
        @endphp
        @if ($layout->page == '*' ||  (isset($layout_page) && in_array($layout_page, $arrPage)))
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
    <div id="loading">
          <div id="overlay" class="overlay"><i class="fa fa-spinner fa-pulse fa-5x fa-fw "></i></div>
   </div>
      </div>
  </div>
  <script type='text/javascript' src='js/vendor/jquery-3.2.1.min.js'></script>
  <script type='text/javascript' src='js/vendor/jquery-migrate.min.js'></script>
  <script type='text/javascript' src='js/vendor/skip-link-focus-fix.js'></script>
  <script type='text/javascript' src='js/custom/shortcodes.js'></script>
  <script type='text/javascript' src='js/vendor/superfish.js'></script>
  <script type='text/javascript' src='js/custom/_main.js'></script>
  <script type='text/javascript' src='js/custom/_utils.js'></script>
  <script type='text/javascript' src='js/custom/_init.js'></script>
  <script type='text/javascript' src='js/vendor/essential-grid/public/assets/js/jquery.themepunch.tools.min.js'></script>
  <script type='text/javascript' src='js/vendor/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
  <script type='text/javascript' src='js/vendor/woocommerce-currency-switcher/js/chosen/chosen.jquery.min.js'></script>
  <script type='text/javascript' src='js/vendor/woocommerce-currency-switcher/js/front.js'></script>
  
  <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
  <script type="text/javascript" src="js/vendor/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="js/vendor/revslider/public/assets/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="js/vendor/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="js/vendor/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script>
</body>
</html>
