<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class NoticeController extends Controller
{
  private $notice;

  public function __construct(Notice $notice)
  {
    $this->notice = $notice;
  }

  public function index()
  {
    $notices = $this->all();
    return view('notice.index', compact('notices'));
  }

  public function store(Request $request)
  {
    try{
      if($request->has('id'))
        $notice = $this->get($request->id);
      else
        $notice = new Notice();
      if($request->hasFile('image')){
        $file = $request->file('image');
        $extensao = $file->guessExtension();
        $destination = public_path().DIRECTORY_SEPARATOR.'image';
        $fileName = str_replace(' ','',$request->titulo).'-'.pathinfo('Hearthstone.desktop')['extension'].'.'.$extensao;
        $file->move($destination, $fileName);
        $notice->image = $fileName;
      }
      $notice->title = $request->titulo;
      $notice->sub_title = $request->sub_title;
      $notice->description = $request->description;
      $notice->description_short = $request->description_short;
      $notice->save();
      return redirect()->back()->with('success', 'Seus dados foram salvos com sucesso.');
    }catch (\Exception $e){
      return redirect()->back()->with('error', 'Verifique se todos os dados necessarios foram inseridos.Lembre-se que a breve descrição só pode ter menos que 214 caracteres.');
    }
  }

  public function edit($id)
  {
    $notice = $this->get($id);
    return view('notice.edit', compact('notice'));
  }

  public function destroy($id)
  {
    $notice = $this->get($id);
    $notice->delete();
    return redirect()->back();
  }

  private function get($id)
  {
    $notice = $this->notice->findOrFail($id);
    return $notice;
  }

  private function all()
  {
    $notices = $this->notice->all();
    return $notices;
  }

  public function showAll()
  {
    $notices = $this->notice->paginate(10);
    $front = array(
      'notices' => $notices
    );
    return view('notice.showAll',compact('notices', 'front'));
  }

  public function showNotice($id)
  {
    $notice = $this->notice->findOrFail($id);
    $top_notice = $this->notice
      ->orderBy('id', 'desc')
      ->limit('5')
      ->get();
    $notices = $this->notice->all();
    $front = array(
      'notices' => $notices
    );
    return view('notice.notice', compact('front', 'notice', 'top_notice'));
  }
}

