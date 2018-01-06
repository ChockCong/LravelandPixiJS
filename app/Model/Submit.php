<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class submit extends Model
{
    //
    public  function submit($name,$password){
        $bool=DB::table('submittest')->insert(
            ['Name'=>$name,'Password'=>$password,'Flag'=>"0"]
        );
        return $bool;
    }
}
