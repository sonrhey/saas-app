@extends('master.layouts.app')
@section('page-title', 'Student Forms Creation')
@section('content')
<div class="app-card app-card-chart h-100 shadow-sm">
  <div class="app-card-header p-3">
    <div class="row justify-content-between align-items-center">
      <div class="col-auto">
        <h4 class="app-card-title">Student Forms Creation</h4>
      </div>
    </div>
  </div>
  <div class="app-card-body p-3 p-lg-4">
    <div class="col-4">
      <div class="mb-3 row">
        <label for="select-college" class="col-sm-2 col-form-label">College:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" placeholder="Select College" readonly>
        </div>
        <div class="col-sm-2">
          <button class="btn btn-secondary" type="button">...</button>
        </div>
      </div>
    </div>
    <div class="form-builder">
    </div>
  </div>
</div>
@endsection

@section('custom-js')
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="{{ asset('js/master/college/form-creation/student.js') }}"></script>
@endsection