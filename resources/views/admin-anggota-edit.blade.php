@extends('layouts.mutabaah')

@section('title', 'Edit Anggota')


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header ">
                <h4 class="card-title">Edit Anggota</h4>
                <p class="card-category">Edit Anggota Mutabaah</p>
            </div>
            <div class="card-body ">
                <form action="{{ route('update_anggota') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-horizontal">
                        <div class="row">
                            <div class="col-md-5 col-xs-12">
                                <div class="form-group">
                            		<!-- <label for="name" class="col-md-4 control-label">Nama</label> -->
                            		<div class="col-md-12">
                            			<input id="name" type="text" class="form-control" value="{{$name}}" name="name" required>
                            		</div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="form-group">
                            		<!-- <label for="username" class="col-md-4 control-label">Username </label> -->
                            		<div class="col-md-12">
                            			<input id="username" type="text" class="form-control" value="{{$username}}" name="username" required>
                            		</div>
                                </div>
                            </div>
                            
                            <input type="hidden" name="id" value="{{ $id }}">

                            <div class="col-md-3 col-xs-12">
                                <div class="form-group float-right">
                                    <button type="submit" class="btn btn-info"><strong>Update</strong></button>
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
            <div class="card-header ">
                <h4 class="card-title">Ganti Password</h4>
                <p class="card-category">Ganti Password Anggota Mutabaah</p>
            </div>
            <div class="card-body ">
                <form action="{{ route('password_anggota') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-horizontal">
                        <div class="row">
                            <div class="col-md-6 float-left">
                                <div class="form-group">
                                <!-- <label for="password" class="col-md-4 control-label">Password</label> -->
                                <div class="col-md-12">
                                  <input id="password" type="text" class="form-control" placeholder="New Password ..." name="password">
                                </div>
                                </div>
                            </div>
                            
                            <input type="hidden" name="id" value="{{ $id }}">

                            <div class="col-md-6 float-right">
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-info"><strong>Update Password</strong></button>
                                </div>
                            </div>
                        </div> 
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>

@endsection

@section('push_js')
<script type="text/javascript">
    $('#hapusAnggota').on('click', function(){
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
            $("#formAnggota").submit();
        }
    })
  })
</script>
@endsection