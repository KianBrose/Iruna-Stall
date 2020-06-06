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
      <link rel="stylesheet" type="text/css" href="{{ asset('css/NewIrunaStall/contentpage.css') }}">
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
      <div class="container">
        <div class="row">
          <div class="col">
          </div>
          <div class="col-6-auto">
            <h1 class="title">Tutorial</h1>
          </div>
          <div class="col">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col">
          </div>
          <div class="col-12">
            <br><h1 class="pagecontenttitle">Buyer tutorial & How it works:</h1>

            <br><h1 class="pagecontent">As a buyer, you do not need to register an account to search for items.<br>
            To search for an item, simply go to our main page and enter the item name of the item you want to search for. You can also press the "<a href="/search?search_button=Search">Browse All</a>" button to view all items we currently have.<br>
            Once you found the item you want, press/click on the buyer's name in the Contact row to go to the seller's profile. You will find his/her contact information there so you can negotiate and arrange a place to trade.<br><br>

            To search for abilities inside equipment, enter the ability name into the search bar and press Search. Please note that the autofill function will not suggest ability names, so the abilities have to be entered manually.<br><br>

            Searching for XTALS will also display equipment with the XTAL inside it</h1>

            <br><h1 class="pagecontenttitle">Seller tutorial</h1>

            <br><h1 class="pagecontent">As a seller, you need to <a href="/register">register an account</a> to be able to post items in our database.<br><br>

            Once you have created your account, go to the <a href="/account">Account</a> page to enter your contact information. If a buyer is interested in any of your items you will get contacted through our 2 available methods: Facebook and Discord (We plan on adding more later).<br><br>

            If you have entered contact information, please head to the <a href="/additem">Add item page</a> to be able to add items of any category.<br><br>

            Please note that the prices have to be entered in full numerical values without symbols or spaces, example: 750000000<br>
            We also support pricing in the following formats: 1k 1K 1m 1M 1b 1B (Note: Decimal values such as 155.5M will not work)<br><br>

            Please enter the price per item when adding Materials, Xtals, ALs and Relics</h1>
          </div>
          <div class="col">
          </div>
        </div>
      </div>
      </section>
      @include('layouts/NewIrunaStall.footer')
   </body>
</html>