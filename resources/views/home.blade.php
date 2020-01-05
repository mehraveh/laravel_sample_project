@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div class="container-fluid">
                    <form method="POST" action="/user/{{Auth::user()->name}}"> 
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
                      <label class="control-label" for="email">Email Address</label>
                      <input type="tel" class="form-control" id="email" name="email" aria-describedby="phoneStatus">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
