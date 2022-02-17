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
      <form class="form-control form-control-sm" method ="POST" action="{{route ('payments.store')}}">
      <h2 class="title">Payment Request</h2>
        <div class="form-group">
        @csrf
        

                   <div class="form-row">
                  <div class="name">Date</div>
                  <div class="value">
                    <input type="date" class="form-control" id="date" placeholder="01/03/2022" name ="date">
                    @error('date')

                    <div class ="form-error">
                   {{$message}}
               </div>
                @enderror
               </div>
        </div> 

      <div class="form-group"> 
                    <div class="form-row">
                        <div class="name">Amount in Words</div>
                        <div class="value">
                         <input class="form-control" type="text" name="amount_in_words">
                         @error('amount_in_words')

                    <div class ="form-error">
                   {{$message}}
               </div>
                @enderror
                        </div>
                    </div>
      </div>
      <div class="form-group"> 
                    <div class="form-row">
                        <div class="name">Amount in Figures</div>
                        <div class="value">
                         <input class="form-control" type="text" name="amount_in_figures">
                         @error('amount_in_figures')

                    <div class ="form-error">
                   {{$message}}
               </div>
                @enderror
                        </div>
                    </div>
      </div>
        
      <div class="form-group">
                    <div class="form-row">
                        <div class="name">Payable To </div>
                        <div class="value">
                         <input class="form-control" type="text" name="full_name">
                         @error('full_name')

                    <div class ="form-error">
                   {{$message}}
               </div>
                @enderror
                        </div>
                    </div>
      </div> 
      
      <div class="form-group">
                          <div class="form-row">
      
                            <div class="name">Discription</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="form-control" name="discription" placeholder="Reason for payment requisition"></textarea>
                                    @error('discription')

                                      <div class ="form-error">
                                      {{$message}}
                                      </div>
                                      @enderror                                
                                  </div>
                            </div>
                        </div>
      </div>
      <div class="form-group">
      <div class="form-row">
                            <div class="name">Initiated By</div>
                            <div class="value">
                              <input class="form-control" type="text" name="initiated_by">
                              @error('initiated_by')

                    <div class ="form-error">
                   {{$message}}
               </div>
                @enderror
                            </div>
                        </div>
      </div>
      <div class="form-group">
      <div class="form-row">
                    <div class="name"> Department </div>
                    <div class="value">
                  <select class="form-control" name="department" style="height: 20%;">
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
                    <option value="11">Inspectorate</option>
                  </select>
                  @error('department')

                    <div class ="form-error">
                   {{$message}}
               </div>
                @enderror
          </div>
                </div>
      </div>

      <div class="form-group">
      <div class="form-row">
                            <div class="name">Upload Document</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="document_name" id="file">
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