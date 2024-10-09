@extends('layouts.dashboards')
@section('main.content')
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="alert-alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                                <li>{{$error}} </li>
                            @endforeach
                    </ul>
                </div>
                <form action="{{ route('admin.projects.update', ['project' => $project->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <label for="" class="control-label">Nome progetto</label>
                        <input type="text" name="name" id="" class="form-control form-control-sm" 
                            placeholder="Nome progetto" value="{{ old('name', $project->name)}}">
                    </div>
                    <div class="col-12">
                        <label for="" class="control-label">Sommario progetto</label>
                        <input type="text" name="name" id="" class="form-control form-control-sm" 
                            placeholder="Nome progetto" value="{{ old('summary', $project->summary)}}">
                    </div>         
                    <div class="col-12">
                            <button type="submit" class="btn btn-sm btn-success">Salva</button>
                    </div>                   
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection