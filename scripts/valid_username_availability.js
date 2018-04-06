//jako parametr przyjmuj zmienna z php zawierajaca wszystkie loginy
//skrypt uruchamiany w input "login" w atrybucie onchange

function valid_usernames(string_usernames) {
  var login_is_used = false;
  var username_from_form = document.getElementById("login").value; //pobieranie wartosci wpisanej
  var table_usernames = string_usernames.split(" ");// zmien pobrane loginy z bazy na tablice

  for (var i = 0; i < table_usernames.length; i++)
  {
      if (table_usernames[i]==username_from_form)
      {
        login_is_used = true;
      }
  }

  if(login_is_used==true)
  {
      document.getElementById("login").style.borderColor = "#E34234";
      document.getElementById("login_availabillity").style.color = "#E34234";
      document.getElementById("login_availabillity").innerHTML = "Login zajęty";
  }
  else {
    document.getElementById("login").style.borderColor = "green";
    document.getElementById("login_availabillity").style.color = "green";
    document.getElementById("login_availabillity").innerHTML = "Login wolny";
  }
}
