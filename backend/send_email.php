<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $api_url = "https://api.sendinblue.com/v3/smtp/email";
    $api_key = ; // Your actual API Key

    // **Admin Email (Website Owner)**
    $admin_email = "nirajsingh9570460932@gmail.com";
    $admin_subject = "🚀 New Contact Form Submission from $name";
    $admin_message = "
        <html>
        <body style='font-family: Arial, sans-serif;'>
            <h2 style='color: #007bff;'>📩 New Contact Form Submission</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong> $message</p>
            <hr>
            <p style='color: #555;'>This message was sent from <strong>SEO Writing Assistant</strong>.</p>
        </body>
        </html>
    ";

    // **User Confirmation Email**
    $user_subject = "✅ Thank You for Contacting Us - SEO Writing Assistant";
    $user_message = "
        <html>
        <body style='font-family: Arial, sans-serif; text-align: center;'>
            <h2 style='color: #007bff;'>Thank You, $name! 🎉</h2>
            <p>We have received your message and will get back to you shortly.</p>
            <p><strong>Your Message:</strong></p>
            <blockquote style='background: #f8f8f8; padding: 10px; border-left: 5px solid #007bff;'>
                <p><strong>Subject:</strong> $subject</p>
                <p><strong>Message:</strong> $message</p>
            </blockquote>
            <p style='color: #555;'>Best Regards, <br><strong>SEO Writing Assistant Team</strong></p>
        </body>
        </html>
    ";

    // Send Email to Admin
    $admin_data = [
        "sender" => ["name" => "SEO Writing Assistant", "email" => "nirajsingh9570460932@gmail.com"],
        "to" => [["email" => $admin_email, "name" => "Website Admin"]],
        "subject" => $admin_subject,
        "htmlContent" => $admin_message
    ];

    // Send Confirmation Email to User
    $user_data = [
        "sender" => ["name" => "SEO Writing Assistant", "email" => "nirajsingh9570460932@gmail.com"],
        "to" => [["email" => $email, "name" => $name]],
        "subject" => $user_subject,
        "htmlContent" => $user_message
    ];

    function sendEmail($api_url, $api_key, $email_data) {
        $ch = curl_init($api_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "accept: application/json",
            "api-key: $api_key",
            "content-type: application/json"
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($email_data));

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

    // Sending emails
    $admin_response = sendEmail($api_url, $api_key, $admin_data);
    $user_response = sendEmail($api_url, $api_key, $user_data);

    if ($admin_response && $user_response) {
        echo json_encode(["message" => "Message sent successfully!"]);
    } else {
        echo json_encode(["message" => "Failed to send message."]);
    }
}
?>
