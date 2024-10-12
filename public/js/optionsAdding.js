const jsonValue = JSON.parse(document.querySelector('#json').value);

for(let k in jsonValue){
    const newOption = document.createElement('option');

    newOption.value = jsonValue[k].optionValue;
    newOption.text = `${jsonValue[k].optionValue} com ${jsonValue[k].votes} votos`;
    newOption.dataset.votes = jsonValue[k].votes;

    select.appendChild(newOption);
}
