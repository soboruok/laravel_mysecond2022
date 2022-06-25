<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //Show all listings
    public function index(){

        //http://127.0.0.1:8000/listings?tag=Lee
        //dd(request('tag')); 

        // listings폴더안의 index파일
        return view('listings.index', [
            'heading' => 'Lastest Listings',
            // 'listings' => Listing :: all()
            // get방식으로 tag 나 search 요청이 들어오면 필터 적용한다. 
            'listings'=>Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    //show single listing
    public function show($id){
        $listing = Listing :: find($id);

        if($listing) {
            // listings폴더안의 show파일
            return view('listings.show', [
                'listing' => $listing
            ]);
        } else {
            abort('404'); 
        }
    }
}
