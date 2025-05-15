$(".tab-wizard").steps({
    headerTag: "h6"
    , bodyTag: "section"
    , transitionEffect: "none"
    , titleTemplate: '<span class="step">#index#</span> #title#'
    , labels: {
        finish: "Submit"
    }
    , onFinished: function (event, currentIndex) {
       swal("Your Order Submitted!", "Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor.");
            
    }
});


var form = $(".validation-wizard").show();

$(".validation-wizard").steps({
    headerTag: "h6"
    , bodyTag: "section"
    , transitionEffect: "none"
    , titleTemplate: '<span class="step">#index#</span> #title#'
    , labels: {
        finish: "Submit"
    }
    , onStepChanging: function (event, currentIndex, newIndex) {
        return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
    }
    , onFinishing: function (event, currentIndex) {
        return form.validate().settings.ignore = ":disabled", form.valid()
    }
    , onFinished: function (event, currentIndex) {
         regUser();
    }
}), $(".validation-wizard").validate({
    ignore: "input[type=hidden]"
    , errorClass: "text-danger"
    , successClass: "text-success"
    , highlight: function (element, errorClass) {
        $(element).removeClass(errorClass)
    }
    , unhighlight: function (element, errorClass) {
        $(element).removeClass(errorClass)
    }
    , errorPlacement: function (error, element) {
        error.insertAfter(element)
    }
    , rules: {
        email: {
            email: !0
        }
    }
})


// Attach event listener to the form
document.getElementById("registrationForm").addEventListener('submit', function(event) {
  event.preventDefault();  // Prevent the form from reloading the page
  regUser();               // Call the function to submit the data via AJAX
});

function regUser(){

     event.preventDefault();
  // Retrieve form values
  let firstname    = document.getElementById("firstname").value;
  let lastname     = document.getElementById("lastname").value;
  let city         = document.getElementById("city") ? document.getElementById("city").value : "";
  let diastolic         = document.getElementById("city") ? document.getElementById("diastolic").value : "";
  let systolic         = document.getElementById("city") ? document.getElementById("systolic").value : "";
  let email        = document.getElementById("email") ? document.getElementById("email").value : "";
  let phone_number = document.getElementById("phone_number") ? document.getElementById("phone_number").value : "";
  let height       = document.getElementById("height") ? document.getElementById("height").value : "";
  let weight       = document.getElementById("weight") ? document.getElementById("weight").value : "";
  let bmi          = document.getElementById("bmiResult") ? document.getElementById("bmiResult").value : "";
  let pressure     = document.getElementById("pressure") ? document.getElementById("pressure").value : "";
  let smoking      = document.getElementById("smoking") ? document.getElementById("smoking").value : "";
  let type         = document.getElementById("type") ? document.getElementById("type").value : "";
  let allergy      = document.getElementById("allergy") ? document.getElementById("allergy").value : "";
  let temperature  = document.getElementById("temperature") ? document.getElementById("temperature").value : "";
  let heart_rate   = document.getElementById("heart_rate") ? document.getElementById("heart_rate").value : "";
  let comment      = document.getElementById("comment") ? document.getElementById("comment").value : "";
  let advise       = document.getElementById("advise") ? document.getElementById("advise").value : "";
  let appointment  = document.getElementById("appointment") ? document.getElementById("appointment").value : "";
  
  // Prepare the data string to be sent via POST (update the keys as required by your back-end)
  let postData = "firstname=" + encodeURIComponent(firstname) +
                 "&lastname=" + encodeURIComponent(lastname) +
                 "&city=" + encodeURIComponent(city) +
                 "&email=" + encodeURIComponent(email) +
                 "&systolic=" + encodeURIComponent(systolic) +
                 "&diastolic=" + encodeURIComponent(diastolic) +
                 "&phone_number=" + encodeURIComponent(phone_number) +
                 "&height=" + encodeURIComponent(height) +
                 "&weight=" + encodeURIComponent(weight) +
                 "&bmi=" + encodeURIComponent(bmi) +
                 "&pressure=" + encodeURIComponent(pressure) +
                 "&smoking=" + encodeURIComponent(smoking) +
                 "&type=" + encodeURIComponent(type) +
                 "&allergy=" + encodeURIComponent(allergy) +
                 "&temperature=" + encodeURIComponent(temperature) +
                 "&heart_rate=" + encodeURIComponent(heart_rate) +
                 "&comment=" + encodeURIComponent(comment) +
                 "&advise=" + encodeURIComponent(advise) +
                 "&appointment=" + encodeURIComponent(appointment);

  // Create XMLHttpRequest
  let xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    // Check if the request is complete
    if(this.readyState === 4) {
      if(this.status === 200) {
        // Trim the response to remove any extra whitespace
        let trimmedResponse = this.responseText.trim();

        // Determine what to show based on the response text
        if(trimmedResponse === "error1"){
          Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'error',
            title: 'Sorry, this email is in use',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
          });
        } else if(trimmedResponse === "dberror") {
          Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'error',
            title: 'Sorry, an error occurred',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
          });
        } else {
          Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: 'Registered',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
          });
          // Redirect after 60 seconds, ensuring the callback is passed to setTimeout
          setTimeout(function(){
            window.location.href = "index.php";
          }, 9000);
        }
      } else {
        // Handle HTTP errors (if needed)
        Swal.fire({
          toast: true,
          position: 'top-end',
          icon: 'error',
          title: 'Request failed. Please try again.',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true
        });
      }
    }
  };

  // Open and send the POST request
  xhttp.open("POST", "actions/add_patient.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(postData);
}
