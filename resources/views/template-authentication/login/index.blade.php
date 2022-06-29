@extends('template-authentication.layouts.app')
@section('content')
<div class="row g-0 app-auth-wrapper">
  @include('template-authentication.login.sections.first')
  @include('template-authentication.login.sections.second')
</div>
@endsection