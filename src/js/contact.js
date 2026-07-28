const form = document.getElementById("form");
const submitBtn = form.querySelector("#submit");
const faqButton = document.querySelectorAll(".faq__sign");
const answers = document.querySelectorAll(".faq__answer");

form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const formData = new FormData(form);
    const originalText = submitBtn.textContent;
    const errors = document.querySelectorAll(".error");
    const inputs = form.querySelectorAll('input:not([type="hidden"])');
    const textarea = form.querySelector("textarea");
    const textareaError = textarea.parentElement.querySelector(".error");
    const emailRegex = /^\S+@\S+\.\S+$/;
    const nameRegex = /^[a-zA-Z\s-]{3,}$/;
    let hasError = false;

    inputs.forEach((input) => {
        const error = input.parentElement.querySelector(".error");
        if (input.value.trim() === "") {
            error.innerText = `${input.name} can't be blank`;
            hasError = true;
            return;
        } else if (input.name === "name" && !nameRegex.test(input.value.trim())) {
            error.innerText = "Invalid name";
            hasError = true;
            return;
        } else if (input.name === "email" && !emailRegex.test(input.value.trim())) {
            error.innerText = "Invalid email";
            hasError = true;
            return;
        } else {
            error.innerText = "";
        }
    });

    if (textarea.value.trim() === "") {
        textareaError.innerText = "Subject can't be empty";
        hasError = true;
        return;
    } else {
        textareaError.innerText = "";
    }

    if (hasError) return;

    submitBtn.textContent = "Sending...";
    submitBtn.disabled = true;

    try {
        const response = await fetch("https://api.web3forms.com/submit", {
            method: "POST",
            body: formData,
        });

        const data = await response.json();

        if (response.ok) {
            alert("Success! Your message has been sent.");
            form.reset();
        } else {
            alert("Error: " + data.message);
        }
    } catch (error) {
        alert("Something went wrong. Please try again.");
    } finally {
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
    }
});

faqButton.forEach((button, i) => {
    button.addEventListener("click", () => {
        faqButton.forEach((btn, j) => {
            if (j !== i) {
                btn.classList.remove("active");
                answers[j].classList.remove("active");
            }
        });

        button.classList.toggle("active");
        answers[i].classList.toggle("active");
    });
});