get();

$("#update").click(function (e) {
  e.preventDefault();
  $(".form-control").attr("readonly", false);
  $("#form-confirm").attr("hidden", true);
  $("#form-action").attr("hidden", false);
});

$("#cancel").click(function (e) {
  e.preventDefault();
  $(".form-control").attr("readonly", true);
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
      "<div style='text-align: center; font-weight: bold'>Update Kontak Aplikasi ?</div><br>",
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
            url: baseUrl + "/admin/contact/update",
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
  $.getJSON(baseUrl + "/admin/contact/get", function (data, textStatus, jqXHR) {
    console.log(data);
    console.log(textStatus);
    console.log(jqXHR);
    if (data !== null) {
      $("#id-contact").prop("disabled", false).val(data.id);
      $("#email").val(data.email);
      $("#phone").val(data.phone);
      $("#address").val(data.address);
      $("#instagram").val(data.instagram);
      $("#facebook").val(data.facebook);
    } else {
      console.log("Data belum ada");
    }
  });
}
