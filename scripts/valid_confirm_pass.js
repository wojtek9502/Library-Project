function confirm_passwords() {
        var pass1 = document.getElementById("pass").value;
        var pass2 = document.getElementById("pass_confirm").value;
        if (pass1 != pass2) {
            document.getElementById("pass").style.borderColor = "#E34234";
            document.getElementById("pass_confirm").style.borderColor = "#E34234";
            document.getElementById("confirm_status").style.color = "#E34234";
            document.getElementById("confirm_status").innerHTML = "Hasła nie są identyczne";
        }
        else {

          document.getElementById("pass").style.borderColor = "green";
          document.getElementById("pass_confirm").style.borderColor = "green";
          document.getElementById("confirm_status").style.color = "green";
          document.getElementById("confirm_status").innerHTML = "Hasła są identyczne";
        }
    }
