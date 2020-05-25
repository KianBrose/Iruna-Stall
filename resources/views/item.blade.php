<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <title> {{$item->name}} | Iruna Global Stall</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="index, follow">
      <meta name="description" content="Find about Iruna Stall on how it used to find, buy and sell items for free! In the Iruna Global Stall, you can post your items as a seller and search for items without the need for registration.">
      <meta name="keywords" content="Iruna, Stall, Global, iruna, stall, global, Iruna Online, buy, sell, trade, about, Kian Brose, Kumar, Polowis, terms, service, contact">
      <meta name="hostname" content="irunastall.com">
      <meta name='subject' content="About Iruna Global Stall">
      <meta name="author" content="Kian Brose">
      <meta name='coverage' content='Worldwide'>
      <meta name='distribution' content='Global'>
      <meta name='rating' content='General'>
      <meta name='HandheldFriendly' content='True'>
      <meta name='MobileOptimized' content='320'>
      <meta name='target' content='all'>
      <meta name="apple-mobile-web-app-title" content="{{$item->name}} | Iruna Global Stall">
      <meta name='apple-mobile-web-app-capable' content='yes'>
      <meta name='apple-touch-fullscreen' content='yes'>
      <meta name='apple-touch-fullscreen' content='yes'>
      <meta name='application-name' content="Iruna Global Stall">
      <link rel="apple-touch-icon" href="https://irunastall.com/img/iruna.jpg">
      <meta name="twitter:card" content="summary">
      <meta name="twitter:title" content="{{$item->name}} | Iruna Global Stall">
      <meta name="twitter:description" content="Know about Iruna global stall. This is a platform to find, buy and sell items of Iruna online game. Account is not needed for searching for items">
      <meta property="og:title" content="Iruna Stall">
      <meta property="og:type" content="website">
      <meta property="og:description" content="Know about on how to find, buy and sell items for free on the Iruna Online Global Stall! In the Global Stall, you can post your items as a seller and search for items as a buyer. The stall is free to use and requires no account to search for items.">
      <meta property="og:image" content="https://irunastall.com/img/iruna.jpg">
      <meta property="og:url" content="https://irunastall.com">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="canonical" href="https://irunastall.com">
      <link rel="manifest" href="manifest.json">
      <script src="js/serviceLoader.js"></script>
      <!-- manifest for PWA -->
      <link rel="manifest" href="manifest.json">
      <script src="js/serviceLoader.js"></script>
      <link href="{{asset('css/icons/all.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('css/main.css') }}">
      <link rel="stylesheet" href="{{ asset('css/itempage.css') }}">
      <link rel="stylesheet" href="{{ asset('css/individualitempage.css') }}">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
   <body class="page-template page-template-elementor_canvas page page-id-2358 wp-custom-logo wp-embed-responsive theme-storefront woocommerce-no-js wcz-woocommerce wcz-btn-style-default ehf-template-storefront ehf-stylesheet-storefront woo-variation-gallery woo-variation-gallery-theme-storefront woo-variation-gallery-theme-child-storefront woo-variation-swatches woo-variation-swatches-theme-storefront woo-variation-swatches-theme-child-storefront woo-variation-swatches-style-squared woo-variation-swatches-attribute-behavior-blur woo-variation-swatches-tooltip-enabled woo-variation-swatches-stylesheet-enabled storefront-full-width-content storefront-align-wide right-sidebar woocommerce-active elementor-default elementor-template-canvas elementor-kit-1727 elementor-page elementor-page-2358">
      <div data-elementor-type="wp-page" data-elementor-id="2358" class="elementor elementor-2358" data-elementor-settings="[]">
         <div class="elementor-inner">
            <div class="elementor-section-wrap">
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
               @include('layouts.navbarv2')
               <section class="elementor-element elementor-element-9ee35cc elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="9ee35cc" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-container elementor-column-gap-default">
                     <div class="elementor-row">
                        <div class="elementor-element elementor-element-67b31e2 elementor-column elementor-col-33 elementor-top-column" data-id="67b31e2" data-element_type="column">
                           <div class="elementor-column-wrap">
                              <div class="elementor-widget-wrap">
                              </div>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-9bb1b36 elementor-column elementor-col-33 elementor-top-column" data-id="9bb1b36" data-element_type="column">
                           <div class="elementor-column-wrap  elementor-element-populated">
                              <div class="elementor-widget-wrap">
                                 <div class="elementor-element elementor-element-6d1da58 elementor-widget elementor-widget-heading" data-id="6d1da58" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <h2 class="elementor-heading-title elementor-size-default">About, Contact, Privacy Policy & TOS</h2>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-af0f7c5 elementor-widget elementor-widget-spacer" data-id="af0f7c5" data-element_type="widget" data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-spacer">
                                          <div class="elementor-spacer-inner"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="container">
                                    <div class="row" >
                                       <div class="col-md-7 offset-md-3" >
                                          <div style="height: auto !important;">
                                             <br>
                                             <h4>Item's details</h4>
                                             <hr>
                                             @if($item->category == 'xtal')
                                             <div class="row divider" role="separator" ></div>
                                             <h6>Name: {{$item->name }} </h6>
                                             <br>
                                             <h6>Price: {{ number_format($item->price)}} </h6>
                                             <br>
                                             <h6>Quantity: {{number_format($item->quantity)}}</h6>
                                             <br>
                                             <h6>Posted at: {{date_format($item->created_at, "d/m/Y")}}</h6>
                                             <h6>Seller: <a href="/user/{{ $item->owner_id}}" style="color:orange;">{{ $item->contact }}</a></h6>
                                             @elseif($item->category == 'equipment')
                                             <h6>Name: {{$item->name}}</h6>
                                             <h6>ATK: {{$item->atk}}</h6>
                                             <h6>DEF: {{$item->def}}</h6>
                                             <br>
                                             <h6>Price: {{ number_format($item->price) }}</h6>
                                             <h6> Refinement: +{{$item->refinement}}</h6>
                                             @if ($item->slots == 0)
                                             <h6>Slot 1: No slot</h6>
                                             <h6>Slot 2: No slot</h6>
                                             @elseif ($item->slots == 1)
                                             @if ($item->slot1 == null)
                                             <h6>Slot 1: Empty slot</h6>
                                             <h6 >Slot 2: No slot</h6>
                                             @else
                                             <h6>Slot 1: {{ $item->slot1 }}</h6>
                                             <h6 >Slot 2: No slot</h6>
                                             @endif
                                             @elseif ($item->slots == 2)
                                             @if ($item->slot1 != null)
                                             @if ($item->slot2 != null)
                                             <h6>Slot 1: {{ $item->slot1 }}</h6>
                                             <h6>Slot 2: {{ $item->slot2 }}</h6>
                                             @else
                                             <h6>Slot 1: {{ $item->slot1 }}</h6>
                                             <h6>Slot 2: Empty slot</h6>
                                             @endif
                                             @elseif ($item->slot1 == null)
                                             @if ($item->slot2 == null)
                                             <h6>Slot 1: Empty slot</h6>
                                             <h6>Slot 2: Empty slot</h6>
                                             @else
                                             <h6>Slot 1: Empty slot</h6>
                                             <h6>Slot 2: {{ $item->slot2 }}</h6>
                                             @endif
                                             @endif
                                             @endif
                                             @if ($item->ability == null)
                                             <h6>Ability : None</h6>
                                             @else
                                             <h6>Ability: {{ $item->ability }}</h6>
                                             <h6> Ability's level: {{$item->ability_level}}</h6>
                                             @endif
                                             <h6>Seller: <a href="/user/{{ $item->owner_id}}" style="color:orange;">{{ $item->contact }}</a></h6>
                                             @elseif($item->category == 'item')
                                             <h6>Name: {{$item->name }} </h6>
                                             <br>
                                             <h6>Price: {{ number_format($item->price)}} </h6>
                                             <br>
                                             <h6>Quantity: {{number_format($item->quantity)}}</h6>
                                             <br>
                                             <h6>Posted at: {{date_format($item->created_at, "d/m/Y")}}</h6>
                                             <h6>Seller: <a href="/user/{{ $item->owner_id}}" style="color:orange;">{{ $item->contact }}</a></h6>
                                             @elseif($item->category == 'ai')
                                             <h6>Name: {{$item->name }} </h6>
                                             <br>
                                             <h6>Price: {{ number_format($item->price)}} </h6>
                                             <br>
                                             <h6>Color: {{$item->color}}</h6>
                                             <h6>Quantity: {{number_format($item->quantity)}}</h6>
                                             <br>
                                             <h6>Posted at: {{date_format($item->created_at, "d/m/Y")}}</h6>
                                             <h6>Seller: <a href="/user/{{ $item->owner_id}}" style="color:orange;">{{ $item->contact }}</a></h6>
                                             @elseif($item->category == 'relic')
                                             <h6>Name: {{$item->name }} </h6>
                                             <br>
                                             <h6>Price: {{ number_format($item->price)}} </h6>
                                             <br>
                                             <h6>Quantity: {{number_format($item->quantity)}}</h6>
                                             <br>
                                             <h6>Posted at: {{date_format($item->created_at, "d/m/Y")}}</h6>
                                             <h6>Seller: <a href="/user/{{ $item->owner_id}}" style="color:orange;">{{ $item->contact }}</a></h6>
                                             @endif
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-29bb990 elementor-align-center elementor-widget elementor-widget-button" data-id="29bb990" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-button-wrapper">
                                          <a href="/" class="elementor-button-link elementor-button elementor-size-lg elementor-animation-grow" role="button">
                                          <span class="elementor-button-content-wrapper">
                                          <span class="elementor-button-icon elementor-align-icon-right">
                                          <i aria-hidden="true" class="fas fa-chevron-right"></i>         </span>
                                          <span class="elementor-button-text">Back home</span>
                                          </span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-c96e6fb elementor-column elementor-col-33 elementor-top-column" data-id="c96e6fb" data-element_type="column">
                           <div class="elementor-column-wrap">
                              <div class="elementor-widget-wrap">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               @include('layouts.footer')
            </div>
         </div>
      </div>
   </body>
</html>