/* --------------------<[ REGISTRATION FORM VALIDATION ]>---------------*/

// warning on registration form submit
function confirmSubmission() {
  return confirm("Are you sure you want to submit your data?");
}

// page warning on registration form clear
function clearData() {
  return confirm("Are you sure you want to clear your data?");
}

// -----------<[ Registration Form JS Submission ]>----------- //

function validateRegistrationForm(form) {

    var firstName = document.getElementById("firstname").value;
    var lastName = document.getElementById("lastname").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var address = document.getElementById("address").value;
    var city = document.getElementById("city").value;
    var province = document.getElementById("province").value;
    var postalCode = document.getElementById("postalcode").value;
    var formError = document.getElementById("formError");

  if(firstName == "" || lastName == "" || phone == "" || email =="" || address =="" || city == "" || province == "" || postalCode == "") {
    formError.innerHTML = "Please fill out all required fields (shown with *) and fix any errors shown";
    return false;
  }
}

  function checkFirstName() {

    // Get form inputs ----------------------- /
    var firstName = document.getElementById("firstname").value;
    var firstNameError = document.getElementById("firstNameError");
    var lettersRegex = /^[A-Za-z]+$/;
    var firstNameResult = lettersRegex.test(firstName);

    document.getElementById("firstNameTip").innerHTML = "";

    // --<[ Validate First Name Field ]>----------------------- /
    if(firstName == "") {
      firstNameError.innerHTML = "First Name is required *";
      return false;
    }

    if(firstNameResult == false) {
      firstNameError.innerHTML = "Only letters can be used";
      return false;
    }

    if(firstNameResult == true) { 
      firstNameError.classList.add("displaynone");
      return true;
    }

  }

  function checkLastName() {

    var lastName = document.getElementById("lastname").value;
    var lastNameError = document.getElementById("lastNameError");
    var lettersRegex = /^[A-Za-z]+$/;
    var lastNameResult = lettersRegex.test(lastName);

    document.getElementById("lastNameTip").innerHTML = "";

    // --<[ Validate Last Name Field ]>----------------------- /
    if(lastName == "") {
      lastNameError.innerHTML = "Last Name is required *";
      return false;
    }

    if(lastNameResult == false) {
      lastNameError.innerHTML = "Only letters can be used";
      return false;
    }

    if(lastNameResult == true) {
      lastNameError.classList.add("displaynone");
      return true;
    }
  }

  function checkPhone() {

    var Phone = document.getElementById("phone").value;
    var phoneError = document.getElementById("phoneError");
    var phoneRegex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    var phoneResult = phoneRegex.test(Phone);

    document.getElementById("phoneTip").innerHTML = "";

    // --<[ Validate Phone Number Field ]>----------------------- /
    if(Phone == "") {
      phoneError.innerHTML = "Home phone number is required *";
      return false;
    }

    if(phoneResult == false) {
      phoneError.innerHTML = "Please add a valid home phone number";
      return false;
    }

    if(phoneResult == true) {
      phoneError.classList.add("displaynone");
      return true;
    }
  }

  function checkPhone2() {

    var Phone2 = document.getElementById("phone2").value;
    var phone2Error = document.getElementById("phone2Error");
    var phone2Regex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    var phone2Result = phone2Regex.test(Phone2);

    document.getElementById("phone2Tip").innerHTML = "";

    // --<[ Validate Phone Number Field ]>----------------------- /
    if(Phone2 == "") {
      phone2Error.innerHTML = "Business phone number is required *";
      return false;
    }

    if(phone2Result == false) {
      phone2Error.innerHTML = "Please add a valid business phone number";
      return false;
    }

    if(phone2Result == true) {
      phone2Error.classList.add("displaynone");
      return true;
    }
  }

  function checkEmail() {

    var Email = document.getElementById("email").value;
    var emailError = document.getElementById("emailError");
    var emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var emailResult = emailRegex.test(Email);

    document.getElementById("emailTip").innerHTML = "";

    // --<[ Validate Email Field ]>----------------------- /
    if(Email == "") {
      emailError.innerHTML = "An email is required *";
      return false;
    }

    if(emailResult == false) {
      emailError.innerHTML = "Please add a valid email address";
      return false;
    }

    if(emailResult == true) {
      emailError.classList.add("displaynone");
      return true;
    }
  }

  function checkAddress() {

    var Address = document.getElementById("address").value;
    var addressError = document.getElementById("addressError");
    var addressRegex = /^[-.: A-Za-z0-9]*$/;
    var addressResult = addressRegex.test(Address);

    document.getElementById("addressTip").innerHTML = "";

    // --<[ Validate Address Field ]>----------------------- /
    if(Address == "") {
      addressError.innerHTML = "An address is required *";
      return false;
    }

    if(addressResult == false) {
      addressError.innerHTML = "Please add a valid street address";
      return false;
    }

    if(addressResult == true) {
      addressError.classList.add("displaynone");
      return true;
    }
  }

  function checkCity() {

  // Get form inputs ----------------------- /
    var City = document.getElementById("city").value;
    var cityError = document.getElementById("cityError");
    var cityRegex = /^[A-Za-z\s]+$/;
    var cityResult = cityRegex.test(City);

    document.getElementById("cityTip").innerHTML = "";

    // --<[ Validate City Field ]>----------------------- /
    if(City == "") {
      cityError.innerHTML = "City is required *";
      return false;
    }

    if(cityResult == false) {
      cityError.innerHTML = "Please add a valid city";
      return false;
    }

    if(cityResult == true) { 
      cityError.classList.add("displaynone");
      return true;
    }
  }
  
  function checkProvince() {

  // Get form inputs ----------------------- /
    var Province = document.getElementById("province").value;
    var provinceError = document.getElementById("provinceError");
    var lettersRegex = /^[A-Za-z]+$/;
    var provinceResult = lettersRegex.test(Province);

    document.getElementById("provinceTip").innerHTML = "";

    // --<[ Validate Province Field ]>----------------------- /
    if(Province == "") {
      provinceError.innerHTML = "Province is required *";
      return false;
    }

    if(provinceResult == false) {
      provinceError.innerHTML = "Please add a valid province";
      return false;
    }
  }

    function checkCountry() {

  // Get form inputs ----------------------- /
    var Country = document.getElementById("country").value;
    var countryError = document.getElementById("countryError");
    var lettersRegex = /^[A-Za-z]+$/;
    var countryResult = lettersRegex.test(Country);

    document.getElementById("countryTip").innerHTML = "";

    // --<[ Validate country Field ]>----------------------- /
    if(Country == "") {
      countryError.innerHTML = "Country is required *";
      return false;
    }

    if(countryResult == false) {
      countryError.innerHTML = "Please add a valid country";
      return false;
    }

    if(countryResult == true) { 
      countryError.classList.add("displaynone");
      return true;
    }

  }

  function checkPostalCode() {

  // Get form inputs ----------------------- /
    var postalCode = document.getElementById("postalcode").value;
    var postalCodeError = document.getElementById("postalCodeError");
    var postalCodeRegex = /^[A-Za-z]\d[A-Za-z] ?\d[A-Za-z]\d$/;
    var postalCodeResult = postalCodeRegex.test(postalCode);

    document.getElementById("postalCodeTip").innerHTML = "";

    // --<[ Validate Postal Code Field ]>----------------------- /
    if(postalCode == "") {
      postalCodeError.innerHTML = "Postal code is required *";
      return false;
    }

    if(postalCodeResult == false) {
      postalCodeError.innerHTML = "Please add a valid postal code";
      return false;
    }

    if(postalCodeResult == true) { 
      postalCodeError.classList.add("displaynone");
      return true;
    }

  }

  function checkDescription() {

    var Description = document.getElementById("description").value;
    var descriptionError = document.getElementById("descriptionError");
    var descriptionRegex = /^[-.: A-Za-z0-9]*$/;
    var descriptionResult = descriptionRegex.test(Description);

    document.getElementById("descriptionTip").innerHTML = "";

    // --<[ Validate Description Field ]>----------------------- /
    if(descriptionResult == false) {
      descriptionError.innerHTML = "Please only use standard English text characters.";
      return false;
    } else {
      descriptionError.classList.add("displaynone");
      return true;
    }
  }

  // --<[ On Focus Messages ]>----------------------- /
  function firstNameTip() {
    var firstNameTip = document.getElementById("firstNameTip");

    if(document.hasFocus()) {
      firstNameTip.innerHTML = "Add your first name";
    } 
  }

  function lastNameTip() {
    var lastNameTip = document.getElementById("lastNameTip");

    if(document.hasFocus()) {
      lastNameTip.innerHTML = "Add your last name";
    }
  }

  function phoneTip() {
    var phoneTip = document.getElementById("phoneTip");

    if(document.hasFocus()) {
      phoneTip.innerHTML = "Add your home phone number";
    }
  }

  function phoneTip2() {
    var phoneTip2 = document.getElementById("phoneTip2");

    if(document.hasFocus()) {
      phoneTip.innerHTML = "Add your business phone number";
    }
  }

  function emailTip() {
    var emailTip = document.getElementById("emailTip");

    if(document.hasFocus()) {
      emailTip.innerHTML = "Add your email address";
    }
  }

  function addressTip() {
    var addressTip = document.getElementById("addressTip");

    if(document.hasFocus()) {
      addressTip.innerHTML = "Add your mailing address";
    }
  }

  function cityTip() {
    var cityTip = document.getElementById("cityTip");

    if(document.hasFocus()) {
      cityTip.innerHTML = "Add your city";
    }
  }

  function provinceTip() {
    var provinceTip = document.getElementById("provinceTip");

    if(document.hasFocus()) {
      provinceTip.innerHTML = "Add your province";
    }
  }

  function countryTip() {
    var countryTip = document.getElementById("countryTip");

    if(document.hasFocus()) {
      countryTip.innerHTML = "Add your country";
    }
  }

  function postalCodeTip() {
    var postalCodeTip = document.getElementById("postalCodeTip");

    if(document.hasFocus()) {
      postalCodeTip.innerHTML = "Add your postal code";
    }
  }

  function descriptionTip() {
    var descriptionTip = document.getElementById("descriptionTip");

    if(document.hasFocus()) {
      descriptionTip.innerHTML = "Add some details about the trip of your dreams";
    }
  }

  function passwordTip() {
    var passwordTip = document.getElementById("passwordTip");

    if(document.hasFocus()) {
      passwordTip.innerHTML = "Create a password";
    }
  }

  function password2Tip() {
    var password2Tip = document.getElementById("password2Tip");

    if(document.hasFocus()) {
      password2Tip.innerHTML = "Add password again";
    }
  }

// change styles of form messages
var tip = document.getElementsByClassName("tip");
for (var i = 0; i < tip.length; i++) {
  tip[i].style.opacity = "0.25";
}

var error = document.getElementsByClassName("error");
for (var i = 0; i < error.length; i++) {
  error[i].style.opacity = "0.85";
}

// -----------<[ Add Agent Form JS Submission ]>----------- //

function validateAddAgentForm(form) {

    var firstName = document.getElementById("firstname").value;
    var middleName = document.getElementById("middlename").value;
    var lastName = document.getElementById("lastname").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var position = document.getElementById("position").value;
    var agency = document.getElementById("agency").value;

  if(firstName == "" || lastName == "" || phone == "" || email =="" || position =="" || agency == "") {
    formError.innerHTML = "Please fill out all required fields (shown with *)";
    return false;
  }
}

function checkAgentFirstName() {

    // Get form inputs ----------------------- /
    var firstName = document.getElementById("firstname").value;
    var firstNameError = document.getElementById("firstNameError");
    var lettersRegex = /^[A-Za-z]+$/;
    var firstNameResult = lettersRegex.test(firstName);

    //document.getElementById("firstNameTip").innerHTML = "";

    // --<[ Validate First Name Field ]>----------------------- /
    if(firstName == "") {
      firstNameError.innerHTML = "First Name is required *";
      return false;
    }

    if(firstNameResult == false) {
      firstNameError.innerHTML = "Only letters can be used";
      return false;
    }

    if(firstNameResult == true) { 
      firstNameError.classList.add("displaynone");
      return true;
    }

  }

  function checkAgentMiddleName() {

    // Get form inputs ----------------------- /
    var middleName = document.getElementById("middlename").value;
    var middleNameError = document.getElementById("middleNameError");
    var lettersRegex = /^[A-Za-z]+$/;
    var middleNameResult = lettersRegex.test(middleName);

    //document.getElementById("middleNameTip").innerHTML = "";

    // --<[ Validate Middle Name Field ]>----------------------- /

    if(middleName == "") {
      middleNameError.innerHTML = "";
      return false;
    }

    if(middleNameResult == false) {
      middleNameError.innerHTML = "Only letters can be used";
      return false;
    }

    if(middleNameResult == true) { 
      middleNameError.classList.add("displaynone");
      return true;
    }
  }

  function checkAgentLastName() {

    var lastName = document.getElementById("lastname").value;
    var lastNameError = document.getElementById("lastNameError");
    var lettersRegex = /^[A-Za-z]+$/;
    var lastNameResult = lettersRegex.test(lastName);

    //document.getElementById("lastNameTip").innerHTML = "";

    // --<[ Validate Last Name Field ]>----------------------- /
    if(lastName == "") {
      lastNameError.innerHTML = "Last Name is required *";
      return false;
    }

    if(lastNameResult == false) {
      lastNameError.innerHTML = "Only letters can be used";
      return false;
    }

    if(lastNameResult == true) {
      lastNameError.classList.add("displaynone");
      return true;
    }
  }

  function checkAgentPhone() {

    var Phone = document.getElementById("phone").value;
    var phoneError = document.getElementById("phoneError");
    var phoneRegex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    var phoneResult = phoneRegex.test(Phone);

    //document.getElementById("phoneTip").innerHTML = "";

    // --<[ Validate Phone Number Field ]>----------------------- /
    if(Phone == "") {
      phoneError.innerHTML = "Phone number is required *";
      return false;
    }

    if(phoneResult == false) {
      phoneError.innerHTML = "Please add a valid phone number";
      return false;
    }

    if(phoneResult == true) {
      phoneError.classList.add("displaynone");
      return true;
    }
  }

  function checkAgentEmail() {

    var Email = document.getElementById("email").value;
    var emailError = document.getElementById("emailError");
    var emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var emailResult = emailRegex.test(Email);

    //document.getElementById("emailTip").innerHTML = "";

    // --<[ Validate Email Field ]>----------------------- /
    if(Email == "") {
      emailError.innerHTML = "An email is required *";
      return false;
    }

    if(emailResult == false) {
      emailError.innerHTML = "Please add a valid email address";
      return false;
    }

    if(emailResult == true) {
      emailError.classList.add("displaynone");
      return true;
    }
  }

  function checkAgentPosition() {

    var Position = document.getElementById("position").value;
    var positionError = document.getElementById("positionError");
    var positionRegex = /^[-.: A-Za-z0-9]*$/;
    var positionResult = positionRegex.test(Position);

    //document.getElementById("positionTip").innerHTML = "";

    // --<[ Validate Position Field ]>----------------------- /
    if(Position == "") {
      positionError.innerHTML = "Position is required *";
      return false;
    }

    if(positionResult == false) {
      positionError.innerHTML = "Please use valid characters";
      return false;

    } else {
      positionError.classList.add("displaynone");
      return true;
    }
  }

  function checkAgentAgency() {
    var Agency = document.getElementById("agency").value;
    var agencyError = document.getElementById("agencyError");

    if(Agency == "") {
      agencyError.innerHTML = "Please choose an agency *";
      return false;
    } else {
      agencyError.classList.add("displaynone");
    }

  }

  function checkAgentPassword() {
    var Password = document.getElementById("password").value;
    var passwordError = document.getElementById("passwordError");

    if(Password == "") {
      passwordError.innerHTML = "Password is required *";
      return false;
    }

    if(Password.length < 6) {
      passwordError.innerHTML = "Password must be 6 characters or more";
      return false
    } else {
      passwordError.classList.add("displaynone");
    }
  }

    function checkAgentPassword2() {
    var Password = document.getElementById("password").value;
    var Password2 = document.getElementById("password2").value;
    var passwordError2 = document.getElementById("passwordError2");

    if(Password2 == "") {
      passwordError2.innerHTML = "Password must be added again *";
      return false;
    } 

    if(Password2 !== Password) {
      passwordError2.innerHTML = "Passwords do not match"
    } else {
      passwordError2.classList.add("displaynone");
    }

  }

  function checkPackageName() {

    var packageName = document.getElementById("packagename").value;
    var packageNameError = document.getElementById("packageNameError");
    var packageNameRegex = /^[-.: A-Za-z0-9]*$/;
    var packageNameResult = packageNameRegex.test(packageName);

   // document.getElementById("descriptionTip").innerHTML = "";

    // --<[ Validate Description Field ]>----------------------- /
    if(packageName == "") {
      packageNameError.innerHTML = "Package name must be added *";
      return false;
    } 
    if(packageNameResult == false) {
      packageNameError.innerHTML = "Please only use standard English text";
    
    } else {
      packageNameError.classList.add("displaynone");
      return true;
    }
  }

  function checkPackageStartDate() {

    var checkPackageStartDate = document.getElementById("packagestartdate").value;
    var packageStartDateError = document.getElementById("packageStartDateError");
    var packageStartDateRegex = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
    var packageStartDateResult = packageStartDateRegex.test(checkPackageStartDate);

   // document.getElementById("descriptionTip").innerHTML = "";

    // --<[ Validate Description Field ]>----------------------- /
    if(checkPackageStartDate == "mm/dd/yyyy") {
      packageStartDateError.innerHTML = "Start date must be added *";
    } 
    if(checkPackageStartDate == false) {
      packageStartDateError.innerHTML = "Please add a valid date";
    } else {
      packageStartDateError.classList.add("displaynone");
      return true;
    }
  }

  function checkPackageEndDate() {

    var checkPackageEndDate = document.getElementById("packageenddate").value;
    var packagEndDateError = document.getElementById("packageEndDateError");
    var packageEndDateRegex = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
    var packageEndDateResult = packageEndDateRegex.test(checkPackageEndDate);

   // document.getElementById("descriptionTip").innerHTML = "";

    // --<[ Validate Description Field ]>----------------------- /
    if(checkPackageEndDate == "mm/dd/yyyy") {
      packageEndDateError.innerHTML = "End date must be added *";
    } 
    if(checkPackageEndDate == false) {
      packageEndDateError.innerHTML = "Please add a valid date";
    } else {
      packageEndDateError.classList.add("displaynone");
      return true;
    }
  }

  function checkPackageDescription() {

    var packageDescription = document.getElementById("packagedescription").value;
    var packageDescriptionError = document.getElementById("packageDescriptionError");
    var packageDescriptionRegex = /^[_A-z0-9]*((-|\s|'|.)*[_A-z0-9])*$/;
    var packageDescriptionResult = packageDescriptionRegex.test(packageDescription);

   // document.getElementById("descriptionTip").innerHTML = "";

    // --<[ Validate Description Field ]>----------------------- /
    if(packageDescription == "") {
      packageDescriptionError.innerHTML = "Package description is required *";
      return false;
    } 
    if(packageDescriptionResult == false) {
      packageDescriptionError.innerHTML = "Please only use standard English text";
    
    } else {
      packageDescriptionError.classList.add("displaynone");
      return true;
    }
  }

  function checkPackageImage() {

    var packageImage = document.getElementById("packageimage").value;
    var packageImageError = document.getElementById("packageImageError");

   // document.getElementById("descriptionTip").innerHTML = "";

    // --<[ Validate Image Field ]>----------------------- /
    if(packageImage == "") {
      packageImageError.innerHTML = "Package image is required *";
      return false;
    }
  }

  function checkPackageBasePrice() {

    var packageBasePrice = document.getElementById("packagebaseprice").value;
    var packageBasePriceError = document.getElementById("packageBasePriceError");
    var packageBasePriceRegex = /^\d+(\.\d{1,2})?$/;
    var packageBasePriceResult = packageBasePriceRegex.test(packageBasePrice);

   // document.getElementById("descriptionTip").innerHTML = "";

    // --<[ Validate Image Field ]>----------------------- /
    if(packageBasePrice == "") {
      packageBasePriceError.innerHTML = "Base Price is required *";
    }
    if(packageBasePriceResult === false) {
      packageBasePriceError.innerHTML = "Must add a number";
    } else {
      packageBasePriceError.classList.add("displaynone");
      return true;
    }
  }

  function checkPackageCommission() {

    var packageCommission = document.getElementById("packagecommission").value;
    var packageCommissionError = document.getElementById("packageCommissionError");
    var packageCommissionRegex = /^\d+(\.\d{1,2})?$/;
    var packageCommissionResult = packageCommissionRegex.test(packageCommission);

   // document.getElementById("descriptionTip").innerHTML = "";

    // --<[ Validate Image Field ]>----------------------- /
    if(packageCommission == "") {
      packageCommissionError.innerHTML = "Base Price is required *";
    }
    if(packageCommissionResult === false) {
      packageCommissionError.innerHTML = "Must add a number";
    } else {
      packageCommissionError.classList.add("displaynone");
      return true;
    }
  }

  function validateAddPackageForm(form) {

    var packageName = document.getElementById("packagename").value;
    var packageStartDate = document.getElementById("packagestartdate").value;
    var packageEndDate = document.getElementById("packageenddate").value;
    var packageDescription = document.getElementById("packagedescription").value;
    var packageImage = document.getElementById("packageimage").value;
    var packageBasePrice = document.getElementById("packagebaseprice").value;
    var packageCommission = document.getElementById("packagecommission").value;

  if(packageName == "" || packageStartDate == "" || packageEndDate == "" || packageDescription =="" || packageImage =="" || packageBasePrice == "" || packageCommission == "") {
    formError.innerHTML = "Please fill out all required fields (shown with *)";
    return false;
  }
}