@extends('layouts.mutabaah')

@section('title', 'Home')


@section('content')
<form>
	<p> KEHADIRAN :<br> 
		 <input type="radio" name="gender" value="male" checked> Hadir
		 <input type="radio" name="gender" value="female"> Tidak<br><br>

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

  		TILAWAH :
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
  		</select><br>
  		SUBUH JAMAAH :<br> 
		 <input type="radio" name="gender" value="male" checked> Hadir
		 <input type="radio" name="gender" value="female"> Tidak<br><br>
  
</form> </p>


@endsection