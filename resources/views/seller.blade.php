<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="UTF-8">
      <title>Iruna Global Stall | Iruna Online</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="index, follow" >
      <meta name="description" content="Iruna Stall is a platform to find, buy and sell items for free! In the Iruna Global Stall, you can post your items as a seller and search for items as a buyer. The stall is free to use and requires no account to search for items.">
      <meta name="keywords" content="Iruna, Stall, Global, iruna, stall, global, Iruna Online, buy, sell, trade, Iruna enchanter skills, Iruna struggler, Iruna monk, Iruna online classes, samurai, ninja, leveling, dragon, crystal, quest, Toram online" >
      <meta name="hostname" content="irunastall.com" >
      <meta name='subject' content="Iruna Global Stall">
      <meta name="author" content="Kian Brose" >
      <meta name='coverage' content='Worldwide'>
      <meta name='distribution' content='Global'>
      <meta name='rating' content='General'>
      <meta name='HandheldFriendly' content='True'>
      <meta name='MobileOptimized' content='320'>
      <meta name='target' content='all'>
      <meta name="apple-mobile-web-app-title" content="Iruna Global Stall">
      <meta name='apple-mobile-web-app-capable' content='yes'>
      <meta name='apple-touch-fullscreen' content='yes'>
      <meta name='apple-touch-fullscreen' content='yes'>
      <meta name='application-name' content="Iruna Global Stall">
      <link rel="apple-touch-icon" href="https://irunastall.com/img/iruna.jpg">
      <meta name="twitter:card" content="summary" >
      <meta name="twitter:title" content="Iruna Global Stall" >
      <meta name="twitter:description" content="Iruna global stall is platform to find, buy and sell items of Iruna online game. Account is not needed for searching for items" >
      <meta property="og:title" content="Iruna Stall">
      <meta property="og:type" content="website" >
      <meta property="og:description" content="Find, buy and sell items for free on the Iruna Online Global Stall! In the Global Stall, you can post your items as a seller and search for items as a buyer. The stall is free to use and requires no account to search for items.">
      <meta property="og:image" content="https://irunastall.com/img/iruna.jpg">
      <meta property="og:url" content="https://irunastall.com" >
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="canonical" href="https://irunastall.com" >
      <!-- manifest for PWA -->
      <link rel="manifest" href="manifest.json" >
      <script src="js/serviceLoader.js"></script>
      <link href="{{asset('css/icons/all.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('css/profilepage.css') }}">
      <link rel="stylesheet" href="{{ asset('css/sellerpage.css') }}">
      <link rel="stylesheet" href="{{ asset('css/searchpagination.css') }}">
      <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
      <link rel="stylesheet" href="{{ asset('css/autocomplete.css') }}">
      <link rel="stylesheet" href="{{ asset('css/profilebuttons.css') }}">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
   </head>
   <body class="page-template page-template-elementor_canvas page page-id-2225 wp-custom-logo wp-embed-responsive theme-storefront woocommerce-no-js wcz-woocommerce wcz-btn-style-default ehf-template-storefront ehf-stylesheet-storefront woo-variation-gallery woo-variation-gallery-theme-storefront woo-variation-gallery-theme-child-storefront woo-variation-swatches woo-variation-swatches-theme-storefront woo-variation-swatches-theme-child-storefront woo-variation-swatches-style-squared woo-variation-swatches-attribute-behavior-blur woo-variation-swatches-tooltip-enabled woo-variation-swatches-stylesheet-enabled storefront-full-width-content storefront-align-wide right-sidebar woocommerce-active elementor-default elementor-template-canvas elementor-kit-1727 elementor-page elementor-page-2225">
      <div data-elementor-type="wp-page" data-elementor-id="2225" class="elementor elementor-2225" data-elementor-settings="[]">
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
               <section class="elementor-element elementor-element-256203f elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="256203f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="background-color:#00A5FF;">
                  <div class="elementor-container elementor-column-gap-default">
                     <div class="elementor-row">
                        <div class="elementor-element elementor-element-9bafb5f elementor-column elementor-col-25 elementor-top-column" data-id="9bafb5f" data-element_type="column">
                           <div class="elementor-column-wrap">
                              <div class="elementor-widget-wrap">
                              </div>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-1e4527c elementor-column elementor-col-25 elementor-top-column" data-id="1e4527c" data-element_type="column">
                           <div class="elementor-column-wrap  elementor-element-populated">
                              <div class="elementor-widget-wrap">
                                 <div class="elementor-element elementor-element-56daa5a elementor-widget elementor-widget-heading" data-id="56daa5a" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <h2 class="elementor-heading-title elementor-size-default">Seller's Profile</h2>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-aef0ddf elementor-widget elementor-widget-text-editor" data-id="aef0ddf" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-text-editor elementor-clearfix">
                                          <p style="color: white;"><b>Username: {{ $user->name }}</b></p>
                                          <p style="color: white;"><b>Date Registered: {{ date_format($user->created_at, "d/m/Y") }}</b></p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-9b24551 elementor-align-center elementor-widget elementor-widget-button" data-id="9b24551" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-button-wrapper">
                                          <a href="https://irunastall.com/" class="elementor-button-link elementor-button elementor-size-lg elementor-animation-grow" role="button">
                                          <span class="elementor-button-content-wrapper">
                                          <span class="elementor-button-icon elementor-align-icon-right">
                                          <i aria-hidden="true" class="fas fa-chevron-right" style="font-size: 30px;"></i>         </span>
                                          <span class="elementor-button-text" style="padding-top:4px">Report</span>
                                          </span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-0ef09be elementor-column elementor-col-25 elementor-top-column" data-id="0ef09be" data-element_type="column">
                           <div class="elementor-column-wrap  elementor-element-populated">
                              <div class="elementor-widget-wrap">
                                 <div class="elementor-element elementor-element-5c7e03f elementor-widget elementor-widget-heading" data-id="5c7e03f" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <h2 class="elementor-heading-title elementor-size-default" style="text-align: center;">Contact</h2>
                                    </div>
                                 </div>
                                 <section class="elementor-element elementor-element-8ade268 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="8ade268" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                       <div class="elementor-row">
                                          <div class="elementor-element elementor-element-ce6cb3a elementor-column elementor-col-25 elementor-inner-column" data-id="ce6cb3a" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="" data-id="8532a98" data-element_type="widget" data-widget_type="button.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-button-wrapper">
                                                            <a href="https://facebook.com/" class="facebook-box" role="button" style="padding: 25px 42px 25px 34px;">
                                                            <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-icon elementor-align-icon-left">
                                                            <i aria-hidden="true" class="fab fa-facebook-f" style="font-size: 30px; margin-right: -9.5px; padding-left:3px"></i>            </span>
                                                            <span class="elementor-button-text"></span>
                                                            </span>
                                                            </a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="elementor-element elementor-element-8bbf858 elementor-column elementor-col-25 elementor-inner-column" data-id="8bbf858" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="" data-id="4553669" data-element_type="widget" data-widget_type="button.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-button-wrapper">
                                                            <a href="https://facebook.com/" class="whatsapp-box" role="button" style="padding: 25px 34px 25px 34px;">
                                                            <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-icon elementor-align-icon-left">
                                                            <i aria-hidden="true" class="fab fa-whatsapp" style="font-size: 30px; margin-right: -6px;"></i>          </span>
                                                            <span class="elementor-button-text"></span>
                                                            </span>
                                                            </a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="elementor-element elementor-element-5bcfc32 elementor-column elementor-col-25 elementor-inner-column" data-id="5bcfc32" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="" data-id="a011617" data-element_type="widget" data-widget_type="button.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-button-wrapper">
                                                            <a href="https://facebook.com/" class="discord-box" role="button" style="padding: 25px 34px 25px 34px;">
                                                            <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-icon elementor-align-icon-left">
                                                            <i aria-hidden="true" class="fab fa-discord" style="font-size: 30px; margin-right: -6px;"></i>           </span>
                                                            <span class="elementor-button-text"></span>
                                                            </span>
                                                            </a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="elementor-element elementor-element-43715b7 elementor-column elementor-col-25 elementor-inner-column" data-id="43715b7" data-element_type="column">
                                             <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                   <div class="" data-id="a91f849" data-element_type="widget" data-widget_type="button.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-button-wrapper">
                                                            <a href="https://facebook.com/" class="snapchat-box" role="button" style="padding: 25px 34px 25px 34px;">
                                                            <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-icon elementor-align-icon-left">
                                                            <i aria-hidden="true" class="fab fa-snapchat-ghost" style="font-size: 30px; margin-right: -9.75px;"></i>            </span>
                                                            <span class="elementor-button-text"></span>
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
                              </div>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-8000a51 elementor-column elementor-col-25 elementor-top-column" data-id="8000a51" data-element_type="column">
                           <div class="elementor-column-wrap">
                              <div class="elementor-widget-wrap">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <section class="elementor-element elementor-element-cbff812 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="cbff812" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="background-color:#00A5FF;">
                  <div class="elementor-container elementor-column-gap-default">
                     <div class="elementor-row">
                        <div class="elementor-element elementor-element-fa4c44f elementor-column elementor-col-100 elementor-top-column" data-id="fa4c44f" data-element_type="column">
                           <div class="elementor-column-wrap  elementor-element-populated">
                              <div class="elementor-widget-wrap">
                                 <div class="elementor-element elementor-element-05c97b1 elementor-widget elementor-widget-heading" data-id="05c97b1" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       @if($equipSearch->count() >= 1)
                                       <table>
                                          <h2 class="elementor-heading-title elementor-size-default" style="text-align: center;">Equipment</h2>
                                          <br>
                                          <thead>
                                             <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">ATK</th>
                                                <th scope="col">DEF</th>
                                                <th scope="col">Refinement</th>
                                                <th scope="col">Slots</th>
                                                <th scope="col">Slot1</th>
                                                <th scope="col">Slot2</th>
                                                <th scope="col">Ability</th>
                                                <th scope="col">Ability Lv</th>
                                                <th scope="col">Price</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             @foreach ($equipSearch as $equip)
                                             <tr>
                                                <td data-label="Name"><a href="item/equip/{{$equip->item_id}}">{{ $equip->name }}</a></td>
                                                <td data-label="ATK">{{ $equip->atk }}</td>
                                                <td data-label="DEF">{{ $equip->def }}</td>
                                                <td data-label="Refinement">{{ $equip->refinement }}</td>
                                                <td data-label="Slots">{{ $equip->slots }}</td>
                                                @if ($equip->slots == 0)
                                                <td data-label="Slot1">/</td>
                                                <td data-label="Slot2">/</td>
                                                @elseif ($equip->slots == 1)
                                                @if ($equip->slot1 == null)
                                                <td data-label="Slot1">empty</td>
                                                <td data-label="Slot2">/</td>
                                                @else
                                                <td data-label="Slot1">{{ $equip->slot1 }}</td>
                                                <td data-label="Slot2">/</td>
                                                @endif
                                                @elseif ($equip->slots == 2)
                                                @if ($equip->slot1 != null)
                                                @if ($equip->slot2 != null)
                                                <td data-label="Slot1">{{ $equip->slot1 }}</td>
                                                <td data-label="Slot2">{{ $equip->slot2 }}</td>
                                                @else
                                                <td data-label="Slot1">{{ $equip->slot1 }}</td>
                                                <td data-label="Slot2">empty</td>
                                                @endif
                                                @elseif ($equip->slot1 == null)
                                                @if ($equip->slot2 == null)
                                                <td data-label="Slot1">empty</td>
                                                <td data-label="Slot2">empty</td>
                                                @else
                                                <td data-label="Slot1">empty</td>
                                                <td data-label="Slot2">{{ $equip->slot2 }}</td>
                                                @endif
                                                @endif
                                                @endif
                                                @if ($equip->ability == null)
                                                <td data-label="Ability">none</td>
                                                @else
                                                <td data-label="Ability">{{ $equip->ability }}</td>
                                                @endif
                                                <td data-label="Ability Lv">{{ $equip->ability_level}}</td>
                                                <td data-label="Price">{{ number_format($equip->price )}}</td>
                                             </tr>
                                             @endforeach
                                          </tbody>
                                       </table>
                                       {{$equipSearch->appends(['search' => request('search'), 'xtalPage' => request('xtalPage'), 'equipPage' => request('equipPage'), 'itemPage' => request('itemPage'), 'relicPage' => request('relicPage'), 'alPage' => request('alPage')])->fragment('equip')->links()}}
                                       @endif
                                       @if($itemSearch->count() >= 1)
                                       <table>
                                          <br>
                                          <h2 class="elementor-heading-title elementor-size-default" style="text-align: center;">Materials</h2>
                                          <br>
                                          <thead>
                                             <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">QTY</th>
                                                <th scope="col">Price</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             @foreach($itemSearch as $item)
                                             <tr>
                                                <td data-label="Name">
                                                   <a href="/item/material/{{$item->item_id}}">
                                                      {{ $item->name }}
                                                </td>
                                                <td data-label="QTY">{{ $item->quantity }}</td>
                                                <td data-label="Price">{{ number_format($item->price) }}</td>
                                             </tr>
                                             @endforeach
                                          </tbody>
                                       </table>
                                       {{$itemSearch->appends(['search' => request('search'), 'xtalPage' => request('xtalPage'), 'equipPage' => request('equipPage'), 'itemPage' => request('itemPage'), 'relicPage' => request('relicPage'), 'alPage' => request('alPage')])->fragment('material')->links() }}
                                       @endif
                                       @if($xtalSearch->count() >= 1)
                                       <table>
                                          <br>
                                          <h2 class="elementor-heading-title elementor-size-default" style="text-align: center;">Xtals</h2>
                                          <br>
                                          <thead>
                                             <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">QTY</th>
                                                <th scope="col">Price</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             @foreach ($xtalSearch as $xtal)
                                             <tr>
                                                <td data-label="Name"><a href="/item/xtal/{{$xtal->item_id}}">{{ $xtal->name }}</a></td>
                                                <td data-label="QTY">{{ $xtal->quantity }}</td>
                                                <td data-label="Price">{{ number_format($xtal->price) }}</td>
                                             </tr>
                                             @endforeach
                                          </tbody>
                                       </table>
                                       {{$xtalSearch->appends(['search' => request('search'), 'xtalPage' => request('xtalPage'), 'equipPage' => request('equipPage'), 'itemPage' => request('itemPage'), 'relicPage' => request('relicPage'), 'alPage' => request('alPage')])->fragment('xtal')->links()}}
                                       @endif
                                       @if($alSearch->count() >= 1)
                                       <table>
                                          <br>
                                          <h2 class="elementor-heading-title elementor-size-default" style="text-align: center;">AL's</h2>
                                          <br>
                                          <thead>
                                             <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Color</th>
                                                <th scope="col">QTY</th>
                                                <th scope="col">Price</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             @foreach($alSearch as $al)
                                             <tr>
                                                @if($al->color == "Red")
                                                <td data-label="Name" style="color:red;"><a style="color:red;" href="/item/alcrystas/{{$al->item_id}}">{{ $al->name }}</a></td>
                                                @elseif($al->color == "Blue")
                                                <td data-label="Name" style="color:blue;"><a style="color:blue;" href="/item/alcrystas/{{$al->item_id}}">{{ $al->name }}</a></td>
                                                @elseif($al->color == "Green")
                                                <td data-label="Name" style="color:green;"><a style="color:green;" href="/item/alcrystas/{{$al->item_id}}">{{ $al->name }}</a></td>
                                                @endif
                                                <td data-label="Color">{{ $al->color }}</td>
                                                <td data-label="QTY">{{ $al->quantity }}</td>
                                                <td data-label="Price">{{ number_format($al->price) }}</td>
                                             </tr>
                                             @endforeach
                                          </tbody>
                                       </table>
                                       {{$alSearch->appends(['search' => request('search'), 'xtalPage' => request('xtalPage'), 'equipPage' => request('equipPage'), 'itemPage' => request('itemPage'), 'relicPage' => request('relicPage'), 'alPage' => request('alPage')])->fragment('alcrystas')->links()}}
                                       @endif
                                       @if($relicSearch->count() >= 1)
                                       <table>
                                          <br>
                                          <h2 class="elementor-heading-title elementor-size-default" style="text-align: center;">Relics</h2>
                                          <br>
                                          <thead>
                                             <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">QTY</th>
                                                <th scope="col">Price</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             @foreach($relicSearch as $relic)
                                             <tr>
                                                <td data-label="Name"><a href="/item/relic/{{$relic->item_id}}">{{ $relic->name }}</a></td>
                                                <td data-label="QTY">{{ $relic->quantity }}</td>
                                                <td data-label="Price">{{ number_format($relic->price) }}</td>
                                             </tr>
                                             @endforeach
                                          </tbody>
                                       </table>
                                       {{$relicSearch->appends(['search' => request('search'), 'xtalPage' => request('xtalPage'), 'equipPage' => request('equipPage'), 'itemPage' => request('itemPage'), 'relicPage' => request('relicPage'), 'alPage' => request('alPage')])->fragment('reliccrystas')->links()}}
                                       @endif
                                    </div>
                                 </div>
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
      <link rel="icon" href="{{ asset('img/searchicon.png') }}" sizes="32x32" />
      <link rel="icon" href="{{ asset('img/searchicon.png') }}" sizes="192x192" />
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"   integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="   crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"   integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="   crossorigin="anonymous"></script>
      <script>
         $(document).ready(function() {
             
         $( "#search" ).autocomplete({
         
         source: function(request, response) {
             $.ajax({
             url: "{{secure_url('api/searchitem')}}",
             data: {
                     term : request.term
              },
             dataType: "json",
             success: function(data){
                var resp = $.map(data,function(obj){
                     return obj.name;
                }); 
         
                response(resp);
             }
         });
         },
         minLength: 3
         });
         });
      </script>
   </body>
</html>