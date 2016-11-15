<?php

namespace Comunicart\MinicartAddedProduct\Block;

class AddedProduct extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Magento\Checkout\Model\Session
     */
    protected $_checkoutSession;

    /**
     * AddedProduct constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Checkout\Model\Session $checkoutSession
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Checkout\Model\Session $checkoutSession,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_checkoutSession = $checkoutSession;
    }

    /**
     * @param bool $reset
     * @return bool
     */
    public function getProductHasBeenAdded($reset = true) {
        $value = (bool)$this->_checkoutSession->getProductHasBeenAdded();

        if ($reset) {
            $this->_checkoutSession->setProductHasBeenAdded(false);
        }

        return $value;
    }
}