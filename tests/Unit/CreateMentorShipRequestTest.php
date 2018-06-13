<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Http\Requests\CreateMentorshipRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateMentorShipRequestTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testValidationRulesForRequest()
    {
        $validationRules = (new CreateMentorshipRequest())->rules();

        $this->assertEquals($validationRules, [
            'description' => 'required',
            'days' => 'required|integer',
            'for' => 'required|in:mentor,mentee',
            'session_duration' => 'required|integer',
            'mentorship_duration' => 'required|integer',
            'pairing_time' => 'required|date_format:H:i'
        ]);
    }
}
