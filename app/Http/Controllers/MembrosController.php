<?php

namespace App\Http\Controllers;
use App\Models\Membro;
use Illuminate\Http\Request;

class MembrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $membro = new Membro();

        $membro->nome = $request->input('name');
        $membro->sobrenome = $request->input('lastname');
        $membro->email = $request->input('email');
        $membro->telefone = $request->input('telefone');
        $membro->areaDeInteresse = $request->input('interesse');
        $membro->imagemDePerfil = $request->input('FlImage');

        $membro->save();

        return redirect('/cadastroMembros'); /* Eu devo retornar para a view de cadastro ou uma 'membros'? */

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
