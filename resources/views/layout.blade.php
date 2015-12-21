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
       @if (\Auth::user())
         <div class="header group">
           <h1>Dr. {!! \Auth::user()->name !!}</h1>
           <a class="btn btn-primary" href="{{ url('/auth/logout') }}">Logout</a>
         </div>
       @endif

       <a class="patient-button btn btn-primary" href="{{ url('/my_patients') }}">My Patients</a>
       <a class="patient-button btn btn-primary" href="{{ url('/patients') }}">All Patients</a>
       <a class="patient-button new-patient-button btn btn-primary" href="{{ url('/patients/create') }}">Add a New Patient</a>
       
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
