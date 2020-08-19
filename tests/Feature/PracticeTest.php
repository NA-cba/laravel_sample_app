<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PracticeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
      $response = $this->call('GET','/');
      $this->assertEquals(200, $response->getStatusCode());

      // レコード新規作成
      $user = new \App\User;
      $user->name = "手巣戸太郎";
      $user->email = "taro@test.com";
      $user->password = \Hash::make('test_password');
      $user->save();

      // SELECT
      $readUser = \App\User::where('name','手巣戸太郎')->first();
      $this->assertNotNull($readUser); // データが取得できたかテスト
      $this->assertTrue(\Hash::check('test_password', $readUser->password));

    // レコード削除
      \App\User::where('email', 'taro@test.com')->delete();

    }
}
