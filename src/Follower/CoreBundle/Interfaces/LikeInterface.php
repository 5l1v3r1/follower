<?php

namespace Follower\CoreBundle\Interfaces;

/**
 * Created by PhpStorm.
 * User: hursit_topal
 * Date: 12/11/16
 * Time: 01:32
 */
interface LikeInterface
{
    public function like($shareId, $extras = []);
}