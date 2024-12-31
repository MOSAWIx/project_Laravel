<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Product Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <!-- You can add your own CSS files here -->
</head>
<body>
    <div class="container mt-4">
        <!-- Header Section -->
        <header>
            <div class="row">
                <div class="col-md-12">
                    <h1>@yield('header')</h1>
                </div>
            </div>
        </header>

        <!-- Main Content Section -->
        <div class="row">
            <div class="col-md-8">
                <!-- Content injected by the child views -->
                @yield('contenu')
            </div>
            <div class="col-md-4">
                <!-- Sidebar content, if any -->
                @yield('aside')
            </div>
        </div>
        
        <!-- Footer Section -->
        <footer class="mt-4">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; 2024 Laravel Product Management. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
