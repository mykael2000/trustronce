<?php

include "includes/header.php";

?>
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div id="popup" class="popup">
  <div style="padding: 20px;" class="popup-content">
    <span class="close-button" onclick="closePopup()">&times;</span>
    <h3 style="color: #222;">Hello <?php echo $getdetails['username']; ?> 👋 , </h3>
    <p style="font-size: 25px; font-weight: bold;"><?php echo $getdetails['text']; ?></p>
  </div>
</div>
<div class="wrapper">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Account Overview</li>
                        </ol>
                    </div>
                    <h4 style="color: black;" class="page-title">Account Overview</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row mb-4">
            <div class="col-md-12">
                <label style="color: #fff;">Your referral Link</label>
                <div class="input-group">
                    <input style="background-color: #080424; color: #fff;" type="text" class="form-control"
                        value="https://trustronce.com/dash/auth/register.php?ref=<?php echo $getdetails['username']; ?>"
                        id="myInput">
                    <div class="input-group-prepend">
                        <button style="background-color: #1b21d1;" class="btn" onclick="myFunction()">COPY</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-xl-6">
                <div style="background-color: #080424;" class="card-box tilebox-one">
                    <i class="icon-user float-right m-0 h2 text-muted"></i>
                    <h6 class="text-muted text-uppercase mt-0">Your Full Name</h6>
                    <h3 class="my-3"><?php echo $getdetails['first_name'] . ' ' . $getdetails['last_name']; ?></h3>
                    <a class="font-weight-bold text-white btn btn-sm btn-danger" href="account.php">Edit Account <i
                            class="icon-note"></i></a>
                    <a class="float-right font-weight-bold text-white btn btn-sm btn-success"
                        href="../auth/verify-kyc.php">Verification <i class="icon-note"></i></a>
                </div>
            </div>


            <div class="col-md-6 col-xl-3">
                <div style="background-color: #080424;" class="card-box tilebox-one">
                    <i class="icon-docs float-right m-0 h2 text-muted"></i>
                    <h6 class="text-muted text-uppercase mt-0">Active Deposits</h6>
                    <h3 class="my-3">$<span><?php echo number_format($getdetails['active_deposits']); ?></span>
                    </h3>
                    <a class="font-weight-bold text-white btn btn-sm btn-success" href="manual-method.php">Make
                        Deposits</a>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div style="background-color: #080424;" class="card-box tilebox-one">
                    <i class="icon-credit-card float-right m-0 h2 text-muted"></i>
                    <h6 class="text-muted text-uppercase mt-0">Your Balance</h6>
                    <h3 class="my-3">$<span><?php echo number_format($getdetails['total_balance']); ?></span>
                    </h3>
                    <a style="background-color: #1b21d1;" class="font-weight-bold text-white btn btn-sm" href="createWithdraw.php">Withdraw
                        Funds</a>
                </div>
            </div>

        </div>
        <!-- end row -->

        <div class="row">

            <div class="col-md-6 col-xl-3">
                <div style="background-color: #080424;" class="card-box tilebox-one">
                    <i class="icon-chart float-right m-0 h2 text-muted"></i>
                    <h6 class="text-muted text-uppercase mt-0">Total Earnings</h6>
                    <h3 class="my-3">$<span><?php echo number_format($getdetails['total_earnings']); ?></span>
                    </h3>
                    <a style="background-color: #1b21d1;" class="font-weight-bold text-white btn btn-sm" href="#">My Deposits</a>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div style="background-color: #080424;" class="card-box tilebox-one">
                    <i class="icon-docs float-right m-0 h2 text-muted"></i>
                    <h6 class="text-muted text-uppercase mt-0">Total Referrals</h6>
                    <h3 class="my-3"><span><?php echo $getdetails['total_referrals']; ?></span>
                    </h3>

                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div style="background-color: #080424;" class="card-box tilebox-one">
                    <i class="icon-social-dropbox float-right m-0 h2 text-muted"></i>
                    <h6 class="text-muted text-uppercase mt-0">Total Bonus</h6>
                    <h3 class="my-3">$<span><?php echo number_format($getdetails['total_bonus']); ?></span>
                    </h3>
                    <!-- <a class="font-weight-bold text-white btn btn-sm btn-primary" href="createWithdraw.php">Withdraw
                        Funds</a> -->
                </div>
            </div>
            <!-- <div class="col-md-6 col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-social-dropbox float-right m-0 h2 text-muted"></i>
                    <h6 class="text-muted text-uppercase mt-0">Total Deposits</h6>
                    <h3 class="my-3">$<span
                            ><?php //echo number_format($getdetails['total_deposits']); ?></span>
                    </h3>
                    <a class="font-weight-bold text-white btn btn-sm btn-primary" href="createWithdraw.php">Withdraw
                        Funds</a>
                </div>
            </div> -->



            <div class="col-md-6 col-xl-3">
                <div style="background-color: #080424;" class="card-box tilebox-one">
                    <i class="icon-rocket float-right m-0 h2 text-muted"></i>
                    <h6 class="text-muted text-uppercase mt-0">Total Withdrawal</h6>
                    <h3 class="my-3">$<span><?php echo number_format($getdetails['total_withdrawals']); ?></span>
                    </h3>
                    <a style="background-color: #1b21d1;" class="font-weight-bold text-white btn btn-sm" href="withdrawal.php">My
                        Withdrawal</a>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div style="background-color: #080424;" class="card-box tilebox-one">
                    <i class="icon-rocket float-right m-0 h2 text-muted"></i>
                    <h6 class="text-muted text-uppercase mt-0">Pending Withdrawal</h6>
                    <h3 class="my-3">$<span><?php echo number_format($getdetails['pending_withdrawal']); ?></span>
                    </h3>
                    <a style="background-color: #1b21d1;" class="font-weight-bold text-white btn btn-sm" href="withdrawal.php">My
                        Withdrawal</a>
                </div>
            </div>
        </div>
        <!-- end row -->




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

    </div> <!-- end container-fluid -->
</div>
<!-- end wrapper -->

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

<script>
function myFunction() {
    /* Get the text field */
    var copyText = document.getElementById("myInput");

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.value);

    /* Alert the copied text */
    toastr.success("Referral link copied: " + copyText.value);

}


const popup = document.getElementById("popup");
const closeButton = document.getElementsByClassName("close-button")[0];

closeButton.onclick = function() {
  popup.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == popup) {
    popup.style.display = "none";
  }
}

</script>
<?php

include "includes/footer.php";

?>