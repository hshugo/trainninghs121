<?php

namespace CompanyExtension\Customer\Block;
use Magento\Framework\Session\SessionManagerInterface;
use Magento\Framework\Pricing\Amount\AmountInterface;
use Magento\Framework\Pricing\SaleableInterface;
use Magento\Framework\Pricing\Price\PriceInterface;
use Magento\Framework\Pricing\PriceCurrencyInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\Pricing\Render;
use Magento\Customer\Model\Session;

class ExtensionClass extends  \Magento\Framework\Pricing\Render\Amount {
    /**
     * @var SaleableInterface
     */
    protected $saleableItem;

    /**
     * @var PriceInterface
     */
    protected $price;

    /**
     * @var AdjustmentRenderInterface[]
     */
    protected $adjustmentRenders;

    /**
     * @var PriceCurrencyInterface
     */
    protected $priceCurrency;

    /**
     * @var RendererPool
     */
    protected $rendererPool;

    /**
     * @var AmountInterface
     */
    protected $amount;

    protected $customerSession;
    
    /**
     * @param Template\Context $context
     * @param AmountInterface $amount
     * @param PriceCurrencyInterface $priceCurrency
     * @param Render\RendererPool $rendererPool
     * @param SaleableInterface $saleableItem
     * @param \Magento\Framework\Pricing\Price\PriceInterface $price
     * @param array $data
     */
    public function __construct(
        \Magento\Customer\Model\Session $customerSession,
        Template\Context $context,
        AmountInterface $amount,
        PriceCurrencyInterface $priceCurrency,
        Render\RendererPool $rendererPool,
        SaleableInterface $saleableItem = null,
        PriceInterface $price = null,
        array $data = [],
    ) {
        parent::__construct($context, $amount, $priceCurrency, $rendererPool, $saleableItem, $price, $data);
        $this->amount = $amount;
        $this->saleableItem = $saleableItem;
        $this->price = $price;
        $this->priceCurrency = $priceCurrency;
        $this->rendererPool = $rendererPool;
        $this->customerSession = $customerSession;
    }   
    
    
    public function getWelcomeText()
    {   
        $user="Email: ";
        if ($this->customerSession->isLoggedIn()) { 
            $user.= $this->customerSession->getCustomer()->getEmail(); 
        }
        return $user;
    }
}