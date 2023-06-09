
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      
      @include('admin.sidebar')
      @include('admin.navbar')
      
        <div class="container-fluid page-body-wrapper">
            <div align="center" style="padding-top:100px;">

            <table>
                    <tr style="background-color:black;">
                        <th style="padding:10px">Doctor name</th>
                        <th style="padding:10px">Phone</th>
                        <th style="padding:10px">Speciality</th>
                        <th style="padding:10px">Room No</th>
                        <th style="padding:10px">Image</th>

                        <th style="padding:10px">Delete</th>

                        <th style="padding:10px">Update</th>
                        
                        
                    </tr>

                    @foreach($data as $doctors)
                    <tr align="center" style="background-color:skyblue;">
                        <td>{{$doctors->name}}</td>
                        <td>{{$doctors->phone}}</td>
                        <td>{{$doctors->speciality}}</td>
                        <td>{{$doctors->room}}</td>
                        <td><img height="100" width="100" src="doctorimage/{{$doctors->image}}"></td>

                        <td><a onclick="return confirm('you surely want to delete this?')" class="btn btn-danger" href="{{url('deletedoctor',$doctors->id)}}">Delete</a>
                    </td>
                    <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctors->id)}}">Update</a>
                    </td>

                    </tr>
                    @endforeach




            </div>

        </div>

        <!-- partial -->
        
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>