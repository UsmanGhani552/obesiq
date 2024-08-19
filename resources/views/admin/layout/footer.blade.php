<!-- <h2>hello</h2> -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.1.4/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    // Add custom JavaScript to handle selection of pills
    document.querySelectorAll('.pill').forEach(pill => {
      pill.addEventListener('click', function() {
        // document.querySelectorAll('.nav-link').forEach(item => item.classList.toggle('active'));
        this.classList.toggle('active');
      });
    });


    // pie chart functionality
    const ctx = document.querySelectorAll('.myDonutChart');
    const ctx2 = document.querySelectorAll('.myDonutChart2');

    const myDonutChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Correct', 'Blue'],
            datasets: [{
                label: 'My Dataset',
                data: [80, 20],
                backgroundColor: ['#058F05', '#EAEAEA'],
                fontSize:'18px',
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
    });
    const myDonutChart2 = new Chart(ctx2, {
        type: 'doughnut',
        data: {
            labels: ['Incorrect', 'Blue'],
            datasets: [{
                label: 'My Dataset',
                data: [30, 70],
                backgroundColor: ['#CB0606', '#EAEAEA'],
                fontSize:'18px',
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
    });



  </script>
    <script>
        let table = new DataTable('#myTable', {
            searching:false,
            paging:false,
            ordering: false,
            bInfo:false,
            responsive: true
        });
      </script>
