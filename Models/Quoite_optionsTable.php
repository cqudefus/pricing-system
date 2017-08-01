<?php
namespace models;

/* Using the base AppTable to extend it and  inherit table functionality
*  Default action in this controller
*  @author berkaPhp
*/

use berkaPhp\database\table\AppTable;

class Quoite_optionsTable extends AppTable
{
	function __construct() {

        /* Initializing the parent table
        *  @param current table name
        *  @author berkaPhp
        */

		parent::__construct('quoite_options');

		/* Initializing the primary key for this  table
        *  @author berkaPhp
        */

		$this->primary_key = 'qo_id';
	}
}
?>