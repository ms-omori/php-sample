<?php

namespace App\Domain\Object;

class OrganizationManager
{
    public static function getOrganization(?string $organizationId): ?Organization
    {
        if (empty($organizationId)) {
            return null;
        }
        return Organization::tryFrom($organizationId);
    }
}

enum Organization: string
{
    case MANAGE = "0";
    case PRODUCT= "1";
    case DEVELOPER = "2";
    case INFRA = "3";
}
