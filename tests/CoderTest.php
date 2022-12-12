<?php

namespace tests;

use PhpParser\Node\Expr\NullsafeMethodCall;
use PHPUnit\Framework\TestCase;
use App\Models\Client;
class CoderTest extends TestCase{
    /*public function test_testOk(){
        $this->assertEquals(1, 1);
    }*/

    public function test_igGetClientWorkCorrectly(){

        $newClient = new Client(null, "Paca", "Comment for Issue",56543887,"Email", null);

        $resultGetClient = $newClient->getClient();

        $this->assertEquals("Paca", $resultGetClient);
    }

    public function test_ifGetIssueWorkCorrectly(){

        $newClient = new Client(null, "Paca", "Comment for Issue",56543887,"Email", null);

        
        $resultIssueClient =  $newClient->getIssue();
        
        $this->assertEquals("Comment for Issue", $resultIssueClient);

    }
    public function test_ifGetPhoneWorkCorrectly(){

        $newClient = new Client(null, "Paca", "Comment for Issue",56543887,"Email", null);


        $resultPhoneClient = $newClient->getPhone();

        $this->assertEquals(56543887, $resultPhoneClient);
    

    }

    public function test_ifGetEmailWorkCorrectly(){

        $newClient = new Client(null, "Paca", "Comment for Issue",56543887,"Email", null);


        $resultEmailClient = $newClient->getEmail();

        $this->assertEquals("Email", $resultEmailClient);
    }
}