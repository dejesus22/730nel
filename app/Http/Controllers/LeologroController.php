<?php

namespace App\Http\Controllers;

use App\Models\Leologro;
use Illuminate\Http\Request;

/**
 * Class LeologroController
 * @package App\Http\Controllers
 */
class LeologroController extends Controller
{
     /**
     * para hacer privada esta ruta .
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leologros = Leologro::paginate();

        return view('leologro.index', compact('leologros'))
            ->with('i', (request()->input('page', 1) - 1) * $leologros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $leologro = new Leologro();
        return view('leologro.create', compact('leologro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Leologro::$rules);

        $leologro = Leologro::create($request->all());

        return redirect()->route('leologro.index')->with('success', 'Leologro created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $leologro = Leologro::find($id);

        return view('leologro.show', compact('leologro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $leologro = Leologro::find($id);

        return view('leologro.edit', compact('leologro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Leologro $leologro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leologro $leologro)
    {
        request()->validate(Leologro::$rules);

        $leologro->update($request->all());

        return redirect()->route('leologro.index')
            ->with('success', 'Leologro updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $leologro = Leologro::find($id)->delete();

        return redirect()->route('leologro.index')
            ->with('success', 'Leologro deleted successfully');
    }
}
