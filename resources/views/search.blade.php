@extends('layouts.main')

@section('content')


<div class="container">
    <div class="row" >
        <div class="col-md-7 offset-md-3" >

            <div style="height: auto !important;">
                <br>
                <h4>Search Results: </h4>
                <div></div>
                <hr>
                <div>
                    <table class="table table-condensed table-bordered">
                            <tr>
                                   <th class="col-md-4">Item: 
                            </th>
                            <h3>AI crystal</h3>
                            <th>Color</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
											<th>Contact Seller</th>
                                        </tr>
                            @foreach($aiSearch as $aiSearch)
                                        <tr>
                                                <td>{{ $aiSearch->name }}</td>
                                                <td>{{ $aiSearch->color }}</td>
                                                <td>{{ $aiSearch->price }}</td>
                                                <td>{{ $aiSearch->quantity }}</td>
                                                <td><a href='/user/{{$aiSearch->owner_id}}'>Facebook</a></td>
                                            </tr>
                            @endforeach
                    </table>
                            
                </div>
            </div>
        </div>


@endsection