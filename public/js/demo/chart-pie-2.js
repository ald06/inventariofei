// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart2");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Recibidos","Finalizados"],
    datasets: [{
      data: [40, 60],
      backgroundColor: ['rgba(38, 252, 0, 0.58)', 'rgba(255, 35, 0, 0.75)'],
      hoverBackgroundColor: ['rgba(38, 252, 0, 0.58)', 'rgba(255, 35, 0, 0.75)'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(55, 51, 51)",
      bodyFontColor: "#ffffff",
      borderColor: '#373333',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
