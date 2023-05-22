@extends('layouts.admin')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Slug</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
            <tr>
                <td>{{$project->id}}</td>
                <td>{{$project->title}}</td>
                <td>{{$project->content}}</td>
                <td>{{$project->slug}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('admin.projects.show', $project->slug)}}">VEDI</a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>

@endsection