<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    
    <style>
        /* Basic Reset */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        /* Navbar */
        .navbar {
            background-color: #fff;
            padding: 15px 30px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: #ff2d20;
            text-decoration: none;
        }

        /* Container */
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .header-text {
            text-align: center;
            margin-bottom: 40px;
        }

        /* Posts Grid */
        .posts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 50px;
        }

        /* Card */
        .card {
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            background-color: #eee;
            display: block;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 20px;
            margin-bottom: 10px;
            color: #111;
        }

        .card-text {
            color: #666;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .card-footer {
            border-top: 1px solid #eee;
            padding-top: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
        }

        .badge {
            background-color: #ff2d20;
            color: white;
            padding: 5px 10px;
            border-radius: 12px;
            font-weight: bold;
        }

        /* Website Footer */
        .footer {
            background-color: #fff;
            margin-top: 50px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 -2px 5px rgba(0,0,0,0.05);
            color: #666;
        }

        .footer-brand {
            color: #ff2d20;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .footer-links {
            margin-bottom: 15px;
        }

        .footer-links a {
            text-decoration: none;
            color: #333;
            margin: 0 10px;
            transition: color 0.2s;
        }

        .footer-links a:hover {
            color: #ff2d20;
        }

    </style>
</head>
<body>
    @include('layout.navbar')

    <main>
        @yield('content')
    </main>

    @include('layout.footer')



</body>
</html>