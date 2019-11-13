@extends('layouts.main')
@section('content')


<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<link href="{{ asset('css/util.css') }}" rel="stylesheet">
<div class="container">
	<div class="row">
		<div class="col-md-11 offset-md-1" >
		<div style="height: auto !important;">
			<br>
			<h4>View my items</h4>
			<hr>
            <h4>Equipment</h4>
            <br>
			<div>
				<div>
				<div class="row">
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
								<th class="equipment">Controls</th>
								<th class="equipment">Controls</th>
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
								<td class="equipment">
									<button type="button" class="btn btn-primary">Apply</button>
								</td>
								<td class="equipment">
									<button type="button" class="btn btn-secondary">Delete</button>
								</td>
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
								<td class="equipment">
									<button type="button" class="btn btn-primary">Apply</button>
								</td>
								<td class="equipment">
									<button type="button" class="btn btn-secondary">Delete</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
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
								<th class="materials">Controls</th>
								<th class="materials">Controls</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="materials">1</td>
								<td class="materials">2</td>
								<td class="materials">3</td>
								<td class="materials">4</td>
								<td class="materials">
									<button type="button" class="btn btn-primary">Apply</button>
								</td>
								<td class="materials">
									<button type="button" class="btn btn-secondary">Delete</button>
								</td>
							</tr>
							<tr>
								<td class="materials">1</td>
								<td class="materials">2</td>
								<td class="materials">3</td>
								<td class="materials">4</td>
								<td class="materials">
									<button type="button" class="btn btn-primary">Apply</button>
								</td>
								<td class="materials">
									<button type="button" class="btn btn-secondary">Delete</button>
								</td>
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
								<th class="xtals">ID</th>
								<th class="xtals">QTY</th>
								<th class="xtals">Price</th>
								<th class="xtals">Controls</th>
								<th class="xtals">Controls</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="xtals">1</td>
								<td class="xtals">2</td>
								<td class="xtals">3</td>
								<td class="xtals">4</td>
								<td class="xtals">
									<button type="button" class="btn btn-primary">Apply</button>
								</td>
								<td class="xtals">
									<button type="button" class="btn btn-secondary">Delete</button>
								</td>
							</tr>
							<tr>
								<td class="xtals">1</td>
								<td class="xtals">2</td>
								<td class="xtals">3</td>
								<td class="xtals">4</td>
								<td class="xtals">
									<button type="button" class="btn btn-primary">Apply</button>
								</td>
								<td class="xtals">
									<button type="button" class="btn btn-secondary">Delete</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
            <br>
            <h4>AL's</h4>
            <br>
			<div>
				<div>
					<table>
						<thead>
							<tr class="table100-head">
								<th class="als">Name</th>
								<th class="als">ID</th>
								<th class="als">QTY</th>
								<th class="als">Color</th>
								<th class="als">Price</th>
								<th class="als">Controls</th>
								<th class="als">Controls</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="als">1</td>
								<td class="als">2</td>
								<td class="als">3</td>
								<td class="als">4</td>
								<td class="als">5</td>
								<td class="als">
									<button type="button" class="btn btn-primary">Apply</button>
								</td>
								<td class="als">
									<button type="button" class="btn btn-secondary">Delete</button>
								</td>
							</tr>
							<tr>
								<td class="als">1</td>
								<td class="als">2</td>
								<td class="als">3</td>
                                <td class="als">4</td>
								<td class="als">5</td>
								<td class="als">
									<button type="button" class="btn btn-primary">Apply</button>
								</td>
								<td class="als">
									<button type="button" class="btn btn-secondary">Delete</button>
								</td>
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
								<th class="relics">ID</th>
								<th class="relics">QTY</th>
								<th class="relics">Price</th>
								<th class="relics">Controls</th>
								<th class="relics">Controls</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="relics">1</td>
								<td class="relics">2</td>
								<td class="relics">3</td>
								<td class="relics">4</td>
								<td class="relics">
									<button type="button" class="btn btn-primary">Apply</button>
								</td>
								<td class="relics">
									<button type="button" class="btn btn-secondary">Delete</button>
								</td>
							</tr>
							<tr>
								<td class="relics">1</td>
								<td class="relics">2</td>
								<td class="relics">3</td>
								<td class="relics">4</td>
								<td class="relics">
									<button type="button" class="btn btn-primary">Apply</button>
								</td>
								<td class="relics">
									<button type="button" class="btn btn-secondary">Delete</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>



@endsection