<?php

/*
 * (c) Jean-François Lépine <https://twitter.com/Halleck45>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hal\Metrics;
use Hal\Component\Reflected\Klass;

/**
 * @author Jean-François Lépine <https://twitter.com/Halleck45>
 */
interface ClassMetric {

    /**
     * @param Klass $class
     *
     * @return MetricResult
     */
    public function calculate(Klass $class);
}
