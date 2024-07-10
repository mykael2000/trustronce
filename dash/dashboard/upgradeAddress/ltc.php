
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Litecoin Payment</title>
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
        <h1>Litecoin Payment</h1>
        <p>Make sure that you are sending funds to the correct wallet address and blockchain network. Sending coins or
            tokens other than LTC to this address may result in loss of your deposit.</p>

        <!-- Display the QR Code -->
        <div id="qrcode"></div>
 <!-- Wallet Address with Copy Button -->
        <div class="wallet-address">
            <strong>LfMJJQT5xcTmUjHfZpKbWc8keqJhJweV37</strong>
            <button onclick="copyToClipboard()">Copy Address</button>
        </div>

        
        <span>Made payment? Send proof of payment here <a
                href="../upgrade.php?payment=true&&coin=LTC">Upload Proof of Payment</a></span>
    </div>

    <!-- Include the QRCode.js library -->
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script>
    // Generate the QR code
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        text: "Litecoin:LfMJJQT5xcTmUjHfZpKbWc8keqJhJweV37",
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