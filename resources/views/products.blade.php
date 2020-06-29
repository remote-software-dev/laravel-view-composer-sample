@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-6">
        <table class="table" style="text-align: left; width:100%;">
            <tr>
                <th>Name of Product</th>
                <th>Price</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>
                    {{$product->name}}
                </td>
                <td>
                    USD&nbsp;{{$product->price}}
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection