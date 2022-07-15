@extends('college.layouts.app')
@section('page-title', 'Student List')
@section('content')
<div class="app-card app-card-chart h-100 shadow-sm">
  <div class="app-card-header p-3">
    <div class="row justify-content-between align-items-center">
      <div class="col-auto">
        <h4 class="app-card-title">Student List</h4>
      </div>
    </div>
  </div>
  <div class="app-card-body p-3 p-lg-4">
    <div class="table-responsive">
      <table class="table app-table-hover mb-0 text-left" id="college-list">
        <thead>
          <tr>
            <th class="cell">No</th>
            <th class="cell">Student Name</th>
            <th class="cell">Student Age</th>
            <th class="cell">Address</th>
            <th class="cell">Has Filled up Form</th>
            <th class="cell w-7">Action</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection

@section('custom-js')
<script src="{{ asset('js/college/index.js') }}"></script>
@endsection
