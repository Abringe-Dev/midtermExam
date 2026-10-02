<?php

namespace Database\Seeders;

use App\Models\TherapySession;
use App\Models\User;
use Illuminate\Database\Seeder;

class TherapySessionSeeder extends Seeder
{
    public function run(): void
    {
        $songs = [
            'Steady Pulse 60 BPM',
            'Finger Flow',
            'Grip Groove',
            'Rhythm Rehab',
            'Palm Parade',
            'Pinch Perfect',
            'Fist Pump Funk',
            'Therapy Tempo',
        ];

        $users = User::all();

        if ($users->isEmpty()) {
            $users = User::factory(3)->create();
        }

        foreach (range(1, 15) as $i) {
            $hit = fake()->numberBetween(20, 120);
            $missed = fake()->numberBetween(0, 30);
            $total = $hit + $missed;

            TherapySession::create([
                'user_id' => $users->random()->id,
                'song_title' => fake()->randomElement($songs),
                'difficulty' => fake()->randomElement(['easy', 'medium', 'hard']),
                'hand_used' => fake()->randomElement(['left', 'right', 'both']),
                'score' => $hit * 100,
                'max_combo' => fake()->numberBetween(5, $hit),
                'accuracy' => $total > 0 ? round(($hit / $total) * 100, 2) : 0,
                'duration_seconds' => fake()->randomElement([60, 90, 120, 180]),
                'gestures_hit' => $hit,
                'gestures_missed' => $missed,
                'notes' => fake()->optional()->sentence(),
                'played_at' => fake()->dateTimeBetween('-30 days', 'now'),
            ]);
        }
    }
}
