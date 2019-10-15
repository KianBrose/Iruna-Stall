@extends('layouts.main')

@section('content')

<form action="/updateAi/{{ $item->item_id }}" method="POST">
    @method('PATCH');
    @csrf
<tr>
<td>
    <label for="name">Item Name:</label>
</td>
<td  style="padding-left:10px;">
<input type="text" class="form-control iteminput" style="width: 400px" name="name" id="name" value={{ $item->name }}/>
</td>
</tr>
<tr>
<td>
    <label for="quantity">Quantity:</label>
</td>
<td  style="padding-left:10px;">
<input type="text" class="form-control iteminput" style="width: 400px" name="quantity" id="quantity" value="{{ $item->quantity }}"/>
</td>
</tr>
<tr>
<br>
<td>
    <label for="color">Color:</label>
</td>
<td  style="padding-left:10px;">
    <select name="color" class="form-control2" id="color"> 
       <option selected>Red</option>
       <option>Green</option>
       <option>Blue</option>
    </select>
</td>
</tr>
<tr>
<br>
<td>
    <label for="price">Price:</label>
</td>
<td  style="padding-left:10px;">
<input type="number" class="form-control iteminput" style="width: 400px" name="price" id="price" value="{{ $item->price }}"/>
</td>
</tr>
<tr>
<br>
<td>
    <label for="contact">Owner:</label>
</td>
<td  style="padding-left:10px;">
<input type="text" class="form-control iteminput" style="width: 400px" name="contact" id="contact" value="{{ $item->contact }}"/>
</td>
</tr>
<br><input type="submit" class="button btn" style="width: 150px" name="search_button" id="search_button" value="Add new item" "/>
</form>
@endsection