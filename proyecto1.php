<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Integración con IA-RED</title>
    <link rel="stylesheet" href="./styles_proyectos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="proyecto-container">
        <h1 id="titulo">Semana de ingeniería de Uniminuto Zipaquirá 2025-1 🤖🛠️⚙️</h1>  
        <h1 id="subtitulo"><strong>Integración con IA-RED</strong></h1>
        <p class="institucion">IEEE Universidad de la Sabana</p>
        
        <div class="proyecto-content">
            <div class="imagen-proyecto">
                <img src="fotosProyectos/proyecto1.jpeg" alt="Imagen del proyecto IA-RED">
                <img src="fotosProyectos/proyecto1.1.jpeg" alt="Imagen del proyecto IA-RED">
            </div>
            
            <div class="descripcion-proyecto">
                <h2>Descripción de la charla</h2>
                <p> La <b>"Integracion con IA-RED"</b> es similar a instruir a una computadora para que razone
                    y adquiera conocimiento mediante entidades conocidas como Redes Neuronales Artificiales
                    (RNA), que actúan como cerebros digitales. Lo fascinante es que, en lugar de mantener la 
                    IA y las redes separadas, la combinación permite que colaboren, lo que hace que la IA
                    sea considerablemente más astuta y capaz de abordar desafíos más intrincados.</p>
                <br>
                    
                <p>En la  charla, exploraron cómo las Redes Neuronales Artificiales <b>(RNA)</b> aprenden a través de un proceso
                    de entrenamiento y cómo sus capas interconectadas realizan cálculos matemáticos para producir los resultados deseados. 
                    Un ejemplo práctico de esto es el reconocimiento de números en imágenes. Aquí, la IA, utilizando una red neuronal, 
                    aprende a identificar <b>patrones específicos</b> de píxeles y líneas en ciertas posiciones para determinar qué número 
                    representan.
                    Para ilustrar este concepto, modificamos el popular juego "Dino Chrome" usando Java. 
                    Creamos una "familia" inicial de 100 "Dino Chromes". Estos Dinos deben evadir obstáculos en el suelo y en el aire, 
                    saltando o agachándose. Lo fascinante es que, a medida que las generaciones de Dinos "mueren" al chocar con los 
                    obstáculos, las generaciones siguientes logran avanzar más lejos. Esto sucede porque, <b>"aprenden"</b> 
                    de los errores de sus predecesores, optimizando sus estrategias de evasión con cada nueva iteración.
                    
                </p>
                <br>
                
                <p>La charla resultó particularmente cautivadora debido a la ingeniosa implementación y modificación del juego
                     por parte de sus creadores. Más allá de simplemente explicar cómo se entrena una Inteligencia Artificial, 
                     la presentación nos brindó una comprensión profunda de la velocidad y eficiencia con la que estas redes operan. 
                     Se hizo evidente cómo, en cuestión de milisegundos, una IA es capaz de procesar información compleja, 
                     analizarla y tomar decisiones precisas, simulando un proceso de pensamiento y respuesta que, para un ser humano, 
                     tomaría mucho más tiempo.
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
        
        <button id="boton-devolver" onclick="location.href='proyectos.php#item1'">VOLVER</button>
    </div>
    
   
</body>
</html>