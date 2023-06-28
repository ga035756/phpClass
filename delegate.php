<?php

interface AgentDelegate
{
    function complete();
}

class Agent
{
    private $delegate;

    function __construct(AgentDelegate $delegate)
    {
        $this->delegate = $delegate;
    }
    function sendMail()
    {
        $this->delegate->complete();
        // return 'done\n';
    }
}

class Me implements AgentDelegate
{
    function sendMail()
    {
        $agent = new Agent($this);
        $status = $agent->sendMail();
        echo $status;
    }

    function complete()
    {
        echo 'my agent send mail already';
    }
}

$me = new Me();
$me->sendMail();
