<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosd.css">

    <title>Datos Curiosos</title>
</head>
<body>
<div class="icono_home">
        <a href="index.html"><img src="imagenes/home.png"></a>
    </div>
    <header>
    <div id="demotext">Datos Curiosos</div>
    <div class="menu">
        <div class="menu3d" >
            <a href="datos.php?id=1">Dato Curioso 1</a>
        </div>
        <div class="menu3d">
            <a href="datos.php?id=2">Dato Curioso 2</a>
        </div>
        <div class="menu3d">
            <a href="datos.php?id=3">Dato Curioso 3</a>
        </div>
    </div>
    </header>
    <section>
    <?php
            $id =  $_REQUEST["id"];
 
            if ($id == 1){
                echo   '<div class="divD">
                    <p id="texto1">Reprehenderit pariatur sit eiusmod sint do in exercitation eiusmod ex veniam quis irure. Esse ut exercitation in deserunt sint. Ullamco aliquip ullamco et sit eiusmod deserunt consectetur sint. Irure dolore fugiat culpa ut est Lorem cupidatat laboris ut eu mollit. Velit pariatur anim amet et ad eu aliqua aliqua pariatur dolor anim in. Est non proident nulla consectetur nisi duis amet adipisicing exercitation culpa quis aliqua elit.

Aute duis incididunt irure magna commodo cupidatat dolore do proident. Incididunt fugiat non eu tempor cupidatat elit quis nulla sit est reprehenderit pariatur cupidatat ut. Pariatur nulla sint non aute commodo pariatur et sint commodo ut eiusmod non anim. Aliqua ea sit cillum amet dolore consequat sit sint deserunt sit ipsum aute quis aute. Adipisicing adipisicing adipisicing ut tempor nostrud proident qui elit et ipsum consectetur ipsum pariatur laborum. Aliqua elit nostrud do eiusmod non.</p>
                    </div>';
            }
            else if( $id ==2){
                echo   '<div class="divD">
                <p id="texto2">sit eiusmod sint do in exercitation eiusmod ex veniam quis irure. Esse ut exercitation in deserunt sint. Ullamco aliquip ullamco et sit eiusmod deserunt consectetur sint. Irure dolore fugiat culpa ut est Lorem cupidatat laboris ut eu mollit. Velit pariatur anim amet et ad eu aliqua aliqua pariatur dolor anim in. Est non proident nulla consectetur nisi duis amet adipisicing exercitation culpa quis aliqua elit.

                Aute duis incididunt irure magna commodo cupidatat dolore do proident. Incididunt fugiat non eu tempor cupidatat elit quis nulla sit est reprehenderit pariatur cupidatat ut. Pariatur nulla sint non aute commodo pariatur et sint commodo ut eiusmod non anim. Aliqua ea sit cillum amet dolore consequat sit sint deserunt sit ipsum aute quis aute. Adipisicing adipisicing adipisicing ut tempor nostrud proident qui elit et ipsum consectetur ipsum pariatur laborum. Aliqua elit nostrud do eiusmod non.</p>
                    </div>';
            }
            else if( $id ==3){
                echo   '<div class="divD">
                <p id="texto3"> exercitation eiusmod ex veniam quis irure. Esse ut exercitation in deserunt sint. Ullamco aliquip ullamco et sit eiusmod deserunt consectetur sint. Irure dolore fugiat culpa ut est Lorem cupidatat laboris ut eu mollit. Velit pariatur anim amet et ad eu aliqua aliqua pariatur dolor anim in. Est non proident nulla consectetur nisi duis amet adipisicing exercitation culpa quis aliqua elit.

                Aute duis incididunt irure magna commodo cupidatat dolore do proident. Incididunt fugiat non eu tempor cupidatat elit quis nulla sit est reprehenderit pariatur cupidatat ut. Pariatur nulla sint non aute commodo pariatur et sint commodo ut eiusmod non anim. Aliqua ea sit cillum amet dolore consequat sit sint deserunt sit ipsum aute quis aute. Adipisicing adipisicing adipisicing ut tempor nostrud proident qui elit et ipsum consectetur ipsum pariatur laborum. Aliqua elit nostrud do eiusmod non.</p>
                    </div>';
            }
        ?>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="script/letras.js"></script>
    <script type="text/javascript">
</body>
</html>