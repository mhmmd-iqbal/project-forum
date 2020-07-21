let konfirmBiodata = false;
let konfirmTentang = false;
let konfirmPhoto = false;
$("#informasi-umum-tab").on("click", function () {
  informasiUmum();
});

$("#tentang-saya-tab").on("click", function () {
  tentangSaya();
});

$("#photo-tab").on("click", function () {
  getPhoto();
});

$("#photo-tab").on("click", function () {});

$("#submit-biodata").click(function (e) {
  e.preventDefault();
  $("#form-biodata").trigger("submit");
});

$("#submit-tentang").click(function (e) {
  e.preventDefault();
  $("#form-tentang").trigger("submit");
});

$("#submit-photo").click(function (e) {
  e.preventDefault();
  $("#form-photo").trigger("submit");
});

$("#form-biodata").on("submit", function (e) {
  e.preventDefault();
  konfirmBiodata = confirm("Update biodata ?");
  var formData = new FormData(this);
  if (konfirmBiodata) {
    $.ajax({
      type: "POST",
      url: baseUrl + "/admin/biodata/updateBiodata",
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: () => {
        $("#submit-biodata").prop("disabled", true);
        $("#spinner-1").prop("hidden", false);
      },
      success: (res) => {
        if (res.status === false) {
          informasiUmum();
          $(".form-update-1").prop("readonly", true);
          $("#update-1").prop("hidden", true);
          $("#reset-1").prop("hidden", false);
        }
        $("#submit-biodata").prop("disabled", false);
        $("#spinner-1").prop("hidden", true);
        toaster(res.header, res.text, res.icon);
      },
      error: function (XMLHttpRequest, textStatus, errorThrown) {
        $("#submit-biodata").prop("disabled", false);
        $("#spinner-1").prop("hidden", true);
        alert("Status: " + textStatus);
        alert("Error: " + errorThrown);
      },
    });
  }
});

$("#form-tentang").on("submit", function (e) {
  e.preventDefault();
  konfirmTentang = confirm("Update data ?");
  var formData = new FormData(this);
  if (konfirmTentang) {
    $.ajax({
      type: "POST",
      url: baseUrl + "/admin/biodata/updateTentangSaya",
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: () => {
        $("#submit-tentang").prop("disabled", true);
        $("#spinner-2").prop("hidden", false);
      },
      success: (res) => {
        if (res.status === true) {
          tentangSaya();
          $(".form-update-2").prop("readonly", true);
          $("#update-2").prop("hidden", true);
          $("#reset-2").prop("hidden", false);
        }
        $("#submit-tentang").prop("disabled", false);
        $("#spinner-2").prop("hidden", true);
        toaster(res.header, res.text, res.icon);
      },
      error: function (XMLHttpRequest, textStatus, errorThrown) {
        $("#submit-tentang").prop("disabled", false);
        $("#spinner-2").prop("hidden", true);
        alert("Status: " + textStatus);
        alert("Error: " + errorThrown);
      },
    });
  }
});
var fileError = true;
var fileSize = "";
$("#inputFile").bind("change", function () {
  fileSize = this.files[0].size / 1024;
  if (fileSize > 1024) {
    fileError = true;
  } else {
    fileError = false;
  }
  console.table(fileError);
  console.table(fileSize);
});

$("#form-photo").on("submit", function (e) {
  e.preventDefault();
  konfirmPhoto = confirm("Update Photo ?");
  var formData = new FormData(this);
  var fileName = $("#inputFile").val();
  if (konfirmPhoto) {
    if (fileName === null || fileName === "") {
      toaster("Gambar Kosong", "Silahkan Pilih Gambar", "warning");
      $("#errorMessage")
        .html("<strong>Gambar Tidak Boleh Kosong</strong>")
        .prop("hidden", false);
    } else {
      if (fileError === true) {
        toaster("Error", "Gambar Tidak Boleh Lebih Dari 2MB", "warning");
        $("#errorMessage")
          .html(
            "<strong>Gambar Terlalu Besar. Ukuran Gambar = " +
              fileSize.toFixed(2) +
              "MB </strong>"
          )
          .prop("hidden", false);
      } else {
        $.ajax({
          type: "POST",
          url: baseUrl + "/admin/biodata/updatePhoto",
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: () => {
            $("#submit-photo").prop("disabled", true);
            $("#spinner-3").prop("hidden", false);
          },
          success: (res) => {
            if (res.status === true) {
              getPhoto();
              // $(this).trigger(reset);
              $("#form-photo-view").prop("hidden", true);
              $("#submit-gambar").prop("hidden", true);
              $("#btn-photo-show").prop("hidden", false);
            }
            $("#submit-photo").prop("disabled", false);
            $("#spinner-3").prop("hidden", true);
            toaster(res.header, res.text, res.icon);
          },
          error: function (XMLHttpRequest, textStatus, errorThrown) {
            $("#submit-photo").prop("disabled", false);
            $("#spinner-3").prop("hidden", true);
            alert("Status: " + textStatus);
            alert("Error: " + errorThrown);
          },
        });
      }
    }
  }
});

$("#show-update-1").on("click", function () {
  $(".form-update-1").prop("readonly", false);
  $("#update-1").prop("hidden", false);
  $("#reset-1").prop("hidden", true);
});

$("#hide-update-1").on("click", function () {
  $(".form-update-1").prop("readonly", true);
  $("#update-1").prop("hidden", true);
  $("#reset-1").prop("hidden", false);
});

$("#show-update-2").on("click", function () {
  $(".form-update-2").prop("readonly", false);
  $("#update-2").prop("hidden", false);
  $("#reset-2").prop("hidden", true);
});

$("#hide-update-2").on("click", function () {
  $(".form-update-2").prop("readonly", true);
  $("#update-2").prop("hidden", true);
  $("#reset-2").prop("hidden", false);
});

informasiUmum();

function informasiUmum() {
  $.ajax({
    type: "GET",
    url: baseUrl + "/admin/biodata/getBiodata",
    dataType: "JSON",
    success: (data) => {
      if (data !== null) {
        $("#nama").val(data.nama);
        $("#tempat_lahir").val(data.tempat_lahir);
        $("#tanggal_lahir").val(data.tanggal_lahir);
        $("#hp").val(data.hp);
        $("#email").val(data.email);
        $("#alamat").val(data.alamat);
        $("#id-biodata").prop("disabled", false).val(data.id);
        console.table(data);
      } else {
        console.log("Data belum ada");
      }
    },
  });
}

function getPhoto() {
  $.ajax({
    type: "GET",
    url: baseUrl + "/admin/biodata/getPhoto",
    dataType: "JSON",
    success: (data) => {
      if (data !== null) {
        $("#tentang").val(data.tentang);
        $("#previewGambar").prop(
          "src",
          baseUrl + "/assets/gambar/" + data.photo
        );
        console.table(data);
      } else {
        console.log("Data belum ada");
      }
    },
  });
}

function tentangSaya() {
  $.ajax({
    type: "GET",
    url: baseUrl + "/admin/biodata/getTentangSaya",
    dataType: "JSON",
    success: (data) => {
      if (data !== null) {
        $("#tentang").val(data.tentang);
        $("#id-tentang").prop("disabled", false).val(data.id);
        console.table(data);
      } else {
        console.log("Data belum ada");
      }
    },
  });
}

$("#inputFile").change(function (event) {
  getURL(this);
  $("#submit-gambar").prop("hidden", false);
});

function getURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    var filename = $("#inputFile").val();
    filename = filename.substring(filename.lastIndexOf("\\") + 1);
    reader.onload = function (e) {
      $("#imgView").attr("src", e.target.result);
      $("#imgView").hide();
      $("#imgView").fadeIn(500);
      $(".custom-file-label").text(filename);
    };
    reader.readAsDataURL(input.files[0]);
  }
}

$("#btn-photo-show").on("click", function () {
  $("#form-photo-view").prop("hidden", false);
  $("#submit-gambar").prop("hidden", false);
  $("#btn-photo-show").prop("hidden", true);
});

$("#btn-photo-hide").on("click", function () {
  $("#form-photo-view").prop("hidden", true);
  $("#submit-gambar").prop("hidden", true);
  $("#btn-photo-show").prop("hidden", false);
});

$("input:file").change(function () {
  var fileName = $(this).val();
  console.table(fileName);
  if (fileName === null || fileName === "") {
    alert("kosong");
  }
});
