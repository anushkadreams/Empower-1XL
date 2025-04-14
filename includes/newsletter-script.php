<script>
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("subscribe").addEventListener("submit", async function (e) {
        e.preventDefault();

        const formMessages = document.getElementById("formMsg");
        const emailField = this.querySelector('input[name="email"]');

        if (!emailField) {
            console.error("Email input field not found!");
            return;
        }

        const email = emailField.value.trim();

        // Email validation regex
        const emailRegex = /^(?!.*\.\.)[a-zA-Z0-9][a-zA-Z0-9._%+-]{0,63}@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (email === "") {
            formMessages.textContent = "Please enter your email address before submitting.";
            formMessages.style.color = "#fff";
            showAndHideMessage();
            return;
        } else if (!emailRegex.test(email)) {
            formMessages.textContent = "Please enter a valid email address.";
            formMessages.style.color = "#fff";
            showAndHideMessage();
            return;
        }

        const data = Object.fromEntries(new FormData(this).entries());

        try {
            const response = await fetch("https://marscms-api.mini91.com/api/newsletter", {
                method: "POST",
                body: JSON.stringify({
                    ...data,
                    site: "67f0cdcb129fda7a090f8a4c",
                }),
                headers: { "Content-Type": "application/json" },
            });

            const body = await response.json();

            if (body.error === "List already exists") {
                formMessages.textContent = "Oops! It looks like you've already subscribed with this email.";
                formMessages.style.color = "red";
            } else if (response.ok) {
                formMessages.textContent = "You’ve successfully subscribed! Thank you!";
                formMessages.style.color = "green";
                this.reset();
            } else {
                formMessages.textContent = body.message || "An error occurred. Please try again.";
                formMessages.style.color = "red";
            }
        } catch (error) {
            console.error(error);
            formMessages.textContent = "There was an issue with your submission. Please try again.";
            formMessages.style.color = "red";
        }

        showAndHideMessage();
    });

    function showAndHideMessage() {
        setTimeout(() => {
            document.getElementById("formMsg").textContent = "";
        }, 5000);
    }
});

// Update the year dynamically
document.getElementById("year").textContent = new Date().getFullYear();
</script>
