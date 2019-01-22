<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\User;
use Auth;


class ProfileController extends Controller
{
    //
    public function profile(){
        return view('user/profile');
    }

    public  function updateProfile(Request $request){
       /* $rules = ['image' => 'required|image|max:1024*1024*1',];
        $messages = [
            'image.required' => 'La imagen es requerida',
            'image.image' => 'Formato no permitido',
            'image.max' => 'El máximo permitido es 1 MB',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        
        if ($validator->fails()){
            return redirect('user/profile')->withErrors($validator);
        }
        else{
            $name = str_random(30) . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move('perfiles', $name);
            $user = new User;
            $user->where('email', '=', Auth::user()->email)
                 ->update(['perfiles' => 'perfiles/'.$name]);
            return redirect('user')->with('status', 'Su imagen de perfil ha sido cambiada con éxito');
        }
    }
*/
    }
}
