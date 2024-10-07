document.addEventListener("DOMContentLoaded", function() {
    fetch('libreria/calcularNomina.php')
        .then(response => response.json()) 
        .then(data => {
            console.log('Nomina', data);
       
            document.getElementById('salario').textContent = `Salario inicial: ${data.salario}`;
            document.getElementById('salud').textContent = `Salud: ${data.salud}`;
            document.getElementById('pension').textContent = `Pensión: ${data.pension}`;
            document.getElementById('arl').textContent = `ARL: ${data.arl}`;
            document.getElementById('descuento').textContent = `Descuento: ${data.descuento}`;
            document.getElementById('subTransporte').textContent = `Subsidio de Transporte: ${data.subTransporte}`;
            document.getElementById('retencion').textContent = `Retención: ${data.retencion}`;
            document.getElementById('pagoTotal').textContent = `Pago Total: ${data.pagoTotal}`;
    })
    .catch(error => console.error('Error:', error));
});
