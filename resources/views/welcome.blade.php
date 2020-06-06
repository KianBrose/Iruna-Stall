<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>IrunaStall</title>
      <meta name="description" content="IrunaStall">
      <meta name="author" content="Kian Brose">
      <meta name="viewport" content="width=device-width, initial-scale=1">
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
      @include('layouts/newIrunaStall.navbar')
      <div class="centraltext">
         <span>Hi! What are you looking for today?</span>
      </div>
      <div id="cover">
         <form method="get" class="searchform" action="">
            <div class="inner">
               <div class="tb">
                  <div class="td"><input type="text" placeholder="Search" class="maininput" required></div>
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
      <section>
        <div class="mainfooter">
        <div class="footer1">
            <h1>Information</h1>
            <h4><a href="/updates">Update log</a></h4>
            <h4><a href="/updates">Upcomming features</a></h4>
            <h4><a href="/updates">Price check(comming soon)</a></h4>
            <h4><a href="/updates">Wiki(comming soon)</a></h4>
        </div>
        <div class="footer2">
            <h1>Additional Links</h1>
            <h4><a href="/about">About us</a></h4>
            <h4><a href="/about">Contact us</a></h4>
            <h4><a href="/about">Terms & Conditions</a></h4>
            <h4><a href="/about">Privacy policy</a></h4>
        </div>
        <div class="footer3" style="vertical-align: top;">
            <h1>Support us</h1>
            <h4><a href="/updates" style="color:#ff5300;">Donate</a></h4>
            <h4><a href="/updates">Contribute to the project</a></h4>   
        </div>
      </div>

      </section>
   </body>
</html>