<?php

namespace CompanyExtension\Customer\Controller\Index;

class ActionName extends \Magento\Framework\App\Action\Action
{
     public function execute()
     {
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}