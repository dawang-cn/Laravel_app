<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'My Laravel App')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .content {
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My Laravel App</h1>
    </header>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        <p>Footer content here</p>
    </footer>
</body>
</html>
