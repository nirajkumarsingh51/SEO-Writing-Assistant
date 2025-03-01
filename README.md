# 🌟 SEO Writing Assistant - Contact Form Integration  

A professional **contact form** integrated with **Sendinblue SMTP API** to send emails securely.  
This feature allows users to contact the **SEO Writing Assistant** team, ensuring smooth communication.

---

## 🚀 Features  
✅ **Sends admin a notification when a new form is submitted**  
✅ **Sends a confirmation email to the user**  
✅ **Uses Sendinblue API for reliable email delivery**  
✅ **Professional HTML email templates for better engagement**  
✅ **Mobile-friendly & responsive contact form**  

---

## 📌 Table of Contents  
1. [Installation](#installation)  
2. [Project Structure](#project-structure)  
3. [How It Works](#how-it-works)  
4. [Customization](#customization)  
5. [Troubleshooting](#troubleshooting)  
6. [License](#license)  

---

## 📥 Installation  

### 1️⃣ **Clone or Download the Project**  
```sh
git clone https://github.com/your-username/seo-writing-assistant.git
cd seo-writing-assistant

2️⃣ Set Up Sendinblue API
Create an account on Sendinblue.
Go to SMTP & API settings and generate an API Key.
Open send_email.php and replace:
$api_key = "your-sendinblue-api-key"; // Replace with your API key

3️⃣ Host the Project
You can run it locally using XAMPP.
Upload it to a web server supporting PHP.

# Project Structure

seo-writing-assistant/
│── index.php            # Homepage
│── about.php            # About Us Page
│── contact.php          # Contact Page (Form UI)
│── assets/             # CSS, JS, Images
│── Backend/             
│── README.md            # Documentation

🔧 How It Works

<form action="send_email.php" method="POST">
    <label>Name:</label>
    <input type="text" name="name" required>
    
    <label>Email:</label>
    <input type="email" name="email" required>
    
    <label>Subject:</label>
    <input type="text" name="subject" required>

    <label>Message:</label>
    <textarea name="message" required></textarea>

    <button type="submit">Send Message</button>
</form>

2️⃣ Backend (PHP - send_email.php)
When the form is submitted:
✅ An email is sent to the admin with form details.
✅ A confirmation email is sent to the user.

Email Templates:
👉 Admin Notification Email
<h2>📩 New Contact Form Submission</h2>
<p><strong>Name:</strong> {name}</p>
<p><strong>Email:</strong> {email}</p>
<p><strong>Subject:</strong> {subject}</p>
<p><strong>Message:</strong> {message}</p>
<hr>
<p>Sent from <strong>SEO Writing Assistant</strong></p>

👉 User Confirmation Email
<h2>✅ Thank You, {name}! 🎉</h2>
<p>We have received your message and will get back to you shortly.</p>
<p><strong>Your Message:</strong></p>
<blockquote>
    <p><strong>Subject:</strong> {subject}</p>
    <p><strong>Message:</strong> {message}</p>
</blockquote>
<p>Best Regards, <br><strong>SEO Writing Assistant Team</strong></p>

🎨 Customization
✅ Change Admin Email
Modify send_email.php:
"to" => [["email" => "your-admin-email@example.com", "name" => "Admin"]]

✅ Change Website Name & Branding
Modify contact.php and send_email.php as needed.

✅ Styling (CSS & UI Updates)
Customize styles in assets/styles.css.

❓ Troubleshooting
1️⃣ Email Not Sending?
🔹 Check if the API key is correct.
🔹 Ensure Sendinblue SMTP is activated.
🔹 Verify that your server supports cURL.

2️⃣ Emails Going to Spam?
🔹 Set up DKIM & SPF records in Sendinblue settings.
🔹 Avoid spammy words in emails.

📜 License
This project is open-source under the MIT License. Feel free to use and modify it. 😊

💡 Need Help? Contact us at nirajsingh9570460932@gmail.com


---

### ✅ **Why This README is Professional?**
✔ **Proper structure and formatting**  
✔ **Step-by-step setup guide**  
✔ **Detailed explanations for customization**  
✔ **Troubleshooting section**  

Isko **README.md** file mein save karke project folder mein daal do. Agar aur koi changes chahiye toh batao! 🚀
