<?php

include_once 'database.php';

class Producto extends Database{

    private $paginaActual;
    private $totalPaginas;
    private $nResultados;
    private $resultadosPorPagina;
    private $indice;

    function __construct($nPorPagina){
        parent::__construct();

        $this->resultadosPorPagina = $nPorPagina;
        $this->indice = 0;
        $this->paginaActual = 1;

        $this->calcularPaginas();
    }

    


    

    function mostrarProducto(){
        $query = $this->connect()->prepare('SELECT * FROM producto LIMIT :pos, :n');    
        $query->execute(['pos' => $this->indice, 'n' => $this->resultadosPorPagina]);
        
        foreach ($query as $producto) {
            include 'vista_producto.php';
        }
    }

    function calcularPaginas(){
        $queryTotalResultados = $this->connect()->query('SELECT COUNT(*) AS total FROM producto');
        $this->nResultados = $queryTotalResultados->fetch(PDO::FETCH_OBJ)->total; 
        $this->totalPaginas = $this->nResultados / $this->resultadosPorPagina;

        if(isset($_GET['pagina'])){
            $this->paginaActual = $_GET['pagina'];
            $this->indice = ($this->paginaActual - 1) * $this->resultadosPorPagina;
        }
    }

    function mostrarPaginas(){
        $actual = '';
        echo "<ul>";

        for($i=0; $i < $this->totalPaginas; $i++){
            if(($i + 1) == $this->paginaActual){
                $actual = ' class="actual" ';
            }else{
                $actual = '';
            }
            echo '<li><a ' .$actual . 'href="?pagina='. ($i + 1). '">'. ($i + 1) . '</a></li>';
        }
        echo "</ul>";
    }

    function mostrarTotalResultados(){
        return $this->nResultados;
    }
}

?>