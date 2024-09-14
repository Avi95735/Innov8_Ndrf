<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #eaf2f8; /* Light blue background */
            color: #333;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h1 {
            color: #e74c3c; /* Bright red for emphasis */
            margin-top: 0;
            font-size: 2.5rem;
        }
        img {
            max-width: 80%;
            height: auto;
            border-radius: 10px;
            margin: 20px 0;
        }
        h2 {
            color: #3498db; /* Bright blue for the heading */
            margin: 20px 0;
            font-size: 1.8rem;
        }
        .container {
            max-width: 600px;
            width: 100%;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 0 auto;
        }
        input[type="text"] {
            width: calc(100% - 20px);
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        button {
            background-color: #28a745; /* Green color for buttons */
            color: white;
            border: none;
            padding: 12px 20px;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        button:hover {
            background-color: #218838; /* Darker green on hover */
            transform: scale(1.05);
        }
        button:active {
            transform: scale(0.95);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Earthquake</h1>
        <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsr9mbtWDcqo2N-xwTL_Uu45-zdOom4T5XyQ&s">
        <h2>Upload Your Problem</h2>
        <input type="text" placeholder="Address" aria-label="Address">
        <input type="text" placeholder="Landmark" aria-label="Landmark">
        <input type="text" placeholder="Pincode" aria-label="Pincode">
        <input type="text" placeholder="Number of people trapped" aria-label="Number of people trapped">
        <button onclick="window.location.href='capture.html';">Upload Photo</button>
        <button onclick="window.location.href='photo.html';">Upload Video</button>
        <br>
        <button>Submit</button>
    </div>
</body>
</htm>