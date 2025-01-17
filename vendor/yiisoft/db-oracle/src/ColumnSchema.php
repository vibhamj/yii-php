<?php

declare(strict_types=1);

namespace Yiisoft\Db\Oracle;

use Yiisoft\Db\Command\ParamInterface;
use Yiisoft\Db\Expression\Expression;
use Yiisoft\Db\Schema\ColumnSchema as AbstractColumnSchema;
use Yiisoft\Db\Schema\Schema;

use function is_string;
use function preg_replace;
use function uniqid;

/**
 * Class ColumnSchema for Oracle database
 */
final class ColumnSchema extends AbstractColumnSchema
{
    public function dbTypecast(mixed $value): mixed
    {
        if ($this->getType() === Schema::TYPE_BINARY && $this->getDbType() === 'BLOB') {
            if ($value instanceof ParamInterface && is_string($value->getValue())) {
                $value = (string) $value->getValue();
            }

            if (is_string($value)) {
                $placeholder = uniqid('exp_' . preg_replace('/[^a-z0-9]/i', '', $this->getName()));
                return new Expression('TO_BLOB(UTL_RAW.CAST_TO_RAW(:' . $placeholder . '))', [$placeholder => $value]);
            }
        }

        return parent::dbTypecast($value);
    }
}
