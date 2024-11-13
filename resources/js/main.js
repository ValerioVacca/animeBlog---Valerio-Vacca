// sfruttiamo i dati presenti in api.php sul nostro progetto frontend fittizio, sfruttando la fetch

fetch("/api/animeAPI") //ottenendo una response tramite l'uri animeAPI contenuto in api.php.
.then(response => response.json()) //converto la response in un json e successivamente li metto a disposizione con un secondo .then
.then(data =>{

    console.log(data);
    
    let wrapper = document.querySelector('#wrapper');
    data.forEach(anime =>{

        let div = document.createElement('div');

        div.classList.add('col-12', 'col-md-4', 'my-3');

        div.innerHTML = `
            <h2>${anime.title}</h2>
            <img src="${anime.images.jpg.image_url}" alt="${anime.title}">

        `

        wrapper.appendChild(div);

    })
    

})
.catch(error =>{
    console.error('Si è verificato un errore:', error);
})