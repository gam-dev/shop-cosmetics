<!doctype html>
<html  lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <title>HG Shop</title>
        <link rel="stylesheet" href="styles1/css/style.css">
		@include('elements/head')
    </head>
	
	<body>
	
        <!-- Menu-->
    @include('elements/menu')
	<header>
        <div class="page-header min-vh-50" style="background-image: url(./upload_files/nen2.jpeg)">
            <span class="mask bg-gradient-primary"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-white text-center">
                        <h2 class="text-white">Shop Thời trang <span id="typed"></span></h2>
                        <div id="typed-strings">
                            <h2 class="text-white">Mỹ Phẩm</h2>
                            <h2 class="text-white">Son Môi</h2>
                            <h2 class="text-white">Nước Hoa Chính Hãng</h2>
                        </div>
                        <p class="lead">Hệ thống bán Mỹ Phẩm, Quà Tặng, Son Môi, Nước Hoa Chính Hãng</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-relative overflow-hidden" style="height:36px;margin-top:-35px;">
            <div class="w-full absolute bottom-0 start-0 end-0" style="transform: scale(2);transform-origin: top center;color: #fff;">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <div class="container">
        <form action="{{ route('search') }}" method="GET">
            <div class="row bg-white shadow-lg mt-n6 border-radius-md pb-4 p-3 position-relative w-75 mx-auto">            
                <div class="col-lg-8 mt-lg-n2 mt-2">
                    <label>Tìm kiếm</label>
                    <div class="input-group">
                        <input class="form-control" placeholder="Bạn cần tìm gì?" type="text" name="query" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center mt-lg-auto mt-2">
                    <button type="submit" class="btn bg-gradient-primary w-100 mb-0">Tìm</button>
                </div>                
            </div>
        </form>
        </div>
    </header>
		<section id="new-arrivals" class="new-arrivals">
			<div class="container">
				<div class="section-header">
					<h2>Kết quả tìm thấy</h2>
				</div>
				
				<div class="new-arrivals-content">
					<div class="row">
					@foreach ($a as $item)
						<div class="col-md-4 col-sm-6 col-lg-3">
							<div class="single-new-arrival">
						
								<div class="single-new-arrival-bg">
								
								<img class="tt" src="{{$item->file}}" alt="">
									<div class="single-new-arrival-bg-overlay"></div>									
								</div>
								<h4><a href="#">{{$item->namePro}}</a></h4>
								<p class="arrival-product-price">{{$item->pricePro}} VND</p>
								<a href="./sanpham/{{$item->id}}"><button type="button" class="btn btn-sm btn-rounded btn-outline-dark">Mua Ngay</button></a>
							</div>										
					</div>
					@endforeach
				</div>
			</div>		
		</section>
		
		@include('elements/footer')
    <script type="text/javascript">
        if (document.getElementById('typed')) {
            var typed = new Typed("#typed", {
                stringsElement: '#typed-strings',
                typeSpeed: 90,
                backSpeed: 90,
                backDelay: 200,
                startDelay: 500,
                loop: true
            });
        }
    </script>


    <script>
        if (document.getElementsByClassName('glide')) {
            const glider = new Glide('.gliderrr', {
                autoplay: 10000000,
                type: 'carousel',
                perView: 4,
                breakpoints: {
                    800: {
                        perView: 2
                    }
                }
            });
            const tiltableElement = '.glide__container';
            glider.mount();
        };
    </script>
       
    </body>
	
</html>