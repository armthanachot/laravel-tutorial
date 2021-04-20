<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class member extends Controller

{
    public function create(Request $request)
    {
        $member = $request;
        // $encrypted = Crypt::encryptString($request->password);
        // dd($encrypted);
        // $decrypted = Crypt::decryptString($encrypted);
        $encrypted = Hash::make($request->password);
        $data =  ['password' => ['password_encrypted' => $encrypted]];
        // $data =  ['password_encrypted' => $encrypted,'data'=>['daa'=>"123"]];
        // $data->password_encrypted = ;

        return $data;
    }

    public function uploadFile(Request $request)
    {
        $file = $request->file('image');
        $file->move(base_path('\public\files\images'),$file->getClientOriginalName());
        return ['status'=>"OK"];
    }
}
