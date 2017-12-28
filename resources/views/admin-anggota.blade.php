@extends('layouts.mutabaah')

@section('title', 'Anggota')

@section('push_css')
    <link href="{{ asset('/css/jquery.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/buttons.dataTables.min.css') }}" rel="stylesheet" />
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header ">
                <h4 class="card-title">Tambah Anggota</h4>
                <p class="card-category">Tambah Anggota Mutabaah</p>
            </div>
            <div class="card-body ">
                <form action="{{ route('tambah_anggota') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-horizontal">
                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                                <div class="form-group">
                            		<!-- <label for="name" class="col-md-4 control-label">Nama</label> -->
                            		<div class="col-md-12">
                            			<input id="name" type="text" class="form-control" placeholder="Nama ..." name="name" required>
                            		</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <div class="form-group">
                            		<!-- <label for="username" class="col-md-4 control-label">Username </label> -->
                            		<div class="col-md-12">
                            			<input id="username" type="text" class="form-control" placeholder="Username ..." name="username" required>
                            		</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <div class="form-group">
                            		<!-- <label for="password" class="col-md-4 control-label">Password</label> -->
                            		<div class="col-md-12">
                            			<input id="password" type="text" class="form-control" placeholder="Password ..." name="password" required>
                            		</div>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-12">
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-info"><strong>Tambah</strong></button>
                                </div>
                            </div>
                        </div> 
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title">Daftar Anggota</h4>
                <p class="card-category">Anggota terdaftar dalam sistem</p>
            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="display" id="tabel_anggota"  width="100%" cellspacing="0">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Lihat Mutabaah</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @foreach ($anggotas as $index => $anggota)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $anggota['name'] }}</td>
                            <td>{{ $anggota['username'] }}</td>
                            <td>
                                <form action="{{route('riwayat_anggota')}}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $anggota->id }}">
                                    <button type="submit" class="btn btn-info">
                                       Lihat Mutabaah
                                   </button>
                               </form>
                            </td>
                            <td>
                                <form action="{{route('edit_anggota')}}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $anggota->id }}">
                                    <button type="submit" class="btn btn-simple btn-warning btn-icon remove btn-lg py-0 px-0">
                                       <i class="fa fa-edit"></i>
                                   </button>
                               </form>
                           </td>
                           <td>
                               <form id="formAnggota" action="{{route('hapus_anggota')}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $anggota->id }}">
                                <a id="hapusAnggota" class="hapusAnggota btn btn-simple btn-danger btn-icon remove btn-lg py-0 px-0">
                                   <i class="fa fa-trash text-danger"></i>
                               </a>
                           </form>
                       </td>
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
<script src="{{ asset('js/jquery.dataTables.min.js') }}" type="text/javascript"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#tabel_anggota').DataTable({
      "scrollX": true
    } );
} );
</script>

<script type="text/javascript">
    $('.hapusAnggota').on('click', function(){
      swal({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
            $(this).closest("form").submit();
        }
    })
  })
</script>
@endsection