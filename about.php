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
.services__bg-six {
    background-size: cover;
    background-position: center;
    padding: 50px 0;
    background: #00143d;
}
.services__item-four {
    background: #ffffff;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    align-items: center;
    gap: 50px;
    padding: 40px 150px;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -o-border-radius: 15px;
    -ms-border-radius: 15px;
    border-radius: 15px;
    text-align: center;
}
.section-title.white-title .title {
    color: #ffffff;
}
</style>
    <!-- main-area -->
    <main class="fix">
        <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/banner_image.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="breadcrumb__content">
                            <h2 class="title">About Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
       
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
                                        <a href="tel:(786) 835-7247">(786) 835-7247</a>
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
                                    <a href="tel:(786) 835-7247">(786) 835-7247</a>
                                </div>
                            </div>
                            <a href="tel:(786) 835-7247" class="btn">Request a Free Call</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- request-area-end -->

  
    </main>
    <!-- main-area-end -->

<?php include_once ("include/footer.php") ?>
 