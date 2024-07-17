<?php include_once ("include/header.php") ?>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css'>
<style>
  .services__content-four .title {
    font-size: 30px;
    font-weight: 600;
    margin-bottom: 10px;
    color: #00143d;
}
.checker-block {
        width: 100%;
    margin: 0;
    clear: both;
    border: none;
    outline: none;
    text-decoration: none;
    background: rgb(132 140 158 / 15%);
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
        border: 1px solid #0000002b;
    padding: 40px;
    border-radius: 15px;
        background: #fff;
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
    border: 1px solid #38383842;
    border-radius: 0px;
    margin: 8px 0;
    outline: none;
    box-sizing: border-box;
    transition: 0.3s;
    height: 43px;
    margin-top: 0px;
    margin-bottom: 15px;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: 1px solid #0000005e;
    padding: 0px;
}
.banner__bg-two {
    padding: 150px 0 100px;
}
label {
    color: #00143d;
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
/* gaurav style */

.hide
{
  display:none;
}
.margin-t12rem
{
  margin-top: 12rem;
}
.error{
    color:white;
}
/* end here */
.last_section
{
        padding: 150px 0 100px;
}
.last_section .call_bnt
{
        max-width: 700px;
     margin: auto;
    text-align: center;
}
.call_bnt h3
{
        font-size: 25px;
    margin-bottom: 30px;
}
.call_bnt a span
{
        background: #00143d;
    padding: 10px 20px;
    border-radius: 6px;
    font-size: 24px;
    font-weight: 700;
    color: #fff;
}
.call_bnt p {
    max-width: 580px;
    margin: auto;
    margin-top: 30px;
    color: #000;
    border: 1px solid #0000001c;
    padding: 10px 30px;
    border-radius: 10px;
    border-style: dashed;
}
@media only screen and (max-width: 767px) {
    .services__item-four_1 {
    padding: 10px;
}
.call_bnt a span {
    padding: 10px 10px;
    font-size: 20px;
}
}
.form-control:focus {
    color: var(--bs-body-color);
    background-color: var(--bs-body-bg);
    border-color: #064ad8;
    outline: 0;
    box-shadow: 0 0 0 .25rem rgb(13 110 253 / 0%);
}

.form-control {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: var(--bs-body-color);
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: var(--bs-body-bg);
    background-clip: padding-box;
    border: var(--bs-border-width) solid #cbcbcb;
    border-radius: 0px;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    height: 43px;
    margin-top: 0px;
    margin-bottom: 15px;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: 1px solid #0000005e;
    padding: 0px;
}
.radio
{
	    display: flex;
    align-items: center;
}
.radio label 
{
	    display: flex;
    align-items: center;
        margin-right: 20px;
            font-size: 17px;
            font-weight: 600;
}
.radio input 
{
	    margin: 0px;
    margin-right: 6px;
    width: 20px;
}

.radio_2 label 
{
	    display: flex;
    align-items: center;
        margin-right: 20px;
            font-size: 17px;

}
.radio_2 input 
{
	    margin: 0px;
    margin-right: 6px;
    width: 20px;
}
</style>
    <!-- main-area -->
    <main class="fix">

        <!-- banner-area -->
        <section class="banner__area-two banner__bg-two" data-background="assets/img/banner_bg_000.jpg" id="first-div">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="services__item-four_1 shine-animate-item">
                        <div class="services__content-four">
                           
                            <h2 class="title">Let’s schedule a 15-minute call with our U.S. Commercial Lending Specialist.</h2>
                            <p>We look forward to helping you achieve your mortgage goals.</p>
                              <div class="row">
                                <div class="col-md-6">
                                    <div class="quform-element form-group mb_15">
                                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" >
                                        <span class="error" id="error-first-name"></span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="quform-element form-group mb_15">
                                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" >
                                        <p class="error" id="error-last-name"></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">                                
                               <div class="col-md-6">
                                    <div class="quform-element form-group mb_15">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="@email">
                                        <p class="error" id="error-email"></p> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="quform-element form-group mb_15">
                                        <input type="text" id="mobile_code" class="form-control" placeholder="Phone Number" name="name">
                                        <p class="error" id="error-phone-number"></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">                                
                               <div class="col-md-12">
                                    <div class="quform-element form-group mb_15">
                                        <input type="text" name="address" id="address" class="form-control" placeholder="Street Address">
                                        <p class="error" id="error-email"></p> 
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="quform-element form-group mb_15">
                                        <input type="text" id="" class="form-control" placeholder="City" name="name">
                                        <p class="error" id="error-phone-number"></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="quform-element form-group mb_15">
                                        <input type="text" id="" class="form-control" placeholder="State" name="name">
                                        <p class="error" id="error-phone-number"></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="quform-element form-group mb_15">
                                        <input type="text" id="" class="form-control" placeholder="Zipcode" name="name">
                                        <p class="error" id="error-phone-number"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="quform-element form-group mb_15">
                                    <select class="form-control" name="" id="">
									  <option disabled="" selected="" value="">Language</option>
									  <option value="English">English</option>
									  <option value="Mandarin">Mandarin</option>
									  <option value="Spanish">Spanish</option>
									</select>
                                    <p class="error" id="error-zip"></p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="quform-element form-group mb_15">
                                    <select class="form-control" name="" id="">
									  <option selected="" disabled="" value="">Nationality</option>
									  <option value="U.S. Citizen">U.S. Citizen</option>
									  <option value="Foreign National">Foreign National</option>
									</select>
                                    <p class="error" id="error-zip"></p>
                                </div>
                            </div>
                            </div>

                            <div class="col-md-12">
                                <div class="quform-element form-group mb_15">
                                    <div class="radio">
									  <label>
									    <input type="radio" name="action" value="green"/>
									    Purchase
									  </label>
									  <label>
									    <input type="radio" name="action" value="red"/>
									    Refinance
									  </label>
									</div>
                                    <p class="error" id="error-zip"></p>
                                </div>
                            </div>

                            <!-- ===================Purchase================ -->
                            <div class="row">
                            <div class="col-md-12">
                                <div class="quform-element form-group mb_15">
                                    <h5>When do you plan to purchase your home?</h5>
                                    <div class="radio_2">
									  <label>
									    <input type="radio" name="action" value="radio_b_1"/>
									    In Contract
									  </label>
									  <label>
									    <input type="radio" name="action" value="radio_b_2"/>							    
											I’m looking now and may need a Pre-Approval Letter
									  </label>
									  <label>
									    <input type="radio" name="action" value="radio_b_3"/>							    
											I am researching my options
									  </label>
									</div>
                                    <p class="error" id="error-zip"></p>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="quform-element form-group mb_15">
                                    <h5>Would you like an introduction to a real-estate agent?</h5>
                                    <div class="radio">
									  <label>
									    <input type="radio" name="action" value="radio_b_4"/>
									    Yes
									  </label>
									  <label>
									    <input type="radio" name="action" value="radio_b_5"/>							    
											No
									  </label>
									</div>
                                    <p class="error" id="error-zip"></p>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="quform-element form-group mb_15">
                                	<h5>Which State are you looking to purchase a home?</h5>
                                    <select class="form-control" name="" id="">
									  <option disabled="" selected="" value="">Please select state</option><option value="New York">New York</option><option value="California">California</option><option value="Texas">Texas</option><option value="Florida">Florida</option><option value="Washington">Washington</option><option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="Georgia">Georgia</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virginia">Virginia</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option>
									</select>
                                    <p class="error" id="error-zip"></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="quform-element form-group mb_15">
                                	<h5>Which city are you looking to purchase in?</h5>
                                    <input type="text" name="purchase" id="purchase" class="form-control" placeholder="purchase">
                                    <p class="error" id="error-email"></p> 
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="quform-element form-group mb_15">
                                    <h5>Type of property</h5>
                                    <div class="radio">
									  <label>
									    <input type="radio" name="action" value="radio_b_6"/>
									    Single-Unit
									  </label>
									  <label>
									    <input type="radio" name="action" value="radio_b_7"/>							    
											Multi-Unit (2-4)
									  </label>
									</div>
                                    <p class="error" id="error-zip"></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="quform-element form-group mb_15">
                                    <h5>Use of property</h5>
                                    <div class="radio">
									  <label>
									    <input type="radio" name="action" value="radio_b_8"/>
									    Investment
									  </label>
									  <label>
									    <input type="radio" name="action" value="radio_b_9"/>							    
											Primary
									  </label>
									</div>
                                    <p class="error" id="error-zip"></p>
                                </div>
                            </div>
                            </div>
                            <!-- ===================Purchase================ -->

                            <!-- ===================Refinance================ -->
                            <div class="row">
                            <div class="col-md-12">
                                <div class="quform-element form-group mb_15">
                                    <h5>What is the purpose of your Refinance?</h5>
                                    <div class="radio_2">
									  <label>
									    <input type="radio" name="action" value="radio_b0_1"/>
									    Lower my rate
									  </label>
									  <label>
									    <input type="radio" name="action" value="radio_b0_2"/>							    
											Pull cash out of my equity
									  </label>
									  <label>
									    <input type="radio" name="action" value="radio_b0_3"/>							    
											Shorten my loan term
									  </label>
									</div>
                                    <p class="error" id="error-zip"></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="quform-element form-group mb_15">
                                	<h5>Which State are you looking to refinance a home in？</h5>
                                    <select class="form-control" name="" id="">
									  <option disabled="" selected="" value="">Please select state</option><option value="New York">New York</option><option value="California">California</option><option value="Texas">Texas</option><option value="Florida">Florida</option><option value="Washington">Washington</option><option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="Georgia">Georgia</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virginia">Virginia</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option>
									</select>
                                    <p class="error" id="error-zip"></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="quform-element form-group mb_15">
                                    <h5>Type of property</h5>
                                    <div class="radio">
									  <label>
									    <input type="radio" name="action" value="radio_b0_6"/>
									    Single-Unit
									  </label>
									  <label>
									    <input type="radio" name="action" value="radio_b0_7"/>							    
											Multi-Unit (2-4)
									  </label>
									</div>
                                    <p class="error" id="error-zip"></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="quform-element form-group mb_15">
                                    <h5>Use of property</h5>
                                    <div class="radio">
									  <label>
									    <input type="radio" name="action" value="radio_b0_8"/>
									    Investment
									  </label>
									  <label>
									    <input type="radio" name="action" value="radio_b0_9"/>							    
											Primary
									  </label>
									</div>
                                    <p class="error" id="error-zip"></p>
                                </div>
                            </div>
                            </div>
                            <!-- ===================Refinance================ -->

                            <div class="checker-block">
                                <p class="titel-text">Prove Your Humanity:</p>
                                <div class="checker-inner-box">
                                    <div class="checker-box">
                                         <input type="text" class="form-control" id="num1" name="num1" value="<?php echo(rand(1,9)); ?>" readonly="">
                                    </div>
                                    <span class="sine">+</span>
                                    <div class="checker-box">
                                        <input type="text" class="form-control" id="num2" name="num2" value="<?php echo(rand(1,9)); ?>" readonly="">
                                    </div>
                                    <span class="sine">=</span>
                                    <div class="resualt-box">
                                        <input type="text" class="form-control numbers" id="result" name="result" placeholder="value">
                                    </div>
                                    
                                </div>
                               
                            </div>
                            <span class="error" id="error-result"></span>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="check-box check_box_b" style="    margin-top: 15px;">
                                        <div class="ckeck_by">
                                        <input id="agree" type="checkbox" name="agree" value="Yes" >
                                        <label for="chkDisclaimer">
                                            By providing your information, you agree to our <a href="" data-toggle="modal" data-target="#basicModal"><strong>Terms Of Use</strong></a>.
                                        </label>
                                        </div>
                                    </div>
                                    <div><span class="error" id="error-agree"></span></div>

                                </div>
                            </div>

                            <div class="row row_clr" style="padding-top: 15px;  text-align: center;">

                                <div class="col-md-12">
                                <div class="quform-submit-inner">
                                    <input type="hidden" id="form_submit_ip" name="form_submit_ip" value="103.165.115.152">
                                    
                                    <button class="btn btn-primary" id="personalized-quote">Submit</button>
                                </div>
                                </div>
                            </div>
                       
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  

        <section class="last_section" id="welcome" data-background="assets/img/banner_bg_000.jpg">
            <div class="thank-you-message card call_bnt" style="padding: 40px 40px;" >
                <h3 style="">Thank you for showing your interest. By submitting the information you allow us to contact you back. Our team of experts will contact you shortly</h3>
                <a href="tel:(888) 241-3106"><span>Call Us: (888) 241-3106</span></a>
                <p>By clicking & submitting this form you authorise us to call you back even if your number is in National or Federal Do Not Call List</p>
            </div>      
        </section>
        
        <!-- banner-area-end -->
       
    </main>
    <!-- main-area-end -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js'></script>
    <script>
    $(document).ready(function(){
         
        $('.numbers').keypress(function (e) {
         if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
        });
        document.getElementById('phone_number').addEventListener('input', function (e) {
        var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
        e.target.value = !x[2] ? x[1] : '(' + x[1] + ')'+'-'+ x[2] + (x[3] ? '-' + x[3] : '');
        });
       
         $("#personalized-quote").click(function(){  
                    
            first_name = $('#first_name').val();
            last_name = $('#last_name').val();
            phone_number = $('#phone_number').val();
            address = $('#email').val();
            result = $('#result').val();
            zip_code = $('#zip_code').val();
            var num1 = parseInt($('#num1').val());
            var num2 = parseInt($('#num2').val());
            var num3 = num1 + num2;
            // alert(num3);
            var zip_code_lenght = $('#zip_code').val().length;
            var phone_length =$('#phone_number').val().length;       
            agree = $('#agree').is(':checked');
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var regex = /^[A-Za-z\s]+$/;
             var isValid = true; 
            if(!first_name){
                isValid = false;
                $('#error-first-name').html('this field required');       
            }else if(!regex.test(first_name))
            { 
                isValid = false;
                $('#error-first-name').html('Name must not contain numbers or special characters');
            }else if(!last_name){
                isValid = false;
                $('#error-last-name').html('this field required');       
            }else if(!regex.test(last_name))
            { 
                isValid = false;
                $('#error-last-name').html('Name must not contain numbers or special characters');
            }else if(!phone_number){
                isValid = false;
                $('#error-phone-number').html('this field required'); 
            }else if(phone_length != 14){
                isValid = false;
                $('#error-phone-number').html('Please Enter  Valid Phone Number');
            }
            else if(!address){
                isValid = false;
                $('#error-email').html('this field required'); 
            }else if(!emailRegex.test(address)){
                isValid = false;
                $('#error-email').html('Please enter a valid email address'); 
            }else if(!zip_code){
                $('#error-zip').html('This field required');
            }else if(zip_code_lenght != 5){
                $('#error-zip').html('plese enter 5 digit zip code');
            }
            else if(!result){
                
                isValid = false;
                $('#error-result').html('this field required');
            }else if(result != num3){
                isValid = false;
                $('#error-result').html('plese check result');
            }
            else if(!agree){
                isValid = false;
                $('#error-agree').html('this field required');
            }
            else{
                // alert("all done");
                
                $.ajax({
                        url: "save_personalized_rate_quote.php",
                        type: "POST",
                        data: {
                            first_name: first_name,
                            last_name : last_name,
                            phone_number: phone_number,                            
                            address: address, 
                            zip_code : zip_code,
                            result : result,
                            agree : agree
                                 
                        },
                        cache: false,
                        success: function(dataResult){
                            var dataResult = JSON.parse(dataResult);
                            if(dataResult.statusCode==200){
                                
                                
                                $("#first-div").hide();
                               
                                $("#welcome").show();
                                //  $('#success').html('Recored Saved successfully !');   
                                        
                            }
                            else if(dataResult.statusCode==201){
                                $("#first-div").hide();
                                // this is error message
                                alert("Plz check connection");
                                
                                
                            }
                            
                        }
                    });
             }
        });
        
        
    });
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js'></script>
<script>
	// -----Country Code Selection
$("#mobile_code").intlTelInput({
	initialCountry: "in",
	separateDialCode: true,
	// utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
});
</script>
<?php include_once ("include/footer.php") ?>
 