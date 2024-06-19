@extends('layouts.admin') 

@section('content')
        <div class="container">
            <h1 class="mt-2">Lista Progetti</h1>
            <p>Clicca il nome per avere maggiori informazioni</p>

            <table class="table table-striped table-hove ms-body" >
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
                            <td><a href="{{ route("admin.dashboard") }}">{{ $project->title }}</a></td>
                            <td>{{ $project->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection