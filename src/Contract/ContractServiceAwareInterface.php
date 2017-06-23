<?php

namespace Agere\Interfaces\Contract;

/**
 * Interface ContractServiceAwareInterface
 *
 * The Interface that describes the insertion an entity of ContractServiceInterface (f.e. ContractService)
 * into another service or class.
 *
 * @package Agere\Interfaces\Contract
 */
interface ContractServiceAwareInterface
{
    /**
     * @param ContractServiceInterface $contractService
     */
    public function setContractService(ContractServiceInterface $contractService);

    /**
     * @return ContractServiceInterface
     */
    public function getContractService();
}