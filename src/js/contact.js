const form = document.getElementById("form");
const submitBtn = form.querySelector("#submit");
const faqButton = document.querySelectorAll(".faq__sign")
const answers = document.querySelectorAll(".faq__answer")

form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const formData = new FormData(form);
    const originalText = submitBtn.textContent;

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

            nameError.innerText = "";
            emailError.innerText = "";
            messageError.innerText = "";
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
    button.addEventListener('click', () =>{
        faqButton.forEach((btn, j) =>{
            if(j !== i){
                btn.classList.remove("active");
                answers[j].classList.remove('active');
            }
        });

        button.classList.toggle('active');
        answers[i].classList.toggle('active');
    })
})