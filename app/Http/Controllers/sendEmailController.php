<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class sendEmailController extends Controller
{
    public function sendEmailSchedule(Request $request) {
        //> valido los campos:
        $fields = Validator::make($request->all(), [
            "name"=> 'required|string' ,
            "email"=> 'required|email' ,
            "cellphone"=> 'required|string' ,
            "country"=> 'required|string' ,
            "subject"=> 'required|string' ,
            "message"=> 'required|string' ,
            "accept"=> 'required'
        ]);

        //>> Respuesta con error por campo ausente o erroneo
        if ($fields->fails()) {
            return response()->json($fields->errors(), 422);
        }

        try {
            Mail::send('Emails/schedule', 
                [
                    "data" => $request->all(),
                ], 
                function($message) use ($request){
                    $message->to('sairjsanchez@gmail.com', $request->name)->subject
                    ('Nuevo mensaje desde lalexpo');
                    $message->from('soad@sairsanchez.com','lalexpo');
            });
        } catch (\Throwable $th) {
            throw $th;
        }

        return response([
            'code'=> 201,
            'message'=> 'email sended',
        ] ,200);
    }
}
