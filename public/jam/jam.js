function getServerClock() {
  return $.ajax({async: false}).getResponseHeader('Date');
}

function realtimeClock() {
  let rtClock = new Date();

  let hours = rtClock.getHours();
  let minutes = rtClock.getMinutes();
  let seconds = rtClock.getSeconds();

  hours = ("0" + hours).slice(-2);
  minutes = ("0" + minutes).slice(-2);
  seconds = ("0" + seconds).slice(-2);

  document.getElementById("clock").innerHTML = hours + ":" + minutes + ":" + seconds;
  
  let jamnya = setTimeout(realtimeClock, 500);
}