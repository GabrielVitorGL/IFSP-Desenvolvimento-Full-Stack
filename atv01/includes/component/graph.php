<div class="card card-danger dark-mode">
    <div class="card-header">
        <h3 class="card-title">Serviços de Streaming</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <canvas id="pieChart" style="min-height: 350px; height: 350px; max-height: 350px; max-width: 100%;"></canvas>
    </div>
</div>
<script src="adminlte/plugins/jquery/jquery.min.js"></script>
<script src="adminlte/plugins/chart.js/Chart.min.js"></script>
<script>
    $(function() {
        var donutData = {
            labels: [
                'Netflix',
                'Prime Video',
                'Hulu',
                'Disney+',
                'Tubi',
                'HBO',
                'Apple TV+',
                'IMDb TV',
                'Sony Crackle',
                'Vudu',
                'PopcornFlix',
            ],
            datasets: [{
                data: [41.32, 22.13, 17.19, 4.81, 3.71, 2.88, 1.92, 1.87, 1.86, 1.59, 0.72],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de', '#ff6384', '#36a2eb', '#ff9f40', '#9966ff', '#4bc0c0'],
            }]
        }

        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieData = donutData;
        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                labels: {
                    fontColor: '#ffffff'
                }
            }
        }
        new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })
    })
</script>