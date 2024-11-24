<div class="mt-4"></div>
{{--@dd($eventStages)--}}
<div class="card">
    <div class="card-header">
        <h5 class="card-title">Ocupantes da etapa 1</h5>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th style="width:50%;">Nome</th>
            <th style="width:50%">Sobrenome</th>
        </tr>
        </thead>
        <tbody>
        @if($eventStages->count())
            @foreach($eventStages as $eventStage)
                @if($eventStage->event_stage == 1)
                    @isset($eventStage->participants)
                        @foreach($eventStage->participants as $participant)
                            <tr>
                                <td>{{ $participant->name }}</td>
                                <td>{{ $participant->lastname }}</td>
                            </tr>
                        @endforeach
                    @endisset
                @endif
            @endforeach
        @else
            <tr>
                <td colspan="2">
                    Nenhum registro encontrado.
                </td>
            </tr>
        @endisset
        </tbody>
    </table>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">Ocupantes da etapa 2</h5>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th style="width:50%;">Nome</th>
            <th style="width:50%">Sobrenome</th>
        </tr>
        </thead>
        <tbody>
        @if($eventStages->count())
            @foreach($eventStages as $eventStage)
                @if($eventStage->event_stage == 2)
                    @isset($eventStage->participants)
                        @foreach($eventStage->participants as $participant)
                            <tr>
                                <td>{{ $participant->name }}</td>
                                <td>{{ $participant->lastname }}</td>
                            </tr>
                        @endforeach
                    @endisset
                @endif
            @endforeach
        @else
            <tr>
                <td colspan="2">
                    Nenhum registro encontrado.
                </td>
            </tr>
        @endisset
        </tbody>
    </table>
</div>
