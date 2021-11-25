var password1 = document.getElementsByName("password")
var password2 = document.getElementsByName("passwordcek")

function matchPassword() {
    if(password1 != password2)
    {	
        alert("Password tidak sama");
    }
  }