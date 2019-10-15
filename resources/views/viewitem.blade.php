@extends('layouts.main')
@section('content')




<div class="container">
    <div class="row">
            <div class="col-md-7 offset-md-3" >
                    <div style="height: auto !important;">
                        <br>
                        <h4>View my items</h4>
                        <hr>
                    <div>
                        <h3><b>AI Crystal</b></h3>
                        <table class="table table-condensed table-bordered">
                                <tr>
                                    <th class="col-md-4">Name:</th>
									<th>Quantity</th>
									<th>Color</th>
									<th>Price</th>
                                </tr>
                                @foreach ($aiitem as $aiitem)
                                <form action="/updateAi/{{ $aiitem->item_id }}" method="POST">
                                    @method('patch')
                                    @csrf
                                <tr>
                                        <td>{{ $aiitem->name }}</td>
                                        <!--<td>{{ $aiitem->item_id }}</td>-->
                                        <td><input style='width: 70px; font-size:12px;' type='text' required name='quantity' value='{{ $aiitem->quantity }}'></td>
                                        <td>
                                            <select name='color' style='height: 26px; width: 70px; font-size:12px;' id='equipref'> 
                                            <option selected>{{ $aiitem->color }}</option>
                                                <option>Red</option>
                                                <option>Green</option>
                                                <option>Blue</option>
                                            </select>
                                        </td>
                                    <td><input style='width: 120px; font-size: 12px;' class="price" required type='text' name='price' value='{{ $aiitem->price }}'></td>
                                    
                                        <td><input type='submit' class='btn btn-success' style='font-size: 10px;' name='search_button' id='search_button' value='Change'/></td>
                                    </form>
                                    <form action="/item/ai/{{ $aiitem->item_id }}/delete" method="POST">
                                        @method('delete')
                                        @csrf
                                        <td><input type='submit' class='btn btn-danger' style='font-size: 10px;' name='search_button' id='search_button' value='Delete'/></td>
                                    </form>
                                    </tr>
                                @endforeach
                        </table>
                        <h3><b>Equipment</b></h3>
                        <table class="table table-condensed table-bordered">
                                <tr>
                                        <th>Name</th>
                                        <th>ATK</th>
                                        <th>DEF</th>
                                        <th>Refinement</th>
                                        <th>Slots</th>
                                        <th>Slot 1</th>
                                        <th>Slot 2</th>
                                        <th>Ability Name</th>
                                        <th>Ability Lv</th>
                                        <th>Price</th>
                                </tr>
                                @foreach ( $equipitem as $equipitem)
                                <form action="/item/equip/{{ $equipitem->item_id }}/update" method="POST">
                                    @method('patch')
                                    @csrf
                                    <tr>
                                        <td>{{ $equipitem->name }}</td>
                                        <td><input style='width: 30px; font-size:12px;' type='text' name='atk' value='{{ $equipitem->atk }}'></td>
                                            <td><input style='width: 30px; font-size:12px;' type='text' name='def' value='{{ $equipitem->def }}'></td>
                                            <td style="width: 50px;">
                                                <select name='refinement' style='height: 26px; width: 50px; font-size:12px;' id='equipref'> 
                                                <option selected>{{ $equipitem->refinement }}</option>
                                                    <option value='0'>0</option>
                                                    <option value='1'>1</option>
                                                    <option value='2'>2</option>
                                                    <option value='3'>3</option>
                                                    <option value='4'>4</option>
                                                    <option value='5'>5</option>
                                                    <option value='6'>6</option>
                                                    <option value='7'>7</option>
                                                    <option value='8'>8</option>
                                                    <option value='9'>9</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name='slots' style='height: 26px; width: 35px' id='equipref'> 
                                                    <option selected>{{ $equipitem->slots }}</option>
                                                    <option value='0'>0</option>
                                                    <option value='1'>1</option>
                                                    <option value='2'>2</option>
                                                </select>
                                            </td>
                                            <td><input style='width: 100px; font-size:12px;' type='text' required name='slot1' value='{{ $equipitem->slot1 }}'></td>
                                            <td><input style='width: 100px; font-size:12px;' type='text' required name='slot2' value='{{ $equipitem->slot2 }}'></td>
                                        <td><input style='width: 100px; font-size:12px;' type='text' required name='ability' value='{{ $equipitem->ability }}'></td>
                                            <td>
                                                <select name='ability_level' style='height: 26px; width: 50px' id='equipref'> 
                                                <option selected>{{ $equipitem->ability_level }}</option>
                                                    <option value='0'>0</option>
                                                    <option value='1'>1</option>
                                                    <option value='2'>2</option>
                                                    <option value='3'>3</option>
                                                    <option value='4'>4</option>
                                                    <option value='5'>5</option>
                                                </select>
                                            </td>
                                        <td><input style='width: 100px; font-size:12px;' type='text' name='price' value='{{ $equipitem->price }}'></td>
                                            <td><input type='submit' class='btn btn-success' style='font-size:12px;' name='search_button' id='search_button' value='Change'/></td>
                                        </form>
                                        <form action="/item/equip/{{ $equipitem->item_id }}/delete" method="POST">
                                            @method('delete')
                                            @csrf
                                            <td><input type='submit' class='btn btn-danger' style='font-size:12px;' name='search_button' id='search_button' value='Delete'/></td>
                                        </form>
                                        </tr>
                                        @endforeach
                        </table>

                </div>
        </div>
</div>



@endsection