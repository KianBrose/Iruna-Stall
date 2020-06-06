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
            <br>
                                             <h4>Item's details</h4>
                                             <hr>
                                             @if($item->category == 'xtal')
                                             <div class="row divider" role="separator" ></div>
                                             <h6>Name: {{$item->name }} </h6>
                                             <br>
                                             <h6>Price: {{ number_format($item->price)}} </h6>
                                             <br>
                                             <h6>Quantity: {{number_format($item->quantity)}}</h6>
                                             <br>
                                             <h6>Posted at: {{date_format($item->created_at, "d/m/Y")}}</h6>
                                             <h6>Seller: <a href="/user/{{ $item->owner_id}}" style="color:red;">{{ $item->contact }}</a></h6>
                                             @elseif($item->category == 'equipment')
                                             <h6>Name: {{$item->name}}</h6>
                                             <h6>ATK: {{$item->atk}}</h6>
                                             <h6>DEF: {{$item->def}}</h6>
                                             <br>
                                             <h6>Price: {{ number_format($item->price) }}</h6>
                                             <h6> Refinement: +{{$item->refinement}}</h6>
                                             @if ($item->slots == 0)
                                             <h6>Slot 1: No slot</h6>
                                             <h6>Slot 2: No slot</h6>
                                             @elseif ($item->slots == 1)
                                             @if ($item->slot1 == null)
                                             <h6>Slot 1: Empty slot</h6>
                                             <h6 >Slot 2: No slot</h6>
                                             @else
                                             <h6>Slot 1: {{ $item->slot1 }}</h6>
                                             <h6 >Slot 2: No slot</h6>
                                             @endif
                                             @elseif ($item->slots == 2)
                                             @if ($item->slot1 != null)
                                             @if ($item->slot2 != null)
                                             <h6>Slot 1: {{ $item->slot1 }}</h6>
                                             <h6>Slot 2: {{ $item->slot2 }}</h6>
                                             @else
                                             <h6>Slot 1: {{ $item->slot1 }}</h6>
                                             <h6>Slot 2: Empty slot</h6>
                                             @endif
                                             @elseif ($item->slot1 == null)
                                             @if ($item->slot2 == null)
                                             <h6>Slot 1: Empty slot</h6>
                                             <h6>Slot 2: Empty slot</h6>
                                             @else
                                             <h6>Slot 1: Empty slot</h6>
                                             <h6>Slot 2: {{ $item->slot2 }}</h6>
                                             @endif
                                             @endif
                                             @endif
                                             @if ($item->ability == null)
                                             <h6>Ability : None</h6>
                                             @else
                                             <h6>Ability: {{ $item->ability }}</h6>
                                             <h6> Ability's level: {{$item->ability_level}}</h6>
                                             @endif
                                             <h6>Seller: <a href="/user/{{ $item->owner_id}}" style="color:red;">{{ $item->contact }}</a></h6>
                                             @elseif($item->category == 'item')
                                             <h6>Name: {{$item->name }} </h6>
                                             <br>
                                             <h6>Price: {{ number_format($item->price)}} </h6>
                                             <br>
                                             <h6>Quantity: {{number_format($item->quantity)}}</h6>
                                             <br>
                                             <h6>Posted at: {{date_format($item->created_at, "d/m/Y")}}</h6>
                                             <h6>Seller: <a href="/user/{{ $item->owner_id}}" style="color:red;">{{ $item->contact }}</a></h6>
                                             @elseif($item->category == 'ai')
                                             <h6>Name: {{$item->name }} </h6>
                                             <br>
                                             <h6>Price: {{ number_format($item->price)}} </h6>
                                             <br>
                                             <h6>Color: {{$item->color}}</h6>
                                             <h6>Quantity: {{number_format($item->quantity)}}</h6>
                                             <br>
                                             <h6>Posted at: {{date_format($item->created_at, "d/m/Y")}}</h6>
                                             <h6>Seller: <a href="/user/{{ $item->owner_id}}" style="color:red;">{{ $item->contact }}</a></h6>
                                             @elseif($item->category == 'relic')
                                             <h6>Name: {{$item->name }} </h6>
                                             <br>
                                             <h6>Price: {{ number_format($item->price)}} </h6>
                                             <br>
                                             <h6>Quantity: {{number_format($item->quantity)}}</h6>
                                             <br>
                                             <h6>Posted at: {{date_format($item->created_at, "d/m/Y")}}</h6>
                                             <h6>Seller: <a href="/user/{{ $item->owner_id}}" style="color:red;">{{ $item->contact }}</a></h6>
                                             @endif
          </div>
          <div class="col">
          </div>
        </div>
      </div>
      </section>
      @include('layouts/NewIrunaStall.footer')
   </body>
</html>