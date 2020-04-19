// Script to fetch all monthly weight data which will be used as a function call for ayush.php and the data will be inserted into the HTML Table - #tb2

function jan() {
  $.ajax({
    type: "POST",
    url: "php/weight_table/months/ayush/jan.php",
    success: function (data) {
      $("#tb2").html($(data));
    },
  });
}

function feb() {
  $.ajax({
    type: "POST",
    url: "php/weight_table/months/ayush/feb.php",
    success: function (data) {
      $("#tb2").html($(data));
    },
  });
}

function march() {
  $.ajax({
    type: "POST",
    url: "php/weight_table/months/ayush/march.php",
    success: function (data) {
      $("#tb2").html($(data));
    },
  });
}

function april() {
  $.ajax({
    type: "POST",
    url: "php/weight_table/months/ayush/april.php",
    success: function (data) {
      $("#tb2").html($(data));
    },
  });
}

function may() {
  $.ajax({
    type: "POST",
    url: "php/weight_table/months/ayush/may.php",
    success: function (data) {
      $("#tb2").html($(data));
    },
  });
}

function june() {
  $.ajax({
    type: "POST",
    url: "php/weight_table/months/ayush/june.php",
    success: function (data) {
      $("#tb2").html($(data));
    },
  });
}

function july() {
  $.ajax({
    type: "POST",
    url: "php/weight_table/months/ayush/july.php",
    success: function (data) {
      $("#tb2").html($(data));
    },
  });
}

function aug() {
  $.ajax({
    type: "POST",
    url: "php/weight_table/months/ayush/aug.php",
    success: function (data) {
      $("#tb2").html($(data));
    },
  });
}

function sep() {
  $.ajax({
    type: "POST",
    url: "php/weight_table/months/ayush/sep.php",
    success: function (data) {
      $("#tb2").html($(data));
    },
  });
}

function oct() {
  $.ajax({
    type: "POST",
    url: "php/weight_table/months/ayush/oct.php",
    success: function (data) {
      $("#tb2").html($(data));
    },
  });
}

function nov() {
  $.ajax({
    type: "POST",
    url: "php/weight_table/months/ayush/nov.php",
    success: function (data) {
      $("#tb2").html($(data));
    },
  });
}

function dec() {
  $.ajax({
    type: "POST",
    url: "php/weight_table/months/ayush/dec.php",
    success: function (data) {
      $("#tb2").html($(data));
    },
  });
}
