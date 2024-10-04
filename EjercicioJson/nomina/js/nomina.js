function realizarOperaciones() {
    fetch('libreria/calcularNomina.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            diasTrabajados: 30,
            valorDia: 50000
        })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        if (data.error) {
            alert(data.error);
        } else {
            document.getElementById('salario').textContent = `Salario Bruto: ${data.salario}`;
            document.getElementById('salud').textContent = `Salud: ${data.salud}`;
            document.getElementById('pension').textContent = `Pensión: ${data.pension}`;
            document.getElementById('arl').textContent = `ARL: ${data.arl}`;
            document.getElementById('descuento').textContent = `Descuento: ${data.descuento}`;
            document.getElementById('subTransporte').textContent = `Subsidio de Transporte: ${data.subTransporte}`;
            document.getElementById('retencion').textContent = `Retención: ${data.retencion}`;
            document.getElementById('pagoTotal').textContent = `Pago Total: ${data.pagoTotal}`;
        }
    })
    .catch(error => console.error('Error:', error));
}

document.addEventListener("DOMContentLoaded", function() {
    realizarOperaciones();
});
