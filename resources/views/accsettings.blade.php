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
      <link rel="stylesheet" type="text/css" href="{{ asset('css/NewIrunaStall/profilesettings.css') }}">
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
                  <h1 class="title">Account Settings</h1>
               </div>
               <div class="col">
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col">
               </div>
               <div class="col-10">
                  <div class="pctablet">
                     <form>
                        <div class="form-row align-items-center">
                           <div class="col-10">
                              <label class="sr-only" for="inlineFormInputGroup">FB Link</label>
                              <div class="input-group mb-2">
                                 <div class="input-group-prepend">
                                    <div class="input-group-text">https://www.facebook.com/</div>
                                 </div>
                                 <input type="email" class="form-control" id="inlineFormInputGroup" placeholder="your.facebook.name">
                              </div>
                           </div>
                           <div class="col-2">
                              <button type="submit" class="btn btn-primary mb-2">Save</button>
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
                                 <input type="email" class="form-control" id="inlineFormInputGroup" placeholder="197766618732953601">
                              </div>
                           </div>
                           <div class="col-2">
                              <button type="submit" class="btn btn-primary mb-2">Save</button>
                           </div>
                        </div>
                        <p><a style="color:white;" href="https://support.discord.com/hc/en-us/articles/206346498-Where-can-I-find-my-User-Server-Message-ID-">How to get Discord ID?</a></p>
                     </form>
                     <form>
                        <div class="form-row align-items-center">
                           <div class="col-10">
                              <label class="sr-only" for="inlineFormInputGroup"></label>
                              <div class="input-group mb-2">
                                 <div class="input-group-prepend">
                                    <div class="input-group-text">Whatsapp Number</div>
                                 </div>
                                 <input type="email" class="form-control" id="inlineFormInputGroup" placeholder="+xxxxxxxxxxx">
                              </div>
                           </div>
                           <div class="col-2">
                              <button type="submit" class="btn btn-primary mb-2">Save</button>
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
                              <button type="submit" class="btn btn-primary mb-2">Save</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="mobileonly">
                     <form style="height: 96px;">
                        <div class="form-group">
                           <label for="Facebook" style="color: white; font-weight: 700; font-size: 25px; ">Facebook</label>
                           <input type="email" class="form-control" id="Facebook" aria-describedby="emailHelp" placeholder="Facebook profile link">
                           <small id="emailHelp" class="form-text text-muted" style="color:white !important;">Use following format: https://www.facebook.com/your.name</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                     </form>
                     <br><br><br><br>
                     <hr>
                     <form style="height: 96px;">
                        <div class="form-group">
                           <label for="Discord" style="color: white; font-weight: 700; font-size: 25px; ">Discord</label>
                           <input type="email" class="form-control" id="Discord" aria-describedby="emailHelp" placeholder="Enter Discord ID">
                           <small id="emailHelp" class="form-text text-muted" style="color:white !important;"><a style="color:red;" href="https://support.discord.com/hc/en-us/articles/206346498-Where-can-I-find-my-User-Server-Message-ID-">How to get Discord ID</a>. Example: 197766618732953601</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                     </form>
                     <br><br><br><br>
                     <hr>
                     <form style="height: 96px;">
                        <div class="form-group">
                           <label for="Whatsapp" style="color: white; font-weight: 700; font-size: 25px; ">Whatsapp</label>
                           <input type="email" class="form-control" id="Whatsapp" aria-describedby="emailHelp" placeholder="Enter number">
                           <small id="emailHelp" class="form-text text-muted" style="color:white !important;">Number with region code (+xy +xyz)</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                     </form>
                     <br><br><br><br>
                     <hr>
                     <form style="height: 96px;">
                        <div class="form-group">
                           <label for="Snapchat" style="color: white; font-weight: 700; font-size: 25px; ">Snapchat</label>
                           <input type="email" class="form-control" id="Snapchat" aria-describedby="emailHelp" placeholder="Enter username">
                           <small id="emailHelp" class="form-text text-muted" style="color:white !important;">Snapchat username people use to add you</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                     </form>
                     <br><br><br><br>
                  </div>
                  <hr>
                  <h2 style="color:white;">Change password</h2>
                  <form>
                     <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                           <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                           <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                     </div>
                     <div class="form-group row">
                        <div class="col-sm-auto">
                           <button type="submit" class="btn btn-primary resetbutton">Reset password</button>
                        </div>
                     </div>
                  </form>
                  <br><br>
                  <hr>
                  <h2 style="color:red;">Delete account & all posts</h2>
                  <form>
                     <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                           <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                           <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                     </div>
                     <div class="form-group row">
                        <div class="col-sm-auto">
                           <button type="submit" class="btn btn-primary deletebutton">Delete account</button>
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