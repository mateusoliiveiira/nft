<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->
<link rel="stylesheet" href="index.css">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  
  <title>Frontend Mentor | NFT preview card component</title>
<style>

body {
    font-size: 14px;
    font-family: Arial, sans-serif;
    background-color: hsl(215, 51%, 70%);
    background-repeat: no-repeat;
    width: 100vw;
   
  }
  nav {
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    background: rgb(139, 32, 209);
    height: 15vh;
  }

  .container{
    width: 100vw;
    display: flex;
    justify-content: center;
  }

.menu img{
    height: 15vh;
      }
.menu a {
  
    font-style:normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 15px;
    text-decoration: none;
    padding: 10px;
    transition: background-color 0.3s ease;
    color: #d0bcec;
    border-radius: 20px;
    font-family:Georgia, 'Times New Roman', Times, serif
        
      }
      
.menu a:hover,
.menu a:focus {
        background-color: rgb(255, 153, 58);;
        border-radius: 20px;
        font-family:Georgia, 'Times New Roman', Times, serif
      }
      .card-grid {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        height: auto; /* Defina uma altura fixa ou remova essa linha para que a altura seja determinada pelo conteúdo */
        width: 80vw;
        gap: 30px;
       position: relative;
       top: 230px;
      }
      
      .card {
        width: 200px;
        height: 380px;
        padding: .8em;
        background:  hsl(216, 50%, 16%)     ;
        position: relative;
        overflow: visible;
        box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        left:450px;
        border-radius:15px;
        top:-280px;
      }
      
  @media screen and (max-width: 628px) {
    /* Estilos para telas menores ou iguais a 768px de largura */
    max-width: 100%; /* Ocupa a largura disponível */
    margin: 0 auto; /* Centraliza horizontalmente */
    position:relative;
    left: 30px;

  }

  @media screen and (max-width: 480px) {
    /* Estilos para telas menores ou iguais a 480px de largura */
    padding: 5%; /* Aumenta o espaçamento proporcionalmente */
  }

      .card-img1 {
        height: 8em;
        max-height: 40%;
        width: 100%;
        background-size: cover;
        border-radius: .5rem;
        transition: .3s ease;
      }
      
      
      
      .card-info {
        padding-top: 20%;
      }
      
      svg {
        width: 20px;
        height: 20px;
      }
      
      .card-footer {
        width: 85%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 1px;
        border-top: 1px solid #ddd;
        position:absolute;
        top:347px;
        right: 19px;
      }
      
      /* Text */
      .text-title {
        font-weight: 900;
        font-size: 1.2em;
        line-height: 1.5;
        color:white;
        transition: color 0.2s; 
        position: relative;
        top:-50px;
      }
      
      .text-body {
        font-size: .9em;
        padding-bottom: 1px;
        color:grey;
        position: relative;
        top:-60px;
      }
      
      /* Button */
      .card-button {
        border: 1px solid #252525;
        display: flex;
        padding: .3em;
        cursor: pointer;
        border-radius: 50px;
        transition: .3s ease-in-out;


      }

      .moeda{
        position: relative;
        top: -25px;
        left:110px;
      }
      h5{
           left:-40px;
      }
      a{
        color:white;
        text-decoration:none;
      }
      .dias{
        position: relative;
        top:-38px;
        color:white;
        left:24px;
      }
      .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.card-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.card {
    position: relative;
}

.base-image {
    max-width: 200px;
    display: block;
}

.overlay-image {
    max-width: 200px;
    display: none;
    position: absolute;
    top: 80px;
    left: 87px;
}

.card:hover .overlay-image {
    display: block;
}
.eth{
  position:absolute;
  top:320px;
  left:15px;
}
.eae{
  position: absolute;
  top:-10px;
  left:20px;
  color:#00FFF8;
}
.text-title:hover {
    color: rgb(0, 255, 248);
}
a.hover-link {
    text-decoration: none; /* Remova o sublinhado padrão dos links */
    color: grey; /* Cor padrão do link */
    transition: color 0.2s; /* Adicione uma transição suave para a mudança de cor */
}

a.hover-link:hover {
    color: rgb(0, 255, 248); /* Cor quando o mouse passa sobre o link */
}
#imagem {
  transition: background-color 0.3s; /* Adiciona uma transição suave para a mudança de cor de fundo */

}

#imagem {
  transition: transform 0.3s; /* Adiciona uma transição suave para a mudança de tamanho */

}

#imagem:hover {
  transform: scale(1.2); /* Aumenta o tamanho da imagem quando o mouse passa por cima (pode ajustar o valor conforme necessário) */

}
/* Responsive styles for screens with max-width of 628px */
@media screen and (max-width: 628px) {
  body {
    max-width: 100%;
    margin: 0 auto;
    position: relative;
    left: 30px;,
  }

  .card {
    left: 0; /* Adjust the card position for smaller screens */
    top: -270px; /* Adjust the card position for smaller screens */
  }
}

/* Responsive styles for screens with max-width of 480px */
@media screen and (max-width: 480px) {
  .card {
    padding: 5%; /* Increase spacing for smaller screens */
  }
}

</style>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 </head>
 <body>
  
 </body>
 </html>
<div class="container">
    <div class="card-grid">
        <div class="card">
          <a href="">
            <img src="images/image-equilibrium.jpg"   width="200px"; alt="Descrição da imagem"  class="hidden">
           
            <img src="images/icon-view.svg" alt="Descrição da imagem sobreposta" class="overlay-image" id="imagem">

            </a>
            <div class="card-info">
              <a href="">
                <h2 class="text-title">Equilibrium#1232</h2> </a>
                <p class="text-body">Our Equilibrium collectiom promotes balance and calm</p>


<div class="eth">  
     <svg width="11" height="18" xmlns="http://www.w3.org/2000/svg"><path d="M11 10.216 5.5 18 0 10.216l5.5 3.263 5.5-3.262ZM5.5 0l5.496 9.169L5.5 12.43 0 9.17 5.5 0Z" fill="#00FFF8"/></svg>  
     <p class="eae"> 0.041ETH       </p>    
    </div>

            

                <div class="moeda">
                <svg width="17" height="17" xmlns="http://www.w3.org/2000/svg"><path d="M8.305 2.007a6.667 6.667 0 1 0 0 13.334 6.667 6.667 0 0 0 0-13.334Zm2.667 7.334H8.305a.667.667 0 0 1-.667-.667V6.007a.667.667 0 0 1 1.334 0v2h2a.667.667 0 0 1 0 1.334Z" fill="#8BACD9"/></svg> 
               <p class="dias">   3 days left           </p>
              </div>
            </div>
            <div class="card-footer">
            <img src="images/image-avatar.png" width="20px"> 
            <h5>Creation of <a href="#" class="hover-link">Jules Wyvern </a> </h5>
                  
               
                </svg>
            </div>
        </div>
    </div>
</div>
<script src="script.js"></script>
            <!-- Repita esta estrutura de card conforme necessário -->
        </div>
    </div>

  




  <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
  <style>
    .attribution { font-size: 11px; text-align: center; }
    .attribution a { color: hsl(228, 45%, 44%); }
  </style>
</head>
<body>


  
</body>
</html>