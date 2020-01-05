<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>sign up</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>
<div class="container-fluid">
<form method="POST" action="/book/{{Auth::user()->name}}/"> 
@csrf
@method("POST")     
<h1>Add Book</h1>
<div class="form-group has-success has-feedback">
  <label class="control-label" for="name">Username</label>
  <input type="text" class="form-control" id="name" name="name" aria-describedby="nameStatus">
  <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-warning has-feedback">
  <label class="control-label" for="publisher">Publisher</label>
  <input type="text" class="form-control" id="publisher" name="publisher"aria-describedby="pubStatus">
  <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-error has-feedback">
  <label class="control-label" for="author">Author</label>
  <input type="text" class="form-control" id="author" name="author" aria-describedby="authorStatus">
  <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-error has-feedback">
  <label class="control-label" for="code">Book Code</label>
  <input type="text" class="form-control" id="code" name="code" aria-describedby="codeStatus">
  <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-error has-feedback">
  <button type="submit" class="w3-btn w3-round-xlarge w3-button w3-hover-black  w3-black" value="submit">add</button>   
</div>
</form>
</div>
      
<!-- jQuery library -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
</body>
</html>