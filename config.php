<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'sql304.byetcluster.com';
$CFG->dbname    = 'b18_31039536_522';
$CFG->dbuser    = '31039536_1';
$CFG->dbpass    = 'k9y94.Spw-';
$CFG->prefix    = 'mdlxb_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8_general_ci',
);

$CFG->wwwroot   = 'http://estancias.byethost18.com/online';
$CFG->dataroot  = '/home/vol2_1/byethost18.com/b18_31039536/htdocs/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
