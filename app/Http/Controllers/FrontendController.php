<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\Transaction;

class FrontendController extends Controller
{
    public function payment(Request $request)
    {

        
        // if (Participant::where('email',$request->email)->first()){
        //     $participant = Participant::where('email',$request->email)->first();
        // }else{
            $participant = new Participant();
            $participant->name   = $request->name;
            $participant->surname   = $request->surname;
            $participant->email   = $request->email;
            $participant->dni    = $request->dni;
            $participant->nationality = @$request->nationality['name'];
            $participant->phone    = $request->phone;
            $participant->wp    = $request->wp;
            $participant->genre    = $request->genre;
            $participant->age    = $request->age;
            $participant->church    = $request->churk;
            $participant->address    = $request->address;
            $participant->position    = $request->cargo;
            $participant->province    = $request->province['name'];
            $participant->payment    = $request->payment;
            $participant->option    = $request->option;
            $participant->data    = $request->all();
            $participant->save();
        // }
        
        \MercadoPago\SDK::setAccessToken(env('MP_ACCESS_TOKEN'));
        // Crea un objeto de preferencia
        $preference = new \MercadoPago\Preference();
        $preference->back_urls = array(
            "success" => route('inscription', ['success' => 'success']),  
            // "success" => route('inscription', ['success' => $request->session()->flash('success', 'Su registro fue completado! <br> Recibirá un correo electrónico con la entrada al CLF 2022')]),  
            "failure" => route('inscription', ['error' => 'failure']),
            "pending" => route('inscription', ['error' => 'pending']),
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
        $preference->save();



        if($participant->payment == 'MP'){
            $transaction = new Transaction();
            $transaction->user_id = $participant->id;
            $transaction->payment_id = $preference->id;
            $transaction->payment_method = $participant->payment;
            $transaction->amount = $participant->option;
            $transaction->currency = $participant->option;
            $transaction->status = 'pending';
            $transaction->save();
        }

        // if ($request->session()->exists('success')  ) {
        //     $item->status = 'completado';
        //     // dd($participant->status);
        //     $participant->save();
        // }
        // $preference->payment_methods = array(
    
    
        //     "excluded_payment_methods" => array(
        //         array(
        //             "id" => "visa", 
        //             "id" => "master",
        //         ),
            
        //     ),
        
        
        //   );
       
    
        // dd( $request->all(),$preference);
    
        return response()->json(
            [
                'preference' =>  $preference->toArray(),
                'data' => $request->all()
            ]
    
        );
    }

    public function verifid(Request $request)
    {

        
        
        $participant = Participant::where('email',utf8_decode($request->email))->first();
    
     
 
        dd(utf8_decode($request['email']));
        if ($participant) {
            return response()->json([
                'success' => 1,
                'data' => $participant
            ]); 
        }else{
        
            return response()->json([
                'success' => 0,
                'data' => $participant
            ]); 
        }
    
        // dd( $request->all(),$preference);
    
        
    }
}
