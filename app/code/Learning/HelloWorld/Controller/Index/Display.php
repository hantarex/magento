<?php
/**
 * Created by PhpStorm.
 * User: ashikov
 * Date: 29.11.2017
 * Time: 16:50
 */

namespace Learning\HelloWorld\Controller\Index;


class Display extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        return $this->_pageFactory->create();
    }
}