<?php

namespace Webkul\Newsletter\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subjectLine;
    public $content;

    public function __construct($subjectLine, $content)
    {
        $this->subjectLine = $subjectLine;
        $this->content = $content;
    }

    public function build()
    {
        return $this->subject($this->subjectLine)
            ->view('newsletter::emails.template')
            ->with(['content' => $this->content]);
    }
}
