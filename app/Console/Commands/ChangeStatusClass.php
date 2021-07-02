<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Classes;
use App\Notifications\ChangeStatusClassNoti;

class ChangeStatusClass extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:change-status-class';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Change class upcomming to happenning-class';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $class = Classes::where('status', config('messages.upcomming'))->where('time_start', '<', now());
        $data = $class->with('teacher')->get();
        if (count($data) > 0) {
            // $update = $class->update(['status' => config('messages.happenning')]);
            foreach( $data as $item) {
                $item->teacher->notify(new ChangeStatusClassNoti($item));
            }
        }
    }
}
