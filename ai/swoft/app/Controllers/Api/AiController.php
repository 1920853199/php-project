<?php

namespace App\Controllers\Api;

use Phpml\Classification\MLPClassifier;
use Phpml\NeuralNetwork\ActivationFunction\PReLU;
use Phpml\NeuralNetwork\Node\Neuron;
use Phpml\NeuralNetwork\Training\Backpropagation\Sigma;
use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use Swoft\Http\Server\Bean\Annotation\RequestMethod;

/**
 * @Controller(prefix="/api")
 */
class AiController
{
    /**
     * 地址:/api/test.
     * @RequestMapping(route="/api/test", method={RequestMethod::GET})
     */
    public function test(){

        $mlp = new MLPClassifier(4,[[2,new PReLU()],[2,new Sigma(new Neuron(),0.01)]],['a','b','c']);

        /*$mlp->train(
            $samples = [[1, 0, 0, 0], [0, 1, 1, 0], [1, 1, 1, 1], [0, 0, 0, 0]],
            $targets = ['a', 'a', 'b', 'c']
        );*/

        /*$mlp->partialTrain(
            $samples = [[1, 0, 0, 0], [0, 1, 1, 0]],
            $targets = ['a', 'a']
        );
        $mlp->partialTrain(
            $samples = [[1, 1, 1, 1], [0, 0, 0, 0]],
            $targets = ['b', 'c']
        );*/

        //$mlp->setLearningRate(0.1);

        return $mlp->predict([[1, 1, 1, 0], [0, 0, 0, 0]]);
    }
}
