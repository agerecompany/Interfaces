<?php

namespace Agere\Interfaces\Contract;

trait ProvidesContractService
{
    /** @var ContractServiceInterface $contractService */
    protected $contractService;

    /**
     * @param ContractServiceInterface $contractService
     */
    public function setContractService(ContractServiceInterface $contractService)
    {
        $this->contractService = $contractService;
    }

    /**
     * @return ContractServiceInterface
     */
    public function getContractService()
    {
        return $this->contractService;
    }
}