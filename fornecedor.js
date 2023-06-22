    /* MASCARA TELEFONE */
const tel = document.querySelector('.form-control.cad-forn-tel')

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
    /* MASCARA TELEFONE */

    /* MASCARA CNPJ */
const cnpj = document.querySelector('.form-control.cad-forn-cnpj')

cnpj.addEventListener('keypress', () => {
    let cnpjlength = cnpj.value.length

    if(cnpjlength === 3){
        cnpj.value += "."
    }else if(cnpjlength === 7){
        cnpj.value += "."
    }else if(cnpjlength === 11){
        cnpj.value += "/"
    }else if(cnpjlength === 16){
        cnpj.value += "-"
    }
})
    /* MASCARA CNPJ */

    /* MASCARA CEP*/
const cep = document.querySelector('.form-control.cad-forn-cep')

cep.addEventListener('keypress', () => {
    ceplength = cep.value.length

    if(ceplength === 5){
        cep.value += "-"
    }
})

    /* MASCARA CEP*/