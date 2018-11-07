<?php

namespace App\Console\Commands\AdminCRUD;

use Artisan;
use DB;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class MakeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admincrud:make';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "make all tables's crud controller and register sub menu";

    private $config;

    private $parentMenu;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->config = config('admincrud');

        $this->parentMenu = $this->firstOrInsertParentMenu();
    }

    private function firstOrInsertParentMenu() {
        $parentMenu = DB::table('admin_menu')->where('title', 'Models')->first();
        if ($parentMenu !== null) {
            return $parentMenu;
        }

        $data = [
            'title' => 'Models',
            'icon' => 'fa-database',
            'uri' => '/'
        ];
        DB::table('admin_menu')->insert($data);

        return DB::table('admin_menu')->where($data)->first();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $tableNames = $this->tableNames();
        foreach ($tableNames as $tableName) {
            $modelName = $this->modelName($tableName);
            $controllerName = $this->controllerName($modelName);
            $path = '/'.$tableName;

            $this->makeAdminController($controllerName, $modelName);

            $this->registerWithMenu($modelName, $path);
        }
    }

    private function tableNames() {
        $tableNames = $this->tableNamesFromDB();
        $excepts = $this->config['excepts'];
        return array_where($tableNames, function($value) use($excepts) {
            return !in_array($value, $excepts);
        });
    }

    private function tableNamesFromDB() {
        $tableNames = [];
        foreach (DB::select('show tables') as $table) {
            $tableNames[] = $this->tableName($table);
        }

        return $tableNames;
    }

    private function tableName($table) {
        $tableName = 'Tables_in_'.$this->config['db']['name'];
        return $table->$tableName;
    }

    private function modelName($tableName) {
        $singular = Str::singular($tableName);
        $ss = explode('_', $singular);
        $modelName = "";
        foreach ($ss as $s) {
            $modelName .=  ucfirst($s);
        }

        return $modelName;
    }

    private function controllerName($modelName) {
        return $modelName.'Controller';
    }

    private function makeAdminController($controllerName, $modelName) {
        Artisan::call('admin:make', [
            'name' => $controllerName,
            '--model' => $this->fullModelName($modelName),
        ]);
    }

    private function fullModelName($modelName) {
        return 'App\\'.$modelName;
    }

    private function registerWithMenu($title, $path) {
        DB::table('admin_menu')->updateOrInsert([            
            'uri' => $path,
        ], [
            'parent_id' => $this->parentMenu->id,
            'title' => $title,
            'icon' => 'fa-database',
        ]);
    }
}