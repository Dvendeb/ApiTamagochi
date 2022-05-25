<?php

namespace App\Http\Controllers;

use App\Models\bathroom;
use App\Models\diseased;
use App\Models\food;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class PouController extends Controller
{
    public function food(){
        $food =new food();
        $food->save();
        return Response::json(array('succes'=>true,'state'=>"fact is save correct"));
    }
    public function bathroom(){
        $bat =new bathroom();
        $bat->save();
        return Response::json(array('succes'=>true,'state'=>"fact is save correct"));
    }
    public function diseased(){
        $disea =new diseased();
        $disea->save();
        return Response::json(array('succes'=>true,'state'=>"fact is save correct"));
    }
    public function showAll(){
        $allfoods=food::all();
        $allbathroom=bathroom::all();
        $alldiseased=diseased::all();
        return Response::json(array('succes'=>true,'eat'=>$allfoods,'bathroom'=>$allbathroom,'diseased'=>$alldiseased),200);
    }
}
