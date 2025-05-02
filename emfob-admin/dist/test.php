<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Heatmap Visualization</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f7fa;
        }
        .heatmap-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }
        .title {
            text-align: center;
            font-size: 24px;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }
        .subtitle {
            text-align: center;
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }
        .chart-container {
            position: relative;
            height: 400px;
        }
    </style>
</head>
<body>
    <div class="container heatmap-container">
        <h2 class="title">Application Heatmap Visualization</h2>
        <p class="subtitle">Visualize application activity across industries in major Indian cities.</p>
        <div class="chart-container">
            <canvas id="heatmapChart"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-chart-matrix@1.2.0/dist/chartjs-chart-matrix.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const ctx = document.getElementById('heatmapChart').getContext('2d');

            // Sample Data for Industries and Indian Cities
            const data = [
                { x: "IT", y: "Mumbai", v: 120 },
                { x: "IT", y: "Delhi", v: 80 },
                { x: "IT", y: "Bengaluru", v: 150 },
                { x: "IT", y: "Hyderabad", v: 130 },
                { x: "IT", y: "Chennai", v: 110 },
                { x: "Engineering", y: "Mumbai", v: 90 },
                { x: "Engineering", y: "Delhi", v: 70 },
                { x: "Engineering", y: "Bengaluru", v: 95 },
                { x: "Engineering", y: "Hyderabad", v: 85 },
                { x: "Engineering", y: "Chennai", v: 75 },
                { x: "Sales", y: "Mumbai", v: 60 },
                { x: "Sales", y: "Delhi", v: 55 },
                { x: "Sales", y: "Bengaluru", v: 65 },
                { x: "Sales", y: "Hyderabad", v: 50 },
                { x: "Sales", y: "Chennai", v: 45 },
                { x: "Marketing", y: "Mumbai", v: 70 },
                { x: "Marketing", y: "Delhi", v: 65 },
                { x: "Marketing", y: "Bengaluru", v: 80 },
                { x: "Marketing", y: "Hyderabad", v: 60 },
                { x: "Marketing", y: "Chennai", v: 55 },
            ];

            // Enhanced Heatmap Chart
            new Chart(ctx, {
                type: 'matrix',
                data: {
                    datasets: [{
                        label: 'Applications Heatmap',
                        data: data.map(d => ({
                            x: d.x,
                            y: d.y,
                            v: d.v
                        })),
                        backgroundColor: function(context) {
                            const value = context.dataset.data[context.dataIndex].v;
                            const color = value > 100 ? '#ff6384' : value > 60 ? '#36a2eb' : '#4bc0c0';
                            const alpha = Math.min(0.7, (value - 40) / 120 + 0.3); // Adjust opacity based on value
                            return `${color.replace("rgb", "rgba").replace(")", `, ${alpha})`)}`;
                        },
                        borderColor: '#ffffff',
                        borderWidth: 1,
                        width: ({chart}) => (chart.chartArea || {}).width / 4 - 5,
                        height: ({chart}) => (chart.chartArea || {}).height / 5 - 5,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: {
                            type: 'category',
                            labels: ["IT", "Engineering", "Sales", "Marketing"],
                            title: {
                                display: true,
                                text: 'Industries',
                                color: '#333'
                            },
                            grid: {
                                display: false
                            }
                        },
                        y: {
                            type: 'category',
                            labels: ["Chennai", "Hyderabad", "Bengaluru", "Delhi", "Mumbai"],
                            title: {
                                display: true,
                                text: 'Cities',
                                color: '#333'
                            },
                            grid: {
                                display: false
                            }
                        }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                title: (tooltipItems) => {
                                    return `Industry: ${tooltipItems[0].label}`;
                                },
                                label: (tooltipItem) => {
                                    const city = tooltipItem.raw.y;
                                    const applications = tooltipItem.raw.v;
                                    return `City: ${city}, Applications: ${applications}`;
                                }
                            }
                        },
                        legend: {
                            display: false
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
