<?php

namespace Agere\Interfaces\CheckoutBooking;

trait ProvidesCheckoutBookingService
{
    protected $checkoutBookingService;

    /**
     * @param CheckoutBookingServiceInterface $checkoutBookingService
     */
    public function setCheckoutBookingService(CheckoutBookingServiceInterface $checkoutBookingService)
    {
        $this->checkoutBookingService = $checkoutBookingService;
    }

    /**
     * @return CheckoutBookingServiceInterface
     */
    public function getCheckoutBookingService()
    {
        return $this->checkoutBookingService;
    }
}