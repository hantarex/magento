<?php
/**
 * Created by PhpStorm.
 * User: ashikov
 * Date: 29.11.2017
 * Time: 17:01
 */

namespace Learning\HelloWorld\Block;


class Display extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }

    public function sayHello()
    {
        return __('Hello World');
    }
}