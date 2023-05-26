<?php
    require "produtos.php";

    if(isset($_GET["valor"])){
        $x = $_GET["valor"];
        $p = $produtos[$x];
    }else{
        //Redireciona para o inicio
        header("location: lojabebes.php");
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borcelle Kids Shop</title>
    <link rel="stylesheet" type="text/css" href="lojabebes.css">
</head>
<body>

    <header>
        <div class="menu">
            <img class="logo" src="imagem/borcelle.png">

            <div class="topo">

                <div id="divBusca">
                    <img class="lupa" src="https://img.freepik.com/icones-gratis/lupa_318-579080.jpg"/>
                    <input type="text" id="txtBusca" placeholder="Buscar..."/>
                    <button id="btnBusca">Buscar</button>
                </div>
            </div>   
                <div id="imagem">
                    <img src="https://cdn-icons-png.flaticon.com/512/126/126510.png">
                    <img src="https://cdn-icons-png.flaticon.com/512/3572/3572199.png">
                </div>   
        </div>


        <nav>
          <ul>
            <li class="dropdown"><a href="lojabebes.php">Inicio</a></li>
            <li class="dropdown"><a href="alugar.php">Alugar</a></li>
            <li class="dropdown"><a href="comprar.php">Comprar</a></li>
            <li class="dropdown"><a href="trocas.php">Trocas</a></li>
          </ul>  
        </nav>
    </header>

    <main>

        <div class="produto">
            <ul>
                <img src="<?=$p["foto"]?>">
                
                <div class=produtoinfor>

                    <h1>
                        <?=$p["nome"]?>
                    </h1>
                    <br>
                    <h2>
                        Preço: <?=$p["preco"]?>
                    </h2>
                    <br>
                    
                    <button class="adquirir"><?=$p["disponivel"]?></button>
                    <br><br>
                    <button class="voltar"><a href="lojabebes.php">Voltar</a></button>
                      
                </div>
                
            </ul>
            
            <p class="descricao"> <?=$p["descricao"]?></p>    
                     
        </div>

    </main>

    <footer>
        
        <ul>
            <li><a href="#">Termos de uso</a></li>
        </ul>

        <ul>
            <li><a href="#">Política de Privacidade</a></li>
        </ul>

        <ul>
            <li><h3>Feito por:</h3></li>
        
            <li><a href="#">Michelly</a></li>
            <li><a href="#">Isabela</a></li>
            <li><a href="#">Kauany</a></li>
            <li><a href="#">Esdras</a></li>
        </ul>

    </footer>

    
</body>
</html>