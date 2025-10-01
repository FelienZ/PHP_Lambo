const navBtn = document.getElementById('navbtn');
const menu = document.getElementById('menu');
const main = document.getElementById('root')
const alertMessage = document.getElementById('alert-message');
const inputColumn = document.querySelectorAll('#inputColumn')
const errorMessage = document.querySelectorAll('.errorMessage')

const deleteBtn = document.querySelectorAll('#deleteButton')
const btnHero = document.getElementById('btnHero')

const myProjects = document.querySelector('.myProjects')

const formInput = document.querySelectorAll('.inputParent')
const alertMessage2 = document.querySelectorAll('#errorFeedback');

navBtn.addEventListener('click', ()=>{
    menu.classList.toggle('hidden');
    menu.classList.toggle('flex');
})

alertMessage ? setTimeout(() => {
    main.removeChild(alertMessage);
}, 2000) : ''


formInput.length ? formInput.forEach((i, idx)=> {
    //Remove childNode agak tricky
    alertMessage2.length ? setTimeout(() => {
        alertMessage2[idx] ? alertMessage2[idx].innerHTML = '' : ''
    }, 1200): ''
}) : ''

errorMessage.length ? (
    inputColumn.forEach((i,idx)=> {
        setTimeout(() => {
            errorMessage[idx].classList.add('opacity-0');
            setTimeout(() => {
                i.removeChild(errorMessage[idx])
            }, 500);
        }, 2000)
    })
) : ''

btnHero ? (
    btnHero.addEventListener('click', ()=> {
        myProjects.scrollIntoView({behavior: "smooth"})
    })
) : ''
