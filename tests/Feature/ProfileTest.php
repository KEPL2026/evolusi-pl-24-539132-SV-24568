<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProfileTest extends TestCase
{
    public function test_profile_page_can_be_accessed(): void
    {
        $response = $this->get('/profil');

        $response->assertStatus(200);
        $response->assertSee('Profil Mahasiswa');
    }
}
