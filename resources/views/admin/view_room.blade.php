<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')
    <style>

    </style>
  </head>
  <body>
    <header class="header">
      @include('admin.header')
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <div
                class="table-responsive">
                <table
                    class="table">
                    <thead>
                        <tr style="color: white">
                            <th scope="col">Bike Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            
                            <th scope="col">Bike Type</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data )
                        <tr class="" style="color: white">
                            <td>{{$data->room_title}}</td>
                            <td>{{$data->description}}</td>
                            <td>PKR {{$data->price}}</td>
                            
                            <td>{{$data->room_type}}</td>
                            <td><img
                                src="room/{{$data->image}}"
                                width="70px"
                                height="70px"
                                alt="image"/>
                            </td>
                            <td><a onclick="return confirm('Are you sure to delete this');" href="{{url('delete_room',$data->id)}}" class="btn btn-outline-info">Delete</a>

                                <a href="{{url('update_room',$data->id)}}" class="btn btn-outline-danger ml-3">Update</a>
                            </td>
                        </tr>

                        @endforeach


                    </tbody>
                </table>
            </div>


          </div>
        </div>
      </div>
     @include('admin.footer')
  </body>
</html>
