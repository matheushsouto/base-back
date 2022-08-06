<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class Partner extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCreatePartner()
    {
        $data = [
            'name' => $this->faker->sentence,
            'cnpj' => $this->faker->paragraph,
            'email' => $this->faker->paragraph,
            'status' => $this->faker->paragraph,
            'quota_min' => $this->faker->paragraph,
            'quota_max' => $this->faker->paragraph,
        ];

        $this->post(route(''), $data)
            ->assertStatus(201)
            ->assertJson($data);
    }
}
