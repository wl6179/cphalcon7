<?php 

namespace Phalcon\Db\Dialect {

	/**
	 * Phalcon\Db\Dialect\Postgresql
	 *
	 * Generates database specific SQL for the PostgreSQL RBDMS
	 */
	
	class Postgresql extends \Phalcon\Db\Dialect implements \Phalcon\Db\DialectInterface {

		protected $_escapeChar;

		/**
		 * Gets the column name in PostgreSQL
		 *
		 * @param \Phalcon\Db\ColumnInterface $column
		 * @return string
		 */
		public function getColumnDefinition($column){ }


		/**
		 * Generates SQL to add a column to a table
		 *
		 * @param string $tableName
		 * @param string $schemaName
		 * @param \Phalcon\Db\ColumnInterface $column
		 * @return string
		 */
		public function addColumn($tableName, $schemaName, $column){ }


		/**
		 * Generates SQL to modify a column in a table
		 *
		 * @param string $tableName
		 * @param string $schemaName
		 * @param \Phalcon\Db\ColumnInterface $column
		 * @param \Phalcon\Db\ColumnInterface $currentColumn
		 * @return string
		 */
		public function modifyColumn($tableName, $schemaName, $column, $currentColumn=null){ }


		/**
		 * Generates SQL to delete a column from a table
		 *
		 * @param string $tableName
		 * @param string $schemaName
		 * @param string $columnName
		 * @return 	string
		 */
		public function dropColumn($tableName, $schemaName, $columnName){ }


		/**
		 * Generates SQL to add an index to a table
		 *
		 * @param string $tableName
		 * @param string $schemaName
		 * @param \Phalcon\Db\Index $index
		 * @return string
		 */
		public function addIndex($tableName, $schemaName, $index){ }


		/**
		 * Generates SQL to delete an index from a table
		 *
		 * @param string $tableName
		 * @param string $schemaName
		 * @param string $indexName
		 * @return string
		 */
		public function dropIndex($tableName, $schemaName, $indexName){ }


		/**
		 * Generates SQL to add the primary key to a table
		 *
		 * @param string $tableName
		 * @param string $schemaName
		 * @param \Phalcon\Db\Index $index
		 * @return string
		 */
		public function addPrimaryKey($tableName, $schemaName, $index){ }


		/**
		 * Generates SQL to delete primary key from a table
		 *
		 * @param string $tableName
		 * @param string $schemaName
		 * @return string
		 */
		public function dropPrimaryKey($tableName, $schemaName){ }


		/**
		 * Generates SQL to add an index to a table
		 *
		 * @param string $tableName
		 * @param string $schemaName
		 * @param \Phalcon\Db\ReferenceInterface $reference
		 * @return string
		 */
		public function addForeignKey($tableName, $schemaName, $reference){ }


		/**
		 * Generates SQL to delete a foreign key from a table
		 *
		 * @param string $tableName
		 * @param string $schemaName
		 * @param string $referenceName
		 * @return string
		 */
		public function dropForeignKey($tableName, $schemaName, $referenceName){ }


		/**
		 * Generates SQL to add the table creation options
		 *
		 * @param array $definition
		 * @return array
		 */
		protected function _getTableOptions(){ }


		/**
		 * Generates SQL to create a table in PostgreSQL
		 *
		 * @param 	string $tableName
		 * @param string $schemaName
		 * @param array $definition
		 * @return 	string
		 */
		public function createTable($tableName, $schemaName, $definition){ }


		/**
		 * Generates SQL to drop a table
		 *
		 * @param  string $tableName
		 * @param  string $schemaName
		 * @param  boolean $ifExists
		 * @return boolean
		 */
		public function dropTable($tableName, $schemaName){ }


		/**
		 * Generates SQL to create a view
		 *
		 * @param string $viewName
		 * @param array $definition
		 * @param string $schemaName
		 * @return string
		 */
		public function createView($viewName, $definition, $schemaName){ }


		/**
		 * Generates SQL to drop a view
		 *
		 * @param string $viewName
		 * @param string $schemaName
		 * @param boolean $ifExists
		 * @return string
		 */
		public function dropView($viewName, $schemaName, $ifExists=null){ }


		/**
		 * Generates SQL checking for the existence of a schema.table
		 *
		 * <code>echo $dialect->tableExists("posts", "blog")</code>
		 * <code>echo $dialect->tableExists("posts")</code>
		 *
		 * @param string $tableName
		 * @param string $schemaName
		 * @return string
		 */
		public function tableExists($tableName, $schemaName=null){ }


		/**
		 * Generates SQL checking for the existence of a schema.view
		 *
		 * @param string $viewName
		 * @param string $schemaName
		 * @return string
		 */
		public function viewExists($viewName, $schemaName=null){ }


		/**
		 * Generates a SQL describing a table
		 *
		 * <code>print_r($dialect->describeColumns("posts") ?></code>
		 *
		 * @param string $table
		 * @param string $schema
		 * @return string
		 */
		public function describeColumns($table, $schema=null){ }


		/**
		 * Generates SQL list all tables on database
		 *
		 *<code>
		 *	print_r($dialect->listTables("blog")) ?>
		 *</code>
		 *
		 * @param string $schemaName
		 * @return string
		 */
		public function listTables($schemaName=null){ }


		/**
		 * Generates the SQL to list all views of a schema or user
		 *
		 * @param string $schemaName
		 * @return string
		 */
		public function listViews($schemaName=null){ }


		/**
		 * Generates SQL to query indexes on a table
		 *
		 * @param string $table
		 * @param string $schema
		 * @return string
		 */
		public function describeIndexes($table, $schema=null){ }


		/**
		 * Generates SQL to query foreign keys on a table
		 *
		 * @param string $table
		 * @param string $schema
		 * @return string
		 */
		public function describeReferences($table, $schema=null){ }


		/**
		 * Generates the SQL to describe the table creation options
		 *
		 * @param string $table
		 * @param string $schema
		 * @return string
		 */
		public function tableOptions($table, $schema=null){ }


		/**
		 * Return the default value
		 *
		 * @param string $defaultValue
		 * @param string $columnDefinition
		 * @return string
		 */
		public function getDefaultValue($defaultValue, $columnType){ }

	}
}
