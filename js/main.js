menuBtn = document.querySelector('nav .btn')
menuLst = document.getElementById('menu')

menuBtn.onclick = () => menuLst.classList.toggle('active') ? menuBtn.innerHTML = '&times;' : menuBtn.innerHTML = '&equiv;'
