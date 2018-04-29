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
 * @version     1.0
 * @author      Apptha Team <developers@contus.in>
 * @copyright   Copyright (c) 2017 Apptha. (http://www.apptha.com)
 * @license     http://www.apptha.com/LICENSE.txt
 *
 */
namespace Apptha\Airhotels\Controller\Adminhtml\Payments;

use Apptha\Airhotels\Controller\Adminhtml\Payments;

/**
 * This class contains host payments grid functionaity
 */
class Index extends Payments {
    /**
     *
     * @return void
     */
    public function execute() {
        /**
         * Checking for request query using ajax
         */
        if ($this->getRequest ()->getQuery ( 'ajax' )) {
            /**
             * To forward to grid controller
             */
            $this->_forward ( 'grid' );
            return;
        }
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->_resultPageFactory->create ();
        /**
         * To set active menu
         */
        $resultPage->setActiveMenu ( 'Apptha_Airhotels::main_menu' );
        /**
         * Setting title for host payments
         */
        $resultPage->getConfig ()->getTitle ()->prepend ( __ ( 'Manage Host Payments' ) );
        /**
         * Return result page
         */
        return $resultPage;
    }
}
