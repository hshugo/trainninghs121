<?php

namespace Learning\HelloPage\Plugin;

class ExamplePlugin{

    public function beforeSetTitle(\Learning\HelloPage\Controller\Index\Example $subject, $title)
    {
        $title = $title . " to ";
        echo __METHOD__ . "</br>";

        return [$title];
    }

    public function afterSetTitle(\Learning\HelloPage\Controller\Index\Example $subject, $result)
    {
        echo __METHOD__ . "</br>";

        return '<h1>'. $result . 'Mageplaza.com' .'</h1>';
    }

}
