<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #007bff;
        }

        .navbar-brand {
            color: white !important;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: white !important;
        }

        .navbar-nav .nav-link:hover {
            color: #ffcc00 !important;
        }

        .hero-section {
            background-color: #007bff;
            color: white;
            padding: 60px 0;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .card {
            border-radius: 15px;
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }

        .container {
            padding: 30px 0;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Expense Tracker</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white" href="{{url('/login')}}">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section text-center">
        <h1>Track Your Expenses with Ease</h1>
        <p>Manage your personal or business finances with our simple and intuitive expense tracker.</p>
        <a href="/item-group" class="btn btn-primary btn-lg">
            Add Item Group <i class="fas fa-plus-circle"></i>
        </a>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="row justify-content-center">
            <!-- Expense Tracker Information -->
            <div class="col-lg-8">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h2 class="text-center">Welcome to Expense Tracker</h2>
                        <p class="text-center">Click the button below to add an item group and start tracking your expenses.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2025 Expense Tracker | Designed by Your Name</p>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
