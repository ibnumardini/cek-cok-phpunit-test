<?php
use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

  public $user;
  public function setUp(): void
  {
    $this->user = new User();
  }

  // TDD(Test Driven Development)
  /** @test */
  public function get_first_username()
  {
    $this->user->setFirstName('bowo');
    $this->assertEquals($this->user->getFirstName(), 'bowo');
  }

  /** @test */
  public function get_last_name()
  {
    $this->user->setLastName('abim');
    $this->assertEquals($this->user->getLastName(), 'abim');
  }

  /** @test */
  public function first_and_lastname_trim()
  {
    $this->user->setFirstName('  bowo');
    $this->user->setLastName('abim  ');
    $this->assertEquals($this->user->getFullName(),'bowo abim');
  }

}


?>
