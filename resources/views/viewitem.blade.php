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
								<th class="column1">ID</th>
								<th class="column1">ATK</th>
								<th class="column1">DEF</th>
								<th class="column1">Refinement</th>
								<th class="column1">Slots</th>
								<th class="column1">Slot 1</th>
								<th class="column1">Slot 2</th>
								<th class="column1">Ability</th>
								<th class="column1">Ability Lv</th>
								<th class="column1">Price</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="column1">1</td>
								<td class="column1">2</td>
								<td class="column1">3</td>
								<td class="column1">4</td>
								<td class="column1">5</td>
								<td class="column1">6</td>
								<td class="column1">7</td>
								<td class="column1">8</td>
								<td class="column1">9</td>
								<td class="column1">10</td>
								<td class="column1">11</td>
							</tr>
							<tr>
								<td class="column1">1</td>
								<td class="column1">2</td>
								<td class="column1">3</td>
								<td class="column1">4</td>
								<td class="column1">5</td>
								<td class="column1">6</td>
								<td class="column1">7</td>
								<td class="column1">8</td>
								<td class="column1">9</td>
								<td class="column1">10</td>
								<td class="column1">11</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>



@endsection