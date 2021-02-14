<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelAtletas;


class crud extends Controller
{   
    


    public function index(){

    	$dados = ModelAtletas::all();
    	
    	return view('crud_atletas',compact('dados'));
    }



    public function insert(Request $request){
    	// $dados = $request->all();//
    	// unset($dados['_token']);



        //dd($dados);

    	// $insert = ModelAtletas::create($dados);

        $insert = new ModelAtletas();

        $insert->nome = $request->input('nome');
        $insert->apelido = $request->input('apelido');
        $insert->data_nasc = $request->input('data_nasc');
        $insert->clube_anterior = $request->input('clube_anterior');
        $insert->posicao = $request->input('posicao');
        $insert->perna_dominante = $request->input('perna_dominante');
        $insert->nacionalidade = $request->input('nacionalidade');
        $insert->naturalidade = $request->input('naturalidade');
        $insert->estado_civil = $request->input('estado_civil');
        $insert->email = $request->input('email');
        $insert->telefone = $request->input('telefone');
        //$insert->foto = $request->input('foto');


            

        if($request->hasfile('foto')){
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $insert->foto = $filename;
        }else{
            return $request;
            $insert->foto = '';
        }
        

    	$insert->save();

        return redirect('/crud')->with('message','atleta adicionado!');

    	
    }

    public function update($id,Request $request){

        ModelAtletas::find($id)->update($request->all());

        if($request->hasfile('foto')){
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $insert->foto = $filename;
        }else{
            return $request;
            $insert->foto = '';
        }
        return redirect('/crud')->with('message','atleta alterado!');

    }

    public function delete($id){

        ModelAtletas::find($id)->delete();

        return redirect('/crud')->with('message','atleta excluido!');

     }

     public function pesquisa(Request $request){

        $pesquisa = $request->get('pesquisa');
        $dados = ModelAtletas::where('nome', 'like', '%'.$pesquisa.'%')->paginate(5);

       

            return view('crud_atletas',['dados' => $dados]); 

        
        


          

     }

}           
