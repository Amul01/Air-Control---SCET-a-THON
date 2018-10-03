$(document).ready(function(){
  $.ajax({
    url : "localhost/dashboard.php",
    type : "GET",
    success : function(data){
      console.log(data);

      var ID = [];
      var co2 = [];
      var co = [];
      var nh4 = [];

      for(var i in data) {
        ID.push("UserID " + data[i].ID);
        co2.push(data[i].co2);
        co.push(data[i].co);
        nh4.push(data[i].nh4);
      }

      var chartdata = {
        labels: ID,
        datasets: [
          {
            label: "co2",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(59, 89, 152, 0.75)",
            borderColor: "rgba(59, 89, 152, 1)",
            pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
            pointHoverBorderColor: "rgba(59, 89, 152, 1)",
            data: co2
          },
          {
            label: "co",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(29, 202, 255, 0.75)",
            borderColor: "rgba(29, 202, 255, 1)",
            pointHoverBackgroundColor: "rgba(29, 202, 255, 1)",
            pointHoverBorderColor: "rgba(29, 202, 255, 1)",
            data: co
          },
          {
            label: "nh4",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(211, 72, 54, 0.75)",
            borderColor: "rgba(211, 72, 54, 1)",
            pointHoverBackgroundColor: "rgba(211, 72, 54, 1)",
            pointHoverBorderColor: "rgba(211, 72, 54, 1)",
            data: nh4
          }
        ]
      };

      var ctx = $("#mycanvas");

      var LineGraph = new Chart(ctx, {
        type: 'line',
        data: chartdata
      });
    },
    error : function(data) {

    }
  });
});