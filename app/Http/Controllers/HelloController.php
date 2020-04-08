<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Myclasses\MyService;
use Illuminate\Support\Facades\Auth;

class HelloController extends Controller
{
  public function index(Request $request)
  {
      $user = Auth::user();
      $sort = $request->sort;
      $item = Person::orderBy($sort, 'asc')
        ->simplePagenate(5)
      $param = ['items' => $items, 'sort' => $sort, 'user' => $user];
      return view('hello.index', $param);
  }

  public function other()
  {
      $data = [
          'name' => 'Taro',
          'mail' => 'taro@yamada',
          'tel' => '090-999-999',
      ];
      $query_str = http_build_query($data);
      $data['msg'] = $query_str;
      return redirect()->route('hello');
  }
}
