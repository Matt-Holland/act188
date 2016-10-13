@extends('vpirg')

@section('content')

<div id="main_content">
	@yield('content')

	{{ Form::open(array('action' => 'TestController@doSearch')) }}


	{{ Form::text('chemName', '', array('placeholder' => 'Enter a chemical name...')) }}

    <!-- submit buttons -->
    {{ Form::submit('Search') }}

    <!-- reset buttons -->
    {{ Form::reset('Reset') }}

    {{ Form::close() }}


</div>


@stop