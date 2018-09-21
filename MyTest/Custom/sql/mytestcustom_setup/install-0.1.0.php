<?php

#die('MyTest Custom module setup');

$installer = $this;
$tableCustom = $installer->getTable('mytestcustom/table_custom');

#die($tableCustom);

$installer->startSetup();

$installer->getConnection()->dropTable($tableCustom);
$table = $installer->getConnection()
    ->newTable($tableCustom)
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'nullable'  => false,
        'primary'   => true,
    ))
    ->addColumn('title', Varien_Db_Ddl_Table::TYPE_TEXT, '255', array(
        'nullable'  => false,
    ))
    ->addColumn('content', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => false,
    ))
    ->addColumn('created', Varien_Db_Ddl_Table::TYPE_DATETIME, null, array(
        'nullable'  => false,
    ));
$installer->getConnection()->createTable($table);

$installer->endSetup();
