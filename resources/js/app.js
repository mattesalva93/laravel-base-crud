require('./bootstrap');


function confermaCancella(){
    let arrayCancella = document.getElementsByClassName("btn-danger");
    
    for(let i=0; i< arrayCancella.length; i++){

        arrayCancella[i].addEventListener("click", function(){
            if(!window.confirm("Sei sicuro di voler cancellare il fumetto?")){
                event.preventDefault();
            };
        });
        
    }

}

confermaCancella();