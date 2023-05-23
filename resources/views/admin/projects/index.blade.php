@extends('layouts.admin')

@section('content')

<a href="{{route('admin.projects.create')}}" class="btn btn-primary mt-4 mb-4">Create a new Project</a>

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
                <td class="d-flex">
                    <a class="btn btn-primary me-2" href="{{route('admin.projects.show', $project->slug)}}">Detail</a>
                    <a class="btn btn-warning me-2" href="{{route('admin.projects.edit', $project->slug)}}">Edit</a>

                </td>
            </tr>
        @endforeach
    </tbody>
  </table>

@endsection