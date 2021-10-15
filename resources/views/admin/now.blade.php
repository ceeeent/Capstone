@extends ('layouts.adminlayout')

@section('cont')

<div class="content">

<a href="{{ url()->previous() }}" class="btn btn-default">Back</a>

<h1>Train Now </h1>


{!! $trainnow->youtube_url !!} 
<p class="title">{{$trainnow->name}}</p>
<p>{{$trainnow->description}}</p>


</div>
@endsection