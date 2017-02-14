<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

const DEFAULT_URL = 'https://sandbox-mangan.firebaseio.com/';
const DEFAULT_TOKEN = 'Tw82srBlXIoNY4Dpjm5tRUQaE2UZQjVNu0oAgoia';
const DEFAULT_PATH = '/';

class SliderController extends Controller
{
    public function listslider(){
        return view ('slider');
    }

    public function store(Request $request){
        $firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
        $data = $request->all();
        $submit = array(
            "url" => $data["url"]
        );
        $firebase->update(DEFAULT_PATH.'slider/'.$data["index"], $submit);
        return $this->listslider();
    }
}
