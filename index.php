<?php include_once ("include/header.php") ?>
<style>
    input[type="text"] {
     width: 100%;
    border: 1px solid #38383842;
    border-radius: 4px;
    margin: 8px 0;
    outline: none;
    padding: 8px;
    box-sizing: border-box;
    transition: 0.3s;
}

input[type="text"]:focus {
  border-color: dodgerBlue;
  box-shadow: 0 0 8px 0 dodgerBlue;
}

.inputWithIcon input[type="text"] {
  padding-left: 50px;
}

.inputWithIcon {
    position: relative;
    max-width: 300px;
    text-align: center;
     margin: auto;
    margin-bottom: 10px;
   
}

.inputWithIcon i {
      position: absolute;
    left: 0;
    top: 9px;
    padding: 8px 10px;
    color: #383838;
    transition: 0.3s;
    font-size: 25px;
    background: #c6c6c659;
}

.inputWithIcon input[type="text"]:focus + i {
  color: dodgerBlue;
}

.inputWithIcon.inputIconBg i {
  background-color: #aaa;
  color: #fff;
  padding: 9px 4px;
  border-radius: 4px 0 0 4px;
}

.inputWithIcon.inputIconBg input[type="text"]:focus + i {
  color: #fff;
  background-color: dodgerBlue;
}
</style>
    <!-- main-area -->
    <main class="fix">

        <!-- banner-area -->
        <section class="banner__area-two banner__bg-two" data-background="assets/img/banner_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner__content-two">
                            <h2 class="title" data-aos="fade-up" data-aos-delay="100">Get a Great Mortgage Rate</h2>
                            <p data-aos="fade-up" data-aos-delay="300">Use one of our quick & easy tools to find out what you qualify for, FREE!</p>
                            <a class='btn border-btn' data-aos-delay='600' data-aos='fade-up' href='#'>Home Purchase Qualifier</a> <a class='btn border-btn' data-aos-delay='600' data-aos='fade-up' href='#'>Refinance Rate Checker</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-social banner-social-two">
                <h5 class="title">Follow us</h5>
                <ul class="list-wrap">
                    <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="banner__shape-two">
                <img src="assets/img/banner/h3_banner_shape01.png" alt="" class="heartbeat">
            </div>
        </section>
        <!-- banner-area-end -->

       
        <!-- about-area -->
        <section class="about__area-three about__bg-two" data-background="assets/img/bg/h3_about_bg.jpg">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="about__img-wrap-three">
                            <img src="assets/img/images/h3_about_img01.jpg" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content-three">
                            <div class="section-title mb-25 tg-heading-subheading animation-style3">
                                <span class="sub-title">About Our Company</span>
                                <h2 class="title tg-element-title">Be confident in your mortgage search</h2>
                            </div>
                            <p>Having a local expert by your side for one of life’s biggest financial decisions is important. That’s why OLLender helps you partner with a local mortgage broker. An independent, licensed professional in your area who can shop on your behalf and give you access to more home loan options — like 0% Down Purchase*, VA loans, jumbo and more — than a bank or an online lender. In fact, working with a mortgage broker has saved homebuyers, like you, $9,407 on average.</p>
                            <div class="about__content-inner about__content-inner-two">
                                <div class="about__list-box about__list-box-two">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-arrow-button"></i>Residential Mortgage</li>
                                        <li><i class="flaticon-arrow-button"></i>Commercial Mortgage</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="about-bottom about-bottom-two">
                                
                                <div class="about__phone">
                                    <div class="icon">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="content">
                                        <span>Toll Free Call</span>
                                        <a href="tel:(888) 241-3106">(888) 241-3106</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- services-area -->
        <section class="services__area-three services__bg-three bag_color">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title white-title text-center mb-50 tg-heading-subheading animation-style3">
                            <h2 class="title tg-element-title" style="color: #fff;">What We Do</h2>
                            <p style="color: #fff;">We’re making getting a mortgage easier than ever before. Edge Home Finance Corporation has an experienced team of brokers on staff.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center gutter-24">
                    <div class="col-lg-4 col-md-6">
                        <div class="services__item-three">
                            <div class="services__item-top">
                                <div class="services__icon-three">
                                    <i class="flaticon-investment-1"></i>
                                </div>
                                <div class="services__item-top-title">
                                    <h2 class="title">Home Purchase Loans</h2>
                                </div>
                            </div>
                            <div class="services__content-three">
                                <p>Secure a home purchase loan that utilizes today’s great mortgage rates to make your dream home affordable.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services__item-three">
                            <div class="services__item-top">
                                <div class="services__icon-three">
                                    <i class="flaticon-finance"></i>
                                </div>
                                <div class="services__top-title">
                                    <h2 class="title">Refinance Rates</h2>
                                </div>
                            </div>
                            <div class="services__content-three">
                                <p>Lock in great terms with current interest rates to ensure your home remains affordable—or build more equity with an update!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services__item-three">
                            <div class="services__item-top">
                                <div class="services__icon-three">
                                    <i class="flaticon-profit"></i>
                                </div>
                                <div class="services__top-title">
                                    <h2 class="title">Rate Comparisons</h2>
                                </div>
                            </div>
                            <div class="services__content-three">
                                <p>Don’t just take the first offer. Shop around. Use our rate comparisons to find the best possible plan for your home ownership strategy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services__item-three">
                            <div class="services__item-top">
                                <div class="services__icon-three">
                                    <i class="flaticon-financial-profit"></i>
                                </div>
                                <div class="services__top-title">
                                    <h2 class="title">Fast Funding</h2>
                                </div>
                            </div>
                            <div class="services__content-three">
                                <p>Seize opportunity as soon as you can with our fast funding options, giving you the freedom to cure that house fever.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services__item-three">
                            <div class="services__item-top">
                                <div class="services__icon-three">
                                    <i class="flaticon-insurance-agent"></i>
                                </div>
                                <div class="services__top-title">
                                    <h2 class="title">Evaluate Your Property</h2>
                                </div>
                            </div>
                            <div class="services__content-three">
                                <p>Know where you stand. With a property evaluation in hand, you’ll have better access to your options so you can see the next move.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services__item-three">
                            <div class="services__item-top">
                                <div class="services__icon-three">
                                    <i class="flaticon-light-bulb"></i>
                                </div>
                                <div class="services__top-title">
                                    <h2 class="title">Cash-Out Refinance</h2>
                                </div>
                            </div>
                            <div class="services__content-three">
                                <p>Take advantage of your home’s equity with a cash-out refinance. It’s your cash — spend it how you see fit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="services__item-three">
                            <div class="services__content-three">
                                <a class='btn btn-two' href='##'>Get a FREE Personalized Rate Quote Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area-end -->

        <!-- services-area -->
        <section class="services__area-six services__bg-six">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="section-title white-title mb-40 tg-heading-subheading animation-style3">
                            <h2 class="title tg-element-title">Get Your Residential and Commercial Mortgage Quote</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="services__tab-wrap">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <div class="nav-link active" id="health-tab" data-bs-toggle="tab" data-bs-target="#health-tab-pane" type="button" role="tab" aria-controls="health-tab-pane" aria-selected="true"><i class="flaticon-investment-1"></i> 
                                        <div>
                                            <h4>Residential Mortgage</h4>
                                        <p> Browse rate comparisons to see which individual mortgage terms make the most sense for&nbsp;you.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <div class="nav-link" id="travel-tab" data-bs-toggle="tab" data-bs-target="#travel-tab-pane" type="button" role="tab" aria-controls="travel-tab-pane" aria-selected="false"><i class="flaticon-finance"></i>
                                    <div>
                                            <h4>Commercial Mortgage</h4>
                                        <p> Browse rate comparisons to see which individual mortgage terms make the most sense for&nbsp;you.</p>
                                        </div>
                                    </div>
                                </li>
                                
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="health-tab-pane" role="tabpanel" aria-labelledby="health-tab" tabindex="0">
                                    <div class="services__item-four shine-animate-item">
                                        <div class="services__content-four">
                                            <h2 class="title">Today's Mortgage Rates</h2>
                                            <p>Mortgage rates change daily and vary depending on your unique situation. Get your FREE customized quote here!</p>
                                            <div class="inputWithIcon">
                                                <input type="text" placeholder="Zip Code" id="zip_code" maxlength="5">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <a class='btn' href='#'>Get quote</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="travel-tab-pane" role="tabpanel" aria-labelledby="travel-tab" tabindex="0">
                                    <div class="services__item-four shine-animate-item">
                                        <div class="services__content-four">
                                            <h2 class="title">Today's Mortgage Rates</h2>
                                            <p>Mortgage rates change daily and vary depending on your unique situation. Get your FREE customized quote here!</p>
                                            <div class="inputWithIcon">
                                                <input type="text" placeholder="Zip Code" id="zip_code" maxlength="5">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <a class='btn' href='#'>Get quote</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area-end -->

        <!-- request-area -->
        <section class="request__area-two">
            <div class="request__bg-two" data-background="assets/img/bg/request_bg.jpg"></div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-5 col-lg-6">
                        <div class="request__content-two">
                            <h2 class="title">Offering The Best <span>Experience Of</span> Mortgage Rates</h2>
                            <div class="request__phone">
                                <div class="icon">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="content">
                                    <span>Toll Free Call</span>
                                    <a href="tel:(888) 241-3106">(888) 241-3106</a>
                                </div>
                            </div>
                            <a href="tel:(888) 241-3106" class="btn">Request a Free Call</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- request-area-end -->

        
        <!-- blog-post-area -->
        <section class="blog__post-area-two blog__post-area-three blog__post-bg-two" data-background="assets/img/bg/blog_post_bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center mb-50 tg-heading-subheading animation-style3">
                            <span class="sub-title">OUR BLOG UPDATE</span>
                            <h2 class="title tg-element-title">Featured News And Insights</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog__post-two">
                            <div class="blog__post-thumb-two">
                                <a href='blog-details.php'><img src="assets/img/h5_blog_post01.jpg" alt=""></a>
                            </div>
                            <div class="blog__post-content-two">
                                <h2 class="title"><a href='blog-details.php'>Marketing your area business downturn now a days</a></h2>
                                <div class="blog-avatar">
                                    <div class="avatar-content">
                                        <p><a href='blog-details.php'>Read More</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog__post-two">
                            <div class="blog__post-thumb-two">
                                <a href='blog-details.php'><img src="assets/img/h2_blog_post02.jpg" alt=""></a>
                            </div>
                            <div class="blog__post-content-two">
                                <h2 class="title"><a href='blog-details.php'>Improving The Double Diamond Design Process</a></h2>
                                <div class="blog-avatar">
                                    <div class="avatar-content">
                                        <p><a href='blog-details.php'>Read More</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog__post-two">
                            <div class="blog__post-thumb-two">
                                <a href='blog-details.php'><img src="assets/img/h2_blog_post06.jpg" alt=""></a>
                            </div>
                            <div class="blog__post-content-two">
                                <h2 class="title"><a href='blog-details.php'>Revealing Images With CSS Mask Animations</a></h2>
                                <div class="blog-avatar">
                                    <div class="avatar-content">
                                        <p><a href='blog-details.php'>Read More</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-shape-wrap">
                <img src="assets/img/images/h3_blog_shape01.png" alt="" data-aos="fade-right" data-aos-delay="400">
                <img src="assets/img/images/h3_blog_shape02.png" alt="" data-aos="fade-left" data-aos-delay="400">
            </div>
        </section>
        <!-- blog-post-area-end -->

    </main>
    <!-- main-area-end -->

<?php include_once ("include/footer.php") ?>
 