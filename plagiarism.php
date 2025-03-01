<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ✅ Primary Meta Tags -->
    <title>Plagiarism Checker - Check Content for Originality</title>
    <meta name="description" content="Use our free Plagiarism Checker to ensure your content is unique. Get detailed plagiarism reports and improve your SEO rankings.">
    <meta name="keywords" content="Plagiarism Checker, Free Plagiarism Detector, SEO Content Checker, Check Content Originality, Duplicate Content Detection">
    <meta name="robots" content="index, follow"> <!-- Allows indexing by search engines -->

    <!-- ✅ Open Graph (For Facebook, LinkedIn, etc.) -->
    <meta property="og:title" content="SEO Writing Assistant - Best Tool for SEO Content Optimization">
    <meta property="og:description" content="Write high-ranking SEO content with real-time keyword suggestions, readability analysis, and plagiarism checking.">
    <meta property="og:image" content="https://yourwebsite.com/assets/seo-writing-tool.jpg">
    <meta property="og:url" content="https://yourwebsite.com">
    <meta property="og:type" content="website">

    <!-- ✅ Twitter Card (For Twitter Sharing) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="SEO Writing Assistant - Optimize Your Content for SEO">
    <meta name="twitter:description" content="Get real-time SEO suggestions, readability analysis, and plagiarism checking. Write better content for higher rankings!">
    <meta name="twitter:image" content="https://yourwebsite.com/assets/seo-writing-tool.jpg">

    <!-- ✅ Favicon (Tab Icon) -->
    <link rel="icon" href="assets/logo.jpg" type="image/x-icon">

    <!-- ✅ Canonical URL (Prevents Duplicate Content Issues) -->
    <link rel="canonical" href="https://yourwebsite.com">

    <!-- ✅ Google Verification (For Google Search Console) -->
    <meta name="google-site-verification" content="YOUR_GOOGLE_VERIFICATION_CODE_HERE">

    <!-- ✅ Structured Data for Google -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Plagiarism Checker",
        "description": "Use our free Plagiarism Checker to ensure your content is unique. Get detailed plagiarism reports and improve your SEO rankings.",
        "url": "plagiarism",
        "publisher": {
            "@type": "Organization",
            "name": "SEO Writing Assistant",
            "logo": "assets/logo.jpg"
        }
    }
    </script>

    <!-- ✅ Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- ✅ Bootstrap Icons (Optional) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* ✅ Full-Screen Background Section */
        .plagiarism-section {
            height: 100vh;
            background: url('assets/seoBg.png') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            text-align: center;
            padding: 20px;
        }

        .plagiarism-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6); /* ✅ Dark Overlay for Readability */
        }

        .plagiarism-box {
            position: relative;
            z-index: 1;
            max-width: 800px;
            width: 100%;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .plagiarism-box h2 {
            color: #007bff;
            font-size: 2rem;
            font-weight: bold;
        }

        textarea {
            font-size: 1.2em;
            width: 100%;
            height: 150px;
            resize: none;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .btn-primary {
            width: 100%;
            font-size: 1.2rem;
            padding: 10px;
        }

        /* ✅ Footer */
        .footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 15px 0;
            font-size: 1rem;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .footer .social-icons a {
            color: white;
            font-size: 1.2rem;
            margin: 0 10px;
            transition: 0.3s;
        }

        .footer .social-icons a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>

    <!-- ✅ Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <!-- ✅ Logo with Website Name -->
        <a class="navbar-brand d-flex align-items-center" href="index">
            <img src="assets/logo.jpg" alt="Logo" width="40" height="40" class="me-2">
            <span>SEO Writing Assistant</span>
        </a>

        <!-- ✅ Mobile Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- ✅ Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="seo-assistant">SEO Assistant</a></li>
                <li class="nav-item"><a class="nav-link active" href="plagiarism">Plagiarism Checker</a></li>
                <li class="nav-item"><a class="nav-link" href="about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>



   
<!-- ✅ Main Container -->

    <!-- ✅ Plagiarism Checker Section -->
    <div class="plagiarism-section">
        <div class="plagiarism-box">
            <h2 class="text-center">Plagiarism Checker</h2>
            <p class="text-center text-muted">Enter your content below to check for plagiarism.</p>
            
            <!-- ✅ Styled Textarea -->
            <textarea id="content" class="form-control mt-3" rows="6" placeholder="Enter text to check for plagiarism..."></textarea>
            
            <!-- ✅ Check Button -->
            <button id="check-plagiarism" class="btn btn-primary mt-3 w-100">
                <i class="bi bi-search"></i> Check Plagiarism
            </button>

            <!-- ✅ Result Display (Fixed Height & Scrollable) -->
            <div class="mt-4 p-3 bg-light border rounded" id="result-container" style="display: none; max-height: 250px; overflow-y: auto;">
                <h4 class="text-success text-center"><i class="bi bi-check-circle"></i> Plagiarism Analysis Result</h4>
                <p id="plagiarism-result" class="text-center"></p>
            </div>
        </div>
    </div>


<!-- ✅ Footer Section -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2025 SEO Writing Assistant. All rights reserved.</p>
</footer>

    <!-- ✅ Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.getElementById("check-plagiarism").addEventListener("click", function() {
            let text = document.getElementById("content").value;
            let resultContainer = document.getElementById("result-container");
            let resultText = document.getElementById("plagiarism-result");

            if (text.trim() === "") {
                resultText.innerHTML = "<span class='text-danger'>Please enter text before checking.</span>";
                resultContainer.style.display = "block";
                return;
            }

            fetch("backend/plagiarism_checker.php", {
                method: "POST",
                body: new URLSearchParams({ text: text }),
                headers: { "Content-Type": "application/x-www-form-urlencoded" }
            })
            .then(response => response.json())
            .then(data => {
                resultContainer.style.display = "block";
                if (data.error) {
                    resultText.innerHTML = "<span class='text-danger'>Error: " + data.error + "</span>";
                } else {
                    let topics = data.response.topics.map(t => t.label).join(", ");
                    resultText.innerHTML = "<span class='text-success'>Plagiarism Analysis Completed!</span><br>" +
                                           "<strong>Detected Topics:</strong> " + topics;
                }
            })
            .catch(error => {
                resultContainer.style.display = "block";
                resultText.innerHTML = "<span class='text-danger'>An error occurred. Please try again.</span>";
            });
        });
    </script>

</body>
</html>

