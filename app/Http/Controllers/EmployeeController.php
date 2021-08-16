<?php

    namespace App\Http\Controllers;

    class EmployeeController extends Controller{

        private $employees;

        public function __construct(){

            $this->employees = [
				1 => [
					'name' => 'user1',
					'surname' => 'surname1',
					'salary' => 1000,
				],
				2 => [
					'name' => 'user2',
					'surname' => 'surname2',
					'salary' => 2000,
				],
				3 => [
					'name' => 'user3',
					'surname' => 'surname3',
					'salary' => 3000,
				],
				4 => [
					'name' => 'user4',
					'surname' => 'surname4',
					'salary' => 4000,
				],
				5 => [
					'name' => 'user5',
					'surname' => 'surname5',
					'salary' => 5000,
				],
			];
        }

        public function showOne($id){
            if(preg_match('#\d#', $id) == 1){

                foreach($this -> employees as $key => $employee){

                    if($id == $key){
                        //return $employee['name']. '-' . $employee['surname'] . '-' . $employee['salary'];

                        return view('employee.employee', ['name' => $employee['name'], 'surname' => $employee['surname']]);
                    }

                }
                return 'такой страницы не существует!';
            }
        }

        public function showField($id, $field){
            if(preg_match('#\d#', $id) == 1 && preg_match('#name|surname|salary#', $field) == 1){

                foreach($this -> employees as $key => $employee){

                    if($id == $key){
                        return $employee[$field];
                    }

                }
            }
        }
    }
