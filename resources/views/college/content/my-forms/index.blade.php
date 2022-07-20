@extends('college.layouts.app')
@section('page-title', 'My Forms')
@section('content')
<div class="app-card app-card-chart h-100 shadow-sm">
  <div class="app-card-header p-3">
    <div class="row justify-content-between align-items-center">
      <div class="col-auto">
        <h4 class="app-card-title">Form Fill up</h4>
      </div>
    </div>
  </div>
  <div class="app-card-body p-3 p-lg-4">
    <div class="row">
      <div class="col-md-6">
        <div class="search-student">
          <div class="mb-3">
            <h5 class="mb-3">Student</h5>
            <div class="row">
              <div class="col-md-10">
                <input type="text" class="form-control" name="student_name" placeholder="Search a student." readonly>
              </div>
              <div class="col-md-2">
                <button class="btn btn-secondary" type="button"  data-bs-toggle="modal" data-bs-target="#student-list-modal" >...</button>
              </div>
            </div>
          </div>
          <div class="mb-3">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="my-forms d-none">
          <div class="college-form mb-3">
            <h5 class="mb-3 my-forms-control">College Form</h5>
            <form class="college-form-submit">
            </form>
          </div>
          <div class="form-check form-switch my-forms-control">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Include input of Student Form</label>
          </div>
          <div class="student-wrapper">
            <hr class="my-forms-control">
            <div class="student-form">
              <h5 class="mb-3 my-forms-control">Student Form</h5>
              <form class="student-form-submit">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('college.modal.student-list')
@endsection

@section('custom-js')
<script src="{{ asset('js/college/index.js') }}"></script>
@endsection
