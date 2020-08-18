// when demo icon is clicked 
console.log("index.js working")
function showPopUp(){
    const popUp = document.querySelector('.demo-pop-up')
    popUp.style.display = "block"

    setTimeout(function(){
         popUp.style.display = "none" 
    }, 3000);
}

// check if form is being submitted
const form = document.querySelector('#form')

form.addEventListener("submit", (e) => {
    e.preventDefault();
    console.log("submitted")
})

// when mobile menu icon is clicked
    const menu = document.querySelector('.mobile-items')
function showMobileMenu(){
    menu.style.display = "block"
}
//when x icon is clicked
function hideMobileMenu(){
    
    menu.style.display = "none"
}