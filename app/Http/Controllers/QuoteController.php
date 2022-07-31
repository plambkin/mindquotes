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


    public function all()
    {
        return view('index');

    }


    public function getQuote()
    {

        // Get a Random number from 1 to size of Quotes table

        $number = rand(1, DB::table('quotes')->get()->count());

        $quote = DB::table('quotes')
            ->where('id','=',$number)->first();

        return response()->json(['quote' => $quote->content,'author' => $quote->author], 200);

    }

    public function getQuoteByCategory(string $category)
    {
        echo "in the getQuote By Category Now";
    }
}
