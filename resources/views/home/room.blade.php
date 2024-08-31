<style>

#website-name {
    font-family: Arial, sans-serif;
    font: 1.5em sans-serif; /* Specify your desired font */
    color: #007bdd; /* Specify your desired color */
}

</style>


<div class="container">
    <div class="row">
       <div class="col-md-12">
          <div class="titlepage">
             <h2>Our Bike</h2>
             <p>Discover the thrill of the open road at <span id="website-name">KharidoBike.com</span>
, where motorbike dreams come to life. From sleek cruisers to powerful sports bikes, find your perfect ride and embark on unforgettable adventures. Join us and experience the freedom of two wheels like never before.</p>

          </div>
       </div>
    </div>
    <div class="row">
        @foreach ($room as $rooms )


       <div class="col-md-4 col-sm-6">
          <div id="serv_hover"  class="room">
             <div class="room_img">
                <figure><img style="width: 360px; height:220px" src="room/{{$rooms->image}}" alt="#"/></figure>
             </div>
             <div class="bed_room">
                <h3>{{$rooms->room_title}}</h3>
                <p>{{$rooms->description}}</p>
                <a href="{{url('room_detail',$rooms->id)}}" class="btn btn-outline-info mt-2">Room Details</a>
             </div>
          </div>
       </div>

       @endforeach

       </div>
    </div>
 </div>
