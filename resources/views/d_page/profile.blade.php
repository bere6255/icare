@extends('layouts.icare_app')
@section('navber')
  @include('s_d_navside.nav')
@endsection
@section('sidenav')
  @include('s_d_navside.d_side')
@endsection
@section('content')
  @include('d_s_page.profile')
@endsection
@section('foot')
  @include('s_d_navside.footer')
@endsection
