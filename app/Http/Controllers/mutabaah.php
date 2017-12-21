<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mutabaah;
use Carbon\Carbon;

class mutabaah extends Controller
{
    public function tambah()
    {
    	$request = request();
        $mutabaah = new mutabaah;

        $mutabaah->tanggal 								= Carbon::now()->format('m-d-Y');
        $mtb->hadir 									= $request->hadir;
        $mtb->jamkerja_hadir 							= $request->jamkerja_hadir;
        $mtb->jamkerja_pulang 							= $request->jamkerja_pulang;
        $mtb->jp_jumlahjam 								= $request->jp_jumlahjam;
        $mtb->jp_jumlahtatapmuka 						= $request->jp_jumlahtatapmuka;
        $mtb->jp_rpp 									= $request->jp_rpp;
        $mtb->jp_lk 									= $request->jp_lk;
        $mtb->jp_ppt 									= $request->jp_ppt;
        $mtb->jp_bahanajar 								= $request->jp_bahanajar;
        $mtb->jp_penilaian 								= $request->jp_penilaian;
        $mtb->tilawah 									= $request->tilawah;
        $mtb->subuh_jamaah 								= $request->subuh_jamaah;
        $mtb->shalat_jamaah 							= $request->shalat_jamaah;
        $mtb->almatsurat 								= $request->almatsurat;
        $mtb->shalat_dhuha 								= $request->shalat_dhuha;
        $mtb->qiyamulail 								= $request->qiyamulail;
        $mtb->puasa_sunnah 								= $request->puasa_sunnah;
        $mtb->liqo 										= $request->liqo;
        $mtb->olahraga_ya 								= $request->olahraga_ya;
        $mtb->olahraga_waktu 							= $request->olahraga_waktu;
        $mtb->upacara_ya 								= $request->upacara_ya;
        $mtb->upacara_keterangan 						= $request->upacara_keterangan;
        $mtb->mgmp 										= $request->mgmp;
        $mtb->membinahalaqoh_ya 						= $request->membinahalaqoh_ya;
        $mtb->membinahalaqoh_waktu 						= $request->membinahalaqoh_waktu;
        $mtb->rapat_ya 									= $request->rapat_ya;
        $mtb->rapat_jenis 								= $request->rapat_jenis;
        $mtb->homevisit_ya 								= $request->homevisit_ya;
        $mtb->homevisit_jenis 							= $request->homevisit_jenis;
        $mtb->mengisiacara_ya 							= $request->mengisiacara_ya;
        $mtb->mengisiacara_jenis 						= $request->mengisiacara_jenis;
        $mtb->pelatihan_ya 								= $request->pelatihan_ya;
        $mtb->pelatihan_jenis 							= $request->pelatihan_jenis;
        $mtb->supervisi 								= $request->supervisi;
        $mtb->kultum_di_sekolah 						= $request->kultum_di_sekolah;
        $mtb->isi_website 								= $request->isi_website;
        $mtb->bagikan_medsos 							= $request->bagikan_medsos;
        $mtb->karya_ya 									= $request->karya_ya;
        $mtb->karya_jenis 								= $request->karya_jenis;
        $mtb->lomba_ya 									= $request->lomba_ya;
        $mtb->lomba_jenis 								= $request->lomba_jenis;
        $mtb->rencanapembelajaranberikutnya_ya 			= $request->rencanapembelajaranberikutnya_ya;
        $mtb->rencanapembelajaranberikutnya_jenis 		= $request->rencanapembelajaranberikutnya_jenis;
        $mtb->rencanapembelajaranberikutnya_validasi 	= $request->rencanapembelajaranberikutnya_validasi;

        $mutabaah->save();

    	return redirect()->route('admin_dosen');
    }
}
