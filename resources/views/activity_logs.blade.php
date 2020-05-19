@extends('layouts.app')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">View Daily Activities</li>
        </ol>
    </nav>

      <!-- Page Heading -->
      {{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>  --}}
      <div class="row">
        <div class="col-sm-9 col-xs-9 col-md-9 col-lg-10"></div>
      <a class="btn btn-outline-primary" href="/create-activity">New Activity</a>
      </div> <br>
      {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> --}}

      <!-- DataTales Example -->
      <div class="card shadow mb-4" id="actvity-table">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Daily Activitys</h6>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Activity</th>
                  <th>Status</th>
                  <th>Request IP</th>
                  <th>Created By</th>
                  <th>Created on</th>
                  <th>Recent Update</th>
                  <th>Recent Update By</th>
                  <th>Updated On</th>
                  <th>Action</th>
                </tr>
              </thead>
            {{--   <tfoot>
                <tr>
                  <th>Date</th>
                  <th>Activity</th>
                  <th>Created By</th>
                  <th>Recent Update</th>
                  <th>Action</th>
                </tr>
              </tfoot> --}}
              <tbody id="tb">
   
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
    <!-- /.container-fluid -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>


<script>



   $.ajax({

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

          $('#activity-table').show();

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

    });
</script> 


@endsection