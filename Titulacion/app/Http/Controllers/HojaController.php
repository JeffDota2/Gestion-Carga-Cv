<?php

namespace App\Http\Controllers;

use App\Models\Hoja;
use Illuminate\Http\Request;
use PDF;

/**
 * Class HojaController
 * @package App\Http\Controllers
 */
class HojaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hojas = Hoja::paginate();

        return view('hoja.index', compact('hojas'))
            ->with('i', (request()->input('page', 1) - 1) * $hojas->perPage());
    }

    public function pdf()
    {
        $hojas = Hoja::paginate();

        $pdf = PDF::loadView('hoja.pdf',['hojas'=>$hojas]);
    
        return $pdf->stream();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hoja = new Hoja();
        return view('hoja.create', compact('hoja'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Hoja::$rules);

        $hoja = Hoja::create($request->all());

        return redirect()->route('hojas.index')
            ->with('success', 'Hoja created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hoja = Hoja::find($id);

        return view('hoja.show', compact('hoja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hoja = Hoja::find($id);

        return view('hoja.edit', compact('hoja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Hoja $hoja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hoja $hoja)
    {
        request()->validate(Hoja::$rules);

        $hoja->update($request->all());

        return redirect()->route('hojas.index')
            ->with('success', 'Hoja updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $hoja = Hoja::find($id)->delete();

        return redirect()->route('hojas.index')
            ->with('success', 'Hoja deleted successfully');
    }
}
