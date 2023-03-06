<?php

namespace BookStack\Console\Commands;

use BookStack\Auth\Access\LdapService;
use BookStack\Auth\Role;
use BookStack\Auth\UserRepo;
use BookStack\Exceptions\NotFoundException;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rules\Unique;
use Symfony\Component\Console\Command\Command as SymfonyCommand;

class ClearActivity extends Commanduse Illuminate\Console\Command;

{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bookstack:ldap-sync {--role=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add users to DB from LDAP';

    protected $userRepo;

    protected $ldapConnection;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @throws NotFoundException
     *
     * @return mixed
     */
    public function handle()
    {
        $ldapConnection = $this->getConnection();






    }
}