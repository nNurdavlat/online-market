<?php

namespace App\Http\Middleware;

use App\Models\Customer;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class GenerateCustomerToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!isset($_COOKIE['customer_token'])){
            $uniqueId = Str::uuid();
            Customer::query()->create([
                'token' => $uniqueId
            ]);
            setcookie('customer_token', $uniqueId, time() + (86400 * 30), "/");
        }
        return $next($request);
    }
}
