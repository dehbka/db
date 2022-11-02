<?php

declare(strict_types=1);

namespace Yiisoft\Db\Tests\QueryBuilder\Conditions;

use PHPUnit\Framework\TestCase;
use Yiisoft\Db\QueryBuilder\Conditions\AndCondition;

/**
 * @group db
 */
final class AndConditionsTest extends TestCase
{
    public function testConstructor(): void
    {
        $andCondition = new AndCondition(['a' => 1, 'b' => 2]);

        $this->assertSame(['a' => 1, 'b' => 2], $andCondition->getExpressions());
    }

    public function testGetOperator(): void
    {
        $andCondition = new AndCondition(['a' => 1, 'b' => 2]);

        $this->assertSame('AND', $andCondition->getOperator());
    }
}
