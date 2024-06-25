<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UsersResource;

class HomeController extends Controller
{
    public function users()
    {
        
        $users = User::with(['latestOrder:id,product_id,user_id','latestOrder.product:id',
         'latestOrder.product.product_descriptions:product_id,name'])->get();

        return UsersResource::collection($users);
    }
}
