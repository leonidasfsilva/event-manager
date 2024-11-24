<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CoffeeSpace;
use App\Models\EventRoom;
use App\Models\EventStage;
use App\Models\Participant;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function index()
    {
        $registers = Participant::all();
        return view('admin.participants.index', compact('registers'));
    }

    public function add()
    {
        return view('admin.participants.add');
    }

    public function save(Request $request)
    {
        Participant::create($request->all());

        \Session::flash('alert', ['type' => 'success', 'title' => 'Feito!', 'message' => 'Cadastro realizado com sucesso']);

        return redirect()->route('app.root');
    }

    public function edit($id)
    {
        $participant = Participant::find($id);

        return view('admin.participants.edit', compact('participant'));
    }

    public function update(Request $request, $id)
    {
        Participant::find($id)->update($request->all());

        \Session::flash('alert', ['type' => 'success', 'title' => 'Feito!', 'message' => 'Registro atualizado com sucesso']);

        return redirect()->route('app.root');
    }

    public function details($id)
    {
        $participant  = Participant::find($id);
        $eventStages  = EventStage::where('participant_id', $id)->get();
        $eventRooms   = EventRoom::all();
        $coffeeSpaces = CoffeeSpace::all();
        $formReadOnly = true;

        return view('admin.participants.details',
            compact(
                'participant',
                'formReadOnly',
                'eventRooms',
                'eventStages',
                'coffeeSpaces',
            )
        );
    }

    public function delete($id)
    {
        Participant::find($id)->delete();

        \Session::flash('alert', ['type' => 'success', 'title' => 'Feito!', 'message' => 'Registro excluído com sucesso']);

        return redirect()->route('app.root');
    }

    public function getParticipantDetails(array|int|Collection $request)
    {
        if ($request instanceof Collection) {
            foreach ($request as $item) {
                $item->participants = Participant::where('id', $item->participant_id)->get(['name', 'lastname']);
            }
        }
        return $request;
    }

}
