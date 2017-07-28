<?php
namespace models;

/* Using the base AppTable to extend it and  inherit table functionality
*  Default action in this controller
*  @author berkaPhp
*/

use berkaPhp\database\table\AppTable;

class Feature_pricesTable extends AppTable
{
	function __construct() {

        /* Initializing the parent table
        *  @param current table name
        *  @author berkaPhp
        */

		parent::__construct('feature_prices');

		/* Initializing the primary key for this  table
        *  @author berkaPhp
        */

		$this->primary_key = 'price_id';
	}
}
?>