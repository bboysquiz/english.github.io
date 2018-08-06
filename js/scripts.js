$(function () {
    // wrap words in spans
    $('#JS_text p').each(function () {
        var $this = $(this);
        $this.html($this.text().replace(/\b(\w+)\b/g, "<span>$1</span>"));
    });

    // bind to each span
    $('#JS_text p span').hover(
        function () {
            $('#word').text($(this).css('background-color', '#ffff66').text());
        },
        function () {
            $('#word').text('');
            $(this).css('background-color', '');
        }
    );

    $('#JS_text p span').click(function () {
        //запоминаем слово
        var $word = $(this).text();

        // подставляем слово в модальное окно
        $('#word_in').text($word);


        // ищем в БД перевод

        // На сервер будет отправлен запрос страницы http://hostname/ajaxtest.php и указаны два параметра.
        // После получения ответа от сервера будет вызвана функция onAjaxSuccess, которая выведет
        // на экран сообщение с данными, присланными сервером.
        $.post(
            "search.php",
            {
                word: $word
            },
            onAjaxSuccess
        );

        function onAjaxSuccess(data) {

            // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
            if(data!=='') {
                $('#word_in').text($word + ' - ' + data);
                $('#but_y').click(function(){
					
                    $.post(
                        "dictionary.php",
                        {
                            word: $word
                        },
						
                        onAjaxSuccess
						
                    );
                    function onAjaxSuccess(data) {

                        // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
                        if(data!=='') {
                            $('#word_in').text('слово ' + $word + ' добавлено в ваш словарь!');
							
                        }
                        else {

                        }
                    }
                });
            }
            else {
                $('#word_in').text($word + ' - ' + 'К сожалению, перевода еще нет');
            }
        }
    });




});