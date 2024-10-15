const jsonValue = JSON.parse(document.querySelector('#json').value);
const form = document.querySelector('#form')
let totalVotes = 0

for(let i in jsonValue){
    totalVotes = totalVotes + jsonValue[i].votes
}

for(let k in jsonValue){
    const newVote = document.createElement('div');

    newVote.className = "form-check";

    let input = document.createElement('input');
    input.className = 'form-check-input';
    input.type = 'radio';
    input.name = 'votes';
    input.value = k;

    let label = document.createElement('label');
    label.className = 'form-check-label';
    label.setAttribute('for', 'votes');
    label.setAttribute('required', true);
    label.textContent = jsonValue[k].optionValue;
    
    let divVotes = document.createElement('div');
    divVotes.className = 'progresso d-none';

    let qtdVotos = document.createElement('p');
    qtdVotos.id = `qtd${k}`
    qtdVotos.innerText = `${jsonValue[k].votes} Votos`;

    let divProgress = document.createElement('div');
    divProgress.className = 'progress';

    divVotes.appendChild(divProgress);
    divVotes.appendChild(qtdVotos);


    let progressBar = document.createElement('div');
    progressBar.className = 'progress-bar';
    progressBar.id = `progress${k}`
    progressBar.setAttribute('role', 'progressbar');
    progressBar.setAttribute('aria-valuemin', '0');
    progressBar.setAttribute('aria-valuemax', '100');

    progressBar.style.width = `${jsonValue[k].votes / totalVotes * 100}%`;
    

    divProgress.appendChild(progressBar);

    newVote.appendChild(input);
    newVote.appendChild(label);
    newVote.appendChild(divVotes);

    form.appendChild(newVote)

}
