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
   margin-top: 25px;
    color: #000;
}
.error
{
      margin-bottom: 0rem;
    color: #f50000;
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
    margin-top: -37px;
    font-size: 18px;
    font-weight: 800;
    background: #00143d;
    color: #fff;
    padding: 5px 12px;
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
}
.services__content-four p {
    margin-bottom: 20px;
    color: #000;
}
</style>
    <!-- main-area -->
    <main class="fix">
       <section class="zipcode_section" id="">
        <div class="container">
          <div class="row">
            <div class="services__content-four card">
                  <h3 style="margin-bottom: 15px;">Paying too much for your mortgage?</h3>
                  <p>Just answer the simple questions below to calculate a lower mortgage<br> rate & payment. We make the process quick & easy.</p>
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
        <section class="progress_from" id="progress_from" style=" display:none;">
            <div class="request__bg-two" data-background="assets/img/bg-desktop.svg"></div>
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
                                <h3>What type of property are you refinancing?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="basic">
                                      <input type="radio" name="plan" value="Single Family Home" id="basic"  class="first-qua"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Single Family Home</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="complete">
                                      <input type="radio" id="complete" name="plan" value="Condominium" class="first_qua"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Condominium</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="complete_2">
                                      <input type="radio" id="complete_2" name="plan" value="Townhome" class="first_qua"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Townhome</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="complete_3">
                                      <input type="radio" id="complete_3" name="plan" value="Multi-Family Home" class="first_qua"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Multi-Family Home</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>
                                  <p class="error" id="error-first-steps"></p>
                                  <div class="button_div">
                                     <button class="btn btn-secondary prev-step">Back</button>
                                  <button class="btn btn-primary " id="type_of_property_btn">Next</button>
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
                                      <input type="radio" name="credit_score" value="Excellent" id="rb_01" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Excellent 740+</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_02">
                                      <input type="radio" id="rb_02" name="credit_score" value="Good"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Good 700-739</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_03">
                                      <input type="radio" id="rb_03" name="credit_score" value="Average"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Average 660-699</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_04">
                                      <input type="radio" id="rb_04" name="credit_score" value="Fair"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Fair 600-659</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_05">
                                      <input type="radio" id="rb_05" name="credit_score" value="Poor"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Poor < 600</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>
                                  <p class="error" id="error-second-steps"></p>
                                  <div class="button_div">
                                    <button class="btn btn-secondary" onclick="privousSteps(1,15)">Back</button>
                                    <button class="btn btn-primary " id="credit_score">Next</button>
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
                                      <input type="radio" name="purches_home" id="rb_06" value="2010-2024"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>2010-2024</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_07">
                                      <input type="radio" id="rb_07" name="purches_home" value="2000-2009"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>2000-2009</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_08">
                                      <input type="radio" id="rb_08" name="purches_home" value="1990-1999"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>1990-1999</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_09">
                                      <input type="radio" id="rb_09" name="purches_home" value="Before 1990"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Before 1990</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>
                                  <div class="button_div">
                                  <p class="error" id="error-thired-steps"></p>
                                    <button class="btn btn-secondary" onclick="privousSteps(2,15)">Back</button>
                                    <button class="btn btn-primary " id="purches_home">Next</button>
                                  </div>
                              </div>
                          </div> 
                          <!--============Step-3==============-->

                          <!--============Step-4==============-->
                          <div class="step-form-step">
                              <div class="card">
                                <div class="form-group doll_inpt">
                                  <label>Please estimate the value of the property.</label>
                                  <input type="number" class="form-control" id="estimate" name="estimate" placeholder="00.00">
                                  <span>$</span>
                                  <p class="error hide" id="error-estimate">this field required.</p>                               
                                </div>
                                <div class="form-group doll_inpt">
                                  <label>What is the remaining 1st mortgage balance?</label>
                                  <input type="number" class="form-control" id="mortgage" name="mortgage" placeholder="00.00">
                                  <span>$</span>
                                  <p class="error hide" id="error-mortgage">this field required.</p>
                                </div>
                                <div class="form-group doll_inpt">
                                  <label>What is your 1st mortgage interest rate?</label>
                                  <input type="number" class="form-control" id="interest" name="interest" placeholder="00.00">
                                  <span>$</span>
                                  <p class="error hide" id="error-interest">this field required.</p>
                                </div>
                                <div class="button_div">
                                    
                                    <button class="btn btn-secondary" onclick="privousSteps(3,15)">Back</button>
                                    <button class="btn btn-primary " id="step_first_from">Next</button>
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
                                      <input type="radio" name="property" id="rb_10" value="Primary Home"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Primary Home</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_11">
                                      <input type="radio" id="rb_11" name="property" value="Secondary Home"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Secondary Home</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_12">
                                      <input type="radio" id="rb_12" name="property" value="Investment"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Investment</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>
                                  <p class="error" id="error-fifth-steps"></p>
                                  <div class="button_div">
                                  <button class="btn btn-secondary" onclick="privousSteps(4,15)">Back</button>
                                    <button class="btn btn-primary next-step" id="investment-btn">Next</button>
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
                                      <input type="radio" name="rate" id="rb_13" value="Adjustable"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Adjustable</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_14">
                                      <input type="radio" id="rb_14" name="rate" value="Fixed"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Fixed</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>
                                  <p class="error" id="error-sixth-steps"></p>
                                  <div class="button_div">
                                  <button class="btn btn-secondary" onclick="privousSteps(5,15)">Back</button>
                                    <button class="btn btn-primary next-step" id="rate-btn">Next</button>
                                  </div>
                              </div>
                          </div>
                          <!--============Step-6==============--> 

                          <div class="step-form-step">
                              <div class="card">
                                <h3>Do you have a second mortgage?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_15">
                                      <input type="radio" name="mortgage-ans" id="rb_15" value="Yes"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Yes</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_16">
                                      <input type="radio" id="rb_16" name="mortgage-ans" value="No"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>No</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>
                                  <p class="error" id="error-seventh-steps"></p>
                                  <div class="button_div">
                                  <button class="btn btn-secondary" onclick="privousSteps(6,15)">Back</button>
                                    <button class="btn btn-primary next-step" id="mortgage-ans-btn">Next</button>
                                  </div>
                              </div>
                          </div> 
                          <div class="step-form-step">
                              <div class="card">
                                <h3>Purpose of refinance ?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_17">
                                      <input type="radio" name="refinance" id="rb_17" value="Refinance"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Refinance</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_18">
                                      <input type="radio" name="refinance" id="rb_18" value="Cash out"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Cash out</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_19">
                                      <input type="radio" name="refinance" id="rb_19" value="Heloc"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Heloc</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_20">
                                      <input type="radio" id="rb_20" name="refinance" value="Better rate"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Better rate</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>
                                  <p class="error" id="error-eight-steps"></p>
                                  <div class="button_div">
                                  <button class="btn btn-secondary" onclick="privousSteps(7,15)">Back</button>
                                    <button class="btn btn-primary next-step" id="refinance-btn">Next</button>
                                  </div>
                              </div>
                          </div> 
                          <div class="step-form-step">
                              <div class="card">
                                <h3>What is your employment status?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_21">
                                      <input type="radio" name="employment" id="rb_21" value="Employed"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Employed</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_22">
                                      <input type="radio" name="employment" id="rb_22" value="Not Employed"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Not Employed</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_23">
                                      <input type="radio" name="employment" id="rb_23" value="Self Employed"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Self Employed</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_24">
                                      <input type="radio" id="rb_24" name="employment" value="Military"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Military</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>
                                  <p class="error" id="error-ninth-steps"></p>
                                  <div class="button_div">
                                  <button class="btn btn-secondary" onclick="privousSteps(8,15)">Back</button>
                                    <button class="btn btn-primary next-step" id="employment-btn">Next</button>
                                  </div>
                              </div>
                          </div>
                          <div class="step-form-step">
                              <div class="card">
                                <h3>Bankruptcy, short sale, or foreclosure in the last 3 years?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_25">
                                      <input type="radio" name="foreclosure" id="rb_25" value="Yes"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Yes</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_26">
                                      <input type="radio" name="foreclosure" id="rb_26" value="No"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>No</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>
                                  <p class="error" id="error-tenth-steps"></p>
                                  <div class="button_div">
                                  <button class="btn btn-secondary" onclick="privousSteps(9,15)">Back</button>
                                    <button class="btn btn-primary next-step" id="foreclosure-btn">Next</button>
                                  </div>
                              </div>
                          </div>
                          <div class="step-form-step">
                              <div class="card">
                                <h3>Can you show proof of income?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_27">
                                      <input type="radio" name="income" id="rb_27" value="Yes"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Yes</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_28">
                                      <input type="radio" name="income" id="rb_28" value="No"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>No</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>
                                  <p class="error" id="error-eleventh-steps"></p>
                                  <div class="button_div">
                                  <button class="btn btn-secondary" onclick="privousSteps(10,15)">Back</button>
                                    <button class="btn btn-primary next-step" id="income-btn">Next</button>
                                  </div>
                              </div>
                          </div>

                          <div class="step-form-step">
                              <div class="card">
                                <div class="form-group doll_inpt">
                                  <label>What is your average monthly income?</label>
                                  <input type="number" class="form-control" id="income" name="income" placeholder="00.00">
                                  <span>$</span>
                                  <p class="error hide" id="error-income">this field required.</p>
                                </div>
                                <div class="form-group doll_inpt">
                                  <label>What are your average monthly expenses?</label>
                                  <input type="number" class="form-control" id="expenses" name="expenses" placeholder="00.00">
                                  <span>$</span>
                                  <p class="error hide" id="error-expenses">this field required.</p>
                                </div>
                                <div class="button_div">
                                    <button class="btn btn-secondary" onclick="privousSteps(11,15)">Back</button>
                                    <button class="btn btn-primary next-step" id="step_second_from">Next</button>
                                  </div>
                              </div>
                          </div>

                          <div class="step-form-step">
                              <div class="card">
                                <h3>Do you currently have a FHA loan?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_29">
                                      <input type="radio" name="FHA" id="rb_29" value="Yes"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Yes</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_30">
                                      <input type="radio" name="FHA" id="rb_30" value="No"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>No</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>
                                  <p class="error" id="error-twelth-steps"></p>
                                  <div class="button_div">
                                  <button class="btn btn-secondary" onclick="privousSteps(12,15)">Back</button>
                                    <button class="btn btn-primary next-step" id="FHA-btn">Next</button>
                                  </div>
                              </div>
                          </div>

                          <div class="step-form-step">
                              <div class="card">
                                <h3>Any late mortgage payments in the last 12 months?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_31">
                                      <input type="radio" name="late-mortgage" id="rb_31" value="Yes"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Yes</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_32">
                                      <input type="radio" name="late-mortgage" id="rb_32" value="No"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>No</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>
                                  <p class="error" id="error-thrtin-steps"></p>
                                  <div class="button_div">
                                  <button class="btn btn-secondary" onclick="privousSteps(13,15)">Back</button>
                                    <button class="btn btn-primary next-step" id="late-mortgage">Next</button>
                                  </div>
                              </div>
                          </div>

                          <div class="step-form-step">
                              <div class="card">
                                <div class="form-group" style="text-align: left;">
                                  <label>What is your full name?</label>
                                  <input type="text"  class="form-control txtOnly" id="full-name" name="full-name" placeholder="Your Answer">
                                  <p class="error hide" id="error-name">this field required.</p>

                                </div>
                                <div class="form-group" style="text-align: left;">
                                  <label>What is your email address?</label>
                                  <input type="email" class="form-control" id="address" name="address" placeholder="Your Answer" autocomplete="email" inputmode="email" required>
                                 
                                  <p class="error hide" id="error-address">this field required.</p>
                                </div>
                                <div class="form-group" style="text-align: left;">
                                  <label>What is  your phone number ?</label>
                                  <!-- <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Answer"> -->
                                  <input id="phone" class="form-control" type="tel" oninput="phoneFormat(this)" maxlength="14" name="phone" autocomplete="tel" inputmode="tel" placeholder="Your Answer" required>
                                  <p class="error hide" id="error-phone"></p> <p class="error hide" id="error-number"></p>
                                </div>
                                <div class="mt-1 form__field" style="padding: 0px; text-align: left;">
                                  <label class="form__choice-wrapper">
                                    <input id="agree" type="checkbox" name="agree" value="Yes" >
                                    <span style="font-size: 15px;">By providing your information, you agree to our <a href="" data-toggle="modal" data-target="#basicModal">Terms Of Use</a>.</span>
                                  </label>
                                  <p class="error hide" id="error-agree">this field required.</p>
                                </div>
                                <div class="button_div">
                                <button class="btn btn-secondary" onclick="privousSteps(14,15)">Back</button>
                                    <button class="btn btn-primary next-step" id="final-submit">Submit</button>
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
       <!-- data inseartion success -->  
    <section class="last_section margin-t12rem" id="welcome" style=" display:none;">
        <div class="thank-you-message card call_bnt" style="padding: 40px 40px;">
            <h3 style="">Thank you for showing your interest. By submitting the information you allow us to contact you back. Our team of experts will contact you shortly</h3>
            <a href="tel:(888) 241-3106"><span>Call Us: (888) 241-3106</span></a>
            <p>By clicking & submitting this form you authorise us to call you back even if your number is in National or Federal Do Not Call List</p>
        </div>      
   </section>
   <!-- data inseartion error -->
   <section class="last_section margin-t12rem" id="error-insert" style=" display:none;">
      <div class="thank-you-message card call_bnt" style="padding: 40px 40px;">
          <h3 style="">Thank you for showing your interest. By submitting the information you allow us to contact you back. Our team of experts will contact you shortly</h3>
          <a href="tel:(888) 241-3106"><span>Call Us: (888) 241-3106</span></a>
          <p>By clicking & submitting this form you authorise us to call you back even if your number is in National or Federal Do Not Call List</p>
      </div>     
   </section>
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
  $(function () {
      $('#full-name').keydown(function (e) {
          if (e.shiftKey || e.ctrlKey || e.altKey) {
              e.preventDefault();
          } else {
              var key = e.keyCode;
              if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                  e.preventDefault();
              }
          }
      });
  });
$(document).ready(function(){
  $('#progress_from').show();
  var currentStep = 0;
    var totalSteps = $('.step-form-step').length;
  
  
    $("#type_of_property_btn").click(function(){          
      type_of_property = $('input[name="plan"]:checked').val();
      if(type_of_property){
          // alert(type_of_property);
          currentStep = 0;
          customClick(currentStep,totalSteps);        
      }
      else{ $('#error-first-steps').html('please  select one option');}
            
    }); 
    $("#credit_score").click(function(){          
      credit_score = $('input[name="credit_score"]:checked').val();
      if(credit_score){
          // alert(credit_score);
          currentStep = 1;
          customClick(currentStep,totalSteps);        
      }else{ $('#error-second-steps').html('please  select one option');}
            
    });
    $("#purches_home").click(function(){          
      purches_home = $('input[name="purches_home"]:checked').val();
      if(purches_home){
          // alert(purches_home);
          currentStep = 2;
          customClick(currentStep,totalSteps);        
      }else{ $('#error-thired-steps').html('please  select one option');}
            
    }); 
    $("#step_first_from").click(function(){ 

      estimate = $('#estimate').val().trim();
      mortgage = $('#mortgage').val().trim();
      interest = $('#interest').val().trim();
      
      var isValid = true;
      if (!estimate) {
               
                isValid = false;             
                $('#error-estimate').show();
                
      }else{ $('#error-estimate').hide(); }
      if (!mortgage) {
                isValid = false;             
                $('#error-mortgage').show();
                
      }else{ $('#error-mortgage').hide(); }
      if (!interest) {
                isValid = false;             
                $('#error-interest').show();
                
      }else{ $('#error-interest').hide(); }
      
      if(isValid){
        currentStep = 3;
        customClick(currentStep,totalSteps); 
                 
      }
           
            
    });
    $("#investment-btn").click(function(){          
      property = $('input[name="property"]:checked').val();
      if(property){
          // alert(property);
          currentStep = 4;
          customClick(currentStep,totalSteps);        
      }else{ $('#error-fifth-steps').html('please  select one option');}
            
    }); 
    $("#rate-btn").click(function(){          
      rate = $('input[name="rate"]:checked').val();
      if(rate){
          // alert(rate);
          currentStep = 5;
          customClick(currentStep,totalSteps);        
      }else{ $('#error-sixth-steps').html('please  select one option');}
            
    }); 
    $("#mortgage-ans-btn").click(function(){          
      mortgage_ans = $('input[name="mortgage-ans"]:checked').val();
      if(mortgage_ans){
          // alert(mortgage_ans);
          currentStep = 6;
          customClick(currentStep,totalSteps);        
      }else{ $('#error-seventh-steps').html('please  select one option');}
            
    }); 
    $("#refinance-btn").click(function(){          
      refinance = $('input[name="refinance"]:checked').val();
      if(refinance){
          // alert(refinance);
          currentStep = 7;
          customClick(currentStep,totalSteps);        
      }else{ $('#error-eight-steps').html('please  select one option');}
            
    });
    $("#employment-btn").click(function(){          
      employment = $('input[name="employment"]:checked').val();
      if(employment){
          // alert(employment);
          currentStep = 8;
          customClick(currentStep,totalSteps);        
      }else{ $('#error-ninth-steps').html('please  select one option');}
            
    });
    $("#foreclosure-btn").click(function(){          
      foreclosure = $('input[name="foreclosure"]:checked').val();
      if(foreclosure){
          // alert(foreclosure);
          currentStep = 9;
          customClick(currentStep,totalSteps);        
      }else{ $('#error-tenth-steps').html('please  select one option');}
            
    });
    $("#income-btn").click(function(){          
      income = $('input[name="income"]:checked').val();
      if(income){
          
          currentStep = 10;
          customClick(currentStep,totalSteps);        
      }else{ $('#error-eleventh-steps').html('please  select one option');}
            
    });
    $("#step_second_from").click(function () {
        // income = $('#income').val();
        // expenses = $('#expenses').val();
        var isValid = true;
        // alert(income); 
        //this is for space       
        if (jQuery.trim($('#income').val())== "" ) {
            alert("plz enter income");
            isValid = false;
            $('#error-income').show();
        } else if(jQuery.trim($('#expenses').val())== "" ) {
            alert("plz enter expenses");
            isValid = false;
            $('#error-income').show();
        }
        else {
             expenses = $('#expenses').val();
            $('#error-income').hide();
            income = $('#income').val();
        }
        // if (!expenses) {
        //     // alert(expenses);
        //     isValid = false;
        //     $('#error-expenses').show();
        // } else {
        //     $('#error-expenses').hide();
        // }
        if (isValid) {
            currentStep = 11;
            customClick(currentStep, totalSteps);
        }
    });
    $("#FHA-btn").click(function () {
      FHA = $('input[name="FHA"]:checked').val();
      if (FHA) {
          
          currentStep = 12;
          customClick(currentStep, totalSteps);
      } else {
          $('#error-twelth-steps').html('please  select one option');
      }
    });
    $("#late-mortgage").click(function () {
      late_mortgage = $('input[name="late-mortgage"]:checked').val();
      if (late_mortgage) {
          
          currentStep = 13;
          customClick(currentStep, totalSteps);
      } else {
          $('#error-thrtin-steps').html('please  select one option');
      }
    });
    $("#final-submit").click(function () {
      

      
      full_name = $('#full-name').val();
      address = $('#address').val();
      phone = $('#phone').val();
      phone_length = $('#phone').val().lenght;
     
      agree = $('#agree').is(':checked');
      var isValid = true;
      // alert(income);       
      if (!full_name) {
          // alert(full_name);
          isValid = false;
          $('#error-name').show();
      } else {
          $('#error-name').hide();
      }
      if (IsEmail(address)==false) {
          // alert(address);
          isValid = false;
          $('#error-address').show();
      } else {
          $('#error-address').hide();
      }
      if (!phone) {
          // alert(phone);
          isValid = false;
          $('#error-phone').show();
      }else if(phone_length !=14){
        isValid = false;
        $('#error-number').show();
      } 
      else {
          $('#error-phone').hide();
          $('#error-number').hide();
      }
      
      if (!agree) {
          
          isValid = false;
          $('#error-agree').show();
          $("#final-submit").attr("disabled", true);
                alert("You must agree to the terms and conditions");
                $("#final-submit").attr("disabled", false);
      } else {
          $('#error-agree').hide();
      }
     
      if (isValid){
       
       
            $.ajax({
                  url: "saveRefinanceQuate.php",
                  type: "POST",
                  data: {
                    type_of_property: type_of_property,
                    credit_score: credit_score,
                    purches_home: purches_home,
                    estimate: estimate, 
                    mortgage : mortgage,
                    interest : interest,
                    property : property,
                    rate : rate,
                    mortgage_ans : mortgage_ans,
                    refinance : refinance,
                    employment : employment,
                    foreclosure : foreclosure,
                    income : income,
                    FHA : FHA,
                    full_name : full_name,
                    address : address,
                    phone : phone,
                    late_mortgage : late_mortgage,                    
                    agree : agree     
                  },
                  cache: false,
                  success: function(dataResult){
                      var dataResult = JSON.parse(dataResult);
                      if(dataResult.statusCode==200){
                          
                         
                          $("#progress_from").hide();
                          $("#welcome").show();
                          //  $('#success').html('Recored Saved successfully !');   
                                  
                      }
                      else if(dataResult.statusCode==201){
                           $("#progress_from").hide();
                          // this is error message
                          $("#error-insert").show();
                          
                          
                      }
                      
                  }
              });






             }      
    });
});
function customClick(currentStep,totalSteps)
{
         
          if (currentStep < totalSteps - 1) {
            $('.step-form-step').eq(currentStep).removeClass('active');
            currentStep++;
            $('.step-form-step').eq(currentStep).addClass('active');
            updateProgress(currentStep,totalSteps);
        }
}
function updateProgress(currentStep,totalSteps) {
        var progress = ((currentStep / (totalSteps - 1)) * 100)-1;
        $('.progress-bar').css('width', progress + '%').text(Math.round(progress) + '%');
}
function privousSteps(currentStep,totalSteps)
{

  if (currentStep > 0) {
            $('.step-form-step').eq(currentStep).removeClass('active');
            currentStep--;
            $('.step-form-step').eq(currentStep).addClass('active');
            updateProgress(currentStep,totalSteps);
            $('.confirm-step').hide();
            $('.next-step, .prev-step').show();
        }
}
</script>
    
     <script>
    let previousPhone = ''
    function phoneFormat(field) {
        const specialCharCount = (field.value.match(/\D/g) || []).length;
        let cursorPosition = field.selectionStart;
    
        let input = field.value.replace(/\D/g,'');
        const size = input.length;
        if (input.substring(0,1) == 1) {
            if (size===0) {input=``}
            else if (size<2) {input=`+${input} `}
            else if (size<4) {input=`+${input.substring(0,1)} (${input.substring(1)}`}
            else if (size<8) {input=`+${input.substring(0,1)} (${input.substring(1,4)}) ${input.substring(4)}`}
            else if (size<12) {input=`+${input.substring(0,1)} (${input.substring(1,4)}) ${input.substring(4,7)}-${input.substring(7,11)}`}
        }else{
            if (size>7 && size<11) {input=`(${input.substring(0,3)}) ${input.substring(3,6)}-${input.substring(6)}`}
            else if (size>3 && size<8) {input=`${input.substring(0,3)}-${input.substring(3)}`}
        }
        
        if (input !== previousPhone) {
            previousPhone = input
            const specialCharDiff = (input.match(/\D/g) || []).length - specialCharCount;
            cursorPosition += specialCharDiff
    
            field.value = input
            field.selectionStart = cursorPosition;
            field.selectionEnd = cursorPosition;
            
        }
    }
    function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!regex.test(email)) {
      return false;
    }else{
      return true;
    }
  }
   
  

</script>

    
<?php include_once ("include/footer.php") ?>
 