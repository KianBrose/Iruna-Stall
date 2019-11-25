@extends('layouts.main')

@section('content')

<link href="{{ asset('css/mainsearch.css') }}" rel="stylesheet">
<link href="{{ asset('css/util.css') }}" rel="stylesheet">
<div class="container">
    <div class="row" >
        <div class="col-md-7 offset-md-3" >
            <br>
            <br>
			<form class="form-horizontal" name="form1" id="form1" action="/search" method="POST">
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
			<p>There are {{ $equipSearch->count() + $aiSearch->count() + $relicSearch->count() + $xtalSearch->count() + $itemSearch->count() }} results</p>
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
								@foreach ($equipSearch as $equipSearch)
									
								
								<tr>
									<td class="equipment">{{ $equipSearch->name }}</th>
									<td class="equipment">{{ $equipSearch->atk }}</th>
									<td class="equipment">{{ $equipSearch->def }}</th>
									<td class="equipment">{{ $equipSearch->refinement }}</th>
									<td class="equipment">{{ $equipSearch->slots }}</th>
									<td class="equipment">{{ $equipSearch->slot1 }}</th>
									<td class="equipment">{{ $equipSearch->slot2 }}</th>
									<td class="equipment">{{ $equipSearch->ability }}</th>
									<td class="equipment">{{ $equipSearch->ability_level}}</th>
									<td class="equipment">{{ number_format($equipSearch->price )}}</th>
									<td class="equipment">Contact</th>
								</tr>
								@endforeach
							</tbody>
						</table>
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
								@foreach($itemSearch as $itemSearch)
								<tr>
									<td class="materials">{{ $itemSearch->name }}</th>
									<td class="materials">{{ $itemSearch->quantity }}</th>
									<td class="materials">{{ $itemSearch->price }}</th>
									<td class="materials">Contact</th>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
				
				<br>
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
								<tr>
									<td class="xtals">Name</th>
									<td class="xtals">QTY</th>
									<td class="xtals">Price</th>
									<td class="xtals">Contact</th>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				@endif
				<br>
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
								<tr>
									<td class="als">Name</th>
									<td class="als">Color</th>
									<td class="als">QTY</th>
									<td class="als">Price</th>
									<td class="als">Contact</th>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
				<br>
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
								<tr>
									<td class="relics">Name</th>
									<td class="relics">QTY</th>
									<td class="relics">Price</th>
									<td class="relics">Contact</th>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
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
					url: "{{url('api/searchitem')}}",
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