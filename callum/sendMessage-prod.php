<h1>Sending...</h1>
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect post data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $curl = curl_init();
    
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.zeptomail.com/v1.1/email",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSLVERSION => CURL_SSLVERSION_TLSv1_2,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => '{
    "from": { "address": "noreply@mytech.org.uk"},
    "to": [{"email_address": {"address": "callum.corrigan@mail.bcu.ac.uk","name": "Callum"}}],
    "subject":"New Message from DevOps Website",
    "htmlbody": "<b>You have a new message via your DevOps website - please see below:</b><ul><br><p>' . $message . '</p></ul><br><br><i>To reply to ' . $name . ', just reply to this email.",
    "reply_to": {"address": "' . $email . '","name": "' . $name . '"}
    }',
        CURLOPT_HTTPHEADER => array(
            "accept: application/json",
            "authorization: Zoho-enczapikey wSsVR611+EKlB65/zWepI+1ry1UHU1jyFEV13FGmviStGP/L98czlUHKAQ6iSPFKEzNhEGRDor8okBoG12YIiNQry1gGWSiF9mqRe1U4J3x17qnvhDzIX2RalRqOLYgAzwhqmWJlEcsj+g==",
            "cache-control: no-cache",
            "content-type: application/json",
        ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo 'Message sent - redirecting...';
        echo '<script type="text/javascript">window.location.href = "index.php?msgSent=yes#form-success";</script>';
    }
}
?>
