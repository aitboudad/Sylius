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

/**
 * Topic translation interface.
 *
 * @author Abdellatif Ait boudad <a.aitboudad@gmail.com>
 */
interface TopicTranslationInterface
{
    /**
     * Get topic name.
     *
     * @return string
     */
    public function getTitle();

    /**
     * Set topic name.
     *
     * @param string $name
     */
    public function setTitle($title);
}
