<!-- <h2>hello</h2> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Add custom JavaScript to handle selection of pills
    document.querySelectorAll('.pill').forEach(pill => {
      pill.addEventListener('click', function() {
        // document.querySelectorAll('.nav-link').forEach(item => item.classList.toggle('active'));
        this.classList.toggle('active');
      });
    });


    // pie chart functionality
    const ctx = document.getElementById('myDonutChart').getContext('2d');

    const myDonutChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Correct', 'Blue'],
        datasets: [{
            label: 'My Dataset',
            data: [80, 20],
            backgroundColor: ['#058F05', '#EAEAEA'],
            // borderColor: ['darkred', 'darkblue', 'darkyellow'],
            // borderWidth: 1
        }]
    },
    options: {
        cutout: '90%', // For Chart.js 3.x and later
        plugins: {
            tooltip: {
                callbacks: {
                    label: function(context) {
                        const label = context.label || '';
                        const value = context.raw;
                        return `${label}: ${value}`;
                    }
                }
            }
        }
    },
    // plugins: [{
    //     id: 'textInCenter',
    //     beforeDraw: (chart) => {
    //         const {ctx, chartArea, config} = chart;
    //         const {width, height} = chartArea;
    //         const radius = Math.min(width, height) / 2;
    //         const cutoutPercentage = config.options.cutout || '90%'; // Get the cutout percentage
    //         const cutout = parseInt(cutoutPercentage, 10) / 100; // Convert to decimal
    //         const innerRadius = radius * cutout;
    //         const innerDiameter = innerRadius * 2;

    //         // Clear the area before drawing
    //         ctx.restore();
    //         ctx.font = 'bold 16px Poppins';
    //         ctx.textAlign = 'center';
    //         ctx.textBaseline = 'middle';

    //         const centerX = width / 2;
    //         const centerY = height / 2;
    //         const text = `${chart.data.datasets[0].data.reduce((a, b) => a + b, 0)}`;
    //         const title = 'Correct';

    //         // Draw the total value in the center
    //         ctx.fillText(text, centerX, centerY);

    //         // Draw the title above the value
    //         ctx.fillText(title, centerX, centerY - 10); // Adjust vertical positioning as needed

    //         ctx.save();

    //         console.log('Inner Diameter:', innerDiameter); // Log or use the inner diameter as needed
    //         }
    //     }]
    });



  </script>
