//odpowiada za aktywowanie lub dezaktywowanie przycisku rejestruj
//w zaleznosci od tego czy w formularzu wpisano unikalny login i te same hasla czy nie
//nie zmieniac w register_form.php tekstu pod inputami loginu i hasla

function set_register_btn_state() {
  login_text = document.getElementById("login_availabillity").textContent;
  pass_text = document.getElementById("confirm_status").textContent;
  // console.log(login_text);
  // console.log(pass_text);

  if (login_text == "Login wolny" && pass_text == "Hasła są identyczne") {
    document.getElementById("register_btn").setAttribute("class", "btn btn btn-success active");
    // console.log('Warunek btn ok');
  }
  else {
    document.getElementById("register_btn").setAttribute("class", "btn btn btn-success disabled");
    // console.log('Warunek btn niespelniony');
  }
}
setInterval(set_register_btn_state,500);
