@extends('layouts.app')

@section('content')


<link rel="stylesheet" type="text/css" href="/app/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/app/bootstrap.min.css">
 <script src="/app/bootstrap.min.css"></script>
<script src="/app/jquery-3.1.1.min.js"></script>




<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <br><br>
                    <a href="/create" class="btn btn-primary">Create Diary</a>
          <br><br><br><br>
      <table class="table table-hover">
    <thead>
      <tr>
        <th>Title</th>
        <th>Subject/Category</th>
      </tr>
       
       
    </thead>
    
    </table>
 

                </div>
            </div>
        </div>
    </div>
</div>



<style>
   footer {
               background-color: #555;
               color: white;
               padding: 30px;
            }
  </style>

<br><br><br>

<footer class="container-fluid text-center">
  <p>@ E-Diary.com / LaravelProjects - Made by Angela requinto</p>
  <p> La Verdad Christian College Apalit Pampanga</p>
</footer>
 
@endsection
