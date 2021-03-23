$("#signupform").submit(function (event) {
  event.preventDefault();
  var datatopost = $(this).serializeArray();
  $.ajax({
    url: "register.php",
    type: "POST",
    data: datatopost,
    success: function (data) {
      if (data) {
        $("#error").html(data);
      }
    },
  });
});

$("#loginform").submit(function (event) {
  event.preventDefault();
  var datatopost = $(this).serializeArray();
  $.ajax({
    url: "login.php",
    type: "POST",
    data: datatopost,
    success: function (data) {
      if (data) {
        $("#error").html(data);
      }
    },
  });
});

$("#updateform").submit(function (event) {
  event.preventDefault();
  var datatopost = $(this).serializeArray();
  $.ajax({
    url: "update.php",
    type: "POST",
    data: datatopost,
    success: function (data) {
      if (data) {
        $("#error").html(data);
      }
    },
  });
});
