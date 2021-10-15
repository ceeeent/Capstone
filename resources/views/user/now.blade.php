@extends ('layouts.userlayout')

@section('continue')

<a href="{{ url()->previous() }}" class="btn btn-default">Back</a>

<h1>Train Now</h1>


<p class="title">{{$trainnow->name}}</p>
<p>{{$trainnow->description}}</p>
{!! $trainnow->youtube_url !!} 


@endsection 