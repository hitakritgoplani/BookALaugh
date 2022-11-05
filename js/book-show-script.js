function nameValidate()
{
    var uname = document.getElementById("fname").value;
    var result = /^[a-zA-Z\ \'\-]{2,100}$/;
    if(result.test(uname))
    {
        document.getElementById("errname").innerHTML="<strong>Valid name</strong>";
    }
    else if(!(result.test(uname)))
    {
        document.getElementById("errname").innerHTML="<strong>Please enter atleast 2 characters</strong>"; 
        document.getElementById("fname").focus();
    }
    result = /^[0-9]{1,100}$/; 
    if(result.test(uname))
    {
        document.getElementById("errname").innerHTML="<strong>Not a name</strong>"; 
        document.getElementById("fname").focus();
    }   
}
function numberValidate()
{
    var uphone = document.getElementById("fphone").value;
    result = /^[0-9]{10,10}$/;
    if(result.test(uphone))
    {
        document.getElementById("errphone").innerHTML="<strong>Valid number</strong>";
    }
    else
    {
        document.getElementById("errphone").innerHTML="<strong>Invalid valid number</strong>"; 
        document.getElementById("fphone").focus();
    }
}

function ticketValidate()
{
    var uticket = document.getElementById("fticketno").value;
    result = /^[1-5]$/;
    if(result.test(uticket))
    {
        document.getElementById("errticket").innerHTML="<strong>Valid number of tickets</strong>"; 
    }
    else
    {
        document.getElementById("errticket").innerHTML="<strong>Invalid number of tickets</strong>"; 
        document.getElementById("fticketno").focus();
    }
}