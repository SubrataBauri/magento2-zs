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
namespace Apptha\Airhotels\Controller\Index;
 
 
class Index extends \Magento\Cms\Controller\Index\Index
{
    public function execute(){
         $objectManager = \Magento\Framework\App\ObjectManager::getInstance ();
         $airhotelsKey = $objectManager->get ( 'Apptha\Airhotels\Helper\Product' )->AirhotelsKey();
         /**
          * Make sure the Airhotels key is not empty
          */
         if ($airhotelsKey != '') {
              /**
               * Notification Message
               */
              $msg = $airhotelsKey;
              /**
               * Set the Response Values to Body
              */
              $this->getResponse()->setBody ( $msg );
         } else {
              return  parent::execute();
         }
    }
}