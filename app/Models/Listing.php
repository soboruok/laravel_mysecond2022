<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // our listing model now will be able to filter.
    public function scopeFilter($query, array $filter){
        //if this is not false then move on. 
        if($filter['tag'] ?? false){
            // where tags like '%anything%'
            $query->where('tags', 'like', '%' .request('tag').'%');
        } 

        if($filter['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
     }
}
