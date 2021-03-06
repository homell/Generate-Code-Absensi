<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuoteResource;
use Illuminate\Http\Request;

use App\Quote;

class QuoteController extends Controller
{
    
    public function store(Request $request){
        $this->validate($request, [
            'message' => 'required',
        ]);
        
        $quote = Quote::create([
            'user_id' => auth()->id(),
            'message' => $request->message,
        ]);

        return new QuoteResource($quote);
    }
}
