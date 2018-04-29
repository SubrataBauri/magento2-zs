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
 * @version     1.2
 * @author      Apptha Team <developers@contus.in>
 * @copyright   Copyright (c) 2017 Apptha. (http://www.apptha.com)
 * @license     http://www.apptha.com/LICENSE.txt
 *
 */
namespace Apptha\Airhotels\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Dateformat extends \Magento\Framework\App\Helper\AbstractHelper {
     /**
      * Get Date format value
      */
     const XML_DATE_FORMAT = 'airhotels/date_format/listing_date_format';

     /**
     * Demo Store Notice value.
     */
     const XML_DEMO_STORE_NOTICE = 'design/head/demonotice';
     
     /**
      *
      * @var \Magento\Framework\App\Config\ScopeConfigInterface
      */
     protected $scopeConfig;
     public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig) {
          $this->scopeConfig = $scopeConfig;
     }
     /**
      * Function to get the date format
      *
      * @return string
      */
     public function getListingDateFormat() {
          $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
          return $this->scopeConfig->getValue ( static::XML_DATE_FORMAT, $storeScope );
     }
     
     /**
      * Function to get the date format
      *
      * @return string
      */
     public function getConvertedDateFormat($listingDateFormat) {
          $_listingDateFormat = $listingDateFormat;
          
          switch ($_listingDateFormat) {
               case "MM/DD/YYYY" :
                    $convertedDate = "MMM DD YYYY";
                    break;
               case "MM/YYYY/DD" :
                    $convertedDate = "MMM YYYY DD";
                    break;
               case "DD/MM/YYYY" :
                    $convertedDate = "DD MMM YYYY";
                    break;
               case "DD/YYYY/MM" :
                    $convertedDate = "DD YYYY MMM";
                    break;
               case "YYYY/DD/MM" :
                    $convertedDate = "YYYY DD MMM";
                    break;
               default :
                    $convertedDate = "YYYY MMM DD";
          }
          return $convertedDate;
     }
     /**
      * Function to get the date format for php date convert
      *
      * @return string
      */
     public function getConvertedDate($listingDateFormat) {
          $_listingDateFormat = $listingDateFormat;
          
          switch ($_listingDateFormat) {
               case "MM/DD/YYYY" :
                    $convertedDate = "M d Y";
                    break;
               case "MM/YYYY/DD" :
                    $convertedDate = "M Y d";
                    break;
               case "DD/MM/YYYY" :
                    $convertedDate = "d M Y";
                    break;
               case "DD/YYYY/MM" :
                    $convertedDate = "d Y M";
                    break;
               case "YYYY/DD/MM" :
                    $convertedDate = "Y d M";
                    break;
               default :
                    $convertedDate = "Y M d";
          }
          return $convertedDate;
     }
     /**
      * Function to get the search dates and converted into "m d y" formatted string.
      *
      * @return string
      */
     public function searchDateFormat($date) {
          $_date = $date;
          $formattedDates =  $m = $d = $y = NULL;
          $formatedDate = explode ( " ", $_date );
          $countFormatedDate = count ($formatedDate) ;
          for($i = 0; $i < $countFormatedDate; $i ++) {
               if (strlen ( $formatedDate [$i] ) == 3) {
                    $m = $formatedDate [$i];
               }
               if (strlen ( $formatedDate [$i] ) == 2 || strlen ( $formatedDate [$i] ) == 1) {
                    $d = $formatedDate [$i];
               }
               if (strlen ( $formatedDate [$i] ) == 4) {
                    $y = $formatedDate [$i];
               }
          }
          $formattedDates = $m . ' ' . $d . ' ' . $y;
          return date ( "Y-m-d", strtotime ( $formattedDates ) );
     }
     
     /**
      * Function to get the schedule dates and converted into date as per datepicker formatted string.
      *
      * @return string
      */
     public function datepickerFormat($listingDateFormat) {
          $_listingDateFormat = $listingDateFormat;
          
          switch ($_listingDateFormat) {
               case "MM/DD/YYYY" :
                    $datePickerFormat = "M dd yy";
                    break;
               case "MM/YYYY/DD" :
                    $datePickerFormat = "M yy dd";
                    break;
               case "DD/MM/YYYY" :
                    $datePickerFormat = "dd M yy";
                    break;
               case "DD/YYYY/MM" :
                    $datePickerFormat = "dd yy M";
                    break;
               case "YYYY/DD/MM" :
                    $datePickerFormat = "yy dd M";
                    break;
               default :
                    $datePickerFormat = "yy M dd";
          }
       return $datePickerFormat;        
     }

    /**
     * Check if demo store notice should be displayed
     *
     * @return boolean
     */
   public function displayDemoNotice()
   { 
     $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
       return $this->scopeConfig->getValue ( static::XML_DEMO_STORE_NOTICE, $storeScope);
   }

}