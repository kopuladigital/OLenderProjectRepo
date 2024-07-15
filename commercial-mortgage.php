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
.services__item-three ul li
{
    text-align: left;
    font-size: 18px;
    color: #fff;
    margin-bottom: 15px;
}
.services__item-three h2
{
    text-align: left;
    color: #fff;
    margin-bottom: 15px;
}
.about__content-three > p {
    margin-bottom: 10px;
    width: 100%;
    color: #000;
}
.mb-50 {
    margin-bottom: 25px;
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
                                <h2 class="title tg-element-title">Defining a Commercial Mortgage</h2>
                            </div>
                            <p>A commercial mortgage is a loan taken out on commercial real estate (like office buildings, shopping centers, or industrial warehouses) rather than residential property. This type of mortgage is typically used by businesses to buy, develop, or refinance commercial properties.</p>
                            <p>America Mortgages has the dedicated U.S. Commercial Lending Team based in Asia has an extensive network of U.S. lending relationships: major banks, regional banks, pension funds, and real estate lenders, to name a few.</p>                        
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
                            <h2 class="title tg-element-title" style="color: #fff;">Key Differences from Residential Mortgages</h2>
                            
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center gutter-24">
                    <div class="col-lg-12 col-md-12">
                        <div class="services__item-three">
                            <p style="color: #fff; text-align: left;">Commercial mortgages differ from residential loans in several key aspects:</p>
                            <ul>
                                <li>Loan Terms: Commercial loans often have shorter term lengths and might involve balloon payments.</li>
                                <li>Interest Rates: Typically higher than residential rates due to the increased risk.</li>
                                <li>Underwriting Criteria: Lenders examine the business's financial health, the property's potential to generate income, and the borrower's creditworthiness.</li>
                            </ul>
                            <div class="services__content-three">
                                <h2>Preparing for Application</h2>
                                <p>To apply for a commercial mortgage, gather detailed financial statements, business plans, and projections that demonstrate your business's ability to repay the loan. A thorough property appraisal and environmental assessments are also crucial.</p>
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
                            <h2>Making Strategic Choices - Selecting the Right Commercial Mortgage</h2>
                            <p><strong>Exploring Loan Types</strong></p>
                            <p>There are several types of commercial mortgages to consider, based on your needs:</p>
                            <ul>
                            	<li>Traditional Commercial Mortgages: Best for buying new properties or refinancing existing ones.</li>
                            	<li>SBA Loans: Offers lower down payments and longer repayment terms, ideal for small businesses.</li>
                            	<li>Bridge Loans: Short-term options for immediate financing needs while waiting for a more permanent solution.</li>
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
                            <h2>Assessing Rates and Terms</h2>
                            <p>Rates for commercial mortgages can be fixed or variable, and choosing between them depends on your risk tolerance and financial outlook. It’s also important to understand the fees involved, such as origination fees, appraisal fees, and potential prepayment penalties.</p>
                            <h2>Closing the Deal</h2>
                            <p>Finalizing a commercial mortgage involves several steps. Ensure all paperwork is accurate and complete. Negotiate terms that suit your business’s growth and financial strategies. Once all terms are agreed upon, proceed with the legal closure to secure your property financing.</p>
                            <p>This structure offers a comprehensive overview of commercial mortgages, tailored to engage and inform the readers of ollender.com, helping them make informed decisions about their commercial property financing.</p>                                         
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

    </main>
    <!-- main-area-end -->

<?php include_once ("include/footer.php") ?>
 