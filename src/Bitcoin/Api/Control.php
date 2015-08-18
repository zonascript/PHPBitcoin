<?php
/**
 * User: delboy1978uk
 * Date: 18/08/15
 * Time: 19:49
 */

namespace Del\Bitcoin\Api;


class Control extends AbstractApi
{

    public function getInfo()
    {
        return $this->send('getinfo');
    }

    public function help()
    {
        return $this->send('help');
    }

    public function stop()
    {
        return $this->send('stop');
    }
}