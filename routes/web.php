<?php

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
    return view('welcome');
});

Route::get('enviar',function(){
    try {
        $data = [
            'link' => 'http://www.reuma-sol.com'
        ];
        \Mail::send('emails.notificacion', $data, function ($msg) {
            $msg->from('it@reuma-sol.com', 'Juan Fermin');
            $msg->to('juanfob@gmail.com')->subject('Notificación');
        });
        echo "Menaje enviado";
    }catch (Swift_TransportException $e){
        echo $e->getMessage();
    }
}
);
