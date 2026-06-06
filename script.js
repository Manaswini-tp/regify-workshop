$(document).ready(function() {
  $("#regForm").submit(function(e) {
    e.preventDefault();

    $.ajax({
      type: "POST",
      url: "submit.php",
      data: $(this).serialize(),
      success: function(response) {
        $("#response").html(response).slideDown();
        $("#regForm")[0].reset();
      },
      error: function() {
        $("#response").html("<p style='color:red;'>Error submitting form.</p>").slideDown();
      }
    });
  });
});
