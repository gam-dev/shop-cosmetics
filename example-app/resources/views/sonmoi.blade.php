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
	
		<section id="new-arrivals" class="new-arrivals">
			<div class="container">
				<div class="section-header">
					<h2>Son Môi</h2>
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
		<section id="blog" class="blog">
			<div class="container">
				<div class="section-header">
					<h2>Mặt hàng khác tương tự</h2>
				</div>
				<div class="blog-content">
					<div class="row">
						<div class="col-sm-4">
							<div class="single-blog">
								<div class="single-blog-img">
									<img class="tt1" src="styles1/images/blog/nuochoa.jpeg" alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2><a href="#">Nước hoa nữ chính hãng</a></h2>
									<h3>By <a href="#">HG Shop</a> - since 8th August 2023</h3>
									<p>
									Từ nước hoa, dưỡng thể đến các sản phẩm cho không gian sống, thế giới hương tinh tế của HG Shop chạm đến mọi cảm xúc, dẫn bạn lạc bước vào những khu vườn Anh Quốc đầy thơ mộng tươi vui.
									</p>
								</div>
							</div>
							
						</div>
						<div class="col-sm-4">
							<div class="single-blog">
								<div class="single-blog-img">
									<img class="tt1" src="styles1/images/blog/son.jpg" alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2><a href="#">Son môi chính hãng</a></h2>
									<h3>By <a href="#">HG Shop</a> - since 8th August 2023</h3>
									<p>
									Nếu chọn màu son là một vấn đề khó khăn mà bạn đang gặp phải, hãy thử tham khảo một số gợi ý ngay đây</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="single-blog">
								<div class="single-blog-img">
									<img class="tt1" src="styles1/images/blog/kem.jpg" alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2><a href="#">Kem dưỡng da chính hãng</a></h2>
									<h3>By <a href="#">HG Shop</a> - since 8th August 2023</h3>
									<p>
										Thay mới làn da để giúp cho chị em được tự tin và thỏa sức khoe cá tính
									</p>
								</div>
							</div>
						</div>
					</div>
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
            // The classname for the element that gets transformed
            const tiltableElement = '.glide__container';
            glider.mount();
        };
    </script>
       
    </body>
	
</html>