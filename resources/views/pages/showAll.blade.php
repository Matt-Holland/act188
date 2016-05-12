@extends('app')

@section('content')
<h1>show all models:</h1>
<h3> this is where it will go: </h3>

<ul>


@foreach($allProducts as $product)

    <li> GTIN: {{ $product->GTIN }}</li>

@endforeach


</ul>

@stop