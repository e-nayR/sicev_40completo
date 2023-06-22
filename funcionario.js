const tel = document.querySelector('.form-control.cad-funcionario-tel')

tel.addEventListener('keypress', () => {
    let tellength = tel.value.length
    
    if (tellength === 0){
        tel.value += "("
    }else if(tellength === 3){
        tel.value += ") "
    }else if(tellength === 10){
        tel.value += "-"
    }
})