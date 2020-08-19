<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HelloController extends Controller
{
    public function index(Request $request)
    {
      $user = Auth::user();
      $items = DB::table('people2')->Paginate(5);
      return view('hello.index',['user' => $user,'items'=>$items]);
    }

    public function post(Request $request)
    {
      $items = DB::select('select * from people2');
      return view('hello.index',['items'=>$items]);
    }

    public function add(Request $request)
    {
      return view('hello.add');
    }

    public function create(Request $request)
    {
      $param = [
        'id'=> $request->id,
        'name'=> $request->name,
        'mail'=> $request->mail,
        'age'=> $request->age,
        'birthday1'=> $request->birthday1,
        'lastday'=> $request->lastday,
        'visitsnumber'=> $request->visitsnumber,
        'amount'=> $request->amount,
      ];
      DB::table('people2')->insert($param);
      return redirect('/hello');
    }





    public function edit(Request $request)
    {
      $item = DB::table('people2')->where('id',$request->id)->first();
      return view('hello.edit',['form' => $item]);
    }

    public function update(Request $request)
    {
      $param = [
        'id'=> $request->id,
        'name'=> $request->name,
        'mail'=> $request->mail,
        'age'=> $request->age,
        'birthday1'=> $request->birthday1,
        'lastday'=> $request->lastday,
        'visitsnumber'=> $request->visitsnumber,
        'amount'=> $request->amount,
      ];
      DB::table('people2')->where('id',$request->id)->update($param);
      return redirect('/hello');
    }

    public function del(Request $request)
    {
      $item = DB::table('people2')->where('id',$request->id)->first();
      return view('hello.del',['form' => $item]);
    }

    public function remove(Request $request)
    {
      DB::table('people2')->where('id',$request->id)->delete();
      return redirect('/hello');
    }
}
