@extends('layouts.dashboards')

@section('main-content')
    <div class="container-full">
        <div class="row">
            <div class="col-12">
                <h2>Aggiungi un nuovo progetto</h2>
            </div>
            <div class="col-12">
                
                <form action="{{ route('admin.projects.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label for="" class="control-label">Nome Progetto</label>
                            <input type="text" name="name" id="" class="form-control form-control-sm" placeholder="Nome Progetto"> 
                        </div>
                        <div class="col-12">
                            <label for="" class="control-label">Sommario Progetto</label>
                            <textarea name="summary" id="" cols="30" rows="10" class="form-control form-control-sm"></textarea>
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