<?php

namespace App\Commands;

use App\Rule;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\View;
use LaravelZero\Framework\Commands\Command;
use function Termwind\{render};

class ListValidationRules extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'validation:list';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $rows = "";

        foreach (Rule::all() as $rule) {
            $rows .= "<tr>{$rule->name}</tr>";
        };

        render("<table><thead><tr><th colspan='3'>Available Validation Rules</th></tr></thead><tbody><tr><td>foo</td><td>bazz</td></tr></tbody></table>");
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
