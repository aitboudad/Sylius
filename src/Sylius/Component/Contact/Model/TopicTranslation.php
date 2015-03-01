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

use Sylius\Component\Translation\Model\AbstractTranslation;

/**
 * Default Topic translation model.
 *
 * @author Abdellatif Ait boudad <a.aitboudad@gmail.com>
 */
class TopicTranslation extends AbstractTranslation implements TopicTranslationInterface
{
    /**
     * Country id.
     *
     * @var mixed
     */
    protected $id;

    /**
     * Country title.
     *
     * @var string
     */
    protected $title;

    public function __toString()
    {
        return $this->title;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * {@inheritdoc}
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
}
