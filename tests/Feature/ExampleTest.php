<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Task;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function testTheCreateHasSuccess()
    {
        $task=factory(Task::class)->create();
        
        $response = $this->get('/api/task');
    
        $response->assertStatus(200);
    }

    public function testTheGetHasSuccess()
    {
        $task=factory(Task::class)->update();
        
        $response = $this->post('/api/task');
    
        $response->assertStatus(200);
    }
}
