@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="/app/bootstrap.css">




<div class="container">
  <h1 class="text-left">CREATE DIARY</h1></div>

<br><div class="col-md-8">
      <div class="row">
        <div class="col-sm-7 form-group ">
          <label for="title"></label>
          <input class="form-control" id="title" name="title" placeholder="Title" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <label for="subjCategory"></label>
          <input class="form-control" id="subjCategory" name="subjCategory" placeholder="subject/category" type="text" required>
        </div>
      </div>
       <label for="content"></label>
      <textarea class="form-control" id="content" name="content" placeholder="write you're content" rows="30" required></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <a href="/publish" class="btn btn-primary pull-right">Publish</a>

        <div class="row">
    <div class="col-md-4">
      <p>Enjoy writing?drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>La Verdad Christian College , Apalit </p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>    
    </div>  

        </div>
      </div>

      </div>
         </div> <div class="col-sm-2 sidenav">
      <div class="img">
       
        <img src="keep-a-diary-380x250.jpg" alt="Random Name" width="350" height="255"></div><br>

      <div class="img">
        
        <img src="diarycom-e1459935896111.jpg" alt="Random Name" width="400" height="230"></div>  
      </div><br>
      <div class="img">
        
        <img src="FB_IMG_13980045468664671.jpg" alt="Random Name" width="400" height="200"></div>  
      </div><br>
      <div class="img">
        
        <img src="morning ticket of cookery.jpg" alt="Random Name" width="400" height="180"></div>  
      </div>

  <style>
   footer {
               background-color: #555;
               color: white;
               padding: 30px;
            }
  </style>

<br><br><footer class="container-fluid text-center">
  <p>@ E-Diary.com / LaravelProjects - Made by Angela requinto</p>
  <p> La Verdad Christian College Apalit Pampanga</p>
</footer>


 
@endsection



