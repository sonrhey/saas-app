@extends('student.layouts.app')
@section('page-title', 'Overview')
@section('content')
  @include('student.content.dashboard.sections.first')
  @include('student.content.dashboard.sections.second')
@endsection