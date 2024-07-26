<?php

use Illuminate\Support\Facades\Route;

// 2- Create a route to return a direct view for the dashboard page.
Route::get('/dashboard', function () {
    return view('dashboard');
});
// 3- Create a route to return a view with an employees object, where each employee has an id, name, salary, and email. Display the employees' data in a table.
Route::get('/employees', function () {
    $employees=[
        [
            "id" => 1,
            "name"=> "Ahmed",
            "salary"=> 2000,
            "email"=> "qf8jJ@example.com"
        ],
        [
            "id" => 2,
            "name"=> "Mohamed",
            "salary"=> 3000,
            "email"=> "Nt6Zt@example.com"],
        [
            "id" => 3,
            "name"=> "Ali",
            "salary"=> 4000,
            "email"=> "9fH0H@example.com"],
        [
            "id" => 4,
            "name"=> "Kareem",
            "salary"=> 5000,
            "email"=> "qf8jJ@example.com"]
    ];
    return view('employees', ['employees' => $employees]);
});
// 4- Create a route to return a dynamic view for an employee by id and display the data for that specific employee.
// Handle cases where the employee is not found and ensure that the id entered is a number.
Route::get('/employee/{id}', function ($id) {
    if (!is_numeric($id)) {
        return "<h1>Invalid ID</h1>";
    }
    $employees=[
        [
            "id" => 1,
            "name"=> "Ahmed",
            "salary"=> 2000,
            "email"=> "qf8jJ@example.com"
        ],
        [
            "id" => 2,
            "name"=> "Mohamed",
            "salary"=> 3000,
            "email"=> "Nt6Zt@example.com"],
        [
            "id" => 3,
            "name"=> "Ali",
            "salary"=> 4000,
            "email"=> "9fH0H@example.com"],
        [
            "id" => 4,
            "name"=> "Kareem",
            "salary"=> 5000,
            "email"=> "qf8jJ@example.com"]
    ];
    foreach ($employees as $employee) {
        if ($employee['id'] == $id) {
            return view('employee', ['employee' => $employee]);
        }
    }
    return "<h1>Employee not found</h1>";
});



?>
