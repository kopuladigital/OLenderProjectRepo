<?php include_once ("include/header.php") ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="assets/css/uselink-form.css">
<style>
   .footer-info-list .list-wrap li {
   display: flex;
   align-items: flex-start;
   gap: 10px;
   margin-bottom: 20px;
   line-height: 10px;
   }
   .scroll__top.open {
   bottom: 30px;
   line-height: 16px;
   padding: 0px;
   }
   .data-hide{
      display:none;
   }
   .error{
    color:red;
   }
   .last_section {   
    margin-top: 100px;    
  }
  .mr-4rem{
    margin-right: 4rem;
  }
.last_section p
{
   color: #000;
    margin-top: 25px;
    border: 1px solid #0000001a;
    padding: 15px;
    border-radius: 10px;
    border-style: dashed;
    margin-bottom: 0px;
}
.last_section a {
    background: #0647ce;
    padding: 14px 35px;
    border-radius: 5px;
    color: #fff;
    font-size: 22px;
    font-weight: 700;
}
@media (min-width: 576px) {
    .modal-dialog {
        max-width: 500px;
        margin: 7.75rem auto !important;
    }
}
.modal-body p
{
  color: #000;
  font-size: 14px;
}
.btn_clls
{
     background: #00000030;
    color: #000;
    border: none;
    border-radius: 50px;
    padding: 3px 7px;
    font-weight: 700;
    font-size: 20px;
}
</style>
<!-- main-area -->
<main class="fix">
                 
    <section class="last_section mt-4" >
                    <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                     <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                  </div>
   </section>
   <!-- ======================Step-1================= -->
   <section class="rang-form" id="amount-data"style=" display:none;" >
      <div class="request__bg-two" data-background="assets/img/bg-desktop.svg"></div>
      <div class="container">
         <div class="row">
            <div class="range-slider">
               <h3 class="range-slider__title">Choose your debt amount</h3>
               <p class="range-slider__value">$20,000</p>
               <div class="range-slider__slider">
                  <input
                     type="range"
                     min="1000"
                     max="100000"
                     value="25000"
                     class="slider"
                     id="rangeSlider"
                     />
                  <div class="amount_cls">
                     <p>$1,000</p>
                     <p>$100,000+</p>
                  </div>
                  <button type="button" data-action="next" id="first_click"> Continue </button>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- ======================Step-1================= -->
   <!-- ======================Step-2================= -->
   <section class="rang-form" style=" display:none;" id="amount-type">
      <div class="request__bg-two" data-background="assets/img/bg-desktop.svg"></div>
      <div class="container">
         <div class="row">
            <fieldset id="product-purchase" class="mt-3 form__field">
               <legend>
                  <h3 class="range-slider__title">Type of debt</h3>
               </legend>
               <label class="form__choice-wrapper" style="text-align: left; margin-bottom: 10px;margin-left: 34%;">
               <input type="checkbox" name="product-purchase" class="chk" value="Credit Card">
               <span>Credit Card</span>
               </label>
               <label class="form__choice-wrapper" style="text-align: left; margin-bottom: 10px;margin-left: 34%;">
               <input type="checkbox" name="product-purchase" class="chk" value="Personal">
               <span>Personal</span>
               </label>
               <label class="form__choice-wrapper" style="text-align: left; margin-bottom: 10px;margin-left: 34%;">
               <input type="checkbox" name="product-purchase" class="chk" value="Medical">
               <span>Medical</span>
               </label>
               <button type="button" data-action="back" id="second_back"> Back </button>
               <button type="button" data-action="next" id="second_click"> Continue </button>
               
            </fieldset>
         </div>
      </div>
   </section>
   <!-- ======================Step-2================= -->
   <!-- ======================Step-3================= -->
   <div class="mx-auto container" style=" display:none;" id="steps-data">
      <div class="request__bg-two" data-background="assets/img/bg-desktop.svg">
      </div>
      <!-- Progress Form -->
      <form id="progress-form" class="p-4 progress-form" action="" lang="en" novalidate>
         <!-- Step Navigation -->
         <div class="d-flex align-items-start mb-3 sm:mb-5 progress-form__tabs" role="tablist">
            <button id="progress-form__tab-1" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-1" aria-selected="true">
            <span class="d-block step" aria-hidden="true">Debt Estimate</span>
            </button>
            <button id="progress-form__tab-2" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-2" aria-selected="false" tabindex="-1" aria-disabled="true">
            <span class="d-block step" aria-hidden="true">Personalization</span>
            </button>
            <button id="progress-form__tab-3" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-3" aria-selected="false" tabindex="-1" aria-disabled="true">
            <span class="d-block step" aria-hidden="true">Results</span>
            </button>
         </div>
         <!-- / End Step Navigation -->
         <!-- Step 1 -->
         <fieldset>
            <section id="progress-form__panel-1" role="tabpanel" aria-labelledby="progress-form__tab-1" tabindex="0">
               <div class="mt-3 sm:mt-0 form__field">
                  <h3 class="range-slider__title" style="text-align: center;">What state do you live in?</h3>
                  <label for="address-state">
                  State
                  <span data-required="true" aria-hidden="true"></span>
                  </label>
                  <select id="addressState" name="address-state" autocomplete="shipping address-level1" required>
                     <option value="" disabled selected>Please select</option>
                     <option value="AL">Alabama</option>
                     <option value="AK">Alaska</option>
                     <option value="AZ">Arizona</option>
                     <option value="AK">Arkansas</option>
                     <option value="CA">California</option>
                     <option value="CO">Colorado</option>
                     <option value="CT">Connecticut</option>
                     <option value="DE">Delaware</option>
                     <option value="FL">Florida</option>
                     <option value="GA">Georgia</option>
                     <option value="HI">Hawaii</option>
                     <option value="ID">Idaho</option>
                     <option value="IL">Illinois</option>
                     <option value="IN">Indiana</option>
                     <option value="IA">Iowa</option>
                     <option value="KS">Kansas</option>
                     <option value="KY">Kentucky</option>
                     <option value="LA">Louisiana</option>
                     <option value="ME">Maine</option>
                     <option value="MD">Maryland</option>
                     <option value="MA">Massachusetts</option>
                     <option value="MI">Michigan</option>
                     <option value="MN">Minnesota</option>
                     <option value="MS">Mississippi</option>
                     <option value="MO">Missouri</option>
                     <option value="MT">Montana</option>
                     <option value="NE">Nebraska</option>
                     <option value="NV">Nevada</option>
                     <option value="NH">New Hampshire</option>
                     <option value="NJ">New Jersey</option>
                     <option value="NM">New Mexico</option>
                     <option value="NY">New York</option>
                     <option value="NC">North Carolina</option>
                     <option value="ND">North Dakota</option>
                     <option value="OH">Ohio</option>
                     <option value="OK">Oklahoma</option>
                     <option value="OR">Oregon</option>
                     <option value="PA">Pennsylvania</option>
                     <option value="RI">Rhode Island</option>
                     <option value="SC">South Carolina</option>
                     <option value="SD">South Dakota</option>
                     <option value="TN">Tennessee</option>
                     <option value="TX">Texas</option>
                     <option value="UT">Utah</option>
                     <option value="VT">Vermont</option>
                     <option value="VA">Virginia</option>
                     <option value="WA">Washington</option>
                     <option value="DC">Washington DC</option>
                     <option value="WV">West Virginia</option>
                     <option value="WI">Wisconsin</option>
                     <option value="WY">Wyoming</option>
                  </select>
               </div>
               
               <div class="d-flex align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
                  <button type="button" id="form_first" class="mr-4rem">
                  Back
                  </button>
                  <button type="button" data-action="next" class="next-form ">
                  Continue
                  </button>
                  

               </div>
            </section>
         </fieldset>
         <!-- / End Step 1 -->
         <!-- Step 2 -->
         <fieldset>
            <section id="progress-form__panel-2" role="tabpanel" aria-labelledby="progress-form__tab-2" tabindex="0" hidden>
               <h3 class="range-slider__title" style="text-align: center;">Your Information</h3>
               <div class="mt-3 sm:mt-0 form__field">
                  <label for="first-name">
                  First name
                  <span data-required="true" aria-hidden="true"></span>
                  </label>
                  <input id="first_name" type="text" name="first_name" autocomplete="given-name" required>
               </div>
               <div class="mt-3 sm:mt-0 form__field">
                  <label for="last-name">
                  Last name
                  <span data-required="true" aria-hidden="true"></span>
                  </label>
                  <input id="lastName" type="text" name="lastName" autocomplete="family-name" required>
               </div>
               <div class="mt-3 form__field">
                  <label for="phone-number">
                  Phone number
                  <span data-required="true" aria-hidden="true"></span>
                  </label>
                  <input id="phone_number" type="tel" oninput="phoneFormat(this)" maxlength="14" name="phone_number" autocomplete="tel" inputmode="tel" required>
               </div>
               <div class="mt-3 form__field">
                  <label for="email-address">
                  Email address
                  <span data-required="true" aria-hidden="true"></span>
                  </label>
                  <input id="email_address" type="email" name="email_address" autocomplete="email" inputmode="email" required>
               </div>
               <div class="d-flex align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
                 <button type="button" data-action="prev" class="prev mr-4rem" >
                  Back
                  </button>
                  <button type="button" data-action="next" class="next-form ">
                  Continue
                  </button>
                  
                  
               </div>
            </section>
         </fieldset>
         <!-- / End Step 2 -->
         <!-- Step 3 -->
         <fieldset>
            <section id="progress-form__panel-3" role="tabpanel" aria-labelledby="progress-form__tab-3" tabindex="0" hidden>
               <h3 class="range-slider__title" style="text-align: center;">See your results</h3>
               <div class="mt-3 form__field" style="padding:0px;">
                  <label for="address">
                  Address
                  <span data-required="true" aria-hidden="true"></span>
                  </label>
                  <input id="address" type="text" name="address" autocomplete="shipping address-line1" required>
               </div>
               <div class="mt-3 form__field" style="padding:0px;">
                  <label for="address-2">
                  Apartment or suite (optional)
                  </label>
                  <input id="address_2" type="text" name="address_2" autocomplete="shipping address-line2">
               </div>
               <div class="sm:d-grid sm:grid-col-3 sm:mt-3">
                  <div class="mt-3 sm:mt-0 form__field" style="padding:0px;">
                     <label for="address-city">
                     City
                     <span data-required="true" aria-hidden="true"></span>
                     </label>
                     <input id="address_city" type="text" name="address_city" autocomplete="shipping address-level2" required>
                  </div>
                  <div class="mt-3 sm:mt-0 form__field" style="padding:0px;">
                     <label for="address-state">
                     State
                     <span data-required="true" aria-hidden="true"></span>
                     </label>
                     <select id="address_state" name="address-state" autocomplete="shipping address-level1" required>
                        <option value="" disabled selected>Please select</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AK">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="DC">Washington DC</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                     </select>
                  </div>
                  <div class="mt-3 sm:mt-0 " style="padding:0px;">
                     <label for="address-zip">
                     Zip Code
                     <span data-required="true" aria-hidden="true"></span>
                     </label>
                     <input id="address_zip" type="text" name="address-zip" maxlength="5" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                     <p class="error" id="zip-error"></p> 
                   </div>
               </div>
               <div class="mt-3 " style="padding: 0px;">
                  <label for="email-address">
                  Date of Birth
                  <span data-required="true" aria-hidden="true"></span>
                  </label>
                  <input id="dob" type="date" name="date_" autocomplete="email" inputmode="email" required>
                  <p class="error" id="dob-error"></p>
               </div>
               <div class="mt-1 form__field" style="padding: 0px;margin-top: 15px !important;">
                  <label class="form__choice-wrapper">
                  <input id="agree" type="checkbox" name="email-newsletter" value="Yes"  required>
                  <span style="font-size: 15px;">By providing your information, you agree to our <a href="" data-toggle="modal" data-target="#basicModal">Terms Of Use</a>.</span>
                  </label>
               </div>
               <div class="d-flex align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
                  <button type="button" data-action="prev" class="prev mr-4rem" >
                  Back
                  </button>
                  <button type="button" data-action="next" class="next-form" id="submit_steps">
                  Click to see your results
                  </button>
               </div>
            </section>
         </fieldset>
         <!-- / End Step 3 -->
      </form>
      <!-- / End Progress Form -->
   </div>
   <!-- ======================Step-3================= -->
   <!-- ================Step-4================= -->
   <section class="last_section" id="welcome" style=" display:none;">
      <h3 style="    font-size: 25px;   margin-bottom: 30px;">Thank you for showing your interest. By submitting the information you allow us to contact you back. Our team of experts will contact you shortly</h3>
      <a href="tel:(888) 241-3106"><i class="flaticon-phone-call"></i> (888) 241-3106</a>
      <p>By clicking & submitting this form you authorise us to call you back even if your number is in National or Federal Do Not Call List</p>
   </section>
   <!-- ================Step-4================= -->
</main>
    <!-- main-area-end -->
    
    
   <script src="assets/js/stepsValidate.js"></script>
    <?php include_once ("include/footer.php") ?>
<script>
  $(document).ready(function(){
    // this is tab hide show
    $("#amount-data").show();
    
    $("#second_back").click(function(){            
            $("#amount-data").show();
            $("#amount-type").hide();
    });
    $("#form_first").click(function(){            
            $("#amount-type").show();
            $("#steps-data").hide();
    });
   
    // end here
    $('.product-purchase').click(function() {
        $('.product-purchase').not(this).prop('checked', false);
    });
    $('input:checkbox').click(function() {
        $('input:checkbox').not(this).prop('checked', false);
    });
});
   $(document).ready(function() {    
       
       $("#first_click").click(function(){
         
         var slider = $("#rangeSlider").val();  
         if(slider)
         {
            // alert(slider);
            $("#amount-data").hide();
            $("#amount-type").show();
         }
         
       }); 
       var selected_amount_type = "";
       $("#second_click").click(function(){
            // var selected_amount_type = new Array();
            
            $("input:checkbox[class=chk]:checked").is(function () {
               selected_amount_type = $(this).val();
              // selected_amount_type.push(this.value);
              
              $("#steps-data").show();
              $("#amount-type").hide();
              
            });
 
          
             
            
         
       });
       

       
     
      
       
       $("#submit_steps").click(function(){
           
            var slider = $("#rangeSlider").val();
            var isValid = true;
            // var selected_amount_type =  new Array(); 
            // $("input:checkbox[class=chk]:checked").is(function () {
            //     selected_amount_type.push(this.value);
            //     alert(selected_amount_type);  
            //  });
             console.log(selected_amount_type);   
               
             if (selected_amount_type) {  amount_type = selected_amount_type;  } else{ amount_type = "NA"; }
            //  amount_type = $("input[type=checkbox][name=product-purchase]:checked").val();
            
            var stateName = $("#addressState").val();
            var firstName = $("#first_name").val();
            var lastName = $("#lastName").val();
            var mobileNumber = $("#phone_number").val();
            var email = $("#email_address").val();
            var address = $("#address").val();
            var address2 = $("#address_2").val();
            var city = $("#address_city").val();
            var addressState = $("#address_state").val();
            var zip = $("#address_zip").val();
            var dob = $("#dob").val();
            var agree = $('#agree').is(':checked');    
            if (!agree) {
                isValid = false;             
                
                $("#submit_steps").attr("disabled", true);
                alert("You must agree to the terms and conditions");
                $("#submit_steps").attr("disabled", false);
            }
            if(!dob)
            {
              isValid = false;
              $('#dob-error').html('this field required.');
            }
            if(zip.length < 4)
            {
              isValid = false;
              $('#zip-error').html('plese enter 5 digit zip code.');
            }
            // else{  $("#submit_steps").attr("disabled", false); }
            

            if (isValid){

              $.ajax({
                    url: "saveStepsFrom.php",
                    type: "POST",
                    data: {
                        slider: slider,
                        amount_type: amount_type,
                        stateName: stateName,
                        firstName: firstName,   
                        lastName : lastName,
                        mobileNumber : mobileNumber,
                        email : email,
                        address : address,
                        address2 : address2,
                        city : city,
                        addressState : addressState,
                        zip : zip,
                        dob : dob,
                        agree : agree        
                    },
                    cache: false,
                    success: function(dataResult){
                        var dataResult = JSON.parse(dataResult);
                        if(dataResult.statusCode==200){
                            
                            $("#amount-data").hide();
                            $("#amount-type").hide();
                            $("#steps-data").hide();
                            $("#welcome").show();
                            //  $('#success').html('Recored Saved successfully !');    
                                       
                        }
                        else if(dataResult.statusCode==201){
                          $("#amount-data").hide();
                            $("#amount-type").hide();
                            $("#steps-data").hide();
                            // this is error message
                            $("#success").show();
                            $('#success').html('Error occured'); 
                            
                        }
                        
                    }
                });


            
         
           
       
            }
            
      
   }); 
  });
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
   
   
  

</script>

 