<?php

namespace Agere\Interfaces\Price;

/**
 * Interface PriceListServiceAwareInterface
 *
 * The Interface that describes the insertion an entity of PriceListServiceInterface (f.e. PriceListService)
 * into another service or class.
 *
 * @package Agere\Interfaces\Price
 */
interface PriceListServiceAwareInterface
{
    /**
     * @param PriceListServiceInterface $priceListService
     */
    public function setPriceListService(PriceListServiceInterface $priceListService);

    /**
     * @return PriceListServiceInterface
     */
    public function getPriceListService();
}