<?php
//Финальный этап. Вызывает методы BookingModel для записи в БД, FileGenerator для создания файлов и отправляет Email.
 class SuccessController {

    public function execute(){
        require_once '../app/view/success_view.php';
    }

}