const a = document.querySelector(".wrapper")
const b = document.querySelector(".nav-menu")

a.addEventListener("click", () =>{
    a.classList.toggle("active")
    b.classList.toggle("active")
})

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", ()=>{
    a.classList.remove("active")
}))