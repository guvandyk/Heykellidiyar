<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap -->
    <link href="{{asset('back2/')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('back2/')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('back2/')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('back2/')}}/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('back2/')}}/build/css/custom.min.css" rel="stylesheet">
     @toastr_css

  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
             @if($errors->any())
                                    <div class="alert alert-danger">
                                        {{$errors->first()}}
                                    </div>
                                    @endif
            <form  method="POST" action="{{-- {{route('admin.login.post')}} --}}">
              @csrf
              
              <h1>Admin</h1>
              <div>
                <input type="email" name="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div><a class="reset_pass" href="{{ route('admin.reset.password') }}">Забыли пароль?</a></div>
              <div>
                <button type="submit" class="btn btn-dark btn-sm">Log in</button>
                
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                

             
              </div>
            </form>
          </section>
        </div>

       
      </div>
    </div>
    @toastr_js
    @toastr_render
  </body>
</html>
