<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventStage;
use Illuminate\Http\Request;

class EventStageController extends Controller
{
    public function index()
    {
        $eventStages = EventStage::all();
        return view('admin.main.index', compact('eventStages'));
    }

    public function add()
    {
        return view('admin.event-stages.add');
    }

    public function save(Request $request)
    {
        $formData = $request->all();

        $participantEventStages = EventStage::where('participant_id', $formData['participant_id'])->get();

        foreach ($formData['eventStages'] as $key => $event) {
            $persistData['coffee_space_id'] = $formData['coffeeSpaces'][$key];
            $persistData['event_room_id']   = $formData['eventRooms'][$key];
            $persistData['event_stage']     = $formData['eventStages'][$key];
            $persistData['participant_id']  = $formData['participant_id'];

            if (!$participantEventStages->count()) {
                EventStage::create($persistData);
            } else {
                if (isset($participantEventStages[$key]->id)){
                    EventStage::find($participantEventStages[$key]->id)->update($persistData);
                }
            }
        }

        \Session::flash('alert', ['type' => 'success', 'title' => 'Feito!', 'message' => 'Cadastro realizado com sucesso']);

        return redirect()->route('admin.participant.details', $request->participant_id);
    }

    public function edit($id)
    {
        $eventStage = EventStage::find($id);

        return view('admin.event-stages.edit', compact('eventStage'));
    }

    public function update(Request $request, $id)
    {
        EventStage::find($id)->update($request->all());

        \Session::flash('alert', ['type' => 'success', 'title' => 'Feito!', 'message' => 'Registro atualizado com sucesso']);

        return redirect()->route('app.root');
    }

    public function delete($id)
    {
        EventStage::find($id)->delete();

        \Session::flash('alert', ['type' => 'success', 'title' => 'Feito!', 'message' => 'Registro excluído com sucesso']);

        return redirect()->route('app.root');
    }
}
