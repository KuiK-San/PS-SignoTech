const jsonValue = JSON.parse(document.querySelector('#json').value);
const form = document.querySelector('#form')
let totalVotes = 0

console.log(jsonValue);

for(let i in jsonValue){
    totalVotes = totalVotes + jsonValue[i].votes
}

for(let k in jsonValue){
    const newVote = document.createElement('div');

    newVote.className = "form-check";

    var input = document.createElement('input');
    input.className = 'form-check-input';
    input.type = 'radio';
    input.name = 'votes';
    input.value = k;

    var label = document.createElement('label');
    label.className = 'form-check-label';
    label.setAttribute('for', 'votes');
    label.setAttribute('required', true);
    label.textContent = jsonValue[k].optionValue;
    
    var divVotes = document.createElement('div');
    divVotes.className = 'progresso d-none';

    var qtdVotos = document.createElement('p');
    qtdVotos.innerHTML = `${jsonValue[k].votes} Votos`;

    var divProgress = document.createElement('div');
    divProgress.className = 'progress';

    divVotes.appendChild(divProgress);
    divVotes.appendChild(qtdVotos);


    var progressBar = document.createElement('div');
    progressBar.className = 'progress-bar progress-bar-striped';
    progressBar.id = `progress${k}`
    progressBar.setAttribute('role', 'progressbar');
    progressBar.setAttribute('aria-valuemin', '0');
    progressBar.setAttribute('aria-valuemax', '100');

    progressBar.style.width = `${jsonValue[k].votes / totalVotes * 100}%`;

    var qtdVotos = document.createElement('p');
    qtdVotos.innerHTML = `${qtdVotos} Votos`;


    divProgress.appendChild(progressBar);

    newVote.appendChild(input);
    newVote.appendChild(label);
    newVote.appendChild(divVotes);

    form.appendChild(newVote)

}
