@extends('master.layouts.app')
@section('page-title', 'Overview')
@section('content')
  @include('master.content.dashboard.sections.first')
  @include('master.content.dashboard.sections.second')
@endsection