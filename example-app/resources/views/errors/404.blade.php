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

    <!--nội dung lỗi-->
    <section class="min-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row mt-lg-0 mt-8">
                <div class="col-lg-5 my-auto">
                    <h1 class="display-1 text-bolder text-gradient text-primary fadeIn1 fadeInBottom mt-5">Error</h1>
                    <h2 class="fadeIn3 fadeInBottom opacity-8">Something went wrong</h2>
                    <p class="lead opacity-6 fadeIn2 fadeInBottom">We suggest you to go to the homepage while we solve
                        this issue.
                    </p>

                    <a href="index.html" class="btn bg-gradient-primary mt-4 fadeIn2 fadeInBottom">Go to Homepage</a>

                </div>
                <div class="col-lg-7 my-auto">
                    <img class="w-100 fadeIn1 fadeInBottom" src="assets/img/illustrations/error-500.png"
                        alt="500-error">
                </div>
            </div>
        </div>
    </section>


</body>

</html>
