<?php

namespace App\Http\Controllers;

use App\Text;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class TextController extends Controller
{
  private $text;

  public function __construct(Text $text)
  {
    $this->text = $text;
  }

  public function index()
  {
    $texts = $this->all();
    return view('text.index', compact('texts'));
  }

  public function store(Request $request)
  {
    try{
      if($request->has('id'))
        $text = $this->get($request->id);
      else
        $text = new Contact();
      $text->form_name = $request->form_name;
      $text->html_hash = $request->html_hash;
      $text->value = $request->value;
      $text->save();
      return redirect()->action('TextController@index');
    }catch (\Exception $e){
      dd($e);
      return redirect()->back()->with('error', 'Verifique se todos os dados necessarios foram inseridos.');
    }
  }

  public function edit($id)
  {
    $text = $this->get($id);
    return view('text.edit', compact('text'));
  }

  public function destroy($id)
  {
    $text = $this->get($id);
    $text->delete();
    return redirect()->back();
  }

  private function get($id)
  {
    $text = $this->text->findOrFail($id);
    return $text;
  }

  private function all()
  {
    $texts = $this->text->all();
    return $texts;
  }
}

