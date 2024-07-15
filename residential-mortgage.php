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
.services__content-three ul li
{
    text-align: left;
    font-size: 18px;
    color: #fff;
    margin-bottom: 15px;
}
.about__content-three > p {
    margin-bottom: 10px;
    width: 100%;
    color: #000;
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
                                <h2 class="title tg-element-title">What is a Residential Mortgage?</h2>
                            </div>
                            <p>A residential mortgage is a loan specifically designed for buying a home, where the property itself serves as collateral. Whether you're a first-time buyer or looking to refinance, understanding how mortgages work is the first step towards homeownership.</p>                          
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
                            <h2 class="title tg-element-title" style="color: #fff;">Key Terms Demystified</h2>
                            <p style="color: #fff;">Here are a few terms you’ll encounter:</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center gutter-24">
                    <div class="col-lg-12 col-md-12">
                        <div class="services__item-three">
                            <div class="services__content-three">
                                <ul>
                                    <li>Interest Rate: The cost you'll pay each year to borrow the money, expressed as a percentage.</li>
                                    <li>Principal: The amount of money you borrow.</li>
                                    <li>Amortization: The schedule by which your loan payments will pay off the debt over time. These terms are critical in understanding how much you’ll ultimately pay for your home.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="services__item-three">
                            <div class="services__item-top">
                                <div class="services__top-title">
                                    <h2 class="title">First Steps in the Mortgage Process</h2>
                                </div>
                            </div>
                            <div class="services__content-three">
                                <p>The journey to securing a mortgage starts with getting pre-approved. This involves a lender reviewing your financial background (income, debts, assets, and credit score) to determine how much they can lend you and at what interest rate. Gathering your financial documents in advance will streamline this process.</p>
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
                                <h2 class="title tg-element-title">Choosing Your Path - Selecting the Right Mortgage</h2>
                            </div>
                            <p><strong>Types of Mortgages Available</strong></p>
                            <p>There are several mortgage types to consider:</p>
                            <ul>
                            	<li>Fixed-Rate Mortgages: The interest rate remains the same throughout the term of the loan, often making budgeting easier.</li>
                            	<li>Adjustable-Rate Mortgages (ARMs): The interest rate changes based on market conditions, which can offer lower initial rates but with the risk of increasing. Choosing the right type depends on your financial stability and how long you plan to stay in the home.</li>
                            </ul>                          
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <section class="about__area-three about__bg-two" data-background="assets/img/banner_bg_000.jpg">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12">
                        <div class="about__content-three ul_cls_ss">
                            <h2>Rates and Fees</h2>
                            <p>Mortgage rates can vary widely depending on the lender and your financial situation. It’s important to compare offers from multiple lenders to ensure you get the best deal. Also, be aware of fees such as closing costs, origination fees, and any penalties for early repayment, as these can significantly affect the cost of your loan.</p>
                            <h2>Finalizing Your Mortgage Choice</h2>
                            <p>Once you've compared rates and terms, consider the long-term implications of your mortgage choice. Think about your future financial goals and how your mortgage fits into these plans. Don't hesitate to negotiate with lenders to get better terms. Once satisfied, you can move forward with your application, heading towards closing, which is the final step in securing your home.</p>
                            <p>This structured approach to discussing residential mortgages will help your readers on ollender.com understand the process and make informed decisions about their home financing options.</p>
                                                    
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

    </main>
    <!-- main-area-end -->

<?php include_once ("include/footer.php") ?>
 