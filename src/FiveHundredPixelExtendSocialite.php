<?php
namespace SocialiteProviders\FiveHundredPixel;

use SocialiteProviders\Manager\SocialiteWasCalled;

class FiveHundredPixelExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            '500px', __NAMESPACE__.'\Provider', __NAMESPACE__.'\Server'
        );
    }
}
