<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MADHAVA</title>
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./assets/vendors/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/vendors/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="./assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- End plugin css for this page -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header id="header-section">
        <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
            <div class="container">
            <div class="navbar-brand-wrapper">
                <img src="assets/images/logo.svg" alt="">
                <span class="logo-title d-none d-lg-block font-weight-bold mb-0">MADHAVA INN</span>
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="mdi mdi-menu navbar-toggler-icon"></span>
                </button> 
            </div>
            <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
                <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
                <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
                    <div class="navbar-collapse-logo">
                        <img src="assets/images/logo.svg" alt="">
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#home-section">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#rooms-section">ROOM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#facilities-section">FACILITIES</a>  
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#explore-section">EXPLORE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about-section">ABOUT US</a>
                </li>
                <li class="nav-item btn-contact-us ml-lg-4 my-3 my-lg-0">
                    <button class="btn btn-book-now font-weight-medium" data-toggle="modal" data-target="#bookingModal">BOOK NOW</button>
                </li>
                </ul>
            </div>
            </div> 
        </nav>   
    </header>
    <div class="content-wrapper">
        <div id="home-section" class="hotel-carousel">
            <div id="owl-demo" class="owl-carousel owl-theme full-width">
                <div class="item"><img src="assets/images/carousel 1.jpg"></div>
                <div class="item"><img src="assets/images/carousel 5.jpg"></div>
                <div class="item"><img src="assets/images/carousel 2.jpg"></div>
                <div class="item"><img src="assets/images/carousel 3.jpg"></div>
                <div class="item"><img src="assets/images/carousel 4.jpg"></div>
            </div>
            <div class="introduction">
                <h1 class="title text-italian text-center">Best Hotel In Pollachi</h1>
                <h4 class="description text-center">Nestled in the heart of Pollachi, Madhava Inn offers spacious suites, plush furnishings and modern amenities, making it the perfect destination for business and leisure travellers.</h4>
            </div>
        </div>
        <div id="rooms-section" class="cover-wrapper">
            <div class="cover-image">
                <img src="assets/images/room-cover.jpg" class="img-fluid">
                <div class="cover-text">
                    <h2>ROOM</h2>
                </div>
            </div>
            <div class="cover-details">
                <div class="room-types">
                    <div class="row item">
                        <div class="col-12 col-md-6">
                            <div id="room-suite" class="owl-carousel owl-theme full-width">
                                <img src="assets/images/roomtype1.jpg" class="img-fluid">
                                <div class="item"><img src="assets/images/suite 1.jpg"></div>
                                <div class="item"><img src="assets/images/suite 2.jpg"></div>

                            </div>
                        </div>
                        <div class="col-12 col-md-6 room-description">
                            <h4>A/C Suite</h4>
                            <p>Superior and spacious rooms with an additional guest lobby. We provide advanced amenities for an outstanding experience.</p>
                            <ul class="mb-0">
                                <li><p>2 Guest</p></li>
                                <li><p>1 Beds</p></li>
                            </ul>
                            <p>Rate:Rs 3000 + GST / night</p>
                            <p>Breakfast complimentary</p>
                            <div class="d-lg-flex justify-content-between align-items-center">
                                <div class="d-flex">
                                    <span class="mdi mdi-snowflake"></span>
                                    <span class="mdi mdi-wifi ml-2"></span>
                                    <span class="mdi mdi-desktop-mac ml-2"></span>
                                    <span class="mdi mdi-lock ml-2"></span>
                                    <span class="mdi mdi-food-fork-drink ml-2"></span>
                                    <span class="mdi mdi-hanger ml-2"></span>
                                    <span class="mdi mdi-wardrobe ml-2"></span>
                                </div>
                                <button class="btn btn-book-now font-weight-medium mt-3" data-toggle="modal" data-target="#bookingModal">BOOK NOW</button>
                            </div>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="col-12 col-md-6">
                            <div id="room-executive" class="owl-carousel owl-theme full-width">
                                <img src="assets/images/roomtype3.jpg" class="img-fluid">
                                <div class="item"><img src="assets/images/executive 1.jpg"></div>
                                <div class="item"><img src="assets/images/executive 2.jpg"></div>

                            </div>
                        </div>
                        <div class="col-12 col-md-6 room-description">
                            <h4>A/C Executive</h4>
                            <p>Grand and modern rooms with the latest amenities, to offer you a feel at home experience.</p>
                            <ul class="mb-0">
                                <li><p>2 Guest</p></li>
                                <li><p>1 Beds</p></li>
                            </ul>
                            <p>Rate:Rs 2499 + GST / night</p>
                            <p>Breakfast complimentary</p>
                            <div class="d-lg-flex justify-content-between align-items-center">
                                <div class="d-flex">
                                    <span class="mdi mdi-snowflake"></span>
                                    <span class="mdi mdi-wifi ml-2"></span>
                                    <span class="mdi mdi-desktop-mac ml-2"></span>
                                    <span class="mdi mdi-lock ml-2"></span>
                                    <span class="mdi mdi-food-fork-drink ml-2"></span>
                                    <span class="mdi mdi-hanger ml-2"></span>
                                    <span class="mdi mdi-wardrobe ml-2"></span>
                                </div>
                                <button class="btn btn-book-now font-weight-medium mt-3" data-toggle="modal" data-target="#bookingModal">BOOK NOW</button>
                            </div>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="col-12 col-md-6">
                            <div id="room-deluxe" class="owl-carousel owl-theme full-width">
                                <img src="assets/images/roomtype2.jpg" class="img-fluid">
                                <div class="item"><img src="assets/images/delux 1.jpg"></div>
                                <div class="item"><img src="assets/images/delux 2.webp"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 room-description">
                            <h4>A/C Deluxe</h4>
                            <p>Compact and spacious rooms, with a pleasing interior to lighten your mood and all modern comforts to ensure a comfortable atmosphere.</p>
                            <ul class="mb-0">
                                <li><p>2 Guest</p></li>
                                <li><p>2 Beds</p></li>
                            </ul>
                            <p>Rate:Rs 2200 + GST / night</p>
                            <p>Breakfast complimentary</p>
                            <div class="d-lg-flex justify-content-between align-items-center">
                                <div class="d-flex">
                                    <span class="mdi mdi-snowflake"></span>
                                    <span class="mdi mdi-wifi ml-2"></span>
                                    <span class="mdi mdi-desktop-mac ml-2"></span>
                                    <span class="mdi mdi-lock ml-2"></span>
                                    <span class="mdi mdi-food-fork-drink ml-2"></span>
                                    <span class="mdi mdi-hanger ml-2"></span>
                                    <span class="mdi mdi-wardrobe ml-2"></span>
                                </div>
                                <button class="btn btn-book-now font-weight-medium mt-3" data-toggle="modal" data-target="#bookingModal">BOOK NOW</button>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
        <div id="facilities-section" class="cover-wrapper">
            <div class="cover-image">
                <img src="assets/images/facilities-cover.jpg" class="img-fluid">
                <div class="cover-text">
                    <h2>FACILITIES</h2>
                </div>
            </div>
            <div class="cover-details">
                <div class="row justify-content-between facilities-wrapper">
                    <div class="col-12 col-xl-6 facilities-desc">
                        <div class="row">
                            <div class="col-12 col-md-6 item">
                                <img src="assets/images/car-parking.png" alt="">
                                <h4>Car Parking</h4>
                                <p>Your vehicles can be safely parked in our “park area”. Once you enter the hotel, you can hand over the key to our staff.</p>
                            </div>
                            <div class="col-12 col-md-6 item">
                                <img src="assets/images/water.png" alt="">
                                <h4>24 hour hot water service.</h4>
                                <p>Hot water is provided 24*7 for every room.</p>
                            </div>
                            <div class="col-12 col-md-6 item">
                                <img src="assets/images/banquet hall icon-01.png" alt="">
                                <h4>Banquet Hall</h4>
                                <p>A delightful and trendy banquet facility perfect for corporate meetings, business functions, weddings, birthdays, anniversaries, and other special events.</p>
                            </div>
                            <div class="col-12 col-md-6 item">
                                <img src="assets/images/restaurant.png" alt="">
                                <h4>Veg Restaurant</h4>
                                <p>Experience the delight of tasting the native special dishes made by the Chef at our Veg Restaurant.
                                </p>
                            </div>
                            <div class="col-12 col-md-6">
                                <img src="assets/images/laundry.png" alt="">
                                <h4>Laundry & Friendly room service</h4>
                                <p>We offer “Express Guest Laundry” service which enables us to serve our customers faster. We also have best in class room service.</p>
                            </div>
                            <div class="col-12 col-md-6">
                                <img src="assets/images/wifi.png" alt="">
                                <h4>Free WiFi</h4>
                                <p>You can stay connected with our high- speed connectivity at any time. Customers can salso avail the Wi-Fi cards from us.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-5 d-none d-xl-block facilities-img px-0">
                        <img src="assets/images/facilities-vertical.jpg" class="img-fluid border-curved">
                    </div>
                </div>
            </div>
        </div>
        <div id="explore-section" class="cover-wrapper">
            <div class="cover-image">
                <img src="assets/images/explore-cover.jpg" class="img-fluid">
                <div class="cover-text">
                    <h2>EXPLORE</h2>
                </div>
            </div>
            <div class="cover-details">
                <div class="row explore-wrapper">
                    <div class="col-12">
                        <div class="row portfolio-grid">
                            <div class="col-xl-6 col-md-6 col-12">
                                <figure class="effect-text-in w-100">
                                    <img src="assets/images/aliyardam.jpg" class="img-fluid" alt="image" />
                                    <figcaption>
                                        <h4>ALIYAR DAM</h4>
                                        <p>A beautiful dam with the finest garden for relaxing and enjoying your family time,
                                        children’s play facilities, fish aquarium and boating. Aliyar dam is located 24 kms from
                                        the hotel</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-xl-6 col-md-6 col-12">
                                <figure class="effect-text-in w-100">
                                    <img src="assets/images/arivuthirukovil.jpg" class="img-fluid" alt="image" />
                                    <figcaption>
                                        <h4>ARIVU THIRUKOVIL</h4>
                                        <p>Known as the temple of consciousness, Arivu Thirukovil is situated within 25 kms from the hotel. Founded by Vethathiri Maharishi, it is the best place to do yoga. Dyana Mandapam is open for meditation</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-xl-6 col-md-6 col-12">
                                <figure class="effect-text-in w-100">
                                    <img src="assets/images/monkeyfalls.jpg" class="img-fluid" alt="image" />
                                    <figcaption>
                                        <h4>Monkey Falls</h4>
                                        <p>Monkey Falls is renowned for its natural waterfall, a spot for forest sightseeing and bathing facilities for tourists. Monkey Falls is situated 25 km away from the hotel.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-xl-6 col-md-6 col-12">
                                <figure class="effect-text-in w-100">
                                    <img src="assets/images/valparai.jpg" class="img-fluid" alt="image" />
                                    <figcaption>
                                        <h4>VALPARAI</h4>
                                        <p>This hill station is renowned for its tea estates and stunning landscapes. The famous temple of Lord Balaji is located 64 km away from the hotel.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-xl-6 col-md-6 col-12">
                                <figure class="effect-text-in w-100 border-curved">
                                    <img src="assets/images/parambikulam.jpg" class="img-fluid" alt="image" />
                                    <figcaption>
                                        <h4>Topslip & Parambikulam</h4>
                                        <p>Topslip is a well-known wildlife sanctuary where you can spot Elephants, Deers, Bisons, Lions, and Tigers, 35 km from the hotel, while Parambikulam Dam is 58 km from the hotel with a stunning scenic view.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-xl-6 col-md-6 col-12">
                                <figure class="effect-text-in w-100">
                                    <img src="assets/images/masaniamman.jpg" class="img-fluid" alt="image" />
                                    <figcaption>
                                        <h4>Masaniamman Temple</h4>
                                        <p>The Masaniamman Temple, temple of the strong goddess, is 15 km from the hotel. The Kundam Festival, held here every year, is a popular Tamilnadu State Festival.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-xl-6 col-md-6 col-12">
                                <figure class="effect-text-in w-100">
                                    <img src="assets/images/thirumoorthi.jpg" class="img-fluid" alt="image" />
                                    <figcaption>
                                        <h4>Thirumoorthi Dam</h4>
                                        <p>35 km from the hotel, the dam is famous for its waterfall and temple. Another well-known dam, Amaravathi dam is also nearby.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-xl-6 col-md-6 col-12">
                                <figure class="effect-text-in w-100">
                                    <img src="assets/images/palani.jpg" class="img-fluid" alt="image" />
                                    <figcaption>
                                        <h4>Palani Temple</h4>
                                        <p>The prominent and celebrated temple in Palani is situated 64 km from the hotel. The visitors can also opt either for a winch and rope car instead of taking the steps.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-xl-6 col-md-6 col-12">
                                <figure class="effect-text-in w-100">
                                    <img src="assets/images/kodaikanal.jpg" class="img-fluid" alt="image" />
                                    <figcaption>
                                        <h4>Kodaikanal</h4>
                                        <p>A hill station at an altitude of 2133 mts, Kodaikanal is located 100 km away from the hotel. Pillar Rock, Lake, Solar Observatory and Silver Cascades are few of the beautiful places to visit. Natural fresh fruits are renowned for their taste here.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-xl-6 col-md-6 col-12">
                                <figure class="effect-text-in w-100">
                                    <img src="assets/images/ooty.jpg" class="img-fluid" alt="image" />
                                    <figcaption>
                                        <h4>Ooty</h4>
                                        <p>Ooty is known as the Queen of hills and has an altitude of 2,637 metres. The highest mountain in Nilgiri is Doddabeta. An additional draw for visitors is a boat house at the Pykara reservoir. It is located 132 km north from the hotel.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-xl-6 col-md-6 col-12">
                                <figure class="effect-text-in w-100">
                                    <img src="assets/images/Munnar.jpg" class="img-fluid" alt="image" />
                                    <figcaption>
                                        <h4>MUNNAR</h4>
                                        <p>At the confluence of three mountain streams, Mudrapuzha, Nallathanni and Kundala, Munnar is located. With 1600m above sea level, the most sought destination in Munnar is the Eravikulam National Park, the first of its kind in Kerala. Munnar is situated 112 km from the hotel.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-xl-6 col-md-6 col-12">
                                <figure class="effect-text-in w-100">
                                    <img src="assets/images/guruvayur.jpg" class="img-fluid" alt="image" />
                                    <figcaption>
                                        <h4>GURUVAYUR</h4>
                                        <p>Guruvayur temple is located in the town in kerala. There are five poojas and three sevilles daily in Guruvayoor temple. The temple opens at 3 o'clock in the morning after “palliunarthal” (ritual awakening of the lord). The temple is situated 115 km from the hotel. </p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="about-section" class="cover-wrapper">
            <div class="cover-image">
                <img src="assets/images/aboutus-cover.jpg" class="img-fluid">
                <div class="cover-text">
                    <h2>ABOUT US</h2>
                </div>
            </div> 
            <div class="text-center about-desc">
                    <div><iframe width="560" height="315" src="https://www.youtube.com/embed/CXLh3vBAblY" frameborder="10" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div><h4>Founded in 2018, Hotel Madhava Inn aspires to satisfy our guests by guaranteeing
                        warmest hospitality and outstanding facilities. We provide everything to make your
                        business trips and holiday stay memorable. Located in the heart of the city, Madhava
                        Inn is considered as one of the best places to stay since the hospitals, shopping areas
                        and travel facilities are within easy reach.</h4></div>
            </div>
        </div>
        <!-- Modal for Book-now button-->
        <div class="modal booking-modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="bookingModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Book a room</h4>
                    </div>
                    <form id="form">
                        <div class="modal-body">
                            <p>If your dates are at all flexible, please let us know. We book up quickly, especially on summer weekends, but would love to find a way to host you.</p>
                            <div class="row">
                                <div class="col-12" id="errorElement"></div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="firstName">First Name</label>
                                        <div class="col-sm-8">
                                            <input id="firstName" name="firstName" placeholder="First Name" class="form-control" />
                                            <small>Error message</small>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="lastName">Last Name</label>
                                        <div class="col-sm-8">
                                            <input id="lastName" name="lastName" placeholder="Last Name" class="form-control" />
                                            <small>Error message</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="email">Email</label>
                                        <div class="col-sm-8">
                                            <input id="email" name="email" placeholder="Email" class="form-control" />
                                            <small>Error message</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="phone">Phone</label>
                                        <div class="col-sm-8">
                                            <input id="phone" name="phone" placeholder="Phone number" class="form-control" />
                                            <small>Error message</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Date of arrival</label>
                                        <div class="col-sm-8">
                                            <div id="datepicker-arrival" class="input-group date datepicker">
                                                <input id="doa" name="doa" class="form-control">
                                                <span class="input-group-addon input-group-append border-left">
                                                    <span class="mdi mdi-calendar input-group-text"></span>
                                                </span>
                                            </div>
                                            <small>Error message</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Date of departure</label>
                                        <div class="col-sm-8">
                                            <div id="datepicker-departure" class="input-group date datepicker">
                                                <input id="dod" name="dod" class="form-control">
                                                <span class="input-group-addon input-group-append border-left">
                                                    <span class="mdi mdi-calendar input-group-text"></span>
                                                </span>
                                            </div>
                                            <small>Error message</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">No of Adults</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="noOfAdults">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">No of Kids</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="noOfKids">
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button id="closeModal" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success book-a-room">Book</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <p class="mb-0">161/2, Kovai Road,</p>
                        <p class="mb-0">Pollachi-2 , Tamilnadu</p>
                        <p>Created By <a href="https://www.asthraxmedia.com">AsthraX media</a></p>
                        <div class="d-flex social-media-cons">
                            <span><img src="assets/images/twitter icon.png"></span>
                            <span><img class="ml-2" src="assets/images/trip adviser icon.png"></span>
                            <span><img class="ml-2" src="assets/images/Facebook icon.png"></span>
                            <span><img class="ml-2" src="assets/images/instagram icon.png"></span>
                        </div>
                    </div>
                    <div class="col-12 col-md-9 col-lg-6 mt-4 mt-lg-0 mapouter"><div class="gmap_canvas"><iframe width="100%" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=%20hotel%20madhava%20inn%2Cpollachi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies2.org">fmovies</a></div><style>.mapouter{position:relative;text-align:right;height:200px;width:100%px;}.gmap_canvas {overflow:hidden;background:none!important;height:200px;width:100%px;}</style></div>
                    <div class="col-12 col-md-3 mt-4 mt-lg-0">
                        <div class="d-flex justify-content-lg-end align-items-center h-100">
                            <button class="btn btn-book-now font-weight-medium" data-toggle="modal" data-target="#bookingModal">BOOK NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/booknow-form-script.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <!-- Custom js for this page-->
    <script src="./assets/js/script.js"></script>
    <!-- End custom js for this page-->
</body>
</html>