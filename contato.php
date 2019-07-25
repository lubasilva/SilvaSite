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
    
<div class="localizacao container">
             
    <div class="row">
        
        <div class="endereco col offset-1">
            <h2> Rua Dom Abel</h2>
            <h2> Nº: 999</h2>
            <h2> Bairro Dom Abel</h2>
            <h2> CEP: 75800000</h2>
            <h2> Jatai - GO</h2>
        </div>
        <div classe ="mapa col">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7594.797965084214!2d-51.715071878233864!3d-17.866787977790484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1564055819834!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

</div>

<?php
    include("footer.php");
?>