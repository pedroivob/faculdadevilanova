<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanoFinanceiroRequest;
use App\Models\PlanoFinanceiro;
use Illuminate\Http\Request;

class PlanoFinanceiroController extends Controller
{
    protected $view = 'crud.plano-financeiro';
    protected $route = 'planos-financeiros';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cads = PlanoFinanceiro::paginate(8);
        return view($this->view.'.index', compact('cads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->view.'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlanoFinanceiroRequest $request)
    {
        $cad = PlanoFinanceiro::create($request->all());

        return redirect()->route($this->route . '.index')->with('success', "Cadastrado efetivado com sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlanoFinanceiro  $PlanoFinanceiro
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cad = PlanoFinanceiro::find($id);
        
        if(!$cad) return redirect()->back();
        
        return view($this->view.'.show', compact('cad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlanoFinanceiro  $PlanoFinanceiro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cad = PlanoFinanceiro::find($id);
        
        if(!$cad) return redirect()->back();
        
        return view($this->view.'.update', compact('cad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlanoFinanceiro  $PlanoFinanceiro
     * @return \Illuminate\Http\Response
     */
    public function update(PlanoFinanceiroRequest $request, $id)
    {
        $cad = PlanoFinanceiro::find($id);
        
        if(!$cad) return redirect()->back();

        $cad->update($request->all());

        return redirect()->route($this->route . '.index')->with('success', "Cadastro {$cad->id} atualizado com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlanoFinanceiro  $PlanoFinanceiro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cad = PlanoFinanceiro::find($id);

        if (!$cad) return redirect()->back();

        $cad->delete();

        return redirect()->route($this->route . '.index')->with('danger', "Plano Financeiro: {$cad->id} foi removido!");
    }
}