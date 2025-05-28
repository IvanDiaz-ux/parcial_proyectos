<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Muestra de proyectos Ingenieria de Sistemas    PARKING LOT</title>
    <link rel="stylesheet" href="./styles_proyectos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="proyecto-container">
        <h1 id="titulo">Semana de ingeniería de Uniminuto Zipaquirá 2025-1 🤖🛠️⚙️</h1>  
        <h1 id="subtitulo"><strong>Muestra de proyectos Ingenieria de Sistemas    PARKING LOT</strong></h1>
        <p class="institucion">Paula Gomez, Carol Ospina  Semillero de investigacion</p>
        
        <div class="proyecto-content">
            <div class="imagen-proyecto">
                <img src="fotosProyectos/proyecto6.jpeg" alt="Imagen del proyecto ">
                <img src="fotosProyectos/proyecto6.1.jpeg" alt="Imagen del proyecto ">
            </div>
            
            <div class="descripcion-proyecto">
                <h2>Descripción del Proyecto</h2>
                <p>Para el Centro Comercial Fontanar  través de esta plataforma, los usuarios podrán registrarse y crear un perfil que 
                  incluirá sus datos personales y la información de su vehículo, facilitando futuras interacciones. Una de las funcionalidades 
                  clave será la visualización en tiempo real de la disponibilidad de parqueaderos mediante un mapa interactivo. Este mapa no 
                  solo mostrará los espacios libres, ocupados o reservados, sino que también permitirá a los usuarios seleccionar la fecha y 
                  la franja horaria específica en la que desean estacionar su vehículo, ofreciendo flexibilidad en la duración de la reserva 
                  (por ejemplo, una, dos o más horas).</p>
                
                    
                <p>Una vez seleccionado el espacio y el tiempo, el sistema integrará un módulo de pago seguro y de pago antes de reservar, permitiendo a los usuarios
                   cancelar el costo de la reserva directamente a través de la aplicación.
                    
                </p>
                <p>Para el personal del Centro Comercial Fontanar, se desarrolla un dashboard de gestión que ofrecerá una visión completa 
                  y en tiempo real de la ocupación del parqueadero, las reservas activas, estadísticas de uso y herramientas para la configuración
                   de tarifas o la resolución de incidencias. El flujo de uso para el usuario será sencillo: desde su dispositivo móvil o computadora, 
                   reservará su espacio, pagará, recibirá el correspondiente comprobante y al llegar a Fontanar, 
                   simplemente lo presentará para un acceso rápido y garantizado a su lugar. A la salida, el sistema validará el tiempo de estadía y, 
                   si es necesario, gestionará cobros adicionales por excedentes.</p>
                
                
                <p>El proyecto <b>"Parking Lot"</b> implementa un sistema web para reservar parqueadero por horas en el centro comercial,
                   usando sensores y reconocimiento de placas. Esto elimina el estrés de buscar estacionamiento, 
                   optimiza el espacio del centro comercial y mejora la experiencia general del visitante, con un detalle que no me gusto ya que al tener que pagar si o si por horas
                   al un cliente estar solo 15 min e irse, los 45 min restantes estan ocupados en ese espacio del parqueadero, sin un uso, entonces se podrias reiniciar para que quede libre y algun otro cliente que lo necesite lo use independiente del tiempoque demore.
                </p>
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
        
      <button id="boton-devolver" onclick="location.href='proyectos.php#item6'">VOLVER</button>
    </div>
    
    
</body>
</html>