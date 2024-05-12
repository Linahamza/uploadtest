<?php

namespace Database\Factories;
use App\Models\Document;
use App\Models\DocumentType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use App\Models\PatientRecord;
use App\Models\Consultation;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Document>
 */
class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Document::class;
    public function definition(): array
    {
        $faker = Faker::create();

        return [
            'document_type_id' => DocumentType::factory()->create()->id, // Use factory for DocumentType
            'patient_record_id' => null, //PatientRecord::factory()->create()->id
            'consultation_id' => Consultation::factory()->create()->id,
            'created_by' => null, 
            'label' => $faker->sentence(2),
            'path' => $faker->imageUrl(640, 480),
        ];
    }
}
