<?php

namespace App\Http\Controllers;

use App\Models\Empresariale;
use Illuminate\Http\Request;
use PDF;


/**
 * Class EmpresarialeController
 * @package App\Http\Controllers
 */
class EmpresarialeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresariales = Empresariale::paginate();

        return view('empresariale.index', compact('empresariales'))
            ->with('i', (request()->input('page', 1) - 1) * $empresariales->perPage());
    }

    public function pdf()
    {
        $empresariales = Empresariale::paginate();

        $pdf = PDF::loadView('empresariale.pdf',['empresariales'=>$empresariales]);
    
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresariale = new Empresariale();
        return view('empresariale.create', compact('empresariale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Empresariale::$rules);

        $empresariale = Empresariale::create($request->all());

        return redirect()->route('empresariales.index')
            ->with('success', 'Empresariale created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresariale = Empresariale::find($id);

        return view('empresariale.show', compact('empresariale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresariale = Empresariale::find($id);

        return view('empresariale.edit', compact('empresariale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Empresariale $empresariale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresariale $empresariale)
    {
        request()->validate(Empresariale::$rules);

        $empresariale->update($request->all());

        return redirect()->route('empresariales.index')
            ->with('success', 'Empresariale updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $empresariale = Empresariale::find($id)->delete();

        return redirect()->route('empresariales.index')
            ->with('success', 'Empresariale deleted successfully');
    }
}
