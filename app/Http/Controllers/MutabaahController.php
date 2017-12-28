<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mutabaah;
use Carbon\Carbon;
use App\User;
use Yajra\Datatables\Datatables;

class MutabaahController extends Controller
{    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function view()
    {
        $mutabaahs = User::find(auth()->user()->id)
                        ->mutabaahs()
                        ->where('tanggal', '>=', Carbon::today())
                        ->get();

        if($mutabaahs->isEmpty()){
            return view('mutabaah');
        }
        else{
            return view('riwayat')->with('mutabaahs', $mutabaahs);
        }
    }
    
    public function riwayatUser()
    {
        $mutabaahs = User::find(auth()->user()->id)
                        ->mutabaahs()
                        ->orderBy('tanggal', 'desc')
                        ->get();

        return view('riwayat')->with('mutabaahs', $mutabaahs);

        // return Datatables::of($mutabaahs)->make(true);
    }


    public function tambah()
    {
    	$request = request();
        $mutabaah = new mutabaah;

        $mutabaah->user_id                                 = auth()->user()->id;
        $mutabaah->tanggal 								    = Carbon::now();
        $mutabaah->hadir 									= $request->hadir;
        $mutabaah->jamkerja_hadir 							= $request->jamkerja_hadir;
        $mutabaah->jamkerja_pulang 							= $request->jamkerja_pulang;
       	$mutabaah->jp_jumlahjam 							= $request->jp_jumlahjam;
        $mutabaah->jp_jumlahtatapmuka 						= $request->jp_jumlahtatapmuka;
        $mutabaah->jp_rpp 									= $request->jp_rpp;
        $mutabaah->jp_lk 									= $request->jp_lk;
        $mutabaah->jp_ppt 									= $request->jp_ppt;
        $mutabaah->jp_bahanajar 								= $request->jp_bahanajar;
        $mutabaah->jp_penilaian 								= $request->jp_penilaian;
        $mutabaah->tilawah 									= $request->tilawah;
        $mutabaah->subuh_jamaah 								= $request->subuh_jamaah;
        $mutabaah->shalat_jamaah 							= $request->shalat_jamaah;
        $mutabaah->almatsurat 								= $request->almatsurat;
        $mutabaah->shalat_dhuha 								= $request->shalat_dhuha;
        $mutabaah->qiyamulail 								= $request->qiyamulail;
        $mutabaah->puasa_sunnah 								= $request->puasa_sunnah;
        $mutabaah->liqo 										= $request->liqo;
        $mutabaah->olahraga_ya 								= $request->olahraga_ya;
        $mutabaah->olahraga_waktu 							= $request->olahraga_waktu;
        $mutabaah->upacara_ya 								= $request->upacara_ya;
        $mutabaah->upacara_keterangan 						= $request->upacara_keterangan;
        $mutabaah->mgmp 										= $request->mgmp;
        $mutabaah->membinahalaqoh_ya 						= $request->membinahalaqoh_ya;
        $mutabaah->membinahalaqoh_waktu 						= $request->membinahalaqoh_waktu;
        $mutabaah->rapat_ya 									= $request->rapat_ya;
        $mutabaah->rapat_jenis 								= $request->rapat_jenis;
        $mutabaah->homevisit_ya 								= $request->homevisit_ya;
        $mutabaah->homevisit_jenis 							= $request->homevisit_jenis;
        $mutabaah->mengisiacara_ya 							= $request->mengisiacara_ya;
        $mutabaah->mengisiacara_jenis 						= $request->mengisiacara_jenis;
        $mutabaah->pelatihan_ya 								= $request->pelatihan_ya;
        $mutabaah->pelatihan_jenis 							= $request->pelatihan_jenis;
        $mutabaah->supervisi 								= $request->supervisi;
        $mutabaah->kultum_di_sekolah 						= $request->kultum_di_sekolah;
        $mutabaah->isi_website 								= $request->isi_website;
        $mutabaah->bagikan_medsos 							= $request->bagikan_medsos;
        $mutabaah->karya_ya 									= $request->karya_ya;
        $mutabaah->karya_jenis 								= $request->karya_jenis;
        $mutabaah->lomba_ya 									= $request->lomba_ya;
        $mutabaah->lomba_jenis 								= $request->lomba_jenis;
        $mutabaah->rencanapembelajaranberikutnya_ya 			= $request->rencanapembelajaranberikutnya_ya;
        $mutabaah->rencanapembelajaranberikutnya_jenis 		= $request->rencanapembelajaranberikutnya_jenis;
        $mutabaah->rencanapembelajaranberikutnya_validasi 	= $request->rencanapembelajaranberikutnya_validasi;

        $mutabaah->save();

    	return redirect()->route('home');
    }
}
