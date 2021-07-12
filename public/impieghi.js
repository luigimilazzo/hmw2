function deleteCommento(event){
    const father=event.currentTarget.parentNode.parentNode;
    const div=event.currentTarget.parentNode;
    const us=div.querySelector('.com');
    const com=div.querySelector('.com1');
    father.removeChild(div);
    fetch('impieghi/deleteComments/'+encodeURIComponent(us.textContent)+'/'+encodeURIComponent(com.textContent)+'/'+encodeURIComponent(father.dataset.id)).then(onResponse).then(onJ);
}



function onJso(json){
    console.log(json);
    const e=document.querySelectorAll('.padre');
    for(cont in json){
    for(let i=0;i<e.length;i++){
        var figlio=e[i].querySelector('p');
        
        if(figlio.textContent===json[cont].Nome_penitenziario){
            var div=document.createElement('div');
            var us=document.createElement('p');
            us.textContent=json[cont].username;
            us.classList.add('com');
            var comment=document.createElement('p');
            comment.textContent=json[cont].testo;
            comment.classList.add('com1');
            div.appendChild(us);
            div.appendChild(comment);
            e[i].appendChild(div);
        }
        }   
    }
    /*for(let i=0;i<e.length;i++){
        const d=e[i].querySelectorAll('div'); 
        for(let i=0;i<d.length;i++){
            var but =document.createElement('button');
            but.type='button';
            but.value='Invia';
            but.textContent='Elimina commento';
            but.addEventListener('click',deleteCommento);
            d[i].appendChild(but);
        }
    }*/
}


function onJ(json){
    console.log('ok');
}

function onClick(event){
    const gen=event.currentTarget.parentNode;
    const com=gen.querySelector('input');
    console.log(com.value);
    const d=document.createElement('div');
    const us=document.createElement('p');
    us.textContent=gen.dataset.us;
    us.classList.add('com');
    const comment=document.createElement('p');
    comment.textContent=com.value;
    comment.classList.add('com1');
    const i=document.createElement('p');
    i.textContent=gen.dataset.id;
    d.appendChild(us);
    d.appendChild(comment);
    const but =document.createElement('button');
    but.type='button';
    but.value='Invia';
    but.textContent='Elimina commento';
    but.addEventListener('click',deleteCommento);
    d.appendChild(but);
    gen.appendChild(d);
    fetch('impieghi/addComments/'+encodeURIComponent(comment.textContent)+'/'+encodeURIComponent(us.textContent)+'/'+encodeURIComponent(i.textContent)).then(onResponse).then(onJ);
}




function onJson(json){
    console.log(json);
    for(cont in json){
        const p=document.createElement('div');
        p.classList.add('padre');
        p.dataset.us=json[cont].username;
        p.dataset.id=json[cont].carcere_id;
        const use=document.createElement('p');
        use.textContent=json[cont].username;
        use.classList.add('com');
        var inp =document.createElement('input');
        inp.type='text';
        inp.name='commento';
        inp.classList.add('commento');
        inp.placeholder='Aggiungi commento';
        var but =document.createElement('button');
        but.type='button';
        but.value='Invia';
        but.textContent='Invia';
        but.addEventListener('click',onClick);
        e=document.createElement('p');
        e.textContent=json[cont].Nome_penitenziario;
        p.appendChild(e);
        p.appendChild(inp);
        p.appendChild(but);
        //p.appendChild(use);
        b=document.querySelector('body');
        b.appendChild(p);
        fetch('impieghi/findComments/'+encodeURIComponent(p.dataset.id)).then(onResponse).then(onJso);
    }
}
//+encodeURIComponent(use.textContent)+'/'

function onResponse(response){
    return response.json();
}

fetch('impieghi/findEmployee').then(onResponse).then(onJson);