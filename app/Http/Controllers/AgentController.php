<?php

namespace App\Http\Controllers;

use App\Agentas;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class AgentController extends Controller
{
    public function index()
    {
        $agent = new Agent();
        $test = $agent->is('Windows');
        $test2 = $agent->is('Firefox');
        if($test == 1){
            $result[] = 'Windowsu vartotojas';
        }
        else{
            $result[] = 'Ne windowsu naudotojas';
        }

        if($test2 == 1){
            $result[] = " Firefox naudotojas";
        }
        else{
            $result[] = " Nesinaudoja firefox";
        }
        return view('agent', array('val' => $result));
    }
}
