function validateIt()
{
	var uname=document.forms["user-form"]["uname"].value;
	var email=document.forms["user-form"]["email"].value;
	var mob=document.forms["user-form"]["mobno"].value;

	var text="";



	if(uname=="")
	{
		text+="Name";
		 if(email=="")
		{
			text+=", email";		
				if(mob=="")
				{
					text+=", Mobile Number";
					alert("please enter "+text);
					return false;
				}
				else
				{
					alert("please enter "+text);
					return false;
				}
		}
		else
		{
			alert("please enter "+text);
				return false;
		}
	}
	else if(email=="")
		{
			text+="email";		
				if(mob=="")
				{
					text+=", Mobile Number";
					alert("please enter "+text);
					return false;
				}
				else
				{
					alert("please enter "+text);
					return false;
				}
		}
		else if(mob=="")
				{
					text+="Mobile Number";
					alert("please enter "+text);
					return false;
				}
		else
		{
			if(mob.length!=10)
			{
				alert("Please enter 10 digit Mobile Number");
				return false;
			}
		}
		

		
}