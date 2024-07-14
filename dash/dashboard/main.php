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

                                    <span style="font-size: 13px;" class="me-2">Total Balance</span>
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
                                    <div class="p-3">
                                        <a class="action-button" style="font-size: 12px; padding:3px;" href="withdrawal.php">Withdraw</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 d-block d-sm-none">
                            <div class="card shining-card">
                                <div class="card-body">

                                    <span style="font-size: 13px;" class="me-2">Total Deposits</span>
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
                                            $<?php echo number_format($row['total_deposits'], 2, '.', ',').' '; ?>USD
                                        </h4>

                                    </div>
                                    <div class="p-3">
                                        <a class="action-button" style="font-size: 12px;" href="deposit.php" >Deposit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 d-block d-sm-none">
                            <div class="card shining-card">
                                <div class="card-body">

                                    <span style="font-size: 13px;" class="me-2">Total Profit</span>
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
                                            $<?php echo number_format($row['total_profit'], 2, '.', ',').' '; ?>USD
                                        </h4>

                                    </div>
                                    <div class="p-3">
                                        <a class="action-button" style="font-size: 12px;" href="history.php" >History</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 d-block d-sm-none">
                            <div class="card shining-card">
                                <div class="card-body">

                                    <span style="font-size: 13px;" class="me-2">Total Bonus</span>
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
                                            $<?php echo number_format($row['total_bonus'], 2, '.', ',').' '; ?>USD
                                        </h4>

                                    </div>
                                    <div class="p-3">
                                      
                                        <a class="action-button" style="font-size: 12px;" href="history.php">History</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 d-block d-sm-none">
                            <div class="card shining-card">
                                <div class="card-body">

                                    <span style="font-size: 13px;" class="me-2">Bitcoin Balance</span>
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
                                            $<?php echo  number_format($row['btc_balance'], 2, '.', ',').' '; ?>USD
                                        </h4>

                                    </div>
                                    <div class="p-3">
                                      
                                        <a class="action-button" style="font-size: 12px;" href="history.php">History</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 d-block d-sm-none">
                            <div class="card shining-card">
                                <div class="card-body">

                                    <span style="font-size: 13px;" class="me-2">Ethereum Balance</span>
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
                                            $<?php echo  number_format($row['eth_balance'], 2, '.', ',').' ';  ?>USD
                                        </h4>

                                    </div>
                                    <div class="p-3">
                                      
                                        <a class="action-button" style="font-size: 12px;" href="history.php">History</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 d-block d-sm-none">
                            <div class="card shining-card">
                                <div class="card-body">

                                    <span style="font-size: 13px;" class="me-2">USDT Balance</span>
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
                                            $<?php echo  number_format($row['usdt_balance'], 2, '.', ',').' ';  ?>USD
                                        </h4>

                                    </div>
                                    <div class="p-3">
                                      
                                        <a class="action-button" style="font-size: 12px;" href="history.php">History</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 d-block d-sm-none">
                            <div class="card shining-card">
                                <div class="card-body">

                                    <span style="font-size: 13px;" class="me-2">BNB Balance</span>
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
                                            $<?php echo  number_format($row['bnb_balance'], 2, '.', ',').' ';  ?>USD
                                        </h4>

                                    </div>
                                    <div class="p-3">
                                      
                                        <a class="action-button" style="font-size: 12px;" href="history.php">History</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 d-block d-sm-none">
                            <div class="card shining-card">
                                <div class="card-body">

                                    <span style="font-size: 13px;" class="me-2">Total Earnings</span>
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
                                            $<?php echo number_format($row['total_earnings'], 2, '.', ',').' '; ?>USD
                                        </h4>

                                    </div>
                                    <div class="p-3">
                                      
                                        <a class="action-button" style="font-size: 12px;" href="history.php">History</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 d-block d-sm-none">
                            <div class="card shining-card">
                                <div class="card-body">

                                    <span style="font-size: 13px;" class="me-2">Total Referrals</span>
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
                                            $<?php echo number_format($row['total_referrals'], 2, '.', ',').' '; ?>USD
                                        </h4>

                                    </div>
                                    <div class="p-3">
                                      
                                        <a class="action-button" style="font-size: 12px;" href="history.php">History</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 d-block d-sm-none">
                            <div class="card shining-card">
                                <div class="card-body">

                                    <span style="font-size: 13px;" class="me-2">Total Withdrawals</span>
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
                                            $<?php echo number_format($row['total_withdrawals'], 2, '.', ',').' '; ?>USD
                                        </h4>

                                    </div>
                                    <div class="p-3">
                                      
                                        <a class="action-button" style="font-size: 12px;" href="history.php">History</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 d-block d-sm-none">
                            <div class="card shining-card">
                                <div class="card-body">

                                    <span style="font-size: 13px;" class="me-2">Pending Withdrawals</span>
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
                                            $<?php echo number_format($row['pending_withdrawals'], 2, '.', ',').' '; ?>USD
                                        </h4>

                                    </div>
                                    <div class="p-3">
                                      
                                        <a class="action-button" style="font-size: 12px;" href="history.php">History</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
<?php
      include("includes/footer.php");
      ?>