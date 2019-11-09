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
								<th class="column1">Name</th>
								<th class="column2">ID</th>
								<th class="column3">ATK</th>
								<th class="column4">DEF</th>
								<th class="column5">Refinement</th>
								<th class="column5">Slots</th>
								<th class="column5">Slot 1</th>
								<th class="column5">Slot 2</th>
								<th class="column5">Ability</th>
								<th class="column5">Ability Lv</th>
								<th class="column6">Price</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="column1">1</td>
								<td class="column2">2</td>
								<td class="column3">3</td>
								<td class="column4">4</td>
								<td class="column5">5</td>
								<td class="column5">6</td>
								<td class="column5">7</td>
								<td class="column5">8</td>
								<td class="column5">9</td>
								<td class="column5">10</td>
								<td class="column6">11</td>
							</tr>
							<tr>
								<td class="column1">1</td>
								<td class="column2">2</td>
								<td class="column2">3</td>
								<td class="column2">4</td>
								<td class="column2">5</td>
								<td class="column2">6</td>
								<td class="column2">7</td>
								<td class="column2">8</td>
								<td class="column2">9</td>
								<td class="column2">10</td>
								<td class="column3">11</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>



@endsection