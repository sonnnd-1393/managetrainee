<?php

namespace App\Services;

use App\Repo\HomeServiceInterface;

class HomeServices extends BaseService
{
    /**
     * @var \App\Repo\BillingRepositoryInterface
     */
    protected $repoHome;

    public function __construct(
        BillingRepositoryInterface $repoHome
    )
    {
        $this->repoHome = $repoHome;
    }

    
}
