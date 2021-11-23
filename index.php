<?php

const CORE_PASTA = "core";
const CONTROLLER_PASTA = "controller";
const MODELS_PASTA = "models";
const REPOSITORIO_PASTA = "repository";

define('SELF', pathinfo(__FILE__, PATHINFO_FILENAME));

define('CORE_DIRETORIO', dirname(__FILE__).DIRECTORY_SEPARATOR.CORE_PASTA);
define('CLASSE_CORE_DIRETORIO', dirname(__FILE__).DIRECTORY_SEPARATOR.'class'.DIRECTORY_SEPARATOR);
define('INTERFACE_CORE_DIRETORIO', dirname(__FILE__).DIRECTORY_SEPARATOR.'interface'.DIRECTORY_SEPARATOR);

define('SISTEMA_DIRETORIO', dirname(__FILE__).DIRECTORY_SEPARATOR);

define('CONTROLADOR_DIRETORIO', dirname(__FILE__).DIRECTORY_SEPARATOR.CONTROLLER_PASTA);
define('MODEL_DIRETORIO', dirname(__FILE__).DIRECTORY_SEPARATOR.MODELS_PASTA);
define('REPOSITORIO_DIRETORIO', dirname(__FILE__).DIRECTORY_SEPARATOR.REPOSITORIO_PASTA);

define('SYS_DIR', basename(CORE_DIRETORIO));

ini_set("allow_url_fopen", true);

require './core/Core.php';