<?php

namespace Rubix\ML\NeuralNet\Layers;

use Generator;

interface Parametric
{
    /**
     * Return the parameters of the layer.
     *
     * @return \Generator<\Rubix\ML\NeuralNet\Parameters\Parameter>
     */
    public function parameters() : Generator;

    /**
     * Restore the parameters on the layer from an associative array.
     *
     * @param \Rubix\ML\NeuralNet\Parameters\Parameter[] $parameters
     */
    public function restore(array $parameters) : void;
}
