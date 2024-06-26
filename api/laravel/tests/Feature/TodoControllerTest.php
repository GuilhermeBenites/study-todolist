<?php

namespace Tests\Feature;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class TodoControllerTest extends TestCase
{

    use RefreshDatabase;

    /**
     * todo update todo
     * todo mark as done
     * todo delete a todo
     * todo check security access
     */
    public function test_should_create_a_todo_successfully(): void
    {
        $user = User::factory()->create();

        Sanctum::actingAs(
            $user,
            ['*']
        );

        $body = Todo::factory()->make()->toArray();
        unset($body['completed']);

        $response = $this->postJson('api/todo', $body);

        $response->assertStatus(200);

        $this->assertDatabaseHas('todos', array_merge($body, ['user_id' => $user->id]));
    }

    public function test_should_retrieve_all_todos(): void
    {
        $user = User::factory()->create();

        Sanctum::actingAs(
            $user,
            ['*']
        );

        Todo::factory()->count(3)->create();

        $response = $this->getJson('api/todo');

        $response->assertStatus(200);

        $json = $response->decodeResponseJson();

        $this->assertCount(3, $json->json('data'));
    }

    public function test_should_retrieve_a_todo(): void
    {
        $user = User::factory()->create();

        Sanctum::actingAs(
            $user,
            ['*']
        );

        $todo = Todo::factory()->create();

        $response = $this->getJson('api/todo/'.$todo->id);

        $response->assertStatus(200);

        $response->assertJson($todo->toArray());
    }

    public function test_should_update_a_todo(): void
    {

    }
}
