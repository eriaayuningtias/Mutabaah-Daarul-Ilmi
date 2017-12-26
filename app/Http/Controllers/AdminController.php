<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function view()
    {

        return view('homer');
    }

    public function view_anggota()
    {
    	$anggotas = User::where('is_admin', '0')->get();

        return view('admin-anggota')->with('anggotas', $anggotas);
    }

}
