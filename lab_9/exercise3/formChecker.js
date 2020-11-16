function validateInput()
{
    var username = document.getElementById("username").value;
    filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if(filter.test(username))
    {
        return true;
    }
    else
    {
        alert("invalid username");
        return false;
    }
}
