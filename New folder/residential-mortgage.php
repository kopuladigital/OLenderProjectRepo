<?php include_once ("include/header.php") ?>
<style>
   .banner__content-two_2 ul {
  padding: 0px;
}
.banner__content-two_2 ul li {
  position: relative;
  padding: 4px 10px;
  color: #000;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  overflow: hidden;
  width: 50%
}
.banner__content-two_2 ul li a {
      font-size: 17px;
    color: #000;
    font-weight: 700;
}
.banner__content-two_2 ul li:hover {
    color: #fff;
}
.banner__content-two_2 ul li a:hover {
    color: #fff;
}
.banner__content-two_2 ul li:before {
  content: '';
  position: absolute;
  left: -100%;
  top: 0;
  width: 100%;
  height: 100%;
  background: #2196f3;
  z-index: -1;
  transition: 0.5s;
}
.banner__content-two_2 ul li:hover:before {
  left: 0;
}
.banner__content-two_2 .title {
    font-size: 27px;
    text-transform: capitalize;
    line-height: 1.1;
    margin-bottom: 6px;
}
.banner__content-two_2 p {
    color: #0647ce;
    margin-bottom: 10px;
    font-weight: 700;
}

.banner__bg-two {
    display: flex;
    align-items: center;
    background-size: cover;
    background-position: center;
    padding: 140px 0 100px;
    position: relative;
    z-index: 1;
}
.about__img-wrap-three > img:nth-child(1) {
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -o-border-radius: 10px;
    -ms-border-radius: 10px;
    border-radius: 10px;
}
.ul_cls_ss ul li
{
	font-size: 17px;
    color: #000;
    font-weight: 500;
    margin-bottom: 10px;
}
.services__item-top {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 10px;
}
@media only screen and (max-width: 600px) {
	.banner__content-two_2 ul li {
  width: 100%
}

.banner__content-two_2 {
        background: #fff;
    padding: 20px;
    border: 1px solid #0647ce;
    border-radius: 10px;

}
}
</style>
    <!-- main-area -->
    <main class="fix">

        <!-- banner-area -->
        <section class="banner__area-two banner__bg-two" data-background="assets/img/banner_bg_img_2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner__content-two_2 h2_cls">
                            <h2 class="title" data-aos="fade-up" data-aos-delay="100">Residential Mortgages</h2>
                            <p>There are a lot of loan options – let’s find the right one for you.</p>
                            <ul>
                            	<li><i class="fas fa-hand-point-right"></i> <a href="fha-loans.php">FHA Loans</a></li>
                            	<li><i class="fas fa-hand-point-right"></i> <a href="va-loans.php">VA Loans</a></li>
                            	<li><i class="fas fa-hand-point-right"></i> <a href="jumbo-loans.php">Jumbo Loans</a></li>
                            	<li><i class="fas fa-hand-point-right"></i> <a href="usda-loans.php">USDA Loans</a></li>
                            	<li><i class="fas fa-hand-point-right"></i> <a href="reverse-mortgage.php">Reverse Mortgage</a></li>
                            	<li><i class="fas fa-hand-point-right"></i> <a href="203k-loans.php">203k Loans</a></li>
                            	<li><i class="fas fa-hand-point-right"></i> <a href="30-year-fixed-rate-mortgage.php">30 year Fixed Mortgage</a></li>
                            	<li><i class="fas fa-hand-point-right"></i> <a href="15-year-fixed-rate-mortgage.php">15 year Fixed Mortgage</a></li>
                            	<li><i class="fas fa-hand-point-right"></i> <a href="adjustable-rate-mortgage.php">Adjustable Rate mortgage</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
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
                    
                    <div class="col-lg-6">
                        <div class="about__content-three">
                            <div class="section-title mb-25 tg-heading-subheading animation-style3">
                                <h2 class="title tg-element-title">Residential Mortgages</h2>
                            </div>
                            <p>OLLender is the only U.S. residential mortgage specialist focusing on overseas borrowers – both Foreign Nationals and U.S. Expats.</p>
                            <p>Our team of loan officers understand the requirements of our international borrowers and provide mortgage solutions to purchase, refinance or release equity.</p>
                            <p>We work alongside our lenders to create loan programs specifically designed for overseas borrowers and have developed a process that has eliminated many unnecessary steps.</p>                          
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="about__img-wrap-three">
                            <img src="assets/img/Residential-Mortgages.jpg" alt="image">
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
                    <div class="col-lg-12">
                        <div class="section-title white-title mb-50 tg-heading-subheading animation-style3">
                            <h2 class="title tg-element-title" style="color: #fff;">Residential Mortgages for Overseas Borrowers</h2>
                            <p style="color: #fff;">We offer 150 U.S. bank and lender programs direct to our overseas clients – for both U.S. Citizens and Foreign Nationals.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center gutter-24">
                    <div class="col-lg-12 col-md-12">
                        <div class="services__item-three">
                            <div class="services__item-top">
                                <div class="services__item-top-title">
                                    <h2 class="title">U.S. Citizens living overseas (Expats)</h2>
                                </div>
                            </div>
                            <div class="services__content-three">
                                <p>We offer those with established credit exactly what you would find at your bank back home, but since we work with lenders in all 50 states, we are sure to find the best loan option available. Even for U.S. Citizens who have been “away from home” for an extended period and lack the depth of credit, we have solutions to help improve your credit as well as programs that accept your overseas credit and income.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="services__item-three">
                            <div class="services__item-top">
                                <div class="services__top-title">
                                    <h2 class="title">Foreign Nationals living overseas</h2>
                                </div>
                            </div>
                            <div class="services__content-three">
                                <p>Borrowers living overseas do not need to have U.S. credit to apply for a U.S. mortgage. We accept an international credit report from your home country or country of residence. There are often situations where real estate investors may not have established credit in their home country, or that country doesn’t have a standard credit reporting agency. In these cases, our in-house processing team has created solutions to address the lack of overseas credit by accepting a bank reference letter, a local accountant letter, to name a few.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- services-area-end -->

         <section class="about__area-three about__bg-two" data-background="assets/img/bg/h3_about_bg.jpg">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="about__img-wrap-three">
                            <img src="assets/img/Residential-img-02.png" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content-three ul_cls_ss">
                            <div class="section-title mb-25 tg-heading-subheading animation-style3">
                                <h2 class="title tg-element-title">Key Loan Highlights</h2>
                            </div>
                            <ul>
                            	<li>Overseas income and credit accepted (if required)</li>
                            	<li>Maximum loan-to-value is 70% for Foreign Nationals and 80% for U.S. Citizens</li>
                            	<li>Many term options: 15-yr fixed, 30-yr fixed, 5-yr ARM, 7-yr ARM</li>
                            	<li>Minimum loan amount is $150,000 and a maximum of $5,000,000</li>
                            	<li>All loans can be amortized over 30 years, regardless of age</li>
                            	<li>Interest-Servicing Only (Interest-Only) payments are also available</li>
                            </ul>                          
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

    </main>
    <!-- main-area-end -->

<?php include_once ("include/footer.php") ?>
 