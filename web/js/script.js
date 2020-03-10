/*
    The function formSubmit() is called when the form "myform" is submitted.
    It runs some validations and shows the output.
*/
function formSubmit(){
    var myOutput = ''; // we will use this to store the output of the form
    var errors = ''; // we will use this to store any error messages.
    
    // Fetching the values of all the fields entered by the user.

    // Using getElementById for most of the fields as they have just one
    // input field unlike radio buttons which have multiple.
    var vendorNo = document.getElementById('vendorNo').value;
    
    var Description = document.getElementById('Description').value;
    var OnHand = document.getElementById('OnHand').value;
    
    var OnOrder = document.getElementById('OnOrder').value;
    
    var Cost = document.getElementById('Cost').value;
    
    

    
    

  
   


   

    // Testing if vendor number is blank
    if(vendorNo != ''){ 
        errors += ''; // No error in vendor number
    }
    else{
        errors += 'Vendor Number Is Required<br/>'; // Error found in Vendor Number
    }

  

    // Comparing the errors string if any errors were found.
    if(errors.trim() != ''){ // trim is the function that trims any empty spaces from front or back
        // Showing the errors
        document.getElementById('errors').innerHTML = errors + '-- Please fix the above errors --';
        document.getElementById('errors').style.border = '2px dashed white';

        return false;
    }
    else{
        return true;
    }
    
}