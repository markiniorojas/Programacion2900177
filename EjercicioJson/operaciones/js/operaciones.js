
document.addEventListener("DOMContentLoaded", function() {
    fetch('libreria/resultado.php')
        .then(response => response.json())
        .then(data => {
            console.log('Resultado de las operaciones:', data);
            
         
            document.getElementById('suma').textContent = `Suma: ${data.suma}`;
            document.getElementById('resta').textContent = `Resta: ${data.resta}`;
            document.getElementById('multiplicacion').textContent = `Multiplicación: ${data.multiplicacion}`;
            document.getElementById('division').textContent = `División: ${data.division}`;
        })
        .catch(error => console.error('Error:', error));
});
