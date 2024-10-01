<?php

namespace PROJECT\Validation;

use PROJECT\Validation\Rules\AlphaNum;
use PROJECT\Validation\Rules\BetweenRule;
use PROJECT\Validation\Rules\MaxRule;
use PROJECT\Validation\Rules\RequireRule;

trait RuleMap
{
    protected static array $map = [
        'required' => RequireRule::class,
        'alphaNum' => AlphaNum::class,
        'max' => MaxRule::class,
        'between' => BetweenRule::class,
    ];

    public static function resolve(string $rule, $options)
    {
        return new static::$map[$rule](...$options);
    }
}
