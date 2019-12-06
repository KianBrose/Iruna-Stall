@extends('layouts.main')
@section('content')


<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<link href="{{ asset('css/util.css') }}" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<div class="container">
	<div class="row">
		<div class="col-md-11 offset-md-1" >
		<div style="height: auto !important;">
			<br>
			<h4>View my items</h4>
			<br>
			@if($equipitem->count() + $item->count() + $xtal->count() + $alitem->count() + $relic->count() < 1)
			You have no item on your stall
			@endif
			<hr>
			@if($equipitem->count() >= 1) 
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
								<th class="equipment">Ref</th>
								<th class="equipment">Slots</th>
								<th class="equipment">Slot 1</th>
								<th class="equipment">Slot 2</th>
								<th class="equipment">Ability</th>
								<th class="equipment">Ability Lv</th>
								<th class="equipment">Price</th>
								<th class="equipment">Edit</th>
								<th class="equipment">Delete</th>
							</tr>
						</thead>
						<tbody>
								@foreach( $equipitem as $equipitem)
								<tr>
								<td class="equipment">{{$equipitem->name }}</td>
							<form action="/item/equip/{{ $equipitem->item_id }}/update" method="POST">
								@csrf
								@method('patch')
								
								<td class="equipment">
								<input type="text" class="form-control iteminput" style="width: 50px" name="atk" id="atk" value="{{ $equipitem->atk }}"/>
								</td>
								<td class="equipment">
								<input type="text" class="form-control iteminput" style="width: 50px" name="def" id="def" value="{{ $equipitem->def }}"/>
								</td>
								<td class="equipment">
									<select name="refinement" class="form-control iteminput" id="refinement"> 
									<option selected value="{{ $equipitem->refinement }}">{{ $equipitem->refinement }}</option>
									   <option value="1">1</option>
									   <option value="2">2</option>
									   <option value="3">3</option>
									   <option value="4">4</option>
									   <option value="5">5</option>
									   <option value="6">6</option>
									   <option value="7">7</option>
									   <option value="8">8</option>
									   <option value="9">9</option>
									</select>
								</td>
								<td class="equipment">
									<select name="equipslotamount" class="form-control iteminput" id="equipslotamount" style="width: 60px"> 
									<option selected value="{{ $equipitem->slots }}">{{ $equipitem->slots }}</option>
									   <option value="0">0</option>
									   <option value="1">1</option>
									   <option value="2">2</option>
									</select>
								</td>
								<td class="equipment">
								<input type="text" class="form-control iteminput crystas" style="width: 130px" name="slot1" id="s1" value="{{ $equipitem->slot1 }}"/>
								</td>
								<td class="equipment">
								<input type="text" class="form-control iteminput crystas" style="width: 130px" name="slot2" id="s2" value="{{ $equipitem->slot2 }}"/>
								</td>
								<td class="equipment">
								<input type="text" class="form-control iteminput" style="width: 160px" name="ability" id="ability" value="{{ $equipitem->ability}}"/>
								</td>
								<td class="equipment">
									<select name="ability_level" class="form-control iteminput" id="abilv" style="width: 60px"> 
									<option selected value="{{ $equipitem->ability_level }}">{{ $equipitem->ability_level }}</option>
									   <option value="0">0</option>
									   <option value="1">1</option>
									   <option value="2">2</option>
									   <option value="3">3</option>
									   <option value="4">4</option>
									   <option value="5">5</option>
									</select>
								</td>
								<td class="equipment">
									<input type="text" class="form-control iteminput" style="width: 140px" name="price" id="price" value="{{ $equipitem->price }}"/>
								</td>
								<td class="equipment">
									<button type="submit" class="btn btn-outline-success">Apply</button>
								</td>
							</form>
							<form action="/item/equip/{{ $equipitem->item_id }}/delete" method="POST">
								@csrf
								@method('delete')
								<td class="equipment">
									<button type="submit" class="btn btn-outline-danger">Delete</button>
								</td>
							</form>
							
								@endforeach
								
									
							</tr>
						</tbody>
						
					</table>
					
				</div>
				
			</div>
			@endif
			
			
            
			<br>
			@if($item->count() >= 1)
			<h4>Materials</h4>
            <br>
			<div>
				<div>
					<table>
						<thead>
							<tr class="table100-head">
								<th class="materials">Name</th>
								<th class="materials">Quantity</th>
								<th class="materials">Price</th>
								<th class="materials">Controls</th>
								<th class="materials">Controls</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($item as $item)
							<tr>
									<td class="materials">{{ $item->name }}</td>
									<form action="item/items/{{ $item->item_id }}/update" method="POST">
										@method('patch')
										@csrf
										<td class="materials">
										<input type="text" class="form-control iteminput" style="width: 80px" name="quantity" id="qty" value="{{ $item->quantity }}"/>
										</td>
										<td class="materials">
										<input type="text" class="form-control iteminput" style="width: 160px" name="price" id="price" value="{{ $item->price }}"/>
										</td>
										<td class="materials">
											<button type="submit" class="btn btn-outline-success">Apply</button>
										</td>
										
									</form>
									<form action="/item/items/{{ $item->item_id }}/delete" method="POST">
										@method('delete')
										@csrf
									<td class="materials">
											<button type="submit" class="btn btn-outline-danger">Delete</button>
										</td>
									</form>
									@endforeach
								</tr>
							</tbody>
						</table>
						
					</div>
				</div>
				@endif
							
							
			<br>
			@if($xtal->count() >= 1)
			<h4>Xtals</h4>
			
            <br>
			<div>
				<div>
					<table>
						<thead>
							<tr class="table100-head">
								<th class="xtals">Name</th>
								<th class="xtals">Quantity</th>
								<th class="xtals">Price</th>
								<th class="xtals">Controls</th>
								<th class="xtals">Controls</th>
							</tr>
						</thead>
						<tbody>
							@foreach( $xtal as $xtal )
							<tr>
								<td class="xtals">{{ $xtal->name }}</td>
								<form action="/item/xtal/{{ $xtal->item_id }}/update" method="POST">
									@csrf
									@method('patch')
									<td class="xtals">
									<input type="text" class="form-control iteminput" style="width: 80px" name="quantity" id="qty" value="{{ $xtal->quantity }}"/>
									</td>
									<td class="xtals">
										<input type="text" class="form-control iteminput" style="width: 160px" name="price" id="price" value="{{ $xtal->price }}"/>
									</td>
									<td class="xtals">
										<button type="submit" class="btn btn-outline-success">Apply</button>
									</td>
								</form>
								<form action="/item/xtal/{{ $xtal->item_id }}/delete" method="POST">
									@csrf
									@method('delete')
									<td class="xtals">
										<button type="submit" class="btn btn-outline-danger">Delete</button>
									</td>
								</form>
								
								
							</tr>
							@endforeach
						</tbody>
					</table>
					
				</div>
			</div>
			@endif
			<br>
			@if($alitem->count() >= 1)
			<h4>AL's</h4>
			
            <br>
			<div>
				<div>
					<table>
						<thead>
							<tr class="table100-head">
								<th class="als">Name</th>
								<th class="als">QTY</th>
								<th class="als">Color</th>
								<th class="als">Price</th>
								<th class="als">Controls</th>
								<th class="als">Controls</th>
							</tr>
						</thead>
			
						<tbody>
							@foreach($alitem as $alitem)
							<tr>
								<form action="/item/al/{{ $alitem->item_id }}/update" method="POST">
									@csrf
									@method('patch')
								<td class="als">{{ $alitem->name }}</td>
									<td class="als">
									<input type="text" class="form-control iteminput" style="width: 80px" name="quantity" id="qty" value="{{ $alitem->quantity}}"/>
									</td>
									<td class="als">
										<select name="color" class="form-control iteminput" id="color" style="width: 120px"> 
										<option selected>{{ $alitem->color }}</option>
										   <option>Red</option>
										   <option>Green</option>
										   <option>Blue</option>
										</select>
									</td>
									<td class="als">
									<input type="text" class="form-control iteminput" style="width: 160px" name="price" id="price" value="{{ $alitem->price }}"/>
									</td>
									<td class="als">
										<button type="submit" class="btn btn-outline-success">Apply</button>
									</td>
								</form>	
								<form action="/item/al/{{$alitem->item_id}}/delete" method="POST">
									@csrf
									@method('delete')
									<td class="als">
										<button type="submit" class="btn btn-outline-danger">Delete</button>
									</td>
								</form>
								
							</tr>
							@endforeach
						</tbody>
					</table>
					
				</div>
			</div>
			@endif
			<br>
			@if($relic->count() >= 1)
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
								<th class="relics">Controls</th>
								<th class="relics">Controls</th>
							</tr>
						</thead>
						<tbody>
						@foreach($relic as $relic)
							<tr>
								<form action="/item/relic/{{ $relic->item_id }}/update" method="POST">
									@csrf
									@method('patch')
								<td class="relics">{{ $relic->name }}</td>
									<td class="relics">
									<input type="text" class="form-control iteminput" style="width: 80px" name="quantity" id="qty" value="{{ $relic->quantity }}"/>
									</td>
									<td class="relics">
									<input type="text" class="form-control iteminput" style="width: 160px" name="price" id="price" value="{{ $relic->price }}"/>
									</td>
									<td class="relics">
										<button type="submit" class="btn btn-outline-success">Apply</button>
									</td>
								</form>
								<form action="item/relic/{{$relic->item_id}}/delete" method="POST">
									@csrf
									@method('delete')
									<td class="relics">
										<button type="submit" class="btn btn-outline-danger">Delete</button>
									</td>
								</form>
								
							</tr>
															@endforeach
						</tbody>
					</table>
					
				</div>
			</div>
			@endif
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"   integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="   crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"   integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="   crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>		
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script>
			$(document).ready(function() {
				
				$( "#ability" ).autocomplete({
					source: function(request, response) {
						$.ajax({
						url: "{{url('api/searchability')}}",
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
			<script type="text/javascript" id="cookieinfo"
    src="//cookieinfoscript.com/js/cookieinfo.min.js">
	</script>



@endsection