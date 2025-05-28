<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Tecnologia IOT Hidro-Sensor</title>
    <link rel="stylesheet" href="./styles_proyectos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="proyecto-container">
        <h1 id="titulo">Semana de ingeniería de Uniminuto Zipaquirá 2025-1 🤖🛠️⚙️</h1>  
        <h1 id="subtitulo"><strong>Tecnologia IOT</strong>  <em>Hidro-Sensor</em></h1>
        <p class="institucion">Daniel Silva y Juan Martin Pineda  Estudiantes de cuarto semestre Ingenieria de sistemas </p>
        
        <div class="proyecto-content">
            <div class="imagen-proyecto">
                <img src="fotosProyectos/proyecto5.jpeg" alt="Imagen del proyecto IA-RED">
                <img src="fotosProyectos/proyecto5.1.jpeg" alt="Imagen del proyecto IA-RED">
            </div>
            
            <div class="descripcion-proyecto">
                <h2>Descripción del Proyecto</h2>
                <p><b>Internet de las Cosas (IoT)</b> emerge como una herramienta transformadora, especialmente en sistemas de cultivo de alta 
                  eficiencia como la hidroponía. La combinación de IoT y la lechuga hidropónica no es solo una promesa futurista, 
                  sino una realidad que está redefiniendo cómo cultivamos.
                  La tecnología IoT permite la <b>conexión de dispositivos físicos a internet, lo que posibilita la 
                  recopilación, transmisión y análisis de datos en tiempo real</b>. En un cultivo de lechuga hidropónica, 
                  esto se traduce en:</p> 
                <p><b>Sensores Inteligentes:</b>      Temperatura del Agua y Ambiental:   Sensores sumergibles y ambientales registran continuamente 
                  las temperaturas críticas, como se ve en la pantalla de monitoreo de la imagen, asegurando que las lechugas se encuentren en su rango óptimo de crecimiento (generalmente entre 18°C y 24°C para el aire y entre 18°C y 22°C para el agua).
                   <br>
                   <b>Nivel y pH de la Solución Nutritiva:</b> Sensores de nivel evitan que los depósitos de solución se queden vacíos, mientras que los sensores
                    de pH son cruciales para mantener la acidez adecuada (usualmente entre 5.5 y 6.5 para la lechuga), lo que garantiza la absorción eficiente de nutrientes.
                   <br>
                   <b>Conductividad Eléctrica (CE):</b> Los sensores de CE miden la concentración de nutrientes en la solución. Si la CE es demasiado baja o alta,
                    las lechugas no se desarrollarán correctamente.
                   Humedad Relativa y Luminosidad: En ambientes controlados (como invernaderos), sensores de humedad ambiental y luxómetros (medidores de luz) 
                   optimizan las condiciones de crecimiento, activando sistemas de ventilación o iluminación suplementaria si es necesario.
                    
                </p>
                <p><b>Actuadores y Automatización:</b>

                 Los datos recopilados por los sensores no solo se muestran en un dashboard interactivo (como el de la imagen de monitoreo), 
                 sino que también activan automáticamente diversos actuadores. Por ejemplo, si el pH del agua es bajo, una bomba dosificará 
                 automáticamente una solución alcalina. Si la temperatura sube, se activarán ventiladores o sistemas de refrigeración.
                 Esto permite un control preciso y constante del ambiente de cultivo sin intervención humana constante, reduciendo errores y 
                 optimizando los recursos.</p>
                <p><b>Análisis de Datos y Aprendizaje:</b>

                 La recopilación continua de datos permite un análisis detallado de las condiciones óptimas de crecimiento. Con el tiempo, los sistemas
                  pueden "aprender" de los datos históricos para predecir necesidades futuras y ajustar los parámetros de forma aún más eficiente, 
                  moviéndose hacia una agricultura predictiva.
                 Los productores pueden acceder a esta información desde cualquier lugar a través de aplicaciones móviles o plataformas web, 
                 recibiendo alertas instantáneas ante cualquier anomalía.</p>

                
                <p>En conclusión, la integración de la tecnología IoT en el cultivo de lechuga hidropónica no es solo una mejora incremental; 
                  es un salto cualitativo que permite una gestión agrícola más inteligente, eficiente y sostenible. Al transformar los sistemas de 
                  cultivo en "granjas inteligentes" interconectadas, el IoT nos acerca a un futuro donde la producción de alimentos es más resiliente, 
                  productiva y respetuosa con nuestro planeta.
            </div>
        </div>
        
        <div class="calificacion-section">
            <h3>Califica este proyecto</h3>
            <div class="rating">
                <input type="radio" id="star5" name="rating" value="5">
                <label for="star5"><i class="fas fa-star"></i></label>
                <input type="radio" id="star4" name="rating" value="4">
                <label for="star4"><i class="fas fa-star"></i></label>
                <input type="radio" id="star3" name="rating" value="3">
                <label for="star3"><i class="fas fa-star"></i></label>
                <input type="radio" id="star2" name="rating" value="2">
                <label for="star2"><i class="fas fa-star"></i></label>
                <input type="radio" id="star1" name="rating" value="1">
                <label for="star1"><i class="fas fa-star"></i></label>
            </div>
            <button id="enviar-calificacion" onclick="mostrarPopup()">Enviar Calificación</button>
              <!-- Modal -->
              <div id="miModal" class="modal">
                <div class="modal-content">
                     <span class="close" onclick="cerrarPopup()">&times;</span>
                     <h1>Gracias por calificar este proyecto🫂</h1>
                </div>
             </div>

             <script>
                          function mostrarPopup() {
                          document.getElementById("miModal").style.display = "block";
                            }

                         function cerrarPopup() {
                         document.getElementById("miModal").style.display = "none";
                         }

                          window.onclick = function(event) {
                           const modal = document.getElementById("miModal");
                         if (event.target === modal) {
                           modal.style.display = "none";
                          }
                          }
             </script>

        </div>
        
        <button id="boton-devolver" onclick="location.href='proyectos.html#item5'">VOLVER</button>
    </div>
    
    
</body>
</html>
    