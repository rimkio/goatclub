<?php

/**
 * Header template
 */

$classes = [
   'dev-header',
];
$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
?>
<div id="header_section" class="header_section reheader_sec f-nav">
   <div class="header_container">
      <div class="reheader_grid">
         <div class="relogo">
            <div class="site-logo"><a href="https://goatclub.com.au"><span class="custom-logo-link"><img width="1" height="1" src="https://goatclub.com.au/wp-content/uploads/2023/03/GC-Badge.svg" class="custom-logo" alt="" decoding="async"></span></a></div>
         </div>
         <div class="nav_row dis_desktop">
            <div class="primary_menu">
               <div class="menu-main-menu-container">
                  <ul id="menu-main-menu" class="menu">
                     <li id="menu-item-535961" class="menuhome_link menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-8 current_page_item menu-item-535961"><a href="https://goatclub.com.au/" aria-current="page">Home</a></li>
                     <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a href="https://goatclub.com.au/about-us/">About Us</a></li>
                     <li id="menu-item-22" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-22"><a href="https://goatclub.com.au/partners/">Partners</a><button class="sub-menu-toggle" aria-expanded="false" onclick="twentytwentyoneExpandSubMenu(this)"><span class="icon-plus"><svg class="svg-icon" width="18" height="18" aria-hidden="true" role="img" focusable="false" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M18 11.2h-5.2V6h-1.6v5.2H6v1.6h5.2V18h1.6v-5.2H18z" fill="currentColor"></path>
                              </svg></span><span class="icon-minus"><svg class="svg-icon" width="18" height="18" aria-hidden="true" role="img" focusable="false" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M6 11h12v2H6z" fill="currentColor"></path>
                              </svg></span><span class="screen-reader-text">Open menu</span></button>
                        <ul class="sub-menu">
                           <li id="menu-item-181" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-181"><a href="https://goatclub.com.au/become-a-partner/">Become a Partner</a></li>
                           <li id="menu-item-180" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-180"><a href="https://goatclub.com.au/charity-partner/">Charity partner</a></li>
                        </ul>
                     </li>
                     <li id="menu-item-130" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-130"><a href="https://goatclub.com.au/promotions/">Promotions &amp; Giveaways</a></li>
                     <li id="menu-item-131" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-131"><a href="https://goatclub.com.au/previous-winners/">Previous Winners</a></li>
                     <li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25"><a href="https://goatclub.com.au/shop-merch/">Shop Merch</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="reuser_menu dis_desktop">
            <section id="nav_menu-2" class="widget widget_nav_menu">
               <nav class="menu-user-menu-container" aria-label="Menu">
                  <ul id="menu-user-menu" class="menu">
                     <li id="menu-item-535969" class="login_link menu-item menu-item-type-custom menu-item-object-custom menu-item-535969 sg-popup-id-535810" data-popup-id="535810"><a href="#"><span>Sign In</span></a></li>
                     <li id="menu-item-33" class="signup_link menu-item menu-item-type-post_type menu-item-object-page menu-item-33"><a href="https://goatclub.com.au/sign-up-now/">Sign Up</a></li>
                  </ul>
               </nav>
            </section>
         </div>

         <div class="mobilenav">
            <img src="https://goatclub.com.au/wp-content/themes/theme2021/assets/img/menu_icon.svg">
         </div>
      </div>

      <div class="reheader_grid mobile_menu dis_mobile">

         <div class="mobmenu_grid">
            <div class="navclsbtn">
               <img src="https://goatclub.com.au/wp-content/themes/theme2021/assets/img/nav_close.svg">
            </div>
            <div class="mob_logo">
               <div class="site-logo"><a href="https://goatclub.com.au"><span class="custom-logo-link"><img width="1" height="1" src="https://goatclub.com.au/wp-content/uploads/2023/03/GC-Badge.svg" class="custom-logo" alt="" decoding="async"></span></a></div>
            </div>
            <div class="nav_row">
               <div class="primary_menu">

                  <div class="menu-main-menu-container">
                     <ul id="menu-main-menu-1" class="menu">
                        <li class="menuhome_link menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-8 current_page_item menu-item-535961"><a href="https://goatclub.com.au/" aria-current="page">Home</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a href="https://goatclub.com.au/about-us/">About Us</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-22"><a href="https://goatclub.com.au/partners/">Partners</a><button class="sub-menu-toggle" aria-expanded="false" onclick="twentytwentyoneExpandSubMenu(this)"><span class="icon-plus"><svg class="svg-icon" width="18" height="18" aria-hidden="true" role="img" focusable="false" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18 11.2h-5.2V6h-1.6v5.2H6v1.6h5.2V18h1.6v-5.2H18z" fill="currentColor"></path>
                                 </svg></span><span class="icon-minus"><svg class="svg-icon" width="18" height="18" aria-hidden="true" role="img" focusable="false" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 11h12v2H6z" fill="currentColor"></path>
                                 </svg></span><span class="screen-reader-text">Open menu</span></button>
                           <ul class="sub-menu">
                              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-181"><a href="https://goatclub.com.au/become-a-partner/">Become a Partner</a></li>
                              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-180"><a href="https://goatclub.com.au/charity-partner/">Charity partner</a></li>
                           </ul>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-130"><a href="https://goatclub.com.au/promotions/">Promotions &amp; Giveaways</a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-131"><a href="https://goatclub.com.au/previous-winners/">Previous Winners</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25"><a href="https://goatclub.com.au/shop-merch/">Shop Merch</a></li>
                     </ul>
                  </div>
               </div>
               <div class="reuser_menu">
                  <section id="nav_menu-2" class="widget widget_nav_menu">
                     <nav class="menu-user-menu-container" aria-label="Menu">
                        <ul id="menu-user-menu-1" class="menu">
                           <li class="login_link menu-item menu-item-type-custom menu-item-object-custom menu-item-535969 sg-popup-id-535810" data-popup-id="535810"><a href="#"><span>Sign In</span></a></li>
                           <li class="signup_link menu-item menu-item-type-post_type menu-item-object-page menu-item-33"><a href="https://goatclub.com.au/sign-up-now/">Sign Up</a></li>
                        </ul>
                     </nav>
                  </section>
               </div>
            </div>
         </div>

      </div>
   </div>
</div>
<!-- #site-header -->