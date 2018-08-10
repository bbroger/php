<?php

$json = '[{"nome":"Pedro","idade":19},{"nome":"Gluacio","idade":31}]';

$data = json_decode ($json, true);

var_dump ($data);

?>