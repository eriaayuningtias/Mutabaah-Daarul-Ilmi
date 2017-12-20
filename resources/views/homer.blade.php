@extends('layouts.mutabaah')

@section('title', 'Home')


@section('content')

<div class="card stacked-form">
	<div class="card-header bg-success">
		<h4 class="card-title text-center text-white my-4">FORM MUTABA'AH</h4>
	</div>
	<div class="card-body mutabaah px-4 py-4">
		<form method="POST"  action=" {{ route('rekam_mutabaah') }}">
			<div class="row"> <!-- ROW untuk bagi 3 kolom -->
				<div class="col"> <!-- Kolom Pertama -->
					<strong> KEHADIRAN : </strong><br> 
					<input type="radio" name="kehadiran" value="hadir" checked> Hadir
					<input type="radio" name="kehadiran" value="tidak_hadir"> Tidak<br><br>

					<div class="row"> <!-- row untuk merapikan select -->
						<div class="col-12">
							<strong>PROSES PEMBELAJARAN </strong><br>
						</div>
						<div class="col-6">
							a. Jumlah Jam :
						</div>
						<div class="col-6">
							<select name="jumlah_jam">
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
						<div class="col-6">
							b. Jumlah Tatap Muka :
						</div>
						<div class="col-6">
							<select name="tatap_muka">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select><br>
						</div>
						<div class="col-6">
							c. RPP :
						</div>
						<div class="col-6">
							<select name="rpp">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div>
						<div class="col-6">
							d. LK :
						</div>
						<div class="col-6">
							<select name="lk">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div>
						<div class="col-6">
							e. PPT :
						</div>
						<div class="col-6">
							<select name="ppt">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div>
						<div class="col-6">
							f. Bahan Ajar :
						</div>
						<div class="col-6">
							<select name="bahan_ajar">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div>
						<div class="col-6">
							g. Penilaian :
						</div>
						<div class="col-6">
							<select name="penilaian">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div><br><br>

						<div class="col-6 mt-4 mb-2">
							<strong>TILAWAH :</strong>
						</div>
						<div class="col-6 mt-4 mb-2">
							<select name="tilawah">
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

						<div class="col-6 mt-2">
							<Strong>SHALAT JAMAAH :</Strong>
						</div>
						<div class="col-6 mt-2">
							<select name="shalat_jamaah">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select><br><br>
						</div>
					</div> <!-- end row kolom 1-->

					<Strong>SUBUH JAMAAH :</Strong><br> 
					<input type="radio" name="subuh" value="ya" checked> Ya
					<input type="radio" name="subuh" value="tidak"> Tidak<br><br>

					<Strong>ALMATSURAT :</Strong><br> 
					<input type="radio" name="almatsurat" value="ya" checked> Ya
					<input type="radio" name="almatsurat" value="tidak"> Tidak<br><br>

					<Strong>SHALAT DHUHA : </Strong><br> 
					<input type="radio" name="dhuha" value="ya" checked> Ya
					<input type="radio" name="dhuha" value="tidak"> Tidak<br><br>

					<Strong>QIYAMULAIL : </Strong><br> 
					<input type="radio" name="qiyamulail" value="ya" checked> Ya
					<input type="radio" name="qiyamulail" value="tidak"> Tidak<br><br>

					<Strong>PUASA SUNNAH : </Strong><br> 
					<input type="radio" name="puasa" value="ya" checked> Ya
					<input type="radio" name="puasa" value="tidak"> Tidak<br><br>

					<Strong>LIQO : </Strong><br> 
					<input type="radio" name="liqo" value="ya" checked> Ya
					<input type="radio" name="liqo" value="tidak"> Tidak<br><br>

				</div> <!-- end kolom 1 -->

				<div class="col"> <!-- begin kolom 2 -->

					<Strong>OLAH RAGA :<br> </Strong>
					<input type="radio" name="olahraga" value="ya" checked> Ya
					<input type="radio" name="olahraga" value="tidak"> Tidak<br>
					WAKTU OLAH RAGA (MENIT) :
					<select name="waktu_olahraga">
						<option value="1">0</option>
						<option value="2">kurang dari 30</option>
						<option value="3">30-60</option>
						<option value="4">lebih dari 60</option>
					</select><br><br>

					<Strong>UPACARA :<br> </Strong>
					<input type="radio" name="upacara" value="ya" checked> Ya
					<input type="radio" name="upacara" value="tidak"> Tidak<br>

					PEMBINA/PESERTA :
					<select name="pembina">
						<option value="0">0</option>
						<option value="pembina">Pembina</option>
						<option value="peserta">Peserta</option>
					</select><br><br>

					<Strong>MGMP :<br> </Strong>
					<input type="radio" name="mgmp" value="ya" checked> Ya
					<input type="radio" name="mgmp" value="tidak"> Tidak<br><br>

					<Strong>MEMBINA HALAQOH :<br> </Strong>
					<input type="radio" name="membina" value="ya" checked> Ya
					<input type="radio" name="membina" value="tidak"> Tidak<br>

					WAKTU MEMBINA HALAQOH :

					<select name="waktu_membina">
						<option value="1">0</option>
						<option value="2">kurang dari 30</option>
						<option value="3">30-60</option>
						<option value="4">lebih dari 60</option>
					</select><br><br>

					<Strong>RAPAT :<br> </Strong>
					<input type="radio" name="rapat" value="ya" checked> Ya
					<input type="radio" name="rapat" value="tidak"> Tidak<br>
					JENIS RAPAT :

					<select name="jenis_rapat">
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
					<input type="radio" name="pulang" value="ya" checked> Ya
					<input type="radio" name="pulang" value="tidak"> Tidak<br>
					JENIS HOME VISIT :

					<select name="jenis_pulang">
						<option value="0">0</option>
						<option value="wali_murid">Wali Murid</option>
						<option value="sit_di">SIT DI</option>
						<option value="keluarga">Keluarga</option>
						<option value="tetangga">Tetangga</option>
					</select><br><br>

					<Strong>MENGISI ACARA :<br> </Strong>
					<input type="radio" name="mengisi_acara" value="ya" checked> Ya
					<input type="radio" name="mengisi_acara" value="tidak"> Tidak<br>
					JENIS ACARA :

					<select name="jenis_acara">
						<option value="0">0</option>
						<option value="khutbah">Khutbah Jumat</option>
						<option value="pengajian">Pengajian</option>
						<option value="seminar">Seminar</option>
						<option value="lokakarya">Loka Karya</option>
						<option value="pelatihan">Pelatihan</option>
					</select><br><br>

					<Strong>PELATIHAN :<br> </Strong>
					<input type="radio" name="pelatihan" value="ya" checked> Ya
					<input type="radio" name="pelatihan" value="tidak"> Tidak<br>
					JENIS PELATIHAN :

					<select name="jenis_pelatihan">
						<option value="0">0</option>
						<option value="undangan">Undangan</option>
						<option value="utusan_sit">Utusan SIT DI</option>
						<option value="mandiri">Mandiri</option>
					</select><br><br>

				</div> <!-- end kolom2 -->


				<div class="col">

					<Strong>SUPER VISI :<br> </Strong>
					<input type="radio" name="supervisi" value="ya" checked> Ya
					<input type="radio" name="supervisi" value="tidak"> Tidak<br><br>

					<Strong>KULTUM DI SEKOLAH :<br> </Strong>
					<input type="radio" name="kultum" value="ya" checked> Ya
					<input type="radio" name="kultum" value="tidak"> Tidak<br><br>

					<Strong>ISI WEBSITE :<br> </Strong>
					<input type="radio" name="isi_web" value="ya" checked> Ya
					<input type="radio" name="isi_web" value="tidak"> Tidak<br><br>

					<Strong>BAGIKAN MEDSOS :<br> </Strong>
					<input type="radio" name="medsos" value="ya" checked> Ya
					<input type="radio" name="medsos" value="tidak"> Tidak<br><br>

					<Strong>KARYA :<br> </Strong>
					<input type="radio" name="karya" value="ya" checked> Ya
					<input type="radio" name="karya" value="tidak"> Tidak<br>
					JENIS KARYA :
					<select name="jenis_karya">
						<option value="0">0</option>
						<option value="modul">Modul</option>
						<option value="buku">Buku</option>
						<option value="lainnya">Lainnya</option>
					</select><br><br>

					<Strong>LOMBA :<br> </Strong>
					<input type="radio" name="lomba" value="ya" checked> Ya
					<input type="radio" name="lomba" value="tidak"> Tidak<br>

					JENIS LOMBA :
					<select name="jenis_lomba">
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
					<input type="radio" name="rencana" value="ya" checked> Ya
					<input type="radio" name="rencana" value="tidak"> Tidak<br><br>

					JENIS RENCANA : <br>
					<select name="jenis_lomba">
						<option value="0">0</option>
						<option value="rpp">RPP</option>
						<option value="rpp+">RPP+Langkah Pembelajaran</option>
						<option value="rpp++">RPP+LP+Ringkasan Materi</option>
						<option value="rpp+++">RPP+LP+RM+Penilaian</option>
						<option value="rpp++++">RPP+LP+RM+Pen+Bahan Ajar</option>
						<option value="rpp+++++">RPP+LP+RM+Pen+BA+Media Pembelajaran</option>
					</select><br><br>

					JUMLAH :<br>
					<select name="jumlah_rencana">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select><br><br>

					VALIDASI :<br>
					<select name="validasi">
						<option value="0">0</option>
						<option value="k25">kurang dari 25%</option>
						<option value="25-50">25%-50%</option>
						<option value="l50">lebih dari 50%</option>
						<option value="75">lebih dari 75%</option>
					</select><br>
				</div>
			</div>
		</form>		
	</div>
	<div class="card-footer text-center">
		<button type="submit" class="btn btn-fill btn-success btn-lg">Rekam</button>
	</div>
</div>

@endsection