<?php

include '../dnl_dashboard/PHP/config/db_conn.php';

$telegramToken = '7083341085:AAGjl7RUcN8yQBc0MTcxcR_X8Z1kWINU5HQ';
$chatId = '611325018';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $question = $conn->real_escape_string($_POST['question']);

    // Insert data into the database
    $sql = "INSERT INTO contact (name, email, question) VALUES ('$name', '$email', '$question')";

    if ($conn->query($sql) === TRUE) {
        // Prepare message for Telegram
        $message = "New Contact Submission:\n\n";
        $message .= "Name: $name\n";
        $message .= "Email: $email\n";
        $message .= "Question: $question";

        // URL encode the message
        $encodedMessage = urlencode($message);

        // Send message to Telegram
        $url = "https://api.telegram.org/bot$telegramToken/sendMessage?chat_id=$chatId&text=$encodedMessage";

        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query(['chat_id' => $chatId, 'text' => $message]),
            ],
        ];

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        if ($result === FALSE) {
            die('Error sending message to Telegram');
        }

        echo "Contact form submitted successfully!";
    } else {
        echo "Error submitting form.";
    }
}
?>
