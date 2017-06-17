<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-31 20:43
 */
namespace Notadd\Administration\Listeners;

use Notadd\Administration\Flows\Administration;
use Notadd\Foundation\Flow\Abstracts\FlowRegister as AbstractFlowRegister;

/**
 * Class FlowRegister.
 */
class FlowRegister extends AbstractFlowRegister
{
    /**
     * Register flow or flows.
     */
    public function handle()
    {
        $this->flow->register(Administration::class);
    }
}
