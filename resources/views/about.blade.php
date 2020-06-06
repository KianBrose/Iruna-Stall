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
            <h1 class="title">About, Contact, Privacy Policy & TOS</h1>
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
            <br><h1 class="pagecontent">The Iruna Online Global Stall is a project developed by kumars_gaming#9072, Polowis#4441 and Kian#4093 that aims to facilitate the process of buying and selling items from the game Iruna Online. On this website, you can search for items stored on our database or post items as a seller. Iruna Global Stall is in no way endorsed or affiliated to Iruna or Asobimo. The name Iruna and all of it’s assets belong to ASOBIMO. We are accepting donations to keep this project alive here: <a href="https://paypal.me/kianbrosebrito">https://paypal.me/kianbrosebrito</a></h1>

            <br><h1 class="pagecontenttitle">Contact/Suggestions</h1>

            <br><h1 class="pagecontent">Contact Kian#4093 on discord if you have any difficulties, problems or suggestions about our site. If you wish to talk to us directly please join the Iruna online discord using the following link: https://discord.gg/NH75NqA</h1>

            <br><h1 class="pagecontenttitle">Terms of Service</h1>

            <br><h1 class="pagecontent">By signing up to our service, you agree that you are 14 years old or older and let us store information such as email, passwords, usernames and email addresses so we can provide you with the best possible experience.<br><br>

            We reserve the right to delete and modify your information without notice. This would only happen in rare occasions where your account is believed to be related to fraudulent activity.<br><br>

            You are not allowed to create multiple accounts. Anyone having created multiple accounts will have all of the duplicate accounts permanently terminated without notice when discovered.<br><br>

            When posting an item in our “Add Items” page, you are not allowed to enter a “fake price” to make your post appear higher than others on the search rankings. Anyone discovered doing this activity will have their post removed and their account heavily penalized.<br><br>

            You are not allowed to have over 4 posts of the same item (at the exception of equipment) since we have a quantity system set in place, simply put your available quantity all into one item.<br><br>

            If you have been scammed and have proof of fraudulent activity, please send us an email with proof so we can review it and add it to the scammer page.<br><br>

            <b><u>We do not take responsibility for any loss of funds, be it digital currency of real money that may be caused by scammers.</u></b> Inactive accounts will be automatically terminated after 3 months of inactivity. Posts will be automatically removed 1 month after they get posted.</h1>

            <br><h1 class="pagecontenttitle">Privacy Policy</h1>

            <br><h1 class="pagecontent">We do not sell, distribute or share any information about our users to any 3rd parties. We store information about our users such as email, hashed passwords, ip addresses and usernames so we can provide our service.<br>
            You have access to your data at all times and can delete it all anytime by going to the “Account” page and deleting all of your data.</h1>
          </div>
          <div class="col">
          </div>
        </div>
      </div>
      </section>
      @include('layouts/NewIrunaStall.footer')
   </body>
</html>