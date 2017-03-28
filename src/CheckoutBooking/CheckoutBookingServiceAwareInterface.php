<?php

namespace Agere\Interfaces\CheckoutBooking;

interface CheckoutBookingServiceAwareInterface
{
    /**
     * @param CheckoutBookingServiceInterface $checkoutBookingService
     */
    public function setCheckoutBookingService(CheckoutBookingServiceInterface $checkoutBookingService);

    /**
     * @return CheckoutBookingServiceInterface
     */
    public function getCheckoutBookingService();
}