<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class QuoteController extends Controller
{
    public function show()
    {
        $response = Http::get('https://type.fit/api/quotes')->collect();

        // Place them in the Database
        foreach ($response as $col) {

            $id = DB::table('quotes')->insertGetId(
                array('content' => $col['text'], 'author' => $col['author'])
            );

        }


        return view('index');
    }
}
