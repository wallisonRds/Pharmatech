export default function inputSearchTest() {
    const input = document.getElementById('busca-fornecedor');
    
    if (!input) return; 

    input.addEventListener('input', function() {
        const termo = this.value.toLowerCase();

        const linhas = document.querySelectorAll('.fornecedor-table tbody tr');

        linhas.forEach(linha => {
            const fornecedor = linha.cells[2].textContent.toLowerCase();

            const cnpj = linha.cells[4].textContent.toLowerCase();

            if (fornecedor.includes(termo) || cnpj.includes(termo)) {
                linha.style.display = '';
            } else {
                linha.style.display = 'none';
            }
        })
    })
}