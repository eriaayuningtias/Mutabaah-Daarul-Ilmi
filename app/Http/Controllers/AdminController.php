<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\mutabaah;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function view()
    {

        return view('profile');
    }

    public function view_anggota()
    {
    	$anggotas = User::where('is_admin', '0')
			    	 ->orderBy('name', 'asc')
			    	 ->get();

        return view('admin-anggota')->with('anggotas', $anggotas);
    }

    public function tambah_anggota()
    {
    	$request = request();
        $user = new User;

        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->save();

    	return redirect()->route('view_anggota');
    }

    public function hapus_anggota()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id lalu delete
    	$user = User::find($id);
    	$user->delete();
    	
        return redirect()->route('view_anggota');
    }

    public function edit_anggota()
    {
        //ambil data dari post request
        $id = request()->input('id');

        //ambil data pendaftaran kp dengan id lalu delete
        $user = User::find($id);
        
        return view('admin-anggota-edit')
            ->with('name', $user->name)
            ->with('id', $user->id)
            ->with('username', $user->username);
    }

    public function update_anggota()
    {
        $request = request();
        $id = request()->input('id');
        $user = User::find($id);

        $user->name = $request->name;
        $user->username = $request->username;
        if($user->password==True){
            $user->password = bcrypt($request->password);   
        }
        $user->save();

        return redirect()->route('view_anggota');
    }

    public function password_anggota()
    {
        $request = request();
        $id = request()->input('id');
        $user = User::find($id);

        $user->password = bcrypt($request->password);   
        $user->save();

        return redirect()->route('view_anggota');
    }


    
    public function mutabaah_hariini()
    {
        $mutabaahs = mutabaah::where('tanggal', '>=', Carbon::today())->get();

        return view('admin-mutabaah_hariini')->with('mutabaahs', $mutabaahs);
    }

    public function riwayat_anggota()
    {
        $request = request();
        $id = request()->input('id');

        $mutabaahs = User::find($id)
                        ->mutabaahs()
                        ->orderBy('tanggal', 'desc')
                        ->get();

        return view('admin-riwayat')->with('mutabaahs', $mutabaahs);
    }
}
