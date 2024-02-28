let toggleOne = document.querySelector(".nav-menu");
let wrapper = document.querySelector(".wrapper");
let counter = 0;
function toggleAdder(){
    if(counter%2==0){
        toggleOne.classList.remove("nav-menu");
        toggleOne.classList.add("toggle");
        counter++;
    }else{
        toggleOne.classList.add("nav-menu");
        toggleOne.classList.remove("toggle");
        counter++;
    }
}
<<<<<<< HEAD

=======
wrapper.addEventListener("click", toggleAdder);
>>>>>>> 1fc352f8a8c9b284872eed302708f3347a93b930
