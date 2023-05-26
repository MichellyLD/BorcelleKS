<?php
    require "produtos.php";
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

    <div class="itens">
                
                <?php
                    foreach($produtos as $valor => $p){   
                        if ($p["definido"] == "comprar") {
                ?>

                <ul>
                    <li>                
                        <a href="produto.php?valor=<?=$valor?>">
                            <img src="<?=$p["foto"]?>">
                        </a>
    
                        <p><a href="produto.php?valor=<?=$valor?>">
                            <?=$p["nome"]?>
                            <br>
                            <?=$p["preco"]?>
                        </a></p>
                    </li>
                </ul>
    
                <?php
                    }
                }
                ?>
            
            </div>
            
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