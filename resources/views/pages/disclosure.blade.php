@extends('app')

@section('content')
<h1>{{ $disclosure['model'] }}</h1>
<h3>{{ $disclosure['brand'] }} - {{ $disclosure['manufacturer'] }}</h3>
<h3>{{ $disclosure['chemical_name'] }}</h3>
@stop
