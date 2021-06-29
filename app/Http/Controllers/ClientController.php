<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function addClient (Request $req)
        {
            if(!$request->hasFile('fileName')) {
                return response()->json(['upload_file_not_found'], 400);
            }
         
            $allowedfileExtension=['pdf','jpg','png'];
            $files = $request->file('fileName'); 
            $errors = [];
         
         
                $check = in_array($extension,$allowedfileExtension);
         
               
                        $path = $mediaFiles->store('public/images');
            $client= new Client;
           
            $client->image=$path;
           $client->save();
            return $client;
        }
            
    
   
}
