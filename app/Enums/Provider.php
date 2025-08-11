<?php

namespace App\Enums;

enum Provider : string
{
    case Github = "github";

    case Twitter = "twitter";

    case Google = "google";

    static function values () : array {
        return array_map(
            fn (self $provider) => $provider->value,
            self::cases()
        );
    }

}
