<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <title> Add item | Iruna Global Stall</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="index, follow">
      <meta name="description" content="Find about Iruna Stall on how it used to find, buy and sell items for free! In the Iruna Global Stall, you can post your items as a seller and search for items without the need for registration.">
      <meta name="keywords" content="Iruna, Stall, Global, iruna, stall, global, Iruna Online, buy, sell, trade, about, Kian Brose, Kumar, Polowis, terms, service, contact">
      <meta name="hostname" content="irunastall.com">
      <meta name='subject' content="Iruna Global Stall Add Item">
      <meta name="author" content="Kian Brose">
      <meta name='coverage' content='Worldwide'>
      <meta name='distribution' content='Global'>
      <meta name='rating' content='General'>
      <meta name='HandheldFriendly' content='True'>
      <meta name='MobileOptimized' content='320'>
      <meta name='target' content='all'>
      <meta name="apple-mobile-web-app-title" content="Add item | Iruna Global Stall">
      <meta name='apple-mobile-web-app-capable' content='yes'>
      <meta name='apple-touch-fullscreen' content='yes'>
      <meta name='apple-touch-fullscreen' content='yes'>
      <meta name='application-name' content="Iruna Global Stall">
      <link rel="apple-touch-icon" href="https://irunastall.com/img/iruna.jpg">
      <meta name="twitter:card" content="summary">
      <meta name="twitter:title" content="Add item | Iruna Global Stall">
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
      <link href="{{asset('css/additem.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('css/mainsearchbar.css') }}">
      <link rel="stylesheet" href="{{ asset('css/autocomplete.css') }}">
      <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">

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
                                          <a href="https://irunastall.com/">
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
               <section class="elementor-element elementor-element-16e6ebd elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="16e6ebd" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="background-color:#00a5ff;">
                  <div class="elementor-container elementor-column-gap-default">
                     <div class="elementor-row">
                        <div class="elementor-element elementor-element-9a97296 elementor-column elementor-col-100 elementor-top-column" data-id="9a97296" data-element_type="column">
                           <div class="elementor-column-wrap  elementor-element-populated">
                              <div class="elementor-widget-wrap">
                                 <div class="elementor-element elementor-element-6d1da58 elementor-widget elementor-widget-heading" data-id="6d1da58" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <h2 class="elementor-heading-title elementor-size-default">Add item</h2>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-fa9d1bf elementor-widget elementor-widget-text-editor" data-id="fa9d1bf" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-text-editor elementor-clearfix">
                                          <p style="color:white;">Welcome to the add item page! If this is your first time here, please refer to this <a href="https://irunastall.com/tutorial" style="color:orange;">quick guide</a> on how to add an item!</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-944d886 elementor-widget elementor-widget-text-editor" data-id="944d886" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                       <div class="elementor-text-editor elementor-clearfix">
                                          <select name="itemtype" class="form-control2" id="itemtype">
                                             <option>Choose type</option>
                                             <option value="1">Equipment</option>
                                             <option value="2">Items</option>
                                             <option value="3">Xtal</option>
                                             <option value="4">AL Crystal</option>
                                             <option value="5">Relic</option>
                                          </select>
                                          <div id="equip" style="display:none;">
                                             <form action="/createEquip" method="POST" id="equipform">
                                                <tr>
                                                   <div class="form__group field">
                                                      <input type="input" class="form__field" placeholder="EquipmentName" name="equipment" id='equipment' required />
                                                      <label for="equipment" class="form__label">Equipment Name</label>
                                                   </div>
                                                </tr>
                                                <tr>
                                                   <div class="form__group field">
                                                      <input type="input" class="form__field" placeholder="ATK" name="atk" id='atk' required />
                                                      <label for="atk" class="form__label">ATK</label>
                                                   </div>
                                                </tr>
                                                <tr>
                                                   <div class="form__group field">
                                                      <input type="input" class="form__field" placeholder="DEF" name="def" id='def' required />
                                                      <label for="def" class="form__label">DEF</label>
                                                   </div>
                                                </tr>
                                                <tr>
                                                   <br>
                                                   <td>
                                                      <label for="Test" style="color:white;">Refinement:</label>
                                                   </td>
                                                   <td style="padding-left:10px;">
                                                      <select name="refinement" class="form-control2" id="refinement">
                                                         <option selected value="0">0</option>
                                                         <option value="1">1</option>
                                                         <option value="2">2</option>
                                                         <option value="3">3</option>
                                                         <option value="4">4</option>
                                                         <option value="5">5</option>
                                                         <option value="6">6</option>
                                                         <option value="7">7</option>
                                                         <option value="8">8</option>
                                                         <option value="9">9</option>
                                                      </select>
                                                      <br>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <br>
                                                   <td>
                                                      <label for="type" style="color:white;">Type:</label>
                                                   </td>
                                                   <td style="padding-left:10px;">
                                                      <select name="type" class="form-control2" id="type">
                                                         <option selected>Weapon</option>
                                                         <option>Body</option>
                                                         <option>Additional</option>
                                                         <option>Special</option>
                                                      </select>
                                                      <br>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <br>
                                                   <td>
                                                      <label for="Test" style="color:white;">Slots:</label>
                                                   </td>
                                                   <td style="padding-left:10px;">
                                                      <select name="equipslotamount" class="form-control2" id="equipslotamount">
                                                         <option selected value="0">0</option>
                                                         <option value="1">1</option>
                                                         <option value="2">2</option>
                                                      </select>
                                                   </td>
                                                </tr>
                                                <br>
                                                <div id="slot1" style="display:none;">
                                                   <tr>
                                                      <div class="form__group field">
                                                         <input type="input" class="form__field" placeholder="Slot1" name="slot1" id='slot1' required />
                                                         <label for="slot1" class="form__label crystas">Slot 1</label>
                                                      </div>
                                                   </tr>
                                                </div>
                                                <div id="slot2" style="display:none;">
                                                   <tr>
                                                      <div class="form__group field">
                                                         <input type="input" class="form__field" placeholder="Slot2" name="slot2" id='slot2' required />
                                                         <label for="slot2" class="form__label crystas">Slot 2</label>
                                                      </div>
                                                   </tr>
                                                </div>
                                                <br>
                                                <tr>
                                                   <td>
                                                      
                                                      <label for="Test" style="color:white;">Ability:</label>
                                                   </td>
                                                   <td style="padding-left:10px;">
                                                      <select name="abidrop" class="form-control2" id="abidrop">
                                                         <option selected value="0">No</option>
                                                         <option value="1">Yes</option>
                                                      </select>
                                                   </td>
                                                   <br>
                                                </tr>
                                                <div id="hasabil" style="display:none;">
                                                   <tr>
                                                      <div class="form__group field">
                                                         <input type="input" class="form__field" placeholder="AbilityName" name="ability" id='ability' required />
                                                         <label for="ability" class="form__label">Ability name</label>
                                                      </div>
                                                   </tr>
                                                   <tr>
                                                      <div class="form__group field">
                                                         <input type="input" class="form__field" placeholder="AbilityLevel" name="abilitylevel" id='abilitylevel' required />
                                                         <label for="abilitylevel" class="form__label">Ability level</label>
                                                      </div>
                                                   </tr>
                                                </div>
                                                <tr>
                                                   <div class="form__group field">
                                                      <input type="input" class="form__field" placeholder="EquipmentPrice" name="equipmentprice" id='equipmentprice' required />
                                                      <label for="equipmentprice" class="form__label">Price</label>
                                                   </div>
                                                </tr>
                                                <br>
                                                <div class="elementor-element elementor-element-5580a03 elementor-widget elementor-widget-button" data-id="5580a03" data-element_type="widget" data-widget_type="button.default">
                                                   <div class="elementor-widget-container">
                                                      <div class="elementor-button-wrapper">
                                                         <a href="javascript:{}" onclick="document.getElementById('equipform').submit();" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-grow" role="button">
                                                         <span class="elementor-button-content-wrapper">
                                                         <span class="elementor-button-icon elementor-align-icon-right">
                                                         <i aria-hidden="true" class="fas fa-chevron-right"></i>      
                                                         </span>
                                                         <span class="elementor-button-text">Add item</span>
                                                         </span>
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div id="item" style="display:none;">
                                             <form action="/createItem" method="POST" id="itemform">
                                                <tr>
                                                   <div class="form__group field">
                                                      <input type="input" class="form__field" placeholder="ItemName" name="material" id='material' required />
                                                      <label for="material" class="form__label">Item Name</label>
                                                   </div>
                                                </tr>
                                                <tr>
                                                   <div class="form__group field">
                                                      <input type="input" class="form__field" placeholder="QTY" name="qty" id='qty' required />
                                                      <label for="qty" class="form__label">Quantity</label>
                                                   </div>
                                                </tr>
                                                <tr>
                                                   <div class="form__group field">
                                                      <input type="input" class="form__field" placeholder="ItemPrice" name="itemprice" id='itemprice' required />
                                                      <label for="itemprice" class="form__label">Price</label>
                                                   </div>
                                                </tr>
                                                <br>
                                                <div class="elementor-element elementor-element-5580a03 elementor-widget elementor-widget-button" data-id="5580a03" data-element_type="widget" data-widget_type="button.default">
                                                   <div class="elementor-widget-container">
                                                      <div class="elementor-button-wrapper">
                                                         <a href="javascript:{}" onclick="document.getElementById('itemform').submit();" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-grow" role="button">
                                                         <span class="elementor-button-content-wrapper">
                                                         <span class="elementor-button-icon elementor-align-icon-right">
                                                         <i aria-hidden="true" class="fas fa-chevron-right"></i>      
                                                         </span>
                                                         <span class="elementor-button-text">Add item</span>
                                                         </span>
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div id="xtal" style="display:none;">
                                             <form action="/createXtal" method="POST" id="xtalform">
                                                <tr>
                                                   <div class="form__group field">
                                                      <input type="input" class="form__field" placeholder="XtalName" name="xtalname" id='xtalname' required />
                                                      <label for="xtalname" class="form__label">Xtal Name</label>
                                                   </div>
                                                </tr>
                                                <tr>
                                                   <div class="form__group field">
                                                      <input type="input" class="form__field" placeholder="XtalQTY" name="xtalqty" id='xtalqty' required />
                                                      <label for="xtalqty" class="form__label">Quantity</label>
                                                   </div>
                                                </tr>
                                                <tr>
                                                   <div class="form__group field">
                                                      <input type="input" class="form__field" placeholder="XtalPrice" name="xtalprice" id='xtalprice' required />
                                                      <label for="xtalprice" class="form__label">Price</label>
                                                   </div>
                                                </tr>
                                                <br>
                                                <div class="elementor-element elementor-element-5580a03 elementor-widget elementor-widget-button" data-id="5580a03" data-element_type="widget" data-widget_type="button.default">
                                                   <div class="elementor-widget-container">
                                                      <div class="elementor-button-wrapper">
                                                         <a href="javascript:{}" onclick="document.getElementById('xtalform').submit();" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-grow" role="button">
                                                         <span class="elementor-button-content-wrapper">
                                                         <span class="elementor-button-icon elementor-align-icon-right">
                                                         <i aria-hidden="true" class="fas fa-chevron-right"></i>      
                                                         </span>
                                                         <span class="elementor-button-text">Add item</span>
                                                         </span>
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div id="al" style="display:none;">
                                             <form action="/createAi" method="POST" id="alform">
                                                <tr>
                                                   <div class="form__group field">
                                                      <input type="input" class="form__field" placeholder="AlName" name="alcrystas" id='alcrystas' required />
                                                      <label for="alcrystas" class="form__label">AL Name</label>
                                                   </div>
                                                </tr>
                                                <tr>
                                                   <div class="form__group field">
                                                      <input type="input" class="form__field" placeholder="AlQTY" name="alqty" id='alqty' required />
                                                      <label for="alqty" class="form__label">Quantity</label>
                                                   </div>
                                                </tr>
                                                <tr>
                                                   <br>
                                                   <td>
                                                      <label for="color" style="color:white;">Color:</label>
                                                   </td>
                                                   <td style="padding-left:10px;">
                                                      <select name="color" class="form-control2" id="color">
                                                         <option selected>Red</option>
                                                         <option>Green</option>
                                                         <option>Blue</option>
                                                      </select>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <div class="form__group field">
                                                      <input type="input" class="form__field" placeholder="AlPrice" name="alprice" id='alprice' required />
                                                      <label for="alprice" class="form__label">Price</label>
                                                   </div>
                                                </tr>
                                                <br>
                                                <div class="elementor-element elementor-element-5580a03 elementor-widget elementor-widget-button" data-id="5580a03" data-element_type="widget" data-widget_type="button.default">
                                                   <div class="elementor-widget-container">
                                                      <div class="elementor-button-wrapper">
                                                         <a href="javascript:{}" onclick="document.getElementById('alform').submit();" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-grow" role="button">
                                                         <span class="elementor-button-content-wrapper">
                                                         <span class="elementor-button-icon elementor-align-icon-right">
                                                         <i aria-hidden="true" class="fas fa-chevron-right"></i>      
                                                         </span>
                                                         <span class="elementor-button-text">Add item</span>
                                                         </span>
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div id="relic" style="display:none;">
                                             <form action="/createRelic" method="POST" id="relicform">
                                                <tr>
                                                   <div class="form__group field">
                                                      <input type="input" class="form__field" placeholder="RelicName" name="relicname" id='relicname' required />
                                                      <label for="relicname" class="form__label">Relic Name</label>
                                                   </div>
                                                </tr>
                                                <tr>
                                                   <div class="form__group field">
                                                      <input type="input" class="form__field" placeholder="RelicQTY" name="relicqty" id='relicqty' required />
                                                      <label for="relicqty" class="form__label">Quantity</label>
                                                   </div>
                                                </tr>
                                                <tr>
                                                   <div class="form__group field">
                                                      <input type="input" class="form__field" placeholder="RelicPrice" name="relicprice" id='relicprice' required />
                                                      <label for="relicprice" class="form__label">Price</label>
                                                   </div>
                                                </tr>
                                                <br>
                                                <div class="elementor-element elementor-element-5580a03 elementor-widget elementor-widget-button" data-id="5580a03" data-element_type="widget" data-widget_type="button.default">
                                                   <div class="elementor-widget-container">
                                                      <div class="elementor-button-wrapper">
                                                         <a href="javascript:{}" onclick="document.getElementById('relicform').submit();" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-grow" role="button">
                                                         <span class="elementor-button-content-wrapper">
                                                         <span class="elementor-button-icon elementor-align-icon-right">
                                                         <i aria-hidden="true" class="fas fa-chevron-right"></i>      
                                                         </span>
                                                         <span class="elementor-button-text">Add item</span>
                                                         </span>
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script type="text/javascript">    
         $('#itemtype').on('change',function(){
         var selection = $(this).val();
          switch(selection)
          {
            case "1":
              $("#equip").show()
              $("#item").hide()
              $("#xtal").hide()
              $("#al").hide()
              $("#relic").hide()
              break;
            case "2":
              $("#equip").hide()
              $("#item").show()
              $("#xtal").hide()
              $("#al").hide()
              $("#relic").hide()
              break;
            case "3":
              $("#equip").hide()
              $("#item").hide()
              $("#xtal").show()
              $("#al").hide()
              $("#relic").hide()
              break;
            case "4":
              $("#equip").hide()
              $("#item").hide()
              $("#xtal").hide()
              $("#al").show()
              $("#relic").hide()
              break;
            case "5":
              $("#equip").hide()
              $("#item").hide()
              $("#xtal").hide()
              $("#al").hide()
              $("#relic").show()
              break;
            default:
              $("#equip").hide()
              $("#item").hide()
              $("#xtal").hide()
              $("#al").hide()
              $("#relic").hide()
              break;
          }
         });
         $('#equipslotamount').on('change',function(){
         var selection = $(this).val();
          switch(selection)
          {
            case "0":
              $("#slot1").hide()
              $("#slot2").hide()
              $("#equip").show()
              break;
            case "1":
              $("#slot1").show()
              $("#slot2").hide()
              $("#equip").show()
              break;
            case "2":
              $("#slot1").show()
              $("#slot2").show()
              $("#equip").show()
              break;
            default:
              $("#slot1").hide()
              $("#slot2").hide()
              $("#equip").hide()
              $("#item").hide()
              $("#xtal").hide()
              $("#al").hide()
              $("#relic").hide()
              break;
          }
         });
         $('#abidrop').on('change',function(){
         var selection = $(this).val();
          switch(selection)
          {
            case "0":
              $("#hasabil").hide()
              $("#equip").show()
              break;
            case "1":
              $("#hasabil").show()
              $("#equip").show()
              break;
            default:
              $("#hasabil").hide()
              $("#slot1").hide()
              $("#slot2").hide()
              $("#equip").hide()
              $("#item").hide()
              $("#xtal").hide()
              $("#al").hide()
              $("#relic").hide()
              break;
          }
         });
      </script>
      <script>
   $(document).ready(function() {
      
      $( "#ability" ).autocomplete({
         source: function(request, response) {
            $.ajax({
            url: "{{secure_url('api/searchability')}}",
            data: {
                  term : request.term
            },
            dataType: "json",
            success: function(data){
            var resp = $.map(data,function(obj){
                  return obj.type;
            }); 

            response(resp);
            }
         });
      },
      minLength: 3
      });

      $( "#equipment" ).autocomplete({
         source: function(request, response) {
            $.ajax({
            url: "{{secure_url('api/searchequip')}}",
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
      $( "#alcrystas" ).autocomplete({
         source: function(request, response) {
            $.ajax({
            url: "{{secure_url('api/searchal')}}",
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

      $( "#material" ).autocomplete({
         source: function(request, response) {
            $.ajax({
            url: "{{secure_url('api/searchmaterial')}}",
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
      $( "#relicname" ).autocomplete({
         source: function(request, response) {
            $.ajax({
            url: "{{secure_url('api/searchrelic')}}",
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

      $( ".crystas" ).autocomplete({
         source: function(request, response) {
            $.ajax({
            url: "{{secure_url('api/searchcrystas')}}",
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