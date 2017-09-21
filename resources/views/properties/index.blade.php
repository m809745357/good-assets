@extends('layouts.app')

@section('content')
<img src="/images/property-top.png" alt="" width="100%">
<div class="container">
    <div class="row">
        @include('layouts.title', ['title' => '股权转让', 'desc' => 'ALL&nbsp;PROPERTIES'])
        @foreach ($properties as $key => $property)
          @if ($key % 2 == 0)
            @include('properties.left')
          @else
            @include('properties.right')
          @endif
        @endforeach
    </div>
</div>
@endsection
