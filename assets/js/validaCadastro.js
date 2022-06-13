let formCadastro = document.querySelector('#formCadastro');

formCadastro.btn.addEventListener('click', function (event) {
    //event.preventDefault();

    let nomeUser = formCadastro.nome;
    let senhaUser = formCadastro.senha;
    let cepUser = formCadastro.cep;
    let emailUser = formCadastro.email; 
    let dtnascimentoUser = formCadastro.dtNascimento;
    if(nomeUser.value.length < 5 && nomeUser.value.length != 0) {
        let msgErro = document.getElementById('msgNome');

        msgErro.classList.remove('display-off');
    } else {
        let msgErro = document.getElementById('msgNome');

        if(!msgErro.classList.contains('display-off') ) {
            msgErro.classList.add('display-off');
        }
       
    }

    if(senhaUser.value.length < 8 && senhaUser.value.length != 0) {
        let msgErro = document.getElementById('msgSenha');
        msgErro.classList.remove('display-off');
    } else {
        let msgErro = document.getElementById('msgSenha');

        if(!msgErro.classList.contains('display-off') ) {
            msgErro.classList.add('display-off'); 
        
        }
    }

    if(cepUser.value.length != 9 && cepUser.value.length != 0) {
        let msgErro = document.getElementById('msgCep');
        msgErro.classList.remove('display-off');
    } else {
        let msgErro = document.getElementById('msgCep');

        if(!msgErro.classList.contains('display-off') ) {
            msgErro.classList.add('display-off'); 
        
        }
    }


    if(emailUser.value.length < 10 && emailUser.value.length != 0) {
        let msgErro = document.getElementById('msgEmail');
        msgErro.classList.remove('display-off');
    } else {
        let msgErro = document.getElementById('msgEmail');

        if(!msgErro.classList.contains('display-off') ) {
            msgErro.classList.add('display-off'); 
        
        }
    }

    if(dtNascimentoUser.value != "00/00/0000" ) {
        let msgErro = document.getElementById('msgDataNascimento');
        msgErro.classList.remove('display-off');
    } else {
        let msgErro = document.getElementById('msgDataNascimento');

        if(!msgErro.classList.contains('display-off') ) {
            msgErro.classList.add('display-off'); 
        
        }
    }


 






})