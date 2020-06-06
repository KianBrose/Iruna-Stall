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
                <select class="form-control" id="itemtype">
                  <option value="0">Choose type</option>
                  <option value="1">Equipment</option>
                  <option value="2">Item / Material</option>
                  <option value="3">Xtal</option>
                  <option value="4">AL Crystal</option>
                  <option value="5">Relic</option>
                </select>
                <br>


                  <form id="equip" style="display: none">
                     <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Item Name</span>
                      </div>
                      <input type="email" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>
                     <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="ItemATK">ATK</label>
                        <input type="email" class="form-control" id="ItemATK" placeholder="ATK">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="ItemDEF">DEF</label>
                        <input type="email" class="form-control" id="ItemDEF" placeholder="DEF">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="ItemRefinement">Refinement</label>
                        <select id="ItemRefinement" class="form-control">
                          <option value="0">+0</option>
                          <option value="1">+1</option>
                          <option value="2">+2</option>
                          <option value="3">+3</option>
                          <option value="4">+4</option>
                          <option value="5">+5</option>
                          <option value="6">+6</option>
                          <option value="7">+7</option>
                          <option value="8">+8</option>
                          <option value="9">+9</option>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="WeaponType">Type</label>
                        <select id="WeaponType" class="form-control">
                          <option selected>Choose...</option>
                          <option value="weapon">Weapon</option>
                          <option value="body">Body</option>
                          <option value="additional">Additional</option>
                          <option value="special">Special</option>
                        </select>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><input type="checkbox" aria-label="Slot 1"></span>
                        <span class="input-group-text">Slot 1</span>
                      </div>
                      <input type="email" class="form-control" aria-label="Slot 1 XTAL name">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><input type="checkbox" aria-label="Slot 2"></span>
                        <span class="input-group-text">Slot 2</span>
                      </div>
                      <input type="email" class="form-control" aria-label="Slot 2 XTAL name">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><input type="checkbox" aria-label="Ability"></span>
                        <span class="input-group-text">Ability</span>
                      </div>
                      <input type="email" class="form-control" aria-label="Slot 2 XTAL name">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Ability Level</label>
                      </div>
                      <select class="custom-select" id="inputGroupSelect01">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
                      </div>
                      <input type="email" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>
                     

                     <div class="form-group row">
                        <div class="col-sm-10">
                           <button type="submit" class="btn btn-primary">Add Item</button>
                        </div>
                     </div>
                  </form>

                  <form id="item" style="display: none">
                     <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Item Name</span>
                      </div>
                      <input type="email" class="form-control" aria-label="Default" placeholder="Item/Material name" aria-describedby="inputGroup-sizing-default">
                    </div>
                     <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">QTY</span>
                      </div>
                      <input type="email" class="form-control" aria-label="Default" placeholder="QTY (not in stacks)" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
                      </div>
                      <input type="email" class="form-control" aria-label="Default" placeholder="Price PER ITEM (not per stacks)" aria-describedby="inputGroup-sizing-default">
                    </div>
                     

                     <div class="form-group row">
                        <div class="col-sm-10">
                           <button type="submit" class="btn btn-primary">Add Item</button>
                        </div>
                     </div>
                  </form>

                  <form id="xtal" style="display: none">
                     <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Xtal Name</span>
                      </div>
                      <input type="email" class="form-control" aria-label="Default" placeholder="Xtal name" aria-describedby="inputGroup-sizing-default">
                    </div>
                     <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">QTY</span>
                      </div>
                      <input type="email" class="form-control" aria-label="Default" placeholder="QTY" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
                      </div>
                      <input type="email" class="form-control" aria-label="Default" placeholder="Price" aria-describedby="inputGroup-sizing-default">
                    </div>
                     

                     <div class="form-group row">
                        <div class="col-sm-10">
                           <button type="submit" class="btn btn-primary">Add Item</button>
                        </div>
                     </div>
                  </form>

                  <form id="al" style="display: none">
                     <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Item Name</span>
                      </div>
                      <input type="email" class="form-control" aria-label="Default" placeholder="AL Crystal Name" aria-describedby="inputGroup-sizing-default">
                    </div>
                     <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">QTY</span>
                      </div>
                      <input type="email" class="form-control" aria-label="Default" placeholder="QTY" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Color</span>
                      </div>
                      <select id="ALColor" class="form-control">
                          <option value="red" style="color:red;">Red</option>
                          <option value="green" style="color:green;">Green</option>
                          <option value="blue" style="color:blue;">Blue</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
                      </div>
                      <input type="email" class="form-control" aria-label="Default" placeholder="Price" aria-describedby="inputGroup-sizing-default">
                    </div>
                     
                     <div class="form-group row">
                        <div class="col-sm-10">
                           <button type="submit" class="btn btn-primary">Add Item</button>
                        </div>
                     </div>
                  </form>

                  <form id="relic" style="display: none">
                     <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Relic Name</span>
                      </div>
                      <input type="email" class="form-control" aria-label="Default" placeholder="Relic name" aria-describedby="inputGroup-sizing-default">
                    </div>
                     <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">QTY</span>
                      </div>
                      <input type="email" class="form-control" aria-label="Default" placeholder="QTY" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
                      </div>
                      <input type="email" class="form-control" aria-label="Default" placeholder="Price" aria-describedby="inputGroup-sizing-default">
                    </div>
                     

                     <div class="form-group row">
                        <div class="col-sm-10">
                           <button type="submit" class="btn btn-primary">Add Item</button>
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
      <script>    
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