@extends('app')

@section('content')
<h1>{{ $product['model'] }}</h1>
<h3>{{ $product['brand'] }} - {{ $product['manufacturer'] }}</h3>
<h3>Disclosures:</h3>
<ul>
    @foreach($product['disclosures'] as $disclosure)
        <li>{{ $disclosure['chemical_name'] }}</li>
    @endforeach
</ul>

@stop
