const buttons = document.querySelectorAll(".post__postType");
const posts = document.querySelectorAll(".post__item");
const postsArray = [...document.querySelectorAll(".post__item")];
const prevBtn = document.querySelector(".post__prev");
const nextBtn = document.querySelector(".post__next");
const pagination = document.querySelector(".post__pagination")

buttons.forEach((button) => {
  button.addEventListener("click", () => {
    buttons.forEach((btn) => btn.classList.remove("selected"));
    button.classList.add("selected");
    const filter = button.dataset.filter;

   const filteredPosts = posts.forEach((post) => {
      const category = post.dataset.category;

      if (filter === "all" || filter === category) {
        post.style.display = "block";
      } else {
        post.style.display = "none";
      }
    });
  });
});

const postPerPage = 6;
let currentPage = 1;
const totalPages = Math.ceil(postsArray.length / postPerPage);
const pageNumbers = []

for(let i = 1; i <= totalPages; i++){
  const pageNum = document.createElement('p');
  pageNum.textContent = i;
  pageNum.classList.add('text-md');

  pageNum.addEventListener('click', ()=> showPage(i));
  pageNumbers.push(pageNum);

  pagination.insertBefore(pageNum, nextBtn)
}

function showPage(page){
  currentPage = page;

  const startIndex = (page - 1) * postPerPage;
  const endIndex = startIndex + postPerPage;

  postsArray.forEach((post, index) => {
    if(index >= startIndex && index < endIndex){
      post.style.display = "";
    }else{
      post.style.display= "none";
    }
  })

  pageNumbers.forEach((number, index) => {
    if(index + 1 === page){
      number.classList.add("active");
    }else{
      number.classList.remove("active")
    }
  })
}

prevBtn.addEventListener("click", () => {
  if(currentPage > 1){
    showPage(currentPage - 1)
  }
})

nextBtn.addEventListener("click", () => {
  if(currentPage < totalPages){
    showPage(currentPage + 1)
  }
})


showPage(1)