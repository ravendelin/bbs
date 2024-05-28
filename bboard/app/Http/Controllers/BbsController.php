<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bb;
class BbsController extends Controller
{
    public function index()
    {
        $bbs = Bb::latest()->get();
        $s = "Advertisement\r\n\r\n";
        foreach ($bbs as $bb) {
            $s .= $bb->title . "\r\n";
            $s .= $bb->price . " USD.\r\n";
            $s .=  "\r\n";

        }
        return response($s)->header('Content-type', 'text/plain');
    }

    public function detail($bb){
        $bb = Bb::find($bb);
        $s = $bb->title . "\r\n";
        $s .= $bb->price . " USD.\r\n";
        $s .=  "\r\n";
        return response($s)->header('Content-type', 'text/plain');
    }
}
