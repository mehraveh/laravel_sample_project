@extends('layouts.app')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>update your info</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container-fluid">
                    <form method="POST" action="/user/{{Auth::user()->name}}"> 
                    @csrf
                    {{ csrf_field() }}
                    @method("PUT")     

                    <div class="form-group has-warning has-feedback">
                      <label class="control-label" for="password">Password</label>
                      <input type="password" class="form-control" id="password" name="password"aria-describedby="passwordStatus">
                      <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
                      <span id="passwordStatus" class="help-block">Weak password</span>
                    </div>
                    <div class="form-group has-error has-feedback">
                      <label class="control-label" for="email">Email Address</label>
                      <input type="email" class="form-control" id="email" name="email" aria-describedby="mailStatus">
                      <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                      <span id="mailStatus" class="help-block">Please enter a valid email address</span>
                    </div>
                    <div class="form-group has-error has-feedback">
                      <button type="submit" class="w3-btn w3-round-xlarge w3-button w3-hover-black" value="submit">update</button>   
                    </div>
                    </form>
                    </div>
                          
                    <!-- jQuery library -->
                    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                    <!-- Bootstrap JS -->
                    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
                </div>
                <div class="card-header"><h2 align="center">my books</h2></div>
                <div class="card-body">
                    <p align="center">shelf is empty</p>
                    <form method="POST" action="/add-book/">
                    @csrf
                    {{csrf_field()}}
                    @method("PUT")
                    <button type="submit" class="w3-btn w3-round-xlarge w3-button w3-hover-black  w3-black" value="{{csrf_token()}}">add book</button>   
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
