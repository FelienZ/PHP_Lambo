const navBtn = document.getElementById('navbtn');
const menu = document.getElementById('menu');
const main = document.getElementById('root')
const alertMessage = document.getElementById('alert-message');

const inputColumn = document.querySelectorAll('#inputColumn')
const errorMessage = document.querySelectorAll('.errorMessage')

navBtn.addEventListener('click', ()=>{
    menu.classList.toggle('hidden');
    menu.classList.toggle('flex');
})
console.log(inputColumn)
console.log(errorMessage)
alertMessage? setTimeout(() => {
    main.removeChild(alertMessage);
}, 2000) : ''

errorMessage.length ? (
    inputColumn.forEach((i,idx)=> {
        setTimeout(() => {
            i.removeChild(errorMessage[idx])
        }, 2000)
    })
) : ''