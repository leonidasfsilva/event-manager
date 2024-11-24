@extends('layouts.app')

@section('app-content')

    <main class="content">
        <div class="container-fluid p-0 col-6">

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Edição de espaço de café</h1>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Espaço ID # {{ $coffeeSpace->id }}</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.coffee-spaces.update', $coffeeSpace->id) }}" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="put">
                                @include('admin.coffee-spaces._form')
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                                <button type="button" class="btn btn-secondary backBtn">Voltar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
