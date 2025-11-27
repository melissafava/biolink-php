<?php

// --- DADOS DO PERFIL (PREENCHA COM SEUS DADOS) ---
$nome = "Melissa";
$bio = "biografia super maneira :D";
$imagem = "https://i.pinimg.com/1200x/fe/af/58/feaf58ac36b3e619f1ca23de9d2b0244.jpg";
$links = [
    "Instagram" => "https://instagram.com/m3lissa_fava",
    "Youtube" => "https://www.youtube.com/@m3l_lissa_",
    "Meu Jogo Favorito" => "https://www.google.com/search?q=campo+minado&oq=&gs_lcrp=EgZjaHJvbWUqCQgBEEUYOxjCAzIJCAAQRRg7GMIDMgkIARBFGDsYwgMyCQgCEEUYOxjCAzIJCAMQRRg7GMIDMgkIBBBFGDsYwgMyCQgFEEUYOxjCAzIJCAYQRRg7GMIDMgkIBxBFGDsYwgPSAQkxMTUzajBqMTWoAgiwAgHxBZ4GhUww3N5E&sourceid=chrome&ie=UTF-8",
    "Música do Momento" => "https://www.youtube.com/watch?v=UBwxWllquFA&list=PLsaiLu3D1IS6vWSPAUKWJMGONIQyBLxTZ&index=4",
];
// Pegue o link da SUA foto.
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>BioLink da <?php echo $nome; ?></title>

    </head>
    <body>
        <div class="container">
            <img src="<?php echo $imagem; ?>" alt="Foto de Perfil" class="avatar">

            <h1> <?php echo $nome; ?> </h1>
            <p> <?php echo $bio; ?> </p>

            <div class="lista-links">
                <?php
                    foreach ($links as $texto => $url) {
                        $destaque = "";
                        // DESAFIO: Se o texto for "WhatsApp" (ou outro que você queira), mude a variável $classe_extra para "destaque". Escreva o IF aqui:
                        if ($texto == "Instagram") {
                            $destaque = "destaque";
                        }
                        // O PHP constrói o botão HTML
                        echo "<a href='$url' class='btn $destaque' target='_blank'>
                            $texto
                        </a>";
                    }
                ?>
            </div>
                <div class="area-contato">
            <a href="contato.php" class="btn-msg">📧 Mandar Mensagem</a>
        </div>
        </div>
    </body>
</html>