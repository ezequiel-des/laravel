<?php

namespace App\Http\Controllers;

class MessageController extends Controller
{
    public function store()
    {
        return request()->validate([
            'name'=> 'required',
            'email'=>'required',
            'subject'=> 'required',
            'content'=>'required'
        ]);
        return 'Datos validados';
    }
}
