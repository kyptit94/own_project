@extends('templates.'.sc_store('template').'.shop_layout')

@section('center')
<section>
  <div class="content_container">
    <div class="column_row">
      <div class="column_container column-1_1 sc_layouts_column_icons_position_left">
        <div class="column-inner">
          <div class="empty_space h-1_8em"><span class="empty_space_inner"></span></div>
          <div class="sc_title sc_title_default">
            <h2 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default">Must Have</h2>
            <div class="sc_item_descr sc_title_descr sc_align_center">a touch of coverage never felt so sexy</div>
          </div>
          <!-- /.sc_title -->
          <div class="empty_space h-2_9em"><span class="empty_space_inner"></span></div>
          <div class="woocommerce columns-4">
            <ul class="products wcspt-products">
            @foreach ($products_hot as  $key => $product_hot)
              <li class="product type-product wcspt-has-gallery">
                <div class="post_item post_layout_thumbs">
                  <div class="post_featured hover_shop_buttons">
                    <a href="{{ $product_hot->getUrl() }}" class="wcspt-img-link">
                      <img src="{{ asset($product_hot->getThumb()) }}" alt="product-16" title="product-16" />
                      <img src="{{ asset($product_hot->getThumb()) }}" class="secondary-thumb wcspt-transition wcspt-ie8-tempfix" alt="" />
                    </a>
                    <div class="mask"></div>
                    <div class="icons">
                      <a href="{{ $product_hot->getUrl() }}" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Buy now</a>
                      <a href="{{ $product_hot->getUrl() }}" class="shop_link button icon-link">Details</a>
                    </div>
                  </div>
                  <!-- /.post_featured -->
                  <div class="post_data">
                    <div class="post_header entry-header">
                      <h3>
                        <a href="{{ $product_hot->getUrl() }}">{{ $product_hot->name }}</a>
                      </h3>
                    </div>
                    <!-- /.post_header -->
                    <span class="price">
                      <span class="woocs_price_code"><span class="amount">{!! $product_hot->showPrice() !!}</span></span>
                      </span>
                    </span>
                    <a href="{{ $product_hot->getUrl() }}" class="button product_type_variable add_to_cart_button">Buy now</a>
                  </div>
                  <!-- /.post_data -->
                </div>
                <!-- /.post_item -->
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--features_items-->

<section>
  <div class="content_container">
    <div class="column-row" data-animation="animated fadeInUp normal">
      <div class="column_container column-1_1 sc_layouts_column_icons_position_left">
        <div class="column-inner">
          <div class="empty_space h-2em"><span class="empty_space_inner"></span></div>
          <div class="scheme_dark sc_promo sc_promo_default extra-margin sc_promo_size_large sc_promo_image_position_left">
            <div class="sc_promo_image bg_promo-4 w_50per l_0"></div>
            <div class="sc_promo_text w_50per f_right">
              <div class="sc_promo_text_inner sc_align_center bg_pink">
                <img class="top_promo_image" src="images/promo.png" alt="">
                <h2 class="sc_item_title sc_promo_title sc_align_default sc_item_title_style_default">Retro<br />Briefs</h2>
                <div class="sc_item_descr sc_promo_descr sc_align_default">embrace your inner<br />modern pin-up</div>
                <div class="sc_item_button sc_item_button_simple sc_promo_button sc_align_default sc_button_wrap">
                  <a href="shop.html" class="sc_button sc_button_simple sc_button_size_normal sc_button_icon_left">
                    <span class="sc_button_text"><span class="sc_button_title">shop now</span></span><!-- /.sc_button_text -->
                  </a>
                  <!-- /.sc_button -->
                </div>
                <!-- /.sc_item_button sc_item_button_simple sc_promo_button sc_align_default -->
              </div>
            </div>
            <!-- /.sc_promo_text -->
          </div>
          <!-- /.sc_promo -->
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="content_container">
    <div class="column_row">
      <div class="column_container column-1_1 sc_layouts_column_icons_position_left">
        <div class="column-inner">
          <div class="empty_space hide_on_mobile h-2em"><span class="empty_space_inner"></span></div>
          <div class="empty_space h-4_3em"><span class="empty_space_inner"></span></div>
          <div class="sc_blogger sc_blogger_plain" data-slides-per-view="4" data-slides-min-width="150">
            <h2 class="sc_item_title sc_blogger_title sc_align_center sc_item_title_style_default">Articles</h2>
            <div class="sc_blogger_columns sc_item_columns trx_addons_columns_wrap">
              <div class="trx_addons_column-1_4">
                <div class="sc_blogger_item post type-post">
                  <div class="sc_blogger_item_content entry-content">
                    <h4 class="sc_blogger_item_title entry-title">
                      <a href="post-standart.html">A Case for No Shirt, No Problem</a>
                    </h4>
                  </div>
                  <!-- .entry-content -->
                  <div class="sc_blogger_item_excerpt">
                    <div class="sc_blogger_item_excerpt_text">
                      <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quiaolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore&hellip;</p>
                    </div>
                    <div class="sc_blogger_item_button sc_item_button">
                      <a href="post-standart.html" class="sc_button sc_button_simple">Read more</a>
                    </div>
                  </div>
                  <!-- .sc_blogger_item_excerpt -->
                </div>
                <!-- .sc_blogger_item -->
              </div>
              <div class="trx_addons_column-1_4">
                <div class="sc_blogger_item post type-post">
                  <div class="sc_blogger_item_content entry-content">
                    <h4 class="sc_blogger_item_title entry-title">
                      <a href="post-standart.html">Emotional Experience of Balconette Bra</a>
                    </h4>
                  </div>
                  <!-- .entry-content -->
                  <div class="sc_blogger_item_excerpt">
                    <div class="sc_blogger_item_excerpt_text">
                      <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quiaolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore&hellip;</p>
                    </div>
                    <div class="sc_blogger_item_button sc_item_button">
                      <a href="post-standart.html" class="sc_button sc_button_simple">Read more</a>
                    </div>
                  </div>
                  <!-- .sc_blogger_item_excerpt -->
                </div>
                <!-- .sc_blogger_item -->
              </div>
              <div class="trx_addons_column-1_4">
                <div class="sc_blogger_item post type-post">
                  <div class="sc_blogger_item_content entry-content">
                    <h4 class="sc_blogger_item_title entry-title">
                      <a href="post-standart.html">6 Tips for Your Sleeping Beauty Rest</a>
                    </h4>
                  </div>
                  <!-- .entry-content -->
                  <div class="sc_blogger_item_excerpt">
                    <div class="sc_blogger_item_excerpt_text">
                      <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quiaolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore&hellip;</p>
                    </div>
                    <div class="sc_blogger_item_button sc_item_button">
                      <a href="post-standart.html" class="sc_button sc_button_simple">Read more</a>
                    </div>
                  </div>
                  <!-- .sc_blogger_item_excerpt -->
                </div>
                <!-- .sc_blogger_item -->
              </div>
              <div class="trx_addons_column-1_4">
                <div class="sc_blogger_item post type-post">
                  <div class="sc_blogger_item_content entry-content">
                    <h4 class="sc_blogger_item_title entry-title">
                      <a href="post-standart.html">Beauty of a Woman is a Matchless Attribute</a>
                    </h4>
                  </div>
                  <!-- .entry-content -->
                  <div class="sc_blogger_item_excerpt">
                    <div class="sc_blogger_item_excerpt_text">
                      <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quiaolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore&hellip;</p>
                    </div>
                    <div class="sc_blogger_item_button sc_item_button">
                      <a href="post-standart.html" class="sc_button sc_button_simple">Read more</a>
                    </div>
                  </div>
                  <!-- .sc_blogger_item_excerpt -->
                </div>
                <!-- .sc_blogger_item -->
              </div>
            </div>
          </div>
          <!-- /.sc_blogger -->
          <div class="empty_space h-5em"><span class="empty_space_inner"></span></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="content_container">
    <div class="column-row" data-animation="animated fadeInUp normal">
      <div class="column_container column-1_1 sc_layouts_column_icons_position_left">
        <div class="column-inner">
          <figure class="align_center">
            <a href="shop.html">
              <img src="images/home-style-bg.jpg" alt="" />
            </a>
          </figure>
          <div class="empty_space h-4_3em"><span class="empty_space_inner"></span></div>
          <div class="empty_space  hide_on_mobile h-2em"><span class="empty_space_inner"></span></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="no_pt">
  <div class="content_container">
    <div class="column_row">
      <div class="column-inner">
        <div class="columns_wrap">
          <div class="column_container column-1_4 sc_layouts_column_icons_position_left scr_xs">
            <div class="column-inner">
              <div class="text_column demo-title">
                <h2 class="fw_400 fsz-3_2em lh-1em m_0">browse</h2>
                <h2 class="fsz-4_53 lh-1em m_0">Lingerie</h2>
                <h5 class="fw_400 fsz_12px mt-13px tt_upper lspace-1px"><span class="grey">select a category</span></h5>
              </div>
            </div>
          </div>
          <div class="column_container column-1_4 sc_layouts_column_icons_position_left scr_xs">
            <div class="column-inner pt-5px pb-1em pl-3em pl_mid pl_xs">
              <div class="text_column inverse_link_color">
                <div class="tt_upper fsz_11px lspace-1px lh-25px"><a href="#">Babydolls &amp; Slips</a>
                  <br />
                  <a href="#">Teddies &amp; Bodysuits</a>
                  <br />
                  <a href="#">Corsets &amp; Bustiers</a>
                  <br />
                  <a href="#">Kimonos</a>
                  <br />
                  <a href="#">Sport Bras</a>
                </div>
              </div>
            </div>
          </div>
          <div class="column_container column-1_4 sc_layouts_column_icons_position_left scr_xs">
            <div class="column-inner pt-5px pb-1em pl-3em pl_mid pl_xs">
              <div class="text_column inverse_link_color">
                <div class="tt_upper fsz_11px lspace-1px lh-25px"><a href="#">New Arrivals</a>
                  <br />
                  <a href="#">Sexy Little Things</a>
                  <br />
                  <a href="#">Shapes Of The Season</a>
                  <br />
                  <a href="#">Little Black Lingerie</a>
                  <br />
                  <a href="#">Bridal Boutique</a>
                </div>
              </div>
            </div>
          </div>
          <div class="column_container column-1_4 sc_layouts_column_icons_position_left scr_xs">
            <div class="column-inner pt-5px pb-1em pl-3em pl_mid pl_xs">
              <div class="text_column inverse_link_color">
                <div class="tt_upper fsz_11px lspace-1px lh-25px"><a href="#">Cheekies &amp; Cheekinis</a>
                  <br />
                  <a href="#">Thongs &amp; V-Strings</a>
                  <br />
                  <a href="#">Shorties &amp; Boyshorts</a>
                  <br />
                  <a href="#">Hiphuggers</a>
                  <br />
                  <a href="#">Bikinis</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection



@push('styles')
@endpush

@push('scripts')

@endpush