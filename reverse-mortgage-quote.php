<?php include_once ("include/header.php") ?>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css'>
<style>
  .step-form-step {
  display: none;
}

.step-form-step.active {
  display: block;
}

.step-form {
  margin-bottom: 20px;
}
.progress_from
{
  padding-top: 110px;
    padding-bottom: 60px;
}
.progress-bar-striped {
    background-image: none;
    background-size: 1rem 1rem;
}
.plans {
  background: #fff;
  border-radius: 20px;
}

.plans .plan input[type="radio"] {
  position: absolute;
  opacity: 0;
}

.plans .plan {
  cursor: pointer;
  width: 48.5%;
      margin-bottom: 10px;
}

.plans .plan .plan-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 10px;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  border: 2px solid #e1e2e7;
  border-radius: 10px;
  -webkit-transition: -webkit-box-shadow 0.4s;
  transition: -webkit-box-shadow 0.4s;
  -o-transition: box-shadow 0.4s;
  transition: box-shadow 0.4s;
  transition: box-shadow 0.4s, -webkit-box-shadow 0.4s;
  position: relative;
      padding-bottom: 5px;
}

.plans .plan .plan-content img {
  margin-right: 30px;
  height: 72px;
}

.plans .plan .plan-details span {
  margin-bottom: 10px;
  display: block;
  font-size: 20px;
  line-height: 24px;
  color: #fff;
}

.container .title {
  font-size: 20px;
  font-weight: 500;
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  color: #252f42;
  margin-bottom: 20px;
}

.plans .plan .plan-details p {
  color: #646a79;
  font-size: 14px;
  line-height: 18px;
}

.plans .plan .plan-content:hover {
  -webkit-box-shadow: 0px 3px 5px 0px #e8e8e8;
  box-shadow: 0px 3px 5px 0px #e8e8e8;
}

.plans .plan input[type="radio"]:checked + .plan-content:after {
  content: "";
  position: absolute;
  height: 8px;
  width: 8px;
  background: #216fe0;
  right: 20px;
  top: 20px;
  border-radius: 100%;
  border: 3px solid #fff;
  -webkit-box-shadow: 0px 0px 0px 2px #0066ff;
  box-shadow: 0px 0px 0px 2px #0066ff;
}

.plans .plan input[type="radio"]:checked + .plan-content {
     border: 2px solid #216ee0;
    background: #0647ce;
    -webkit-transition: ease-in 0.3s;
    -o-transition: ease-in 0.3s;
    transition: ease-in 0.3s;
}
.btn {

    padding: .75rem 2.75rem;
}
@media screen and (max-width: 991px) {
  .plans {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
  }

  .plans .plan {
    width: 100%;
  }

  
  .plans .plan .plan-content .plan-details {
    width: 70%;
    display: inline-block;
  }

  .plans .plan input[type="radio"]:checked + .plan-content:after {
    top: 45%;
    -webkit-transform: translate(-50%);
    -ms-transform: translate(-50%);
    transform: translate(-50%);
  }
}

@media screen and (max-width: 767px) {
  .plans .plan .plan-content .plan-details {
    width: 60%;
    display: inline-block;
  }
}


  .plans .plan input[type="radio"]:checked + .plan-content:after {
    top: 20px;
    right: 10px;
  }

  .plans .plan .plan-content .plan-details {
    width: 100%;
  }

  .plans .plan .plan-content {
        padding: 10px;
    padding-bottom: 4px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: baseline;
    -ms-flex-align: baseline;
    align-items: baseline;
    background: #00143d;
    color: #fff;
  }
}

/* inspiration */
.inspiration {
  font-size: 12px;
  margin-top: 50px;
  position: absolute;
  bottom: 10px;
  font-weight: 300;
}

.inspiration a {
  color: #666;
}
@media screen and (max-width: 767px) {
  /* inspiration */
  .inspiration {
    display: none;
  }
}
.card
{
  padding: 25px 40px;
  text-align: center;
}
.card h3
{
     font-weight: 700;
    margin-bottom: 25px;

}
.form-group label {
    display: inline-block;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 10px;
}

.form-group {
    margin-bottom: 18px;
}
@media (min-width: 1200px) {
    .container, .container-lg, .container-md, .container-sm, .container-xl {
        max-width: 1240px;
    }
}
.tg-header__area-four .tgmenu__navbar-wrap ul li a {
    padding: 35px 0px;
    text-decoration: none;
}
.button_div button
{
    margin-top: 10px;
}
.call_bnt a
{
  text-decoration: none;
}
.call_bnt span
{
      background: #00143d;
    color: #fff;
    padding: 10px 20px;
    border-radius: 6px;
    font-weight: 600;
    font-size: 25px;
}
.call_bnt p
{
   max-width: 580px;
    margin: auto;
    margin-top: 30px;
    color: #000;
    border: 1px solid #0000001c;
    padding: 10px 30px;
    border-radius: 10px;
    border-style: dashed;
}
.doll_inpt
{
    text-align: left;
}
.doll_inpt input
{
    padding-left: 45px !important;
}
.doll_inpt span
{
     position: absolute;
    margin-top: -41px;
    font-size: 18px;
    font-weight: 800;
    background: #00143d;
    color: #fff;
    padding: 7px 12px;
    border-radius: 5px 0px 0px 5px;
}
input[type="text"] {
     width: 100%;
    border: 1px solid #38383842;
    border-radius: 4px;
    margin: 8px 0;
    outline: none;
    padding: 8px;
    box-sizing: border-box;
    transition: 0.3s;
    margin: 0px;
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
    top: 0px;
    padding: 8px 10px;
    color: #ffffff;
    transition: 0.3s;
    font-size: 25px;
    background: #00143d;
    border-radius: 5px 0px 0px 5px;
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
.zipcode_section
{
  max-width: 800px;
    margin: auto;
    margin-top: 150px;
    margin-bottom: 60px;
}
.services__content-four p {
    margin-bottom: 20px;
    color: #000;
}

</style>
    <!-- main-area -->
    <main class="fix">
      <section class="" id="" data-background="assets/img/banner_bg_000.jpg">
        <div class="container">
          <div class="row">
            <div class="services__content-four card zipcode_section">
                  <h3 style="margin-bottom: 15px;">Find Out If A Reverse Mortgage Is Right For You</h3>
                  <p>Use our FREE Reverse Mortgage Evaluator to find out <br>how a reverse mortgage could work for you!</p>
                  <div class="inputWithIcon">
                      <input type="text" placeholder="Zip Code" id="zip_code" maxlength="5">
                      <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <div class="button_div">
                    <button class="btn btn-primary " id="btn_zip" style="margin-top: 0px;">Next</button>
                  </div>
              </div>
          </div>
        </div>
      </section>
      <!-- ======================Step-1================= -->
        <section class="progress_from" data-background="assets/img/banner_bg_000.jpg">
            <div class="container mt-5">
              <div class="row">
                  <div class="col-md-8 offset-md-2">
                      <div class="progress">
                          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%;" aria-valuemin="0" aria-valuemax="100">0%</div>
                      </div>
                      <div class="step-form">
                        <!--============Step-1==============-->
                          <div class="step-form-step active">
                              <div class="card">
                                <h3>What will this reverse mortgage be used for?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="basic">
                                      <input type="radio" name="plan" id="basic" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>An Existing Home</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="complete">
                                      <input type="radio" id="complete" name="plan" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Home Purchase</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="ra_01">
                                      <input type="radio" id="ra_01" name="plan" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Refinance My Reverse Mortgage</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>
                                  <div class="button_div">
                                    <button class="btn btn-secondary prev-step">Back</button>
                                  <button class="btn btn-primary next-step">Next</button>
                                  </div>
                              </div>
                          </div> 
                          <!--============Step-1==============-->

                           <div class="step-form-step">
                              <div class="card">
                                <h3>What type of property will be used for this reverse mortgage?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="bs_1">
                                      <input type="radio" name="plan"  id="bs_1"  class="first-qua"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Single Family Home</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="bs_2">
                                      <input type="radio" id="bs_2" name="plan"  class="first_qua"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Multi-Family Home</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="bs_3">
                                      <input type="radio" id="bs_3" name="plan"  class="first_qua"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Condominium</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="bs_4">
                                      <input type="radio" id="bs_4" name="plan"  class="first_qua"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Mobile/Manufactured Home</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>
                                  <p class="error" id="error-first-steps"></p>
                                  <div class="button_div">
                                     <button class="btn btn-secondary prev-step">Back</button>
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                              </div>
                          </div> 

                          <!--============Step-2==============-->
                          <div class="step-form-step">
                                <div class="card">
                                <h3>How long will you keep this property?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_01">
                                      <input type="radio" name="plan" id="rb_01" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Less than 5 years</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_02">
                                      <input type="radio" id="rb_02" name="plan" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>5-10 years</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_03">
                                      <input type="radio" id="rb_03" name="plan" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>11-20 years</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_04">
                                      <input type="radio" id="rb_04" name="plan" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Do not plan on moving again</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>
                                  <div class="button_div">
                                    <button class="btn btn-secondary prev-step">Back</button>
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                              </div>
                              </div>
                          <!--============Step-2==============-->

                          <div class="step-form-step">
                              <div class="card">
                                <div class="plans">
                                    <div class="form-group doll_inpt">
                                      <label>Please estimate the value of the property.</label>
                                      <input type="text" class="form-control" id="" name="" placeholder="00.00">
                                      <span>$</span>
                                    </div>

                                    <div class="form-group doll_inpt">
                                      <label>What is your current mortgage balance?</label>
                                      <input type="text" class="form-control" id="" name="" placeholder="00.00">
                                      <span>$</span>
                                    </div>
                                  </div>

                                  <div class="button_div">
                                    <button class="btn btn-secondary prev-step">Back</button>
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                              </div>
                          </div>

                          <div class="step-form-step">
                              <div class="card">
                                <h3>What is your reason for a reverse mortgage?</h3>
                                <div class="mortgage custom-select">
                                    <select class="form-control" name="" id="">
                                        <option value="" selected="" disabled="">Choose an option</option>
                                        <option value="Reason For Reverse Mortgage">Reason For Reverse Mortgage</option>
                                        <option value="Eliminate monthly payment">Eliminate monthly payment</option>
                                        <option value="Repairs and remodeling">Repairs and remodeling</option>
                                        <option value="Traveling and boarding">Traveling and boarding</option>
                                        <option value="Provide gift funds">Provide gift funds</option>
                                        <option value="Provide education funds">Provide education funds</option>
                                        <option value="Estate planning">Estate planning</option>
                                        <option value="Donations or charity">Donations or charity</option>
                                        <option value="Medical costs">Medical costs</option>
                                        <option value="Living assistance costs">Living assistance costs</option>
                                      </select>
                                  </div>

                                  <div class="button_div">
                                    <button class="btn btn-secondary prev-step">Back</button>
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                              </div>
                          </div> 
                          <div class="step-form-step">
                              <div class="card">
                                <h3>Is there a co-borrower/spouse?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_17">
                                      <input type="radio" name="plan" id="rb_17" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Yes</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_18">
                                      <input type="radio" name="plan" id="rb_18" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>No</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>

                                  <div class="button_div">
                                    <button class="btn btn-secondary prev-step">Back</button>
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                              </div>
                          </div> 
                          <div class="step-form-step">
                              <div class="card">
                                <h3>For whom is this reverse mortgage?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_21">
                                      <input type="radio" name="plan" id="rb_21" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Myself</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_22">
                                      <input type="radio" name="plan" id="rb_22" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Parent</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_23">
                                      <input type="radio" name="plan" id="rb_23" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Sibling</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb0_23">
                                      <input type="radio" name="plan" id="rb0_23" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Friend</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb0_24">
                                      <input type="radio" name="plan" id="rb0_24" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Client</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>

                                  <div class="button_div">
                                    <button class="btn btn-secondary prev-step">Back</button>
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                              </div>
                          </div>

                          <div class="step-form-step">
                              <div class="card">
                                <h3>What is your age?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_25">
                                      <input type="radio" name="plan" id="rb_25" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Under 62</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_26">
                                      <input type="radio" name="plan" id="rb_26" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Over 62</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_026">
                                      <input type="radio" name="plan" id="rb_026" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>90+ years</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>

                                  <div class="button_div">
                                    <button class="btn btn-secondary prev-step">Back</button>
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                              </div>
                          </div>
                           <div class="step-form-step">
                              <div class="card">
                                <h3>Are you currently working with a Loan Officer?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rbr_0s">
                                      <input type="radio" name="plan" id="rbr_0s" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Yes</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rbr_0t">
                                      <input type="radio" name="plan" id="rbr_0t" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>No</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>

                                  <div class="button_div">
                                    <button class="btn btn-secondary prev-step">Back</button>
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                              </div>
                          </div>
                          
                          <div class="step-form-step">
                              <div class="card">
                                <div class="form-group" style="text-align: left;">
                                  <label>What is your full name?</label>
                                  <input type="text" class="form-control" id="" name="" placeholder="Your Answer">
                                </div>
                                <div class="form-group" style="text-align: left;">
                                  <label>What is your email address?</label>
                                  <input type="text" class="form-control" id="" name="" placeholder="Your Answer">
                                </div>
                                <div class="form-group" style="text-align: left;">
                                  <label>What is  your phone number ?</label>
                                  <input type="text" class="form-control" id="" name="" placeholder="Your Answer">
                                </div>
                                <div class="mt-1 form__field" style="padding: 0px;text-align: left;">
                                  <label class="form__choice-wrapper">
                                    <input id="email-newsletter" type="checkbox" name="email-newsletter" value="Yes" checked>
                                    <span style="font-size: 15px;">By providing your information, you agree to our <a href="" data-toggle="modal" data-target="#basicModal"><strong>Terms Of Use</strong></a>.</span>
                                  </label>
                                </div>
                                <div class="button_div">
                                    <button class="btn btn-primary next-step">SUBMIT</button>
                                </div>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
              <!-- ===============Last-Div================ -->
                <div class="row" style="    margin-top: 150px;">
                  <div class="col-md-8 offset-md-2 text-center">
                      <div class="thank-you-message card call_bnt" style="padding: 40px 40px;">
                          <h3 style="">Thank you for showing your interest. By submitting the information you allow us to contact you back. Our team of experts will contact you shortly</h3>
                          <a href="tel:(888) 241-3106"><span>Call Us: (888) 241-3106</span></a>
                          <p>By clicking & submitting this form you authorise us to call you back even if your number is in National or Federal Do Not Call List</p>
                      </div>
                  </div>
              </div>
              <!-- ===============Last-Div================ -->
          </div>
        </section>
        <!-- ======================Step-1================= -->
        

  
    </main>
    <!-- main-area-end -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js'></script>
    <script>
      $(document).ready(function() {
    var currentStep = 0;
    var totalSteps = $('.step-form-step').length;

    function updateProgress() {
        var progress = ((currentStep / (totalSteps - 1)) * 100)-1;
        $('.progress-bar').css('width', progress + '%').text(Math.round(progress) + '%');
    }

    $('.next-step').click(function() {
        if (currentStep < totalSteps - 1) {
            $('.step-form-step').eq(currentStep).removeClass('active');
            currentStep++;
            $('.step-form-step').eq(currentStep).addClass('active');
            updateProgress();
        }
        /*if (currentStep === totalSteps - 1) {
            $('.confirm-step').show();
            $('.next-step, .prev-step').hide();
        }*/
    });

    $('.prev-step').click(function() {
        if (currentStep > 0) {
            $('.step-form-step').eq(currentStep).removeClass('active');
            currentStep--;
            $('.step-form-step').eq(currentStep).addClass('active');
            updateProgress();
            $('.confirm-step').hide();
            $('.next-step, .prev-step').show();
        }
    });

    /*$('.confirm-step').click(function() {
        $('.thank-you-message').show();
        $('.progress, .step-form, .next-step, .prev-step, .confirm-step').hide();
    });*/
});
    </script>
<?php include_once ("include/footer.php") ?>
