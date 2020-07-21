get();
// var edit = function () {
//   $(".click2edit").summernote({ focus: true });
// };

// var save = function () {
//   var markup = $(".click2edit").summernote("code");
//   $(".click2edit").summernote("destroy");
// };
// $(document).ready(function () {
//   $(function () {
//     $(".textarea").summernote({
//       placeholder: "Input post here...",
//       tabsize: 2,
//       height: 200,
//     });
//   });
// });
$("#update").click(function (e) {
  e.preventDefault();
  $("#profile").attr("readonly", false);
  $("#form-confirm").attr("hidden", true);
  $("#form-action").attr("hidden", false);
});

$("#cancel").click(function (e) {
  e.preventDefault();
  $("#profile").attr("readonly", true);
  $("#form-confirm").attr("hidden", false);
  $("#form-action").attr("hidden", true);
});

$("#submit").click(function (e) {
  e.preventDefault();
  $("#form-update").trigger("submit");
});

$("#form-update").submit(function (e) {
  e.preventDefault();
  let data = new FormData(this);
  $.confirm({
    title: " ",
    content:
      "<div style='text-align: center; font-weight: bold'>Update Profile Aplikasi ?</div><br>",
    buttons: {
      batal: function () {},
      simpan: {
        text: "simpan",
        btnClass: "btn-blue",
        keys: ["enter"],
        action: function () {
          loading();
          $.ajax({
            type: "POST",
            url: baseUrl + "/admin/profile/update",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (res) {
              if (res.status === true) {
                swal.close();
                toaster("Success", "Data update successfully", "Success");
                $("#cancel").trigger("click");
                get();
              }
            },
          });
        },
      },
    },
  });
});

function get() {
  $.getJSON(baseUrl + "/admin/profile/get", function (data, textStatus, jqXHR) {
    console.log(data);
    console.log(textStatus);
    console.log(jqXHR);
    if (data !== null) {
      $("#id-profile").prop("disabled", false).val(data.id);
      $("#profile").val(data.profile_desc);
      $("#profile-desc").html(data.profile_desc);
    } else {
      console.log("Data belum ada");
    }
  });
}
