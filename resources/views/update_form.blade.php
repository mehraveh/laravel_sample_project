<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>update</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>
<div class="container-fluid">
<form method="POST" action="/user/{{$username}}"> 
@csrf
{{ csrf_field() }}
@method("PUT")     
<h1>update</h1>
<div class="form-group has-warning has-feedback">
  <label class="control-label" for="password">Password</label>
  <input type="password" class="form-control" id="password" name="password"aria-describedby="passwordStatus">
  <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
  <span id="passwordStatus" class="help-block">Weak password</span>
</div>
<div class="form-group has-error has-feedback">
  <label class="control-label" for="phone">Phone Number</label>
  <input type="tel" class="form-control" id="phone" name="phone" aria-describedby="phoneStatus">
  <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
  <span id="phoneStatus" class="help-block">Please enter a valid phone number</span>
</div>
<div class="form-group has-error has-feedback">
  <button type="submit" value="submit"></button>   
</div>
</form>
</div>
      
<!-- jQuery library -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
</body>
</html>