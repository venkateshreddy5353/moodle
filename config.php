<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('pgsql');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('ec2-54-75-231-215.eu-west-1.compute.amazonaws.com');
$CFG->dbname    = getenv('d3b8uh3inmki7h');
$CFG->dbuser    = getenv('dyeuagubkyjhyp');
$CFG->dbpass    = getenv('b4ba993ae975f4448102ff2557b8274675e2f0b47626c5051f43d5c8a1730848');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('5432'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('https://moodle-venki.herokuapp.com/');
$CFG->dataroot  = getenv('try /tmp');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
