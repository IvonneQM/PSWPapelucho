<?php
/**
 * Created by Computec SOS.
 * User: Yvonne Quinteros, Inger Garrido
 * Date: 30-04-16
 * Time: 11:15 PM
 */

namespace App\Listeners;

use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Mail\Message;

class Sendmail
{
    /**
     * @var Mailer
     */
    private $mailer;

    /**
     * Create the event handler.
     *
     * @param Mailer $mailer
     */
    public function __construct(
        Mailer $mailer
    )
    {
        $this->mailer = $mailer;
    }

    public function handle(\App\Events\SendMail $sendmail)
    {
        foreach($sendmail->sendmail->getTo() as $recipient)
        {
            $this->mailer->send(
                $sendmail->sendmail->getTemplate(),
                $sendmail->sendmail->getData(),
                function (Message $message) use ($recipient, $sendmail)
                {
                    $message->to($recipient)->subject($sendmail->sendmail->getSubject());

                    if( ! empty( $sendmail->sendmail->getAttachments() ) ) foreach( $sendmail->sendmail->getAttachments() as $attach )
                    {
                        $message->attach( $attach );
                    }
                }
            );
        }
    }
}