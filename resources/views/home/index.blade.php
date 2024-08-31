<!DOCTYPE html>
<html lang="en">
   <head>
    @include('home.css')
   </head>

   <body class="main-layout">

      <header>
        @include('home.header')
      </header>

      <section class="banner_main">
         @include('home.slider')
      </section>

      <div class="about" id="about">
        @include('home.about')
      </div>

      <div  class="our_room" id="room">
         @include('home.room')
      </div>

      <div  class="gallery" id="galary">
         @include('home.galary')
      </div>

      <div  class="blog">
         @include('home.blog')
      </div>

      <div class="contact" id="contact">
         @include('home.contact')
      </div>

      <footer>
         @include('home.footer')
      </footer>
    @include('home.script')
   </body>
</html>
