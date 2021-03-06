<?php

/*
 * This file is part of the mingyoung/dingtalk.
 *
 * (c) 张铭阳 <mingyoungcheung@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyDingTalk\Messages;

class Voice extends Message
{
    protected $type = 'voice';

    protected function transform($value)
    {
        list($mediaId, $duration) = $value;

        return ['media_id' => $mediaId, 'duration' => $duration];
    }
}
