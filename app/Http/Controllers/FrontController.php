<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Image;
use App\Notice;
use App\Text;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
  private $image;
  private $contact;
  private $notice;
  private $text;

  public function __construct(
    Image $image,
    Contact $contact,
    Notice $notice,
    Text $text
  )
  {
    $this->image = $image;
    $this->contact = $contact;
    $this->notice = $notice;
    $this->text = $text;
  }

  public function index()
  {
    $images = $this->image->all();
    $notices = DB::table('notice')
      ->orderBy('id', 'desc')
      ->limit(3)
      ->get();
    $texts = $this->text->all();
    $front = array(
      'images' => $images,
      'notices' => $notices,
      'texts' => $texts
    );
    /* dd($front['notices']); */
    return view('welcome',compact('front'));
  }
}
