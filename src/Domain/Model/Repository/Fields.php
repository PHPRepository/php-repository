<?php

/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 9/01/16
 * Time: 15:30.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace NilPortugues\Foundation\Domain\Model\Repository;

use NilPortugues\Foundation\Domain\Model\Repository\Contracts\Fields as FieldsInterface;
use NilPortugues\Foundation\Domain\Model\Repository\Traits\Nullable;

/**
 * Class Fields.
 */
class Fields implements FieldsInterface
{
    use Nullable;

    /**
     * @var array
     */
    private $fields = [];

    /**
     * Fields constructor.
     *
     * @param array $fields
     */
    public function __construct(array $fields = [])
    {
        $this->fields = $fields;
    }

    /**
     * @param string $field
     */
    public function add(string $field)
    {
        $this->fields[] = (string) $field;
    }

    /**
     * @return array
     */
    public function get(): array
    {
        return (array) $this->fields;
    }
}
