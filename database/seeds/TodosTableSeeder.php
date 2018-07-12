<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Todos;

class TodosTableSeeder extends Seeder
{
    private $todos = array(
         array(
            "titulo" => "task 1",
            "responsible" => "Manuel",
            "description"=> "Lorem Ipsum",
            "priority" => "low",
            "activa"=> 0
        ),
        array(
            "titulo" => "task 2",
            "responsible" => "Manuel",
            "description" => "Lorem Ipsum",
            "priority" => "medium",
            "activa" => 0
        ),
        array(
            "titulo" => "task 3",
            "responsible" => "Mariana",
            "description" => "Lorem Ipsum",
            "priority" => "high",
            "activa" => 0
        ),
        array(
            "titulo" => "task 4",
            "responsible" => "Mariana",
            "description" => "Lorem Ipsum",
            "priority" => "Low",
            "activa"=> 0
        ),
        array(
            "titulo" => "task 5",
            "responsible" => "Manuel",
            "description" => "Lorem Ipsum",
            "priority" => "high",
            "activa" => 1
        ),
        array(
            "titulo" => "task 6",
            "responsible" => "Manuel",
            "description" => "Lorem Ipsum",
            "priority" => "high",
            "activa" => 1
        ),
        array(
            "titulo" => "task 7",
            "responsible" => "Mariana",
            "description" => "Lorem Ipsum",
            "priority" => "medium",
            "activa" => 0
        ),
        array(
            "titulo" => "task 8",
            "responsible"=> "Manuel",
            "description"=> "Lorem Ipsum",
            "priority" => "Low",
            "activa"=> 1
        )
    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('todos')->truncate();
        foreach ($this->todos as $todo){
            DB::table('todos')->insert([
                'titulo' => $todo['titulo'],
                'responsible' => $todo['responsible'],
                'description' => $todo['description'],
                'priority' => $todo['priority'],
                'activa' => $todo['activa']
            ]);
        }
    }
}