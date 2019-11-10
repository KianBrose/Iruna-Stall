@extends('layouts.main')
@section('content')


<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<link href="{{ asset('css/util.css') }}" rel="stylesheet">
<div class="container">
	<div class="row">
		<div class="col-md-7 offset-md-3" >
		<div style="height: auto !important;">
			<br>
			<h4>View my items</h4>
			<hr>
            <h4>Equipment</h4>
            <br>
			<div>
				<div>
					<table>
						<thead>
							<tr class="table100-head">
								<th class="equipment">Name</th>
								<th class="equipment">ID</th>
								<th class="equipment">ATK</th>
								<th class="equipment">DEF</th>
								<th class="equipment">Refinement</th>
								<th class="equipment">Slots</th>
								<th class="equipment">Slot 1</th>
								<th class="equipment">Slot 2</th>
								<th class="equipment">Ability</th>
								<th class="equipment">Ability Lv</th>
								<th class="equipment">Price</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="equipment">1</td>
								<td class="equipment">2</td>
								<td class="equipment">3</td>
								<td class="equipment">4</td>
								<td class="equipment">5</td>
								<td class="equipment">6</td>
								<td class="equipment">7</td>
								<td class="equipment">8</td>
								<td class="equipment">9</td>
								<td class="equipment">10</td>
								<td class="equipment">11</td>
							</tr>
							<tr>
								<td class="equipment">1</td>
								<td class="equipment">2</td>
								<td class="equipment">3</td>
								<td class="equipment">4</td>
								<td class="equipment">5</td>
								<td class="equipment">6</td>
								<td class="equipment">7</td>
								<td class="equipment">8</td>
								<td class="equipment">9</td>
								<td class="equipment">10</td>
								<td class="equipment">11</td>
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
								<th class="materials">ID</th>
								<th class="materials">QTY</th>
								<th class="materials">Price</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="materials">1</td>
								<td class="materials">2</td>
								<td class="materials">3</td>
								<td class="materials">4</td>
							</tr>
							<tr>
								<td class="materials">1</td>
								<td class="materials">2</td>
								<td class="materials">3</td>
								<td class="materials">4</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>



@endsection