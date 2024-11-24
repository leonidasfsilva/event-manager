<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CoffeeSpace;
use App\Models\EventRoom;
use App\Models\EventStage;
use Illuminate\Http\Request;

class CoffeeSpaceController extends Controller
{
    public function index()
    {
        $coffeSpaces = CoffeeSpace::all();
        return view('admin.coffee-spaces.index', compact('coffeSpaces'));
    }

    public function add()
    {
        return view('admin.coffee-spaces.add');
    }

    public function save(Request $request)
    {
        CoffeeSpace::create($request->all());

        \Session::flash('alert', ['type' => 'success', 'title' => 'Feito!', 'message' => 'Cadastro realizado com sucesso']);

        return redirect()->route('app.root');
    }

    public function edit($id)
    {
        $coffeeSpace = CoffeeSpace::find($id);

        return view('admin.coffee-spaces.edit', compact('coffeeSpace'));
    }

    public function update(Request $request, $id)
    {
        CoffeeSpace::find($id)->update($request->all());

        \Session::flash('alert', ['type' => 'success', 'title' => 'Feito!', 'message' => 'Registro atualizado com sucesso']);

        return redirect()->route('app.root');
    }

    public function details($id)
    {
        $eventStages  = app(ParticipantController::class)->getParticipantDetails(EventStage::where('coffee_space_id', $id)->orderBy('event_stage')->get());
        $coffeeSpace  = CoffeeSpace::find($id);
        $formReadOnly = true;

        return view('admin.coffee-spaces.details',
            compact(
                'formReadOnly',
                'coffeeSpace',
                'eventStages',
            )
        );
    }

    public function delete($id)
    {
        CoffeeSpace::find($id)->delete();

        \Session::flash('alert', ['type' => 'success', 'title' => 'Feito!', 'message' => 'Registro excluído com sucesso']);

        return redirect()->route('app.root');
    }

}
