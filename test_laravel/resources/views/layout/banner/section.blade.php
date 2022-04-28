@extends('index')

@section('title','Thế giới đồ cổ')

@section('main_content')
     <!-- start slide -->
     @include('layout.banner.slide')
     <!-- end slide -->

     <!-- start product -->
     @include('layout.banner.product')
     <!-- end product -->
@endsection
