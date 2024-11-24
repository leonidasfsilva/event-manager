@extends('layouts.app')

@section('app-content')

    <main class="content">
        <div class="container-fluid p-0 col-6">

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Edição de sala de evento</h1>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Editar dados da sala</h5>
                            <h6 class="card-subtitle text-muted">ID # {{ $eventRoom->id }}</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.event-rooms.update', $eventRoom->id) }}" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="put">
                                @include('admin.event-rooms._form')
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
