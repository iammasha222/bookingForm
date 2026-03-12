<?php
// Получает данные из $_POST, вызывает Calculator.php, чтобы показать пользователю итог перед сохранением.

class SummaryController {

    public function show(){
        require_once '../app/view/summary_view.php';
    }

}