<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript"></script>
<script>
    function submitData(action){

    $(document).ready(function(){
        var data = {
            action:action,
            id: $("#id").val(),
            name: $("#name").val(),
            dob: $("#dob").val(),
            gender: $("#gender").val(),
            image: $("#image").val(),
            check:$("#defaultcheck").val(),
            subject: $("#subject").val(),
            address: $("#address").val(),
            emailid: $("#emailid").val(),
            password: $("#password").val(),
            contact: $("#contact").val(),
        };
      $.ajax({
      url: "formdata.php",
      type: "post",
      data: data,
      success: function(response){
        alert(response);
        if(response == "Deleted Successfully"){
        $("#"+action).css("display","none");}
      }

    });
    });
    }
</script>