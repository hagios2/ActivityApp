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

              <div  id="dateRange">

                <label for="range">Search custom duration of Activity History</label>

                <div class="row">

                  <div class="form-group col-2">

                    <input class="form-control" type="date" name="" id="dateFrom">

                    <span id="dferror" style="color: red; display:none;"><small>From date is required</small></span>
        
                  </div>

                  <div class="form-group col-2">

                    <input class="form-control" type="date" name="" id="dateTo">

                    <span id="dterror" style="color: red; display:none;"><small>To date is required</small></span>
        
                  </div>

                  <div class="form-group col-2">

                    <button class="btn btn-secondary" style="display: inline;" id='find'>Find</button>
        
                  </div>
                  
                </div>

              </div>

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
           
                  <tbody id="tab">

                  </tbody>
                </table>

                <div class="jumbotron text-center" id="emptab" style="display:none;">

                  <h3>No History found for this activity</h3>
    
                  <p>You may want to add a new activity</p>
    
                  </div>
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


    $.ajax({

      url: '/get/{{ $activity->id }}/history'

    }).done(function(data){

        console.log(data)

        if(jQuery.isEmptyObject(data))
        {

          $('#dateRange').hide(); //You dont want to show datepicker if activity has no history

          $('#emptab').fadeIn('slow');
        
        }else{

          makeHistoryTable(data);
        }

    });


    $('#find').click(function(e){

      e.preventDefault();

     var datefrom = $('#dateFrom')

      var dateto = $('#dateTo')

      var from = datePickerisEmpty(datefrom, $('#dferror'))

      var to =  datePickerisEmpty(dateto, $('#dterror'))

        if(from && to)
        {
          $.ajax({
            url: '/get/{{$activity->id}}/history-range',
            data: {

              'dateFrom' : datefrom.val(),
              'dateTo' : dateto.val()
            }
          }).done(function(data){

            if(jQuery.isEmptyObject(data))
            {

              $('#tab').html('');

              $('#emptab').fadeIn(3000);
            
            }else{

              makeHistoryTable(data);
            }

          });

        }

    });

    function datePickerisEmpty(picker, error)
    {

      if(picker.val() == '')
      {
        error.show()

        return false;
      
      }else{

        error.hide();

        return true;
      }
    }


    function makeHistoryTable(data)
    {
      var innerTable = [];

      $.each(data, function(i , history){

         var tablerow = `  <tr>
                              <td>
                                  <p>

                                      `+ history.username + ` <br>

                                      <a href="javascript:void(0)"  data-toggle="modal" data-target="#user">
                                          <i class="fas fa-user-md fa-sm fa-fw mr-2 text-gray-400"></i> view
                                      </a> 
                                      
                                  </p>
                              </td>

                              <td>
                                  ` + history.request_ip + `
                              </td>

                              <td>
                                    ` + history.activity_type + `
                              </td>

                              <td>
                                  ` + history.activity_remarks + `
                              </td>

                              <td>
                                    `+ history.date+`
                              </td>

                              <td>
                                    `+ history.time+`
                              </td>

                          </tr> `

          innerTable.push(tablerow);             

      });

      $('#tab').html(innerTable);  
    }
 
 </script> 

    
@endsection