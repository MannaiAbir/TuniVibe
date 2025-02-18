<?php

namespace App\Command;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AssignAdminRole extends Command
{
    protected static $defaultName = 'app:assign-admin-role';

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Assigns the ROLE_ADMIN role to a user')
            ->addArgument('userId', InputArgument::REQUIRED, 'The ID of the user');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $userId = $input->getArgument('userId');

        // Fetch the user
        $user = $this->entityManager->getRepository(User::class)->find($userId);

        if (!$user) {
            $output->writeln('User not found.');
            return Command::FAILURE;
        }

        // Assign ROLE_ADMIN
        $user->setRoles(['ROLE_ADMIN']);
        $this->entityManager->flush();

        $output->writeln('ROLE_ADMIN assigned to user: ' . $user->getUsername());
        return Command::SUCCESS;
    }
}