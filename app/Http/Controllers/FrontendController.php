<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;

class FrontendController extends Controller
{
    public function payment(Request $request)
    {
        if (Participant::where('email',$request->email)->first()){
            $item = Participant::where('email',$request->email)->first();
        }else{
            $item = new Participant();
            $item->name   = $request->name;
            $item->surname   = $request->surname;
            $item->email   = $request->email;
            $item->dni    = $request->dni;
            $item->nationality = @$request->nationality['name'];
            $item->phone    = $request->phone;
            $item->wp    = $request->wp;
            $item->genre    = $request->genre;
            $item->age    = $request->age;
            $item->church    = $request->churk;
            $item->address    = $request->address;
            $item->position    = $request->cargo;
            $item->data    = $request->all();
            $item->save();
        }
        
        \MercadoPago\SDK::setAccessToken(env('MP_ACCESS_TOKEN'));
        // Crea un objeto de preferencia
        $preference = new \MercadoPago\Preference();
        $preference->back_urls = array(
            "success" => route('inscription', ['status' => 'success']),
            "failure" => route('inscription', ['status' => 'failure']),
            "pending" => route('inscription', ['status' => 'pending']),
        );
        $preference->auto_return = "approved";
        // Crea un ítem en la preferencia
        $item = new \MercadoPago\Item();
        $item->title = 'CLF 2022 - ENTRADA';
        $item->quantity = 1;
        // $item->unit_price = floatval( 2000  );
        $item->unit_price = floatval( $request->option  );
        $preference->items = array($item);
        $preference->statement_descriptor = 'CLF';
    
    
        // $preference->payment_methods = array(
    
    
        //     "excluded_payment_methods" => array(
        //         array(
        //             "id" => "visa", 
        //             "id" => "master",
        //         ),
            
        //     ),
        
        
        //   );
        $preference->save();
    
        // dd( $request->all(),$preference);
    
        return response()->json(
            [
                'preference' =>  $preference->toArray(),
                'data' => $request->all()
            ]
    
        );
    }
}
