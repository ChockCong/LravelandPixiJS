<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Submit;

class SubmitController extends Controller
{
    //
    public function index(){
        return view('submit');
    }
    public function submit(Request $request){
        //dd($request->input('name'));
        $name=$request['name'];
        $password=$request['pwd'];
        $submit=new Submit();
        $bool=$submit->submit($name,$password);
        if($bool){
            echo "插入成功！";
        }
    }
}
