<?php

namespace Agere\Interfaces\Price;

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