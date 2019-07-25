<?php
    include("topo.php");
?>

<link rel="stylesheet" href="./_css/contato.css">

<div class="container row col-md-12">


    <div class="contato-principal col">

        <div class="contato-formulario">
            <h3>Formulário de contato</h3>
            <form class="forma" method="POST" action="./email.php">
                <input class="field" name="name" placeholder="Nome">
                <input class="field" name="email" placeholder="E-mail">
                <textarea class="field" name="message" placeholder="Escreva sua mensagem"></textarea>
                <input type="submit" value="Enviar" />
            </form>
        </div>
    </div>

    <div class="redes-sociais">
        <div class="row offset-2">
            <div class="col-4"><a href="https://github.com/lubasilva/silvasCorporation" target="_blank"> <img src="./_imagens/github_39686.png" alt="git hub"></a></div>
            <div class="col"><a href="https://www.instagram.com/lubapisi/" target="_blank"> <img src="./_imagens/instagram.png" alt="instagram"></a></div>
            <div class="w-100"></div>
            <div class="col-4"><a href="https://twitter.com/" target="_blank"><img src="./_imagens/twitter.png" alt="twitter"> </a></div>
            <div class="col"><a href="https://www.facebook.com/lucas.batista.1996" target="_blank"><img src="./_imagens/facebook.png" alt="facebook"></a></div>
        </div>
    </div>

</div>

<?php
    include("footer.php");
?>