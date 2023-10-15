<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Couchbase\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;
use App\Traits\Admin;
use function PHPUnit\Framework\isNull;

class UserController extends Controller
{
    use Admin;
    public function ShowMainPage()
    {
            $this->setAdmin();
        return view('index');
    }
    public function ShowLogin()
    {
        return view('login');
    }
    public function Login(Request $request)
    {
        $data=$request->validate([
            'email'=>['required','email'],
            'password'=>['required'],
        ]);

       $check=User::all()->WHERE('email','=',$data['email']);
       $check2=User::all()->WHERE('password','=',$data['password']);
       if (!isNull($check)&&!isNull($check2))
       {
        echo $check;
           session(['email'=>$data['email']]);
           return redirect('/')->with('suc','شما با موفقیت وارد شدید.');
       }
       if (isNull($check) || isNull($check2) )
       {
           return redirect('/login')->with('err','اطلاعات به درستی وارد نشده است');
       }
        return redirect('/login')->with('err','شما وارد نشده اید.');
    }
    public function  ShowSinin()
    {
        return view('singin');
    }
    public function Singin(Request $request)
    {
        $data=$request->validate([
           'email'=>['required','email',Rule::unique('users','email')],
           'password'=>['required','min:8','max:20','confirmed'],
        ]);
        $data['password']=bcrypt($data['password']);
        User::create($data);
        session(['email'=>$data['email']]);
        return redirect('/')->with('suc','شما با موفقیت وارد شدید.');
    }
    public function Logout()
    {
        Session::forget('email');
        return redirect('/')->with('suc','شما خارج شدید.');
    }
    public function Test()
    {
        return view('controlPanellIndex');
    }
    public function SetTest(Request $request)
    {
        $data=$request->validate([
           'name'=>'required',
            'content'=>'required',
            'descript'=>'required',
            'teacher'=>'required',
            'time'=>'required',
            'price'=>'required',
            'category'=>'required',
            'file'=>'required',
        ]);
        $holder= $request->file('file');
        $holder->storeAs('public',$holder->getClientOriginalName());
        $holder->move('imageAndIcons/theLastSessions/',$holder->getClientOriginalName());
        $data['img_src']=$request->file('file')->getClientOriginalName();
       Item::create([
           'item_name'=>$data['name'],
           'item_content'=>$data['content'],
           'item_description'=>$data['descript'],
           'item_teacher'=>$data['teacher'],
           'item_time'=>$data['time'],
           'item_price'=>$data['price'],
           'item_category'=>$data['category'],
           'item_img_src'=>$data['img_src']
       ]);
       return redirect('/test')->with('suc','created');
    }
    public function TheLastsessions()
    {
        return view('theLastSessions');
    }
    public function offDay()
    {
        return view('offDay');
    }
    public function Article()
    {
        return view('article');
    }

}
