@extends('layouts.app')

@section('app-content')

    <main class="content">
        <div class="container-fluid p-0 col-6">
            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Ocupação do espaço de café durante o evento</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Sala ID # {{ $coffeeSpace->id }}</h5>
                        </div>
                        <div class="card-body">
                            @include('admin.coffee-spaces._form')
                            @include('admin.participants._participants-list')
                            <button type="button" class="btn btn-secondary backBtn">Voltar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
