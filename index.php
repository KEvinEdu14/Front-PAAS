<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index - PaaS Services</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #d9e4f5, #f5d6e0);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        h1 {
            color: #333;
            margin-bottom: 40px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }

        .button-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }

        .link-button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 6px;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .link-button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <h1>Index From PaaS Services</h1>

    <div class="button-container">
        <a href="https://hola-mundo-3-fc991cbca7ad.herokuapp.com/" class="link-button">Heroku</a>
        <a href="https://whale-app-y259c.ondigitalocean.app/" class="link-button">Digital Ocean</a>
        <a href="https://calculator-python-production.up.railway.app/" class="link-button">Railway</a>
        <a href="https://repos1-sable.vercel.app/" class="link-button">Vercel</a>
        <a href="http://13.220.126.62//" class="link-button">AWS</a>
    </div>
</body>
</html>
