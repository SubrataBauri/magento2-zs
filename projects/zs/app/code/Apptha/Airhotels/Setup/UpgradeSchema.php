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
* */
namespace Apptha\Airhotels\Setup;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function upgrade(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $setup->startSetup();
        if (version_compare($context->getVersion(), "1.0.1", "<")) {
        /**
         * Create table 'airhotels_uploadvideo'
         */
        $table = $setup->getConnection()->newTable($setup->getTable('airhotels_uploadvideo'))
->addColumn('id',\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,null,['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],'airhotels_uploadvideo' )
->addColumn('image_url',\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,'64k',[],'image_url')
->addColumn('status',\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,null,['nullable' => false],'status')
->addColumn( 'created_at',\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP, null,['nullable' => false],'created_at')
->setComment('Apptha Airhotels airhotels_uploadvideo');
        $setup->getConnection()->createTable($table);
        }
        $setup->endSetup();
    }
}