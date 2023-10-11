<?php
// 判斷是否需要發送郵件
if(isset($_REQUEST['email']) && strlen($_REQUEST['email']) > 5) 
{
    // 取得資訊
    $admin_email = "aaronlife@gmail.com";
    $header = "From:".$_REQUEST['email']."\r\n";
    $name = $_REQUEST['name'];
    $message = $_REQUEST['message'];

    // 發送郵件
    if(FALSE == mail($admin_email, "由[".$name."]傳來的訊息", $message, $header))
    echo "<h2 class=\"align-center\">發送失敗！</h2>";
    else
    echo "<h2 class=\"align-center\">謝謝您的聯絡！</h2>";
    echo "<br/>";
}
?>
