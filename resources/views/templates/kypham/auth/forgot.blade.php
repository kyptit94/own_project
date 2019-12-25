@extends('templates.'.sc_store('template').'.shop_layout')

@section('main')
<div class="row">
        <div class="container">
                <h2 class="title text-center">{{ $title }}</h2>
                <div class="col-md-3">
                </div>
                    <div class="col-md-6 login-form">
                     @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Your email</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <button type="submit" name="SubmitLogin" class="btn btn-default">
                                    <span>
                                    <i class="glyphicon glyphicon-wrench"></i>
                                       Submit
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
@endsection

@section('breadcrumb')
<div class="title-page"
    style="background-image: url('Shop_3Columns-title.jpg')/*tpa=http://html.physcode.com/uray/imager/shop/Shop_3Columns-title.jpg*/;background-position: center center;background-size: cover;
    margin-bottom: 20px; 
    ">
    <div class="container">
      <div class="row">
        <div class=" col-md-6 inner-title-page">
          <h1>{{ $title }}</h1>
          <p><span><a href="{{ route('home') }}">Home</a></span>
          / {{ $title }}</p>
        </div>
      </div>
    </div>
  </div>
@endsection
