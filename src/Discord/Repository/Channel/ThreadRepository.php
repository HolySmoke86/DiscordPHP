<?php

/*
 * This file is a part of the DiscordPHP project.
 *
 * Copyright (c) 2015-present David Cole <david.cole1340@gmail.com>
 *
 * This file is subject to the MIT license that is bundled
 * with this source code in the LICENSE.md file.
 */

namespace Discord\Repository\Channel;

use Discord\Parts\Thread\Thread;
use Discord\Repository\AbstractRepository;

/**
 * Contains threads that belong to a channel.
 *
 * @method Thread|null get(string $discrim, $key)
 * @method Thread|null first()
 */
class ThreadRepository extends AbstractRepository
{
    /**
     * {@inheritdoc}
     */
    protected $endpoints = [];

    /**
     * {@inheritdoc}
     */
    protected $class = Thread::class;
}