<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index() {
        $products = Product::all();
        return view("admin.admin-products", compact("products"));
    }

    
    public function users(){
        $users = User::all();
        return view("admin.admin-users", compact("users"));
    }

    public function delete(int $id){
        User::findOrFail($id)->delete();
        return redirect()->route("admin.users")->with('success', 'User Deleted Successfully!');
    }
}
