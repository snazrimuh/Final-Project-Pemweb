<?php

namespace Database\Factories;

use App\Models\Anak;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AnakFactory extends Factory
{
    protected $model = Anak::class;

    public function definition()
    {
        $allowedKelurahanIds = [57125, 57126, 57127];
        return [
            'nik_anak' => $this->faker->numberBetween(350000000000, 359999999999),
            'kk' => $this->faker->numberBetween(350000000000, 359999999999),
            'nama_anak' => $this->faker->name,
            'alamat_anak' => $this->faker->address,
            'tgl_lahir_anak' => $this->faker->date(),
            'id_kelurahan' => $this->faker->randomElement($allowedKelurahanIds),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
