<?php

# base de dados
include 'db.php';

# cabeçalho
include 'header.php';

# Conteúdo da página
# pegando o conteudo da pagina, @ para ignorar
# se a variavel pagina existir, pegue a pagina
# senao pagina é home
if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}
else{
    $pagina == 'home';
}
if($pagina == 'cursos'){
    include 'views/cursos.php';
}
elseif($pagina == 'alunos'){
    include 'views/alunos.php';
}
elseif($pagina == 'matriculas'){
    include 'views/matriculas.php';
}
else{
include 'views/home.php';
}

# Rodapé
include 'footer.php';
