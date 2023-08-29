<!DOCTYPE html>
<html lang="en">
<head>
    <base href="../">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HG Shop</title>
    <link rel="stylesheet" href="styles1/css/style.css">
    @include('elements/head')
</head>
<body>
@include('elements/menu')
<section id="new-arrivals" class="new-arrivals">
<div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">                        
                            <img class="w-100 h-100" src="{{$item->file}}"  alt="Image">                      
                    </div>
                </div>
            </div>
            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3 class="textbl">{{ $item->namePro }}</h3>
                    <div class="d-flex mb-3, textbl">
                        <div class="text-primary mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1">()</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4, textbl">{{$item->pricePro}} &#873;</h3>
                    <div class="mb-4, textbl">
                        <label for="">Phong cách:<p>Thanh lịch, trẻ trung, nhẹ nhàng.</p></label><br>
                        <label for="">Xuất xứ:<p>Pháp</p></label>
                    </div>
                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3, textbl">CAM KẾT CỦA SHOP</strong></div>
                    <div class="textbl">
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                            &#10003;
                            <label class="custom-control-label" for="size-1">BẢO ĐẢM HÀNG CHẤT LƯỢNG CHÍNH HÃNG 100%</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            &#10003;
                                <label class="custom-control-label" for="size-2">DATE MỚI NHẤT</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            &#10003;
                                <label class="custom-control-label" for="size-3">GIAO HÀNG NHANH NHẤT</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            &#10003;
                                <label class="custom-control-label" for="size-4">PHỤC VỤ ĐẾN KHI KHÁCH HÀNG HÀI LÒNG</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            &#10003;
                                <label class="custom-control-label" for="size-5">30 NGÀY BAO NGÀY ĐỔI TRẢ, HOÀN TIỀN 100% NẾU KHÔNG ĐÚNG CHẤT LƯỢNG.</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex align-items-center mb-4 pt-2, textbl">
                        <button class="btn btn-primary px-3"> Mua Ngay</button>&emsp;
                        <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To
                            Cart</button>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="textbl">Chi tiết:
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3, textbl">{{$item->namePro}}</h4>
                            <p class="textbl">{!! $item->aboutPro !!}</p>
                        </div>                                             
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
            const tiltableElement = '.glide__container';
            glider.mount();
        };
    </script>
</body>
</html>