// JavaScript Document
 $(document).ready(function(){
   $("#contact_form").validate({
      rules: {
         	name: {
            required: true,
               },
			    subject: {
            required: true,
               },		   
			    message: {
            required: true,
               },
			  email: {
            required: true,
			email:true
               },
			  message:{
              required:true,
              minlength:8
              }
         },
         messages: {
           	name:  "Name Required",	
			subject:  "Subject Required",		
			email: "Valid Email Required",			
			message: "Message Required"			
         },
     });
});