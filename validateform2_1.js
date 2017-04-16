function myFunction()
{

 var x = document.forms["addprojform"]["name"];
	if (x.value == "") 
	{
        	alert("Project Name should not be blank !!");
        	return false;
    	}

	if (! allLetter(x)) 
	{
		 alert("Project Name should be all characters!!");
		 return false;
	}
         
var z = document.forms["addprojform"]["Projabs"];
	if (z.value == "") 
	{
        	alert("Project Abstract should not be blank !!");
        	return false;
    	}

var t = document.forms["addprojform"]["guide"];


	
	if (guideselect(t))
	{
		 alert('Please select a guide!!!');
      return false;
	}

}

function allLetter(inputtxt)
                {
                 var letters = /^[A-Za-z]+$/;
                 if(inputtxt.value.match(letters))
                   {
              	     return true;
                   }
                 else
                   {
              	     return false;
                   }
                }

function guideselect(guide)
		{
		 if(guide.value == "no")
		   {
		    alert('no');
		    return false;
		   }
		 else
		   {
		    alert('yes');
		    return true;
		   }
		}

            