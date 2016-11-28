<?php

namespace Mpociot\SlackBot\Drivers;

use Illuminate\Support\Collection;
use Mpociot\SlackBot\Answer;
use Mpociot\SlackBot\Message;
use Mpociot\SlackBot\Question;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;

class NullDriver extends Driver
{
    /**
     * @param Request $request
     */
    public function buildPayload(Request $request)
    {
    }

    /**
     * Determine if the request is for this driver.
     *
     * @return bool
     */
    public function matchesRequest()
    {
        return true;
    }

    /**
     * @param Message $message
     * 
     * @return Answer
     */
    public function getConversationAnswer(Message $message)
    {
        return Answer::create('');
    }

    /**
     * Retrieve the chat message.
     *
     * @return string
     */
    public function getMessages()
    {
        return [new Message('', '', '')];
    }

    /**
     * @return bool
     */
    public function isBot()
    {
        return false;
    }

    /**
     * @param string|Question $message
     * @param Message $matchingMessage
     * @param array $additionalParameters
     * @return $this
     */
    public function reply($message, $matchingMessage, $additionalParameters = [])
    {
    }
}