"use strict"



function nameValidation(){
	

      
       let data= document.getElementById('name').value;
	
       
	if ( data == '' ) {
		
	
		if (data == trim(data) && strpos(data, " ") !== false) {
			if ((data[0] >= 'a' && data[0] <= 'z') || (data[0] >= 'A' && data[0] <= 'Z')) {
				for ($i = 0; $i < strlen(data); $i++) {
					if ((data[$i] >= 'a' && data[$i] <= 'z') || (data[$i] >= 'A' && data[$i] <= 'Z') 
					|| (data[$i] == ' ') || (data[$i] == '-') || (data[$i] == '.')) {
					} 
					
					else {
                        
                        alert("Must be letter between a-z & A-Z and 1");
					}
				}
                
                alert(data);
			} 
			
			else {
              
                alert( "Must be start with letter and 2");
			}
		} 
		
		else {
           
             alert("At least two words needed and 3");
		}
	}
	
	else {
        
        alert("Name fill required");
        
	}







}