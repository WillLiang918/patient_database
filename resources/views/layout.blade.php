 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Simple App</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
     <link rel="stylesheet" href="/css/app.css">

   </head>
   <body>
     <div class="container">
       <!-- @include('partials.flash') -->
       @include('flash::message')

       @yield('content')
     </div>

     <script src="//code.jquery.com/jquery.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

     <script>
        $('div.alert').not('.alert-important').delay(3000).slideUp(300);
     </script>

     @yield('footer')
   </body>
 </html>
