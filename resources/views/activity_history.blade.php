@extends('layouts.app')


@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="/view-daily-activity">View Daily Activities</a></li>
    <li class="breadcrumb-item active" aria-current="page">Activity History</li>
    </ol>
</nav>


<div class="col-xl-12 col-md-10 mb-4 col-lg-10">
    <div class="card border-left-secondary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Activity ({{ strtoupper($activity->status)}})</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ strtoupper('#'.$activity->activity)}}</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
          </div>
        </div> <br>

        @include('includes.errors')

        <div class="media">
       {{--      <img src="..." class="mr-3" alt="..."> --}}
            <div class="media-body">

                <form action="/toggle/{{$activity->id}}/status" method="post">

                    @csrf

                    <div class="row form-group  col-md-3">

                        <label for="status">Activity Status</label>

                        <select name="status" id="" class="form-control" onchange="this.form.submit()">

                            <option value="{{ $activity->status }}">{{ strtoupper($activity->status) }}</option>

                            <option value="pending">PENDING</option>

                            <option value="done">DONE</option>


                        </select>

                    </div>

                </form>
             
              
            </div>
        </div>


        <div class="card shadow mb-4" id="actvity-table">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daily Activitys</h6>
            </div>
    
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                  <thead>
                    <tr>
                      <th>User</th>
                      <th>Request IP</th>
                      <th>Activity type</th>
                      <th>Remarks</th>
                      <th>Date</th>
                      <th>Time</th>
                    </tr>
                  </thead>
           
                  <tbody id="tb">

                    @foreach ($activity->history as $history)
                        <tr>
                            <td>
                                <p>

                                    {{ $history->user->name }} <br>

                                    <a href="javascript:void(0)"  data-toggle="modal" data-target="#user">
                                        <i class="fas fa-user-md fa-sm fa-fw mr-2 text-gray-400"></i> view
                                    </a> 
                                    
                                </p>
                            </td>

                            <td>
                                {{ $history->request_ip}}
                            </td>

                            <td>
                                {{ $history->activity_type}}
                            </td>

                            <td>
                                {!! $history->activity_remarks!!}
                            </td>

                            <td>
                                {{  \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $history->created_at)->format('Y-m-d') }}
                            </td>

                            <td>
                                {{  \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $history->created_at)->format('H:i:s') }}
                            </td>

                        </tr>
                    @endforeach
       
                  </tbody>
                </table>
              </div>
            
              <div class="row">

                <div class="col-md-11 col-lg-11"></div><a href="/view-daily-activity" class="btn btn-primary">Back</a>

              </div>
              
            </div>
          </div>

    </div>
      
    </div>

</div>



<div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are you sure you want to end your current session?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="/logout" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout
          </a>

          <form id="logout-form" action="/logout" method="POST" style="display: none;">
            @csrf
        </form>
        </div>
      </div>
    </div>
  </div>


  <script>



  /*   $.ajax({
 
     url: '/view-activity', 
  
     }).done(function(data){
 
       let dom = ``;
       
 
       if(jQuery.isEmptyObject(data))
       { 
 
           dom = ` <div class="jumbotron text-center">
 
                       <h3>No Activity Found</h3>
 
                       <p>You may want to add a new activity</p>
 
                   </div>
               `;
 
       }else{
  */
         /*   $('#activity-table').show();
 
           $('#tb').html(); //remove clear content
 
           $.each(data, function(i, activitylist){
 
             console.log(activitylist.length)
 
             $.each(activitylist, function(i, activity){
 
         
               let hist = ``;
 
               if(jQuery.isEmptyObject(activity.history) )
               {
                 hist = `<td><p>No recent update </p></td>`;
               }else{
                 hist = `<td>`+ activity.history[0].activity_type + `</td>`;
               }
 
             dom =` <tr>
                     <td>Put date here</td>
                     <td>`+activity.activity+`</td>
                     <td>`+activity.status+`</td>
                     <td>`+activity.request_ip+`</td>
                     <td>`+activity.user.name+`</td>
                     <td>`+activity.created_at+`</td>
                     `+hist+`
                     <td>`+activity.updated_at+`</td>
                     <td>`+activity.updated_at+`</td>
                     <td><a class="btn btn-primary" href="">Details</a></td>
               </tr> `;
 
               $('#tb').append(dom);
 
             });
 
           });
 
       }
 
     }); */
 
 </script> 

    
@endsection