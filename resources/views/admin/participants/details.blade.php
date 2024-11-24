@extends('layouts.app')

@section('app-content')

    <main class="content">
        <div class="container-fluid p-0 col-6">
            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Salas e espaços do participante durante o evento</h1>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.event-stages.save') }}" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="participant_id" value="{{$participant->id}}">
                                @include('admin.participants._form-details')
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                                <a href="{{route('app.root')}}" class="btn btn-secondary">Voltar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
