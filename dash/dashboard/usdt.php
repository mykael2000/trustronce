<?php
include("includes/connection.php");
ob_start();
session_start();
$USDT = 3;
$sqlUSDT = "SELECT * FROM wallet WHERE id = '$USDT'";
$queryUSDT = mysqli_query($conn, $sqlUSDT);
$getdetailsUSDT = mysqli_fetch_assoc($queryUSDT);

echo "<script>alert('Please always copy and paste your deposit wallet address while making a deposit into your account.')</script>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usdt Payment</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
    }

    .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    #qrcode {
        margin: 0 auto;
        /* Center-align the QR code */
    }

    .wallet-address {
        background-color: #f0f0f0;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Usdt (ERC20) Deposit</h1>
        <p>Make sure that you are sending funds to the correct wallet address and blockchain network. Sending coins or
            tokens other than USDT to this address may result in loss of your deposit.</p>

        <!-- Display the QR Code -->
        <div><img height="150px" width="150px" src="address/<?php echo $getdetailsUSDT['qrcode']; ?>" alt=""></div>
        <span>Note: you must copy this address or scan the QR Code</span>
       
        <!-- Wallet Address with Copy Button -->
        <div class="wallet-address">
            <strong><?php echo $getdetailsUSDT['address']; ?></strong>
            <button onclick="copyToClipboard()">Copy Address</button>
        </div>

        <p>Your balance will automatically be updated once the payment is confirmed.</p>
        <!-- <span>Made payment? Send proof of payment here <a
                href="deposit.php?payment=true&&coin=USDT">Upload Proof of payment</a></span> -->
                <span>return to<a href="main.php"> dashboard</a></span>
    </div>

    <!-- Include the QRCode.js library -->
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script>
    // Generate the QR code
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        text: "Usdt:<?php echo $getdetailsUSDT['address']; ?>",
        width: 128,
        height: 128,
    });

    // Function to copy the wallet address to clipboard
    function copyToClipboard() {
        var walletAddress = document.querySelector('.wallet-address strong');
        var textArea = document.createElement("textarea");
        textArea.value = walletAddress.textContent;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand('copy');
        document.body.removeChild(textArea);
        alert("Wallet address copied to clipboard: " + walletAddress.textContent);
    }
    </script>
</body>

</html>
<?php 
include("../../includes/livechat.php");
?>