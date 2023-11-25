<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intelligent Routing Algorithm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100">

<div class="container mx-auto mt-8">
    <h2 class="text-3xl font-semibold mb-4 text-center">Intelligent Routing Algorithm</h2>

    <!-- Chart for Intelligent Routing Algorithm -->
    <div class="bg-white p-4 rounded-md shadow-md">
        <canvas id="routingAlgorithmChart" width="400" height="200"></canvas>

        <script>
            var ctx = document.getElementById('routingAlgorithmChart').getContext('2d');
            var routingAlgorithmChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Donor 1', 'Donor 2', 'Donor 3', 'Donor 4'],
                    datasets: [{
                        label: 'Distance (km)',
                        data: [10, 30, 15, 25],
                        backgroundColor: 'rgba(75, 192, 192, 0.7)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Urgency',
                        data: [3, 2, 1, 4],
                        backgroundColor: 'rgba(255, 99, 132, 0.7)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Transportation Capacity',
                        data: [8, 12, 10, 15],
                        backgroundColor: 'rgba(255, 206, 86, 0.7)',
                        borderColor: 'rgba(255, 206, 86, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </div>
</div>

</body>
</html>
