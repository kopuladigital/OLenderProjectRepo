<?php include_once ("include/header.php") ?>
<style>
  .services__content-four .title {
    font-size: 30px;
    font-weight: 600;
    margin-bottom: 10px;
    color: #fff;
}
.checker-block {
    width: 100%;
    margin: 0;
    clear: both;
    border: none;
    outline: none;
    text-decoration: none;
    background: rgb(255 255 255 / 91%);
    padding: 15px;
    padding-bottom: 8px;
    border-radius: 6px;
}
.checker-block .titel-text {
width: 100%;
padding: 0 0 8px 0;
margin: 0;
font-size: 12px;
font-weight: 600;
clear: both;
line-height: 12px;
color: #000;
}
.checker-inner-box {
width: 100%;
display: flex;
justify-content: flex-start;
align-items: center;
padding: 0;
margin: 0;
border: none;
outline: none;
text-decoration: none;
}
.checker-inner-box .sine {
padding: 5px 8px;
font-weight: bold;
font-size: 20px;
border: none;
outline: none;
}
.checker-inner-box .checker-box {
width: 60px;
height: auto;
padding: 0;
margin: 0;
border: none;
outline: none;
text-decoration: none;
max-width: 60px;
text-align: center;
}

.checker-inner-box .form-control, .checker-inner-box .checker-box input {
display: block;
width: 100%;
padding: .375rem .75rem;
font-size: 1rem;
font-weight: 400;
line-height: 1.5;
color: #212529;
background-color: #fff;
background-clip: padding-box;
border: 1px solid #ced4da;
-webkit-appearance: none;
-moz-appearance: none;
appearance: none;
border-radius: .25rem;
transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
background-color: #ffffff !important;
text-align: center;
box-shadow: none;
}

.checker-inner-box .resualt-box {
width: 100%;
max-width: 100px;
padding: 0;
margin: 0;
border: none;
outline: none;
}
.services__item-four_1 {
        max-width: 700px;
    margin: auto;
    background: #00143d;
    padding: 40px;
    border-radius: 15px;
}
.quote-form h2
{
    margin-bottom: 25px;
    border-bottom: 1px solid #00000024;
    border-bottom-style: dashed;
    padding-bottom: 10px;
}
.form-group input
{
        width: 100%;
    border: 1px solid #38383842;
    border-radius: 4px;
    margin: 8px 0;
    outline: none;
    padding: 8px;
    box-sizing: border-box;
    transition: 0.3s;
    height: 43px;
    margin-top: 0px;
    margin-bottom: 15px;
}
.banner__bg-two {
    padding: 150px 0 100px;
}
label {
    color: #fff;
    cursor: pointer;
    font-size: var(--tg-body-font-size);
    font-weight: var(--tg-fw-regular);
}
.ckeck_by
{
    display: flex;
    align-items: baseline;
}
.ckeck_by input
{
    margin-right: 8px;
}
</style>
    <!-- main-area -->
    <main class="fix">

        <!-- banner-area -->
        <section class="banner__area-two banner__bg-two" data-background="assets/img/banner_bg_000.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="services__item-four_1 shine-animate-item">
                        <div class="services__content-four">
                            <form action="" method="post" class="quote-form">
                            <h2 class="title">Get a FREE Personalized Rate Quote Now!</h2>
                              <div class="row">
                                <div class="col-md-6">
                                    <div class="quform-element form-group mb_15">
                                        <label for="first_name">First Name <span>*</span></label>
                                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" required="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="quform-element form-group mb_15">
                                        <label for="last_name">Last Name <span>*</span></label>
                                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="quform-element form-group mb_15">
                                        <label for="phone_number">Phone Number <span>*</span></label>
                                        <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Phone Number" required="">
                                    </div>
                                </div>
                               <div class="col-md-6">
                                    <div class="quform-element form-group mb_15">
                                        <label for="email">Email </label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="@email">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="quform-element form-group mb_15">
                                    <label for="zip_code">Zipcode <span>*</span></label>
                                    <input type="text" name="zip_code" id="zip_code" class="form-control" placeholder="Zipcode">
                                </div>
                            </div>

                            <div class="checker-block">
                                <p class="titel-text">Prove Your Humanity:</p>
                                <div class="checker-inner-box">
                                    <div class="checker-box">
                                         <input type="text" class="form-control" id="num1" name="num1" value="4" readonly="">
                                    </div>
                                    <span class="sine">+</span>
                                    <div class="checker-box">
                                        <input type="text" class="form-control" id="num2" name="num2" value="9" readonly="">
                                    </div>
                                    <span class="sine">=</span>
                                    <div class="resualt-box">
                                        <input type="text" class="form-control" id="result" name="result" placeholder="value">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="check-box check_box_b" style="    margin-top: 15px;">
                                        <div class="ckeck_by">
                                            <input type="checkbox" id="chkDisclaimer" class="radio_btn" name="chkDisclaimer" value="clicking" required="">
                                        <label for="chkDisclaimer">
                                            By providing your information, you agree to our <a href="" data-toggle="modal" data-target="#basicModal"><strong>Terms Of Use</strong></a>.
                                        </label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row row_clr" style="padding-top: 15px;  text-align: center;">

                                <div class="col-md-12">
                                <div class="quform-submit-inner">
                                    <input type="hidden" id="form_submit_ip" name="form_submit_ip" value="103.165.115.152">
                                    <input type="submit" name="submit" value="Submit" class="btn">
                                </div>
                                </div>
                            </div>
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-area-end -->
       
    </main>
    <!-- main-area-end -->

<?php include_once ("include/footer.php") ?>
 