<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" />

    <link rel="icon" type="image/png" href="logo-oficial.png" sizes="32x32">
    <title>SÓ PLAY </title>
    <style>
        .button2 {
    display: inline;
    position: relative;
    width: 56px;
    height: 56px;
    margin: 0;
    overflow: hidden;
    outline: none;
    background-color: transparent;
    cursor: pointer;
    border: 0;
}
  .button2:before,
  .button2:after {
    content: "";
    position: absolute;
    border-radius: 50%;
    inset: 7px;
  }
  
  .butto2n:before {
    border: 4px solid #f0eeef;
    transition: opacity 0.4s cubic-bezier(0.77, 0, 0.175, 1) 80ms,
      transform 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) 80ms;
  }
  
  .button2:after {
    border: 4px solid #96daf0;
    transform: scale(1.3);
    transition: opacity 0.4s cubic-bezier(0.165, 0.84, 0.44, 1),
      transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    opacity: 0;
  }
  
  .button2:hover:before,
  .button2:focus:before {
    opacity: 0;
    transform: scale(0.7);
    transition: opacity 0.4s cubic-bezier(0.165, 0.84, 0.44, 1),
      transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  }
  
  .button2:hover:after,
  .button2:focus:after {
    opacity: 1;
    transform: scale(1);
    transition: opacity 0.4s cubic-bezier(0.77, 0, 0.175, 1) 80ms,
      transform 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) 80ms;
  }
  
  .button2-box {
    display: flex;
    position: absolute;
    top: 0;
    left: 0;
  }
  
  .button2-elem {
    display: block;
    width: 20px;
    height: 20px;
    margin: 17px 18px 0 18px;
    transform: rotate(180deg);
    fill: #f0eeef;
  }
  
  .button2:hover .button-box,
  .button2:focus .button-box {
    transition: 0.4s;
    transform: translateX(-56px);
  }
  .background-container {
            position: relative;
            overflow: hidden;
        }

        .background-image {
    width: 100%;
    height: 100%;
    opacity: 90%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
}
        .flex-row {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative; /* Adicionado position relative */
            z-index: 1; /* Garante que os filhos tenham um z-index maior que a imagem de fundo */
            color: #fff; /* Adicionado para melhorar a legibilidade do texto sobre a imagem */
        }

        .content-container {
            position: relative; /* Adicionado position relative */
            z-index: 2; /* Z-index maior que a imagem de fundo */
            /* Adicione outros estilos conforme necessário */
        }

        /* Outros estilos existentes */

        .cssbuttons-io-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px; /* Ajuste conforme necessário para adicionar um espaçamento entre os elementos */
            color: #fff; /* Adicionado para melhorar a legibilidade do texto sobre a imagem */
        }

    </style>
</head>

<header>
<nav id="topo" class="scrolling-nav">
<div class="btn1">
        <img id="logo" src="logo-oficial.png" alt="Logo">
       
            <span class="image-text">PLAY</span>
           
       
    </div>
        <a href="#saibamais" class="scroll-link">Conteúdo</a>
        <a href="vender.php">Perguntas Frequentes</a>
        <div class="contact-buttons">
            <a href="https://api.whatsapp.com/send/?phone=5511989467375&text&type=phone_number&app_absent=0" id="w">
                <i class="bi bi-whatsapp"></i>
            </a>
            <a href="https://api.whatsapp.com/send/?phone=5511989467375&text&type=phone_number&app_absent=0" id="w">
                <i class="bi bi-instagram"></i>
            </a>
            <button class="button">Entrar</button>
            <a class="btn" href="#">CADASTRE-SE</a>
        </div>
    </nav>
</header>
<body>
<div class="background-container">
        <img class="background-image" src="BACK.png" alt="Imagem de fundo">
<div class="flex-row">
            <section id="streaming-live">
                <div class="content-container">
                    <div class="video-container">
                    <video autoplay muted loop width="100%">
                    <!-- Substitua 'CAMINHO_DO_SEU_VIDEO_LOCAL' e 'TIPO_DO_SEU_VIDEO' pelos valores corretos -->
                    <source src="PLAY.mp4" type="video/mp4">
                    Seu navegador não suporta o elemento de vídeo.
                </video>
                    </div>
                    <div class="sidebar">
                        <div class="titulo aos-init" data-aos="fade-up" data-aos-duration="1000">
                    <h1>ASSISTA CANAIS AO VIVO, FILMES, SÉRIES <br> E MUITO MAIS</h1>
                    <h2>Insira seu email abaixo e cadastre-se. <b style="color:#2dd9ff;"> É Grátis!</b></h2>
                    <p>SEU CADASTRO É IMPORTANTE PARA ENVIARMOS
AS NOVIDADES DO SÓ PLAY</p>
                </div>
                    <div class="group">
  <input required="" type="text" class="input" style="color:#fff;">
  <span class="highlight"></span>
  <span class="bar"></span>
  <label>Email</label>
</div>
<button class="cssbuttons-io-button">
  Cadastrar
  <div class="icon">
    <svg
      height="24"
      width="24"
      viewBox="0 0 24 24"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path d="M0 0h24v24H0z" fill="none"></path>
      <path
        d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
        fill="currentColor"
      ></path>
    </svg>
  </div>
</button>



                    </div>
                </div>
            </section>
        </div>

        
    

   <a href="#saibamais" class="scroll-link">
    <div class="saiba-container" >
        <button class="saiba" >
            SAIBA MAIS
            <div class="hoverEffect" id="saibamais">
                <div></div>
            </div>
        </button>
    </div>
</div>
</a>



<div class="movie-card">
<div class="card">
<div class="header" >
						<span class="title">AÇÃO, DRAMA, COMÉDIA, TERROR, ROMANCE? <br> AQUI TÊM MUITO MAIS!</span>
						<span class="price">GRÁTIS</span>
					</div>
					<p class="desc">Cadastre-se agora e tenha acesso ao melhor conteúdo legalizado</p>
					<ul class="lists">
						<li class="list">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
							</svg>
							<span>Gratuito</span>
						</li>
						<li class="list">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
							</svg>
							<span>Legalizado</span>
						</li>
						<li class="list">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
							</svg>
							<span>Alta Qualidade</span>
						</li>
					</ul>
					<button type="button" class="action">CADASTRAR AGORA</button>
				</div>
                <div class="text-container">
        <!-- Conteúdo da div à direita -->
        <h1>Muito Conteúdo para toda a família</h1>
        <p>Acesse em todos os dispositivos!</p>
        <video autoplay muted loop width="550px">
                    <!-- Substitua 'CAMINHO_DO_SEU_VIDEO_LOCAL' e 'TIPO_DO_SEU_VIDEO' pelos valores corretos -->
                    <source src="disp.mp4" type="video/mp4">
                    Seu navegador não suporta o elemento de vídeo.
                </video>
    </div>
    </div>


    <div class="container1">
        <div class="custom-box1"><img src="1.png" alt=""></div>
        <div class="custom-box1"><img src="2.png" alt=""></div>
        <div class="custom-box1"><img src="3.png" alt=""></div>
        <div class="custom-box1"><img src="4.png" alt=""></div>
        <div class="custom-box1"><img src="5.png" alt=""></div>
    </div>


    <div class="texto-metodologia"  >

<div class="faixa-imagens-container" >
    <div class="degrade-lateral" id="metodo"></div>
    <div class="faixa-imagens">
        <img src="movie (1).png" alt="Imagem 1">
        <img src="movie (2).png" alt="Imagem 1">
        <img src="movie (3).png" alt="Imagem 1">
        <img src="movie (4).png" alt="Imagem 1">
        <img src="movie (5).png" alt="Imagem 1">
        <img src="movie (6).png" alt="Imagem 1">
        <img src="movie (7).png" alt="Imagem 1"> 
        <img src="movie (8).png" alt="Imagem1">
        <img src="movie (9).png" alt="Imagem 1">
        <img src="movie (10).png" alt="Imagem 1">
        <img src="movie (11).png" alt="Imagem 1">
        <img src="movie (12).png" alt="Imagem 1">
        <img src="movie (13).png" alt="Imagem 1">
        <img src="movie (14).png" alt="Imagem 1">
        <img src="movie (15).png" alt="Imagem 1"> 
        <img src="movie (16).png" alt="Imagem1">
        <img src="movie (17).png" alt="Imagem1">
        <img src="movie (1).png" alt="Imagem 1">
        <img src="movie (2).png" alt="Imagem 1">
        <img src="movie (3).png" alt="Imagem 1">
        <img src="movie (4).png" alt="Imagem 1">
        <img src="movie (5).png" alt="Imagem 1">
        <img src="movie (6).png" alt="Imagem 1">
        <img src="movie (7).png" alt="Imagem 1"> 
        <img src="movie (8).png" alt="Imagem1">
        <img src="movie (9).png" alt="Imagem 1">
        <img src="movie (10).png" alt="Imagem 1">
        <img src="movie (11).png" alt="Imagem 1">
        <img src="movie (12).png" alt="Imagem 1">
        <img src="movie (13).png" alt="Imagem 1">
        <img src="movie (14).png" alt="Imagem 1">
        <img src="movie (15).png" alt="Imagem 1"> 
        <img src="movie (16).png" alt="Imagem1">
        <img src="movie (17).png" alt="Imagem1">
        <img src="movie (1).png" alt="Imagem 1">
        <img src="movie (2).png" alt="Imagem 1">
        <img src="movie (3).png" alt="Imagem 1">
        <img src="movie (4).png" alt="Imagem 1">
        <img src="movie (5).png" alt="Imagem 1">
        <img src="movie (6).png" alt="Imagem 1">
        <img src="movie (7).png" alt="Imagem 1"> 
        <img src="movie (8).png" alt="Imagem1">
        <img src="movie (9).png" alt="Imagem 1">
        <img src="movie (10).png" alt="Imagem 1">
        <img src="movie (11).png" alt="Imagem 1">
        <img src="movie (12).png" alt="Imagem 1">
        <img src="movie (13).png" alt="Imagem 1">
        <img src="movie (14).png" alt="Imagem 1">
        <img src="movie (15).png" alt="Imagem 1"> 
        <img src="movie (16).png" alt="Imagem1">
        <img src="movie (17).png" alt="Imagem1">
        <img src="movie (1).png" alt="Imagem 1">
        <img src="movie (2).png" alt="Imagem 1">
        <img src="movie (3).png" alt="Imagem 1">
        <img src="movie (4).png" alt="Imagem 1">
        <img src="movie (5).png" alt="Imagem 1">
        <img src="movie (6).png" alt="Imagem 1">
        <img src="movie (7).png" alt="Imagem 1"> 
        <img src="movie (8).png" alt="Imagem1">
        <img src="movie (9).png" alt="Imagem 1">
        <img src="movie (10).png" alt="Imagem 1">
        <img src="movie (11).png" alt="Imagem 1">
        <img src="movie (12).png" alt="Imagem 1">
        <img src="movie (13).png" alt="Imagem 1">
        <img src="movie (14).png" alt="Imagem 1">
        <img src="movie (15).png" alt="Imagem 1"> 
        <img src="movie (16).png" alt="Imagem1">
        <img src="movie (17).png" alt="Imagem1">
        
        
        
       
        
        <!-- Adicione mais imagens conforme necessário -->
    </div>
    <div class="degrade-lateral" ></div>
    <h1 style="font-size:35px;">Gostou? Cadastre-se e aproveite o melhor da SÓPLAY!</h1>
    <p style="font-size:25px;">E tenha acesso ao melhor conteúdo legalizado e de qualidade <br><b style="color:#2dd9ff;">GRATUITO!</b></p>
    
<button class="cssbuttons-io-button" style="font-size:25px;">
  Cadastrar
  <div class="icon">
    <svg
      height="24"
      width="24"
      viewBox="0 0 24 24"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path d="M0 0h24v24H0z" fill="none"></path>
      <path
        d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
        fill="currentColor"
      ></path>
    </svg>
  </div>
</button>


</div>



<div class="texto-metodologia"  >

<div class="faixa-imagens-container" >
    <div class="degrade-lateral" id="metodo"></div>
    <div class="faixa-imagens">
        <img src="tv (1).png" alt="Imagem 1">
        <img src="tv (2).png" alt="Imagem 1">
        <img src="tv (3).png" alt="Imagem 1">
        <img src="tv (4).png" alt="Imagem 1">
        <img src="tv (5).png" alt="Imagem 1">
        <img src="tv (6).png" alt="Imagem 1">
        <img src="tv (7).png" alt="Imagem 1"> 
        <img src="tv (8).png" alt="Imagem 1">
        <img src="tv (9).png" alt="Imagem 1">
        <img src="tv (10).png" alt="Imagem 1">
        <img src="tv (1).png" alt="Imagem 1">
        <img src="tv (2).png" alt="Imagem 1">
        <img src="tv (3).png" alt="Imagem 1">
        <img src="tv (4).png" alt="Imagem 1">
        <img src="tv (5).png" alt="Imagem 1">
        <img src="tv (6).png" alt="Imagem 1">
        <img src="tv (7).png" alt="Imagem 1"> 
        <img src="tv (8).png" alt="Imagem 1">
        <img src="tv (9).png" alt="Imagem 1">
        <img src="tv (10).png" alt="Imagem 1">        <img src="tv (1).png" alt="Imagem 1">
        <img src="tv (2).png" alt="Imagem 1">
        <img src="tv (3).png" alt="Imagem 1">
        <img src="tv (4).png" alt="Imagem 1">
        <img src="tv (5).png" alt="Imagem 1">
        <img src="tv (6).png" alt="Imagem 1">
        <img src="tv (7).png" alt="Imagem 1"> 
        <img src="tv (8).png" alt="Imagem 1">
        <img src="tv (9).png" alt="Imagem 1">
        <img src="tv (10).png" alt="Imagem 1">        <img src="tv (1).png" alt="Imagem 1">
        <img src="tv (2).png" alt="Imagem 1">
        <img src="tv (3).png" alt="Imagem 1">
        <img src="tv (4).png" alt="Imagem 1">
        <img src="tv (5).png" alt="Imagem 1">
        <img src="tv (6).png" alt="Imagem 1">
        <img src="tv (7).png" alt="Imagem 1"> 
        <img src="tv (8).png" alt="Imagem 1">
        <img src="tv (9).png" alt="Imagem 1">
        <img src="tv (10).png" alt="Imagem 1">        <img src="tv (1).png" alt="Imagem 1">
        <img src="tv (2).png" alt="Imagem 1">
        <img src="tv (3).png" alt="Imagem 1">
        <img src="tv (4).png" alt="Imagem 1">
        <img src="tv (5).png" alt="Imagem 1">
        <img src="tv (6).png" alt="Imagem 1">
        <img src="tv (7).png" alt="Imagem 1"> 
        <img src="tv (8).png" alt="Imagem 1">
        <img src="tv (9).png" alt="Imagem 1">
        <img src="tv (10).png" alt="Imagem 1">
        <!-- Adicione mais imagens conforme necessário -->
    </div>
    <div class="degrade-lateral" ></div>
   


</div>



<div class="movie-card1" data-aos="fade-up" data-aos-duration="1000">
                <div class="text-container1">
        <!-- Conteúdo da div à direita -->
       
        <video autoplay muted loop width="100%">
                    <!-- Substitua 'CAMINHO_DO_SEU_VIDEO_LOCAL' e 'TIPO_DO_SEU_VIDEO' pelos valores corretos -->
                    <source src="kids.mp4" type="video/mp4" autoplay muted loop>
                    Seu navegador não suporta o elemento de vídeo.
                </video>
                <h1 style="font-size:35px;">Cadastre-se agora mesmo!</h1>
    <p style="font-size:25px;">E tenha acesso ao melhor conteúdo legalizado e de qualidade <br><b style="color:#2dd9ff;">GRATUITO!</b></p>
    
<button class="cssbuttons-io-button" style="font-size:25px;">
  Cadastrar
  <div class="icon">
    <svg
      height="24"
      width="24"
      viewBox="0 0 24 24"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path d="M0 0h24v24H0z" fill="none"></path>
      <path
        d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
        fill="currentColor"
      ></path>
    </svg>
  </div>
</button>


    </div>
    </div>













<div class="content-container2">
    <!-- Div da imagem -->
    <div class="image-wrapper">
        <img src="contato.png" alt="Descrição da imagem">
    </div>
    
    <!-- Div da caixa de texto -->
    <div class="text-container">
      <h1>Entre em contato com a SÓPLAY</h1>
        <p style="font-size:25px;">Atendimento ao cliente via WhatsApp</p>
         
<button class="cssbuttons-io-button" style="font-size:20px;">
 Entrar em Contato
  <div class="icon">
    <svg
      height="24"
      width="24"
      viewBox="0 0 24 24"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path d="M0 0h24v24H0z" fill="none"></path>
      <path
        d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
        fill="currentColor"
      ></path>
    </svg>
  </div>
</button>
<div class="social-card">
  <button class="Btn github">
    <span class="svgContainer">
    <i class="bi bi-youtube"></i>
    </span>
    <span class="BG"></span>
  </button>

  <button class="Btn whatsapp">
    <span class="svgContainer">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        height="1.6em"
        fill="white"
        viewBox="0 0 448 512"
      >
        <path
          d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"
        ></path>
      </svg>
    </span>
    <span class="BG"></span>
  </button>

  <button class="Btn linkdin">
    <span class="svgContainer">
    <i class="bi bi-instagram"></i>
    </span>
    <span class="BG"></span>
  </button>

  
</div>

    </div>
</div>

<footer>
  <div>
    <img src="logo-oficial.png" alt="">
    <p>SÓ PLAY - Todos os direitos reservados 2024</p>
    
  </div>
</footer>
































        <script>
    function showAnswer(element) {
        // Hide all other answers
        var allAnswers = document.querySelectorAll('.faq-opc');
        allAnswers.forEach(function (answer) {
            answer.style.display = 'none';
        });

        // Show the clicked answer
        var answer = element.querySelector('.faq-opc');
        answer.style.display = 'block';
    }
</script>




<script>function showAnswer(element) {
  var answerContent = element.querySelector(".faq-opc").innerHTML;
  var answerContainer = document.querySelector(".faq-answer");
  answerContainer.innerHTML = answerContent;
}
</script>
<script src="https://cdn.jsdelivr.net/npm/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js"></script>
<script>
  const scroll = new SmoothScroll('a[href*="#"]', {
    speed: 800, // Velocidade da rolagem (em milissegundos)
    easing: 'easeInOutCubic', // Efeito de rolagem
  });
</script>
<script>function toggleDiv(divId) {
  var div = document.getElementById(divId);
  if (div.style.display === "none" || div.style.display === "") {
    div.style.display = "flex";
  } else {
    div.style.display = "none";
  }
}
</script>
<script>
    document.querySelector('.button').addEventListener('click', function() {
        const scrollToTop = () => {
            const c = document.documentElement.scrollTop || document.body.scrollTop;
            if (c > 0) {
                window.requestAnimationFrame(scrollToTop);
                window.scrollTo(0, c - c / 8);
            }
        };
        scrollToTop();
    });
</script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
</script>
<script>
        var source;

        const playerConfig = {
            key: `6f2b9962-a240-493f-8cc6-6993645645f9`,
            analytics: {
                key: "A3809BE7-76B7-4790-83A8-07A2F9C79426",
                videoId: '460',
                title: 'RECORD NEWS'
            },
            ready: function() {
                player.play();
            },
            playback: {
                autoplay: true,
                muted: false
            },
            logs: {
                bitmovin: false
            },
            cast: {
                enable: true
            }
        };
        const container = document.getElementById('player');
        const player = new bitmovin.player.Player(container, playerConfig);

        if (`https://cdn-fast.nxtv.com.br/9978b7063e297d842c230b731e04e713/rnw/rn/rnw_rn.m3u8`.indexOf("mpd") != -1) {
            source = {
                dash: `https://cdn-fast.nxtv.com.br/9978b7063e297d842c230b731e04e713/rnw/rn/rnw_rn.m3u8`,
                poster: `./soplay_files/assets/recordnews.jpg`
            };

        } else {
            source = {
                hls: `https://cdn-fast.nxtv.com.br/9978b7063e297d842c230b731e04e713/rnw/rn/rnw_rn.m3u8`,
                poster: `./soplay_files/assets/recordnews.jpg`
            };
        }

        player.load(source).then(function() {
            console.log('Source Configuration is ready for use');
        }).catch(function(reason) {
            console.log('Source Configuration not ready:', reason);
        });
    </script>
    <!-- FIM Configuração do Bitmovin Player -->

    <!-- Inserindo scripts do cliente no footer -->
    <script>
(function(w,d,t,u,n,a,m){w['MauticTrackingObject']=n;
    w[n]=w[n]||function(){(w[n].q=w[n].q||[]).push(arguments)},a=d.createElement(t),
    m=d.getElementsByTagName(t)[0];a.async=1;a.src=u;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://m.mktsoplay.com.br/mtc.js','mt');

mt('send', 'pageview');
</script>    <!-- FIM Inserindo scripts do cliente no footer -->
</body>
<footer>
   
    <script>
        // Função para obter o valor de um parâmetro da URL
        function getURLParameter(name) {
            name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
            var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
            var results = regex.exec(location.search);
            return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
        }

        // Coletar os valores das UTM da URL
        // var utmSource = getURLParameter('utm_source');
        var fbClid = getURLParameter('fbclid');
        var utmSource = getURLParameter('utm_source');
        var utmMedium = getURLParameter('utm_medium');
        var utmCampaign = getURLParameter('utm_campaign');

        // Obter a data atual
        var currentDate = new Date();

        // Definir a data de expiração em 7 dias
        var expirationDate = new Date(currentDate.getTime() + (7 * 24 * 60 * 60 * 1000));

        // Converter a data de expiração para o formato de cookie
        var expirationDateString = expirationDate.toUTCString();

        // Salvar os valores das UTM nos cookies do navegador com data de expiração de 7 dias
        document.cookie = 'fbclid=' + fbClid + ';path=/;expires=' + expirationDateString;
        document.cookie = 'utm_source=' + utmSource + ';path=/;expires=' + expirationDateString;
        document.cookie = 'utm_medium=' + utmMedium + ';path=/;expires=' + expirationDateString;
        document.cookie = 'utm_campaign=' + utmCampaign + ';path=/;expires=' + expirationDateString;
    </script>
    <script>
        var $root = $('html, body');

        $('a[href^="#"]').click(function() {
            $root.animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 500);

            return false;
        });
    </script>
    <script>
        $('.faq-selec').click(function() {
            $(this).toggleClass('faqClicked')
        });

        $('.accept-btn').click(function() {
            $('.cookie-notice').toggleClass('clicked')
        });


        $("#emailForm").submit(function(event) {
            if (!emailValido($("#emailIput").val())) {
                sweetAlert("Ops, erro encontrado!", "Digite um email válido.", "error", "button-sweet-error");
                return false;
            }


            $('#emailForm').unbind('submit').submit();



        });
    </script>
</body>
</html>