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
      <link rel="stylesheet" type="text/css" href="{{ asset('css/NewIrunaStall/searchpage.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/NewIrunaStall/table.css') }}">
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
      <div id="cover">
         <form method="get" class="searchform" action="">
            <div class="inner">
               <div class="tb">
                  <div class="td"><input type="text" placeholder="Search" class="maininput" required></div>
               </div>
            </div>
         </form>
      </div>
      <div class="container">
        <div class="row">
          <div class="col">
          </div>
          <div class="col-12">
            <br>
            <h4 style="color:white;">Search Results: {{ $input }}</h4>
            <br>
            @error('searcherror')
            <div style="color:red">{{$message}}</div>
            <br>
            @enderror
            <p style="color:white;">There are {{$totalCount }} results</p>
            <hr>
            @if($equipSearch->count() >= 1)
            <table>
               <h2 class="equipmenttitle">Equipment</h2>
               <br>
               <thead>
                  <tr>
                     <th scope="col">Name</th>
                     <th scope="col">ATK</th>
                     <th scope="col">DEF</th>
                     <th scope="col">Refinement</th>
                     <th scope="col">Slots</th>
                     <th scope="col">Slot1</th>
                     <th scope="col">Slot2</th>
                     <th scope="col">Ability</th>
                     <th scope="col">Ability Lv</th>
                     <th scope="col">Price</th>
                     <th scope="col">Contact</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($equipSearch as $equip)
                  <tr>
                     <td data-label="Name"><a href="item/equip/{{$equip->item_id}}">{{ $equip->name }}</a></td>
                     <td data-label="ATK">{{ $equip->atk }}</td>
                     <td data-label="DEF">{{ $equip->def }}</td>
                     <td data-label="Refinement">{{ $equip->refinement }}</td>
                     <td data-label="Slots">{{ $equip->slots }}</td>
                     @if ($equip->slots == 0)
                     <td data-label="Slot1">/</td>
                     <td data-label="Slot2">/</td>
                     @elseif ($equip->slots == 1)
                     @if ($equip->slot1 == null)
                     <td data-label="Slot1">empty</td>
                     <td data-label="Slot2">/</td>
                     @else
                     <td data-label="Slot1">{{ $equip->slot1 }}</td>
                     <td data-label="Slot2">/</td>
                     @endif
                     @elseif ($equip->slots == 2)
                     @if ($equip->slot1 != null)
                     @if ($equip->slot2 != null)
                     <td data-label="Slot1">{{ $equip->slot1 }}</td>
                     <td data-label="Slot2">{{ $equip->slot2 }}</td>
                     @else
                     <td data-label="Slot1">{{ $equip->slot1 }}</td>
                     <td data-label="Slot2">empty</td>
                     @endif
                     @elseif ($equip->slot1 == null)
                     @if ($equip->slot2 == null)
                     <td data-label="Slot1">empty</td>
                     <td data-label="Slot2">empty</td>
                     @else
                     <td data-label="Slot1">empty</td>
                     <td data-label="Slot2">{{ $equip->slot2 }}</td>
                     @endif
                     @endif
                     @endif
                     @if ($equip->ability == null)
                     <td data-label="Ability">none</td>
                     @else
                     <td data-label="Ability">{{ $equip->ability }}</td>
                     @endif
                     <td data-label="Ability Lv">{{ $equip->ability_level}}</td>
                     <td data-label="Price">{{ number_format($equip->price )}}</td>
                     <td data-label="Contact"><a href="/user/{{$equip->owner_id}}" style="color:red;">{{ $equip->contact }}</a></td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
            {{$equipSearch->appends(['search' => request('search'), 'xtalPage' => request('xtalPage'), 'equipPage' => request('equipPage'), 'itemPage' => request('itemPage'), 'relicPage' => request('relicPage'), 'alPage' => request('alPage')])->fragment('equip')->links()}}
            @endif
            @if($itemSearch->count() >= 1)
            <table>
               <br>
               <h2 class="equipmenttitle">Materials</h2>
               <br>
               <thead>
                  <tr>
                     <th scope="col">Name</th>
                     <th scope="col">QTY</th>
                     <th scope="col">Price</th>
                     <th scope="col">Contact</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($itemSearch as $item)
                  <tr>
                     <td data-label="Name">
                        <a href="/item/material/{{$item->item_id}}">
                           {{ $item->name }}
                     </td>
                     <td data-label="QTY">{{ $item->quantity }}</td>
                     <td data-label="Price">{{ number_format($item->price) }}</td>
                     <td data-label="Contact"><a href="/user/{{ $item->owner_id}}" style="color:red;">{{ $item->contact }}</a></td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
            {{$itemSearch->appends(['search' => request('search'), 'xtalPage' => request('xtalPage'), 'equipPage' => request('equipPage'), 'itemPage' => request('itemPage'), 'relicPage' => request('relicPage'), 'alPage' => request('alPage')])->fragment('material')->links() }}
            @endif
            @if($xtalSearch->count() >= 1)
            <table>
               <br>
               <h2 class="equipmenttitle">Xtals</h2>
               <br>
               <thead>
                  <tr>
                     <th scope="col">Name</th>
                     <th scope="col">QTY</th>
                     <th scope="col">Price</th>
                     <th scope="col">Contact</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($xtalSearch as $xtal)
                  <tr>
                     <td data-label="Name"><a href="/item/xtal/{{$xtal->item_id}}">{{ $xtal->name }}</a></td>
                     <td data-label="QTY">{{ $xtal->quantity }}</td>
                     <td data-label="Price">{{ number_format($xtal->price) }}</td>
                     <td data-label="Contact"><a href="/user/{{ $xtal->owner_id}}" style="color:red;">{{ $xtal->contact }}</a></td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
            {{$xtalSearch->appends(['search' => request('search'), 'xtalPage' => request('xtalPage'), 'equipPage' => request('equipPage'), 'itemPage' => request('itemPage'), 'relicPage' => request('relicPage'), 'alPage' => request('alPage')])->fragment('xtal')->links()}}
            @endif
            @if($alSearch->count() >= 1)
            <table>
               <br>
               <h2 class="equipmenttitle">AL's</h2>
               <br>
               <thead>
                  <tr>
                     <th scope="col">Name</th>
                     <th scope="col">Color</th>
                     <th scope="col">QTY</th>
                     <th scope="col">Price</th>
                     <th scope="col">Contact</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($alSearch as $al)
                  <tr>
                     @if($al->color == "Red")
                     <td data-label="Name" style="color:red;"><a style="color:red;" href="/item/alcrystas/{{$al->item_id}}">{{ $al->name }}</a></td>
                     @elseif($al->color == "Blue")
                     <td data-label="Name" style="color:blue;"><a style="color:blue;" href="/item/alcrystas/{{$al->item_id}}">{{ $al->name }}</a></td>
                     @elseif($al->color == "Green")
                     <td data-label="Name" style="color:green;"><a style="color:green;" href="/item/alcrystas/{{$al->item_id}}">{{ $al->name }}</a></td>
                     @endif
                     <td data-label="Color">{{ $al->color }}</td>
                     <td data-label="QTY">{{ $al->quantity }}</td>
                     <td data-label="Price">{{ number_format($al->price) }}</td>
                     <td data-label="Contact"><a href="/user/{{ $al->owner_id}}" style="color:red;">{{ $al->contact }}</a></td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
            {{$alSearch->appends(['search' => request('search'), 'xtalPage' => request('xtalPage'), 'equipPage' => request('equipPage'), 'itemPage' => request('itemPage'), 'relicPage' => request('relicPage'), 'alPage' => request('alPage')])->fragment('alcrystas')->links()}}
            @endif
            @if($relicSearch->count() >= 1)
            <table>
               <br>
               <h2 class="equipmenttitle">Relics</h2>
               <br>
               <thead>
                  <tr>
                     <th scope="col">Name</th>
                     <th scope="col">QTY</th>
                     <th scope="col">Price</th>
                     <th scope="col">Contact</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($relicSearch as $relic)
                  <tr>
                     <td data-label="Name"><a href="/item/relic/{{$relic->item_id}}">{{ $relic->name }}</a></td>
                     <td data-label="QTY">{{ $relic->quantity }}</td>
                     <td data-label="Price">{{ number_format($relic->price) }}</td>
                     <td data-label="Contact"><a href="/user/{{$relic->owner_id}}" style="color:red;">{{ $relic->contact }}</a></td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
            {{$relicSearch->appends(['search' => request('search'), 'xtalPage' => request('xtalPage'), 'equipPage' => request('equipPage'), 'itemPage' => request('itemPage'), 'relicPage' => request('relicPage'), 'alPage' => request('alPage')])->fragment('reliccrystas')->links()}}
            @endif
          <div class="col">
          </div>
        </div>
      </div>
      </section>
      @include('layouts/NewIrunaStall.footer')
   </body>
</html>