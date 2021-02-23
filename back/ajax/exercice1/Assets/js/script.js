$(function(){
     
     // recuperation du button
      $("#get-content").click(function(){
            $.ajax({
                url : "section.php",
                methods:"get"
            }).done(function(msg){
                 $("#content").text(msg);
            })
      })
    
})