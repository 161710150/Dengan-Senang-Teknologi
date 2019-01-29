@extends('layouts.app')
@section('content')
<div class="row">
   <div class="container">
      <div class="col-md-12">
         <div class="card card-primary">
            <div class="card-header">Edit Data 
            </div>
            <div class="card-body">
               <form action="{{ route('DenganSenangHati.update',$edit->id) }}" method="post" enctype="multipart/form-data" >
                  <input name="_method" type="hidden" value="PATCH">
                  {{ csrf_field() }}
                  <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                     <label class="control-label">Nama</label>	
                     <input type="text" name="name" class="form-control" value="{{ $edit->name }}"  required>
                     @if ($errors->has('name'))
                     <span class="help-block">
                     <strong>{{ $errors->first('name') }}</strong>
                     </span>
                     @endif
                  </div>
                  <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                     <label for="email" class="control-label">Email</label>	
                     <input id="email" type="email" name="email" class="form-control" value="{{ $edit->email }}"  required>
                     @if ($errors->has('email'))
                     <span class="help-block">
                     <strong>{{ $errors->first('email') }}</strong>
                     </span>
                     @endif
                  </div>
                  <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                     <label for="password" class="control-label">Password</label>	
                     <input id="password" type="password" name="password" class="form-control" value="{{ $edit->password }}"  required>
                     @if ($errors->has('password'))
                     <span class="help-block">
                     <strong>{{ $errors->first('password') }}</strong>
                     </span>
                     @endif
                  </div>
                  <div class="form-group">
                     <label for="password-confirm" class="control-label">Confirm Password</label>
                     <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ $edit->password }}">
                  </div>
                  <div class="form-group">
                     <button type="submit" class="btn btn-primary">Save</button>
                     <a class="btn btn-primary" href="{{ route('DenganSenangHati.index') }}"><font color="white">Cancel</font></a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection