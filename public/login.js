function validazione(event){
    const username=document.querySelector('#username');
    const password=document.querySelector('#password');
    let campi_ok=true;
    if(username.value.length==0){
        //username.classList.add('vuoto');
        campi_ok=false;
    }
    if(password.value.length==0){
        //password.classList.add('vuoto');
        campi_ok=false;
    }
    if(!campi_ok){
        document.querySelector('p').classList.remove('hidden');    
        event.preventDefault();
    }
}



const form=document.querySelector('form');
form.addEventListener('submit',validazione);

function controlla_campo(event){
    if(event.currentTarget.value.length==0){
        event.currentTarget.classList.add('vuoto');
    }
    else{
        event.currentTarget.classList.remove('vuoto');
    }
}

const pass=document.querySelector('input[type=password]');
pass.addEventListener('blur',controlla_campo);
const input=document.querySelector('input[type=text]');
input.addEventListener('blur',controlla_campo);
