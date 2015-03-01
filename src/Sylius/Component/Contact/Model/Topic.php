<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Contact\Model;

use Sylius\Component\Translation\Model\AbstractTranslatable;

/**
 * Default contact topic representation
 *
 * @author Michał Marcinkowski <michal.marcinkowski@lakion.com>
 */
class Topic extends AbstractTranslatable  implements TopicInterface
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function setTitle($title)
    {
        $this->translate()->setTitle($title);
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->translate()->getTitle();
    }

    public function __toString()
    {
        return $this->translate()->getTitle();
    }

    /**
     * {@inheritdoc}
     */
    protected function getTranslationEntityClass()
    {
        return get_class().'Translation';
    }
}
