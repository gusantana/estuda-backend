<?php

include_once(CLASSE_CORE_DIRETORIO . "Controller.php");
include_once(DIRETORIO_REPOSITORIO . "TurmaRepositorio.php");
include_once(DIRETORIO_MODEL . "Turma.php");

use repository\TurmaRepositorio;
use \core\Controller;
use models\Turma;

class TurmaController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $repositorio = new TurmaRepositorio();
        $id = $this->requisicao->get()['id'];

        $resultado = $repositorio->getPorId($id);
        return json_encode($resultado);
    }

    public function get()
    {
        $repositorio = new TurmaRepositorio();
        $id = $this->requisicao->get()['id'];
        $resultado = $repositorio->getPorId($id);
        return json_encode($resultado);
    }

    public function salvar()
    {
        $modelo = new Turma($this->requisicao->post());
        if ($modelo->validar()) {
            $repositorio = new TurmaRepositorio();
            $modelo = $repositorio->salvar($modelo);
        }
        return json_encode($modelo);
    }

    public function excluir()
    {
        $modelo = new Turma($this->requisicao->post());
        try {
            $repositorio = new TurmaRepositorio();
            return $repositorio->excluir($modelo);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function getPorEscola()
    {
        $repositorio = new TurmaRepositorio();
        $resultado = $repositorio->getPorFiltros($this->requisicao->get());
        return json_encode($resultado);
    }
}
