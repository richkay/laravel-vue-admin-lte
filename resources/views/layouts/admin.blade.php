<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Admin') }}</title>
        <!-- Styles -->
        <link href="/css/admin.css" rel="stylesheet">
        <!-- Scripts -->
        <script> window.App = <?php echo json_encode(['csrfToken' => csrf_token(),'api'=>'api.test.dev']); ?></script>
    <title>Admin</title>
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body class="body">
    @yield('content')
    <script src="/js/admin.js"></script>
</body>
</html>
