<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
//        $url = route('testowa1');
//        dd($url);
        $id = 10;
        
        return redirect()->route('testowa1', ['id' => $id, 'dogs' => 10]);
    }
    
    public function testowa333(Request $request)
    {
        if ($request->route()->named('testowa333')) {
            dd("123");
            
        }
        dd("456");
    }
    
    public function show(Contact $contact)
    {
        dd($contact->name);
    }
    
    public function show_ad()
    {
        echo "show_ad";
    }
    
}
