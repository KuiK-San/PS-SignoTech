const visualisarVotos = () => {
    progressBars = document.querySelectorAll('.progresso')

    progressBars.forEach(element => {
        if (element.classList.contains('d-none')){

            element.classList.remove('d-none');
            document.querySelector('#viewBtn').innerHTML = "Esconder Votos"
            return
        }
        
        document.querySelector('#viewBtn').innerHTML = "Visualizar Votos"
        element.classList.add('d-none')
    });

    

}