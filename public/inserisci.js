function onJson(json){
    console.log(json);
    for(cont in json){
        const father=document.querySelector('#penitenziario');
        elem=document.createElement('p');
        elem.dataset.id=json[cont].id;
        elem.textContent=json[cont].Nome_penitenziario;
        father.appendChild(elem);
    }
}
function onResponse(response){
    return response.json();
}
fetch('inserisci/carceri').then(onResponse).then(onJson);


setTimeout(()=>{
    function onJsonResponse(json){
        console.log(json);
    }
    
    function onClick(event){
        console.log(event.currentTarget.dataset.id);
        fetch('inserisci/impiegati/'+encodeURIComponent(event.currentTarget.dataset.id)).then(onResponse).then(onJsonResponse);
        event.currentTarget.removeEventListener('click',onClick);
    }

    const tutti=document.querySelectorAll("#padre #penitenziario p");
    for(let t of tutti){
    t.addEventListener("click",onClick);
    }},2000);