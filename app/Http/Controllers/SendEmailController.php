<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\VendoImovelU;
use App\Mail\SendEmailAdmin;
use App\Mail\SendEmailAdminC;
use App\Mail\ComproImovel;

class SendEmailController extends Controller
{
    function send(Request $request){
        $this->validate($request,[
            'localidade'   =>  'required',
            'natureza'     =>  'required',
            'tipologia'    =>  'required',
            'valor'        =>  'required',
            'nome'         =>  'required',
            'email'        =>  'required',
        ]);
        $data = array( 
            'localidade'   =>  $request->localidade,
            'natureza'     =>  $request->natureza,
            'tipologia'    =>  $request->tipologia,
            'valor'        =>  $request->valor,
            'descricao'    =>  $request->descricao,
            'nome'         =>  $request->nome,
            'email'        =>  $request->email,
        );
        Mail::to('geral@20mediar.pt')-> send(new SendEmailAdmin($data));
        Mail::to($data['email'])-> send(new VendoImovelU($data));
    }

    function sendCompra(Request $request){
        $this->validate($request,[
            'localidade'   =>  'required',
            'tipologia'    =>  'required',
            'orcamento'    =>  'required',
            'nome'         =>  'required',
            'email'        =>  'required',
        ]);
        $data = array( 
            'localidade'   =>  $request->localidade,
            'tipologia'    =>  $request->tipologia,
            'orcamento'    =>  $request->orcamento,
            'nome'         =>  $request->nome,
            'descricao'    =>  $request->descricao,
            'email'        =>  $request->email,
        );
        Mail::to('geral@20mediar.pt')-> send(new SendEmailAdminC($data));
        Mail::to($data['email'])-> send(new ComproImovel($data));
    }
}