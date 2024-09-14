<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sliding Photos</title>
    <h1> NDRF HELPLINE DESK</h1>

    <br>
    <br>
    
    
    <br>
    <br>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            width: 100%;
            height: 200vh;
            display: flex;
            flex-direction: column;
            align-items: center; /* Centered the content horizontally */
            justify-content: center;
            background-color:rgb(108, 159, 175);
            font-family: Arial, sans-serif;
        }

        .imgSlider {
            width: 100%;
            max-width: 1300px; /* Max width for large screens */
            height: 1000px;
            background-image: url("https://cdn.dnaindia.com/sites/default/files/styles/full/public/2015/08/13/365233-ndrf.jpeg");
            background-size: cover;
            background-position: center;
            animation: changeImage 12s linear infinite;
            margin-bottom: 10px; /* Space between slider and links */
        }
        
        @keyframes changeImage {
            0% {
                background-image: url("https://gumlet.assettype.com/freepressjournal/2021-01/0cdafff1-7d26-47c9-9101-abc129d3aa8f/ndrf.jpg");
            }
            25% {
                background-image: url("https://www.rakshaknews.in/wp-content/uploads/2019/06/NDRF-1.jpg");
            }
            50% {
                background-image: url("https://cdn.bignewsnetwork.com/ani1676808263.jpg");
            }
            75% {
                background-image: url("https://images.indianexpress.com/2020/08/NDRF-2.jpg");
            }
            100% {
                background-image: url("https://tse2.mm.bing.net/th?id=OIP.XfNr_S-uDtiikAJ4POXrVAHaEK&pid=Api&P=0&h=180");
            }
        }

        .links-container {
            display: flex;
            flex-wrap: wrap; /* Allows links to wrap on smaller screens */
            gap: 10px;
            justify-content: center; /* Centered links horizontally */
            padding: 0 20px; /* Added padding for better spacing */
            margin-bottom: 20px; /* Space between links and map */
        }

        .links-container a {
            text-decoration: none;
            color: #333;
            padding: 10px 20px;
            border: 2px solid #ddd;
            border-radius: 5px;
            background-color: #ffffff;
            font-size: 16px;
            transition: background-color 0.3s, color 0.3s;
        }

        .links-container a:hover {
            background-color: #00ffc8;
            color: #fff;
        }

        .links-container img {
            width: 50px; /* Adjust size as needed */
            height: auto;
            border-radius: 5px;
        }

        .map-container {
            width: 100%;
            max-width: 1200px; /* Max width for large screens */
            display: flex;
            justify-content: left; /* Centered the map horizontally */
        }

        .map-container iframe {
            border: 0;
            width: 100%;
            max-width: 500px; /* Max width for iframe */
            height: 400px; /* Adjust height as needed */
            border-radius: 8px; /* Rounded corners for the iframe */
            
        }
    </style>
</head>
<body>
    
    <div class="imgSlider"></div>
    <div class="links-container">
        <a href="home.php">Home</a>
        <a href="Login.php">User Login</a>
        <a href="Admin.php">Admin Login</a>
        <a href="Service.php">Services</a>
        <a href="Emergency.php">Emergency Contacts</a>
        <a href="complain.p-hp">Complain</a>
        <a href="achievements.php">Achievements</a>
        <a href="about us.php">About Us</a>
        <a href="https://cdn.botpress.cloud/webchat/v2/shareable.html?botId=437f6495-fa2a-4c9b-98cf-788975fbab2b" target="_blank">
            <img src="https://img.pikbest.com/wp/202409/copy-space-3d-render-of-a-cute-cartoon-robot-chatbot-with-the-perfect-ai-business-assistant-and-helper-mascot_9798471.jpg!bwr800" alt="Chatbot Robot">
        </a>
    </div>
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117925.21689582619!2d88.26494964376381!3d22.53556493830009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882db4908f667%3A0x43e330e68f6c2cbc!2sKolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1726033863042!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div>
        <button onclick ="location.herf='Front.php'">User Login</button>
          <button onclick="location.href='admin.php'">Admin Login</button>  
     </div>
</body>
</html>