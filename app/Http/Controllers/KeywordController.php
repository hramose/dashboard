<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

const DEFAULT_URL = 'https://sandbox-mangan.firebaseio.com/';
const DEFAULT_TOKEN = 'Tw82srBlXIoNY4Dpjm5tRUQaE2UZQjVNu0oAgoia';
const DEFAULT_PATH = '/';

//default parameter untuk memanggil path tertentu

class KeywordController extends Controller
{
    public function listkeyword(){
        return view ('keyword');
    }

    public function store(Request $request){
        $firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
        $data = $request->all();
        $submit = array(
            "index" => $data["index"],
            "keyword" => $data["keyword"]
        );
        $firebase->set(DEFAULT_PATH.'keywordResto/'.$data["index"], $submit);
        return $this->listkeyword();
    }

    public function destroy($index){
        $firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
        $firebase->delete(DEFAULT_PATH.'keywordResto/'.$index);
        return view('keyword');
    }
}
