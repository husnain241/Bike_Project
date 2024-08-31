<!DOCTYPE html>
<html lang="en">
   <head>
    @include('home.css')
   </head>

   <body class="main-layout">

    <div class="container">
        <div class="row">
           <div class="col-md-12">
              <div class="titlepage">
                 <h2>FeedBack</h2>
              </div>
           </div>
        </div>
        <div class="row">
           <div class="col-md-6">
            <form id="request" class="main_form"
            action="{{url('/feedbackAdd')}}"
             method="POST">
             @csrf
                 <div class="row">
                    <div class="col-md-12 ">
                       <input class="contactus" placeholder="Name" type="type" name="name" required>
                    </div>
                    <div class="col-md-12">
                       <input class="contactus" placeholder="Email" type="type" name="email" required>
                    </div>
                    <div class="col-md-12">
                       <input class="contactus" placeholder="Phone Number" type="type" name="phone" required>
                    </div>
                    <div class="col-md-12">
                       <textarea class="textarea" placeholder="FeedBack" type="type" name="feedback" required></textarea>
                    </div>
                    {{-- <div class="col-md-12" style="font-size: 25px">
                        <label for="" >Give Stars</label>
                        <input type="range" name="star" value="1" min="1" max="10" oninput="this.nextElementSibling.value = this.value">
                        <output>1</output>
                     </div> --}}

                     <div class="col-md-12">
                        <input class="contactus" placeholder="Star" type="type" name="star" required>
                     </div>


                    <div class="col-md-12">
                       <button class="send_btn">Send</button>
                    </div>
                 </div>
              </form>
           </div>
        </div>
     </div>



   </body>
</html>
