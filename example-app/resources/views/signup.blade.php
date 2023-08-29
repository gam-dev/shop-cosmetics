<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HG Shop</title>
    @include('elements/head')

</head>

<body>
    @include('elements/menu')
    <!--nội dung signup-->
    <section>
        <div class="page-header min-vh-75">
          <div class="container">
            <div class="row">
              <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                <div class="card card-plain mt-sm-8 mt-5">
                  <div class="card-header pb-0 text-left">
                    <h3 class="font-weight-bolder text-primary text-gradient">Join us today</h3>
                    <p class="mb-0">Enter your email and password to register</p>
                  </div>
                  <div class="card-body pb-3">
                    
                    @include('alert')

                    <form action="./signup" method="POST">
                      <label>Name</label>
                      <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Name">
                      </div>
                      <label>phone</label>
                      <div class="mb-3">
                        <input type="number" name="phone"  class="form-control" placeholder="Phone" aria-label="Phone">
                      </div>
                      <label>Password</label>
                      <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password">
                      </div>
                      <div class="form-check form-check-info text-left">
                        <input name="check" class="form-check-input" type="checkbox" value="check" checked>
                        <label class="form-check-label" for="flexCheckDefault">
                          I agree the <a
                            href="javascript:;"
                            class="text-dark font-weight-bolder">Terms and Conditions</a>
                        </label>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn bg-gradient-primary w-100 mt-4 mb-0">Sign up</button>
                      </div>
                      @csrf
                    </form>
                  </div>
                  <div class="card-footer text-center pt-0 px-sm-4 px-1">
                    <p class="mb-4 mx-auto">
                      Already have an account?
                      <a href="./login"
                        class="text-primary text-gradient font-weight-bold">Đăng nhập</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                  <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                    style="background-image:url('assets/img/curved-images/curved11.jpg')">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>    
      </section>  
    @include('elements/footer')
</body>
</html>