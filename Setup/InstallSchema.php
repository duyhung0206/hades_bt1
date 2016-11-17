<?php

/**
 * Magestore
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magestore.com license that is
 * available through the world-wide-web at this URL:
 * http://www.magestore.com/license-agreement.html
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Magestore
 * @package     Magestore_Membership
 * @copyright   Copyright (c) 2012 Magestore (http://www.magestore.com/)
 * @license     http://www.magestore.com/license-agreement.html
 */

namespace Magestore\Student\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Adapter\AdapterInterface;

/**
 * class InstallSchema
 *
 * @category Magestore
 * @package  Magestore_Student
 * @module   Student
 * @author   Magestore Developer
 */
class InstallSchema implements InstallSchemaInterface
{
    const TABLE_STUDENT = 'student';

    /**
     * {@inheritdoc}
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        /**
         * Drop table if exist
         */

        $installer->getConnection()->dropTable($installer->getTable(self::TABLE_STUDENT));

        $installer->startSetup();

        /*
         * Create table student
         */
        $table = $installer->getConnection()->newTable(
            $installer->getTable(self::TABLE_STUDENT)
        )->addColumn(
            'student_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'Student Id'
        )->addColumn(
            'student_fullname',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            ['nullable' => false, 'default' => ''],
            'Student Full Name'
        )->addColumn(
            'student_class',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            ['nullable' => false, 'default' => ''],
            'Student Class'
        )->addColumn(
            'student_university',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            ['nullable' => false, 'default' => ''],
            'Student University'
        )->setComment(
            'Student Information'
        );

        $installer->getConnection()->createTable($table);

        $installer->endSetup();
    }
}
