function validate()
{
    var sname=document.getElementById("sname").value;
    var sdob=document.getElementById("sdob").value;
    var srollno=document.getElementById("srollno").value;
    var sno=document.getElementById("sno").value;
    var semail=document.getElementById("semail").value;
    var spassword=document.getElementById("spassword").value;
    var srepassword=document.getElementById("srepassword").value;

    var nameFormat=/^[A-Z][a-z\s.]+$/;
    var rollFormat=/^(?:[1-9]|[1-5]\d|60)$/;
    var numberFormat=/^\d{10}$/;
    var emailFormat=/^[^@\s]+@[^@\s]+\.[^@\s]+$/;
    var passwordFormat=/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@$%&*?])[A-Za-z\d!@$%&*?]{8,}$/;

    if(sname=="" || sno=="" || semail=="" || srollno=="" || spassword=="" || srepassword=="" || sdob=="")
        {
            alert("All fields must be filled");
            return false;
        }
        if(!nameFormat.test(sname))
        {
            alert("Name should start with capital letter and shouldn't contain digits & symbols");
            return false;
        }
        if(!rollFormat.test(srollno))
            {
                alert("Roll number must be b/w 1-60");
                return false;
            }
        if(!numberFormat.test(sno))
        {
            alert("Phone number should have 10 digits");
            return false;
        }
        if(!emailFormat.test(semail))
        {
            alert("Incorrect Email Format");
            return false;
        }
        if(!passwordFormat.test(spassword))
        {
            alert("Password must be at least 8 characters long, contain at least one lowercase letter, one uppercase letter, one digit, and one special character.");
            return false;
        }
    
        if(spassword!=srepassword)
        {
            alert("Passwords do not match!!!");
            return false;
        }
        return true;
}