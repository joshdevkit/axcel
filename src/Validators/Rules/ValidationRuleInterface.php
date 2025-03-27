<?php

namespace Axcel\Halo\Validators\Rules;

interface ValidationRuleInterface
{
    public function validate(string $field, $value, ?string $ruleValue = null, array $data = []): ?string;
}
