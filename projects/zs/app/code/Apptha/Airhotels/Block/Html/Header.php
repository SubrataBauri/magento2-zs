<?php
/**
 * Apptha
*
* NOTICE OF LICENSE
*
* This source file is subject to the EULA
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://www.apptha.com/LICENSE.txt
*
* ==============================================================
*                 MAGENTO EDITION USAGE NOTICE
* ==============================================================
* This package designed for Magento COMMUNITY edition
* Apptha does not guarantee correct work of this extension
* on any other Magento edition except Magento COMMUNITY edition.
* Apptha does not provide extension support in case of
* incorrect edition usage.
* ==============================================================
*
* @category    Apptha
* @package     Apptha_Airhotels
* @version     1.0.0
* @author      Apptha Team <developers@contus.in>
* @copyright   Copyright (c) 2017 Apptha. (http://www.apptha.com)
* @license     http://www.apptha.com/LICENSE.txt
*
*/
namespace Apptha\Airhotels\Block\Html;
class Header extends \Magento\Framework\View\Element\Template{
    /**
     * Get current customer details
     * @var object
     */
    protected $customerSession;
    /**
     * __construct to load the model collection
     * @param \Magento\Customer\Model\Session $customerSession
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(\Magento\Customer\Model\Session $customerSession,
            \Magento\Framework\View\Element\Template\Context $context,
            array $data = []){
                $this->customerSession = $customerSession;
                parent::__construct($context,$data);
    }
    
    /**
     * To get the current customer collection
     * @return object
     */
    public function getCustomerData(){
        return $this->customerSession;
    }
    
    /**
     * To get the listing page url
     * @return string
     */
    public function getListingUrl(){
        return $this->getUrl('airhotels/listing/form');
    }
    
    /**
     * To get the customer login url
     * @return string
     */
    public function getCustomerLogin(){
        return $this->getUrl('customer/account/login');
    }
    
    /**
     * To get customer signup url
     * @return string
     */
    public function getCustomerSignUp(){
        return $this->getUrl('customer/account/create');
    }
    
    /**
     * To get account dashboard url
     * @return string
     */
    public function getAccountDashboard(){
        return $this->getUrl('customer/account');
    }
    
}
