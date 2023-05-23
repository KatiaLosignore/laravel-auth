@extends('layouts.admin')


@section('content')

<h1>{{$project->title}}</h1>
<h6><small>Slug: {{$project->slug}}</small></h6>

@if ($project->image)
    <img class="img-thumbnail" src="{{$project->image}}" alt="{{$project->title}}"/>
@endif

<p>{{$project->content}}</p>

<a class="btn btn-primary" href="{{route('admin.projects.index')}}">Back</a>

@endsection
