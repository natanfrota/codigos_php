let pnome = document.querySelector('th');

let tbody = document.querySelector('tbody');
let linhas = document.querySelectorAll('tbody tr');

let linhas2 = Array.from(linhas);

pnome.addEventListener('click', () => {

    linhas2.sort((a, b) => {
        if (a.cells[0].innerText < b.cells[0].innerText)
            return -1;
        else if (a.cells[0].innerText > b.cells[0].innerText)
            return 1;
        else
            return 0;
    })

    tbody.innerHTML = '';

    for (let linha of linhas2) {
        tbody.appendChild(linha);
        console.log(linha.cells[0].innerText);
    }
})