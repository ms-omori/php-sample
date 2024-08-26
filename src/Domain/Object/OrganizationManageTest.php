<?php

namespace App\Domain\Object;

use PHPUnit\Framework\TestCase;

class OrganizationManageTest extends TestCase
{
    public function testOrganizationManage(){
        $manage = OrganizationManager::getOrganization("0");
        $this->assertEquals($manage, Organization::MANAGE);
    }

    public function testOrganizationProduct(){
        $product = OrganizationManager::getOrganization("1");
        $this->assertEquals($product, Organization::PRODUCT);
    }
}