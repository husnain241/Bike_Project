<!DOCTYPE html>
<html>
  <head>
    <base href="/public">
    @include('admin.css')

    <style>
        label{
            display: inline-block;
            width: 200px;
        }
        .div_deg{
            padding-top: 30px;
        }
        .div_center{
            padding-top: 40px;
            text-align: center;
        }
    </style>
  </head>
  <body>
    <header class="header">
      @include('admin.header')
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <div class="div_center">
                <h1 style="font-size: 30px;font-weight:bold">Update Bike</h1>

                <form action="{{url('edit_room',$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="div_deg">
                        <label for="">Bike Title</label>
                        <input type="text" name="title" value="{{$data->room_title}}">
                    </div>

                    <div class="div_deg">
                        <label for="">description</label>
                        <textarea name="description">{{$data->description}}</textarea>
                    </div>

                    <div class="div_deg">
                        <label for="">Price</label>
                        <input type="number" name="price" value="{{$data->price}}">
                    </div>

                    <div class="div_deg">
                        <label for="">Bike Type</label>
                        <select name="type" id="">
                            <option value="{{$data->room_type}}" selected>{{$data->room_type}}</option>
                            <option value="regular">Regular</option>
                            <option value="premium">Premium</option>
                            <option value="deluxe">Deluxe</option>

                        </select>
                    </div>

                    <!-- <div class="div_deg">
                        <label for="">Wifi</label>
                        <select name="wifi" id="">
                            <option value="{{$data->wifi}}" selected>{{$data->wifi}}</option>
                            <option value="yes" selected>yes</option>
                            <option value="no">No</option>

                        </select>
                    </div> -->

                    <div class="div_deg">
                        <label for="">Current Image</label>
                        <img style="margin: auto"
                            src="/room/{{$data->image}}"
                            class="rounded-circle"
                            width="70px"
                            height="70px"
                            alt=""
                        />

                    </div>

                    <div class="div_deg">
                        <label for="">Upload Image</label>
                        <input type="file" name="image">
                    </div>

                    <div>
                        <input class="btn btn-primary" type="submit" value="Update Bike">
                    </div>

                </form>
            </div>
          </div>
        </div>
      </div>

     @include('admin.footer')
  </body>
</html>
