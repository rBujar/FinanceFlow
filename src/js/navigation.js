const navigation = document.querySelector(".navigation");

function scrollFn(){
     if(document.body.scrollTop > 500 || document.documentElement.scrollTop > 500){
    navigation.style.display = 'flex';
  }else{
    navigation.style.display = 'none';
  }
  navigation.addEventListener('click', ()=>{
  document.documentElement.scrollTo({top: 0, behavior: 'smooth'})
})
}

window.onscroll = function() {scrollFn()}