<?php

namespace App\Services;

use App\Repositories\Contracts\ShoeRepositoryInterface;
use App\Repositories\Contracts\OrderRepositoryInterface;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\Repositories\Contracts\PromoCodeRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facedes\Log;
use App\Models\ProductTransaction;

class OrderService 
{
    protected $categoryRepository;
    protected $promoCodeRepository;
    protected $orderRepository;
    protected $shoeRepository;

    public function __construct(PromoCodeRepositoryInterface $promoCodeRepository,
    CategoryRepositoryInterface $categoryRepository,
    OrderRepositoryInterface $orderRepository,
    ShoeRepositoryInterface $shoeRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->promoCodeRepository = $promoCodeRepository;
        $this->orderRepository = $orderRepository;
        $this->shoeRepository = $shoeRepository;
    }
}