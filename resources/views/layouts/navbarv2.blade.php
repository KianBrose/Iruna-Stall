<section class="elementor-element elementor-element-7be46fa elementor-section-full_width elementor-hidden-phone elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="7be46fa" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
   <div class="elementor-container elementor-column-gap-extended">
      <div class="elementor-row">
         <div class="elementor-element elementor-element-f75e0ad elementor-column elementor-col-25 elementor-top-column" data-id="f75e0ad" data-element_type="column">
            <div class="elementor-column-wrap  elementor-element-populated">
               <div class="elementor-widget-wrap">
                  <div class="elementor-element elementor-element-3aa165e elementor-widget elementor-widget-image" data-id="3aa165e" data-element_type="widget" data-widget_type="image.default">
                     <div class="elementor-widget-container">
                        <div class="elementor-image">
                           <a href="/">
                           <img width="2123" height="1000" src="{{ asset('img/whitelogo.png') }}" class="attachment-full size-full wp-post-image" alt="" srcset="{{ asset('img/whitelogo.png') }}" sizes="(max-width: 2123px) 100vw, 2123px" /> </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <section class="elementor-element elementor-element-d619cf6 elementor-section-full_width elementor-hidden-desktop elementor-hidden-tablet elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="d619cf6" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-extended">
               <div class="elementor-row">
                  <div class="elementor-element elementor-element-71859de elementor-hidden-desktop elementor-hidden-tablet elementor-column elementor-col-100 elementor-top-column" data-id="71859de" data-element_type="column">
                     <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                           <div class="elementor-element elementor-element-c616fcc elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-image" data-id="c616fcc" data-element_type="widget" data-widget_type="image.default">
                              <div class="elementor-widget-container">
                                 <div class="elementor-image">
                                    <a href="/">
                                    <img width="2123" height="1000" src="{{ asset('img/whitelogo.png') }}" class="attachment-full size-full wp-post-image" alt="" srcset="{{ asset('img/whitelogo.png') }}" sizes="(max-width: 2123px) 100vw, 2123px" /> </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <div class="elementor-element elementor-element-7b5d9df elementor-column elementor-col-25 elementor-top-column" data-id="7b5d9df" data-element_type="column">
            <div class="elementor-column-wrap">
               <div class="elementor-widget-wrap">
               </div>
            </div>
         </div>
         <div class="elementor-element elementor-element-9cb71ed elementor-column elementor-col-25 elementor-top-column" data-id="9cb71ed" data-element_type="column">
            <div class="elementor-column-wrap  elementor-element-populated">
               <div class="elementor-widget-wrap">
                  <div class="elementor-element elementor-element-df7b33b elementor-align-right elementor-widget elementor-widget-button" data-id="df7b33b" data-element_type="widget" data-widget_type="button.default">
                     <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                           @guest
                           <a href="{{ route('login') }}" class="elementor-button-link elementor-button elementor-size-xl elementor-animation-grow" role="button">
                           <span class="elementor-button-content-wrapper">
                           <span class="elementor-button-icon elementor-align-icon-right">
                           <i aria-hidden="true" class="fas fa-chevron-right"></i></span>
                           <span class="elementor-button-text">Sign In</span> @else
                           <a href="{{ route('logout') }}" class="elementor-button-link elementor-button elementor-size-xl elementor-animation-grow" role="button" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              <span class="elementor-button-content-wrapper">
                                 <span class="elementor-button-icon elementor-align-icon-right">
                                 <i aria-hidden="true" class="fas fa-chevron-right"></i></span>
                                 <span class="elementor-button-text">Logout</span>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                 </form>
                                 @endguest
                              </span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="elementor-element elementor-element-4e12a87 elementor-column elementor-col-25 elementor-top-column" data-id="4e12a87" data-element_type="column">
            <div class="elementor-column-wrap  elementor-element-populated">
               <div class="elementor-widget-wrap">
                  <div class="elementor-element elementor-element-80ed038 elementor-align-right elementor-widget elementor-widget-button" data-id="80ed038" data-element_type="widget" data-widget_type="button.default">
                     <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                           <a href="/additem" class="elementor-button-link elementor-button elementor-size-xl elementor-animation-grow" role="button">
                           <span class="elementor-button-content-wrapper">
                           <span class="elementor-button-icon elementor-align-icon-right">
                           <i aria-hidden="true" class="fas fa-chevron-right"></i>         </span>
                           <span class="elementor-button-text">Sell</span>
                           </span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="elementor-element elementor-element-c3a1c6d elementor-section-full_width elementor-hidden-desktop elementor-hidden-tablet elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="c3a1c6d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
   <div class="elementor-container elementor-column-gap-extended">
      <div class="elementor-row">
         <div class="elementor-element elementor-element-9834dff elementor-hidden-desktop elementor-hidden-tablet elementor-column elementor-col-50 elementor-top-column" data-id="9834dff" data-element_type="column">
            <div class="elementor-column-wrap  elementor-element-populated">
               <div class="elementor-widget-wrap">
                  <div class="elementor-element elementor-element-c1d94c5 elementor-align-right elementor-mobile-align-center elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-button" data-id="c1d94c5" data-element_type="widget" data-widget_type="button.default">
                     <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                           @guest
                           <a href="{{ route('login') }}" class="elementor-button-link elementor-button elementor-size-md elementor-animation-grow" role="button">
                           <span class="elementor-button-content-wrapper">
                           <span class="elementor-button-icon elementor-align-icon-right">
                           <i aria-hidden="true" class="fas fa-chevron-right"></i>         </span>
                           <span class="elementor-button-text">Sign In</span> @else
                           <a href="{{ route('login') }}" class="elementor-button-link elementor-button elementor-size-md elementor-animation-grow" role="button" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              >
                              <span class="elementor-button-content-wrapper">
                                 <span class="elementor-button-icon elementor-align-icon-right">
                                 <i aria-hidden="true" class="fas fa-chevron-right"></i></span>
                                 <span class="elementor-button-text">Logout</span>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                 </form>
                                 @endguest
                              </span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="elementor-element elementor-element-72dfa65 elementor-hidden-desktop elementor-hidden-tablet elementor-column elementor-col-50 elementor-top-column" data-id="72dfa65" data-element_type="column">
            <div class="elementor-column-wrap  elementor-element-populated">
               <div class="elementor-widget-wrap">
                  <div class="elementor-element elementor-element-de0b52d elementor-align-right elementor-mobile-align-center elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-button" data-id="de0b52d" data-element_type="widget" data-widget_type="button.default">
                     <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                           <a href="/additem" class="elementor-button-link elementor-button elementor-size-md elementor-animation-grow" role="button">
                           <span class="elementor-button-content-wrapper">
                           <span class="elementor-button-icon elementor-align-icon-right">
                           <i aria-hidden="true" class="fas fa-chevron-right"></i>         </span>
                           <span class="elementor-button-text">Sell</span>
                           </span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>