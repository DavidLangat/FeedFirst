<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gray-100">

    <div class="flex items-center justify-between bg-gray-800 text-white p-4">
        <div class="flex items-center space-x-4">
            <a href="#" class="text-xl font-semibold hover:text-gray-300 transition duration-300" onclick="loadDash()">Dashboard</a>
            <a href="#" class="text-xl font-semibold hover:text-gray-300 transition duration-300" onclick="loadDonation()">Donate</a>
            <a href="#" class="text-xl font-semibold hover:text-gray-300 transition duration-300" onclick="loadRequests()">Request</a>
            <a href="#" class="text-xl font-semibold hover:text-gray-300 transition duration-300" onclick="loadReports()">Reports</a>
        </div>
        <div>
            <a href="authentication.php" class="text-xl font-semibold hover:text-gray-300 transition duration-300" onclick="signOut()">Sign out</a>
        </div>
    </div>
    <div class="container mx-auto mt-8">
        
        <!-- Quick links -->
        
        
        <!-- Overview of recent activities with visualizations -->
        <div id="dashboardSection">
            <!-- Welcome message -->
            <div class="mb-4">
                <h2 class="text-2xl font-semibold">Welcome, User!</h2>
                <p class="text-gray-500">Empowering through food aid, we strive to alleviate hunger and bring nourishment to those in need.</p>
            </div>
            <!-- Activity 1: Donation Trends -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Activity 1: Donation Trends -->
                <div class="bg-white p-4 rounded-md shadow-md">
                    <h3 class="text-lg font-semibold mb-4">Donation Trends</h3>
                    <canvas id="donationTrendsChart" width="400" height="200"></canvas>
                    <script>
                        var ctx1 = document.getElementById('donationTrendsChart').getContext('2d');
                        var donationTrendsChart = new Chart(ctx1, {
                            type: 'line',
                            data: {
                                labels: ['January', 'February', 'March', 'April', 'May'],
                                datasets: [{
                                    label: 'Donation Trends',
                                    data: [50, 80, 60, 90, 75],
                                    borderColor: 'rgba(75, 192, 192, 1)',
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
                    </script>
                </div>

                <!-- Activity 2: Distribution Statistics -->
                <div class="bg-white p-4 rounded-md shadow-md">
                    <h3 class="text-lg font-semibold mb-4">Distribution Statistics</h3>
                    <canvas id="distributionStatisticsChart" width="400" height="200"></canvas>
                    <script>
                        var ctx2 = document.getElementById('distributionStatisticsChart').getContext('2d');
                        var distributionStatisticsChart = new Chart(ctx2, {
                            type: 'bar',
                            data: {
                                labels: ['Location A', 'Location B', 'Location C', 'Location D'],
                                datasets: [{
                                        label: 'Total Donations',
                                        data: [120, 90, 150, 110],
                                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                                        borderColor: 'rgba(255, 99, 132, 1)',
                                        borderWidth: 1
                                    },
                                    {
                                        label: 'Total Requests',
                                        data: [80, 60, 100, 70],
                                        backgroundColor: 'rgba(75, 192, 192, 0.5)',
                                        borderColor: 'rgba(75, 192, 192, 1)',
                                        borderWidth: 1
                                    }
                                ]
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

                <!-- Activity 3: Impact Assessment -->
                <div class="bg-white p-4 rounded-md shadow-md">
                    <h3 class="text-lg font-semibold mb-4">Impact Assessment</h3>
                    <canvas id="impactAssessmentChart" width="400" height="200"></canvas>
                    <script>
                        var ctx3 = document.getElementById('impactAssessmentChart').getContext('2d');
                        var impactAssessmentChart = new Chart(ctx3, {
                            type: 'doughnut',
                            data: {
                                labels: ['Category 1', 'Category 2', 'Category 3', 'Category 4', 'Category 5'],
                                datasets: [{
                                    data: [30, 45, 60, 25, 40],
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.5)',
                                        'rgba(54, 162, 235, 0.5)',
                                        'rgba(255, 206, 86, 0.5)',
                                        'rgba(75, 192, 192, 0.5)',
                                        'rgba(153, 102, 255, 0.5)',
                                    ],
                                    borderColor: [
                                        'rgba(255, 99, 132, 1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                    ],
                                    borderWidth: 1
                                }]
                            }
                        });
                    </script>
                </div>
            </div>
            <!-- ... other donation-related charts ... -->
        </div>
        <div id="donationSection" class="hidden">
            <!-- Activity 1: Donation Trends -->
            <?php include('donate.php'); ?>
            <!-- ... other donation-related charts ... -->
        </div>

        <div id="requestSection" class="hidden">
            <!-- Request Section Content -->
            <?php include('request.php'); ?>

        </div>

        <div id="reportSection" class="hidden">
            <?php include('reports.php'); ?>

        </div>
    </div>

    <script>
        function loadDonation() {
            document.getElementById('donationSection').style.display = 'grid';
            document.getElementById('requestSection').style.display = 'none';
            document.getElementById('reportSection').style.display = 'none';
            document.getElementById('dashboardSection').style.display = 'none';
        }

        function loadDash() {
            document.getElementById('donationSection').style.display = 'none';
            document.getElementById('requestSection').style.display = 'none';
            document.getElementById('reportSection').style.display = 'none';
            document.getElementById('dashboardSection').style.display = 'block';
        }

        function loadRequests() {
            document.getElementById('donationSection').style.display = 'none';
            document.getElementById('requestSection').style.display = 'block';
            document.getElementById('reportSection').style.display = 'none';
            document.getElementById('dashboardSection').style.display = 'none';

        }

        function loadReports() {
            document.getElementById('donationSection').style.display = 'none';
            document.getElementById('requestSection').style.display = 'none';
            document.getElementById('reportSection').style.display = 'block';
            document.getElementById('dashboardSection').style.display = 'none';

        }

        function signOut() {
            // Implement sign-out functionality here
        }
    </script>

</body>

</html>