$(function(){
  $("#them").click(function(){
    $("ul").append("<li>"+$("#text1").val()+"</li>");
  });
  $("#xoa").click(function(){
    $("ul").remove();
  });
});
