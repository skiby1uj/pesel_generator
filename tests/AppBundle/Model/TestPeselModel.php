<?php
/**
 * Created by PhpStorm.
 * User: grzegorz
 * Date: 12.09.18
 * Time: 19:44
 */

namespace Tests\AppBundle\Model;


use AppBundle\Model\PeselModel;
use PHPUnit\Framework\TestCase;

class TestPeselModel extends TestCase
{
	public function testGetPeselNumber()
	{
		$peselModel = new PeselModel('18-06-1949', '7959');
		$this->assertEquals('49061827959', $peselModel->getPeselNumber());
	}
}