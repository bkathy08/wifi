<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $provider = $_POST['provider'];
    $amount = $_POST['amount'];
    $fee = $_POST['fee'];
    $reference = $_POST['reference'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone'];
    $service = $_POST['service'];
    $payment_date = $_POST['paymentDate'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin: 8px 0;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 100px;
        }
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            width: 100%;
            bottom: 0;
        }
        .summary {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }
        .summary p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

<header>
    <h1>Bill Payment Portal</h1>
</header>

<div class="container">
    <h2>Pay Your Bill</h2>

    <form action="" method="POST">
        <div class="logo">
            <img src="https://via.placeholder.com/100x50?text=PLDT" alt="PLDT Logo">
            <img src="https://via.placeholder.com/100x50?text=Converge" alt="Converge Logo">
            <img src="https://via.placeholder.com/100x50?text=Globe" alt="Globe Logo">
        </div>

        <label for="provider">Select Provider:</label>
        <select id="provider" name="provider" required>
            <option value="PLDT" <?php echo (isset($provider) && $provider == 'PLDT') ? 'selected' : ''; ?>>PLDT</option>
            <option value="Converge" <?php echo (isset($provider) && $provider == 'Converge') ? 'selected' : ''; ?>>Converge</option>
            <option value="Globe" <?php echo (isset($provider) && $provider == 'Globe') ? 'selected' : ''; ?>>Globe</option>
        </select><br>

        <label for="amount">Amount Paid:</label>
        <input type="number" id="amount" name="amount" required value="<?php echo isset($amount) ? $amount : ''; ?>"><br>

        <label for="fee">Fee:</label>
        <input type="number" id="fee" name="fee" required value="<?php echo isset($fee) ? $fee : ''; ?>"><br>

        <label for="reference">Reference Number:</label>
        <input type="text" id="reference" name="reference" required value="<?php echo isset($reference) ? $reference : ''; ?>"><br>

        <label for="service">Service:</label>
        <input type="text" id="service" name="service" required value="<?php echo isset($service) ? $service : ''; ?>"><br>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required value="<?php echo isset($email) ? $email : ''; ?>"><br>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required value="<?php echo isset($phone) ? $phone : ''; ?>"><br>

        <label for="paymentDate">Date of Payment:</label>
        <input type="date" id="paymentDate" name="paymentDate" required value="<?php echo isset($paymentDate) ? $paymentDate : ''; ?>"><br>

        <button type="submit">Pay Bill</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
    <div class="summary">
        <h3>Payment Summary</h3>
        <p><strong>Provider:</strong> <?php echo htmlspecialchars($provider); ?></p>
        <p><strong>Amount Paid:</strong> ₱<?php echo number_format($amount, 2); ?></p>
        <p><strong>Fee:</strong> ₱<?php echo number_format($fee, 2); ?></p>
        <p><strong>Total Paid:</strong> ₱<?php echo number_format($amount + $fee, 2); ?></p>
        <p><strong>Reference Number:</strong> <?php echo htmlspecialchars($reference); ?></p>
        <p><strong>Service:</strong> <?php echo htmlspecialchars($service); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
        <p><strong>Phone:</strong> <?php echo htmlspecialchars($phone); ?></p>
        <p><strong>Date of Payment:</strong> <?php echo htmlspecialchars($paymentDate); ?></p>
    </div>
    <?php endif; ?>
</div>

<footer class="footer">
    <p>&copy; 2024 Bill Payment Portal. All rights reserved.</p>
</footer>

</body>
</html>