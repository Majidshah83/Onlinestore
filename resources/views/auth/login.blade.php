@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 @if(session('message'))
         <div class="alert alert-success">
            <strong>{{session('message')}}</strong>
         </div>
         @endif
                <div class="card-header" style="background-color:black; color: white;">{{ __('Welcome to Online Attandce  Please login') }}</div>

                <div class="card-body" style=" background-color: gainsboro;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your Name">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#admin-form">
      Register
      </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

      <div class="modal fade" id="admin-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header border-bottom-0">
                  <p class="modal-title" id="exampleModalLabel" style="font-size: 29px; font-weight: bold;">
                     Register User
                  </p>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <form action="{{url('register-user')}}" method="POST">
                  @csrf
                  <div class="modal-body">
                     <div class="form-group">
                        <label for="Title">Name</label>
                        <input type="text" class="form-control" id="text1" name="name"
                           aria-describedby="titleHelp" placeholder="Enter name">
                     </div>
                     <div class="form-group">
                        <label for="Title">Email</label>
                        <input type="email" class="form-control" id="text1" name="email"
                           aria-describedby="titleHelp" placeholder="Enter Email">
                     </div>
                     <div class="form-group">
                        <label for="Title">Password</label>
                        <input type="password" class="form-control" id="myInput" name="password"
                           aria-describedby="titleHelp" placeholder="Enter Password">
                          
                     </div>
                     <div class="form-group">
                        <label for="Title">Re-type Password</label>
                        <input type="password" class="form-control"  name="confirm_password"
                           aria-describedby="titleHelp" placeholder=" Enter Re-type Password">
                     </div>
                     <div class="form-group">
                        <label for="department">Select Role</label></br>
                        <select class="form-control" aria-label=".form-select-sm example" name="role">
                           <option selected>admin</option>
                           <option>user</option>
                        </select>
                     </div>
                  </div>
                  <div class="modal-footer border-top-0 d-flex justify-content-center">
                     <button type="submit" class="btn btn-success">Save</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
</div>
@endsection
