<?php

namespace Axcel\Halo\Validators\Rules;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileRule
{
    public function validate(string $field, $value, ?string $ruleValue = null, array $data = []): ?string
    {
        return ($value instanceof UploadedFile && $value->isValid())
            ? null
            : ucfirst($field) . " upload failed.";
    }
}
