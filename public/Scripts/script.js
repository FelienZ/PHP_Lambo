const navBtn = document.getElementById('navbtn');
const menu = document.getElementById('menu');
const main = document.getElementById('root')
const alertMessage = document.getElementById('alert-message')
navBtn.addEventListener('click', ()=>{
    menu.classList.toggle('hidden');
    menu.classList.toggle('flex');
})

alertMessage? setTimeout(() => {
    main.removeChild(alertMessage);
}, 2000) : ''