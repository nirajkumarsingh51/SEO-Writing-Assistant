document.addEventListener("DOMContentLoaded", function () {
    // SEO Analysis Functionality
    document.getElementById("analyze").addEventListener("click", function () {
        let content = document.getElementById("content").value;
        let resultsDiv = document.getElementById("results");

        if (content.trim() === "") {
            alert("Please enter some content.");
            return;
        }

        // Show Loading Message
        resultsDiv.innerHTML = "<p>Analyzing content... Please wait.</p>";

        fetch("backend/process.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: "text=" + encodeURIComponent(content),
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                resultsDiv.innerHTML = `<p style="color: red;">Error: ${data.error}</p>`;
            } else {
                resultsDiv.innerHTML = `<p><strong>SEO Score:</strong> ${data.score}%</p>`;
            }
        })
        .catch(error => {
            console.error("Error:", error);
            resultsDiv.innerHTML = `<p style="color: red;">Failed to analyze content. Please try again.</p>`;
        });
    });

    // Mobile Navbar Toggle
    const menuToggle = document.querySelector(".menu-toggle");
    const navLinks = document.querySelector(".nav-links");

    menuToggle.addEventListener("click", function () {
        navLinks.classList.toggle("active");

        // Smooth Animation Effect
        if (navLinks.classList.contains("active")) {
            navLinks.style.maxHeight = navLinks.scrollHeight + "px";
        } else {
            navLinks.style.maxHeight = "0px";
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");
    const navLinks = document.querySelector(".nav-links");

    menuToggle.addEventListener("click", function () {
        navLinks.classList.toggle("active");

        // Smooth Dropdown Effect
        if (navLinks.classList.contains("active")) {
            navLinks.style.maxHeight = navLinks.scrollHeight + "px";
        } else {
            navLinks.style.maxHeight = "0px";
        }
    });
});
