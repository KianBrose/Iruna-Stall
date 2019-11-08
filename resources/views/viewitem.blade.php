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
								<th class="column7">ID</th>
								<th class="column7">ATK</th>
								<th class="column7">DEF</th>
								<th class="column7">Refinement</th>
								<th class="column7">Slots</th>
								<th class="column7">Slot 1</th>
								<th class="column7">Slot 2</th>
								<th class="column7">Ability</th>
								<th class="column7">Ability Lv</th>
								<th class="column6">Price</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="column1">1</td>
								<td class="column7">2</td>
								<td class="column7">3</td>
								<td class="column7">4</td>
								<td class="column7">5</td>
								<td class="column7">6</td>
								<td class="column7">7</td>
								<td class="column7">8</td>
								<td class="column7">9</td>
								<td class="column7">10</td>
								<td class="column6">11</td>
							</tr>
							<tr>
								<td class="column1">1</td>
								<td class="column7">2</td>
								<td class="column7">3</td>
								<td class="column7">4</td>
								<td class="column7">5</td>
								<td class="column7">6</td>
								<td class="column7">7</td>
								<td class="column7">8</td>
								<td class="column7">9</td>
								<td class="column7">10</td>
								<td class="column6">11</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>



@endsection