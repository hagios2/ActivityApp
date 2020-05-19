@extends('layouts.app')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/view-daily-activity">Activity</a></li>
            <li class="breadcrumb-item active" aria-current="page">New Activity</li>
        </ol>
    </nav>

<div class="page-wrapper">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-12 col-md-10 mb-4 col-lg-10">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">New Activity (Annual)</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
              </div>
            </div>


            <form method="POST" action="/create-activity">

                @csrf 

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Activity Title</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="activity" placeholder="Enter activity title" v-model="admin.name">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Remarks</label>
                    <div class="col-sm-8">

                        <textarea name="remarks" class="form-control" id="article-ckeditor" cols="30" placeholder="Enter remarks" rows="10"></textarea>
                   {{--      <input type="text" class="form-control" name="activity" placeholder="Enter activity title" v-model="admin.name"> --}}
                    </div>
                </div>


               {{--  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control"
                               placeholder="Enter  email" v-model="admin.email">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control"
                               placeholder="Enter phone number" v-model="admin.phone1">
                    </div>
                </div> --}}

              {{--   <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control"
                               value="Enter  admin title" v-model="admin.title">
                    </div>
                </div> --}}
              {{--   <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Select Role</label>
                    <div class="col-sm-8">
                        <select name="select" class="form-control" v-model="admin.role">
                            <option value="opt1">Select a role</option>
                            <option value="opt2">super_admin</option>
                            <option value="opt3">marketers</option>
                            <option value="opt3">finance</option>
                            <option value="opt4">broadcaster</option>
                        </select>
                    </div>
                </div>
 --}}


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
