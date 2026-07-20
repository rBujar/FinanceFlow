const buttons = document.querySelectorAll(".post__postType");
const posts = document.querySelectorAll(".post__item");

buttons.forEach((button) => {
  button.addEventListener("click", () => {
    buttons.forEach((btn) => btn.classList.remove("selected"));
    button.classList.add("selected");

    const filter = button.dataset.filter;

    posts.forEach((post) => {
      const category = post.dataset.category;

      if (filter === "all" || filter === category) {
        post.style.display = "block";
      } else {
        post.style.display = "none";
      }
    });
  });
});
