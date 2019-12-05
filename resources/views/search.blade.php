@extends('layouts.main')

@section('content')

<link href="{{ asset('css/mainsearch.css') }}" rel="stylesheet">
<link href="{{ asset('css/util.css') }}" rel="stylesheet">
<div class="container">
    <div class="row" >
        <div class="col-md-7 offset-md-3" >
            <br>
            <br>
			<form class="form-horizontal" name="form1" id="form1" action="/search" method="GET">
				@csrf
				<div class="row">
					<div class="col-md-7 col-xs-8">
						<input type="text" class="form-control" name="search" id="search">
					</div>
					<!--
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
					-->
					<div class="col-md-2 col-xs-3">
						<input type="submit" class="btn btn-default btn-block" name="search_button" id="search_button" value="Search">
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
				<br>
				@error('searcherror')
				<div style="color:red">{{$message}}</div>
				<br>
				@enderror
			<p>There are {{ $equipSearch->count() + $alSearch->count() + $relicSearch->count() + $xtalSearch->count() + $itemSearch->count() }} results</p>
				<hr>
				@if($equipSearch->count() >= 1)
				<h4>Equipment</h4>
				<br>
				<div>
					<div>
						<table>
							<thead>
								<tr class="table100-head">
									<th class="equipment">Name</th>
									<th class="equipment">ATK</th>
									<th class="equipment">DEF</th>
									<th class="equipment">Refinement</th>
									<th class="equipment">Slots</th>
									<th class="equipment">Slot 1</th>
									<th class="equipment">Slot 2</th>
									<th class="equipment">Ability</th>
									<th class="equipment">Ability Lv</th>
									<th class="equipment">Price</th>
									<th class="equipment">Contact</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($equipSearch as $equip)
									
								
								<tr>
									<td class="equipment">{{ $equip->name }}</th>
									<td class="equipment">{{ $equip->atk }}</th>
									<td class="equipment">{{ $equip->def }}</th>
									<td class="equipment">{{ $equip->refinement }}</th>
									<td class="equipment">{{ $equip->slots }}</th>
									<td class="equipment">{{ $equip->slot1 }}</th>
									<td class="equipment">{{ $equip->slot2 }}</th>
									<td class="equipment">{{ $equip->ability }}</th>
									<td class="equipment">{{ $equip->ability_level}}</th>
									<td class="equipment">{{ number_format($equip->price )}}</th>
									<td class="equipment"><a href="/user/{{$equip->owner_id}}">{{ $equip->contact }}</a></th>
								</tr>
								@endforeach
							</tbody>
						</table>
						{{$equipSearch->appends(['search' => request('search'), 'xtalPage' => request('xtalPage'), 'equipPage' => request('equipPage'), 'itemPage' => request('itemPage'), 'relicPage' => request('relicPage'), 'alPage' => request('alPage')])->links()}}
					</div>
				</div>
				@endif
				
				<br>
				@if($itemSearch->count() >= 1)
				<h4>Materials</h4>
				<br>
				<div>
					<div>
						<table>
							<thead>
								<tr class="table100-head">
									<th class="materials">Name</th>
									<th class="materials">QTY</th>
									<th class="materials">Price</th>
									<th class="materials">Contact</th>
								</tr>
							</thead>
							<tbody>
								@foreach($itemSearch as $item)
								<tr>
									<td class="materials">{{ $item->name }}</th>
									<td class="materials">{{ $item->quantity }}</th>
									<td class="materials">{{ number_format($item->price) }}</th>
									<td class="materials"><a href="/user/{{ $item->owner_id}}">{{ $item->contact }}</a></th>
								</tr>
								@endforeach
							</tbody>
						</table>
						{{$itemSearch->appends(['search' => request('search'), 'xtalPage' => request('xtalPage'), 'equipPage' => request('equipPage'), 'itemPage' => request('itemPage'), 'relicPage' => request('relicPage'), 'alPage' => request('alPage')])->links()}}
					</div>
				</div>
				@endif
				<br>
				@if($xtalSearch->count() >= 1)
				<h4>Xtals</h4>
				<br>
				<div>
					<div>
						<table>
							<thead>
								<tr class="table100-head">
									<th class="xtals">Name</th>
									<th class="xtals">QTY</th>
									<th class="xtals">Price</th>
									<th class="xtals">Contact</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($xtalSearch as $xtal)
									
								
								<tr>
									<td class="xtals">{{ $xtal->name }}</th>
									<td class="xtals">{{ $xtal->quantity }}</th>
									<td class="xtals">{{ number_format($xtal->price) }}</th>
									<td class="xtals"><a href="/user/{{ $xtal->owner_id}}">{{ $xtal->contact }}</a></th>
								</tr>
								@endforeach
							</tbody>
						</table>
						{{$xtalSearch->appends(['search' => request('search'), 'xtalPage' => request('xtalPage'), 'equipPage' => request('equipPage'), 'itemPage' => request('itemPage'), 'relicPage' => request('relicPage'), 'alPage' => request('alPage')])->links()}}
					</div>
				</div>
				@endif
				<br>
				@if($alSearch->count() >= 1)
				<h4>AL Crystals</h4>
				<br>
				<div>
					<div>
						<table>
							<thead>
								<tr class="table100-head">
									<th class="als">Name</th>
									<th class="als">Color</th>
									<th class="als">QTY</th>
									<th class="als">Price</th>
									<th class="als">Contact</th>
								</tr>
							</thead>
							<tbody>
								@foreach($alSearch as $al)
									
								
								<tr>
									<td class="als">{{ $al->name }}</th>
									<td class="als">{{ $al->color }}</th>
									<td class="als">{{ $al->quantity }}</th>
									<td class="als">{{ number_format($al->price) }}</th>
									<td class="als"><a href="/user/{{ $al->owner_id}}">{{ $al->contact }}</a></th>
								</tr>
								@endforeach
							</tbody>
						</table>
						{{$alSearch->appends(['search' => request('search'), 'xtalPage' => request('xtalPage'), 'equipPage' => request('equipPage'), 'itemPage' => request('itemPage'), 'relicPage' => request('relicPage'), 'alPage' => request('alPage')])->links()}}
					</div>
				</div>
				@endif
				<br>
				@if($relicSearch->count() >= 1)
				<h4>Relics</h4>
				<br>
				<div>
					<div>
						<table>
							<thead>
								<tr class="table100-head">
									<th class="relics">Name</th>
									<th class="relics">QTY</th>
									<th class="relics">Price</th>
									<th class="relics">Contact</th>
								</tr>
							</thead>
							<tbody>
								@foreach($relicSearch as $relic)
								<tr>
									<td class="relics">{{ $relic->name }}</th>
									<td class="relics">{{ $relic->quantity }}</th>
									<td class="relics">{{ number_format($relic->price) }}</th>
									<td class="relics"><a href="/user/{{$relic->owner_id}}">{{ $relic->contact }}</a></th>
								</tr>
								@endforeach
							</tbody>
						</table>
						{{$relicSearch->appends(['search' => request('search'), 'xtalPage' => request('xtalPage'), 'equipPage' => request('equipPage'), 'itemPage' => request('itemPage'), 'relicPage' => request('relicPage'), 'alPage' => request('alPage')])->links()}}
					</div>
				</div>
				@endif
            </div>
        </div>


		<script src="https://code.jquery.com/jquery-3.4.1.min.js"   integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="   crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"   integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="   crossorigin="anonymous"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script type="text/javascript" id="cookieinfo"
		src="//cookieinfoscript.com/js/cookieinfo.min.js"></script>

		<script>
				$(document).ready(function() {
					
				$( "#search" ).autocomplete({
			   
				source: function(request, response) {
					$.ajax({
					url: "{{secure_url('api/searchitem')}}",
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

@endsection