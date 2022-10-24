<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- My Fonts -->
    <!-- Viga /  font-family: 'Viga', sans-serif;-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <title>LOGIN</title>
  </head>
  <body>

      <section class="vh-100" style="margin-top:150px;margin-bottom: 150px;">
          <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="{{ asset('img/login-page.jpg') }}"
                  class="img-fluid" alt="Sample image">
              </div>
              <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="{{ route('login.auth') }}" method="post">
                  @csrf
                  <h1 style="font-family: 'Viga', sans-serif; " class="title-login">Login</h1><br>
                  <!-- Email input -->
                  <div class="form-outline mb-4 has-validation">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" class="form-control form-control-lg <?php if ($errors->first('email') != null){ echo "is-invalid";}else{ echo"";}?>" 
                      placeholder="Enter Your Email  " name="email"/>
                      @if($errors->first('email') != null)
                      <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                      </div>
                      @endif
                  </div>
        
                  <!-- Password input -->
                  <div class="form-outline mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" class="form-control form-control-lg <?php if ($errors->first('password') != null){ echo "is-invalid";}else{ echo"";}?>"
                      placeholder="Enter Your password" name="password"/>
                      @if($errors->first('password') != null)
                      <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                      </div>
                      @endif
                  </div>
        
                  <div class="d-flex justify-content-between align-items-center">
                    <!-- Checkbox -->
                    <div class="form-check mb-0">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                      <label class="form-check-label" for="form2Example3">
                        Remember me
                      </label>
                    </div>
                    <a href="" class="link-primary text-decoration-none">Forgot password?</a>
                  </div>
        
                  <div class="text-center  mt-4 pt-2">
                    <button type="submit" class="btn btn-primary btn-lg"
                      style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                    <p class="mt-2 pt-1 mb-0">Don't have an account? <a href="../registrasi/index.html"
                        class="link-primary text-decoration-none">Register</a></p>
                  </div>
        
                </form>
              </div>
            </div>
          </div>
          
        </section>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
