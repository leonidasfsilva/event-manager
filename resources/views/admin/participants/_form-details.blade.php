@include('admin.participants._form')

@for($i = 1; $i <= 2; $i++)
    <input type="hidden" name="eventStages[]" value="{{$i}}">

    <h5 class="card-title">Etapa {{$i}}</h5>
    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="form-label">Sala</label>
            <select class="form-select flex-grow-1" name="eventRooms[]">
                <option value=""><< Selecione >></option>
                @isset($eventRooms)
                    @foreach($eventRooms as $eventRoom)
                        <option value="{{$eventRoom->id}}" {{ isset($eventStages[$i - 1]->event_room_id) && $eventStages[$i - 1]->event_room_id ==  $eventRoom->id ? 'selected' : ''}}>{{$eventRoom->name}}</option>
                    @endforeach
                @endisset
            </select>
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label">Espaço de Café</label>
            <select class="form-select flex-grow-1" name="coffeeSpaces[]">
                <option value=""><< Selecione >></option>
                @isset($coffeeSpaces)
                    @foreach($coffeeSpaces as $coffeeSpace)
                        <option value="{{$coffeeSpace->id}}" {{ isset($eventStages[$i - 1]->coffee_space_id) && $eventStages[$i - 1]->coffee_space_id ==  $coffeeSpace->id ? 'selected' : ''}}>{{$coffeeSpace->name}}</option>
                    @endforeach
                @endisset
            </select>
        </div>
    </div>
@endfor

