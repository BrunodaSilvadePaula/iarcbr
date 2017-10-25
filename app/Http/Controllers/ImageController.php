<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
/* use Illuminate\Http\File; */
/* use Illuminate\Http\UploadedFile; */

class ImageController extends Controller
{
  private $image;

  public function __construct(Image $image)
  {
    $this->image = $image;
  }

  public function index()
  {
    $images = $this->all();
    return view('image.index', compact('images'));
  }

  public function store(Request $request)
  {
    try{
      if($request->has('id'))
        $image = $this->get($request->id);
      else
        $image = new Contact();
      if($request->hasFile('image')){
        $file = $request->file('image');
        $extensao = $file->guessExtension();
        $destination = public_path().DIRECTORY_SEPARATOR.'image';
        $fileName = $request->html_hash.'-'.pathinfo('Hearthstone.desktop')['extension'].'.'.$extensao;
        $file->move($destination, $fileName);
      }
      $image->image = $fileName;
      $image->html_hash = $request->html_hash;
      $image->save();
      return redirect()->action('ImageController@index');
    }catch (\Exception $e){
      return redirect()->back()->with('error', 'Verifique se todos os dados necessarios foram inseridos.');
    }
  }

  public function edit($id)
  {
    $image = $this->get($id);
    return view('image.edit', compact('image'));
  }

  public function destroy($id)
  {
    $image = $this->get($id);
    $image->delete();
    return redirect()->back();
  }

  private function get($id)
  {
    $image = $this->image->findOrFail($id);
    return $image;
  }

  private function all()
  {
    $images = $this->image->all();
    return $images;
  }
}

