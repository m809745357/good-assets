@extends('layouts.app')

@section('content')
@include('user.menu')
<div class="container" style="width: 100%;background-color: #f7f7f7">
    <div class="row">
      <billing :attributes="{{ $billing }}"></billing>
    </div>
</div>
@endsection
