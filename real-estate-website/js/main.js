menuBtn = document.querySelector('nav .btn')
menuLst = document.getElementById('menu')
menuContainer=document.getElementById('menu-container')
menuBtn.onclick = () => menuContainer.classList.toggle('active') ? menuBtn.innerHTML = '&times;' : menuBtn.innerHTML = '&equiv;'

const closeBtn=document.getElementById("close-btn")

function closePopUp(){
    document.getElementById('popUp-property').style.display='none';
}


closeBtn.addEventListener("click",closePopUp);