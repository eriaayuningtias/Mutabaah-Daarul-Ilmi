@extends('layouts.mutabaah')

@section('title', 'Profile')

@section('push_css')
<link href="{{ asset('/css/modern-business.css') }}" rel="stylesheet" />    
@endsection

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="{{ asset('/img/sekolah.jpg') }}" alt="First slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="{{ asset('/img/sekolah2.jpg') }}" alt="Second slide">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="my-4 text-center">
			<h2 >Profil SIT Daarul 'Ilmi</h2>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-6 col-sm-6 portfolio-item">
		<div class="card h-100">
			<div class="card-header">
				<h4 class="card-title">SMPIT Daarul 'Ilmi</h4>
		<!-- 		<p class="card-category">lorem ipsum</p> -->
			</div>
			<div class="card-body">
				<h4>Visi</h4>
				<p class="card-text">Mewujudkan Lulusan SMIPIT Daarul 'Ilmi Bandar Lampung yang Takwa, Cerdas, Berprestasi, dan Berakhlak Mulia.</p>
				<h4>Misi</h4>
				<p class="card-text"> 
					<ul>
						<li>Membangun pribadi yang cinta kepada Allah, Rasul-Nya, dan gemar beribadah. </li>
						<li>Membangun pribadi cerdas, terampil, berwawasan, kreatif, dam inovatif. </li>
						<li>Membangun pribadi kuat, tangguh, dan tahan uji. </li>
						<li>Menumbuhkan pribadi berprestasi dan siap bersaing di zamannya. </li>
						<li>Membangun pribadi matang, mandiri, bijaksana, bertanggung jawab terhadap diri sendiri dan ummat.</li></ul>
					</ul>
				</p>
			</div>
		</div>
	</div>

	<div class="col-lg-6 col-sm-6 portfolio-item">
		<div class="card h-100">

			<div class="card-body">
				<h4 class="card-title">
					<a>SMAIT Daarul 'Ilmi</a>
				</h4>
				<h4>Visi</h4>
				<p class="card-text">Menyiapkan Calon Pemimpin di Segala Bidang Menyongsong Indonesia Emas 2045.</p>
				<h4>Misi</h4>
				<p class="card-text"><ul>
					<li>Mengembangkan kompetensi spiritual, moral, sosial, pengetahuan, keterampilan, dan kesehatan. </li>
					<li>Menerapkan proses pembelajaran yang efektif, inovatif, kreatif, dan produktif. </li>
					<li>Memantapkan pembiasaan hidup yang berpegang teguh pada prinsip-prinsip Islam. </li>
					<li>Menerapkan budaya belajar sepanjang masa dengan daya dukung teknologi informasi dan komunikasi. </li>
					<li>Mengembangkan minat, bakat, dan jiwa kewirausahaan.</li>
					<li>Memupuk rasa tanggung jawab terhadap pribadi, keluarga, agama, bangsa dan negara, serta ummat di seluruh dunia.</li></ul>
				</ul></p>
			</div>
		</div>
	</div>
</div>
<!-- /.row -->

<!-- <div class="row py-4 px-4">
	<div class="col main-content py-4 px-4">
		<h1 class="text-center mb-5"> Welcome to Lorem Ipsum </h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
	</div>
</div> -->

@endsection


@section('push_js')
<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
@endsection