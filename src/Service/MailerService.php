<?php
// src/Service/MailerService.php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MailerService
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendEmail(string $from, string $to, string $subject, string $content)
    {
        $email = (new Email())
            ->from($from)  // استخدام البريد الإلكتروني المرسل
            ->to($to)      // تحديد المرسل إليه
            ->subject($subject)  // موضوع الرسالة
            ->text($content);  // نص الرسالة
    
        $this->mailer->send($email);  // إرسال البريد الإلكتروني
    }
}
