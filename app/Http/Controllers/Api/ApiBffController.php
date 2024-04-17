<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResource;
use Illuminate\Http\Request;

class ApiBffController extends Controller
{
    public function redirect(Request $request): \Symfony\Component\HttpFoundation\Response|ApiResource
    {
        $requestData = $request->all();
        $methods = [
            'GET',
            'POST',
            'PUT',
            'DELETE'
        ];
        $routes = [
            // GET
            'authorize_login' => 'api.authorize.login',
            'news_show' => 'api.news.show',
            // POST
            'news_store' => 'api.news.store',
            // PUT
            'news_update' => 'api.news.update',
            // DELETE
            'authorize_quit' => 'api.authorize.quit',
            'news_destroy' => 'api.news.destroy'
        ];
        if (isset($requestData['method']) && in_array($requestData['method'], $methods) &&
            isset($requestData['route']) && array_key_exists($requestData['route'], $routes)) {
            $route = $routes[$requestData['route']];
            try {
                // Перенаправляет запрос на указанный маршрут
                $newRequest = match ($requestData['method']) {
                    'GET' => Request::create(route($route), 'GET', $request->all()),
                    'POST' => Request::create(route($route), 'POST', $request->all()),
                    'PUT' => Request::create(route($route), 'PUT', $request->all()),
                    'DELETE' => Request::create(route($route), 'DELETE', $request->all()),
                    default => new ApiResource(null, 'status', 'Ошибка: не удалось определить маршрут.', 400)
                };
                return app()->handle($newRequest);
            } catch (\Exception) {
                return new ApiResource(null, 'status', 'Ошибка: не удалось определить тип запроса или маршрут.', 404);
            }
        } else {
            return new ApiResource(null, 'status', 'Ошибка: не удалось определить тип запроса или маршрут.', 404);
        }
    }
}
