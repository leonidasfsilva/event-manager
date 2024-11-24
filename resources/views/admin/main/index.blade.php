@extends('layouts.app')

@section('app-content')

    <main class="content">
        <div class="container-fluid p-0">

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Página Inicial</h1>
            </div>

            <div class="row">
                <div class="col-md-3 col-xl-2">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Menu</h5>
                        </div>

                        <div class="list-group list-group-flush" role="tablist">
                            <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#participants" role="tab" aria-selected="false" tabindex="-1">
                                Participantes
                            </a>
                            <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#event-rooms" role="tab" aria-selected="true">
                                Salas de Evento
                            </a>
                            <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#coffee-break" role="tab" aria-selected="false" tabindex="-1">
                                Espaços de Café
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-xl-10">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="participants" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-actions float-end">
                                        <a href="{{ route('admin.participant.add') }}" type="button" class="btn btn-primary text-white">Adicionar</a>
                                    </div>
                                    <h5 class="card-title">Participantes do Evento</h5>
                                    </h6>
                                </div>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th style="width:40%;">Nome</th>
                                        <th style="width:25%">Sobrenome</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($participants)
                                        @foreach($participants as $participant)
                                            <tr>
                                                <td>{{ $participant->name }}</td>
                                                <td>{{ $participant->lastname }}</td>
                                                <td class="table-action">
                                                    <a href="{{ route('admin.participant.details', $participant->id) }}" title="Ver detalhes">
                                                        <i class="fal fa-search-plus fa-fw fa-lg"></i>
                                                    </a>
                                                    <a href="{{ route('admin.participant.edit', $participant->id) }}" title="Editar">
                                                        <i class="fal fa-edit fa-fw fa-lg"></i>
                                                    </a>
                                                    <a href="#" class="deleteParticipant" title="Excluir" data-bs-toggle="modal" participantId="{{$participant->id}}" data-bs-target="#modalDeleteParticipant">
                                                        <i class="fal fa-trash-can-xmark fa-fw fa-lg"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4">
                                                Nenhum registro encontrado.
                                            </td>
                                        </tr>
                                    @endisset
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="event-rooms" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-actions float-end">
                                        <a href="{{ route('admin.event-rooms.add') }}" type="button" class="btn btn-primary text-white">Adicionar</a>
                                    </div>
                                    <h5 class="card-title">Salas de Evento</h5>
                                    <h6 class="card-subtitle text-muted">Salas projetadas para os mais variados tipos de eventos e treinamentos.
                                    </h6>
                                </div>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th style="width:40%;">Nome</th>
                                        <th style="width:25%">Lotação</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($eventRooms)
                                        @foreach($eventRooms as $room)
                                            <tr>
                                                <td>{{ $room->id }}</td>
                                                <td>{{ $room->name }}</td>
                                                <td>{{ $room->capacity }}</td>
                                                <td class="table-action">
                                                    <a href="{{ route('admin.event-rooms.details', $room->id) }}" title="Ver detalhes">
                                                        <i class="fal fa-search-plus fa-fw fa-lg"></i>
                                                    </a>
                                                    <a href="{{ route('admin.event-rooms.edit', $room->id) }}" title="Editar">
                                                        <i class="fal fa-edit fa-fw fa-lg"></i>
                                                    </a>
                                                    <a href="#" class="deleteRoom" title="Excluir" data-bs-toggle="modal" roomId="{{$room->id}}" data-bs-target="#modalDeleteRoom">
                                                        <i class="fal fa-trash-can-xmark fa-fw fa-lg"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4">
                                                Nenhum registro encontrado.
                                            </td>
                                        </tr>
                                    @endisset
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="coffee-break" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-actions float-end">
                                        <a href="{{ route('admin.coffee-spaces.add') }}" type="button" class="btn btn-primary text-white">Adicionar</a>
                                    </div>
                                    <h5 class="card-title">Espaços de Café</h5>
                                    <h6 class="card-subtitle text-muted">Espaços reservados para permitir aos participantes uma pausa entre os eventos.
                                    </h6>
                                </div>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th style="width:40%;">Nome</th>
                                        <th style="width:25%">Lotação</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($coffeeSpaces)
                                        @foreach($coffeeSpaces as $space)
                                            <tr>
                                                <td>{{ $space->id }}</td>
                                                <td>{{ $space->name }}</td>
                                                <td>{{ $space->capacity }}</td>
                                                <td class="table-action">
                                                    <a href="{{ route('admin.coffee-spaces.details', $space->id) }}" title="Ver detalhes">
                                                        <i class="fal fa-search-plus fa-fw fa-lg"></i>
                                                    </a>
                                                    <a href="{{ route('admin.coffee-spaces.edit', $space->id) }}" title="Editar">
                                                        <i class="fal fa-edit fa-fw fa-lg"></i>
                                                    </a>
                                                    <a href="#" class="deleteSpace" title="Excluir" data-bs-toggle="modal" spaceId="{{$space->id}}" data-bs-target="#modalDeleteSpace">
                                                        <i class="fal fa-trash-can-xmark fa-fw fa-lg"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4">
                                                Nenhum registro encontrado.
                                            </td>
                                        </tr>
                                    @endisset
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="modal fade" id="modalDeleteParticipant" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Excluir Participante</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formDeleteParticipant" action="{{ route('admin.participant.delete') }}" method="post">
                    {{csrf_field()}}
                    <div class="modal-body m-3">
                        <p class="mb-0">
                            Deseja realmente excluir o registro?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalDeleteRoom" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Excluir Sala de Evento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formDeleteRoom" action="{{ route('admin.event-rooms.delete') }}" method="post">
                    {{csrf_field()}}
                    <div class="modal-body m-3">
                        <p class="mb-0">
                            Deseja realmente excluir o registro?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalDeleteSpace" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Excluir Espaço de Café</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formDeleteSpace" action="{{ route('admin.coffee-spaces.delete') }}" method="post">
                    {{csrf_field()}}
                    <div class="modal-body m-3">
                        <p class="mb-0">
                            Deseja realmente excluir o registro?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
