<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $company = $_POST["company"];
    $phone = $_POST["phone"];
    $city = $_POST["city"];
    $country = $_POST["country"];
    $type_of_goods = $_POST["type_of_goods"];
    $quantity = $_POST["quantity"];
    $shipping_date = $_POST["shipping_date"];
    $details = $_POST["details"];

    // Validate the data
    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email is required and must be a valid email address.";
    }
    if (empty($company)) {
        $errors[] = "Company is required.";
    }

    if (empty($phone)) {
        $errors[] = "Phone is required.";
    }

    if (empty($city)) {
        $errors[] = "City is required.";
    }

    if (empty($country)) {
        $errors[] = "Country is required.";
    }

    if (empty($type_of_goods)) {
        $errors[] = "Type of goods is required.";
    }

    if (empty($quantity)) {
        $errors[] = "Quantity is required.";
    }


    if (empty($shipping_date)) {
        $errors[] = "Shipping Date is required.";
    }

    if (empty($details)) {
        $errors[] = "Service Requested is required.";
    }

    // Additional check: Validate domain existence
    list($user, $domain) = explode('@', $email);
    if (!checkdnsrr($domain, "MX")) {
        $errors[] = "The domain of the email address does not exist.";
    }

    // If there are errors, redirect with error messages
    if (!empty($errors)) {
        $errorMessages = implode("<br>", $errors);
        header("Location: ../index.php?error=" . urlencode($errorMessages));
        exit();
    }
    include 'config.php';

    // Execute SQL query to insert data into the database
    $sql = "INSERT INTO quotation (name, email, company, phone, city, country, type_of_goods, quantity, shipping_date, details)
            VALUES ('$name', '$email', '$company', '$phone', '$city', '$country', '$type_of_goods', '$quantity', '$shipping_date', '$details')";

    if ($conn->query($sql) === TRUE) {
        // Data inserted successfully
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
    // Original email template
    $email_template = "<!DOCTYPE html>
    <html>
    <head>
        <title>Request for Quote</title>
    </head>
    <body>

        <table cellpadding='0' cellspacing='0' border='0' width='100%' bgcolor='#f5f5f5'>
            <tr>
                <td align='center'>
                    <table cellpadding='0' cellspacing='0' border='0' width='600' style='background-color: #ffffff;'>
                        <tr>
                            <td align='center' style='background-color: #00570E; padding: 20px 0;'>
                            </td>
                        </tr>
                        <tr>
                            <td align='center' valign='top' style='padding: 20px 0;'>
                                <img src='https://plexustrust.net/dnl/assets/img/logo/logo3.png' alt='Your Logo' style='max-width: 150px;'>
                            </td>
                        </tr>
                        <tr>
                            <td style='padding: 20px;'>
                                <h1 style='font-size: 24px; color: #333;'>Request for Quote</h1>
                                <p style='font-size: 16px; color: #666;'>Hello DNL Teams,</p>
                                <p style='font-size: 16px; color: #666;'>We are interested in your services/products and would like to request a quote for the following:</p>
                                <table style='font-size: 16px; color: #666; border-collapse: collapse; width: 100%;'>
                                    <tr>
                                        <td style='border: 1px solid #ccc; padding: 8px;'>Name</td>
                                        <td style='border: 1px solid #ccc; padding: 8px;'>$name</td>
                                    </tr>
                                    <tr>
                                        <td style='border: 1px solid #ccc; padding: 8px;'>Email</td>
                                        <td style='border: 1px solid #ccc; padding: 8px;'>$email</td>
                                    </tr>
                                   
                                    <tr>
                                        <td style='border: 1px solid #ccc; padding: 8px;'>Phone Number</td>
                                        <td style='border: 1px solid #ccc; padding: 8px;'>$phone</td>
                                    </tr>
                                    <tr>
                                        <td style='border: 1px solid #ccc; padding: 8px;'>Company</td>
                                        <td style='border: 1px solid #ccc; padding: 8px;'>$company</td>
                                    </tr>
                                    <tr>
                                        <td style='border: 1px solid #ccc; padding: 8px;'>City</td>
                                        <td style='border: 1px solid #ccc; padding: 8px;'>$city</td>
                                    </tr>
                                    <tr>
                                        <td style='border: 1px solid #ccc; padding: 8px;'>Country</td>
                                        <td style='border: 1px solid #ccc; padding: 8px;'>$country</td>
                                    </tr>
                                    <tr>
                                        <td style='border: 1px solid #ccc; padding: 8px;'>Type of Goods</td>
                                        <td style='border: 1px solid #ccc; padding: 8px;'>$type_of_goods</td>
                                    </tr>
                                    <tr>
                                        <td style='border: 1px solid #ccc; padding: 8px;'>Quantity</td>
                                        <td style='border: 1px solid #ccc; padding: 8px;'>$quantity</td>
                                    </tr>
                                    <tr>
                                        <td style='border: 1px solid #ccc; padding: 8px;'>Shipping_date</td>
                                        <td style='border: 1px solid #ccc; padding: 8px;'> $shipping_date</td>
                                    </tr>
                                    <tr>
                                        <td style='border: 1px solid #ccc; padding: 8px;'>Service Requested and Other Details</td>
                                        <td style='border: 1px solid #ccc; padding: 8px;'>$details</td>
                                    </tr>
                                </table>
                                <p style='font-size: 16px; color: #666;'>Please provide us with a detailed quote including pricing, delivery time, and any additional information.</p>
                                <p style='font-size: 16px; color: #666;'>Thank you for your prompt attention to this request.</p>
                                <p style='font-size: 16px; color: #666;'>Best regards,<br>$name</p>
                            </td>
                        </tr>
                        <tr>
                            <td align='center' style='background-color: #00570E; padding: 20px 0;'>
                                <p style='font-size: 14px; color: #ffffff;'>Copyright @ 2021 DNL Dynamical Network Logistics.All Rights Reserved</p>
                                <p style='font-size: 14px; color: #ffffff;'>1234 Main Street, Phnom Penh, 2001</p>
                                <p style='font-size: 14px; color: #ffffff;'><a href='mailto:info@yourcompany.com' style='color: #ffffff; text-decoration: none;'>dnlinfo@gmail.com</a></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
    </html>

    ";

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'ahpea88@gmail.com';
        $mail->Password = 'rryd rlrm hnma aijk';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->setFrom($email, $name);
        $mail->addAddress('vannrithy09@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'New Quote Request from ' . $name;
        $mail->Body = $email_template;

        $mail->send();

        // Notify Telegram Group
        $telegramBotToken = '6980847155:AAExv0ERNUFc9WFDkf4t4ZEai_axE6QCldo';
        $telegramGroupChatId = '@Get_QuoteDNL';
        date_default_timezone_set('Asia/Phnom_Penh');

        // Get the current date and time in Cambodia timezone
        $currentDateTime = date('Y-m-d h:i A');
        $telegramMessage = "New Quote Request from $name\n\n"
            . "Date and Time: $currentDateTime\n"
            . "Email: $email\n"
            . "Phone: $phone\n"
            . "Company: $company\n"
            . "City: $city\n"
            . "Country: $country\n"
            . "type_of_goods: $type_of_goods\n"
            . "quatity: $quantity\n"
            . "shipping_date: $shipping_date\n"
            . "Service Requested: $details\n";

        $telegramApiUrl = "https://api.telegram.org/bot$telegramBotToken/sendMessage";
        $telegramData = [
            'chat_id' => $telegramGroupChatId,
            'text' => $telegramMessage,
        ];

        $telegramOptions = [
            'http' => [
                'method' => 'POST',
                'header' => 'Content-Type: application/x-www-form-urlencoded',
                'content' => http_build_query($telegramData),
            ],
        ];

        $telegramContext = stream_context_create($telegramOptions);
        $telegramResult = file_get_contents($telegramApiUrl, false, $telegramContext);

        if ($telegramResult === false) {
            // Handle the Telegram notification error, e.g., log the error.
            // You can also add error handling and logging here.
            echo "Error sending notification to Telegram group.";
        } else {
            // Redirect to a thank you page
            header("Location: thank_you.html");
        }

        exit();
    } catch (Exception $e) {
        // Handle email sending error, e.g., display an error message.
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // Handle invalid request, e.g., redirect to the form.
    header("Location: ../index.php");
}

?>
