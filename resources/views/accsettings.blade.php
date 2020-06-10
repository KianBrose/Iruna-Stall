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
                  <h1 class="title">Add item</h1>
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

                  <form>
                    <div class="form-row align-items-center">
                      <div class="col-10">
                        <label class="sr-only" for="inlineFormInputGroup">FB Link</label>
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text">Facebook Link</div>
                          </div>
                          <input type="email" class="form-control" id="inlineFormInputGroup" placeholder="ex: https://www.facebook.com/kian.brosebrito">
                        </div>
                      </div>
                      <div class="col-2">
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                      </div>
                    </div>
                  </form>
                  <form>
                    <div class="form-row align-items-center">
                      <div class="col-10">
                        <label class="sr-only" for="inlineFormInputGroup">Discord ID</label>
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text">Discord ID</div>
                          </div>
                          <input type="email" class="form-control" id="inlineFormInputGroup" placeholder="ex: 197766618732953601">
                        </div>
                      </div>
                      <div class="col-2">
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                      </div>
                    </div>
                  </form>
                  <form>
                    <div class="form-row align-items-center">
                      <div class="col-10">
                        <label class="sr-only" for="inlineFormInputGroup"></label>
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text">Whatsapp Number</div>
                          </div>
                          <input type="email" class="form-control" id="inlineFormInputGroup" placeholder="ex: +xxxxxxxxxxx">
                        </div>
                      </div>
                      <div class="col-2">
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                      </div>
                    </div>
                  </form>
                  <form>
                    <div class="form-row align-items-center">
                      <div class="col-10">
                        <label class="sr-only" for="inlineFormInputGroup"></label>
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text">Snapchat Name</div>
                          </div>
                          <input type="email" class="form-control" id="inlineFormInputGroup" placeholder="Snapchat Username">
                        </div>
                      </div>
                      <div class="col-2">
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                      </div>
                    </div>
                  </form>

               </div>
               <div class="col">
               </div>
            </div>
         </div>
      </section>
      @include('layouts/NewIrunaStall.footer')
   </body>
</html>