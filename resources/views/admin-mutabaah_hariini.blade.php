@extends('layouts.mutabaah')

@section('title', 'mutabaah')


@section('push_css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
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
            <th>Waktu Isi</th>
            <th>hadir</th>
            <th>jp_jumlahjam</th>
            <th>jamkerja_hadir</th>
            <th>jamkerja_pulang</th>
            <th>jp_jumlahtatapmuka</th>
            <th>jp_rpp</th>
            <th>jp_lk</th>
            <th>jp_ppt</th>
            <th>jp_bahanajar</th>
            <th>jp_penilaian</th>
            <th>tilawah</th>
            <th>subuh_jamaah</th>
            <th>shalat_jamaah</th>
            <th>almatsurat</th>
            <th>shalat_dhuha</th>
            <th>qiyamulail</th>
            <th>puasa_sunnah</th>
            <th>liqo</th>
            <th>olahraga_ya</th>
            <th>olahraga_waktu</th>
            <th>upacara_ya</th>
            <th>upacara_keterangan</th>
            <th>mgmp</th>
            <th>membinahalaqoh_ya</th>
            <th>membinahalaqoh_waktu</th>
            <th>rapat_ya</th>
            <th>rapat_jenis</th>
            <th>homevisit_ya</th>
            <th>homevisit_jenis</th>
            <th>mengisiacara_ya</th>
            <th>mengisiacara_jenis</th>
            <th>pelatihan_ya</th>
            <th>pelatihan_jenis</th>
            <th>supervisi</th>
            <th>kultum_di_sekolah</th>
            <th>isi_website</th>
            <th>bagikan_medsos</th>
            <th>karya_ya</th>
            <th>karya_jenis</th>
            <th>lomba_ya</th>
            <th>lomba_jenis</th>
            <th>rencanapembelajaranberikutnya_ya</th>
            <th>rencanapembelajaranberikutnya_jenis</th>
            <th>rencanapembelajaranberikutnya_validasi</th>
          </thead>
          <tbody>
            @foreach ($mutabaahs as $index => $mutabaah)
            <tr>
              <td>{{ $index + 1 }}</td>
              <td>{{ $mutabaah->user->name }}</td>
              <td>{{ $mutabaah->created_at->format('H:i:s')}}</td>
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
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js" type="text/javascript"></script>
<script src="//cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js" type="text/javascript"></script>

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