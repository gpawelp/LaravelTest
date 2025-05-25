<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class DeliverUrlController extends Controller
{

    /**
     * 
     */
    public function showUrl()
    {
        echo url()->current();

        echo "<br>";

        echo url()->full();

        echo "<br>";

        echo url()->previous();

        echo "<br>";
        echo URL::current();

        dd('THST');
    }

    public function putSession(Request $request)
    {
        $request->session()->increment('test', 3);
        return redirect('play_session_get');
    }

    public function showSession(Request $request)
    {
        $test = $request->session()->get('test', 'MM');

        dd($test);
    }

    public function showFlash(Request $request)
    {
        $request->session()->flash('testFlash', 'To jest flash method');
        
//        echo $request->session()->get('test');
        
        if ($request->session()->exists('testFlash') &&
                $request->session()->exists('test') &&
                (int) $request->session()->get('test') === 132
        ) {

            echo $request->session()->get('testFlash');
        }

        echo "<br>NO PROBLEM<br>";
    }
}
