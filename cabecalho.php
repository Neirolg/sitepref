<!DOCTYPE html>
<html>
<head>
    <title>Cabeçalho com Carrossel</title>
    <style>
        /* Estilos para o carrossel */
        .carousel {
            width: 33%;
            height: 33%;
            position: relative;
            overflow: hidden;
        }
        
        .carousel-inner {
            width: 100%;
            height: 100%;
            display: flex;
            transition: transform 5s ease;
            animation: carousel-rotation 30s infinite linear;
        }
        
        .carousel-item {
            width: 100%;
            height: 100%;
            flex-shrink: 0;
        }
        
        /* Animação do carrossel */
        @keyframes carousel-rotation {
            0% { transform: translateX(0); }
            33.33% { transform: translateX(-100%); }
            66.66% { transform: translateX(-200%); }
            100% { transform: translateX(0); }
        }
    </style>
</head>
<body>
    <div class="carousel">
        <div class="carousel-inner">
            <?php
            $images = array(
                "palhoca1.jpg",
                "palhoca2.jpg",
                "palhoca3.jpg"
            );
            
            foreach ($images as $image) {
                echo '<div class="carousel-item"><img src="palhoca/' . $image . '" alt="Imagem de Palhoça, SC"></div>';
            }
            ?>
        </div>
    </div>
</body>
</html>