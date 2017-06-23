<?php

namespace Agere\Interfaces\Product;

/**
 * Interface ProductServiceAwareInterface
 *
 * The Interface that describes the insertion an entity of ProductServiceInterface (f.e. ProductService)
 * into another service or class.
 *
 * @package Agere\Interfaces\Product
 */
interface ProductServiceAwareInterface
{
    /**
     * @param ProductServiceInterface $productService
     */
    public function setProductService(ProductServiceInterface $productService);

    /**
     * @return ProductServiceInterface
     */
    public function getProductService();
}