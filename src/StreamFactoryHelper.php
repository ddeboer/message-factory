<?php

/*
 * This file is part of the Http Message Factory package.
 *
 * (c) PHP HTTP Team
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Http\Message;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
interface StreamFactoryHelper
{
    /**
     * @var StreamFactory
     */
    protected $streamFactory;

    /**
     * {@inheritdoc}
     */
    public function getStreamFactory()
    {
        return $this->streamFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function setStreamFactory(StreamFactory $streamFactory)
    {
        $this->streamFactory = $streamFactory;
    }
}
