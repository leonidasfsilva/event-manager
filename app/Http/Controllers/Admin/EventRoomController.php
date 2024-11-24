<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CoffeeSpace;
use App\Models\EventRoom;
use App\Models\EventStage;
use App\Models\Participant;
use Illuminate\Http\Request;

class EventRoomController extends Controller
{
    public function index()
    {
        $eventRooms = EventRoom::all();
        return view('admin.main.index', compact('eventRooms'));
    }

    public function add()
    {
        return view('admin.event-rooms.add');
    }

    public function save(Request $request)
    {
        EventRoom::create($request->all());

        \Session::flash('alert', ['type' => 'success', 'title' => 'Feito!', 'message' => 'Cadastro realizado com sucesso']);

        return redirect()->route('app.root');
    }

    public function edit($id)
    {
        $eventRoom = EventRoom::find($id);

        return view('admin.event-rooms.edit', compact('eventRoom'));
    }

    public function update(Request $request, $id)
    {
        EventRoom::find($id)->update($request->all());

        \Session::flash('alert', ['type' => 'success', 'title' => 'Feito!', 'message' => 'Registro atualizado com sucesso']);

        return redirect()->route('app.root');
    }

    public function details($id)
    {
        $eventStages  = app(ParticipantController::class)->getParticipantDetails(EventStage::where('event_room_id', $id)->orderBy('event_stage')->get());
        $eventRoom    = EventRoom::find($id);
        $formReadOnly = true;

        return view('admin.event-rooms.details',
            compact(
                'formReadOnly',
                'eventRoom',
                'eventStages',
            )
        );
    }

    public function delete($id)
    {
        EventRoom::find($id)->delete();

        \Session::flash('alert', ['type' => 'success', 'title' => 'Feito!', 'message' => 'Registro excluído com sucesso']);

        return redirect()->route('app.root');
    }
}
