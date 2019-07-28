<?php
declare(strict_types=1);

namespace Yireo\ExampleWidget\Block;

use Magento\Framework\View\Element\Template;

/**
 * Class Example
 * @package Yireo\ExampleWidget\Block
 */
class Example extends Template
{
    protected $_template = 'example.phtml';

    /**
     * @return int
     */
    public function getId(): int
    {
        return (int)$this->getData('id');
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return (string)$this->getData('name');
    }
}
