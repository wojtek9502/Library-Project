  var date = new Date();

  function day_name()
  {
    var day_name;
    switch (date.getDay())
    {
      case 0:
        day_name = 'Dzis mamy Niedziele';
        break;
      case 1:
        day_name= 'Dzis mamy Poniedziałek';
        break;
      case 2:
        day_name= 'Dzis mamy Wtorek';
        break;
      case 3:
        day_name= 'Dzis mamy Środę';
        break;
      case 4:
        day_name= 'Dzis mamy Czwartek';
        break;
      case 5:
        day_name= 'Dzis mamy Piątek';
        break;
      case 6:
        day_name= 'Dzis mamy Sobotę';
        break;
     }
     document.getElementById('day_name').innerHTML = day_name;
  }


function clockTick() {
  var time = new Date()
      timeVal = ("0" + time.getHours()).slice(-2)   + ":" +
             ("0" + time.getMinutes()).slice(-2) + ":" +
             ("0" + time.getSeconds()).slice(-2);

  document.getElementById('time').innerHTML = timeVal;
}
setInterval(clockTick, 100);
day_name();
