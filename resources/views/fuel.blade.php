@extends ('layout')
@section ('content')
<head>
        <title>National Biotechnology Authority</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>

    <style>
            
    </style>
    <link rel="stylesheet" href ="css/site.css">
    <div class="container">
      <form class="form-control form-control-sm" method ="POST">
      <h2 class="title">Fuel Request</h2>
        <div class="form-group">
                   <div class="form-row">
                  <div class="name">Date</div>
                  <div class="value">
                    <input type="date" class="form-control" id="date" placeholder="01/03/2022">
               </div>
        </div> 
        <div class="form-group">
                   <div class="form-row">
                  <div class="name">Date of Last Request</div>
                  <div class="value">
                    <input type="date" class="form-control" id="date" placeholder="01/03/2022">
               </div>
        </div> 

      <div class="form-group"> 
                    <div class="form-row">
                        <div class="name">Vihicle Number</div>
                        <div class="value">
                         <input class="form-control" type="text" name="full_name">
                        </div>
                    </div>
      </div>

      <div class="form-group"> 
                    <div class="form-row">
                        <div class="name">Number of  Coupons (20 ltrs) </div>
                        <div class="value">
                         <input class="form-control" type="integer" name="full_name">
                        </div>
                    </div>
      </div>

      <div class="form-group"> 
                    <div class="form-row">
                        <div class="name">Requisition Officer</div>
                        <div class="value">
                         <input class="form-control" type="text" name="full_name">
                        </div>
                    </div>
      </div>
        
      
      <div class="form-group">
                          <div class="form-row">
      
                            <div class="name">Comments</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="form-control" name="message" placeholder="Reason for fuel requisition"></textarea>
                                </div>
                            </div>
                        </div>
      </div>
 
       

      
      <div>
            <button class ="form-group" type ="submit">Submit </button>
      </div>
       </form>
  </div>   
<div>
@yield('content')
    </div>
@endsection