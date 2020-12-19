<?php

namespace Database\Factories;

use App\Enums\TaskStatus;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws \ReflectionException
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(50),
            'status' => $this->faker->randomElement(TaskStatus::getConstants()),
        ];
    }
}
