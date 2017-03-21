<?php

namespace Agere\Interfaces\Price;

trait ProvidesPriceListService
{
    /** @var PriceListServiceInterface $priceListService */
    protected $priceListService;

    /**
     * @param PriceListServiceInterface $priceListService
     */
    public function setPriceListService(PriceListServiceInterface $priceListService)
    {
        $this->priceListService = $priceListService;
    }

    public function getPriceListService()
    {
        return $this->priceListService;
    }
}