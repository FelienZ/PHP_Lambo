const navBtn = document.getElementById('navbtn');
const menu = document.getElementById('menu');
const main = document.getElementById('root')
const alertMessage = document.getElementById('alert-message');

const inputColumn = document.querySelectorAll('#inputColumn')
const errorMessage = document.querySelectorAll('.errorMessage')

const deleteBtn = document.querySelectorAll('#deleteButton')

navBtn.addEventListener('click', ()=>{
    menu.classList.toggle('hidden');
    menu.classList.toggle('flex');
})
alertMessage? setTimeout(() => {
    main.removeChild(alertMessage);
}, 2000) : ''

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

/* deleteBtn.forEach((i,idx) => {
    i.addEventListener('click', async()=> {
        await fetch('http://localhost:8080/projects/delete/c04474748ed6eeea', {
            method: 'DELETE'
        })
    })
}) */