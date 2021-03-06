@extends('layouts.app')
@section('content')
<div class="row">
<div class="container">
   <div class="col-md-12">
      <div class="card card-primary">
         <div class="card-header">Tambah Data Siswa 
         </div>
         <div class="card-body">
            <form action="{{ route('DenganSenangHati.store') }}" method="post" enctype="multipart/form-data">
               {{ csrf_field() }}
               <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                  <label class="control-label">Nama</label>	
                  <input type="text" name="name" class="form-control"  required>
                  @if ($errors->has('name'))
                  <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
                  </span>
                  @endif
               </div>
               <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                  <label class="control-label">Email</label>	
                  <input id="email" type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required>
                  @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif
               </div>
               <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="password" class="control-label">Password</label>	
                  <input id="password" type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                  @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
               </div>
               <div class="form-group {{ $errors->has('password-confirm') ? ' has-error' : '' }}">
                  <label for="password-confirm" class="control-label">Confirm Password</label>	
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>
                  <div class="form-group">
                     <button type="submit" class="btn btn-primary">Save</button>
                     <a class="btn btn-primary" href="{{ url()->previous() }}"><font color="white">Cancel</font></a>
                  </div>
            </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection