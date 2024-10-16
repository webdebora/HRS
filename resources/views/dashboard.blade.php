<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 120px; /* Adjusted height for variety */
            border-radius: 15px; /* Rounded corners for cards */
        }
        .info-card {
            background: linear-gradient(to right, #17a2b8, #138496); /* Info card gradient */
            color: white;
        }
        .warning-card {
            background: linear-gradient(to right, #ffc107, #d39e00); /* Warning card gradient */
            color: black;
        }
        .secondary-card {
            background: linear-gradient(to right, #6c757d, #5a6268); /* Secondary card gradient */
            color: white;
        }
        .action-links a {
            font-size: 1.2rem; /* Slightly larger font for action links */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Dashboard</h1>

        <div class="row mb-4">
            <!-- Total Employees -->
            <div class="col-md-4 mb-4">
                <div class="card info-card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Total Employees</h5>
                        <h2 id="total-employees">0</h2> <!-- Placeholder for dynamic data -->
                    </div>
                </div>
            </div>

            <!-- Employees on Leave -->
            <div class="col-md-4 mb-4">
                <div class="card warning-card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Employees on Leave</h5>
                        <h2 id="employees-on-leave">0</h2> <!-- Placeholder for dynamic data -->
                    </div>
                </div>
            </div>

            <!-- Archived Employees -->
            <div class="col-md-4 mb-4">
                <div class="card secondary-card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Archived Employees</h5>
                        <h2 id="archived-employees">0</h2> <!-- Placeholder for dynamic data -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Links -->



        <div class="row action-links">
            @can(['isAdmin'])
            <div class="col-md-6 mb-3">
                <a href="{{ url('employee') }}" class="btn btn-primary btn-block">Manage Employees</a>
            </div>
            @endcan
            @can(['isManager'])
            <div class="col-md-6 mb-3">
                <a href="{{ url('violations') }}" class="btn btn-danger btn-block">View Violations</a>
            </div>
            @endcan
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
