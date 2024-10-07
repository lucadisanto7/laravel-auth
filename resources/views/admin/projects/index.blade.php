@extends('layouts.dasboard')
@section('main-content')
    <div class="conainer-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex">
                    <h2>Elenco Progetti</h2>
                    <a href="" class="btn btn-sm btn-primary">Aggiungi progetto</a>
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
                </div>
            </div>
        </div>
    </div>
@endsection