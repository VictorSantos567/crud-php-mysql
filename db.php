<?PHP

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "aula_php";

$conexao = mysqli_connect($servidor,$usuario,$senha,$database);

$query = "SELECT *FROM CURSOS";
$consulta_cursos = mysqli_query($conexao, $query);

$query = "SELECT *FROM ALUNOS";
$consulta_alunos = mysqli_query($conexao, $query);

$query = "SELECT ALUNOS.nome_aluno, CURSOS.nome_curso 
            FROM ALUNOS, CURSOS, ALUNOS_CURSOS 
            WHERE ALUNOS_CURSOS.id_aluno = ALUNOS.id_aluno 
            AND ALUNOS_CURSOS.id_curso = CURSOS.id_curso";
$consulta_matriculas = mysqli_query($conexao, $query);