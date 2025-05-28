<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Inteligencia Social</title>
  <link rel="stylesheet" href="./styles_proyectos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
 <body>  
   <div class="proyecto-container">
     <h1 id="titulo">Semana de ingeniería de Uniminuto Zipaquirá 2025-1 🤖🛠️⚙️</h1>  
     <h1 id="subtitulo"><strong>Inteligencia Social</strong></h1>
     <p class="institucion">Ing. Cristian Amezquita Romero</p>
      
     <div class="proyecto-content">
        <div class="imagen-proyecto">
          <img src="fotosProyectos/proyecto2.jpeg" alt="Imagen del proyecto ">
          <img src="fotosProyectos/proyecto2.2.jpeg" alt="Imagen del proyecto ">
        </div>
            
        <div class="descripcion-proyecto">
         <h2>Descripción de la Charla</h2>
         <p>La <b>"Inteligencia Social"</b> aunque a menudo se la conoce como ingeniería social. En este contexto, no se refiere a la habilidad de una persona para interactuar positivamente, sino a las técnicas de manipulación psicológica utilizadas por los ciberdelincuentes para engañar a individuos y sistemas, logrando que revelen información confidencial o realicen acciones que comprometan su seguridad.
            Los atacantes que emplean la ingeniería social explotan las características inherentes 
            de la inteligencia social humana, como la confianza, la curiosidad, el miedo, 
            la urgencia o la voluntad de ayudar. En lugar de atacar vulnerabilidades técnicas en el 
            software o hardware, atacan la <b>"vulnerabilidad humana"</b>Explicando los 3 metodosmas comunes para los ciberdelincuentes.
         </p>
                
         <p><b>Phishing (por correo electrónico)</b> El phishing tradicional, y el más común, se lleva a cabo 
           principalmente a través de correos electrónicos fraudulentos. Los ciberdelincuentes se hacen 
           pasar por entidades legítimas y de confianza (como bancos, empresas de tecnología, servicios 
           de streaming, o incluso agencias gubernamentales) para persuadir a la víctima.
         </p>
         
         <p><b>Smishing (por SMS)</b> El smishing es una combinación de "SMS" (mensajes de texto) y "phishing". 
            En este caso, los ataques se realizan a través de mensajes de texto fraudulentos a teléfonos móviles.
            Vishing (por voz)
         </p>
         
         <p><b>El vishing es la combinación de "voz" y "phishing".</b> 
            Estos ataques se realizan a través de llamadas telefónicas o mensajes de voz fraudulentos.
         </p>      
         <p>La charla resultó particularmente cautivadora debido a la ingeniosa manera de interactuar con los escuchas
            por parte del exponente. Más allá de simplemente explicar cómo atacan los ciberdelincuentes, 
            la presentación nos brindó una comprensión profunda de como con simples preguntas o simples fotos que subimos damos datos importantes para que los delicuentes ataque 
            haciendonos victimas de ellos. Las recomendaciones como subir muy poco de nosotros a Internet, de corroborar y leer siempre todo bastante bien para no caer en la trampa de estos ciberdelincuentes.
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
        
        <button id="boton-devolver" onclick="location.href='proyectos.php#item2'">VOLVER</button>
   </div>       
 </body>
</html>