<?php namespace Buildateam\Testimonials\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        $table = $installer->getConnection()
            ->newTable($installer->getTable('testimonials'))
            ->addColumn('testimonials_id',Table::TYPE_INTEGER,10, ['identity' => true, 'nullable' => false, 'primary' => true], 'Testimonials ID')
            ->addColumn('customer_id', Table::TYPE_INTEGER, 10, ['nullable' => false, 'unsigned'=>true], 'Customer Id')
            ->addColumn('customer_name', Table::TYPE_TEXT, 255, ['nullable' => false], 'Customer Name')
            ->addColumn('testimonials', Table::TYPE_TEXT, '1M', ['nullable' => false], 'Testimonials Content')
            ->addColumn('creation_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Creation Time')
            ->addColumn('update_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Update Time')
            ->addForeignKey('testimonials_customer_fk', 'customer_id', 'customer_entity', 'entity_id', null)
            ->setComment('KenRod Testimonials Posts');

        $installer->getConnection()->createTable($table);
        $installer->endSetup();
    }

}
