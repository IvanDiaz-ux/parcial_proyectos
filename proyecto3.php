<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Muestra de proyectos Ingenieria Agroecologica</title>
    <link rel="stylesheet" href="./styles_proyectos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="proyecto-container">
        <h1 id="titulo">Semana de ingeniería de Uniminuto Zipaquirá 2025-1 🤖🛠️⚙️</h1>  
        <h1 id="subtitulo"><strong>Muestra de proyectos Ingenieria Agroecologica</strong></h1>
        <p class="institucion">Uniminuto Zipaquira Estudiantes de sexto semestre  Ingenieria Agroecologica</p>
        
        <div class="proyecto-content">
            <div class="imagen-proyecto">
                <img src="fotosProyectos/proyecto3.jpeg" alt="Imagen del proyecto IA-RED">
                <img src="fotosProyectos/proyecto3.1.jpeg" alt="Imagen del proyecto IA-RED">
            </div>
            
            <div class="descripcion-proyecto">
                <h2>Descripción del Proyecto</h2>
                <p>En la imagen que se muestra son las <b>"PLAGAS  EN EL SISTEMA PRODUCTIVO DE LA PAPA"</b>, 
                  se pueden observar varias etapas de vida de este insecto y los daños que causan a la planta de papa. 
                  Aunque no se identifica un único "gusano de la papa" como una especie específica, la vitrina parece 
                  presentar una colección de los principales insectos plaga que atacan la papa, mostrando sus distintas 
                  fases (huevos, larvas, pupas, adultos) y, en algunos casos, el daño que provocan en la planta y una descripcion de los mas comunes:</p>
                <br>
                    
                <p><b>Gorgojos de la papa:</b> Como los del género Andean potato weevil (Andigena, Premnotrypes), 
                  que son plagas muy destructivas, cuyas larvas (gusanos) se alimentan de los tubérculos bajo tierra. 
                  La imagen parece mostrar especímenes en frascos con etiquetas que indican estas especies.
               
                </p>
                
                <p><b>Polillas de la papa:</b> Como la polilla de la papa (Phthorimaea operculella), cuyas larvas también causan 
                  daños significativos al barrenar los tubérculos y las hojas.
               
                </p>
                
                <p><b>Escarabajos de la papa:</b> Aunque no siempre se les llama "gusanos", las larvas de algunos 
                  escarabajos también pueden ser plagas importantes.
               
                </p>
                <br>
                
                <p>En conclusión, la diversidad de los insectos es extraordinaria y fundamental 
                  para el equilibrio ecológico. Desde polinizadores vitales para la reproducción de 
                  plantas y nuestra alimentación (como abejas, mariposas y algunos escarabajos), 
                  hasta descomponedores que reciclan nutrientes (como escarabajos carroñeros), los insectos 
                  realizan funciones insustituibles. También actúan como controladores biológicos de otras 
                  poblaciones de insectos (depredadores y parasitoides) y son una fuente de alimento crucial
                   para una miríada de animales, incluyendo aves, anfibios y reptiles.</p>
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
        
        <button id="boton-devolver" onclick="location.href='proyectos.php#item3'">VOLVER</button>
    </div>
    
    
</body>
</html>