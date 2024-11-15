<?php
$Serverhost = "localhost";
    $Serverusername = "";
    $Serverpassword = "";
    $Serverdatabase = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bot_token = "enter your bot token here";
    $db_host = $Serverhost;
    $db_user = $Serverusername;
    $db_password = $Serverpassword;
    $db_name = $Serverdatabase;

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT chat_id FROM IntecDevid";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $chat_id = $row['chat_id'];

            $api_url = "https://api.telegram.org/bot$bot_token/sendMessage";
            $photo_api_url = "https://api.telegram.org/bot$bot_token/sendPhoto";
            $video_api_url = "https://api.telegram.org/bot$bot_token/sendVideo";

            $message = isset($_POST['message']) ? trim($_POST['message']) : '';
            $photo = isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK ? $_FILES['photo']['tmp_name'] : '';
            $caption = isset($_POST['caption']) ? trim($_POST['caption']) : '';
            $video = isset($_FILES['video']) && $_FILES['video']['error'] === UPLOAD_ERR_OK ? $_FILES['video']['tmp_name'] : '';

            if (!empty($message)) {
                $post_data = array(
                    'chat_id' => $chat_id,
                    'text' => $message
                );
                $api_url = $api_url . '?' . http_build_query($post_data);
            } elseif (!empty($photo) && !empty($caption)) {
                $photo_file = new CURLFile($photo, mime_content_type($photo), basename($photo));
                $post_data = array(
                    'chat_id' => $chat_id,
                    'photo' => $photo_file,
                    'caption' => $caption
                );
                $api_url = $photo_api_url;
            } elseif (!empty($video) && !empty($caption)) {
                $video_file = new CURLFile($video, mime_content_type($video), basename($video));
                $post_data = array(
                    'chat_id' => $chat_id,
                    'video' => $video_file,
                    'caption' => $caption
                );
                $api_url = $video_api_url;
            } else {
                echo "Please enter a valid message or upload an image or video with a caption.";
                exit;
            }

            $ch = curl_init();
            // Set cURL options
            curl_setopt($ch, CURLOPT_URL, $api_url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);

            if ($response === false) {
                echo "Error: " . curl_error($ch);
            } else {
                echo $response;
            }

            curl_close($ch);
        }
    } else {
        echo "No chat IDs found in the database.";
    }
    if ($response === false) {
        echo "Error: " . curl_error($ch);
    } else {
        echo $response;
        echo '<script>
            setTimeout(function() {
                window.location.href = "../broadooo";
            }, 3000); // 3000 milliseconds = 3 seconds
        </script>';
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Message, Photo, or Video to Telegram Bot</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css">
</head>
<body>
    <div class="glass-container">
        <script type="text/javascript">document.write(unescape('%3c%68%32%20%73%74%79%6c%65%3d%22%74%65%78%74%2d%61%6c%69%67%6e%3a%63%65%6e%74%65%72%3b%22%3e%53%65%6e%64%20%4d%65%73%73%61%67%65%20%46%6f%72%20%42%6f%74%3c%2f%68%32%3e%0d%0a%20%20%20%20%20%20%20%20%3c%68%32%3e%42%79%20%3c%61%20%68%72%65%66%3d%22%68%74%74%70%73%3a%2f%2f%77%77%77%2e%69%6e%74%65%63%68%6f%73%74%2e%69%6e%2f%22%20%74%61%72%67%65%74%3d%22%5f%62%6c%61%6e%6b%22%3e%77%77%77%2e%49%6e%74%65%63%48%6f%73%74%2e%69%6e%3c%2f%61%3e%3c%2f%68%32%3e'));</script>
        <form action="" method="post" enctype="multipart/form-data">
            <h3 style="text-align:center;color:#000;">For Message</h3>
            <textarea type="text" placeholder="Type your message:" name="message" id="message"></textarea>
            <h3 style="text-align:center;color:#000;">For Image</h3>
            <input placeholder="Select an image (optional):" type="file" name="photo" id="photo">
            <br>
            <h3 style="text-align:center;color:#000;">For Video</h3>
            <input placeholder="Select a video (optional):" type="file" name="video" id="video">
            <br>
            <textarea placeholder="Caption (if sending an image or video):" type="text" name="caption" id="caption"></textarea>
            <br>
            <button type="submit">Send</button>
        </form>
        <textarea id="clipboardTextArea" style="position: absolute; top: -9999px; left: -9999px;"></textarea>
        <script>
            const lines = document.querySelectorAll('[id^="line"]');
            lines.forEach(line => {
                line.addEventListener('click', function() {
                    const textToCopy = line.textContent.trim();
                    copyToClipboard(textToCopy);
                    alert('Text copied to clipboard: ' + textToCopy);
                });
            });
            function copyToClipboard(text) {
                const clipboardTextArea = document.getElementById('clipboardTextArea');
                clipboardTextArea.value = text;
                clipboardTextArea.select();
                document.execCommand('copy');
            }
        </script>
    </div>
</body>
</html>
