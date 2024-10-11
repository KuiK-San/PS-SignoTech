const removerButton = document.querySelector("#removerButton");
const select = document.querySelector('#opcoes');
const btnAddOption = document.querySelector('#btnAddOption');
const optionInput = document.querySelector('#optionInput');

removerButton.addEventListener('click', (event) => {
    event.preventDefault();

    
    if(select.selectedIndex !== -1) {
        select.remove(select.selectedIndex);
    }
})

btnAddOption.addEventListener('click', (event) => {
    const newOption = document.createElement('option');

    newOption.value = optionInput.value;
    newOption.text = optionInput.value;

    select.appendChild(newOption);
})