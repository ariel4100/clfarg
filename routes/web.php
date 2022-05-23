<?php
use Illuminate\Http\Request;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Country;
use App\Models\Province;
use App\Http\Controllers\FrontendController;
use App\Models\Transaction;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
    ]);
})->name('home');
Route::get('/nosotros', function () {
    return Inertia::render('About', [
    ]);
})->name('nosotros');
Route::get('/eventos', function () {

    $countries = Country::get();
    // dd($countries);
    return Inertia::render('Event', [
        'countries' => $countries
    ]);
})->name('eventos');
Route::get('/inscription', function (Request $request) {

    $countries = Country::get();
    $provinces = Province::get();

     if ($request->get('preference_id') && $request->get('status') == 'approved') {
        $preference_id = $request->get('preference_id');
        Transaction::where('payment_id',$preference_id)->update(['status' => 'approved']);
            // $item->status = 'completado';
            // dd($request->all());
            // $participant->save();
            $request->session()->flash('success', 'Su registro fue completado! <br> Recibirá un correo electrónico con la entrada al CLF 2022');
        }
        // dd($request->all());
     if ($request->get('preference_id') && $request->get('status') == 'null' ) {
        
            $request->session()->flash('error', 'Algo salio mal con el pago! intentelo más tarde');
        }
        
        // if ($request->get('preference_id') && $request->get('status') == 'null' ){
        //     $preference_id = $request->get('preference_id');
        //     Transaction::where('payment_id',$preference_id)->update(['status' => $request->get('status')]);
        //         // $item->status = 'completado';
        //         // dd($request->all());
        //         // $participant->save();
        //     $request->session()->flash('success', 'Su registro fue completado! <br> Recibirá un correo electrónico para mayor información');
    
        // }
    // dd($countries);
    return Inertia::render('Inscription', [
        'countries' => $countries,
        'provinces' => $provinces
    ]);
})->name('inscription');
Route::get('conferencias', function () {
    return Inertia::render('Conferencias', [
    ]);
})->name('conferencias');
 
Route::get('/testimonios', function () {
    return Inertia::render('Testimonios', [
    ]);
})->name('testimonios');
 
Route::get('/contacto', function () {
    return Inertia::render('Contact', [
    ]);
})->name('contacto');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});



// Route::post('/payment/mp', function (  Request $request) {

//     \MercadoPago\SDK::setAccessToken(env('MP_ACCESS_TOKEN'));
//     // Crea un objeto de preferencia
//     $preference = new \MercadoPago\Preference();
//     $preference->back_urls = array(
//         "success" => route('inscription', ['status' => 'success']),
//         "failure" => route('inscription', ['status' => 'failure']),
//         "pending" => route('inscription', ['status' => 'pending']),
//     );
//     $preference->auto_return = "approved";
//     // Crea un ítem en la preferencia
//     $item = new \MercadoPago\Item();
//     $item->title = 'CLF 2022 - ENTRADA';
//     $item->quantity = 1;
//     $item->unit_price = floatval( 2000  );
//     // $item->unit_price = floatval( $request->option  );
//     $preference->items = array($item);
//     $preference->statement_descriptor = 'CLF';


//     // $preference->payment_methods = array(


//     //     "excluded_payment_methods" => array(
//     //         array(
//     //             "id" => "visa", 
//     //             "id" => "master",
//     //         ),
        
//     //     ),
    
    
//     //   );
//     $preference->save();

//     // dd( $request->all(),$preference);

//     return response()->json(
//         [
//             'preference' =>  $preference->toArray(),
//             'data' => $request->all()
//         ]

//     );

// })->name('mp.link');
// Route::post('/payment/mp',  'FrontendController')->name('mp.link');
Route::post('/payment/mp',[FrontendController::class, 'payment'])->name('mp.link');
Route::post('/email-vericatetd',[FrontendController::class, 'verifid'])->name('email');
