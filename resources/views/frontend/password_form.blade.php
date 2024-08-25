<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabrigan | Password Protected</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .password-container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .password-container h1 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: #333;
        }

        .password-container input[type="password"] {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .password-container input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        .password-container button {
            width: 100%;
            padding: 0.75rem;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .password-container button:hover {
            background-color: #0056b3;
        }

        .password-container .error {
            color: #e74c3c;
            margin-top: 1rem;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<div class="password-container">
    <h1>Enter Password to Access the Website</h1>
    <form method="POST" action="{{ route('password.verify') }}">
        @csrf
        <input type="password" name="password" placeholder="Enter Password" required>
        <button type="submit">Submit</button>
    </form>
    @if($errors->any())
        <div class="error">{{ $errors->first('password') }}</div>
    @endif
</div>

</body>
</html>
