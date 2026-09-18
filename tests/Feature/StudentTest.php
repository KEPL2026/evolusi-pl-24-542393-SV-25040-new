<?php

namespace Tests\Feature;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StudentTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_student(): void
    {
        $student = Student::create([
            'name' => 'Jibrilian Wulsa Ariswanto',
            'nim' => '24/542393/SV/25040',
            'email' => 'jibril@mail.ugm.ac.id',
            'study_program' => 'Rekayasa Perangkat Lunak',
            'is_active' => true,
        ]);

        $this->assertDatabaseHas('students', [
            'id' => $student->id,
            'nim' => '24/542393/SV/25040',
            'email' => 'jibril@mail.ugm.ac.id',
        ]);
    }

    public function test_can_create_student_using_factory(): void
    {
        $student = Student::factory()->create();

        $this->assertDatabaseCount('students', 1);
        $this->assertNotNull($student->name);
        $this->assertNotNull($student->nim);
    }

    public function test_can_update_student(): void
    {
        $student = Student::factory()->create([
            'name' => 'Nama Sebelum Update',
            'is_active' => true,
        ]);

        $student->update([
            'name' => 'Nama Setelah Update',
            'is_active' => false,
        ]);

        $this->assertDatabaseHas('students', [
            'id' => $student->id,
            'name' => 'Nama Setelah Update',
            'is_active' => false,
        ]);
    }

    public function test_can_delete_student(): void
    {
        $student = Student::factory()->create();

        $student->delete();

        $this->assertDatabaseMissing('students', [
            'id' => $student->id,
        ]);
    }

    public function test_student_nim_must_be_unique(): void
    {
        Student::factory()->create([
            'nim' => '24/542393/SV/25040',
        ]);

        $this->expectException(QueryException::class);

        Student::factory()->create([
            'nim' => '24/542393/SV/25040',
        ]);
    }

    public function test_authenticated_user_can_access_filament_student_resource(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/admin/students');

        $response->assertSuccessful();
    }
}
