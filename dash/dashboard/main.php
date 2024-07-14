<?php
  include("includes/header.php");
  


?>
<!-- Overlay Container -->
<div class="overlay-container" id="overlay">
    <!-- Message Box -->
    <div class="message-box">
        <!-- Close Button -->
        <span class="close-button" onclick="closeOverlay()">&#10006;</span>
        <!-- Message Content -->
        <h2>Fund your account</h2>
        <img height="100%" width="100%" src="assets/images/deposit.svg" />
        <p>
            Transfer Crypto to start trading now. Make use of the various option to trade whichever cryptocurrency you like best.
        </p>
        <!-- Action Button -->
        <a href="deposit.php" class="action-button">Deposit</a>
    </div>
</div>


<!-- Overlay Container -->
<div class="overlay-container" id="upgrade">
    <!-- Message Box -->
    <div class="message-box">
        <!-- Close Button -->
        <span class="close-button" onclick="closeUpgrade()">&#10006;</span>
        <!-- Message Content -->
        <h2>Upgrade fee</h2>
        <img height="100%" width="100%" src="assets/images/deposit.svg" />
        <p>
            You are required to pay an upgrade fee
        </p>
        <!-- Action Button -->
        <a href="deposit.php" class="action-button">upgrade</a>
    </div>
</div>

<!-- Overlay Container -->
<div class="overlay-container" id="withdraw">
    <!-- Message Box -->
    <div class="message-box">
        <!-- Close Button -->
        <span class="close-button" onclick="closeWithdraw()">&#10006;</span>
        <!-- Message Content -->
        <h2>Withdrawal fee</h2>
        <img height="100%" width="100%" src="assets/images/deposit.svg" />
        <p>
            You are required to pay a withdrawal fee
        </p>
        <!-- Action Button -->
        <a href="deposit.php" class="action-button">Pay</a>
    </div>
</div>

<script>
// JavaScript functions to show and hide the overlay
function openOverlay() {
    document.getElementById("overlay").style.display = "block";
}

function closeOverlay() {
    document.getElementById("overlay").style.display = "none";
}

// JavaScript functions to show and hide the overlay
function openUpgrade() {
    document.getElementById("upgrade").style.display = "block";
}

function closeUpgrade() {
    document.getElementById("upgrade").style.display = "none";
}

// JavaScript functions to show and hide the overlay
function openWithdraw() {
    document.getElementById("withdraw").style.display = "block";
}

function closeWithdraw() {
    document.getElementById("withdraw").style.display = "none";
}
</script>
<?php

if($row['fund_status'] == "deactive"){
    
}else{
    echo "<script>openOverlay();</script>";
}

if(!empty($row['upgrade_status'])){
    if($row['upgrade_status'] == "deactive"){
    
}else{
    echo "<script>openUpgrade();</script>";
}
}

if(!empty($row['withdrawal_status'])){
    if($row['withdrawal_status'] == "deactive"){
    
}else{
    echo "<script>openWithdraw();</script>";
}
}


?>
<div class="container-fluid content-inner pb-0">
    <div class="row">
        <div class="col-lg-12">
            <div class="row align-items-center mb-4">
                <div class="col-xl-9 d-none d-md-block">
                    <div class="card mb-xl-0">
                        <div class="card-body ">
                            <div class="d-flex justify-content-between flex-wrap">
                                <div class="d-flex">

                                    <div class="dropdown mt-2 ms-2">
                                        
                                            <span class="mt-2 ">Total Balance</span>
                                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
</svg>
                                       
                                    </div>
                                </div>

                                <div class="d-flex align-items-center justify-content-between">
                                    $<?php echo number_format($row['total_balance'], 2, '.', ',').' '; ?>USD 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 d-none d-md-block">
                    <div class="card mb-xl-0">
                        <div class="card-body ">
                            <div class="d-flex justify-content-between flex-wrap">
                                <div class="d-flex">

                                    <div class="dropdown mt-2 ms-2">
                                       
                                            <span class="mt-2 ">Total Deposits</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
</svg>
                                       
                                         
                                    </div>
                                </div>

                                <div class="d-flex align-items-center justify-content-between">
                                    $<?php echo number_format($row['total_deposits'], 2, '.', ',').' '; ?>USD
                                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<div class="col-xl-9 d-none d-md-block">
                    <div class="card mb-xl-0">
                        <div class="card-body ">
                            <div class="d-flex justify-content-between flex-wrap">
                                <div class="d-flex">

                                    <div class="dropdown mt-2 ms-2">
                                       
                                            <span class="mt-2 ">Total Profit</span>
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
</svg>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center justify-content-between">
                                    $<?php echo number_format($row['total_profit'], 2, '.', ',').' '; ?>USD
                                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<div class="col-xl-9 d-none d-md-block">
                    <div class="card mb-xl-0">
                        <div class="card-body ">
                            <div class="d-flex justify-content-between flex-wrap">
                                <div class="d-flex">

                                    <div class="dropdown mt-2 ms-2">
                                       
                                            <span class="mt-2 ">Total Bonus</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
</svg>
                                              
                                    </div>
                                </div>

                                <div class="d-flex align-items-center justify-content-between">
                                    $<?php echo number_format($row['total_bonus'], 2, '.', ',').' '; ?>USD
                                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 col-6 d-block d-sm-none">
                            <div class="card shining-card">
                                <div class="card-body">

                                    <span style="font-size: 15px;" class="me-2">Total Balance</span>
                                    <svg width="10" height="10" viewBox="0 0 36 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.86124 21.6224L11.2734 16.8577C11.6095 16.6417 12.041 16.6447 12.3718 16.8655L18.9661 21.2663C19.2968 21.4871 19.7283 21.4901 20.0644 21.2741L27.875 16.2534"
                                            stroke="#BFBFBF" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M26.7847 13.3246L31.6677 14.0197L30.4485 18.7565L26.7847 13.3246ZM30.2822 19.4024C30.2823 19.4023 30.2823 19.4021 30.2824 19.402L30.2822 19.4024ZM31.9991 14.0669L31.9995 14.0669L32.0418 13.7699L31.9995 14.0669C31.9994 14.0669 31.9993 14.0669 31.9991 14.0669Z"
                                            fill="#BFBFBF" stroke="#BFBFBF" />
                                    </svg>
                                    <div class="pt-3">
                                        <h4 class="counter" style="visibility: visible; font-size: 16px;">
                                            $<?php echo number_format($row['total_balance'], 2, '.', ',').' '; ?>USD
                                        </h4>

                                    </div>
                                    <div class="p-1">
                                        <a class="action-button" style="background: transparent; border: 0.2px solid white; font-size: 12px; padding:3px;" href="history.php">History</a>
                                        <a class="action-button" style="font-size: 12px; padding:3px;" href="withdrawal.php">Withdraw</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 d-block d-sm-none">
                            <div class="card shining-card">
                                <div class="card-body">

                                    <span style="font-size: 15px;" class="me-2">Total Deposits</span>
                                    <svg width="20" height="20" viewBox="0 0 36 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.86124 21.6224L11.2734 16.8577C11.6095 16.6417 12.041 16.6447 12.3718 16.8655L18.9661 21.2663C19.2968 21.4871 19.7283 21.4901 20.0644 21.2741L27.875 16.2534"
                                            stroke="#BFBFBF" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M26.7847 13.3246L31.6677 14.0197L30.4485 18.7565L26.7847 13.3246ZM30.2822 19.4024C30.2823 19.4023 30.2823 19.4021 30.2824 19.402L30.2822 19.4024ZM31.9991 14.0669L31.9995 14.0669L32.0418 13.7699L31.9995 14.0669C31.9994 14.0669 31.9993 14.0669 31.9991 14.0669Z"
                                            fill="#BFBFBF" stroke="#BFBFBF" />
                                    </svg>
                                    <div class="pt-3">
                                        <h4 class="counter" style="visibility: visible; font-size: 16px;">
                                            $<?php echo number_format($row['total_deposits'], 2, '.', ',').' '; ?>USD
                                        </h4>

                                    </div>
                                    <div class="p-3">
                                        <a style="background: transparent; border: 1px solid white; font-size: 12px;" href="depoHistory.php"
                                            class="action-button">History</a>
                                        <a style="font-size: 12px;" href="deposit.php" class="action-button">Deposit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 d-block d-sm-none">
                            <div class="card shining-card">
                                <div class="card-body">

                                    <span style="font-size: 15px;" class="me-2">Total Profit</span>
                                    <svg width="36" height="35" viewBox="0 0 36 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.86124 21.6224L11.2734 16.8577C11.6095 16.6417 12.041 16.6447 12.3718 16.8655L18.9661 21.2663C19.2968 21.4871 19.7283 21.4901 20.0644 21.2741L27.875 16.2534"
                                            stroke="#BFBFBF" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M26.7847 13.3246L31.6677 14.0197L30.4485 18.7565L26.7847 13.3246ZM30.2822 19.4024C30.2823 19.4023 30.2823 19.4021 30.2824 19.402L30.2822 19.4024ZM31.9991 14.0669L31.9995 14.0669L32.0418 13.7699L31.9995 14.0669C31.9994 14.0669 31.9993 14.0669 31.9991 14.0669Z"
                                            fill="#BFBFBF" stroke="#BFBFBF" />
                                    </svg>
                                    <div class="pt-3">
                                        <h4 class="counter" style="visibility: visible; font-size: 10px;">
                                            $<?php echo number_format($row['total_profit'], 2, '.', ',').' '; ?>USD
                                        </h4>

                                    </div>
                                    <div class="p-3">
                                        <a style="background: transparent; border: 1px solid white; font-size: 12px;" href="#exchange"
                                            class="action-button">Exchange</a>
                                        <a style="font-size: 12px;" href="history.php" class="action-button">History</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 d-block d-sm-none">
                            <div class="card shining-card">
                                <div class="card-body">

                                    <span style="font-size: 15px;" class="me-2">Total Bonus</span>
                                    <svg width="36" height="35" viewBox="0 0 36 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.86124 21.6224L11.2734 16.8577C11.6095 16.6417 12.041 16.6447 12.3718 16.8655L18.9661 21.2663C19.2968 21.4871 19.7283 21.4901 20.0644 21.2741L27.875 16.2534"
                                            stroke="#BFBFBF" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M26.7847 13.3246L31.6677 14.0197L30.4485 18.7565L26.7847 13.3246ZM30.2822 19.4024C30.2823 19.4023 30.2823 19.4021 30.2824 19.402L30.2822 19.4024ZM31.9991 14.0669L31.9995 14.0669L32.0418 13.7699L31.9995 14.0669C31.9994 14.0669 31.9993 14.0669 31.9991 14.0669Z"
                                            fill="#BFBFBF" stroke="#BFBFBF" />
                                    </svg>
                                    <div class="pt-3">
                                        <h4 class="counter" style="visibility: visible; font-size: 10px;">
                                            $<?php echo number_format($row['total_bonus'], 2, '.', ',').' '; ?>USD
                                        </h4>

                                    </div>
                                    <div class="p-3">
                                        <a style="background: transparent; border: 1px solid white; font-size: 12px;" href="#exchange"
                                            class="action-button">Exchange</a>
                                        <a style="font-size: 12px;" href="history.php" class="action-button">History</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card card-block card-stretch custom-scroll">
                                <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="caption">
                                        <h4 class="font-weight-bold mb-2">
                                            Wallets
                                        </h4>

                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table data-table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Currency</th>
                                                    <th scope="col">Balance</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="white-space-no-wrap">
                                                    <td>
                                                        <img src="assets/images/coins/02.png"
                                                            class="img-fluid avatar avatar-30 avatar-rounded"
                                                            alt="img23" />
                                                        Bitcoin BTC<a class="button btn-primary badge ms-2"
                                                            type="button">Buy</a>
                                                    </td>
                                                    <td class="pe-2">
                                                        $<?php echo  number_format($row['btc_balance'], 2, '.', ',').' '; ?>USD
                                                    </td>

                                                </tr>
                                                <tr class="white-space-no-wrap">
                                                    <td>
                                                        <img src="assets/images/coins/02.png"
                                                            class="img-fluid avatar avatar-30 avatar-rounded"
                                                            alt="img23" />
                                                        Ethereum ETH<a class="button btn-primary badge ms-2"
                                                            type="button">Buy</a>
                                                    </td>
                                                    <td class="pe-2">
                                                        $<?php echo  number_format($row['eth_balance'], 2, '.', ',').' ';  ?>USD
                                                    </td>

                                                </tr>
                                                <tr class="white-space-no-wrap">
                                                    <td>
                                                        <img src="assets/images/coins/02.png"
                                                            class="img-fluid avatar avatar-30 avatar-rounded"
                                                            alt="img23" />
                                                        Tether USDT<a class="button btn-primary badge ms-2"
                                                            type="button">Buy</a>
                                                    </td>
                                                    <td class="pe-2">
                                                        $<?php echo  number_format($row['usdt_balance'], 2, '.', ',').' ';  ?>USD
                                                    </td>

                                                </tr>
                                                <tr class="white-space-no-wrap">
                                                    <td>
                                                        <img src="assets/images/coins/02.png"
                                                            class="img-fluid avatar avatar-30 avatar-rounded"
                                                            alt="img23" />
                                                        BNB<a class="button btn-primary badge ms-2"
                                                            type="button">Buy</a>
                                                    </td>
                                                    <td class="pe-2">
                                                        $<?php echo  number_format($row['ltc_balance'], 2, '.', ',').' '; ?>USD
                                                    </td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>

                            <script type="text/javascript"
                                src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js"
                                async>
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
                <div class="col-lg-8">
                    <div class="card">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>

                            <script type="text/javascript"
                                src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js"
                                async>
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
                <div class="col-lg-8">
                    <div class="card">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>

                            <script type="text/javascript"
                                src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js"
                                async>
                            {
                                "symbol": "NYSE:LTC",
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
                <div class="col-lg-12">
                    <div id="exchange" class="card">
                        <div class="card-header d-flex justify-content-between flex-wrap">
                            <div class="header-title">
                                <h4 class="card-title mb-2">Market Overview</h4>

                            </div>
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>

                                <script type="text/javascript"
                                    src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js"
                                    async>
                                {
                                    "width": "100%",
                                    "height": 450,
                                    "symbolsGroups": [{
                                            "name": "Indices",
                                            "originalName": "Indices",
                                            "symbols": [{
                                                    "name": "FOREXCOM:SPXUSD",
                                                    "displayName": "S&P 500"
                                                },
                                                {
                                                    "name": "FOREXCOM:NSXUSD",
                                                    "displayName": "US 100"
                                                },
                                                {
                                                    "name": "FOREXCOM:DJI",
                                                    "displayName": "Dow 30"
                                                },
                                                {
                                                    "name": "INDEX:NKY",
                                                    "displayName": "Nikkei 225"
                                                },
                                                {
                                                    "name": "INDEX:DEU40",
                                                    "displayName": "DAX Index"
                                                },
                                                {
                                                    "name": "FOREXCOM:UKXGBP",
                                                    "displayName": "UK 100"
                                                }
                                            ]
                                        },
                                        {
                                            "name": "Futures",
                                            "originalName": "Futures",
                                            "symbols": [{
                                                    "name": "CME_MINI:ES1!",
                                                    "displayName": "S&P 500"
                                                },
                                                {
                                                    "name": "CME:6E1!",
                                                    "displayName": "Euro"
                                                },
                                                {
                                                    "name": "COMEX:GC1!",
                                                    "displayName": "Gold"
                                                },
                                                {
                                                    "name": "NYMEX:CL1!",
                                                    "displayName": "Oil"
                                                },
                                                {
                                                    "name": "NYMEX:NG1!",
                                                    "displayName": "Gas"
                                                },
                                                {
                                                    "name": "CBOT:ZC1!",
                                                    "displayName": "Corn"
                                                }
                                            ]
                                        },
                                        {
                                            "name": "Bonds",
                                            "originalName": "Bonds",
                                            "symbols": [{
                                                    "name": "CME:GE1!",
                                                    "displayName": "Eurodollar"
                                                },
                                                {
                                                    "name": "CBOT:ZB1!",
                                                    "displayName": "T-Bond"
                                                },
                                                {
                                                    "name": "CBOT:UB1!",
                                                    "displayName": "Ultra T-Bond"
                                                },
                                                {
                                                    "name": "EUREX:FGBL1!",
                                                    "displayName": "Euro Bund"
                                                },
                                                {
                                                    "name": "EUREX:FBTP1!",
                                                    "displayName": "Euro BTP"
                                                },
                                                {
                                                    "name": "EUREX:FGBM1!",
                                                    "displayName": "Euro BOBL"
                                                }
                                            ]
                                        },
                                        {
                                            "name": "Forex",
                                            "originalName": "Forex",
                                            "symbols": [{
                                                    "name": "FX:EURUSD",
                                                    "displayName": "EUR to USD"
                                                },
                                                {
                                                    "name": "FX:GBPUSD",
                                                    "displayName": "GBP to USD"
                                                },
                                                {
                                                    "name": "FX:USDJPY",
                                                    "displayName": "USD to JPY"
                                                },
                                                {
                                                    "name": "FX:USDCHF",
                                                    "displayName": "USD to CHF"
                                                },
                                                {
                                                    "name": "FX:AUDUSD",
                                                    "displayName": "AUD to USD"
                                                },
                                                {
                                                    "name": "FX:USDCAD",
                                                    "displayName": "USD to CAD"
                                                }
                                            ]
                                        }
                                    ],
                                    "showSymbolLogo": true,
                                    "colorTheme": "dark",
                                    "isTransparent": true,
                                    "locale": "en"
                                }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>

                    </div>
                </div>

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
<?php
      include("includes/footer.php");
      ?>