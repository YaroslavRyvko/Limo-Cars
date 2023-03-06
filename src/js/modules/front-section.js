export function initFrontSection() {
    let btn_tab = document.querySelectorAll('.form-wrapper__tab-btn');
    let forms = document.querySelectorAll('.form-wrapper__form');
    btn_tab[0].addEventListener('click', () => openForm(0, btn_tab[0])); 
    btn_tab[1].addEventListener('click', () => openForm(1, btn_tab[1])); 
     
    function openForm(number, target) { 
        if (!target.classList.contains('active')) { 
            btn_tab.forEach((item, index) => { 
                item.classList.remove('active'); 
                forms[index].style.display = "none"; 
            }) 
            target.classList.add('active'); 
            forms[number].style.display = "block"; 
        } 
    }
}