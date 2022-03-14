<?php

namespace App\Http\Controllers;

use App\Models\Rubrica;
use Illuminate\Http\Request;
use PDF;


/**
 * Class RubricaController
 * @package App\Http\Controllers
 */
class RubricaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rubricas = Rubrica::paginate();

        return view('rubrica.index', compact('rubricas'))
            ->with('i', (request()->input('page', 1) - 1) * $rubricas->perPage());
    }

    public function pdf()
    {
        $rubricas = Rubrica::paginate();

        $pdf = PDF::loadView('rubrica.pdf',['rubricas'=>$rubricas]);
    
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rubrica = new Rubrica();
        return view('rubrica.create', compact('rubrica'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Rubrica::$rules);

        $rubrica = Rubrica::create($request->all());

        return redirect()->route('rubricas.index')
            ->with('success', 'Rubrica created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rubrica = Rubrica::find($id);

        return view('rubrica.show', compact('rubrica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rubrica = Rubrica::find($id);

        return view('rubrica.edit', compact('rubrica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Rubrica $rubrica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rubrica $rubrica)
    {
        request()->validate(Rubrica::$rules);

        $rubrica->update($request->all());

        return redirect()->route('rubricas.index')
            ->with('success', 'Rubrica updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $rubrica = Rubrica::find($id)->delete();

        return redirect()->route('rubricas.index')
            ->with('success', 'Rubrica deleted successfully');
    }
}
