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
								<th class="equipment">Controls</th>
								<th class="equipment">Controls</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<form>
									<td class="equipment">Name</td>
									<td class="equipment">
										<input type="text" class="form-control iteminput" style="width: 50px" name="atk" id="atk"/>
									</td>
									<td class="equipment">
										<input type="text" class="form-control iteminput" style="width: 50px" name="def" id="def"/>
									</td>
									<td class="equipment">
										<select name="refinement" class="form-control iteminput" id="refinement"> 
										   <option selected value="0">0</option>
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
										<select name="equipslotamount" class="form-control iteminput" id="equipslotamount"> 
										   <option selected value="0">0</option>
										   <option value="0">0</option>
										   <option value="1">1</option>
										   <option value="2">2</option>
										</select>
									</td>
									<td class="equipment">
										<input type="text" class="form-control iteminput" style="width: 130px" name="s1" id="s1"/>
									</td>
									<td class="equipment">
										<input type="text" class="form-control iteminput" style="width: 130px" name="s2" id="s2"/>
									</td>
									<td class="equipment">
										<input type="text" class="form-control iteminput" style="width: 160px" name="abil" id="abil"/>
									</td>
									<td class="equipment">
										<select name="abilv" class="form-control iteminput" id="abilv"> 
										   <option selected value="0">0</option>
										   <option value="0">0</option>
										   <option value="1">1</option>
										   <option value="2">2</option>
										   <option value="3">3</option>
										   <option value="4">4</option>
										   <option value="5">5</option>
										</select>
									</td>
									<td class="equipment">
										<input type="text" class="form-control iteminput" style="width: 140px" name="price" id="price"/>
									</td>
									<td class="equipment">
										<button type="submit" class="btn btn-outline-success">Apply</button>
									</td>
									<td class="equipment">
										<button type="submit" class="btn btn-outline-danger">Delete</button>
									</td>
								</form>
							</tr>
							<tr>
								<form>
									<td class="equipment">Name</td>
									<td class="equipment">
										<input type="text" class="form-control iteminput" style="width: 50px" name="atk" id="atk"/>
									</td>
									<td class="equipment">
										<input type="text" class="form-control iteminput" style="width: 50px" name="def" id="def"/>
									</td>
									<td class="equipment">
										<select name="refinement" class="form-control iteminput" id="refinement"> 
										   <option selected value="0">0</option>
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
										   <option selected value="0">0</option>
										   <option value="0">0</option>
										   <option value="1">1</option>
										   <option value="2">2</option>
										</select>
									</td>
									<td class="equipment">
										<input type="text" class="form-control iteminput" style="width: 130px" name="s1" id="s1"/>
									</td>
									<td class="equipment">
										<input type="text" class="form-control iteminput" style="width: 130px" name="s2" id="s2"/>
									</td>
									<td class="equipment">
										<input type="text" class="form-control iteminput" style="width: 160px" name="abil" id="abil"/>
									</td>
									<td class="equipment">
										<select name="abilv" class="form-control iteminput" id="abilv" style="width: 60px"> 
										   <option selected value="0">0</option>
										   <option value="0">0</option>
										   <option value="1">1</option>
										   <option value="2">2</option>
										   <option value="3">3</option>
										   <option value="4">4</option>
										   <option value="5">5</option>
										</select>
									</td>
									<td class="equipment">
										<input type="text" class="form-control iteminput" style="width: 140px" name="price" id="price"/>
									</td>
									<td class="equipment">
										<button type="submit" class="btn btn-outline-success">Apply</button>
									</td>
									<td class="equipment">
										<button type="submit" class="btn btn-outline-danger">Delete</button>
									</td>
								</form>
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
								<th class="materials">Controls</th>
								<th class="materials">Controls</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<form>
									<td class="materials">1</td>
									<td class="materials">
										<input type="text" class="form-control iteminput" style="width: 80px" name="qty" id="qty"/>
									</td>
									<td class="materials">
										<input type="text" class="form-control iteminput" style="width: 160px" name="price" id="price"/>
									</td>
									<td class="materials">
										<button type="submit" class="btn btn-outline-success">Apply</button>
									</td>
									<td class="materials">
										<button type="submit" class="btn btn-outline-danger">Delete</button>
									</td>
								</form>
							</tr>
							<tr>
								<form>
									<td class="materials">1</td>
									<td class="materials">
										<input type="text" class="form-control iteminput" style="width: 80px" name="qty" id="qty"/>
									</td>
									<td class="materials">
										<input type="text" class="form-control iteminput" style="width: 160px" name="price" id="price"/>
									</td>
									<td class="materials">
										<button type="submit" class="btn btn-outline-success">Apply</button>
									</td>
									<td class="materials">
										<button type="submit" class="btn btn-outline-danger">Delete</button>
									</td>
								</form>
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
								<th class="xtals">Controls</th>
								<th class="xtals">Controls</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<form>
									<td class="xtals">1</td>
									<td class="xtals">
										<input type="text" class="form-control iteminput" style="width: 80px" name="qty" id="qty"/>
									</td>
									<td class="xtals">
										<input type="text" class="form-control iteminput" style="width: 160px" name="price" id="price"/>
									</td>
									<td class="xtals">
										<button type="submit" class="btn btn-outline-success">Apply</button>
									</td>
									<td class="xtals">
										<button type="submit" class="btn btn-outline-danger">Delete</button>
									</td>
								</form>
							</tr>
							<tr>
								<form>
									<td class="xtals">1</td>
									<td class="xtals">
										<input type="text" class="form-control iteminput" style="width: 80px" name="qty" id="qty"/>
									</td>
									<td class="xtals">
										<input type="text" class="form-control iteminput" style="width: 160px" name="price" id="price"/>
									</td>
									<td class="xtals">
										<button type="submit" class="btn btn-outline-success">Apply</button>
									</td>
									<td class="xtals">
										<button type="submit" class="btn btn-outline-danger">Delete</button>
									</td>
								</form>
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
								<th class="als">QTY</th>
								<th class="als">Color</th>
								<th class="als">Price</th>
								<th class="als">Controls</th>
								<th class="als">Controls</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<form>
									<td class="als">1</td>
									<td class="als">
										<input type="text" class="form-control iteminput" style="width: 80px" name="qty" id="qty"/>
									</td>
									<td class="als">
										<select name="color" class="form-control iteminput" id="color" style="width: 120px"> 
										   <option selected value="R">Red</option>
										   <option value="R">Red</option>
										   <option value="G">Green</option>
										   <option value="B">Blue</option>
										</select>
									</td>
									<td class="als">
										<input type="text" class="form-control iteminput" style="width: 160px" name="price" id="price"/>
									</td>
									<td class="als">
										<button type="submit" class="btn btn-outline-success">Apply</button>
									</td>
									<td class="als">
										<button type="submit" class="btn btn-outline-danger">Delete</button>
									</td>
								</form>
							</tr>
							<tr>
								<form>
									<td class="als">1</td>
									<td class="als">
										<input type="text" class="form-control iteminput" style="width: 80px" name="qty" id="qty"/>
									</td>
									<td class="als">
										<select name="color" class="form-control iteminput" id="color" style="width: 60px"> 
										   <option selected value="R">R</option>
										   <option value="R">R</option>
										   <option value="G">G</option>
										   <option value="B">B</option>
										</select>
									</td>
									<td class="als">
										<input type="text" class="form-control iteminput" style="width: 160px" name="price" id="price"/>
									</td>
									<td class="als">
										<button type="submit" class="btn btn-outline-success">Apply</button>
									</td>
									<td class="als">
										<button type="submit" class="btn btn-outline-danger">Delete</button>
									</td>
								</form>
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
								<th class="relics">Controls</th>
								<th class="relics">Controls</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<form>
									<td class="relics">1</td>
									<td class="relics">
										<input type="text" class="form-control iteminput" style="width: 80px" name="qty" id="qty"/>
									</td>
									<td class="relics">
										<input type="text" class="form-control iteminput" style="width: 160px" name="price" id="price"/>
									</td>
									<td class="relics">
										<button type="submit" class="btn btn-outline-success">Apply</button>
									</td>
									<td class="relics">
										<button type="submit" class="btn btn-outline-danger">Delete</button>
									</td>
								</form>
							</tr>
							<tr>
								<form>
									<td class="relics">1</td>
									<td class="relics">
										<input type="text" class="form-control iteminput" style="width: 80px" name="qty" id="qty"/>
									</td>
									<td class="relics">
										<input type="text" class="form-control iteminput" style="width: 160px" name="price" id="price"/>
									</td>
									<td class="relics">
										<button type="submit" class="btn btn-outline-success">Apply</button>
									</td>
									<td class="relics">
										<button type="submit" class="btn btn-outline-danger">Delete</button>
									</td>
								</form>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>



@endsection