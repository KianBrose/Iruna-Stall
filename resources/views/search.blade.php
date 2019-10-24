@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row" >
        <div class="col-md-7 offset-md-3" >
            <br>
            <br>
<form class="form-horizontal" name="form1" id="form1" action="/search" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-7 col-xs-8">
        <input type="text" class="form-control" name="search" id="search" value="{{ $input }}">
        </div>

        <div class="col-md-3 col-xs-3">
             <div class="form-group">
                 <select id="searchtype" class="form-control" name="searchtype">
                    <option value="equipment" selected="selected">Equipment</option>
                   <option value="items">Items</option>
                   <option value="xtal">Xtal</option>
                   <option value="al">AL crystal</option>
                   <option value="relic">Relic</option>
                   <option value="ability">Ability</option>
                </select>
             </div>
        </div>
        <div class="col-md-2 col-xs-3">
            <input type="button" class="btn btn-default btn-block" name="search_button" id="search_button" value="Search">
        </div>
    </div>
</form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row" >
        <div class="col-md-7 offset-md-3" >

            <div style="height: auto !important;">
                <br>
            <h4>Search Results: {{ $input }}</h4>
                <div></div>
                <hr>
                <div>
                    <table class="table table-condensed table-bordered">
                            <tr>
                                   <th class="col-md-4">Name
                            </th>
                            <h4>AI crystal</h4>
                            <th>Color</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
											<th>Contact Seller</th>
                                        </tr>
                            @foreach($aiSearch as $ai)
                                        <tr>
                                                <td>{{ $ai->name }}</td>
                                                <td>{{ $ai->color }}</td>
                                                <td>{{ number_format($ai->price) }} </td>
                                                <td>{{ $ai->quantity }}</td>
                                                <td><a href='/user/{{$ai->owner_id}}'>Facebook</a></td>
                                            </tr>
                            @endforeach
                    </table>
                    <table class="table table-condensed table-bordered">
                            <tr>
                                    <th class="col-md-4">Name
                             </th>
                             <h4>Equipment</h4>
                             <th>ATK</th>
											<th>DEF</th>
											<th>Refinement</th>
											<th>Slots</th>
											<th>Slot 1</th>
											<th>Slot 2</th>
											<th>Ability</th>
											<th>Ability Lv</th>
											<th>Price</th>
											<th>Contact seller</th>
                                        </tr>
                            @foreach($equipSearch as $equipSearch)
                            <tr>
                                <td>{{ $equipSearch->name }}</td>
                                <td>{{ $equipSearch->atk }}</td>
                                <td>{{ $equipSearch->def }}</td>
                                <td>{{ $equipSearch->refinement}}</td>
                                <td>{{ $equipSearch->slots }}</td>
                                <td>{{ $equipSearch->slot1 }}</td>
                                <td>{{ $equipSearch->slot2 }}</td>
                                <td>{{ $equipSearch->ability }}</td>
                                <td>{{ $equipSearch->ability_level }}</td>
                                <td>{{ number_format($equipSearch->price) }}</td>
                                <td><a href='/user/{{ $equipSearch->owner_id }}'>Facebook</a></td>
                            </tr>
                            @endforeach
                    </table>
                    <table class="table table-condensed table-bordered">
                            <tr>
                                   <th class="col-md-4">Name
                            </th>
                            <h4>Item</h4>
                                            <th>Price</th>
                                            <th>Quantity</th>
											<th>Contact Seller</th>
                                        </tr>
                            @foreach($itemSearch as $itemSearch)
                                        <tr>
                                                <td>{{ $itemSearch->name }}</td>
                                                <td>{{ number_format($itemSearch->price) }} </td>
                                                <td>{{ $itemSearch->quantity }}</td>
                                                <td><a href='/user/{{$itemSearch->owner_id}}'>Facebook</a></td>
                                            </tr>
                            @endforeach
                    </table>
                    <table class="table table-condensed table-bordered">
                        <tr>
                               <th class="col-md-4">Name
                        </th>
                        <h4>Crystas</h4>
                                        <th>Price</th>
                                            <th>Quantity</th>
											<th>Contact Seller</th>
                                        </tr>
                            @foreach($xtalSearch as $itemSearch)
                                        <tr>
                                                <td>{{ $itemSearch->name }}</td>
                                                <td>{{ number_format($itemSearch->price) }} </td>
                                                <td>{{ $itemSearch->quantity }}</td>
                                                <td><a href='/user/{{$itemSearch->owner_id}}'>Facebook</a></td>
                                            </tr>
                            @endforeach
                    

                            
                </div>
            </div>
        </div>


@endsection