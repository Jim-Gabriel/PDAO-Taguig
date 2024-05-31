const ctx = document.getElementById('genderPieChart').getContext('2d');

new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ['Male', 'Female', 'Others'],
    datasets: [{
      label: '# of People',
      data: [38, 42, 20],
      borderWidth: 2
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: true,
    plugins: {
      legend: {
        labels: {
          font: function(context) {
            var width = context.chart.width;
            var size = Math.round(width / 25);
            return {
              size: size,
              weight: 'bold'
            };
          }
        }
      },
      tooltip: {
        titleFont: function(context) {
          var width = context.chart.width;
          var size = Math.round(width / 25);
          return {
            size: size,
            weight: 'bold'
          };
        },
        bodyFont: function(context) {
          var width = context.chart.width;
          var size = Math.round(width / 30);
          return {
            size: size
          };
        }
      }
    }
  }
});
