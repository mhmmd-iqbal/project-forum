get();
$("#update-1").click(function (e) {
  e.preventDefault();
  $("#visi").attr("readonly", false);
  $("#form-confirm-1").attr("hidden", true);
  $("#form-action-1").attr("hidden", false);
});

$("#cancel-1").click(function (e) {
  e.preventDefault();
  $("#visi").attr("readonly", true);
  $("#form-confirm-1").attr("hidden", false);
  $("#form-action-1").attr("hidden", true);
});

$("#submit-1").click(function (e) {
  e.preventDefault();
  $("#form-update-1").trigger("submit");
});

$("#form-update-1").submit(function (e) {
  e.preventDefault();
  let data = new FormData(this);
  $.confirm({
    title: " ",
    content:
      "<div style='text-align: center; font-weight: bold'>Update Visi ?</div><br>",
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
            url: baseUrl + "/admin/visimisi/updateVisi",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (res) {
              if (res.status === true) {
                swal.close();
                toaster("Success", "Data update successfully", "success");
                $("#cancel-1").trigger("click");
                get();
              }
            },
          });
        },
      },
    },
  });
});

$("#update-2").click(function (e) {
  e.preventDefault();
  $("#misi").attr("readonly", false);
  $("#form-confirm-2").attr("hidden", true);
  $("#form-action-2").attr("hidden", false);
});

$("#cancel-2").click(function (e) {
  e.preventDefault();
  $("#misi").attr("readonly", true);
  $("#form-confirm-2").attr("hidden", false);
  $("#form-action-2").attr("hidden", true);
});

$("#submit-2").click(function (e) {
  e.preventDefault();
  $("#form-update-2").trigger("submit");
});

$("#form-update-2").submit(function (e) {
  e.preventDefault();
  let data = new FormData(this);
  $.confirm({
    title: " ",
    content:
      "<div style='text-align: center; font-weight: bold'>Update Misi ?</div><br>",
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
            url: baseUrl + "/admin/visimisi/updateMisi",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (res) {
              if (res.status === true) {
                swal.close();
                toaster("Success", "Data update successfully", "success");
                $("#cancel-2").trigger("click");
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
  $.getJSON(baseUrl + "/admin/visimisi/get", function (
    data,
    textStatus,
    jqXHR
  ) {
    console.log(data);
    console.log(textStatus);
    console.log(jqXHR);
    if (data !== null) {
      console.table(data);
      $(".id-visimisi").prop("disabled", false).val(data.id);
      $("#visi").val(data.vision_desc);
      $("#misi").val(data.mision_desc);
    } else {
      console.log("Data belum ada");
    }
  });
}
