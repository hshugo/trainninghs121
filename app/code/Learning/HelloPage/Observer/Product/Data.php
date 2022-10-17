<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Learning\HelloPage\Observer\Product;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class Data implements ObserverInterface
{
    public function __construct()
    {
        // Observer initialization code...
        // You can use dependency injection to get any class this observer may need.
    }
    /**
     * Below is the method that will fire whenever the event runs!
     *
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        // Additional observer execution code...
        $product = $observer->getProduct();
        $originalName = $product->getName();
        $modifiedName = $originalName . ' - OK Modified by Magento 2 Events and Observers';
        $product->setName($modifiedName);
    }
}
