<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

<!-- Theme style -->
<link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ----------> --}}

<body>
    <div class="container" style="background-color: rgb(6, 39, 112)">
    <div class="card-body">
    <div id="login">
        <h3 class="text-center text-white pt-5">SISTEM PENDUKUNG KEPUTUSAN
            <p>Penerima Beasiswa PPA Prodi Pendidikan Informatika</p>
            <p>STKIP PGRI Sumatera Barat</p> 
        </h3>
        
    </div>
        
            <div class="card">
            <div class="card-header">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{route('postlogin')}}" method="post">
                            {{ csrf_field()}}
                            <h3 class="text-center text-info" style="color: blue">Login</h3>
                        </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit" >
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <!-- jQuery -->
    @include('layout.main') --}}
</body>
</html>
