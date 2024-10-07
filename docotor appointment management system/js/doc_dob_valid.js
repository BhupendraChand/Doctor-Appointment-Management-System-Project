var todayDate = new Date();
var month = todayDate.getMonth()+5; //if next month comes then reduce it by 1 i.e 6
var year = todayDate.getUTCFullYear()-23; 
var tdate = todayDate.getDate()+28; // if date increases then reduce it to match it to 31 days of month else it will malfunction displaying current year
if(month < 10){
  month = "0" + month;
}
if(tdate < 10){
  tdate = "0" + tdate;
}
var maxDate = year + "-" + month + "-" + tdate;
document.getElementById("txtDateOfBirth").setAttribute("max", maxDate);
console.log(maxDate);