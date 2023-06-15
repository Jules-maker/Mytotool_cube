<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Task;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //a task has a name, a description, a category and a status and a user_id
            'name' => fake()->randomElement(['Sortir le chien', 'Faire un test unitaire', 'Postuler entreprise x' , "Ajouter page d'archive",'Verification clean code','Finir css']),
            'description' => fake()->sentence(10),
            'category' => fake()->randomElement(['Personnel', 'Travail', 'Urgent', 'Important', 'Loisir']),
            'status' => fake()->randomElement(['A faire', 'En cours', 'Terminé']),
            // 'user_id' => fake()->numberBetween(1, 10),

        ];
    }
   
    
    // assign a task to a user
    public function configure(): TaskFactory
    {
        return $this->state(function (array $attributes) {
            $user = User::inRandomOrder()->first();
            return [
                'user_id' => $user->id,
            ];
        });
    }
}
