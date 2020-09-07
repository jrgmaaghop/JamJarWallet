<?php

namespace App\Http\Controllers\stripe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\StripeClient;

class StripeController extends Controller
{
    private $sk;

    public function __construct()
    {
        $this->sk = env('STRIPE_SECRET');
    }

    public function newStripeClient()
    {
        return new StripeClient($this->sk);
    }
}
