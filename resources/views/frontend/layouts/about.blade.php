<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    @include('frontend.layouts.head')
    <style>
            * {
              box-sizing: border-box;
            }
            
            body {
              margin: 0;
              font-family: Arial;
            }
            
            .header {
              text-align: center;
              padding: 32px;
            }
            
            .row {
              display: -ms-flexbox; /* IE10 */
              display: flex;
              -ms-flex-wrap: wrap; /* IE10 */
              flex-wrap: wrap;
              padding: 0 4px;
            }
            
            /* Create four equal columns that sits next to each other */
            .column {
              -ms-flex: 25%; /* IE10 */
              flex: 25%;
              max-width: 25%;
              padding: 0 4px;
            }
            
            .column img {
              margin-top: 8px;
              vertical-align: middle;
              width: 100%;
            }
            
            /* Responsive layout - makes a two column-layout instead of four columns */
            @media screen and (max-width: 800px) {
              .column {
                -ms-flex: 50%;
                flex: 50%;
                max-width: 50%;
              }
            }
            
            /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
              .column {
                -ms-flex: 100%;
                flex: 100%;
                max-width: 100%;
              }
            }
            </style>
</head>

<body>
    @include('frontend.layouts.header')
    <!-- Page Header Start -->
    <div class="carousel">
        <div class="">
            <div class="owl-carousel">
                @foreach ($data as $item)
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ $item->image }}" height="300px" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h3>Booking Homestay</h3>
                        <h1>{{ $item->content }}</h1>
                        <!-- <p>
                            Sed ultrices, est eget feugiat accumsan, dui nibh egestas tortor, ut rhoncus nibh ligula
                            euismod quam
                        </p> -->
                        <a class="btn btn-custom" href="">T??m hi???u th??m</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
        <!-- Page Header End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    
                    <div class="col-lg-6">
                        <div class="section-header text-left">
                            <h2>Ch??o M???ng ?????n v???i An Vui Homestay!</h2>
                            <p>????i l???i v??? ch??ng t??i</p>
                        </div>
                        <div class="about-content">
                            <p>
                                An Vui Homestay t???a l???c ??? Ba V??, thu???n l???i di chuy???n t??? H?? N???i v?? c??c t???nh l??n c???n. D??? d??ng ?????n th??m c??c ?????a ??i???m n???i ti???ng nh?? Khu Du l???ch Khoang Xanh Su???i Ti??n, Th??c B???c, V?????n Qu???c Gia Ba V??
                             </p>
                             <p>
                                Xu???t ph??t t??? ?? t?????ng mang ?????n m???t tr???i nghi???m ngh??? d?????ng ?????ng c???p nh?? resort v???i chi ph?? b???ng homestay, AN VUI l?? chu???i c??c bi???t th??? l???n nh??? v???i thi???t k??? hi???n ?????i, ti???n nghi ?????y ????? gi???a bao la xanh t????i.
                             </p>
                             <span>M???t cu???c tr???n ch???y th?? v??? c??ng v???i ng?????i th????ng y??u c???a b???n.</span>
                             <span>
                                AN VUI Lodge: bi???t th??? ven h???
                             </span>
                           
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="{{ asset('frontend_assets/img/bannersinger.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



        
        <!--edit   -->
        <div class="row"> 
            <div class="column">
             
              <img src="{{ asset('frontend_assets/./img/2.jpg') }}" style="width:100%">
             
              <img src="{{ asset('frontend_assets/./img/3.jpg') }}" style="width:100%">
            </div>
            <div class="column">
              <img src="{{ asset('frontend_assets/./img/4.jpg') }}" style="width:100%">
              <img src="{{ asset('frontend_assets/./img/3.jpg') }}" style="width:100%">
              
              
            </div>  
            <div class="column">
          
              <img src="{{ asset('frontend_assets/./img/5.jpg') }}" style="width:100%">
            
            </div>
            <div class="column">

   
                <img src="{{ asset('frontend_assets/./img/4.jpg') }}" style="width:100%">
              </div>
          </div>
           <!--edit   -->
        

        <div data-aos="zoom-in-up" class="service">
            <div class="container">
                <div class="section-header text-center text-center">
                   
                    <p>T???i Sao Ch???n Ch??ng T??i</p>
                    <h2>Nh???ng l?? do ????? ch???n An Vui Homestay</h2>
    
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="service-item">
                            <i class="fas fa-leaf"></i>
                            <h3>Exterior Washing</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="service-item">
                            <i class="fas fa-tint"></i>
                            <h3>Interior Washing</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="service-item">
                            <i class="fas fa-swimming-pool "></i>
                            <h3>Vacuum Cleaning</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>



         
    <div class="price">
        <div class="container">
            <div class="section-header text-center">
                <p>Washing Plan</p>
                <h2>Choose Your Plan</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="price-item-left featured-item">
                       
                        <div class="price-body">
                            <div class="section-header ">
                               <a href="">
                                <p>About Us</p>
                                <h2>Ch??o m???ng b???n ?????n v???i An vui!</h2>
                               </a>
                            </div>
                            <div class="about-content">
                               <a href="">
                                <p>
                                    D???ch v??? homestay ngh??? d?????ng cho b???n ph??t gi??y h???nh ph??c tr???n v???n b??n b???n b?? v?? ng?????i th??n!
                                </p>
                                <p>???An Vui mang ?????n cho b???n nh???ng tr???i nghi???m l?? t?????ng nh?? t???i resort ?????ng c???p v???i chi ph?? ch???
                                    b???ng homestay. Khu bi???t th??? l?? s??? k???t h???p ho??n h???o gi???a thi???t k??? hi???n ?????i, ??a d???ng ti???n ??ch
                                    v?? thi??n nhi??n nhi??n th?? m???ng. ?????n v???i An Vui, b???n c?? th??? ho?? m??nh v??o kh??ng gian sinh th??i
                                    xanh b??t ng??t, t???n h?????ng m???t cu???c tr???n ch???y th?? v??? c??ng ng?????i b???n th????ng y??u.</p>
                                <p>AN VUI Lodge & Cottage: bi???t th??? ven h??????</p>
                              
                               </a>
                            </div>
                        </div>
                        <div class="price-footer">
                            <a class="btn btn-custom" href="">xem ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-item-left featured-item">
                       
                        <div class="price-body">
                            <div class="section-header ">
                               <a href="">
                                <p>About Us</p>
                                <h2>Ch??o m???ng b???n ?????n v???i An vui!</h2>
                               </a>
                            </div>
                            <div class="about-content">
                               <a href="">
                                <p>
                                    D???ch v??? homestay ngh??? d?????ng cho b???n ph??t gi??y h???nh ph??c tr???n v???n b??n b???n b?? v?? ng?????i th??n!
                                </p>
                                <p>???An Vui mang ?????n cho b???n nh???ng tr???i nghi???m l?? t?????ng nh?? t???i resort ?????ng c???p v???i chi ph?? ch???
                                    b???ng homestay. Khu bi???t th??? l?? s??? k???t h???p ho??n h???o gi???a thi???t k??? hi???n ?????i, ??a d???ng ti???n ??ch
                                    v?? thi??n nhi??n nhi??n th?? m???ng. ?????n v???i An Vui, b???n c?? th??? ho?? m??nh v??o kh??ng gian sinh th??i
                                    xanh b??t ng??t, t???n h?????ng m???t cu???c tr???n ch???y th?? v??? c??ng ng?????i b???n th????ng y??u.</p>
                                <p>AN VUI Lodge & Cottage: bi???t th??? ven h??????</p>
                              
                               </a>
                            </div>
                        </div>
                        <div class="price-footer">
                            <a class="btn btn-custom" href="">xem ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-item-left featured-item">
                       
                        <div class="price-body">
                            <div class="section-header ">
                               <a href="">
                                <p>About Us</p>
                                <h2>Ch??o m???ng b???n ?????n v???i An vui!</h2>
                               </a>
                            </div>
                            <div class="about-content">
                               <a href="">
                                <p>
                                    D???ch v??? homestay ngh??? d?????ng cho b???n ph??t gi??y h???nh ph??c tr???n v???n b??n b???n b?? v?? ng?????i th??n!
                                </p>
                                <p>???An Vui mang ?????n cho b???n nh???ng tr???i nghi???m l?? t?????ng nh?? t???i resort ?????ng c???p v???i chi ph?? ch???
                                    b???ng homestay. Khu bi???t th??? l?? s??? k???t h???p ho??n h???o gi???a thi???t k??? hi???n ?????i, ??a d???ng ti???n ??ch
                                    v?? thi??n nhi??n nhi??n th?? m???ng. ?????n v???i An Vui, b???n c?? th??? ho?? m??nh v??o kh??ng gian sinh th??i
                                    xanh b??t ng??t, t???n h?????ng m???t cu???c tr???n ch???y th?? v??? c??ng ng?????i b???n th????ng y??u.</p>
                                <p>AN VUI Lodge & Cottage: bi???t th??? ven h??????</p>
                              
                               </a>
                            </div>
                        </div>
                        <div class="price-footer">
                            <a class="btn btn-custom" href="">xem ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Price End -->


    @include('frontend.layouts.footer')
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend_assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/lib/counterup/counterup.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('frontend_assets/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend_assets/js/main.js') }}"></script>
    <!--jquery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--slick slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $('.slider-team').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                },

                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

    </script>
    <!--michelsnik-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>