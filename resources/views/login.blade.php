<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{config('admin.title')}} | {{ trans('admin.login') }}</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="{{ admin_asset("vendor/wenxuanjun/laravel-adminlte3/plugins/font-awesome/css/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ admin_asset("vendor/wenxuanjun/laravel-adminlte3/dist/css/AdminLTE.min.css") }}">
</head>

<body class="hold-transition login-page" @if(config('admin.login_background_image'))style="background: url({{config('admin.login_background_image')}}) no-repeat;background-size: cover;"@endif>
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ admin_base_path('/') }}"><b>{{config('admin.name')}}</b></a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">{{ trans('admin.login') }}</p>
                <form action="{{ admin_base_path('auth/login') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="username">{{ trans('admin.username') }}</label>
                        <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="{{ trans('admin.username') }}" name="username" id="username" value="{{ old('username') }}">
                        @if ($errors->has('username'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">{{ trans('admin.password') }}</label>
                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ trans('admin.password') }}" name="password" id="password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    @if(config('admin.auth.remember'))
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="remember" id="remember" value="1" {{ (!old('username') || old('remember')) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="remember">{{ trans('admin.remember_me') }}</label>
                            </div>
                        </div>
                    @endif
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">{{ trans('admin.login') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ admin_asset("vendor/laravel-admin/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js")}}"></script>
    <script src="{{ admin_asset("vendor/wenxuanjun/laravel-adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
</body>

</html>