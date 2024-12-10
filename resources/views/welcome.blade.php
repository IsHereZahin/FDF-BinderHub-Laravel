<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDF Binder</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            margin: 0;
            background: #f9f9f9;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .hero-container {
            text-align: center;
            max-width: 600px;
            padding: 30px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .hero-container h1 {
            font-size: 2rem;
            margin-bottom: 10px;
            color: #111;
        }
        .hero-container p {
            font-size: 1rem;
            margin-bottom: 20px;
            color: #555;
            line-height: 1.6;
        }
        .hero-container a {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            background: #333;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        .hero-container a:hover {
            background: #555;
        }
    </style>
</head>
<body>
    <div class="hero-container">
        <h1>PDF Binder Tool</h1>
        <p>Create professional PDF binders with ease using <strong>mpdf/mpdf</strong> (version <strong>^8.2</strong>) integrated with Laravel <strong>10</strong>. Merge multiple files into a single document seamlessly.</p>
        <a href="{{ route('generatePDF') }}">Generate PDF</a>
    </div>
</body>
</html>
