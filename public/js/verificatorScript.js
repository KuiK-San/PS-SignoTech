const form = document.querySelector("#form");

form.addEventListener("submit", (event) => {
    event.preventDefault();

    const select = document.querySelector("#opcoes");
    const options = select.options;
    let jsonFinal = {};

    for (let i = 0; i < options.length; i++) {
        const opcao = options[i];
        jsonFinal[i] = {
            optionValue: opcao.value,
            votes: 0,
        };
    }

    if(Object.keys(jsonFinal).length < 3) {
        document.querySelector('#alert').classList.remove('d-none')
        return
    }

    jsonFinal = JSON.stringify(jsonFinal)

    document.querySelector('#json').value = jsonFinal;

    form.submit();
    
});
