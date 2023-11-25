<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</head>
<body class="bg-gray-100">

<div class="container mx-auto mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
    <!-- Report 1: Donation Trends -->
    <div class="bg-white p-8 rounded-md shadow-md">
        <h3 class="text-lg font-semibold mb-2 text-center text-yellow-500">Donation Trends</h3>
        <canvas id="donation-trends-chart" width="400" height="200"></canvas>
    </div>

    <!-- Report 2: Distribution Statistics -->
    <div class="bg-white p-8 rounded-md shadow-md">
        <h3 class="text-lg font-semibold mb-2 text-center text-yellow-500">Distribution Statistics</h3>
        <table id="distribution-table" class="stripe hover" style="width:100%"></table>
    </div>

    <!-- Report 3: Impact Assessment -->
    <div class="col-span-2 bg-white p-8 rounded-md shadow-md">
        <h3 class="text-lg font-semibold mb-2 text-center text-yellow-500">Impact Assessment</h3>
        <canvas id="impact-assessment-chart" width="400" height="200"></canvas>
    </div>
</div>

<script>
    // Example Chart.js code for Donation Trends
    var ctx1 = document.getElementById('donation-trends-chart').getContext('2d');
    var donationTrendsChart = new Chart(ctx1, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May'],
            datasets: [{
                label: 'Donation Trends',
                data: [50, 80, 60, 90, 75],
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 2,
                fill: false
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

    // Example DataTables code for Distribution Statistics
    $(document).ready(function() {
        $('#distribution-table').DataTable({
            data: [
                ['Location A', 120, 80],
                ['Location B', 90, 60],
                ['Location C', 150, 100],
                ['Location D', 110, 70],
            ],
            columns: [
                { title: 'Location' },
                { title: 'Total Donations' },
                { title: 'Total Requests' }
            ]
        });
    });

    // Example Chart.js code for Impact Assessment
    var ctx2 = document.getElementById('impact-assessment-chart').getContext('2d');
    var impactAssessmentChart = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['Category 1', 'Category 2', 'Category 3', 'Category 4', 'Category 5'],
            datasets: [{
                label: 'Impact Assessment',
                data: [30, 45, 60, 25, 40],
                backgroundColor: 'rgba(75, 192, 192, 0.7)',
                borderColor: 'rgba(75, 192, 192, 1)',
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

</body>
</html>
