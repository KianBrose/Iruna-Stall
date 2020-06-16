<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Iruna Global Stall | Iruna Online</title>
      <meta name="description" content="IrunaStall">
      <meta name="author" content="Kian Brose">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="index, follow">
      <meta name="description" content="Iruna Stall is a platform to find, buy and sell items for free! In the Iruna Global Stall, you can post your items as a seller and search for items as a buyer. The stall is free to use and requires no account to search for items.">
      <meta name="keywords" content="Iruna, Stall, Global, iruna, stall, global, Iruna Online, buy, sell, trade, Iruna enchanter skills, Iruna struggler, Iruna monk, Iruna online classes, samurai, ninja, leveling, dragon, crystal, quest, Toram online">
      <meta name="hostname" content="irunastall.com">
      <meta name='subject' content="Iruna Global Stall">
      <meta name="author" content="Kian Brose">
      <meta name='coverage' content='Worldwide'>
      <meta name='distribution' content='Global'>
      <meta name='rating' content='General'>
      <meta name='HandheldFriendly' content='True'>
      <meta name='MobileOptimized' content='320'>
      <meta name='target' content='all'>
      <meta name="apple-mobile-web-app-title" content="Iruna Global Stall">
      <meta name='apple-mobile-web-app-capable' content='yes'>
      <meta name='apple-touch-fullscreen' content='yes'>
      <link rel="apple-touch-icon" href="https://irunastall.com/img/iruna.jpg">
      <meta name="twitter:card" content="summary">
      <meta name="twitter:title" content="Iruna Global Stall">
      <meta name="twitter:description" content="Iruna global stall is platform to find, buy and sell items of Iruna online game. Account is not needed for searching for items">
      <meta property="og:title" content="Iruna Stall">
      <meta property="og:type" content="website">
      <meta property="og:image" content="https://irunastall.com/img/iruna.jpg">
      <meta property="og:description" content="Find, buy and sell items for free on the Iruna Online Global Stall! In the Global Stall, you can post your items as a seller and search for items as a buyer. The stall is free to use and requires no account to search for items.">
      <meta name='application-name' content="Iruna Global Stall">
      <meta property="og:url" content="https://irunastall.com">
      <link rel="canonical" href="https://irunastall.com">

      <!-- Montserrat font -->
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
      <!-- Main CSS file -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/NewIrunaStall/main.css') }}">
      <!-- Bootstrap css-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <!-- FontAwesome -->
      <script src="https://use.fontawesome.com/69ee5d596f.js"></script>
   </head>
   <body>
      <!-- Bootstrap js -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      <section class="mainsection">
      @include('layouts/NewIrunaStall.navbar')
      <div class="centraltext">
         <span>Hi! What are you looking for today?</span>
      </div>
      <div id="cover">
         <form method="get" class="searchform" action="">
            <div class="inner">
               <div class="tb">
                  <div class="td"><input type="text" id="search" placeholder="Search" class="maininput ui-autocomplete-input" autocomplete="off" required></div>
               </div>
            </div>
         </form>
      </div>
      <div class="row justify-content-center buttondiv">
         <div class="col-4">
            <a href="tutorial">
               <span class="tutorial">How it works</span>
            </a>
         </div>
         <div class="col-4">
            <a href="/search?search_button=Search">
               <span class="browse">Browse items</span>
            </a>
         </div>
      </div>
      </section>
      @include('layouts/NewIrunaStall.footer')
      <script type="text/javascript">
        $(document).ready(function() {
            
        $( "#search" ).autocomplete({
       
                 source: function(request, response) {
                     $.ajax({
                     url: "https://irunastall.com/api/searchitem",
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