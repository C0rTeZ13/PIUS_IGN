<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

    public function redirect_auth_login(Request $request): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
    {
        $requestData = [
            "username" => $request->input("username"),
            "password" => $request->input("password"),
            "token" => $request->input("token")
        ];
        return Http::get('http://127.0.0.1:8000/api/authorize', $requestData);
    }

    public function redirect_auth_quit(Request $request): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
    {
        $requestData = [
            "token" => $request->input("token")
        ];
        return Http::delete('http://127.0.0.1:8000/api/authorize', $requestData);
    }

    public function redirect_news_store(Request $request): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
    {
        $requestData = [
            "title" => $request->input("title"),
            "content" => $request->input("content"),
            "token" => $request->input("token")
        ];
        return Http::post('http://127.0.0.1:8000/api/news', $requestData);
    }

    public function redirect_news_show(Request $request): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
    {
        $requestData = [
            "token" => $request->input("token"),
            "cursor" => $request->input("cursor")
        ];
        return Http::get('http://127.0.0.1:8000/api/news', $requestData);
    }

    public function redirect_news_update(Request $request): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
    {
        $requestData = [
            "title" => $request->input("title"),
            "content" => $request->input("content"),
            "img" => $request->input("img"),
            "id" => $request->input("id"),
            "token" => $request->input("token")
        ];
        return Http::put('http://127.0.0.1:8000/api/news', $requestData);
    }

    public function redirect_news_destroy(Request $request): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
    {
        $requestData = [
            "id" => $request->input("id"),
            "token" => $request->input("token")
        ];
        return Http::delete('http://127.0.0.1:8000/api/news', $requestData);
    }
}
