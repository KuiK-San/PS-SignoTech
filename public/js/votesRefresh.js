const refreshVotes = (id) => {
    console.log('atualizado')

    totalVotes = 0

    var settings = {
        "url": `/poll/${id}/votes`,
        "method": "GET",
        "timeout": 0,
    };
    
    $.ajax(settings).done(function (response) {
        let totalVotesNew = 0

        for(let i in response){
            totalVotesNew = totalVotesNew + response[i].votes
        }
        if(totalVotesNew == totalVotes){
            return
        }

        totalVotes = totalVotesNew;

        for(let k in response){
            console.log(response[k].votes)
            document.querySelector(`#qtd${k}`).innerHTML = `${response[k].votes} Votos`

            let progressBar = document.querySelector(`#progress${k}`)
            let tamanho = response[k].votes / totalVotes * 100
            progressBar.style.width = `${tamanho}%`;
        }
    });
}


