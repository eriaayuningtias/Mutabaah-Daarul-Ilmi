@extends('layouts.mutabaah')

@section('title', 'mutabaah')


@section('push_css')
  <link rel="stylesheet" href="{{ asset('/css/jquery.dataTables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/buttons.dataTables.min.css') }}">
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card strpied-tabled-with-hover">
      <div class="card-header ">
        <h4 class="card-title">Daftar mutabaah</h4>
        <p class="card-category">mutabaah terdaftar dalam sistem</p>
      </div>
      <div class="card-body table-full-width table-responsive">
        <table class="display" id="riwayatUser" width="100%" cellspacing="0">
          <thead>
            <th>No</th>
            <th>Anggota</th>
            <th>Hadir</th>
            <th>Waktu Hadir</th>
            <th>Waktu Pulang</th>
            <th>Jumlah Jam Mengajar</th>
            <th>Jumlah Tatap Muka</th>
            <th>RPP</th>
            <th>LK</th>
            <th>PPT</th>
            <th>Bahan Ajar</th>
            <th>Penilian</th>
            <th>Tilawah</th>
            <th>Subuh Jamaah</th>
            <th>Shalat Jamaah</th>
            <th>Almatsurat</th>
            <th>Shalat Dhuha</th>
            <th>Qiyamulail</th>
            <th>Puasa Sunnah</th>
            <th>Liqo</th>
            <th>Olahraga</th>
            <th>Jam Olahraga</th>
            <th>Upacara</th>
            <th>Keterangan Upacara</th>
            <th>MGMP</th>
            <th>Membina Halaqoh</th>
            <th>Waktu Membinahalaqoh</th>
            <th>Rapat</th>
            <th>Jenis Rapat</th>
            <th>Home Visit</th>
            <th>Jenis Home Visit</th>
            <th>Mengisi Acara</th>
            <th>Jenis Mengisi Acara</th>
            <th>Pelatihan</th>
            <th>Jenis Pelatihan</th>
            <th>Supervisi</th>
            <th>Kultum di Sekolah</th>
            <th>Isi Website</th>
            <th>Bagikan Medsos</th>
            <th>Karya</th>
            <th>Jenis Karya</th>
            <th>Lomba</th>
            <th>Jenis Lomba</th>
            <th>Rencana Pembelajaran Berikutnya</th>
            <th>Jenis Rencana</th>
            <th>Validasi Rencana</th>
          </thead>
          <tbody>
            @foreach ($mutabaahs as $index => $mutabaah)
            <tr>
              <td>{{ $index + 1 }}</td>
              <td>{{ $mutabaah->user->name }}</td>
              <td>{{ $mutabaah['hadir'] }}</td>
              <td>{{ $mutabaah['jamkerja_hadir'] }}</td>
              <td>{{ $mutabaah['jamkerja_pulang'] }}</td>
              <td>{{ $mutabaah['jp_jumlahjam'] }}</td>
              <td>{{ $mutabaah['jp_jumlahtatapmuka'] }}</td>
              <td>{{ $mutabaah['jp_rpp'] }}</td>
              <td>{{ $mutabaah['jp_lk'] }}</td>
              <td>{{ $mutabaah['jp_ppt'] }}</td>
              <td>{{ $mutabaah['jp_bahanajar'] }}</td>
              <td>{{ $mutabaah['jp_penilaian'] }}</td>
              <td>{{ $mutabaah['tilawah'] }}</td>
              <td>{{ $mutabaah['subuh_jamaah'] }}</td>
              <td>{{ $mutabaah['shalat_jamaah'] }}</td>
              <td>{{ $mutabaah['almatsurat'] }}</td>
              <td>{{ $mutabaah['shalat_dhuha'] }}</td>
              <td>{{ $mutabaah['qiyamulail'] }}</td>
              <td>{{ $mutabaah['puasa_sunnah'] }}</td>
              <td>{{ $mutabaah['liqo'] }}</td>
              <td>{{ $mutabaah['olahraga_ya'] }}</td>
              <td>{{ $mutabaah['olahraga_waktu'] }}</td>
              <td>{{ $mutabaah['upacara_ya'] }}</td>
              <td>{{ $mutabaah['upacara_keterangan'] }}</td>
              <td>{{ $mutabaah['mgmp'] }}</td>
              <td>{{ $mutabaah['membinahalaqoh_ya'] }}</td>
              <td>{{ $mutabaah['membinahalaqoh_waktu'] }}</td>
              <td>{{ $mutabaah['rapat_ya'] }}</td>
              <td>{{ $mutabaah['rapat_jenis'] }}</td>
              <td>{{ $mutabaah['homevisit_ya'] }}</td>
              <td>{{ $mutabaah['homevisit_jenis'] }}</td>
              <td>{{ $mutabaah['mengisiacara_ya'] }}</td>
              <td>{{ $mutabaah['mengisiacara_jenis'] }}</td>
              <td>{{ $mutabaah['pelatihan_ya'] }}</td>
              <td>{{ $mutabaah['pelatihan_jenis'] }}</td>
              <td>{{ $mutabaah['supervisi'] }}</td>
              <td>{{ $mutabaah['kultum_di_sekolah'] }}</td>
              <td>{{ $mutabaah['isi_website'] }}</td>
              <td>{{ $mutabaah['bagikan_medsos'] }}</td>
              <td>{{ $mutabaah['karya_ya'] }}</td>
              <td>{{ $mutabaah['karya_jenis'] }}</td>
              <td>{{ $mutabaah['lomba_ya'] }}</td>
              <td>{{ $mutabaah['lomba_jenis'] }}</td>
              <td>{{ $mutabaah['rencanapembelajaranberikutnya_ya'] }}</td>
              <td>{{ $mutabaah['rencanapembelajaranberikutnya_jenis'] }}</td>
              <td>{{ $mutabaah['rencanapembelajaranberikutnya_validasi'] }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


@endsection

@section('push_js')
<!-- jQuery -->
<!-- <script src="{{ asset('js/jquery-1.12.4.js') }}" type="text/javascript"></script> -->
<script src="{{ asset('js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dataTables.buttons.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jszip.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/vfs_fonts.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/buttons.html5.min.js') }}" type="text/javascript"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#riwayatUser').DataTable({
      "scrollX": true,
      dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
        ]
    } );
} );
</script>
@endsection