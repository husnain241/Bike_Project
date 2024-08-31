<!DOCTYPE html>
<html>
  <head>
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
        .input{
            width: 350px;
            border: 3px solid aqua;
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
                <h1 style="font-size: 30px;font-weight:bold ;color:white">Add Bike</h1>
                <form action="{{url('add_room')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="div_deg" >
                        <label for="" style="color: white">Bike Title</label>
                        <input class="input" type="text" name="title">
                    </div>

                    <div class="div_deg">
                        <label for="" style="color: white">description</label>
                        <textarea class="input" name="description"></textarea>
                    </div>

                    <div class="div_deg">
                        <label for="" style="color: white">Price</label>
                        <input class="input" type="number" name="price">
                    </div>

                    <div class="div_deg">
                        <label for="" style="color: white">Bike Type</label>
                        <select name="type" id="" class="input">
                            <option value="regular" selected>Regular</option>
                            <option value="premium">Premium</option>
                            <option value="deluxe">Deluxe</option>

                        </select>
                    </div>

                    <!-- <div class="div_deg">
                        <label for="" style="color: white">Wifi</label>
                        <select name="wifi" id="" class="input">
                            <option value="yes" selected>yes</option>
                            <option value="no">No</option>

                        </select>
                    </div> -->

                    <div class="div_deg">
                        <label for="" style="color: white">Upload Image</label class="input">
                        <input type="file" name="image">
                    </div>
<br>
                    <div>
                        <input class="btn btn-outline-info input" type="submit" value="Add Bike">
                    </div>

                </form>
            </div>
          </div>
        </div>
      </div>

     @include('admin.footer')
  </body>
</html>
