<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\JsonResponse;

class AccessLog
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        $method = $request->getMethod();
        $uri = $request->getRequestUri();
        $status = $response->getStatusCode();
        $ip = $request->ip();
        $requestData = json_encode($request->except(['password', 'old_password', 'new_password', 'pin', 'old_pin', 'new_pin']));

        if ($response instanceof JsonResponse) {
            $responseData = $response->getData(true);
            if (isset($responseData['message'])) {
                if (is_array($responseData['message'])) {
                    $responseMessage = json_encode($responseData['message']);
                } else {
                    $responseMessage = $responseData['message'];
                }
            } else {
                $responseMessage = 'Message key not set in response';
            }
        } else {
            $responseMessage = 'Response is not a JSON response';
        }

        Log::channel('daily_access')->info("ACCESS LOG: {$ip}, {$method}, {$uri}, {$status}, {$requestData} => {$responseMessage}");

        return $response;
    }
}
