<?php

class MyTest_Custom_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function saveAction()
    {
        if ($data = $this->getRequest()->getPost()) {
            try {
                $model = Mage::getModel('mytestcustom/custom');
                $model->setData($data);
                $model->save();
            } catch (Exception $e) {

            }
            $this->_redirect('*/*/');
        }
    }

}