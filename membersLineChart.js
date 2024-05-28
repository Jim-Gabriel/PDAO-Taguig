// Get the context of the line chart
const ctx2 = document.getElementById('membersLineChart');

// Define the initial chart data
const chartData = {
  yearly: {
    labels: ['2020', '2021', '2022', '2023', '2024'], // Years as labels
    data: [70, 170, 100, 180, 220], // Number of members for each year
  },
  monthly: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'], // Months as labels
    data: [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120], // Number of members for each month
  }
};

// Initialize the chart with yearly data
const chart = new Chart(ctx2, {
  type: 'line',
  data: {
    labels: chartData.yearly.labels,
    datasets: [{
      label: 'Members',
      data: chartData.yearly.data,
      borderWidth: 1,
      borderColor: '#1E4499', // Change the color here
      backgroundColor: '#1E4499' // Optional: Change the background color
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
        title: {
          display: true,
          text: 'Number of Members'
        }
      },
      x: {
        title: {
          display: true,
          text: 'Years'
        }
      }
    }
  }
});

// Handle dropdown item click events
document.getElementById('filterYearly').addEventListener('click', function() {
  updateChart('yearly');
});

document.getElementById('filterMonthly').addEventListener('click', function() {
  updateChart('monthly');
});

// Function to update the chart data based on filter selection
function updateChart(filter) {
  chart.data.labels = chartData[filter].labels;
  chart.data.datasets[0].data = chartData[filter].data;
  chart.update();
}












// // Get the context of the line chart
// const ctx2 = document.getElementById('membersLineChart').getContext('2d');

// // Define the initial chart data
// const chartData = {
//   yearly: {
//     labels: ['2020', '2021', '2022', '2023', '2024'], // Years as labels
//     data: [70, 170, 100, 180, 220], // Number of members for each year
//   },
//   monthly: {
//     labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'], // Months as labels
//     data: [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120], // Number of members for each month
//   }
// };

// // Initialize the chart with yearly data
// const chart = new Chart(ctx2, {
//   type: 'line',
//   data: {
//     labels: chartData.yearly.labels,
//     datasets: [{
//       label: 'Members',
//       data: chartData.yearly.data,
//       borderWidth: 1,
//       borderColor: '#1E4499', // Change the color here
//       backgroundColor: 'rgba(30, 68, 153, 0.1)' // Optional: Change the background color
//     }]
//   },
//   options: {
//     responsive: true,
//     maintainAspectRatio: true,
//     scales: {
//       y: {
//         beginAtZero: true,
//         title: {
//           display: true,
//           text: 'Number of Members',
//           font: function(context) {
//             var width = context.chart.width;
//             var size = Math.round(width / 25);
//             return {
//               size: size,
//               weight: 'bold'
//             };
//           }
//         },
//         ticks: {
//           font: function(context) {
//             var width = context.chart.width;
//             var size = Math.round(width / 35);
//             return {
//               size: size
//             };
//           }
//         }
//       },
//       x: {
//         title: {
//           display: true,
//           text: 'Years',
//           font: function(context) {
//             var width = context.chart.width;
//             var size = Math.round(width / 25);
//             return {
//               size: size,
//               weight: 'bold'
//             };
//           }
//         },
//         ticks: {
//           font: function(context) {
//             var width = context.chart.width;
//             var size = Math.round(width / 35);
//             return {
//               size: size
//             };
//           }
//         }
//       }
//     },
//     plugins: {
//       legend: {
//         labels: {
//           font: function(context) {
//             var width = context.chart.width;
//             var size = Math.round(width / 30);
//             return {
//               size: size,
//               weight: 'bold'
//             };
//           }
//         }
//       },
//       tooltip: {
//         titleFont: function(context) {
//           var width = context.chart.width;
//           var size = Math.round(width / 30);
//           return {
//             size: size,
//             weight: 'bold'
//           };
//         },
//         bodyFont: function(context) {
//           var width = context.chart.width;
//           var size = Math.round(width / 35);
//           return {
//             size: size
//           };
//         }
//       }
//     }
//   }
// });

// // Handle dropdown item click events
// document.getElementById('filterYearly').addEventListener('click', function() {
//   updateChart('yearly');
// });

// document.getElementById('filterMonthly').addEventListener('click', function() {
//   updateChart('monthly');
// });

// // Function to update the chart data based on filter selection
// function updateChart(filter) {
//   chart.data.labels = chartData[filter].labels;
//   chart.data.datasets[0].data = chartData[filter].data;
//   chart.update();
// }
