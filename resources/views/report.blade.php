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
      <link rel="stylesheet" type="text/css" href="{{ asset('css/NewIrunaStall/additem.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/NewIrunaStall/contentpage.css') }}">
      <!-- Bootstrap css-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <!-- FontAwesome -->
      <script src="https://use.fontawesome.com/69ee5d596f.js"></script>
      <style type="text/css">
        body{
          font-family: 'Montserrat', sans-serif;
          font-weight: 500px;
          color: white;
        }
      </style>
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
                  <h1 class="title">Report</h1>
               </div>
               <div class="col">
               </div>
            </div>
         </div>
         <div class="container itemaddfield">
            <div class="row">
               <div class="col">
               </div>
               <div class="col-10">

                  <form class="needs-validation" novalidate>
                    <fieldset disabled>
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <label for="validationCustomUsername">Report</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">User</span>
                          </div>
                          <input type="email" class="form-control" id="validationCustomUsername disabledTextInput" placeholder="UserToReport" aria-describedby="inputGroupPrepend" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <label for="validationCustomUsername">Report by</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">User</span>
                          </div>
                          <input type="email" class="form-control" id="validationCustomUsername disabledTextInput" placeholder="UserReporting" aria-describedby="inputGroupPrepend" required>
                        </div>
                      </div>
                    </div>
                  </fieldset>


                  <div class="form-group">
                    <label for="reason">Reason for report</label>
                    <select class="form-control" id="reason">
                      <option value="0">The user scammed you (We will ask for more details via Email)</option>
                      <option value="1">The price listed is ridiculous/fake/misleading</option>
                      <option value="2">Some items are no longer for sale</option>
                      <option value="3">Seller refuses to sell item</option>
                      <option value="4">Seller's contact information is broken/doesn't work</option>
                      <option value="5">Seller hasn't replied to messages in over 48 hours</option>
                    </select>
                  </div>

                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                          Agree to <a href="/about">terms and conditions</a>
                        </label>
                        <div class="invalid-feedback">
                          You must agree before submitting.
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-primary report-button" type="submit">Submit report</button>
                    </div>
                  </form>

                  <script>
                  // Example starter JavaScript for disabling form submissions if there are invalid fields
                  (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                      // Fetch all the forms we want to apply custom Bootstrap validation styles to
                      var forms = document.getElementsByClassName('needs-validation');
                      // Loop over them and prevent submission
                      var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                          if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                          }
                          form.classList.add('was-validated');
                        }, false);
                      });
                    }, false);
                  })();
                  </script>

               </div>
               <div class="col">
               </div>
            </div>
         </div>
      </section>
      @include('layouts/NewIrunaStall.footer')
   </body>
</html>