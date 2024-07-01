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
  padding-top: 125px;
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
      margin-bottom: 15px;
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
  color: #252f42;
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
  background: #eaf1fe;
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
</style>
    <!-- main-area -->
    <main class="fix">
      <!-- ======================Step-1================= -->
        <section class="progress_from">
            <div class="request__bg-two" data-background="assets/img/bg-desktop.svg"></div>
            <div class="container mt-5">
              <div class="row">
                  <div class="col-md-8 offset-md-2">
                      <div class="progress mb-3">
                          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%;" aria-valuemin="0" aria-valuemax="100">0%</div>
                      </div>
                      <div class="step-form">
                        <!--============Step-1==============-->
                          <div class="step-form-step active">
                              <div class="card">
                                <h3>What type of property are you refinancing?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="basic">
                                      <input type="radio" name="plan" id="basic" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Single Family Home</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="complete">
                                      <input type="radio" id="complete" name="plan" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Condominium</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="complete_2">
                                      <input type="radio" id="complete_2" name="plan" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Townhome</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="complete_3">
                                      <input type="radio" id="complete_3" name="plan" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Multi-Family Home</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>
                                  <div class="button_div">
                                    <!-- <button class="btn btn-secondary prev-step">Back</button> -->
                                  <button class="btn btn-primary next-step">Next</button>
                                  </div>
                              </div>
                          </div> 
                          <!--============Step-1==============-->

                          <!--============Step-2==============-->
                          <div class="step-form-step">
                                <div class="card">
                                <h3>Estimate your credit score.</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_01">
                                      <input type="radio" name="plan" id="rb_01" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Excellent 740+</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_02">
                                      <input type="radio" id="rb_02" name="plan" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Good 700-739</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_03">
                                      <input type="radio" id="rb_03" name="plan" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Average 660-699</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_04">
                                      <input type="radio" id="rb_04" name="plan" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Fair 600-659</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_05">
                                      <input type="radio" id="rb_05" name="plan" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Poor < 600</span>
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

                          <!--============Step-3==============-->
                          <div class="step-form-step">
                              <div class="card">
                                <h3>What year did you purchase your home?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_06">
                                      <input type="radio" name="plan" id="rb_06" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>2010-2024</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_07">
                                      <input type="radio" id="rb_07" name="plan" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>2000-2009</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_08">
                                      <input type="radio" id="rb_08" name="plan" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>1990-1999</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_09">
                                      <input type="radio" id="rb_09" name="plan" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Before 1990</span>
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
                          <!--============Step-3==============-->

                          <!--============Step-4==============-->
                          <div class="step-form-step">
                              <div class="card">
                                <div class="form-group" style="text-align: left;">
                                  <label>Please estimate the value of the property.</label>
                                  <input type="text" class="form-control" id="" name="" placeholder="Your Answer">
                                </div>
                                <div class="form-group" style="text-align: left;">
                                  <label>What is the remaining 1st mortgage balance?</label>
                                  <input type="text" class="form-control" id="" name="" placeholder="Your Answer">
                                </div>
                                <div class="form-group" style="text-align: left;">
                                  <label>What is your 1st mortgage interest rate?</label>
                                  <input type="text" class="form-control" id="" name="" placeholder="Your Answer">
                                </div>
                                <div class="button_div">
                                    <button class="btn btn-secondary prev-step">Back</button>
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                              </div>
                          </div>
                          <!--============Step-4==============-->

                          <!--============Step-5==============-->
                          <div class="step-form-step">
                              <div class="card">
                                <h3>How will this property be used?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_10">
                                      <input type="radio" name="plan" id="rb_10" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Primary Home</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_11">
                                      <input type="radio" id="rb_11" name="plan" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Secondary Home</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_12">
                                      <input type="radio" id="rb_12" name="plan" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Investment</span>
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
                          <!--============Step-5==============--> 

                          <!--============Step-6==============-->
                          <div class="step-form-step">
                              <div class="card">
                                <h3>What kind of rate do you have?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_13">
                                      <input type="radio" name="plan" id="rb_13" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Adjustable</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_14">
                                      <input type="radio" id="rb_14" name="plan" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Fixed</span>
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
                          <!--============Step-6==============--> 

                          <div class="step-form-step">
                              <div class="card">
                                <h3>Do you have a second mortgage?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_15">
                                      <input type="radio" name="plan" id="rb_15" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Yes</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_16">
                                      <input type="radio" id="rb_16" name="plan" />
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
                                <h3>Purpose of refinance ?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_17">
                                      <input type="radio" name="plan" id="rb_17" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Refinance</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_18">
                                      <input type="radio" name="plan" id="rb_18" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Cash out</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_19">
                                      <input type="radio" name="plan" id="rb_19" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Heloc</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_20">
                                      <input type="radio" id="rb_20" name="plan" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Better rate</span>
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
                                <h3>What is your employment status?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_21">
                                      <input type="radio" name="plan" id="rb_21" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Employed</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_22">
                                      <input type="radio" name="plan" id="rb_22" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Not Employed</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_23">
                                      <input type="radio" name="plan" id="rb_23" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Self Employed</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_24">
                                      <input type="radio" id="rb_24" name="plan" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Military</span>
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
                                <h3>Bankruptcy, short sale, or foreclosure in the last 3 years?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_25">
                                      <input type="radio" name="plan" id="rb_25" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Yes</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_26">
                                      <input type="radio" name="plan" id="rb_26" />
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
                                <h3>Can you show proof of income?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_27">
                                      <input type="radio" name="plan" id="rb_27" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Yes</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_28">
                                      <input type="radio" name="plan" id="rb_28" />
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
                                  <label>What is your average monthly income?</label>
                                  <input type="text" class="form-control" id="" name="" placeholder="Your Answer">
                                </div>
                                <div class="form-group" style="text-align: left;">
                                  <label>What are your average monthly expenses?</label>
                                  <input type="text" class="form-control" id="" name="" placeholder="Your Answer">
                                </div>
                                <div class="button_div">
                                    <button class="btn btn-secondary prev-step">Back</button>
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                              </div>
                          </div>

                          <div class="step-form-step">
                              <div class="card">
                                <h3>Do you currently have a FHA loan?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_29">
                                      <input type="radio" name="plan" id="rb_29" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Yes</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_30">
                                      <input type="radio" name="plan" id="rb_30" />
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
                                <h3>Any late mortgage payments in the last 12 months?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_31">
                                      <input type="radio" name="plan" id="rb_31" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Yes</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_32">
                                      <input type="radio" name="plan" id="rb_32" />
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
                                <div class="mt-1 form__field" style="padding: 0px;margin-top: 15px !important;">
                                  <label class="form__choice-wrapper">
                                    <input id="email-newsletter" type="checkbox" name="email-newsletter" value="Yes" checked>
                                    <span style="font-size: 15px;">By providing your information, you agree to our <a href="terms-of-use.php" target="_blank">Terms Of Use</a>.</span>
                                  </label>
                                </div>
                                <div class="button_div">
                                    <button class="btn btn-secondary prev-step">Back</button>
                                    <button class="btn btn-primary next-step">Next</button>
                                </div>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
              <!-- ===============Last-Div================ -->
               <!-- <div class="row">
                  <div class="col-md-8 offset-md-2 text-center">
                      <div class="thank-you-message card">
                          <h3>Thank You</h3>
                      </div>
                  </div>
              </div> -->
              <!-- ===============Last-Div================ -->
          </div>
        </section>
        <!-- ======================Step-1================= -->
        

<!-- ================Step-4================= -->
<!-- <section class="last_section">
    <h3>Welcome back!</h3>
  <p>It looks like you’ve been here before. We already have your information on file.</p>
  <p style="margin-bottom: 25px;">Please call the number shown to discuss your options.</p>
  <a href="tel:(888) 241-3106"><i class="flaticon-phone-call"></i> (888) 241-3106</a>
</section> -->
<!-- ================Step-4================= -->
  
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
 