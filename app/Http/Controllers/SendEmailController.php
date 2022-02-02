<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    function send(Request $request){
        $this->validate($request,[
            'localidade'   =>  'required',
            'natureza'     =>  'required',
            'tipologia'    =>  'required',
            'valor'        =>  'required',
            'descricao'    =>  'required',
        ]);
        $data = array(
        'descricao' =>$request->descricao
        );
        Mail::to('david.g.leal00@gmail.com')-> send(new SendMail($data));
    }
}