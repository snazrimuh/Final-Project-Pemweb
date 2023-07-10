<?php

namespace Database\Factories;

use App\Models\Ibu;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class IbuFactory extends Factory
{
    protected $model = Ibu::class;

    public function definition()
    {
        $allowedKelurahanIds = [ 57125, 57126, 57127];
        return [
            'nik_ibu' => $this->faker->numberBetween(350000000000, 359999999999),
            'kk' => $this->faker->numberBetween(350000000000, 359999999999),
            'nama_ibu' => $this->faker->name('female'),
            'alamat_ibu' => $this->faker->address,
            'tgl_lahir_ibu' => $this->faker->date(),
            'id_kelurahan' => $this->faker->randomElement($allowedKelurahanIds),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
