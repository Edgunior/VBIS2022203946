<?php
/** @var array $params */
$totalRevenue = $params['totalRevenue'];
$totalUsers = $params['totalUsers'];
$topVinyls = $params['topVinyls'];
$totalAlbumsSold = $params['totalAlbumsSold'];
$topProfitable = $params['topProfitable'];


?>

<div class="container">
    <h1 class="my-4">Dashboard</h1>

    

    <div class="row mb-4">

        <div class="col-md-4">
        <div class="card p-3 text-center">
            <h4>Total Albums Sold</h4>
            <p class="display-6"><?= $totalAlbumsSold ?></p>
        </div>
    </div>
        <div class="col-md-4">
            <div class="card p-3 text-center">
                <h4>Total Sales Revenue</h4>
                <p class="display-6">$<?= number_format($totalRevenue, 2) ?></p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 text-center">
                <h4>Registered Users</h4>
                <p class="display-6"><?= $totalUsers ?></p>
            </div>
        </div>
    </div>

    <h3 class="mt-5">Top Selling Albums</h3>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>Album</th>
                <th>Sold</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($topVinyls as $vinyl): ?>
                <tr>
                    <td><?= htmlspecialchars($vinyl['name']) ?></td>
                    <td><?= $vinyl['total_sold'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <canvas id="vinylChart" height="100"></canvas>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('vinylChart').getContext('2d');
    const vinylChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?= json_encode(array_column($topVinyls, 'name')) ?>,
            datasets: [{
                label: 'Copies Sold',
                data: <?= json_encode(array_map('intval', array_column($topVinyls, 'total_sold'))) ?>,
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1,
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        precision: 0
                    }
                }
            }
        }
    });
</script>

<h3 class="mt-5">Top Profitable Albums</h3>
<table class="table table-striped mt-3">
    <thead>
        <tr>
            <th>Album</th>
            <th>Revenue</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($topProfitable as $album): ?>
            <tr>
                <td><?= htmlspecialchars($album['name']) ?></td>
                <td>$<?= number_format($album['total_revenue'], 2) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<canvas id="revenueChart" height="100"></canvas>

<script>
    const revenueCtx = document.getElementById('revenueChart').getContext('2d');
    const revenueChart = new Chart(revenueCtx, {
        type: 'bar',
        data: {
            labels: <?= json_encode(array_column($topProfitable, 'name')) ?>,
            datasets: [{
                label: 'Revenue ($)',
                data: <?= json_encode(array_map('floatval', array_column($topProfitable, 'total_revenue'))) ?>,
                backgroundColor: 'rgba(255, 99, 132, 0.6)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        precision: 0
                    }
                }
            }
        }
    });
</script>

