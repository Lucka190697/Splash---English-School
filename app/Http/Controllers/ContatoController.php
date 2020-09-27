<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContatoController extends Controller
{
    public function index()
    {
      // dd("metodo index");
        return view('contact.email');
    }

    public function enviaContato(Request $request)
    {
        $validacao = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email',
            'mensagem' => 'required|string',
        ]);

        $nome = $request->nome;
        $email = $request->email;
        $mensagem = $request->mensagem;

        Mail::to('lcalbertomatoso2012@gmail.com')->send(new Contact($request));

        // $message = _m('success');
        // return $this->chooseReturn('success', $message, 'welcome');

        $request->session()->flash('alert-success', 'Sua mensagem foi enviada, obrigado!');
//        return redirect()->route('welcome', [$request]);
        return view('welcome');
    }
}
