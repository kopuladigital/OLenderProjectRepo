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
.back_btn
   {
    border: none;
    margin-top: 15px;
    padding: 5px 35px;
    font-weight: 400;
    color: #000;
   }

</style>
    <!-- main-area -->
    <main class="fix">
      <section class="" id="" data-background="assets/img/banner_bg_000.jpg">
        <div class="container">
          <div class="row">
            <div class="services__content-four card zipcode_section">
                  <h3 style="margin-bottom: 15px;">15-Year Fixed Rate Mortgage Quote</h3>
                  <p>15-year fixed mortgage rates change daily and vary depending on <br>your unique situation. Get your FREE customized quote here!</p>
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
                                <h3>What type of loan do you need?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="basic">
                                      <input type="radio" name="plan" id="basic" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Home Purchase</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="complete">
                                      <input type="radio" id="complete" name="plan" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Home Refinance</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>
                                  <div class="button_div">
                                  <button class="btn btn-primary next-step">Next</button>
                                  </div>
                                  <div><button class="back_btn prev-step" id="back_zip">< Back</button></div>
                              </div>
                          </div> 
                          <!--============Step-1==============-->

                           <div class="step-form-step">
                              <div class="card">
                                <h3>Great! What type of property are you purchasing?</h3>
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
                                          <span>Condominium</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="bs_3">
                                      <input type="radio" id="bs_3" name="plan"  class="first_qua"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Townhome</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="bs_4">
                                      <input type="radio" id="bs_4" name="plan"  class="first_qua"/>
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Multi-Family Home</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>
                                  <p class="error" id="error-first-steps"></p>
                                  <div class="button_div">
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                                  <div><button class="back_btn prev-step" id="back_zip">< Back</button></div>
                              </div>
                          </div> 

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
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                                  <div><button class="back_btn prev-step" id="back_zip">< Back</button></div>
                              </div>
                              </div>
                          <!--============Step-2==============-->

                          <div class="step-form-step">
                              <div class="card">
                                <h3>Is this your first property purchase?</h3>
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
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                                  <div><button class="back_btn prev-step" id="back_zip">< Back</button></div>
                              </div>
                          </div> 
                          <div class="step-form-step">
                              <div class="card">
                                <h3>What is your current property purchase situation?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_17">
                                      <input type="radio" name="plan" id="rb_17" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Signed a Purchase Agreement</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_18">
                                      <input type="radio" name="plan" id="rb_18" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Offer Pending / Found Property</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_19">
                                      <input type="radio" name="plan" id="rb_19" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Buying in 2-6 Months</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_20">
                                      <input type="radio" id="rb_20" name="plan" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Researching Options</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>

                                  <div class="button_div">
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                                  <div><button class="back_btn prev-step" id="back_zip">< Back</button></div>
                              </div>
                          </div> 
                          <div class="step-form-step">
                              <div class="card">
                                <h3>How will this property be used?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_21">
                                      <input type="radio" name="plan" id="rb_21" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Primary Home</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_22">
                                      <input type="radio" name="plan" id="rb_22" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Secondary Home</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_23">
                                      <input type="radio" name="plan" id="rb_23" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Rental Property</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>

                                  <div class="button_div">
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                                  <div><button class="back_btn prev-step" id="back_zip">< Back</button></div>
                              </div>
                          </div>

                           <div class="step-form-step">
                              <div class="card">
                                <div class="plans">
                                    <div class="form-group doll_inpt">
                                  <label>What is the purchase price of the new property?</label>
                                  <input type="text" class="form-control" id="" name="" placeholder="00.00">
                                  <span>$</span>
                                </div>
                                  </div>

                                  <div class="button_div">
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                                  <div><button class="back_btn prev-step" id="back_zip">< Back</button></div>
                              </div>
                          </div>
                          <div class="step-form-step">
                              <div class="card">
                                <h3>What is your estimated down payment?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_25">
                                      <input type="radio" name="plan" id="rb_25" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>0% Down</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_26">
                                      <input type="radio" name="plan" id="rb_26" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>3% Down</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_026">
                                      <input type="radio" name="plan" id="rb_026" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>5% Down</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_126">
                                      <input type="radio" name="plan" id="rb_126" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>More Than 20%</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>

                                  <div class="button_div">
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                                  <div><button class="back_btn prev-step" id="back_zip">< Back</button></div>
                              </div>
                          </div>
                           <div class="step-form-step">
                              <div class="card">
                                <h3>What kind of rate do you prefer?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rbr_0s">
                                      <input type="radio" name="plan" id="rbr_0s" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Adjustable</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rbr_0t">
                                      <input type="radio" name="plan" id="rbr_0t" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Fixed</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>

                                  <div class="button_div">
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                                  <div><button class="back_btn prev-step" id="back_zip">< Back</button></div>
                              </div>
                          </div>
                          <div class="step-form-step">
                              <div class="card">
                                <div class="plans">
                                    <div class="form-group doll_inpt">
                                  <label>What is your gross annual household income?</label>
                                  <input type="text" class="form-control" id="" name="" placeholder="00.00">
                                  <span>$</span>
                                </div>
                                  </div>

                                  <div class="button_div">
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                                  <div><button class="back_btn prev-step" id="back_zip">< Back</button></div>
                              </div>
                          </div>
                          <div class="step-form-step">
                              <div class="card">
                                <h3>What is your employment status?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_021">
                                      <input type="radio" name="plan" id="rb_021" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Employed</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_022">
                                      <input type="radio" name="plan" id="rb_022" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Not Employed</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_023">
                                      <input type="radio" name="plan" id="rb_023" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Self Employed</span>
                                        </div>
                                      </div>
                                    </label><br>

                                    <label class="plan complete-plan" for="rb_024">
                                      <input type="radio" id="rb_024" name="plan" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Military</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>

                                  <div class="button_div">
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                                  <div><button class="back_btn prev-step" id="back_zip">< Back</button></div>
                              </div>
                          </div>
                          <div class="step-form-step">
                              <div class="card">
                                <h3>Bankruptcy, short sale, or foreclosure in the last 3 years?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_0s">
                                      <input type="radio" name="plan" id="rb_0s" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Yes</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_0t">
                                      <input type="radio" name="plan" id="rb_0t" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>No</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>

                                  <div class="button_div">
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                                  <div><button class="back_btn prev-step" id="back_zip">< Back</button></div>
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
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                                  <div><button class="back_btn prev-step" id="back_zip">< Back</button></div>
                              </div>
                          </div>
                          <div class="step-form-step">
                              <div class="card">
                                <h3>Are you working with a real estate agent?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rb_127">
                                      <input type="radio" name="plan" id="rb_127" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Yes</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rb_128">
                                      <input type="radio" name="plan" id="rb_128" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>No</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>

                                  <div class="button_div">
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                                  <div><button class="back_btn prev-step" id="back_zip">< Back</button></div>
                              </div>
                          </div>
                          <div class="step-form-step">
                              <div class="card">
                                <h3>Are you currently working with a Loan Officer?</h3>
                                <div class="plans">
                                    <label class="plan basic-plan" for="rbr_127">
                                      <input type="radio" name="plan" id="rbr_127" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>Yes</span>
                                        </div>
                                      </div>
                                    </label><br>
                                    <label class="plan basic-plan" for="rbr_128">
                                      <input type="radio" name="plan" id="rbr_128" />
                                      <div class="plan-content">
                                        <div class="plan-details">
                                          <span>No</span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>

                                  <div class="button_div">
                                    <button class="btn btn-primary next-step">Next</button>
                                  </div>
                                  <div><button class="back_btn prev-step" id="back_zip">< Back</button></div>
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
