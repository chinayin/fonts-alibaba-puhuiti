<?php

namespace Fonts\AlibabaPuHuiTi;

class FontsAlibabaPuHuiTi
{

    public static function getPath(): string
    {
        return self::useRegular();
    }

    public static function useBold(): string
    {
        return __DIR__ . '/Bold/Alibaba-PuHuiTi-Bold.ttf';
    }

    public static function useHeavy(): string
    {
        return __DIR__ . '/Heavy/Alibaba-PuHuiTi-Heavy.ttf';
    }

    public static function useLight(): string
    {
        return __DIR__ . '/Light/Alibaba-PuHuiTi-Light.ttf';
    }

    public static function useMedium(): string
    {
        return __DIR__ . '/Medium/Alibaba-PuHuiTi-Medium.ttf';
    }

    public static function useRegular(): string
    {
        return __DIR__ . '/Regular/Alibaba-PuHuiTi-Regular.ttf';
    }
}
