<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Primer Debate: Las implicaciones de la IA en la ingenieria</title>
    <link rel="stylesheet" href="./styles_proyectos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="proyecto-container">
        <h1 id="titulo">Semana de ingeniería de Uniminuto Zipaquirá 2025-1 🤖🛠️⚙️</h1>  
        <h1 id="subtitulo"><strong>Primer Debate: Las implicaciones de la IA en la ingenieria</strong></h1>
        <p class="institucion">Moderador Ing. Juan Felipe Gomez Martinez</p>
        
        <div class="proyecto-content">
            <div class="imagen-proyecto">
                <img src="fotosProyectos/proyecto4.jpeg" alt="Imagen del proyecto IA-RED">
                <img src="fotosProyectos/proyecto4.1.jpeg" alt="Imagen del proyecto IA-RED">
            </div>
            
            <div class="descripcion-proyecto">
                <h2>Descripción del Proyecto</h2>
                <p>Los debates en torno a la Inteligencia Artificial (IA) son complejos y multifacéticos, 
                  reflejando tanto el entusiasmo por su potencial transformador como la preocupación por sus riesgos 
                  éticos, sociales, de salud, empleo, etc. A medida que la IA avanza a un ritmo vertiginoso y se integra cada 
                  vez más en nuestra vida cotidiana, estos debates se vuelven más urgentes y relevantes. y con la opinion de un profesor, tres estudiantes y un egresado
                  de la universidad, hace mas interesante el debate.</p>
                
                    
                <p>Los debates sobre la IA abarcan desde preocupaciones prácticas sobre el empleo y la privacidad hasta 
                  dilemas filosóficos sobre el futuro de la humanidad y la naturaleza de la conciencia. Son conversaciones 
                  cruciales que buscan guiar el desarrollo de la IA de una manera que maximice sus beneficios y mitigue sus 
                  riesgos, asegurando que esta poderosa tecnología sirva al bienestar de la sociedad.
                    
                </p>
                <br>
                
                <p>En pocas palabras, un debate entre profesores, egresados y estudiantes nos deja claro que una educación 
                  de calidad no es algo que se logra de una vez y para siempre, sino un camino de mejora constante. 
                  Es como un trabajo en equipo: los profesores aportan su sabiduría, los que ya terminaron (egresados) 
                  cuentan lo que realmente se necesita en el trabajo, y los estudiantes de hoy dicen lo que les funciona y 
                  lo que no.

                  Así, escuchando a todos, la educación puede mantenerse al día y preparar mejor a las 
                  personas para lo que venga, creando un futuro educativo más fuerte y útil para todos.
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
        
        <button id="boton-devolver" onclick="location.href='proyectos.php#item4'">VOLVER</button>
    </div>
    
    
</body>
</html>