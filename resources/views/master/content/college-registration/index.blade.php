@extends('master.layouts.app')
@section('page-title', 'College Registration')
@section('content')
<div class="app-card app-card-chart h-100 shadow-sm">
  <div class="app-card-header p-3">
    <div class="row justify-content-between align-items-center">
      <div class="col-auto">
        <h4 class="app-card-title">Registration Form</h4>
      </div>
    </div>
  </div>
  <div class="app-card-body p-3 p-lg-4">
    <form id="college-form">
      <div class="row">
        <div class="col-md-6">
          <h5>College Details</h5>
          <hr>
          <div class="row">
            <div class="col-md-12">   
              <div class="mb-3">
                <label class="form-label">College Name</label>
                <input type="text" class="form-control" placeholder="Enter college name" name="name">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">   
              <div class="mb-3">
                <label class="form-label">Complete Address</label>
                <input type="text" class="form-control" placeholder="Enter college address" name="address">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">   
              <div class="mb-3">
                <label class="form-label">Registered Name</label>
                <input type="text" class="form-control" placeholder="Enter registered Name" name="registered_name">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">   
              <div class="mb-3">
                <label class="form-label">Owner</label>
                <input type="text" class="form-control" placeholder="Enter owner" name="owner">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <h5>College Credentials</h5>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" placeholder="Enter Username" name="username">
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" placeholder="Enter Email" name="email">
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter Password" name="password">
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <button type="submit" class="btn btn-warning btn-save">Save College</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection

@section('custom-js')
<script src="{{ asset('js/master/college/index.js') }}"></script>
@endsection