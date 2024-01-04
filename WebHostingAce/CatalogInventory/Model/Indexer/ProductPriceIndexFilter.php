<?php
namespace WebHostingAce\CatalogInventory\Model\Indexer;

use Magento\Catalog\Model\ResourceModel\Product\Indexer\Price\IndexTableStructure;

class ProductPriceIndexFilter extends \Magento\CatalogInventory\Model\Indexer\ProductPriceIndexFilter
{
    public function modifyPrice(IndexTableStructure $priceTable, array $entityIds = []) : void
    {
        return;
    }
}
