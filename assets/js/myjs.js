function changeProfile() {
  $('#image').click();
}
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myDIV #myBox").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

function notify(error) {
  $.notify({
  icon: "tim-icons icon-bell-55",
  message: error
}, {
  type: "primary",
  timer: 5000,
  placement: {
    from: "top",
    align: "right"
  }
});
}

$('#image').change(function () {
  var imgPath = $(this)[0].value;
  var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
      readURL(this);
    else
      notify("Please select image file (jpg, jpeg, png).")
});

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.readAsDataURL(input.files[0]);
    reader.onload = function (e) {
     $('#preview').attr('src', e.target.result);
    }
  }
}