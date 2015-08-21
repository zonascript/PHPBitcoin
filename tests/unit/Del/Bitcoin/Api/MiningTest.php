<?php

namespace Del\Bitcoin\Api;

class MiningTest extends \Codeception\TestCase\Test
{
   /**
    * @var \UnitTester
    */
    protected $tester;

    /**
     * @var Mining
     */
    protected $api;

    /**
     * @var array
     */
    protected $config;

    protected function _before()
    {

        $this->config = [
            'username' => 'phpbitcoin',
            'password' => 'COMPLETELYrandomPASSWORD',
            'host' => '127.0.0.1',
            'port' => '18332',
            'protocol' => 'http',
            'ssl_certificate' => '',
        ];

        // create a fresh API class before each test
        $this->api = new Mining($this->config);


    }

    protected function _after()
    {
        // unset the api class after each test
        unset($this->api);
    }



    public function testGetMiningInfo()
    {
        $info = json_decode($this->api->getMiningInfo(),true);
        $this->assertArrayHasKey('blocks',$info['result']);
    }




    public function testGetBlockTemplate()
    {
        $info = json_decode($this->api->getBlockTemplate(),true);
        die("getblocktemplate errors on travis - \n".var_dump($info));
        $this->assertArrayHasKey('capabilities',$info['result']);
    }

}