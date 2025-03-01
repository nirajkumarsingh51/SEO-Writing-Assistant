<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ✅ Primary Meta Tags -->
    <title>SEO Writing Assistant Tool - Optimize Your Content</title>
    <meta name="description" content="Write SEO-friendly content with keyword density analysis, readability score, and plagiarism detection.">
    <meta name="keywords" content="SEO Writing Tool, Keyword Optimization, Readability Score, Content Optimization, SEO Score">
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

    <!-- ✅ Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- ✅ Bootstrap Icons (Optional) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <!-- ✅ Custom JavaScript -->
   <!-- <script src="script.js" defer></script>  -->
    <script src="toggle-theme.js" defer></script>

    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        /* Navbar Styling */
        .navbar {
            background-color: #007bff !important;
        }

        .navbar-brand, .nav-link {
            color: #fff !important;
        }

        .nav-link:hover {
            color: #f1f1f1 !important;
        }

        .nav-link.active {
            font-weight: bold;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
        }

        /* SEO Assistant Section */
        .seo-section {
            background: url('assets/seoBg.png') no-repeat center center/cover;
            padding: 80px 20px;
            position: relative;
        }

        .seo-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .seo-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        textarea {
            font-size: 1.2em;
            resize: none;
        }

        /* SEO Analysis Box */
        .seo-analysis {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .seo-analysis h3 {
            font-size: 1.5rem;
            color: #007bff;
        }

        .seo-score {
            font-size: 1.8rem;
            font-weight: bold;
            color: green;
        }

        /* Footer */
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px;
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
                <li class="nav-item"><a class="nav-link active" href="seo-assistant">SEO Assistant</a></li>
                <li class="nav-item"><a class="nav-link " href="plagiarism">Plagiarism Checker</a></li>
                <li class="nav-item"><a class="nav-link" href="about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>




    <!-- ✅ SEO Assistant Section -->
    <div class="seo-section">
        <div class="seo-content">
            <h1 class="text-center text-primary">SEO Writing Assistant</h1>
            <p class="text-center text-secondary">Optimize your content with AI-powered tools.</p>
            <textarea class="form-control mt-3" id="content" rows="10" placeholder="Start writing your content here..."></textarea>
            <button class="btn btn-primary mt-3 w-100" id="analyze"><i class="bi bi-graph-up"></i> Analyze SEO</button>

            <!-- ✅ SEO Analysis Results -->
        <!-- ✅ SEO Analysis Results -->
        <div class="seo-analysis mt-4 p-3 bg-light border rounded">
            <h3><i class="bi bi-bar-chart-line"></i> SEO Analysis</h3>
    
            <p><strong>Word Count:</strong> <span id="word-count">0</span></p>
            <p><strong>Keyword Density:</strong> <span id="keyword-density">0%</span></p>
            <p><strong>SEO Score:</strong> <span id="seo-score" class="seo-score">0</span>/100</p>
    
            <p><strong>Suggestions:</strong></p>
            <ul id="suggestions"></ul> <!-- ✅ Dynamic Suggestions Added -->
        </div>
    </div>
</div>

    <!-- ✅ Footer -->
    <footer>
        <p>&copy; 2025 SEO Writing Assistant. All rights reserved.</p>
    </footer>

    <!-- ✅ Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
 document.getElementById("analyze").addEventListener("click", function () {
    let content = document.getElementById("content").value.trim();

    // ✅ Remove HTML tags before analysis
    let cleanContent = content.replace(/<[^>]*>/g, ""); 
    let wordsArray = cleanContent.split(/\s+/).filter(word => word.length > 0);
    let words = wordsArray.length;
   // let words = cleanContent.match(/\b\w+\b/g)?.length || 0;


    let keyword = "SEO"; // ✅ Future: Allow user to input keyword
    let keywordMatches = cleanContent.match(new RegExp("\\b" + keyword + "\\b", "gi")) || [];
    let keywordCount = keywordMatches.length;
    let keywordDensity = words > 0 ? ((keywordCount / words) * 100).toFixed(2) : 0;

    // ✅ SEO Score Calculation (Max 100)
    let score = 50; // Base score

    // 🔹 Word Count Contribution
    if (words > 300) {
        score += 20;
    } else if (words > 150) {
        score += 15;
    } else if (words > 75) {
        score += 10;
    } else {
        score += 5;
    }

    // 🔹 Keyword Density Contribution
    let density = parseFloat(keywordDensity);
    if (density >= 1 && density <= 2) {
        score += 20;  // ✅ Best SEO Range
    } else if (density > 2 && density <= 5) {
        score += 15;  // ⚠️ Slightly high density
    } else if (density > 5 && density <= 8) {
        score += 10;  // ⚠️ High keyword stuffing
    } else {
        score += 5;   // ❌ Very low or too high density
    }

    // 🔹 Readability & Structure Contribution
    let headingTags = content.match(/<h1>|<h2>|<h3>/gi) || [];
    if (headingTags.length > 0) {
        score += 10;  // ✅ Good use of headings
    }

    score = Math.min(score, 100); // 🔹 Max score limit

    // ✅ SEO Suggestions Generation
    let suggestions = [];
    if (density < 1) {
        suggestions.push("⚠️ Use more relevant keywords naturally in the content.");
    } else if (density > 5) {
        suggestions.push("⚠️ Reduce keyword stuffing. Keep density around 1-2%.");
    }

    if (words < 100) {
        suggestions.push("⚠️ Increase word count for better SEO.");
    }

    suggestions.push("✔ Ensure proper keyword usage in headings and subheadings.");
    suggestions.push("✔ Improve readability by using short paragraphs.");
    suggestions.push("✔ Use bullet points and headings for better structure.");
    suggestions.push("✔ Check for grammar and spelling errors.");

    // ✅ Display Results
    document.getElementById("word-count").innerText = words;
    document.getElementById("keyword-density").innerText = keywordDensity + "%";
    document.getElementById("seo-score").innerText = score;
    
    // ✅ Show Suggestions Dynamically
    let suggestionBox = document.getElementById("suggestions");
    suggestionBox.innerHTML = "";
    suggestions.forEach(suggestion => {
        let li = document.createElement("li");
        li.innerText = suggestion;
        suggestionBox.appendChild(li);
    });
});


</script>

</body>
</html>    