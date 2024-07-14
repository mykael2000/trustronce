<?php
  include("includes/header.php");
   if(isset($_POST['deposit'])){
        $amount = $_POST['amount'];
        $coin = $_POST['coin'];

        if($coin == "USDT"){
            header("location:upgradeAddress/usdt.php");
        }
        if($coin == "BTC"){
            header("location:upgradeAddress/btc.php");
        }
        if($coin == "ETH"){
            header("location:upgradeAddress/eth.php");
        }
        if($coin == "BNB"){
            header("location:upgradeAddress/BNB.php");
        }
    }

    @$coin = $_GET['coin'];
   if(!empty($_GET['payment'])){
    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>Send proof of payment to validate payment. <a href="#paid">click here</a></div>
        </div>';
   }



   if (isset($_POST['upload'])) {
    // Get form data
    $client_id = $row['id'];
    $tranx_id = rand(000000,999999);
    $demail = $row['email'];
    $coin = $_POST['coin'];
    $amount = $_POST['amount'];
    $status = "pending";
    $type = "upgrade";
    if($coin == "USDT"){
        $address = "usdtaddress";
    }elseif($coin == "BTC"){
        $address = "btcaddress";
    }elseif($coin == "ETH"){
        $address = "ethaddress";
    }elseif($coin == "BNB"){
        $address = "bnbaddress";
    }
    // File upload handling
    $upload_dir = 'proof/'; // Specify the directory where you want to store uploaded files

    // Check if a file was uploaded successfully
    if ($_FILES['proofup']['error'] === UPLOAD_ERR_OK) {
        $file = $_FILES['proofup'];

        // Generate a unique file name (you can customize this logic)
        $file_name = uniqid() . '_' . basename($file['name']);

        // Full path to the uploaded file
        $target_file = $upload_dir . $file_name;

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($file['tmp_name'], $target_file)) {
            // Insert data into the payments table
            $sqlpro = "INSERT INTO payments (client_id, tranx_id, email, coin, amount, status, proof) VALUES ( '$client_id', '$tranx_id', '$demail', '$coin', '$amount', '$status', '$file_name')";
            $stmt = mysqli_query($conn, $sqlpro);
      
            $sqlpde = "INSERT INTO history (client_id, tranx_id, email, type, coin, address, amount, status) VALUES ( '$client_id', '$tranx_id', '$demail', '$type', '$coin', '$address', '$amount', '$status')";
            $stmtde = mysqli_query($conn, $sqlpde);
      

            if ($stmt) {
                // Payment data inserted successfully
                header("location: upgrade.php?st=pend");
            } else {
                // Handle database insert error
                echo "Error inserting payment data. Please try again later.";
            }
        } else {
            // Handle file upload error
            echo "Error uploading file. Please try again later.";
        }
    } else {
        // Handle file upload error
        echo "Error uploading file. Please try again later.";
    }
}
if(!empty($_GET['st'])){
    echo '<div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>Proof of Upgrade Uploaded successfully</div>
        </div>';
}
?>

<div class="container-fluid content-inner pb-0">
    <div class="row">
        <div id="plans">
            <div class="col-lg-12">
                <div class="card">

                    <h3 class="p-3">Elite Plan</h3>
                    <div class="p-3">
                        <ul>
                            <li>Minimum: $300,000</li>
                            <li>Maximum: $6,000,000</li>
                            <li>42%</li>
                            <li>Instant Withdrawal</li>
                            
                        </ul>
                        <button onclick="hidePlans()" class="btn btn-primary">Join Plan</button>

                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">

                    <h3 class="p-3">Advanced Plan</h3>
                    <div class="p-3">
                        <ul>
                        <li>Minimum: $80,000</li>
                            <li>Maximum: $299,999</li>
                            <li>32%</li>
                            <li>Instant Withdrawal</li>
                        </ul>
                        <button onclick="hidePlans()" class="btn btn-primary">Join Plan</button>

                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">

                    <h3 class="p-3">Standard Plan</h3>
                    <div class="p-3">
                        <ul>
                        <li>Minimum: $10,000</li>
                            <li>Maximum: $79,999</li>
                            <li>23%</li>
                            <li>Instant Withdrawal</li>
                        </ul>
                        <button onclick="hidePlans()" class="btn btn-primary">Join Plan</button>

                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">

                    <h3 class="p-3">Basic Plan</h3>
                    <div class="p-3">
                        <ul>
                        <li>Minimum: $699</li>
                            <li>Maximum: $9,999</li>
                            <li>19%</li>
                            <li>Instant Withdrawal</li>
                        </ul>
                        <button onclick="hidePlans()" class="btn btn-primary">Join Plan</button>

                    </div>
                </div>
            </div>

        </div>
        <div id="main" style="display:none;">
        <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container" style="height:100%;width:100%">
            <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow"
                    target="_blank"><span class="blue-text">Track all markets on
                        TradingView</span></a></div>
            <script type="text/javascript"
                src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
            {
                "width": "100%",
                "height": 400,
                "symbol": "BINANCE:BTCUSDT",
                "interval": "D",
                "timezone": "Etc/UTC",
                "theme": "light",
                "style": "1",
                "locale": "en",
                "enable_publishing": false,
                "allow_symbol_change": true,
                "calendar": false,
                "support_host": "https://www.tradingview.com"
            }
            </script>
        </div>
        <!-- TradingView Widget END -->

        <div class="row mt-5">
            <div class="col-lg-12 col-xl-7 shadow mb-5">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <script type="text/javascript"
                        src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                    {
                        "width": "100%",
                        "height": 400,
                        "currencies": [
                            "EUR",
                            "USD",
                            "JPY",
                            "GBP",
                            "CHF",
                            "AUD",
                            "CAD",
                            "NZD",
                            "CNY",
                            "TRY",
                            "SEK",
                            "NOK",
                            "DKK",
                            "ZAR",
                            "HKD",
                            "SGD",
                            "THB",
                            "MXN",
                            "IDR",
                            "KRW",
                            "PLN",
                            "ISK",
                            "KWD",
                            "PHP",
                            "MYR",
                            "INR",
                            "TWD"
                        ],
                        "isTransparent": false,
                        "colorTheme": "light",
                        "locale": "en"
                    }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div><!-- end col-->

            <div class="col-lg-12 col-xl-5 mb-5 shadow">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <script type="text/javascript"
                        src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
                    {
                        "colorTheme": "light",
                        "dateRange": "12M",
                        "exchange": "US",
                        "showChart": true,
                        "locale": "en",
                        "largeChartUrl": "",
                        "isTransparent": false,
                        "showSymbolLogo": false,
                        "showFloatingTooltip": false,
                        "width": "100%",
                        "height": "400",
                        "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                        "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                        "gridLineColor": "rgba(240, 243, 250, 0)",
                        "scaleFontColor": "rgba(120, 123, 134, 1)",
                        "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                        "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                        "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                        "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                        "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
                    }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>

        </div>
        <!-- end row -->
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="input-group search-input">
                                <input type="search" class="form-control form-control-lg"
                                    placeholder="Search BTS/ETH" />
                            </div>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <img src="assets/images/coins/14.png" class="img-fluid p-0 w-75" alt="img60" />
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
        </div>
        <?php if(@$_GET['payment'] == "true"){ ?>
        <div class="col-lg-12" id="paid">
            <div class="card">
                <div class="p-3">
                    <h3>Made a payment??</h3>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Coin</label>
                            <select name="coin" class="form-control" readonly>
                                <option value="<?php echo $coin; ?>"><?php echo $coin; ?></option>


                            </select>


                        </div>
                        <div class="mb-3">
                            <label for="exampleInputAmount" class="form-label">Amount</label>
                            <input type="text" name="amount" placeholder="Enter amount" class="form-control"
                                id="exampleInputAmount">

                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="customFile">Upload Proof</label>
                            <input type="file" name="proofup" class="form-control" id="customFile">
                        </div>
                        <button name="upload" type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>

            </div>
        </div>
        <?php } ?>
        <div class="col-lg-5">
            <div class="card">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>

                    <script type="text/javascript"
                        src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                    {
                        "symbol": "FX:EURUSD",
                        "width": 350,
                        "height": 220,
                        "locale": "en",
                        "dateRange": "12M",
                        "colorTheme": "dark",
                        "isTransparent": true,
                        "autosize": false,
                        "largeChartUrl": ""
                    }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>

                    <script type="text/javascript"
                        src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                    {
                        "symbol": "BINANCE:BTCUSDT",
                        "width": 350,
                        "height": 220,
                        "locale": "en",
                        "dateRange": "12M",
                        "colorTheme": "dark",
                        "isTransparent": true,
                        "autosize": false,
                        "largeChartUrl": ""
                    }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>

                    <script type="text/javascript"
                        src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                    {
                        "symbol": "NYSE:BNB",
                        "width": 350,
                        "height": 220,
                        "locale": "en",
                        "dateRange": "12M",
                        "colorTheme": "dark",
                        "isTransparent": true,
                        "autosize": false,
                        "largeChartUrl": ""
                    }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
        </div>
    </div>
</div>
<script>
function hidePlans() {
    document.querySelector('#plans').style.display = "none";
    document.querySelector('#main').style.display = "block";
}
</script>
<?php
   
    include("includes/footer.php");
?>