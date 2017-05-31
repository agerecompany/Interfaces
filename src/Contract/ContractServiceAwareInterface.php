<?php

namespace Agere\Interfaces\Contract;

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