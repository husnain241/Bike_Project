<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <base href="/public">;
        @include('home.css');


        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Title: {{$data->room_title}}</h1>
                    <h4>Description: {{$data->description}}</h4>
                    <h4>Price: {{$data->price}}</h4>
                    <h4>Wifi: {{$data->wifi}}</h4>
                    <h4>Type: {{$data->room_type}}</h4>
                    <img src="/room/{{$data->image}}" alt="image" width="400px" height="300px"><br><br>
                </div>
                <div class="col-md-6">
                    <form id="request" class="main_form"
                     action="https://api.web3forms.com/submit"
                      method="POST">
                        <input type="hidden" name="access_key" value="9aa26272-4811-416c-be4c-709995509550">

                        <input type="hidden" name="Room ID" value="{{$data->id}}">
                       <div class="row">
                          <div class="col-md-12 ">
                             <input class="contactus" placeholder="Name" type="type" name="Name">
                          </div>
                          <div class="col-md-12">
                             <input class="contactus" placeholder="Email" type="type" name="Email">
                          </div>
                          <div class="col-md-12">
                             <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">
                          </div>
                          <div class="col-md-12">
                             <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
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



