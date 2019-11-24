<!--Footer-->

<!--Module top footer -->
@isset ($blocksContent['footer'])
@foreach ( $blocksContent['footer'] as $layout)
@php
$arrPage = explode(',', $layout->page)
@endphp
@if ($layout->page == '*' || (isset($layout_page) && in_array($layout_page, $arrPage)))
@if ($layout->type =='html')
{!! $layout->text !!}
@elseif($layout->type =='view')
@if (view()->exists('blockView.'.$layout->text))
@include('blockView.'.$layout->text)
@endif
@elseif($layout->type =='module')
{!! sc_block_render($layout->text) !!}
@endif
@endif
@endforeach
@endisset
<!--//Module top footer -->
<!-- .entry-content -->
</article>
</div>
<!-- </.content> -->
</div>
<!-- </.content_wrap> -->
</div>
<!-- </.page_content_wrap> -->
<footer class="footer_wrap footer_custom scheme_side">
  <section>
    <div class="column_row sc_layouts_row sc_layouts_row_type_normal">
      <div class="column_container column-1_1 sc_layouts_column_icons_position_left">
        <div class="column-inner">
          <div class="sc_content sc_content_default sc_float_center sc_align_center sc_content_width_1_1">
            <div class="sc_content_container">
              <div class="empty_space h-5_3em"><span class="empty_space_inner"></span></div>
              <section class="cta3-container">
                <div class="general cta3 cta3-style-classic cta3-shape-square cta3-align-left cta3-color-classic cta3-icon-size-md cta3-actions-right brd-3px_red">
                  <div class="cta3_content-container">
                    <div class="cta3-content">
                      <div class="cta3-content-header">
                        <h2>Let’s Stay Connected!</h2>
                      </div>
                      <p>Sign up today for our newsletter and receive <em>15% OFF</em> your first purchase, and also get our sneak peeks, tips, and exclusive offers.</p>
                    </div>
                    <div class="cta3-actions">
                      <div class="btn3-container btn3-inline">
                        <a class="general btn3 btn3-size-md btn3-shape-square btn3-style-classic btn3-color-grey" href="#" title="">sign up</a>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
          <!-- /.sc_content -->
          <div class="empty_space h-2em"><span class="empty_space_inner"></span></div>
          <div class="sc_content sc_content_default sc_float_center sc_align_center sc_content_width_1_1">
            <div class="sc_content_container">
              <div class="sc_layouts_item">
                <nav class="sc_layouts_menu sc_layouts_menu_default menu_hover_fade" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <ul id="menu_footer" class="sc_layouts_menu_nav menu_footer_nav">
                    <li class="menu-item menu-item-home current-menu-item">
                      <a href="index.html">
                        <span>Home</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="shop.html">
                        <span>Lingerie</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="shop.html">
                        <span>Sport</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="about-style-1.html">
                        <span>About Us</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="gallery.html">
                        <span>Gallery</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="shop.html">
                        <span>Shop</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="blog-streampage.html">
                        <span>Blog</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="features-support.html">
                        <span>Support</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="contacts.html">
                        <span>Contacts</span>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- /.sc_layouts_menu -->
              </div>
            </div>
          </div>
          <!-- /.sc_content -->
          <div class="empty_space h-2_2em"><span class="empty_space_inner"></span></div>
          <div class="sc_content sc_content_default sc_float_center sc_align_center sc_content_width_1_1">
            <div class="sc_content_container">
              <div class="text_column">
                <div class="widget widget_text">
                  <div class="textwidget">
                    <div class="fsz_13px fw_400">&copy;2019 Girls’s Lingerie Store. All Rights Reserved. <a href="#">Terms of use</a> and <a href="#">Privacy Policy</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.sc_content -->
          <div class="empty_space h-3_2em"><span class="empty_space_inner"></span></div>
          <div class="empty_space  hide_on_mobile h-3em"><span class="empty_space_inner"></span></div>
        </div>
      </div>
    </div>
  </section>
</footer>
<!-- /.footer_wrap -->
</div>
<!-- /.page_wrap -->
</div>
<!-- /.body_wrap -->

<div id="trx_addons_login_popup" class="trx_addons_popup trx_addons_tabs mfp-hide">
  <ul class="trx_addons_tabs_titles">
    <li class="trx_addons_tabs_title trx_addons_tabs_title_login">
      <a href="#trx_addons_login_content"><i class="trx_addons_icon-lock-open"></i>Login</a>
    </li>
    <li class="trx_addons_tabs_title trx_addons_tabs_title_register" data-disabled="true">
      <a href="#trx_addons_register_content"><i class="trx_addons_icon-user-plus"></i>Register</a>
    </li>
  </ul>
  <div id="trx_addons_login_content" class="trx_addons_tabs_content trx_addons_login_content">
    <div>
      <div class="trx_addons_popup_form_wrap trx_addons_popup_form_wrap_login">
        <form class="trx_addons_popup_form trx_addons_popup_form_login sc_input_hover_iconed" action="#" method="post" name="trx_addons_login_form">
          <input type="hidden" id="redirect_to" name="redirect_to" value="">
          <div class="trx_addons_popup_form_field trx_addons_popup_form_field_login">
            <label class="sc_form_field sc_form_field_log required">
              <span class="sc_form_field_wrap"><input type="text" name="log" id="log" value="">
                <span class="sc_form_field_hover"><i class="sc_form_field_icon trx_addons_icon-user-alt"></i>
                  <span class="sc_form_field_content" data-content="Login">Login</span>
                </span>
              </span>
            </label>
          </div>
          <div class="trx_addons_popup_form_field trx_addons_popup_form_field_password">
            <label class="sc_form_field sc_form_field_pwd required">
              <span class="sc_form_field_wrap"><input type="password" name="pwd" id="pwd" value="">
                <span class="sc_form_field_hover"><i class="sc_form_field_icon trx_addons_icon-lock"></i>
                  <span class="sc_form_field_content" data-content="Password">Password</span>
                </span>
              </span>
            </label>
          </div>
          <div class="trx_addons_popup_form_field trx_addons_popup_form_field_remember">
            <a href="#" class="trx_addons_popup_form_field_forgot_password">Forgot password?</a>
            <input type="checkbox" value="forever" id="rememberme" name="rememberme">
            <label for="rememberme"> Remember me</label>
          </div>
          <div class="trx_addons_popup_form_field trx_addons_popup_form_field_submit">
            <input type="submit" class="submit_button" value="Login">
          </div>
          <div class="trx_addons_message_box sc_form_result"></div>
        </form>
      </div>
    </div>
  </div>
</div>