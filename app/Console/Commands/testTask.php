<?php

namespace App\Console\Commands;

use App\openDay;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class testTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:tareaPrueba';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crear por día';

    /**
     * Execute the console command.
     *
     * @return int
     */

    public function handle()
    {
        $data = DB::table('agent_has_supervisor')->get();
        foreach($data as $field){
            DB::table('open_days')->insert([
                'id_agent' => $field->id_user_agent,
                'id_supervisor' => $field->id_supervisor,
                'created_at' => Carbon::now()
            ]);   
        }
    }
}
