@extends('layouts.default')
@section('content')
	<div class="welcome">
		<h1 style="cursor:pointer;" onclick="press('{{URL::route('pages.create')}}')">Welcome to Stayzilla</h1>
	</div>
	 @if(!is_null($locations)) 
        @foreach($locations as $location)
            {{{$location->location}}}
        @endforeach    
       @endif 
@stop
@section('include_js')
<script type="text/javascript">
var press = function(url) {
	
	window.location.href=url;
}

</script>
@stop

