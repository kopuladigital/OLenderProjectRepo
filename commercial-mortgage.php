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
  width: 56%
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
.about__content-three > p {
    margin-bottom: 15px;
    width: 100%;
    color: #000;
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
        <section class="banner__area-two banner__bg-two" data-background="assets/img/banner_bg_img_3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner__content-two_2 h2_cls">
                            <h2 class="title" data-aos="fade-up" data-aos-delay="100">Commercial Mortgages</h2>
                            <p>There are a lot of loan options – let’s find the right one for you.</p>
                            <ul>
                            	<li><i class="fas fa-hand-point-right"></i> <a href="conduit-loans.php">Conduit Loans</a></li>
                                <li><i class="fas fa-hand-point-right"></i> <a href="equipment-financing.php">Equipment Financing</a></li>
                                <li><i class="fas fa-hand-point-right"></i> <a href="bridge-loans.php">Bridge Loans</a></li>
                                <li><i class="fas fa-hand-point-right"></i> <a href=" hard-money-loans.php">Hard Money Loans</a></li>
                                <li><i class="fas fa-hand-point-right"></i> <a href="sba-loans.php">SBA Loans</a></li>
                                <li><i class="fas fa-hand-point-right"></i> <a href="permanent-loans.php">Permanent Loans</a></li>
                                <li><i class="fas fa-hand-point-right"></i> <a href="commercial-construction-loans.php">Commercial Construction Loans</a></li>
                                <li><i class="fas fa-hand-point-right"></i> <a href="blanket-loans.php">Blanket Loans</a></li>
                                <li><i class="fas fa-hand-point-right"></i> <a href="commercial-investment-mortgages.php">Commercial Investment Mortgages</a></li>
                                <li><i class="fas fa-hand-point-right"></i> <a href="business-line-of-credit.php">Business Line of Credit</a></li>
                                <li><i class="fas fa-hand-point-right"></i> <a href="fix-and-flip-loans.php">Fix and Flip Loans </a></li>
                                <li><i class="fas fa-hand-point-right"></i> <a href="cmbs-loans.php">CMBS Loans</a></li>
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
                                <h2 class="title tg-element-title">Commercial Property Loans</h2>
                            </div>
                            <p>Being overseas, finding suitable financing options for U.S. commercial real estate is very difficult.</p>
                            <p>America Mortgages has the dedicated U.S. Commercial Lending Team based in Asia has an extensive network of U.S. lending relationships: major banks, regional banks, pension funds, and real estate lenders, to name a few.</p>
                            <p>Our team understands the needs of a Foreign borrower, international income, and no U.S. credit.</p>  
                            <p>We can help finance any of the major asset classes including commercial, hospitality, industrial, multi-family, special-use and land.</p>                        
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="about__img-wrap-three">
                            <img src="assets/img/commercial-property-loan-1.jpg" alt="image">
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
                            <h2 class="title tg-element-title" style="color: #fff;">Commercial Mortgages for Overseas Borrowers</h2>
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
                            <img src="assets/img/Commercial-img-02.png" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content-three ul_cls_ss">
                            <div class="section-title mb-25 tg-heading-subheading animation-style3">
                                <h2 class="title tg-element-title">Key Loan Highlights</h2>
                            </div>
                            <ul>
                            	<li>Minimum loan amount is $1,000,000 and a maximum of $100,000,000</li>
                            	<li>No U.S. credit score required</li>
                            	<li>Available in all 50 states</li>
                            	<li>Interest-Servicing Only (Interest-Only) payments are also available</li>
                            	<li>Each loan structured specifically to your requirements</li>
                            </ul>                          
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

    </main>
    <!-- main-area-end -->

<?php include_once ("include/footer.php") ?>
 