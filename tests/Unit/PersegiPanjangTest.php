<?php

namespace Ibnuridho\BangunRuang\Tests;

use Ibnuridho\BangunRuang\Tests\TestCase;
use Ibnuridho\BangunRuang\Facades\PersegiPanjang;

class PersegiPanjangTest extends TestCase
{
	public function testHitungLuas()
	{	
		$p = 10;
		$l = 5;
		$hasil = PersegiPanjang::hitungLuas($p, $l);

		$this->assertEquals($hasil, 50);
	}
}