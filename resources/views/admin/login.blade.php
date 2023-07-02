@extends('admin.layout.main')
@section('content')
    <div class="login-box" style="margin: auto;margin-top: 50px">


        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Đăng nhập</p>
                <form action="{{route('loginAction')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" required name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('errorLogin')
                            <label for="">
                                {{$message}}
                            </label>
                            
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Mật khẩu" required name="password"> 
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                        </div>

                    </div>
                </form>
                <br>
                <p class="mb-1">
                    <a href="forgot-password.html">Quên mật khẩu</a>
                </p>
            </div>

        </div>
    </div>
    <div id="tudienjpOff"></div>
@endsection
