@extends('layouts.app')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
{{--             <li class="breadcrumb-item"><a href="/view-daily-activity">Activity</a></li> --}}
            <li class="breadcrumb-item active" aria-current="page">New Personnel</li>
        </ol>
    </nav>

<div class="page-wrapper">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-12 col-md-10 mb-4 col-lg-10">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">New (Personnel)</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
              </div>
            </div>

                @include('includes.errors')

            <form method="POST" action="/add-new-personnel">

                @csrf 

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Personnel's name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="name"  placeholder="Enter personnel's name" value="{{ old('name') }}" >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" value="{{ old('email') }}" class="form-control"
                               placeholder="Enter  email" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-8">
                        <input type="text" name="phone" class="form-control"
                               placeholder="Enter phone number" value="{{ old('phone') }}">
                    </div>
                </div>

              <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Select Role</label>
                    <div class="col-sm-8">
                        <select name="role" class="form-control">
                            <option value="">Select a role</option>
                            <option {{ old('role') == 'admin' ? 'selected' : '' }} value="admin">admin</option>
                            <option {{ old('role') == 'personnel' ? 'selected' : '' }} value="intern">personnel</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <br>
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        
                        <button class="btn btn-primary">Submit</button>

                    </div>
                </div>
            </form>


        </div>
          
        </div>
      </div>
  
    </div>

<script>

</script>
    
@endsection
