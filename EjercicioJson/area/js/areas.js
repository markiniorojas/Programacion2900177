document.addEventListener("DOMContentLoaded", function() {
    fetch('libreria/calcular.php')
    .then(response => response.json()) 
    .then(data => {
        console.log('areas calculadas:', data); 
      
                document.getElementById('areaCuadrado').textContent = `area cuadrado: ${data.cuadrado}`;
                document.getElementById('areaRectangulo').textContent = `area rectángulo: ${data.rectangulo}`;
                document.getElementById('areaTriangulo').textContent = `area triángulo: ${data.triangulo}`;
         })
        .catch(error => console.error('Error:', error));
});
