<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fa;
        }
        .navbar {
            background: #007bff;
            color: white;
        }
        .navbar h2 {
            color: white;
            font-weight: bold;
        }
        .sidebar {
            width: 250px;
            min-height: 100vh;
            background: #343a40;
            color: white;
            padding-top: 20px;
        }
        .sidebar .profile img {
            border: 3px solid white;
        }
        .sidebar .profile h3 {
            font-size: 18px;
            margin-top: 10px;
        }
        .sidebar ul {
            padding-left: 0;
        }
        .sidebar ul li {
            list-style: none;
            padding: 10px;
            cursor: pointer;
            transition: background 0.3s;
            font-size: 16px;
        }
        .sidebar ul li:hover {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
        }
        .sidebar ul li i {
            margin-right: 10px;
        }
        .content {
            flex-grow: 1;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .list-group-item {
            border-radius: 8px;
            margin-bottom: 8px;
        }
        .btn-primary {
            background: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg p-3">
    <div class="container-fluid">
        <h2 class="navbar-brand mb-0">Customer Dashboard</h2>
    </div>
</nav>

<div class="d-flex">
    <!-- Sidebar -->
    @include('customer.layout.sidebar')

  @yield('content')
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>