<?php

namespace OndraM\Ci;

use OndraM\Env;

interface CiInterface
{
    /**
     * Return true if this CI was detected
     *
     * @param Env $env
     * @return bool
     */
    public static function isDetected(Env $env);

    /**
     * Get name of the CI server type
     *
     * @return string
     */
    public function getCiName();

    /**
     * Get number of this concrete build
     *
     * @return string
     */
    public function getBuildNumber();

    /**
     * Get URL to this build
     *
     * @return string
     */
    public function getBuildUrl();

    /**
     * Get git commit being built
     *
     * @return string
     */
    public function getGitCommit();
}
