<?php

namespace Agere\Interfaces\Product;

trait ProvidesProductServiceTrait
{
    /** @var ProductServiceInterface $productService */
    protected $productService;

    /**
     * @param ProductServiceInterface $productService
     */
    public function setProductService(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function getProductService()
    {
        return $this->productService;
    }
}