@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('success'))
            <div class="alert alert-warning alert-dismissible" role="alert">
                {{ Session::get('success') }}
            </div>
            @endif
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{ __('messages.welcome') }}</h1>
        </div>
    </div>
</div>
@endsection