<?php

namespace Cloudflare\Zone;

use Cloudflare\Api;
use Cloudflare\Zone;

/**
 * CloudFlare API wrapper
 *
 * SSL Verification for a Zone
 */

class SSLVerification extends Api
{
    /**
     * Default permissions level
     * @var array
     */
    protected $permission_level = array('read' => '#ssl:read');

    /**
     * Get SSL Verification Info for a Zone (permission needed: #ssl:read)
     * @param string $zone_identifier API item identifier tag
     */
    public function verify($zone_identifier)
    {
        return $this->get('zones/' . $zone_identifier . '/ssl/verification');
    }
}
