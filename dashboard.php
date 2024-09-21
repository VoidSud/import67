<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000; /* Black background */
            color: #fff; /* White text */
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #1c1c1c;
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(255, 255, 255, 0.1);
        }
        header div {
            display: flex;
            flex-direction: column;
        }
        header div span {
            font-size: 14px;
            color: #ccc;
        }
        header h1 {
            margin: 0;
            font-size: 24px;
            color: #fff;
        }
        header button {
            background-color: #3498db;
            border: none;
            color: white;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        header button:hover {
            background-color: #2980b9;
        }
        .content {
            padding: 20px;
        }
        .country-selector {
            margin-top: 20px;
            padding: 10px;
            background-color: #1c1c1c;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(255, 255, 255, 0.1);
            width: 300px;
        }
        .country-selector select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #000;
            color: #fff;
            border: 1px solid #555;
            border-radius: 5px;
        }
        .country-selector label {
            color: #ccc;
        }
        .highlight-box {
            background-color: #e74c3c; /* Red background */
            padding: 15px;
            color: white;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php
    // Simulated user data (replace this with real data from the database)
    $balance = "$120.50";
    $userId = "Bossman98";
    $discount = "0%";
    ?>

    <header>
        <div>
            <h1>Dashboard</h1>
            <span>Balance: <?php echo $balance; ?></span>
            <span>User ID: <?php echo $userId; ?></span>
            <span>Discount: <?php echo $discount; ?></span>
        </div>
        <button>Shop</button>
    </header>

    <div class="content">
        <div class="highlight-box">
            TOR DOMAIN: ultshop3urht5jl6g7rj2vgphetacj...onion
        </div>
        <div class="country-selector">
            <label for="country">Select your country:</label>
            <select name="country" id="country">
                <option value="usa">USA</option>
                <option value="canada">Canada</option>
                <option value="uk">UK</option>
            </select>
        </div>
    </div>
</body>
</html>
