$(document).ready(function() {
    $("#registrationForm").submit(function(event) {
        // Optional: simple client-side validation
        if($("#name").val() === "" || $("#email").val() === "" || $("#phone").val() === "") {
            alert("Please fill all required fields!");
            return false;
        }
        // Form will submit normally to submit.php
    });
});
