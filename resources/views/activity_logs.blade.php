@extends('layouts.app')

@section('content')


      <!-- Page Heading -->
      {{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>  --}}
      <div class="row">
        <div class="col-sm-6 col-xs-6 col-md-6 col-lg-8"></div>
      <a class="btn btn-outline-primary" href="/create-activity">New Activity</a>
      
      &nbsp; <a id="pending" class="btn btn-outline-info" href="#">View Pending Activities</a>

      &nbsp; <a id="daily" style="display: none;" class="btn btn-outline-info" href="#">View daily Activities</a>

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
                  <th>Updated By</th>
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

  getActivities('pending')

  function getActivities(request = null){

    var url;

    if(request == null)
    {
      url = '/view-activity'
    
    }else{

      url = '/view-activity?param='+request

    }

   $.ajax({

    url: url, 
 
    }).done(function(data){

      let dom = ``;
      
      console.log(data);

      if(jQuery.isEmptyObject(data))
      { 

          dom = ` <div class="jumbotron text-center">

                      <h3>No Activity Found</h3>

                      <p>You may want to add a new activity</p>

                  </div>
              `;

      }else{

          $('#activity-table').show();

          $('#tb').html(''); //remove clear content

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
                    <td><a class="btn btn-primary" href="/view/`+activity.id+`/details">Details</a></td>
              </tr> `;

              $('#tb').append(dom);

            });

          });

      }

    });

  }

  $('#pending').click(function(e){

    e.preventDefault();

    $('#pending').hide();

    $('#daily').show()

    getActivities('pending')

  });


  $('#daily').click(function(e){

    e.preventDefault();

    $('#daily').hide();

    $('#pending').show()

    getActivities()

  });

</script> 


@endsection