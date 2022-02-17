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
      <h2 class="title">PETTY-Cash Request</h2>
        <div class="form-group">
                   <div class="form-row">
                  <div class="name">Date</div>
                  <div class="value">
                    <input type="date" class="form-control" id="date" placeholder="01/03/2022">
               </div>
        </div>

        <div class="form-group">
                    <div class="form-row">
                        <div class="name">PAYEE</div>
                        <div class="value">
                         <input class="form-control" type="text" name="full_name">
                        </div>
                    </div>
      </div>
        

      <div class="form-group">
                          <div class="form-row">
      
                            <div class="name">Discription</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="form-control" name="message" placeholder="Reason for payment requisition"></textarea>
                                </div>
                            </div>
                        </div>
      </div>
      <div class="form-group">
      <div class="form-row">
                            <div class="name">Amount</div>
                            <div class="value">
                              <input class="form-control" type="text" name="full_name">
                            </div>
                        </div>
      </div>
      <div class="form-group">
                    <div class="form-row">
                        <div class="name">Initiated By </div>
                        <div class="value">
                         <input class="form-control" type="text" name="full_name">
                        </div>
                    </div>
      </div> 
      

      <div class="form-group">
      <div class="form-row">
                    <div class="name"> Department </div>
                    <div class="value">
                  <select class="form-control" style="height: 20%;">
                    <option value="1" disabled>Department</option>
                    <option value="2">ICT</option>
                    <option value="3">Finance</option>
                    <option value="4">Admin</option>
                    <option value="5">Procurement</option>
                    <option value="6">Human Resource</option>
                    <option value="7">Research & Development</option>
                    <option value="8">B.E.D</option>
                    <option value="9">Audit</option>
                    <option value="10">Permits</option>
                    <option value="4">Inspectorate</option>
                  </select>
          </div>
                </div>
      </div>

      <div class="form-group">
      <div class="form-row">
                            <div class="name">Upload Document</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                </div>
                                <div class="label--desc">Upload any relevant file. Max file size 50 MB</div>
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