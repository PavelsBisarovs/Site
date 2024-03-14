// JavaScript код
// Этот скрипт выполняется после загрузки документа

// Пример: добавляем обработчик события клика на кнопку
document.addEventListener('DOMContentLoaded', function() {
    var button = document.getElementById('myButton'); // Получаем кнопку по идентификатору
    button.addEventListener('click', function() { // Добавляем обработчик события клика
        alert('Кнопка была нажата!'); // Выводим сообщение при нажатии на кнопку
    });
});
