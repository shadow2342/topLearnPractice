<?php
namespace App\Traits;

use App\Models\User;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isNull;


trait Admin {

public function setAdmin()
{
    $check=User::all()->where('email','=','pouya@gmail.com')->where('password','=','pouyaAdminPakseresht');
    if (!isNull($check))
    {
        echo $check;
        User::create([
            'password'=>'pouyaAdminPakseresht',
            'email'=>'pouya@gmail.com',
            'role'=>'admin'
        ]);
    }
}

}
