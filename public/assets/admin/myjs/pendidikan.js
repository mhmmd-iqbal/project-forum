showData();

function showData() {
  let table = $("#data-table").DataTable({
    orderable: false,
    destroy: true,
    responsive: false,
    processing: true,
    serverSide: true,
    order: [],

    ajax: {
      url: baseUrl + "/admin/pendidikan/get",
      type: "POST",
    },

    columnDefs: [
      {
        targets: [0],
        orderable: false,
      },
    ],
  });
}

$("#create-new").on("click", function () {
  $("#modal-id").modal("toggle");
});

$("#form-simpan").on("click", function () {
  $("#form-open").trigger("submit");
});

var fileError = true;
var fileSize = "";
$("#ijazah").bind("change", function () {
  console.table(this.files[0]);
  fileSize = this.files[0].size / 1024;
  if (fileSize > 1024) {
    fileError = true;
    $("#file-desc")
      .prop("hidden", false)
      .html("File " + fileSize.toFixed(2) + " KB. Ukuran File Terlalu Besar!");
  } else {
    $("#file-desc")
      .prop("hidden", false)
      .html("File " + fileSize.toFixed(2) + " KB. File Sesuia");
    fileError = false;
  }
  console.table(fileError);
  console.table(fileSize);
});

function getData() {
  $.ajax({
    type: "GET",
    url: baseUrl + "/admin/pendidikan/get",
    dataType: "JSON",
    success: function (res) {},
  });
}

$("#form-open").submit(function (e) {
  e.preventDefault();
  let nama_sekolah = $("#nama_sekolah");
  let asal_sekolah = $("#asal_sekolah");
  let jenjang = $("#jenjang");
  let tahun = $("#tahun");
  let ijazah = $("#ijazah");
  let error = false;

  if (nama_sekolah.val() === "") {
    toaster("Error", "Nama Sekolah Tidak Boleh Kosong", "warning");
    error = true;
  }
  if (asal_sekolah.val() === "") {
    toaster("Error", "Asal Sekolah Tidak Boleh Kosong", "warning");
    error = true;
  }
  if (tahun.val() === "") {
    toaster("Error", "Tahun Ajaran Tidak Boleh Kosong", "warning");
    error = true;
  }
  if (ijazah.val() === null || ijazah.val() === "") {
    toaster("Error", "File Ijazah Tidak Boleh Kosong", "warning");
    error = true;
  } else {
    if (fileError === true) {
      toaster("Error", "File Ijazah Melebihi Ukuran Yang Diijinkan", "warning");
      error = true;
    }
  }

  if (error === false) {
    var formData = new FormData(this);
    //   console.table(formData);
    $.ajax({
      type: "POST",
      url: baseUrl + "/admin/pendidikan/add",
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: function () {
        $("#form-simpan").prop("disabled", true);
        $("#spinner").prop("hidden", false);
      },
      success: function (res) {
        if (res.status === true) {
          $("#form-open").trigger("reset");
          $("#modal-id").modal("toggle");
          showData();
        }
        $("#form-simpan").prop("disabled", false);
        $("#spinner").prop("hidden", true);
        toaster(res.header, res.text, res.icon);
      },
      error: function (XMLHttpRequest, textStatus, errorThrown) {
        $("#form-simpan").prop("disabled", false);
        $("#spinner").prop("hidden", true);
        alert("Status: " + textStatus);
        alert("Error: " + errorThrown);
      },
    });
  }
});
