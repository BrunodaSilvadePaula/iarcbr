<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Mail;

class ContactController extends Controller
{
  private $contact;

  public function __construct(Contact $contact)
  {
    $this->contact = $contact;
  }

  public function index()
  {
    $contacts = $this->all();
    return view('contact.index', compact('contacts'));
  }

  public function store(Request $request)
  {
    try{
      /* $this->validate($request); */
      if($request->has('id'))
        $contact = $this->get($request->id);
      else
        $contact = new Contact();
      $contact->name = $request->nome;
      $contact->email = $request->email;
      $contact->phone = $request->phone;
      $contact->message = $request->message;
      $contact->save();
      Mail::send('emails.contato', [
        'nome' => $request->nome, 
        'email' => $request->email,
        'telefone' => $request->phone,
        'mensagem' => $request->message
      ],
      function ($message){
        $message->from('atendimento@bettacommerce.com.br', 'IarcBR')->subject('Contato');
        $message->to('bruno.dasilvadepaula@gmail.com');
      });
      $url = redirect()->back()->with('success', 'Seu contato foi registrado com sucesso.')->getTargetUrl();
      return redirect($url.'#contato');
    }catch (\Exception $e){
      $url = redirect()->back()->with('error', 'Verifique se todos os dados necessarios foram inseridos.')->getTargetUrl();
      return redirect($url.'#contato');
    }


  }

  public function edit($id)
  {
    $contact = $this->get($id);
    return view('contact.edit', compact('contact'));
  }

  public function destroy($id)
  {
    $contact = $this->get($id);
    $contact->delete();
    return redirect()->back();
  }

  private function get($id)
  {
    $contact = $this->contact->findOrFail($id);
    return $contact;
  }

  private function all()
  {
    $contacts = $this->contact->all();
    return $contacts;
  }

  /* public function validate(Request $request) */
  /* { */
  /*   /1* valida se campos obrigatorios estão preenchidos *1/ */
  /*   $validator = Validator::make($request->all(), [ */
  /*     'nome' => 'required', */
  /*     'email' => 'required', */
  /*     'telefone' => 'required', */
  /*     'message' => 'required|max:255', */
  /*   ]); */
  /*   if($validator->fails()){ */
  /*     return redirect()->back() */
  /*       ->withErrors($validator) */
  /*       ->withInput(); */

  /*   } */
  /*   return true; */
  /* } */
}

