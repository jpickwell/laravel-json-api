<?php

namespace CloudCreativity\LaravelJsonApi\Queue;

use CloudCreativity\LaravelJsonApi\Exceptions\RuntimeException;
use CloudCreativity\LaravelJsonApi\Validation\AbstractValidators;

class ClientJobValidators extends AbstractValidators
{

    /**
     * @var array
     */
    protected $allowedIncludePaths = ['resource'];

    /**
     * @inheritDoc
     */
    protected function rules($record = null): array
    {
        throw new RuntimeException('Not implemented.');
    }

    /**
     * @inheritDoc
     */
    protected function queryRules(): array
    {
        return [];
    }


}