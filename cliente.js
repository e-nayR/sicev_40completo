    /* MASCARA TELEFONE */
    const tel = document.querySelector('.form-control.cad-cliente-tel')

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

        /* MASCARA CPF */

    const cpf = document.querySelector('.form-control.cad-cliente-cpf')

    cpf.addEventListener('keypress', () => {
        let cpflength = cpf.value.length

        if(cpflength === 3){
            cpf.value += "."
        }else if(cpflength === 7){
            cpf.value += "."
        }else if(cpflength === 11){
            cpf.value += "-"
        }
    })