<?php

class MyTest_Custom_Model_Resource_Custom extends Mage_Core_Model_Mysql4_Abstract
{

    public function _construct()
    {
        $this->_init('mytestcustom/table_custom', 'id');
    }

}