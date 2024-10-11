const form = document.querySelector("#form");

form.addEventListener("submit", (event) => {
    event.preventDefault();

    const initialDate = new Date(document.querySelector('#initial_date').value);
    const finalDate = new Date(document.querySelector('#final_date').value);


    if(new Date() > initialDate || initialDate >= finalDate || initialDate == finalDate){
        console.log('Invalid Period')
        document.querySelector('#alertDate').classList.remove('d-none')
        return
        
    }

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
        console.log('Invalid options lenght')
        document.querySelector('#alertOptions').classList.remove('d-none')
        return
    }

    jsonFinal = JSON.stringify(jsonFinal)

    document.querySelector('#json').value = jsonFinal;

    form.submit();
    
});
