// past date disable


   var date = new Date();
   var tdate = date.getDate();//current date
   var month = date.getMonth()+1;// but normally +1 is not actual syntax of month.This done to get today month only in date field. here, +1 is added to get current month because if don't add +1 here then today is 12june one month means till may12 will show which you don't want to get
   var year = date.getUTCFullYear();//current year
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

      /*
// future date disable

      var todayDate = new Date();//date getting syntax
      var month = todayDate.getMonth()+1; // +1 then current month + one month ahead
      var year = todayDate.getUTCFullYear() ; //current year
      var tdate = todayDate.getDate(); // today date
      if(month < 10){
        month = "0" + month;
      }
      if(tdate < 10){
        tdate = "0" + tdate;
      }
      var maxDate = year + "-" + month + "-" + tdate;
      document.getElementById("txtDate").setAttribute("max", maxDate);
      console.log(maxDate);
*/

/*

  // past and future disable and allow today date only then


    var todayDate = new Date();
      var month = todayDate.getMonth()+1; 
      var year = todayDate.getUTCFullYear() ; 
      var tdate = todayDate.getDate(); 
      if(month < 10){
        month = "0" + month;
      }
      if(tdate < 10){
        tdate = "0" + tdate;
      }
      var maxDate = year + "-" + month + "-" + tdate;
      document.getElementById("txtDate").setAttribute("max", maxDate);
      document.getElementById("txtDate").setAttribute("min", maxDate);
      console.log(maxDate);

    */

      
/*

  // if you want how many past year can be allowed to pick then subtract in year


    var todayDate = new Date();
      var month = todayDate.getMonth()+1; 
      var year = todayDate.getUTCFullYear()-5;//past 5years is only allowed maxmimum 
      var tdate = todayDate.getDate(); 
      if(month < 10){
        month = "0" + month;
      }
      if(tdate < 10){
        tdate = "0" + tdate;
      }
      var maxDate = year + "-" + month + "-" + tdate;
      document.getElementById("txtDate").setAttribute("min", maxDate);
      console.log(maxDate);

    */


      /* 
      // from today date to future date

 var todayDate = new Date();
      var month = todayDate.getMonth(); 
      var year = todayDate.getUTCFullYear() - 0; 
      var tdate = todayDate.getDate(); 
      if(month < 10){
        month = "0" + month 
      }
      if(tdate < 10){
        tdate = "0" + tdate;
      }
      var maxDate = year + "-" + month + "-" + tdate;
      document.getElementById("txtDate").setAttribute("min", maxDate);
      console.log(maxDate);

      */

        /* 
      // future date disable
      var todayDate = new Date();
      var month = todayDate.getMonth(); //04 - current month
      var year = todayDate.getUTCFullYear() - 18; //2021 - current year
      var tdate = todayDate.getDate(); // 27 - current date 
      if(month < 10){
        month = "0" + month //'0' + 4 = 04
      }
      if(tdate < 10){
        tdate = "0" + tdate;
      }
      var maxDate = year + "-" + month + "-" + tdate;
      document.getElementById("txtDate").setAttribute("max", maxDate);
      console.log(maxDate);
      */
