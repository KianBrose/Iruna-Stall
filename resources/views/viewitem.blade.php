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
			<div>
				<div>
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Name</th>
								<th class="column4">ID</th>
								<th class="column4">ATK</th>
								<th class="column4">DEF</th>
								<th class="column4">Refinement</th>
								<th class="column4">Slots</th>
								<th class="column4">Slot 1</th>
								<th class="column4">Slot 2</th>
								<th class="column4">Ability</th>
								<th class="column4">Ability Lv</th>
								<th class="column1">Price</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="column1">1</td>
								<td class="column4">2</td>
								<td class="column4">3</td>
								<td class="column4">4</td>
								<td class="column4">5</td>
								<td class="column4">6</td>
								<td class="column4">7</td>
								<td class="column4">8</td>
								<td class="column4">9</td>
								<td class="column4">10</td>
								<td class="column1">11</td>
							</tr>
							<tr>
								<td class="column1">1</td>
								<td class="column4">2</td>
								<td class="column4">3</td>
								<td class="column4">4</td>
								<td class="column4">5</td>
								<td class="column4">6</td>
								<td class="column4">7</td>
								<td class="column4">8</td>
								<td class="column4">9</td>
								<td class="column4">10</td>
								<td class="column1">11</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>



@endsection