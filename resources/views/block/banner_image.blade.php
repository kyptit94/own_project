  @php
    $banners = \App\Models\ShopBanner::where('status', 1)->sort()->get()
  @endphp
 @if (!empty($banners))
 {{-- <section id="slider"><!--slider-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="slider-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              @foreach ($banners as $key => $banner)
              <li data-target="#slider-carousel" data-slide-to="{{ $key }}" class="{{ ($key)?'':'active' }}"></li>
              @endforeach
            </ol>
            <div class="carousel-inner">
               @foreach ($banners as $key => $banner)
                  <div class="item {{ ($key)?'':'active' }}">
                    <div class="col-sm-12">
                      <img src="{{ $banner->image }}" class="girl img-responsive" alt="" />
                    </div>
                  </div>
               @endforeach
            </div>
            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
          </div>

        </div>
      </div>
    </div>
  </section><!--/slider--> --}}
  <section>
    <div class="content_container">
        <div class="column_row"> 
            <div class="column_container column-1_1 sc_layouts_column_icons_position_left">   
                <div class="column-inner">
                    <div id="mainslider_1" class="rev_slider_wrapper fullwidthbanner-container rev_slider_global slider_alias_rsl1" data-source="gallery" >
                        <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
                        <div id="rev_slider_1_1" class="rev_slider fullwidthabanner d_none" data-version="5.3.0.2">
                            <ul>
                                <!-- SLIDE  1-->
                                <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/slider_1_bg_1-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="images/slider_1_bg_1.jpg" alt="" title="slider_1_bg_1" width="1170" height="652" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" 
                                         id="slide-1-layer-2" 
                                         data-x="center" 
                                         data-hoffset="-331" 
                                         data-y="center" 
                                         data-voffset="-5" 
                                         data-width="['106']" 
                                         data-height="['506']" 
                                         data-type="shape" 
                                         data-responsive_offset="on" 
                                         data-frames='[{"delay":0,"speed":700,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' 
                                         data-textAlign="['inherit','inherit','inherit','inherit']" 
                                         data-paddingtop="[0,0,0,0]" 
                                         data-paddingright="[0,0,0,0]" 
                                         data-paddingbottom="[0,0,0,0]" 
                                         data-paddingleft="[0,0,0,0]" > 
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption trx-main tp-resizeme other-font" 
                                         id="slide-1-layer-1" 
                                         data-x="center" 
                                         data-hoffset="-322" 
                                         data-y="center" 
                                         data-voffset="-3" 
                                         data-width="['auto']" 
                                         data-height="['auto']" 
                                         data-type="text" 
                                         data-responsive_offset="on" 
                                         data-frames='[{"delay":0,"speed":700,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' 
                                         data-textAlign="['center','center','center','center']" 
                                         data-paddingtop="[0,0,0,0]" 
                                         data-paddingright="[0,0,0,0]" 
                                         data-paddingbottom="[0,0,0,0]" 
                                         data-paddingleft="[0,0,0,0]" >Little<br/> Love<br/> Story 
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption trx-button-main rev-btn" 
                                         id="slide-1-layer-4" 
                                         data-x="center" 
                                         data-hoffset="-330" 
                                         data-y="center" 
                                         data-voffset="209" 
                                         data-width="['auto']" 
                                         data-height="['auto']" 
                                         data-type="button" 
                                         data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"\/shop.html","delay":""}]' 
                                         data-responsive_offset="on" 
                                         data-responsive="off" 
                                         data-frames='[{"delay":0,"speed":700,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","force":true,"to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bs:solid;bw:0 0 0 0;"}]' 
                                         data-textAlign="['center','center','center','center']" 
                                         data-paddingtop="[0,0,0,0]" 
                                         data-paddingright="[0,0,0,0]" 
                                         data-paddingbottom="[0,0,0,0]" 
                                         data-paddingleft="[0,0,0,0]" >browse 
                                    </div>
                                </li>
                                <!-- SLIDE 2 -->
                                <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/slider_1_bg_2-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="images/slider_1_bg_2.jpg" alt="" title="slider_1_bg_2" width="1170" height="652" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" 
                                         id="slide-2-layer-2" 
                                         data-x="center" 
                                         data-hoffset="-253" 
                                         data-y="center" 
                                         data-voffset="1" 
                                         data-width="['105']" 
                                         data-height="['409']" 
                                         data-type="shape" 
                                         data-responsive_offset="on" 
                                         data-frames='[{"delay":0,"speed":700,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' 
                                         data-textAlign="['inherit','inherit','inherit','inherit']" 
                                         data-paddingtop="[0,0,0,0]" 
                                         data-paddingright="[0,0,0,0]" 
                                         data-paddingbottom="[0,0,0,0]" 
                                         data-paddingleft="[0,0,0,0]" > 
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption trx-main tp-resizeme other-font" 
                                         id="slide-2-layer-1" 
                                         data-x="center" 
                                         data-hoffset="-244" 
                                         data-y="center" 
                                         data-voffset="-15" 
                                         data-width="['auto']" 
                                         data-height="['auto']" 
                                         data-type="text" 
                                         data-responsive_offset="on" 
                                         data-frames='[{"delay":0,"speed":700,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' 
                                         data-textAlign="['center','center','center','center']" 
                                         data-paddingtop="[0,0,0,0]" 
                                         data-paddingright="[0,0,0,0]" 
                                         data-paddingbottom="[0,0,0,0]" 
                                         data-paddingleft="[0,0,0,0]" >Sleeping<br/> Beauty 
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption trx-button-main rev-btn" 
                                         id="slide-2-layer-4" 
                                         data-x="center" 
                                         data-hoffset="-253" 
                                         data-y="center" 
                                         data-voffset="134" 
                                         data-width="['auto']" 
                                         data-height="['auto']" 
                                         data-type="button" 
                                         data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"\/shop.html","delay":""}]' 
                                         data-responsive_offset="on" 
                                         data-responsive="off" 
                                         data-frames='[{"delay":0,"speed":700,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","force":true,"to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bs:solid;bw:0 0 0 0;"}]' 
                                         data-textAlign="['center','center','center','center']" 
                                         data-paddingtop="[0,0,0,0]" 
                                         data-paddingright="[0,0,0,0]" 
                                         data-paddingbottom="[0,0,0,0]" 
                                         data-paddingleft="[0,0,0,0]">browse 
                                    </div>
                                </li>
                                <!-- SLIDE  3-->
                                <li data-index="rs-4" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/slider_1_bg_3-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE --> 
                                    <img src="images/slider_1_bg_3.jpg" alt="" title="slider_1_bg_3" width="1170" height="652" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 --> 
                                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" 
                                         id="slide-4-layer-2" 
                                         data-x="center" 
                                         data-hoffset="271" 
                                         data-y="center"
                                         data-voffset="-5" 
                                         data-width="['106']" 
                                         data-height="['506']" 
                                         data-type="shape" 
                                         data-responsive_offset="on" 
                                         data-frames='[{"delay":0,"speed":700,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' 
                                         data-textAlign="['inherit','inherit','inherit','inherit']" 
                                         data-paddingtop="[0,0,0,0]" 
                                         data-paddingright="[0,0,0,0]" 
                                         data-paddingbottom="[0,0,0,0]" 
                                         data-paddingleft="[0,0,0,0]" > 
                                    </div>
                                    <!-- LAYER NR. 2 --> 
                                    <div class="tp-caption trx-main tp-resizeme other-font" 
                                         id="slide-4-layer-1" 
                                         data-x="center" 
                                         data-hoffset="272" 
                                         data-y="center" 
                                         data-voffset="-10" 
                                         data-width="['auto']" 
                                         data-height="['auto']" 
                                         data-type="text" 
                                         data-responsive_offset="on" 
                                         data-frames='[{"delay":0,"speed":700,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' 
                                         data-textAlign="['center','center','center','center']" 
                                         data-paddingtop="[0,0,0,0]" 
                                         data-paddingright="[0,0,0,0]" 
                                         data-paddingbottom="[0,0,0,0]" 
                                         data-paddingleft="[0,0,0,0]" >Sexy<br/> Little<br/> Things 
                                    </div>
                                    <!-- LAYER NR. 3 --> 
                                    <div class="tp-caption trx-button-main rev-btn" 
                                         id="slide-4-layer-4" 
                                         data-x="center" 
                                         data-hoffset="270" 
                                         data-y="center" 
                                         data-voffset="206" 
                                         data-width="['auto']" 
                                         data-height="['auto']" 
                                         data-type="button" 
                                         data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"\/shop.html","delay":""}]' 
                                         data-responsive_offset="on" 
                                         data-responsive="off" 
                                         data-frames='[{"delay":0,"speed":700,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","force":true,"to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bs:solid;bw:0 0 0 0;"}]' 
                                         data-textAlign="['center','center','center','center']" 
                                         data-paddingtop="[0,0,0,0]" 
                                         data-paddingright="[0,0,0,0]" 
                                         data-paddingbottom="[0,0,0,0]" 
                                         data-paddingleft="[0,0,0,0]" >browse 
                                    </div>
                                </li>
                            </ul>
                            <div class="tp-bannertimer tp-bottom vis_hid"></div>
                        </div>
                    </div>
                    <div class="empty_space h_30px"><span class="empty_space_inner"></span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="margin_on">
  <div class="content_container">
      <div class="column_row">
          <div class="column-equal-height column-content-middle column-flex">
              <div class="column_container column-7_12 sc_layouts_column_icons_position_left scr_xs">
                  <div class="column-inner mb-20px">
                      <div class="sc_action sc_action_default" data-slides-min-width="250">
                          <div class="sc_action_content sc_item_content">
                              <div class="sc_action_item sc_action_item_default with_image sc_action_item_tl bg_promo-2">
                                  <div class="sc_action_item_mask"></div>
                                  <div class="sc_action_item_inner">
                                      <h3 class="sc_action_item_title"><span>Sexy Thongs</span></h3>
                                      <div class="sc_action_item_description"><span>fun and flirty pieces for a<br/></span><span>seamless look</span></div><a href="shop.html" class="sc_action_item_link">browse</a>
                                  </div>
                                  <!-- /.sc_action_item_inner -->
                              </div>
                          </div>
                      </div>
                      <!-- /.sc_action -->    
                  </div>
              </div><div class="extra_height column_container column-5_12 sc_layouts_column_icons_position_left scr_xs">
              <div class="column-inner bg_banner">
                  <div class="text_column bg_white_with_spaces">
                      <h2 class="fsz_2em m_0 fw_400 align_center"><a href="shop.html"><b><span class="accent">Free Shipping</span></b><br />
                          on all orders<br />
                          over $75!</a>
                      </h2>    
                  </div>
              </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endif
