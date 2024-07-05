<?php include_once ("include/header.php")?>
   
    
<style>
   .banner__area-two
   {
   padding: 0px;
   padding-top: 50px;
   min-height: 0px;
   padding-bottom: 25px;
   text-align: center;
   background: #868e9f47;
   }
   .banner__content-two p {
   margin-bottom: 30px;
   width: 100%;
   font-size: 25px;
   font-weight: 600;
   }
   .contact__form-wrap form .form-grp input 
   {
   display: flex ;
   }
   .error  {
    color: red;
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
    padding: 1px 7px;
    font-weight: 700;
    font-size: 20px;
}
</style>
<!-- main-area -->
<main class="fix">
   <!-- breadcrumb-area -->
   <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/contactus-banner.jpg">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="breadcrumb__content">
                  <h2 class="title">Contact Us</h2>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb-area-end -->
   <!-- banner-area -->
   <section class="banner__area-two banner__bg-two">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="banner__content-two">
                  <h2 class="title">Compare Mortgage Offers</h2>
                  <p>Start the process by filling out one of our forms to find out what you may qualify for!</p>
                  <a class='btn border-btn' href='#'>I Want My Mortgage Rate Quote!</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- banner-area-end -->
   <!-- contact-area -->
   <section class="contact__area">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-5">
               <div class="contact__content">
                  <div class="section-title mb-35">
                     <h2 class="title">How can we help you?</h2>
                  </div>
                  <div class="contact__info">
                     <ul class="list-wrap">
                        <li>
                           <div class="icon">
                              <i class="flaticon-pin"></i>
                           </div>
                           <div class="content">
                              <h4 class="title">Address</h4>
                              <p>12150 SW 128th Ct, <br>Miami, Florida 33186</p>
                           </div>
                        </li>
                        <li>
                           <div class="icon">
                              <i class="flaticon-phone-call"></i>
                           </div>
                           <div class="content">
                              <h4 class="title">Phone</h4>
                              <a href="tel:(888) 241-3106">(888) 241-3106</a>
                           </div>
                        </li>
                        <li>
                           <div class="icon">
                              <i class="flaticon-mail"></i>
                           </div>
                           <div class="content">
                              <h4 class="title">E-mail</h4>
                              <a href="mailto:info@ollender.com">info@ollender.com</a>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-7">
               <div class="contact__form-wrap">
                  <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                     <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                  </div>
                  <h2 class="title">Give Us a Message</h2>
                  <p>Your email address will not be published. Required fields are marked *</p>
                  <form id="contactForm"  >
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-grp">
                              <input type="text" name="name" id="firstName" placeholder="First Name">
                              <span class = "error" id="error_name"></span>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-grp">
                              <input type="text" name="lastName" id="lastName" placeholder="Last Name">
                              <span class = "error" id="error_lastname"></span>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-grp">
                              <input type="text" name="email" id="email" placeholder="Email">
                              <span class = "error" id="error_email"></span>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-grp">
                              <input type="tel" oninput="phoneFormat(this)" name="mobileNumber" id="mobileNumber" placeholder="Phone" maxlength="14">
                              <span class = "error" id="error_mobile"></span>
                           </div>
                        </div>
                     </div>
                     <div class="form-grp">
                        <textarea name="message" id="Message" placeholder="Message"></textarea>
                     </div>
                     <div class="form-grp checkbox-grp">
                     <input type="checkbox" id="agree" name="agree" >
                     <label for="checkbox">By providing your information, you agree to our <a href="" data-toggle="modal" data-target="#basicModal">Terms Of Use</a>.</label>
                        
                       
                        
                     </div>
                     <div class="form-grp">
                     <span class = "error" id="error_agree"></span>
                     </div>
                     
                     <button type="submit" class="btn"  id="saveMessage"  >Send Message</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- contact-area-end -->
</main>
<!-- main-area-end -->
<?php include_once ("include/footer.php") ?>
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
  $(document).ready(function() {
    $('#contactForm').on('submit', function(event) {
        event.preventDefault();

        // Validate form inputs
        var isValid = true;
        var firstName = $('#firstName').val().trim();
        var lastName = $('#lastName').val();
        var email = $('#email').val();
        var mobileNumber = $('#mobileNumber').val();
        var message = $('#Message').val(); 
        var agree = $('#agree').is(':checked');    
        if (!agree) {
            isValid = false;
            
            $('#error_agree').html('You must agree to the terms and conditions');
        }else{ $('#error_agree').html(''); }

        var nameRegex = /^[A-Za-z]+$/;
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 
        var mobileRegex = /^(\+1\s?)?(\([2-9]\d{2}\)|[2-9]\d{2})[\s.-]?\d{3}[\s.-]?\d{4}$/;    

        if (firstName === '') {
            isValid = false;
            
            $('#error_name').html('first name is required');
            $('#firstName').val("");
        }else if (!nameRegex.test(firstName)) {
            isValid = false;
            $('#error_name').html('please enter only characters ');
            $('#firstName').val("");
        }      
        
        if (lastName == '') {
            isValid = false;
            $('#error_lastname').html('last name is required');
            $('#lastName').val("");
        }else if (!nameRegex.test(lastName)) {
            isValid = false;
            $('#error_lastname').html('please enter only characters');
            $('#lastName').val("");
        }
        if (email == '') {
            isValid = false;
            $('#error_email').html('email is required');
            $('#email').val("");
        }else if (!emailRegex.test(email)) {
            isValid = false;
            $('#error_email').html('Please enter a valid email address');
            $('#email').val("");
            
        }
        if (mobileNumber === '') {
            isValid = false;
           
            $('#error_mobile').html('mobile number is required');
        } else if (!mobileRegex.test(mobileNumber)) {
            isValid = false;
            
            $('#error_mobile').html('mobile number must be exactly 11 digits');
        }
       
        

       
        if (isValid)
        {
           
                    $.ajax({
                    url: "SaveContactMsg.php",
                    type: "POST",
                    data: {
                        firstName: firstName,
                        lastName: lastName,
                        email: email,
                        mobileNumber: mobileNumber, 
                        message : message,
                        agree : agree           
                    },
                    cache: false,
                    success: function(dataResult){
                        var dataResult = JSON.parse(dataResult);
                        if(dataResult.statusCode==200){
                            $("#butsave").removeAttr("disabled");
                            $('#contactForm').find('input:text').val('');
                            $('#Message').val("");
                            $("#success").show();
                            $('#success').html('Recored Saved successfully !');                         
                        }
                        else if(dataResult.statusCode==201){
                            
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