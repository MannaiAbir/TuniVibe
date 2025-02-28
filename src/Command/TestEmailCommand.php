<?php
// src/Command/TestEmailCommand.php
namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

#[AsCommand(name: 'app:test-email')]
class TestEmailCommand extends Command
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        parent::__construct();
        $this->mailer = $mailer;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $email = (new Email())
            ->from('your-email@gmail.com')
            ->to('destinataire@example.com')
            ->subject('Test Email')
            ->text('Ceci est un test d\'envoi d\'email via Symfony.');

        $this->mailer->send($email);

        $output->writeln('Email envoyé avec succès.');

        return Command::SUCCESS;
    }
}
