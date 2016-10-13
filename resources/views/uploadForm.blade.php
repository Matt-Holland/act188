<html>
<head>
</head>
<body>


<div id="main_content">
	@yield('content')

	{{ Form::open(array('url'=>'upload_store', 'files'=>true)) }}


	{{ Form::label('file','File',array('id'=>'','class'=>'')) }}
    {{ Form::file('file','',array('id'=>'','class'=>'')) }}

    <!-- submit buttons -->
    {{ Form::submit('Save') }}

    <!-- reset buttons -->
    {{ Form::reset('Reset') }}

    {{ Form::close() }}


</div>




</body>
</html>