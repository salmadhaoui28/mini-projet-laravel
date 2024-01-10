<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function show()
    {
      //  dd("test"); // Assurez-vous que cette ligne est exécutée
        return view('payement');
    }
    
}
