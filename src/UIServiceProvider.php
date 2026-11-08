<?php

namespace SnakeWolf\UI;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class UIServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // 1. Bladeビューの読み込みパス（packages/ui/src/views を 'snakewolf' プレフィックスとして登録）
        $this->loadViewsFrom(__DIR__ . '/views', 'snakewolf');

        // 2. コンポーネントのプレフィックス登録（<x-snakewolf-button /> のように使えるようにする）
        Blade::componentNamespace('SnakeWolf\\UI\\View\\Components', 'snakewolf');
    }
}
