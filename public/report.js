function generateReport() {
    const startDate = document.getElementById('startDatePicker').value;
    const endDate = document.getElementById('endDatePicker').value;

    // For demonstration purposes, let's assume static data.
    const existingCount = 50;
    const expiredCount = 5;
    const employeeCount = 100;
    const userCount = 80;

    generateBarChart('existingChart', 'Existing', existingCount, 'rgba(52, 152, 219, 0.8)');
    generateBarChart('expiredChart', 'Expired', expiredCount, 'rgba(231, 76, 60, 0.8)');
    generateBarChart('employeeChart', 'Employees', employeeCount, 'rgba(46, 204, 113, 0.8)');
    generateBarChart('userChart', 'Users', userCount, 'rgba(155, 89, 182, 0.8)');
}

function generateBarChart(chartId, label, count, color) {
    const ctx = document.getElementById(chartId).getContext('2d');

    const data = {
        labels: [label],
        datasets: [{
            label: 'Count',
            backgroundColor: [color],
            data: [count],
        }]
    };

    const options = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    const barChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    });
}

const startDatePicker = new Pikaday({
    field: document.getElementById('startDatePicker'),
    format: 'YYYY-MM-DD',
});

const endDatePicker = new Pikaday({
    field: document.getElementById('endDatePicker'),
    format: 'YYYY-MM-DD',
});