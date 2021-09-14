<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;


class AdminController extends Controller
{
    public function index()
    {
        $userAdmin = User::where('role', 'admin')->get();
        $totalAdmin = count($userAdmin);

        $userAll = User::get();
        $totalUser = count($userAll);

        $product = Product::get();
        $totalProduct = count($product);

        return view('admin.dashboardadmin', compact('totalAdmin', 'totalUser', 'totalProduct'));
    }
}
