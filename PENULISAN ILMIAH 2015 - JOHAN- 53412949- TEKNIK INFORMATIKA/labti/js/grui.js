$(document).ready(function(){



     $("#blocking").hide();
     $("#dialog").hide();
      $("#dialog2").hide();
    //$("#t").click(function(){
      //  $("input:text").val("Glenn Quagmire");
    //});
	 
	 
});

function checktoken()
{

 var a=document.getElementById("tokenizer").value;

 if (a=="labti12345")
 {
 		$(document).ready(function(){



     $("#blocking").show(3000);
    //$("#t").click(function(){
      //  $("input:text").val("Glenn Quagmire");
    //});
		  

	 
		});

 } else if(a==""){ 
      $(document).ready(function(){
          $( "#dialog" ).show(500);
          $( "#dialog" ).slideUp(5000);
             
    });
 }  


 else if(a!="labti12345"){ 
      $(document).ready(function(){

          $( "#dialog2" ).show(500);
          $( "#dialog2" ).slideUp(5000);
             
    });
 }  




}



 