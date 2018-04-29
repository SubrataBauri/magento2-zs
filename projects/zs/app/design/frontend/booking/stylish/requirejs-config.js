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

var config = {
     map : {
          '*' : {
               'moment' : 'js/moment',
               'daterangepicker' : 'js/daterangepicker',
               'form-map' : 'js/form-map',
               'markerlabel' : 'js/markerlabel',
               'priceslider' : 'js/priceslider',
               'responsiveslides' : 'js/responsiveslides.min',
               'searchmap' : 'js/searchmap',
               'bootstrap' : 'js/bootstrap.bundle'
               

          }
     },
     "shim" : {
          "daterangepicker" : [ "jQuery" ],
          "form-map" : [ "jQuery" ],
          "markerlabel" : [ "jQuery" ],
          "priceslider" : [ "jQuery" ],
          "responsiveslides" : [ "jQuery" ],
          "searchmap" : [ "jQuery" ],
          "bootstrap" : [ "jQuery" ]
          
     }
};
