<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //Show all listings
    public function index(){

        //dd(Listing::latest()->filter(request(['tag', 'search']))->paginate(5)); 
        //http://127.0.0.1:8000/listings?tag=Lee
        //dd(request('tag')); 

        // listings폴더안의 index파일
        // 가장최근의 데이타를 불러서, 필터링을 하고 페이징처리로 5개의 데이타를 얻겠다.
        return view('listings.index', [
            //'listings'=>Listing::latest()->filter(request(['tag', 'search']))->paginate(5)
            'listings'=>Listing::latest()->filter(request(['tag', 'search']))->simplePaginate(5)
        ]);
    }

    //Show single listing
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

    //Show Create Form 
    public function create(){
        // listings폴더안의 create파일
        return view('listings.create'); 
    }

    //store Listing data
    public function store(Request $request){

        //validation check
        $formFields = $request->validate(([
            'title' => 'required',
            // company는 중복이 되면 안된다.
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]));

        //Listing모델에 $formFields생성한다.
        Listing::create($formFields);

        //Flash Message
        return redirect('/')->with('Success', 'Listing created successfully');
    }




}
