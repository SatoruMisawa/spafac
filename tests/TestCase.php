<?php

namespace Tests;

use Artisan;
use App\Tester;
use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function loginWithTesterIfDebug() {
        if (!env('APP_DEBUG')) {
            return $this;
        }
        
        $tester = factory(Tester::class)->create();
        return $this->be($tester, 'testers');
    }

    protected function loginWithUser($user = null) {
        if ($user === null) {
            $user = factory(User::class)->create();
        }
        return $this->be($user, 'users');
    }

    protected function refreshAndSeedDatabase() {
        Artisan::call('migrate:fresh', [
            '--seed' => true,
        ]);
    }
}