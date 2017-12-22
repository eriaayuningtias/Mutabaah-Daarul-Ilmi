@extends('layouts.mutabaah')

@section('title', 'Home')


@section('content')

<div class="card stacked-form">
	<div class="card-header bg-mutabaah">
		<h4 class="card-title text-center text-white my-4">FORM MUTABA'AH</h4>
	</div>
	<div class="card-body mutabaah px-4 py-4">
		<form method="POST"  action=" {{ route('rekam_mutabaah') }}">
			<div class="row"> <!-- ROW untuk bagi 3 kolom -->
				<div class="col border-right"> <!-- Kolom Pertama -->
					<strong> KEHADIRAN : </strong><br> 
					<input type="radio" name="hadir" value="1" checked> Hadir
					<input type="radio" name="hadir" value="0"> Tidak<br>

					<div class="row"> <!-- row untuk merapikan select -->
						<div class="col-6 py-1 pl-3">
							Hadir Pukul :
						</div>
						<div class="col-6 py-1 pl-3">
							<div class="clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
								<input type="text" value="07:00" name="jamkerja_hadir">
							</div>
						</div>
						<div class="col-6 py-1 pl-3">
							Pulang Pukul :
						</div>
						<div class="col-6 py-1 pl-3">
							<div class="clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
								<input type="text" value="16:00" name="jamkerja_pulang">
							</div>
						</div><br>
						<div class="col-12">
							<strong class="pl-1">PROSES PEMBELAJARAN </strong><br>
						</div>
						<div class="col-6 py-1 pl-3">
							a. Jumlah Jam :
						</div>
						<div class="col-6 py-1">
							<select name="jp_jumlahjam">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>		    
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select> 
						</div>
						<div class="col-6 py-1 pl-3">
							b. Jumlah Tatap Muka :
						</div>
						<div class="col-6 py-1">
							<select name="jp_jumlahtatapmuka">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select><br>
						</div>
						<div class="col-6 py-1 pl-3">
							c. RPP :
						</div>
						<div class="col-6 py-1">
							<select name="jp_rpp">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div>
						<div class="col-6 py-1 pl-3">
							d. LK :
						</div>
						<div class="col-6 py-1">
							<select name="jp_lk">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div>
						<div class="col-6 py-1 pl-3">
							e. PPT :
						</div>
						<div class="col-6 py-1">
							<select name="jp_ppt">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div>
						<div class="col-6 py-1  pl-3">
							f. Bahan Ajar :
						</div>
						<div class="col-6 py-1">
							<select name="jp_bahanajar">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div>
						<div class="col-6 py-1 pl-3">
							g. Penilaian :
						</div>
						<div class="col-6 py-1">
							<select name="jp_penilaian">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div><br><br>

						<div class="col-6 py-1 mt-4 mb-2 pl-3">
							<strong>TILAWAH :</strong>
						</div>
						<div class="col-6 py-1 mt-4 mb-2">
							<select name="tilawah">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>		    
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>		    
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>		    
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
							</select>
						</div>

						<div class="col-6 py-1 mt-2  pl-3">
							<Strong>SHALAT JAMAAH :</Strong>
						</div>
						<div class="col-6 py-1 mt-2">
							<select name="shalat_jamaah">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select><br><br>
						</div>
					</div> <!-- end row kolom 1-->

					<Strong>SUBUH JAMAAH :</Strong><br> 
					<input type="radio" name="subuh_jamaah" value="1" checked> Ya
					<input type="radio" name="subuh_jamaah" value="0"> Tidak<br><br>

					<Strong>ALMATSURAT :</Strong><br> 
					<input type="radio" name="almatsurat" value="1" checked> Ya
					<input type="radio" name="almatsurat" value="0"> Tidak<br><br>

					<Strong>SHALAT DHUHA : </Strong><br> 
					<input type="radio" name="shalat_dhuha" value="1" checked> Ya
					<input type="radio" name="shalat_dhuha" value="0"> Tidak<br><br>

					<Strong>QIYAMULAIL : </Strong><br> 
					<input type="radio" name="qiyamulail" value="1" checked> Ya
					<input type="radio" name="qiyamulail" value="0"> Tidak<br><br>

				</div> <!-- end kolom 1 -->

				<div class="col border-right"> <!-- begin kolom 2 -->

					<Strong>PUASA SUNNAH : </Strong><br> 
					<input type="radio" name="puasa_sunnah" value="1" checked> Ya
					<input type="radio" name="puasa_sunnah" value="0"> Tidak<br><br>

					<Strong>LIQO : </Strong><br> 
					<input type="radio" name="liqo" value="1" checked> Ya
					<input type="radio" name="liqo" value="0"> Tidak<br><br>

					<Strong>OLAH RAGA :<br> </Strong>
					<input type="radio" name="olahraga_ya" value="1" checked> Ya
					<input type="radio" name="olahraga_ya" value="0"> Tidak<br>
					WAKTU OLAH RAGA (MENIT) :
					<select name="olahraga_waktu">
						<option value="1">0</option>
						<option value="2">kurang dari 30</option>
						<option value="3">30-60</option>
						<option value="4">lebih dari 60</option>
					</select><br><br>

					<Strong>UPACARA :<br> </Strong>
					<input type="radio" name="upacara_ya" value="1" checked> Ya
					<input type="radio" name="upacara_ya" value="0"> Tidak<br>

					PEMBINA/PESERTA :
					<select name="upacara_keterangan">
						<option value="0">0</option>
						<option value="pembina">Pembina</option>
						<option value="peserta">Peserta</option>
					</select><br><br>

					<Strong>MGMP :<br> </Strong>
					<input type="radio" name="mgmp" value="1" checked> Ya
					<input type="radio" name="mgmp" value="0"> Tidak<br><br>

					<Strong>MEMBINA HALAQOH :<br> </Strong>
					<input type="radio" name="membinahalaqoh_ya" value="1" checked> Ya
					<input type="radio" name="membinahalaqoh_ya" value="0"> Tidak<br>

					WAKTU MEMBINA HALAQOH :

					<select name="membinahalaqoh_waktu">
						<option value="0">0</option>
						<option value="kurang dari 30">kurang dari 30</option>
						<option value="30-60">30-60</option>
						<option value="lebih dari 60">lebih dari 60</option>
					</select><br><br>

					<Strong>RAPAT :<br> </Strong>
					<input type="radio" name="rapat_ya" value="1" checked> Ya
					<input type="radio" name="rapat_ya" value="0"> Tidak<br>
					JENIS RAPAT :

					<select name="rapat_jenis">
						<option value="0">0</option>
						<option value="sit_di">SIT DI</option>
						<option value="managemen">Managemen</option>
						<option value="rumpun_mapel">Rumpun Mapel</option>
						<option value="tu">Tata Usaha</option>
						<option value="panitia">Panitia</option>
						<option value="wali_kelas">Wali Kelas</option>
						<option value="kegiatan">Kegiatan</option>
					</select><br><br>

					<Strong>HOME VISIT :<br> </Strong>
					<input type="radio" name="homevisit_ya" value="1" checked> Ya
					<input type="radio" name="homevisit_ya" value="0"> Tidak<br>
					JENIS HOME VISIT :

					<select name="homevisit_jenis">
						<option value="0">0</option>
						<option value="wali_murid">Wali Murid</option>
						<option value="sit_di">SIT DI</option>
						<option value="keluarga">Keluarga</option>
						<option value="tetangga">Tetangga</option>
					</select><br><br>

					<Strong>MENGISI ACARA :<br> </Strong>
					<input type="radio" name="mengisiacara_ya" value="1" checked> Ya
					<input type="radio" name="mengisiacara_ya" value="0"> Tidak<br>
					JENIS ACARA :

					<select name="mengisiacara_jenis">
						<option value="0">0</option>
						<option value="khutbah">Khutbah Jumat</option>
						<option value="pengajian">Pengajian</option>
						<option value="seminar">Seminar</option>
						<option value="lokakarya">Loka Karya</option>
						<option value="pelatihan">Pelatihan</option>
					</select><br><br>

				</div> <!-- end kolom2 -->


				<div class="col">

					<Strong>PELATIHAN :<br> </Strong>
					<input type="radio" name="pelatihan_ya" value="1" checked> Ya
					<input type="radio" name="pelatihan_ya" value="0"> Tidak<br>
					JENIS PELATIHAN :

					<select name="pelatihan_jenis">
						<option value="0">0</option>
						<option value="undangan">Undangan</option>
						<option value="utusan_sit">Utusan SIT DI</option>
						<option value="mandiri">Mandiri</option>
					</select><br><br>

					<Strong>SUPER VISI :<br> </Strong>
					<input type="radio" name="supervisi" value="1" checked> Ya
					<input type="radio" name="supervisi" value="0"> Tidak<br><br>

					<Strong>KULTUM DI SEKOLAH :<br> </Strong>
					<input type="radio" name="kultum_di_sekolah" value="1" checked> Ya
					<input type="radio" name="kultum_di_sekolah" value="0"> Tidak<br><br>

					<Strong>ISI WEBSITE :<br> </Strong>
					<input type="radio" name="isi_website" value="1" checked> Ya
					<input type="radio" name="isi_website" value="0"> Tidak<br><br>

					<Strong>BAGIKAN MEDSOS :<br> </Strong>
					<input type="radio" name="bagikan_medsos" value="1" checked> Ya
					<input type="radio" name="bagikan_medsos" value="0"> Tidak<br><br>

					<Strong>KARYA :<br> </Strong>
					<input type="radio" name="karya_ya" value="1" checked> Ya
					<input type="radio" name="karya_ya" value="0"> Tidak<br>
					JENIS KARYA :
					<select name="karya_jenis">
						<option value="0">0</option>
						<option value="modul">Modul</option>
						<option value="buku">Buku</option>
						<option value="lainnya">Lainnya</option>
					</select><br><br>

					<Strong>LOMBA :<br> </Strong>
					<input type="radio" name="lomba_ya" value="1" checked> Ya
					<input type="radio" name="lomba_ya" value="0"> Tidak<br>

					JENIS LOMBA :
					<select name="lomba_jenis">
						<option value="0">0</option>
						<option value="internal">Internal</option>
						<option value="kelurahan">Kelurahan</option>
						<option value="kecamatan">Kecamatan</option>
						<option value="kotamadya">Kotamadya</option>
						<option value="provinsi">Provinsi</option>
						<option value="nasional">Nasional</option>
						<option value="internasional">Internasional</option>
					</select><br><br>

					<Strong>RENCANA YANG AKAN DATANG (PEMBELAJARAN BERIKUTNYA) :<br> </Strong>
					<input type="radio" name="rencana" value="1" checked> Ya
					<input type="radio" name="rencana" value="0"> Tidak<br><br>

					JENIS RENCANA : <br>
					<select name="rencanapembelajaranberikutnya_ya">
						<option value="0">0</option>
						<option value="RPP">RPP</option>
						<option value="RPP+Langkah Pembelajaran">RPP+Langkah Pembelajaran</option>
						<option value="RPP+LP+Ringkasan Materi">RPP+LP+Ringkasan Materi</option>
						<option value="RPP+LP+RM+Penilaian">RPP+LP+RM+Penilaian</option>
						<option value="RPP+LP+RM+Pen+Bahan Ajar">RPP+LP+RM+Pen+Bahan Ajar</option>
						<option value="RPP+LP+RM+Pen+BA+Media Pembelajaran">RPP+LP+RM+Pen+BA+Media Pembelajaran</option>
					</select><br><br>
					<div class="row">
						<div class="col-4">
							JUMLAH :<br>
							<select name="rencanapembelajaranberikutnya_jenis">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select><br><br>
						</div>
						<div class="col-8">
							VALIDASI :<br>
							<select name="rencanapembelajaranberikutnya_validasi">
								<option value="0">0</option>
								<option value="kurang dari 25%">kurang dari 25%</option>
								<option value="25%-50%">25%-50%</option>
								<option value="lebih dari 50%">lebih dari 50%</option>
								<option value="lebih dari 75%">lebih dari 75%</option>
							</select><br>
						</div>
					</div>
				</div>
			</div>
		</form>		
	</div>
	<div class="card-footer text-center">
		<button type="submit" class="btn btn-fill btn-success btn-lg">Rekam</button>
	</div>
</div>

@endsection