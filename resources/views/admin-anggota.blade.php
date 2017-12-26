@extends('layouts.mutabaah')

@section('title', 'Home')


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Tambah Data Dosen</h4>
            </div>
            <div class="content">
                <form action="{{ route('register') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-horizontal">
                        <div class="row">
                            <div class="col-md-5  col-xs-12">
                                <div class="form-group">
                            		<label for="name" class="col-md-4 control-label">Nama</label>
                            		<div class="col-md-6">
                            			<input id="name" type="text" class="form-control" placeholder="Nama ..." name="name" required>
                            		</div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                            		<label for="username" class="col-md-4 control-label">Username </label>
                            		<div class="col-md-6">
                            			<input id="username" type="text" class="form-control" placeholder="Username ..." name="username" required>
                            		</div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                            		<label for="password" class="col-md-4 control-label">Password</label>
                            		<div class="col-md-6">
                            			<input id="password" type="text" class="form-control" placeholder="Password ..." name="password" required>
                            		</div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                            		<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            		<div class="col-md-6">
                            			<input id="password_confirmation" type="text" class="form-control" placeholder="NIP ..." name="password_confirmation" required>
                            		</div>
                                </div>
                            </div>
                            <div class="col-md-2 col-md-offset-1  col-xs-12">
                                <div class="form-group  ">
                                    <button type="submit" class="btn btn-info">Tambah</button>
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
        <div class="card">
            <div class="header">
                <h4 class="title">Daftar Anggota</h4>
                <p class="category">lorem ipsum</p>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                    </thead>
                    <tbody>
                        @foreach ($anggotas as $anggota)
                        <tr>
                            <td>{{ $anggota->name }}</td>
                            <td>{{ $anggota->username }}</td>
                            <td>{{ $anggota->password }}</td>
                            <td>
                                <form action="" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $anggota->id }}">
                                    <button type="submit" class="btn btn-simple btn-warning btn-icon remove btn-xs">
                                       <i class="fa fa-edit"></i></a>
                                   </button>
                               </form>
                               <form action="" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $anggota->id }}">
                                <button type="submit" class="btn btn-simple btn-danger btn-icon remove btn-xs">
                                   <i class="fa fa-times"></i></a>
                               </button>
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