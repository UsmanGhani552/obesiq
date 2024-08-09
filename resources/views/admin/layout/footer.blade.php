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
        labels: ['Red', 'Blue', 'Yellow'],
        datasets: [{
            label: 'My Dataset',
            data: [10, 20, 30],
            backgroundColor: ['red', 'blue', 'yellow'],
            borderColor: ['darkred', 'darkblue', 'darkyellow'],
            borderWidth: 1
        }]
    },
    options: {
        plugins: {
            tooltip: {
                callbacks: {
                    label: function(context) {
                        const label = context.label || '';
                        const value = context.raw;
                        return `${label}: ${value}`;
                    }
                }
            },
            // Custom plugin to draw text in the center
            datalabels: {
                display: false // Disable datalabels plugin if not needed
            }
        }
    },
    plugins: [{
        id: 'textInCenter',
        beforeDraw: (chart) => {
            const {ctx, chartArea, config} = chart;
            const {width, height} = chartArea;
            const fontSize = (height / 114).toFixed(2);
            const centerX = width / 2;
            const centerY = height / 2;
            const text = `${chart.data.datasets[0].data.reduce((a, b) => a + b, 0)}`;
            const title = 'Correct';

            // Clear the area before drawing
            ctx.restore();
            ctx.font = `bold ${fontSize}px Poppins`;
            ctx.textAlign = 'center';
            ctx.textBaseline = 'middle';

            // Draw the total value in the center
            ctx.fillText(text, centerX, centerY);

            // Draw the title above the value
            ctx.fillText(title, centerX, centerY - (fontSize / 2)); // Adjust vertical positioning as needed

            ctx.save();
        }
    }]
});


  </script>
