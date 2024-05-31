// Get the context of the line chart
const ctx3 = document.getElementById('newApplicantsLineChart');

// Define the initial chart data
const chartData1 = {
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
const newApplicantsChart = new Chart(ctx3, { // Renamed variable to newApplicantsChart
  type: 'line',
  data: {
    labels: chartData.yearly.labels,
    datasets: [{
      label: 'Applicants',
      data: chartData.yearly.data,
      borderWidth: 1,
      borderColor: '#c9a449', // Change the color here
      backgroundColor: '#c9a449' // Optional: Change the background color
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
        title: {
          display: true,
          text: 'Number of Applicants'
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
  newApplicantsChart.data.labels = chartData[filter].labels;
  newApplicantsChart.data.datasets[0].data = chartData[filter].data;
  newApplicantsChart.update();
}















// // Get the context of the line chart
// const ctx3 = document.getElementById('newApplicantsLineChart');

// // Define the initial chart data
// const chartData1 = {
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
// const newApplicantsChart = new Chart(ctx3, { // Renamed variable to newApplicantsChart
//   type: 'line',
//   data: {
//     labels: chartData.yearly.labels,
//     datasets: [{
//       label: 'Applicants',
//       data: chartData.yearly.data,
//       borderWidth: 1,
//       borderColor: '#c9a449', // Change the color here
//       backgroundColor: '#c9a449' // Optional: Change the background color
//     }]
//   },
//   options: {
//     scales: {
//       y: {
//         beginAtZero: true,
//         title: {
//           display: true,
//           text: 'Number of Applicants'
//         }
//       },
//       x: {
//         title: {
//           display: true,
//           text: 'Years'
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
//   newApplicantsChart.data.labels = chartData[filter].labels;
//   newApplicantsChart.data.datasets[0].data = chartData[filter].data;
//   newApplicantsChart.update();
// }
