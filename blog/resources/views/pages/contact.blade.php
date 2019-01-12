@extends('layouts.app')
@section('title','|Contact page')
@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
  <div class="panel-heading" style="background-color: #A9F967;font-size: 30px;">Contact Us</div>
  <div class="panel-body">
    <div class="col-md-8 col-md-offset-2">
           <form action="/action_page.php">
                 <div class="form-group">
                   <label for="email">Email address:</label>
                   <input type="email" class="form-control" id="email">
                 </div>
                 <div class="form-group">
                   <label for="subject" name="subject">Subject:</label>
                   <input  name="subject"class="form-control" id="subject">
                 </div>
                 <div class="form-group">
                   <label for="messege" name="messege">Messege:</label>
                   <textarea type="" class="form-control" id="messege"></textarea> 
                 </div>
                 
                 <button type="submit" class="btn btn-success">Send Message</button>
               </form>
           </div>
  </div>
</div>
        
     </div>
</div>
@endsection
