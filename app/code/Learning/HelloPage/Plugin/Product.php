<?php

namespace Learning\HelloPage\Plugin;

class Product{

    public function beforeSetSku(\Magento\Catalog\Model\Product $subject, $sku)
    {
        // var_dump($sku);
        //$result = "CHANGED SKU:" ;
        return ['(' . $sku . ')'];
    }

    public function afterSetSku(\Magento\Catalog\Model\Product $subject, $sku)
    {
        // var_dump($sku);
        //$result = "CHANGED SKU:" ;
        return '(' . $sku . ')';
    }

    public function beforeGetSku(\Magento\Catalog\Model\Product $subject)
    {
        $sku =$subject->getTypeInstance()->getSku($subject);
        return ['15233'] ;
    }

    public function afterGetSku(\Magento\Catalog\Model\Product $subject, $sku)
    {
        // ERROR IN BACK return 'INFO SKU:!!!'.$sku ;
        return $sku ;
    }

    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $result + 100000;
    }
    public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name)
    {   echo "ANTES DE SET:".$name;
        return ['ANTES DE SETEAR EL NOMBRE' . $name];
    }
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        return 'NAME OR TITLE: -->' . $result;
    }
}
