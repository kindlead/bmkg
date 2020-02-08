$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$('#foto_asset').on('change',function(){
  //get the file name
  var fileName = $(this).val();
  //replace the "Choose a file" label
  $(this).next('.custom-file-label').html(fileName);
  if (this.files && this.files[0]) {
    var reader = new FileReader();
    reader.onload = imageIsLoaded;
    reader.readAsDataURL(this.files[0]);
  }
});

function imageIsLoaded(e) {
  $('#display_foto').attr('src', e.target.result);
};

$("#icon-camera").click(function () {
  $("#foto_asset").trigger('click');
});

$('#foto_asset').on('change', function() {
  var val = $(this).val();
  var tmp = val.split("\\");
  var image = tmp.slice(-1)[0];
  // var tmp = str.slice("f");
  // console.log(image);
  $(this).siblings('.camera-value').text(image);
});

$(document).on('click', '.update_category', function(){
  var id_category = $(this).attr('id_category');
  $.ajax({
    type:"get",
    url:'/asset/setting-detail-asset-category/'+id_category,
    dataType: 'json',
    success:function(data){
      console.log(data);
      $('#id_category').val(id_category);
      $('#nama_kategori').val(data.nama_kategori);
    }
  });
});

$(document).on('click', '.updatecategory', function(){
  var id_category = $('#id_category').val();
  var nama_kategori = $('#nama_kategori').val();
  $.ajax({
    url: '/asset/setting-update-asset-category/'+id_category,
    type: 'post',
    data: {nama_kategori: nama_kategori},
    success: function (data) {
      console.log(data);
        window.location = "http://127.0.0.1:8000/asset/setting-page";
    },
    error: function (data) {
        console.log('Error:', data);
    }
  });
});

$(document).on('click', '.update_type', function(){
  var id_type = $(this).attr('id_type');
  $.ajax({
    type:"get",
    url:'/asset/setting-detail-asset-type/'+id_type,
    dataType: 'json',
    success:function(data){
      console.log(data);
      $('#id_type').val(id_type);
      $('#nama_jenis').val(data.nama_jenis);
    }
  });
});

$(document).on('click', '.updatetype', function(){
  var id_type = $('#id_type').val();
  var nama_jenis = $('#nama_jenis').val();
  $.ajax({
    url: '/asset/setting-update-asset-type/'+id_type,
    type: 'post',
    data: {nama_jenis: nama_jenis},
    success: function (data) {
      console.log(data);
        window.location = "http://127.0.0.1:8000/asset/setting-page";
    },
    error: function (data) {
        console.log('Error:', data);
    }
  });
});

$(function(){
  $('.format-uang').ready(function(e){
    $(this).val(format($(this).val()));
  });
});

// $(function(){
//   $(".uang").keyup(function(e){
//     $(this).val(format($(this).val()));
//   });
// });
var format = function(num){
  var str = num.toString().replace("", ""), parts = false, output = [], i = 1, formatted = null;
  if(str.indexOf(".") > 0) {
    parts = str.split(".");
    str = parts[0];
  }
  str = str.split("").reverse();
  for(var j = 0, len = str.length; j < len; j++) {
    if(str[j] != ",") {
      output.push(str[j]);
      if(i%3 == 0 && j < (len - 1)) {
        output.push(",");
      }
      i++;
    }
  }
  formatted = output.reverse().join("");
  return("" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
};