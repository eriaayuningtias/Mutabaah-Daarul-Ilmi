@extends('layouts.mutabaah')

@section('title', 'Home')


@section('content')
<form>
	<p> KEHADIRAN :<br> 
		 <input type="radio" name="kehadiran" value="hadir" checked> Hadir
		 <input type="radio" name="kehadiran" value="tidak_hadir"> Tidak<br><br>

		PROSES PEMBELAJARAN <br>
		a. Jumlah Jam :
		 <action="/action_page.php">
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
  		</select> <br>
  		b. Jumlah Tatap Muka :
		 <action="/action_page.php">
  			<select name="tatap_muka">
		    <option value="1">1</option>
		    <option value="2">2</option>
		    <option value="3">3</option>
		    <option value="4">4</option>
		    <option value="5">5</option>
  		</select><br>
  		c. RPP :
		 <action="/action_page.php">
  			<select name="rpp">
		    <option value="1">1</option>
		    <option value="2">2</option>
		    <option value="3">3</option>
		    <option value="4">4</option>
		    <option value="5">5</option>
  		</select><br>
  		d. LK :
		 <action="/action_page.php">
  			<select name="lk">
		    <option value="1">1</option>
		    <option value="2">2</option>
		    <option value="3">3</option>
		    <option value="4">4</option>
		    <option value="5">5</option>
  		</select><br>
  		e. PPT :
		 <action="/action_page.php">
  			<select name="ppt">
		    <option value="1">1</option>
		    <option value="2">2</option>
		    <option value="3">3</option>
		    <option value="4">4</option>
		    <option value="5">5</option>
  		</select><br>
  		f. Bahan Ajar :
		 <action="/action_page.php">
  			<select name="bahan_ajar">
		    <option value="1">1</option>
		    <option value="2">2</option>
		    <option value="3">3</option>
		    <option value="4">4</option>
		    <option value="5">5</option>
  		</select><br>
  		g. Penilaian :
		 <action="/action_page.php">
  			<select name="penilaian">
		    <option value="1">1</option>
		    <option value="2">2</option>
		    <option value="3">3</option>
		    <option value="4">4</option>
		    <option value="5">5</option>
  		</select><br><br>

  		TILAWAH (LEMBAR):
		 <action="/action_page.php">
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
  		</select><br><br>
  		SUBUH JAMAAH :<br> 
		 <input type="radio" name="subuh" value="ya" checked> Ya
		 <input type="radio" name="subuh" value="tidak"> Tidak<br><br>

		SHALAT JAMAAH :
		 <action="/action_page.php">
  			<select name="shalat_jamaah">
		    <option value="1">1</option>
		    <option value="2">2</option>
		    <option value="3">3</option>
		    <option value="4">4</option>
		    <option value="5">5</option>
  		</select><br><br>

  		ALMATSURAT :<br> 
		 <input type="radio" name="almatsurat" value="ya" checked> Ya
		 <input type="radio" name="almatsurat" value="tidak"> Tidak<br><br>

  		SHALAT DHUHA :<br> 
		 <input type="radio" name="dhuha" value="ya" checked> Ya
		 <input type="radio" name="dhuha" value="tidak"> Tidak<br><br>


  		QIYAMULAIL :<br> 
		 <input type="radio" name="qiyamulail" value="ya" checked> Ya
		 <input type="radio" name="qiyamulail" value="tidak"> Tidak<br><br>

  		PUASA SUNNAH :<br> 
		 <input type="radio" name="puasa" value="ya" checked> Ya
		 <input type="radio" name="puasa" value="tidak"> Tidak<br><br>

  		LIQO :<br> 
		 <input type="radio" name="liqo" value="ya" checked> Ya
		 <input type="radio" name="liqo" value="tidak"> Tidak<br><br>


  		OLAH RAGA :<br> 
		 <input type="radio" name="olahraga" value="ya" checked> Ya
		 <input type="radio" name="olahraga" value="tidak"> Tidak<br>
		WAKTU OLAH RAGA (MENIT) :
		 <action="/action_page.php">
  			<select name="waktu_olahraga">
		    <option value="1">0</option>
		    <option value="2">kurang dari 30</option>
		    <option value="3">30-60</option>
		    <option value="4">lebih dari 60</option>
  		</select><br><br>

  		UPACARA :<br> 
		 <input type="radio" name="upacara" value="ya" checked> Ya
		 <input type="radio" name="upacara" value="tidak"> Tidak<br>
		PEMBINA/PESERTA :
		 <action="/action_page.php">
  			<select name="pembina">
		    <option value="0">0</option>
		    <option value="pembina">Pembina</option>
		    <option value="peserta">Peserta</option>
  		</select><br><br>

  		MGMP :<br> 
		 <input type="radio" name="mgmp" value="ya" checked> Ya
		 <input type="radio" name="mgmp" value="tidak"> Tidak<br><br>

		MEMBINA HALAQOH :<br> 
		 <input type="radio" name="membina" value="ya" checked> Ya
		 <input type="radio" name="membina" value="tidak"> Tidak<br>
		WAKTU MEMBINA HALAQOH :
		 <action="/action_page.php">
  			<select name="waktu_membina">
		    <option value="1">0</option>
		    <option value="2">kurang dari 30</option>
		    <option value="3">30-60</option>
		    <option value="4">lebih dari 60</option>
  		</select><br><br>

  		RAPAT :<br> 
		 <input type="radio" name="rapat" value="ya" checked> Ya
		 <input type="radio" name="rapat" value="tidak"> Tidak<br>
		JENIS RAPAT :
		 <action="/action_page.php">
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

  		HOME VISIT :<br> 
		 <input type="radio" name="pulang" value="ya" checked> Ya
		 <input type="radio" name="pulang" value="tidak"> Tidak<br>
		JENIS HOME VISIT :
		 <action="/action_page.php">
  			<select name="jenis_pulang">
		    <option value="0">0</option>
		    <option value="wali_murid">Wali Murid</option>
		    <option value="sit_di">SIT DI</option>
		    <option value="keluarga">Keluarga</option>
		    <option value="tetangga">Tetangga</option>
  		</select><br><br>

  		MENGISI ACARA :<br> 
		 <input type="radio" name="mengisi_acara" value="ya" checked> Ya
		 <input type="radio" name="mengisi_acara" value="tidak"> Tidak<br>
		JENIS ACARA :
		 <action="/action_page.php">
  			<select name="jenis_acara">
		    <option value="0">0</option>
		    <option value="khutbah">Khutbah Jumat</option>
		    <option value="pengajian">Pengajian</option>
		    <option value="seminar">Seminar</option>
		    <option value="lokakarya">Loka Karya</option>
		    <option value="pelatihan">Pelatihan</option>
  		</select><br><br>

  		PELATIHAN :<br> 
		 <input type="radio" name="pelatihan" value="ya" checked> Ya
		 <input type="radio" name="pelatihan" value="tidak"> Tidak<br>
		JENIS PELATIHAN :
		 <action="/action_page.php">
  			<select name="jenis_pelatihan">
		    <option value="0">0</option>
		    <option value="undangan">Undangan</option>
		    <option value="utusan_sit">Utusan SIT DI</option>
		    <option value="mandiri">Mandiri</option>
  		</select><br><br>

  		SUPER VISI :<br> 
		 <input type="radio" name="supervisi" value="ya" checked> Ya
		 <input type="radio" name="supervisi" value="tidak"> Tidak<br><br>

		KULTUM DI SEKOLAH :<br> 
		 <input type="radio" name="kultum" value="ya" checked> Ya
		 <input type="radio" name="kultum" value="tidak"> Tidak<br><br>

		ISI WEBSITE :<br> 
		 <input type="radio" name="isi_web" value="ya" checked> Ya
		 <input type="radio" name="isi_web" value="tidak"> Tidak<br><br>

		BAGIKAN MEDSOS :<br> 
		 <input type="radio" name="medsos" value="ya" checked> Ya
		 <input type="radio" name="medsos" value="tidak"> Tidak<br><br>

		KARYA :<br> 
		 <input type="radio" name="karya" value="ya" checked> Ya
		 <input type="radio" name="karya" value="tidak"> Tidak<br>
		JENIS KARYA :
		 <action="/action_page.php">
  			<select name="jenis_karya">
		    <option value="0">0</option>
		    <option value="modul">Modul</option>
		    <option value="buku">Buku</option>
		    <option value="lainnya">Lainnya</option>
  		</select><br><br>

  		LOMBA :<br> 
		 <input type="radio" name="lomba" value="ya" checked> Ya
		 <input type="radio" name="lomba" value="tidak"> Tidak<br>
		JENIS LOMBA :
		 <action="/action_page.php">
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

  		RENCANA YANG AKAN DATANG (PEMBELAJARAN BERIKUTNYA) :<br> 
		 <input type="radio" name="rencana" value="ya" checked> Ya
		 <input type="radio" name="rencana" value="tidak"> Tidak<br>
		JENIS RENCANA :
		 <action="/action_page.php">
  			<select name="jenis_lomba">
		    <option value="0">0</option>
		    <option value="rpp">RPP</option>
		    <option value="rpp+">RPP+Langkah Pembelajaran</option>
		    <option value="rpp++">RPP+LP+Ringkasan Materi</option>
		    <option value="rpp+++">RPP+LP+RM+Penilaian</option>
		    <option value="rpp++++">RPP+LP+RM+Pen+Bahan Ajar</option>
		    <option value="rpp+++++">RPP+LP+RM+Pen+BA+Media Pembelajaran</option>
  		</select><br>
  		JUMLAH :
		 <action="/action_page.php">
  			<select name="jumlah_rencana">
		    <option value="1">1</option>
		    <option value="2">2</option>
		    <option value="3">3</option>
		    <option value="4">4</option>
		    <option value="5">5</option>
  		</select><br>

  		VALIDASI :
		 <action="/action_page.php">
  			<select name="validasi">
		    <option value="0">0</option>
		    <option value="k25">kurang dari 25%</option>
		    <option value="25-50">25%-50%</option>
		    <option value="l50">lebih dari 50%</option>
		    <option value="75">lebih dari 75%</option>
  		</select><br>

  
</form> </p>


@endsection