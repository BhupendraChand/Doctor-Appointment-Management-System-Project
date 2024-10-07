
var date = new Date();
var tdate = date.getDate();
var month = date.getMonth()+1;
var year = date.getUTCFullYear();
if(tdate < 10){
    tdate = "0" + tdate; 
  }
  if(month < 10){
    month = "0" + month;
  }

  var minDate = year + "-" + month + "-" + tdate;
  document.getElementById("txtDate").setAttribute("min", minDate);
  document.getElementById("txtDate").setAttribute("max", minDate);
  console.log(minDate);

  /* alternative
var maxDate = year + "-" + month + "-" + tdate;
document.getElementById("txtDateOfBirth").setAttribute("min", maxDate);
document.getElementById("txtDateOfBirth").setAttribute("max", maxDate);
console.log(maxDate);
  */