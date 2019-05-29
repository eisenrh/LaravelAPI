<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use RajaOngkir;



class CourierController extends Controller
{
    
    public function provinces(){
        
        $province_lists = RajaOngkir::province();

        return response()->json($province_lists);
    }

    	
}
