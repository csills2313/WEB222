// JavaScript Document
 $(document).ready(function(){
   $("#contact_form").validate({
      rules: {
         	name: {
            required: true,
               },
			    state: {
            required: true,
               },		   
			    address: {
            required: true,
               },
			   zipcode: {
            required: true,
               },
			  email: {
            required: true,
			email:true
               },
			  address:{
              required:true,             
              }
         },
         messages: {
           	name:  "Name Required",	
			subject:  "Subject Required",		
			email: "Valid Email Required",			
			address: "Address Required",
			state: "Address Required",
			zipcode: "Zip Required",				
         },
     });
});