
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <canvas id="disciplinePieChart" width="400" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
  {{-- first chart --}}
  <script>
        var ctx = document.getElementById('disciplinePieChart').getContext('2d');
        var disciplinePieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: {!! json_encode(array_keys($disciplineCounts)) !!},
                datasets: [{
                    label: '# of Students',
                    data: {!! json_encode(array_values($disciplineCounts)) !!},
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(199, 199, 199, 0.2)',
                        'rgba(83, 102, 255, 0.2)',
                        'rgba(54, 205, 64, 0.2)',
                        'rgba(205, 105, 164, 0.2)',
                        'rgba(100, 159, 255, 0.2)',
                        'rgba(255, 255, 132, 0.2)',
                        'rgba(54, 162, 99, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(199, 199, 199, 1)',
                        'rgba(83, 102, 255, 1)',
                        'rgba(54, 205, 64, 1)',
                        'rgba(205, 105, 164, 1)',
                        'rgba(100, 159, 255, 1)',
                        'rgba(255, 255, 132, 1)',
                        'rgba(54, 162, 99, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Students in Each Discipline'
                    },
                    datalabels: {
                        formatter: (value, context) => {
                            let sum = 0;
                            let dataArr = context.chart.data.datasets[0].data;
                            dataArr.map(data => {
                                sum += data;
                            });
                            let percentage = (value * 100 / sum).toFixed(2) + "%";
                            return percentage;
                        },
                        color: 'black',
                    }
                }
            },
            plugins: [ChartDataLabels]
        });
    </script>
