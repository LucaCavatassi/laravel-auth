@extends('layouts.admin') 

@section('content')
        <div class="container">
            <h1 class="mt-2">Lista Progetti</h1>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <th scope="row">{{ $project->id }}</th>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection