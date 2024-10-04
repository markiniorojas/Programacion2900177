function realizarOperaciones() {
    fetch('libreria/calcular.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            lado: 8,
            base: 8,
            altura: 10
        })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.text(); 
    })
    .then(data => {
        console.log('Respuesta del servidor:', data); 
        try {
            const jsonData = JSON.parse(data); 
            if (jsonData.error) {
                alert(jsonData.error);
            } else {
                document.getElementById('areaCuadrado').textContent = `Área cuadrado: ${jsonData.cuadrado}`;
                document.getElementById('areaRectangulo').textContent = `Área rectángulo: ${jsonData.rectangulo}`;
                document.getElementById('areaTriangulo').textContent = `Área triángulo: ${jsonData.triangulo}`;
            }
        } catch (e) {
            console.error('Error al procesar JSON:', e);
        }
    })
    .catch(error => console.error('Error:', error));
}

document.addEventListener("DOMContentLoaded", function() {
    realizarOperaciones();
});
