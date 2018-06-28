 function fetchDetails(op){
  var link = "http://localhost:8082/rest-api/api.php";
  var params = "id="+op;
  $.ajax({
    type: "GET",
    url: link,
    data: params,
    success: function(response){
      if(response.data != null){
        console.log(response);
        $("#name").val(response.data.name);
        $("#address").val(response.data.address);
        $("#type").val(response.data.type);
        $("#mobile").val(response.data.mobile);
        $("#submit" ).focus();
        $("#message").html("Wow! "+response.status_message +"<br> Member Name '"+ response.data.name +"' set automatically.");
      }else{
        console.log(response);
        $("#code" ).focus();
        $("#message").html(response.status_message);
      }
    },
    error: function (e) {
      $("#message").html(e.statusText);
      $("#code" ).focus();
      console.log(e);
    }
  });
}

$("form").submit(function(){
    alert("Submitted");
});

$("#reset").click(function() {
    $(this).closest('form').find("input[type=text], textarea").val("");
});