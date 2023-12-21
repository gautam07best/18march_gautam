<?php
require_once 'models/ExpenseModel.php';

class ExpenseController {
    private $model;
    private $total;
    private $update;
    private $id;
    private $name;
    private $amount;

    public function __construct($pdo) {
        $this->model = new ExpenseModel($pdo);
        $this->total = 0;
        $this->update = false;
        $this->id = 0;
        $this->name = '';
        $this->amount = '';
    }

    public function listExpenses() {
        $expenses = $this->model->getExpenses();
        $this->updateTotalAmount($expenses);
        include 'views/expense_list.php';
    }

    public function addExpense($name, $amount) {
        if (!empty($name) && is_numeric($amount)) {
            // Add expense to the database and update the total
            $this->model->addExpense($name, $amount);
        } else {
            // Handle validation errors or provide feedback to the user
            // Example: $this->error = "Invalid data provided.";
        }
        $this->listExpenses(); // Reload the expense list
    }

    public function editExpense($id, $name, $amount) {
        if (!empty($name) && is_numeric($amount)) {
            // Update expense in the database and update the total
            $this->model->editExpense($id, $name, $amount);
        } else {
            // Handle validation errors or provide feedback to the user
            // Example: $this->error = "Invalid data provided.";
        }
        $this->listExpenses(); // Reload the expense list
    }

    public function deleteExpense($id) {
        // Delete expense from the database and update the total
        $this->model->deleteExpense($id);
        $this->listExpenses(); // Reload the expense list
    }

    private function updateTotalAmount($expenses) {
        $this->total = array_sum(array_column($expenses, 'amount'));
    }

    public function getTotalAmount() {
        return $this->total;
    }
}
