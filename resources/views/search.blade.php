@extends('layouts.main')

@section('content')

<link href="{{ asset('css/main.css') }}" rel="stylesheet">
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
                <hr>
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
								<tr>
									<td class="equipment">Name</th>
									<td class="equipment">ATK</th>
									<td class="equipment">DEF</th>
									<td class="equipment">Refinement</th>
									<td class="equipment">Slots</th>
									<td class="equipment">Slot 1</th>
									<td class="equipment">Slot 2</th>
									<td class="equipment">Ability</th>
									<td class="equipment">Ability Lv</th>
									<td class="equipment">Price</th>
									<td class="equipment">Contact</th>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
				<br>
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
								<tr>
									<td class="materials">Name</th>
									<td class="materials">QTY</th>
									<td class="materials">Price</th>
									<td class="materials">Contact</th>
								</tr>
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


@endsection