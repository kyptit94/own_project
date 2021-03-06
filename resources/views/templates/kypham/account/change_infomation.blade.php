@extends('templates.'.sc_store('template').'.shop_layout')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('member.post_change_infomation') }}">
                        @csrf

                        <div class="form-group row {{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ trans('account.first_name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" required value="{{ (old('first_name'))?old('first_name'):$dataUser['first_name']}}">

                                @if($errors->has('first_name'))
                                    <span class="help-block">{{ $errors->first('first_name') }}</span>
                                @endif

                            </div>
                        </div>
                        <div class="form-group row {{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ trans('account.last_name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" required value="{{ (old('last_name'))?old('last_name'):$dataUser['last_name']}}">

                                @if($errors->has('last_name'))
                                    <span class="help-block">{{ $errors->first('last_name') }}</span>
                                @endif

                            </div>
                        </div>
                        <div class="form-group row {{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ trans('account.phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" required value="{{ (old('phone'))?old('phone'):$dataUser['phone']}}">

                                @if($errors->has('phone'))
                                    <span class="help-block">{{ $errors->first('phone') }}</span>
                                @endif

                            </div>
                        </div>

                       <div class="form-group row {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ trans('account.email') }}</label>

                            <div class="col-md-6">
                              {{ $dataUser['email'] }}

                            </div>
                        </div>


                       <div class="form-group row {{ $errors->has('address1') ? ' has-error' : '' }}">
                            <label for="address1" class="col-md-4 col-form-label text-md-right">{{ trans('account.address1') }}</label>

                            <div class="col-md-6">
                                <input id="address1" type="text" class="form-control" name="address1" required value="{{ (old('address1'))?old('address1'):$dataUser['address1']}}">

                                @if($errors->has('address1'))
                                    <span class="help-block">{{ $errors->first('address1') }}</span>
                                @endif

                            </div>
                        </div>

                       <div class="form-group row {{ $errors->has('address2') ? ' has-error' : '' }}">
                            <label for="address2" class="col-md-4 col-form-label text-md-right">{{ trans('account.address2') }}</label>
                            <div class="col-md-6">
                                <input id="address2" type="text" class="form-control" name="address2" required value="{{ (old('address2'))?old('address2'):$dataUser['address2']}}">

                                @if($errors->has('address2'))
                                    <span class="help-block">{{ $errors->first('address2') }}</span>
                                @endif

                            </div>
                        </div>
@php
    $country = (old('country'))?old('country'):$dataUser['country'];
@endphp

                    <div class="form-group row {{ $errors->has('country') ? ' has-error' : '' }}">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ trans('account.country') }}</label>
                            <div class="col-md-6">
                            <select class="form-control country" style="width: 100%;" name="country" >
                                <option>__{{ trans('account.country') }}__</option>
                                @foreach ($countries as $k => $v)
                                    <option value="{{ $k }}" {{ ($country ==$k) ? 'selected':'' }}>{{ $v }}</option>
                                @endforeach
                            </select>
                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        {{ $errors->first('country') }}
                                    </span>
                                @endif
                            </div>
                    </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ trans('account.update_infomation') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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
