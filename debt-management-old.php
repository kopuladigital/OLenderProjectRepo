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
</style>
    <!-- main-area -->
    <main class="fix">
      <!-- ======================Step-1================= -->
        <section class="rang-form">
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
                            <p>$1,000</p> <p>$100,000+</p>
                        </div>
                        <button type="button" data-action="next"> Continue </button>
                      </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================Step-1================= -->
        <!-- ======================Step-2================= -->
        <section class="rang-form">
            <div class="request__bg-two" data-background="assets/img/bg-desktop.svg"></div>
            <div class="container">
                <div class="row">
                    <fieldset id="product-purchase" class="mt-3 form__field">
                    <legend>
                     <h3 class="range-slider__title">Type of debt</h3>
                    </legend>
                    <label class="form__choice-wrapper" style="text-align: left; margin-bottom: 10px;margin-left: 34%;">
                      <input type="checkbox" name="product-purchase" value="A">
                      <span>Credit Card</span>
                    </label>
                    <label class="form__choice-wrapper" style="text-align: left; margin-bottom: 10px;margin-left: 34%;">
                      <input type="checkbox" name="product-purchase" value="B">
                      <span>Personal</span>
                    </label>
                    <label class="form__choice-wrapper" style="text-align: left; margin-bottom: 10px;margin-left: 34%;">
                      <input type="checkbox" name="product-purchase" value="C">
                      <span>Medical</span>
                    </label>
                    <button type="button" data-action="next"> Continue </button>
                  </fieldset>
                </div>
            </div>
        </section>
        <!-- ======================Step-2================= -->

  <!-- ======================Step-3================= -->
<div class="mx-auto container">
<div class="request__bg-two" data-background="assets/img/bg-desktop.svg"></div>
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
    <section id="progress-form__panel-1" role="tabpanel" aria-labelledby="progress-form__tab-1" tabindex="0">
     <div class="mt-3 sm:mt-0 form__field">
         <h3 class="range-slider__title" style="text-align: center;">What state do you live in?</h3>
          <label for="address-state">
            State
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <select id="address-state" name="address-state" autocomplete="shipping address-level1" required>
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
        <button type="button" data-action="next">
          Continue
        </button>
      </div>
    </section>
    <!-- / End Step 1 -->

    <!-- Step 2 -->
    <section id="progress-form__panel-2" role="tabpanel" aria-labelledby="progress-form__tab-2" tabindex="0" hidden>
        <h3 class="range-slider__title" style="text-align: center;">Your Information</h3>
      <div class="mt-3 sm:mt-0 form__field">
          <label for="first-name">
            First name
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <input id="first-name" type="text" name="first-name" autocomplete="given-name" required>
        </div>

        <div class="mt-3 sm:mt-0 form__field">
          <label for="last-name">
            Last name
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <input id="last-name" type="text" name="last-name" autocomplete="family-name" required>
        </div>

        <div class="mt-3 form__field">
        <label for="phone-number">
          Phone number
          <span data-required="true" aria-hidden="true"></span>
        </label>
        <input id="phone-number" type="tel" name="phone-number" autocomplete="tel" inputmode="tel" required>
      </div>

      <div class="mt-3 form__field">
        <label for="email-address">
          Email address
          <span data-required="true" aria-hidden="true"></span>
        </label>
        <input id="email-address" type="email" name="email-address" autocomplete="email" inputmode="email" required>
      </div>

      <div class="d-flex align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
        <button type="button" data-action="next">
          Continue
        </button>
      </div>
    </section>
    <!-- / End Step 2 -->

    <!-- Step 3 -->
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
        <input id="address-2" type="text" name="address-2" autocomplete="shipping address-line2">
      </div>

      <div class="sm:d-grid sm:grid-col-3 sm:mt-3">
        <div class="mt-3 sm:mt-0 form__field" style="padding:0px;">
          <label for="address-city">
            City
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <input id="address-city" type="text" name="address-city" autocomplete="shipping address-level2" required>
        </div>

        <div class="mt-3 sm:mt-0 form__field" style="padding:0px;">
          <label for="address-state">
            State
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <select id="address-state" name="address-state" autocomplete="shipping address-level1" required>
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

        <div class="mt-3 sm:mt-0 form__field" style="padding:0px;">
          <label for="address-zip">
            Zip Code
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <input id="address-zip" type="text" name="address-zip" autocomplete="shipping postal-code" inputmode="numeric" required>
        </div>
      </div>

      <div class="mt-3 form__field" style="padding: 0px;">
        <label for="email-address">
          Date of Birth
          <span data-required="true" aria-hidden="true"></span>
        </label>
        <input id="email-address" type="date" name="date_" autocomplete="email" inputmode="email" required>
      </div>

      <div class="mt-1 form__field" style="padding: 0px;margin-top: 15px !important;">
        <label class="form__choice-wrapper">
          <input id="email-newsletter" type="checkbox" name="email-newsletter" value="Yes" checked>
          <span style="font-size: 15px;">By providing your information, you agree to our <a href="terms-of-use.php" target="_blank">Terms Of Use</a>.</span>
        </label>
      </div>

      <div class="d-flex align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
        <button type="button" data-action="next">
          Click to see your results
        </button>
      </div>
    </section>
    <!-- / End Step 3 -->
  </form>
  <!-- / End Progress Form -->

</div>
<!-- ======================Step-3================= -->

<!-- ================Step-4================= -->
<section class="last_section">
    <h3>Welcome back!</h3>
  <p>It looks like you’ve been here before. We already have your information on file.</p>
  <p style="margin-bottom: 25px;">Please call the number shown to discuss your options.</p>
  <a href="tel:(888) 241-3106"><i class="flaticon-phone-call"></i> (888) 241-3106</a>
</section>
<!-- ================Step-4================= -->
  
    </main>
    <!-- main-area-end -->

<script>
    console.clear();

function ready(fn) {
  if (document.readyState === 'complete' || document.readyState === 'interactive') {
    setTimeout(fn, 1);
    document.removeEventListener('DOMContentLoaded', fn);
  } else {
    document.addEventListener('DOMContentLoaded', fn);
  }
}

ready(function () {

  // Global Constants

  const progressForm = document.getElementById('progress-form');

  const tabItems = progressForm.querySelectorAll('[role="tab"]'),
  tabPanels = progressForm.querySelectorAll('[role="tabpanel"]');

  let currentStep = 0;

  // Form Validation

  /*****************************************************************************
   * Expects a string.
   *
   * Returns a boolean if the provided value *reasonably* matches the pattern
   * of a US phone number. Optional extension number.
   */

  const isValidPhone = val => {
    const regex = new RegExp(/^[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?$/);

    return regex.test(val);
  };

  /*****************************************************************************
   * Expects a string.
   *
   * Returns a boolean if the provided value *reasonably* matches the pattern
   * of a real email address.
   *
   * NOTE: There is no such thing as a perfect regular expression for email
   *       addresses; further, the validity of an email address cannot be
   *       verified on the front end. This is the closest we can get without
   *       our own service or a service provided by a third party.
   *
   * RFC 5322 Official Standard: https://emailregex.com/
   */

  const isValidEmail = val => {
    const regex = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);

    return regex.test(val);
  };

  /*****************************************************************************
   * Expects a Node (input[type="text"] or textarea).
   */

  const validateText = field => {
    const val = field.value.trim();

    if (val === '' && field.required) {
      return {
        isValid: false };

    } else {
      return {
        isValid: true };

    }
  };

  /*****************************************************************************
   * Expects a Node (select).
   */

  const validateSelect = field => {
    const val = field.value.trim();

    if (val === '' && field.required) {
      return {
        isValid: false,
        message: 'Please select an option from the dropdown menu.' };

    } else {
      return {
        isValid: true };

    }
  };

  /*****************************************************************************
   * Expects a Node (fieldset).
   */

  const validateGroup = fieldset => {
    const choices = fieldset.querySelectorAll('input[type="radio"], input[type="checkbox"]');

    let isRequired = false,
    isChecked = false;

    for (const choice of choices) {
      if (choice.required) {
        isRequired = true;
      }

      if (choice.checked) {
        isChecked = true;
      }
    }

    if (!isChecked && isRequired) {
      return {
        isValid: false,
        message: 'Please make a selection.' };

    } else {
      return {
        isValid: true };

    }
  };

  /*****************************************************************************
   * Expects a Node (input[type="radio"] or input[type="checkbox"]).
   */

  const validateChoice = field => {
    return validateGroup(field.closest('fieldset'));
  };

  /*****************************************************************************
   * Expects a Node (input[type="tel"]).
   */

  const validatePhone = field => {
    const val = field.value.trim();

    if (val === '' && field.required) {
      return {
        isValid: false };

    } else if (val !== '' && !isValidPhone(val)) {
      return {
        isValid: false,
        message: 'Please provide a valid US phone number.' };

    } else {
      return {
        isValid: true };

    }
  };

  /*****************************************************************************
   * Expects a Node (input[type="email"]).
   */

  const validateEmail = field => {
    const val = field.value.trim();

    if (val === '' && field.required) {
      return {
        isValid: false };

    } else if (val !== '' && !isValidEmail(val)) {
      return {
        isValid: false,
        message: 'Please provide a valid email address.' };

    } else {
      return {
        isValid: true };

    }
  };

  /*****************************************************************************
   * Expects a Node (field or fieldset).
   *
   * Returns an object describing the field's overall validity, as well as
   * a possible error message where additional information may be helpful for
   * the user to complete the field.
   */

  const getValidationData = field => {
    switch (field.type) {
      case 'text':
      case 'textarea':
        return validateText(field);
      case 'select-one':
        return validateSelect(field);
      case 'fieldset':
        return validateGroup(field);
      case 'radio':
      case 'checkbox':
        return validateChoice(field);
      case 'tel':
        return validatePhone(field);
      case 'email':
        return validateEmail(field);
      default:
        throw new Error(`The provided field type '${field.tagName}:${field.type}' is not supported in this form.`);}

  };

  /*****************************************************************************
   * Expects a Node (field or fieldset).
   *
   * Returns the field's overall validity based on conditions set within
   * `getValidationData()`.
   */

  const isValid = field => {
    return getValidationData(field).isValid;
  };

  /*****************************************************************************
   * Expects an integer.
   *
   * Returns a promise that either resolves if all fields in a given step are
   * valid, or rejects and returns invalid fields for further processing.
   */

  const validateStep = currentStep => {
    const fields = tabPanels[currentStep].querySelectorAll('fieldset, input:not([type="radio"]):not([type="checkbox"]), select, textarea');

    const invalidFields = [...fields].filter(field => {
      return !isValid(field);
    });

    return new Promise((resolve, reject) => {
      if (invalidFields && !invalidFields.length) {
        resolve();
      } else {
        reject(invalidFields);
      }
    });
  };

  // Form Error and Success

  const FIELD_PARENT_CLASS = 'form__field',
  FIELD_ERROR_CLASS = 'form__error-text';

  /*****************************************************************************
   * Expects a Node (fieldset) that contains any number of radio or checkbox
   * input elements, and a string representing the group's validation status.
   */

  function updateChoice(fieldset, status, errorId = '') {
    const choices = fieldset.querySelectorAll('[type="radio"], [type="checkbox"]');

    for (const choice of choices) {
      if (status) {
        choice.setAttribute('aria-invalid', 'true');
        choice.setAttribute('aria-describedby', errorId);
      } else {
        choice.removeAttribute('aria-invalid');
        choice.removeAttribute('aria-describedby');
      }
    }
  }

  /*****************************************************************************
   * Expects a Node (field or fieldset) that either has the class name defined
   * by `FIELD_PARENT_CLASS`, or has a parent with that class name. Optional
   * string defines the error message.
   *
   * Builds and appends an error message to the parent element, or updates an
   * existing error message.
   *
   * https://www.davidmacd.com/blog/test-aria-describedby-errormessage-aria-live.html
   */

  function reportError(field, message = 'Please complete this required field.') {
    const fieldParent = field.closest(`.${FIELD_PARENT_CLASS}`);

    if (progressForm.contains(fieldParent)) {
      let fieldError = fieldParent.querySelector(`.${FIELD_ERROR_CLASS}`),
      fieldErrorId = '';

      if (!fieldParent.contains(fieldError)) {
        fieldError = document.createElement('p');

        if (field.matches('fieldset')) {
          fieldErrorId = `${field.id}__error`;

          updateChoice(field, true, fieldErrorId);
        } else if (field.matches('[type="radio"], [type="checkbox"]')) {
          fieldErrorId = `${field.closest('fieldset').id}__error`;

          updateChoice(field.closest('fieldset'), true, fieldErrorId);
        } else {
          fieldErrorId = `${field.id}__error`;

          field.setAttribute('aria-invalid', 'true');
          field.setAttribute('aria-describedby', fieldErrorId);
        }

        fieldError.id = fieldErrorId;
        fieldError.classList.add(FIELD_ERROR_CLASS);

        fieldParent.appendChild(fieldError);
      }

      fieldError.textContent = message;
    }
  }

  /*****************************************************************************
   * Expects a Node (field or fieldset) that either has the class name defined
   * by `FIELD_PARENT_CLASS`, or has a parent with that class name.
   *
   * https://www.davidmacd.com/blog/test-aria-describedby-errormessage-aria-live.html
   */

  function reportSuccess(field) {
    const fieldParent = field.closest(`.${FIELD_PARENT_CLASS}`);

    if (progressForm.contains(fieldParent)) {
      const fieldError = fieldParent.querySelector(`.${FIELD_ERROR_CLASS}`);

      if (fieldParent.contains(fieldError)) {
        if (field.matches('fieldset')) {
          updateChoice(field, false);
        } else if (field.matches('[type="radio"], [type="checkbox"]')) {
          updateChoice(field.closest('fieldset'), false);
        } else {
          field.removeAttribute('aria-invalid');
          field.removeAttribute('aria-describedby');
        }

        fieldParent.removeChild(fieldError);
      }
    }
  }

  /*****************************************************************************
   * Expects a Node (field or fieldset).
   *
   * Reports the field's overall validity to the user based on conditions set
   * within `getValidationData()`.
   */

  function reportValidity(field) {
    const validation = getValidationData(field);

    if (!validation.isValid && validation.message) {
      reportError(field, validation.message);
    } else if (!validation.isValid) {
      reportError(field);
    } else {
      reportSuccess(field);
    }
  }

  // Form Progression

  /*****************************************************************************
   * Resets the state of all tabs and tab panels.
   */

  function deactivateTabs() {
    // Reset state of all tab items
    tabItems.forEach(tab => {
      tab.setAttribute('aria-selected', 'false');
      tab.setAttribute('tabindex', '-1');
    });

    // Reset state of all panels
    tabPanels.forEach(panel => {
      panel.setAttribute('hidden', '');
    });
  }

  /*****************************************************************************
   * Expects an integer.
   *
   * Shows the desired tab and its associated tab panel, then updates the form's
   * current step to match the tab's index.
   */

  function activateTab(index) {
    const thisTab = tabItems[index],
    thisPanel = tabPanels[index];

    // Close all other tabs
    deactivateTabs();

    // Focus the activated tab for accessibility
    thisTab.focus();

    // Set the interacted tab to active
    thisTab.setAttribute('aria-selected', 'true');
    thisTab.removeAttribute('tabindex');

    // Display the associated tab panel
    thisPanel.removeAttribute('hidden');

    // Update the current step with the interacted tab's index value
    currentStep = index;
  }

  /*****************************************************************************
   * Expects an event from a click listener.
   */

  function clickTab(e) {
    activateTab([...tabItems].indexOf(e.currentTarget));
  }

  /*****************************************************************************
   * Expects an event from a keydown listener.
   */

  function arrowTab(e) {
    const { keyCode, target } = e;

    /**
     * If the current tab has an enabled next/previous sibling, activate it.
     * Otherwise, activate the tab at the beginning/end of the list.
     */

    const targetPrev = target.previousElementSibling,
    targetNext = target.nextElementSibling,
    targetFirst = target.parentElement.firstElementChild,
    targetLast = target.parentElement.lastElementChild;

    const isDisabled = node => node.hasAttribute('aria-disabled');

    switch (keyCode) {
      case 37: // Left arrow
        if (progressForm.contains(targetPrev) && !isDisabled(targetPrev)) {
          activateTab(currentStep - 1);
        } else if (!isDisabled(targetLast)) {
          activateTab(tabItems.length - 1);
        }break;
      case 39: // Right arrow
        if (progressForm.contains(targetNext) && !isDisabled(targetNext)) {
          activateTab(currentStep + 1);
        } else if (!isDisabled(targetFirst)) {
          activateTab(0);
        }break;}

  }

  /*****************************************************************************
   * Expects a boolean.
   *
   * Updates the visual state of the progress bar and makes the next tab
   * available for interaction (if there is a next tab).
   */

  // Immediately attach event listeners to the first tab (happens only once)
  tabItems[0].addEventListener('click', clickTab);
  tabItems[0].addEventListener('keydown', arrowTab);

  function handleProgress(isComplete) {
    const currentTab = tabItems[currentStep],
    nextTab = tabItems[currentStep + 1];

    if (isComplete) {
      currentTab.setAttribute('data-complete', 'true');

      /**
       * Verify that there is, indeed, a next tab before modifying or listening
       * to it. In case we've reached the last item in the tablist.
       */

      if (progressForm.contains(nextTab)) {
        nextTab.removeAttribute('aria-disabled');

        nextTab.addEventListener('click', clickTab);
        nextTab.addEventListener('keydown', arrowTab);
      }

    } else {
      currentTab.setAttribute('data-complete', 'false');
    }
  }

  // Form Interactions

  /*****************************************************************************
   * Returns a function that only executes after a delay.
   *
   * https://davidwalsh.name/javascript-debounce-function
   */

  const debounce = (fn, delay = 500) => {
    let timeoutID;

    return (...args) => {
      if (timeoutID) {
        clearTimeout(timeoutID);
      }

      timeoutID = setTimeout(() => {
        fn.apply(null, args);
        timeoutID = null;
      }, delay);
    };
  };

  /*****************************************************************************
   * Waits 0.5s before reacting to any input events. This reduces the frequency
   * at which the listener is fired, making the errors less "noisy". Improves
   * both performance and user experience.
   */

  progressForm.addEventListener('input', debounce(e => {
    const { target } = e;

    validateStep(currentStep).then(() => {

      // Update the progress bar (step complete)
      handleProgress(true);

    }).catch(() => {

      // Update the progress bar (step incomplete)
      handleProgress(false);

    });

    // Display or remove any error messages
    reportValidity(target);
  }));

  /****************************************************************************/

  progressForm.addEventListener('click', e => {
    const { target } = e;

    if (target.matches('[data-action="next"]')) {
      validateStep(currentStep).then(() => {

        // Update the progress bar (step complete)
        handleProgress(true);

        // Progress to the next step
        activateTab(currentStep + 1);

      }).catch(invalidFields => {

        // Update the progress bar (step incomplete)
        handleProgress(false);

        // Show errors for any invalid fields
        invalidFields.forEach(field => {
          reportValidity(field);
        });

        // Focus the first found invalid field for the user
        invalidFields[0].focus();

      });
    }

    if (target.matches('[data-action="prev"]')) {

      // Revisit the previous step
      activateTab(currentStep - 1);

    }
  });

  // Form Submission

  /*****************************************************************************
   * Returns the user's IP address.
   */

  async function getIP(url = 'https://api.ipify.org?format=json') {
    const response = await fetch(url, {
      method: 'GET',
      headers: {
        'Content-Type': 'application/json' } });



    if (!response.ok) {
      throw new Error(response.statusText);
    }

    return response.json();
  }

  /*****************************************************************************
   * POSTs to the specified endpoint.
   */

  async function postData(url = '', data = {}) {
    const response = await fetch(url, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json' },

      body: JSON.stringify(data) });


    if (!response.ok) {
      throw new Error(response.statusText);
    }

    return response.json();
  }

  /****************************************************************************/

  function disableSubmit() {
    const submitButton = progressForm.querySelector('[type="submit"]');

    if (progressForm.contains(submitButton)) {

      // Update the state of the submit button
      submitButton.setAttribute('disabled', '');
      submitButton.textContent = 'Submitting...';

    }
  }

  /****************************************************************************/

  function handleSuccess(response) {
    const thankYou = progressForm.querySelector('#progress-form__thank-you');

    // Clear all HTML Nodes that are not the thank you panel
    while (progressForm.firstElementChild !== thankYou) {
      progressForm.removeChild(progressForm.firstElementChild);
    }

    thankYou.removeAttribute('hidden');

    // Logging the response from httpbin for quick verification
    console.log(response);
  }

  /****************************************************************************/

  function handleError(error) {
    const submitButton = progressForm.querySelector('[type="submit"]');

    if (progressForm.contains(submitButton)) {
      const errorText = document.createElement('p');

      // Reset the state of the submit button
      submitButton.removeAttribute('disabled');
      submitButton.textContent = 'Submit';

      // Display an error message for the user
      errorText.classList.add('m-0', 'form__error-text');
      errorText.textContent = `Sorry, your submission could not be processed.
        Please try again. If the issue persists, please contact our support
        team. Error message: ${error}`;

      submitButton.parentElement.prepend(errorText);
    }
  }

  /****************************************************************************/

  progressForm.addEventListener('submit', e => {

    // Prevent the form from submitting
    e.preventDefault();

    // Get the API endpoint using the form action attribute
    const form = e.currentTarget,
    API = new URL(form.action);

    validateStep(currentStep).then(() => {

      // Indicate that the submission is working
      disableSubmit();

      // Prepare the data
      const formData = new FormData(form),
      formTime = new Date().getTime(),
      formFields = [];

      // Format the data entries
      for (const [name, value] of formData) {
        formFields.push({
          'name': name,
          'value': value });

      }

      // Get the user's IP address (for fun)
      // Build the final data structure, including the IP
      // POST the data and handle success or error
      getIP().then(response => {
        return {
          'fields': formFields,
          'meta': {
            'submittedAt': formTime,
            'ipAddress': response.ip } };


      }).
      then(data => postData(API, data)).
      then(response => {
        setTimeout(() => {
          handleSuccess(response);
        }, 5000); // An artificial delay to show the state of the submit button
      }).
      catch(error => {
        setTimeout(() => {
          handleError(error);
        }, 5000); // An artificial delay to show the state of the submit button
      });

    }).catch(invalidFields => {

      // Show errors for any invalid fields
      invalidFields.forEach(field => {
        reportValidity(field);
      });

      // Focus the first found invalid field for the user
      invalidFields[0].focus();

    });
  });
});
</script>
<script>
    let slider = document.getElementById("rangeSlider");
let outputEl = document.querySelector(".range-slider__value");

function decimalSeparator(number) {
  return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

// outputEl.textContent = `${initialValue} $`;
outputEl.textContent = `$ ${decimalSeparator(slider.value)}`; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function () {
  outputEl.textContent = `$ ${decimalSeparator(this.value)}`;
};
</script>
<?php include_once ("include/footer.php") ?>
 