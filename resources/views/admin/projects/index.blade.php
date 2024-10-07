@extends('layouts.dasboard')
@section('main-content')
    <div class="conainer-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between">
                    <h2>Elenco Progetti</h2>
                    <a href="{{ route('admin.projects.create')}}" class="btn btn-sm btn-primary">Aggiungi progetto</a>
                </div>
            </div>
            <div class="col-12">
                <div class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Slug</th>
                            <th>Strumenti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->slug }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('admin.projects.show', ['project' => $project->id])}}" class="btn btn-sm btn-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </div>
            </div>
        </div>
    </div>
@endsection