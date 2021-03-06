<?php

define("TO_THE_BEGINING", "В начало");
define("ABOUT_AS", "О нас");
define("PAYMENT", "Оплата");
define("HEADER_TITLE_1", "ПРОФЕССИОНАЛЬНЫЕ РЕКЛАМНЫЕ КАМПАНИИ В GOOGLE ADWORDS И ЯНДЕКС.ДИРЕКТ");
define("HEADER_TITLE_2", "А также окажем полное сопровождение Ваших рекламных кампаний");
define("AUTHORIZATION", "АВТОРИЗАЦИЯ");
define("ABOUT_AS_1", "О нас");
define("ABOUT_AS_2", "Мы - команда фрилансеров. Предлагаем Вам инновационный подход к разработке Вашего сайта. Мы
                        прекрасно понимаем, что целью для большинства проектов является последующее продвижение в топ
                        выдачи поисковых систем и/или привлечение клиентов с помощью рекламы. Именно поэтому все
                        проекты, разработанные нами, имеют ряд преимуществ с точки зрения конверсионности и дальнейшей
                        SEO оптимизации, а также учитывают современные принципы онлайн-маркетинга и юзабилити.");
define("DESCRIPTION_1", "Как показываться дешевле и выше конкурентов, а платить меньше
                            в Google Adwords и Яндекс директ?");
define("DESCRIPTION_1_1", "КАЧЕСТВО КАЖДОГО
                                ОБЪЯВЛЕНИЯ");
define("DESCRIPTION_1_2", "Каждый поисковый запрос Вашего клиента, должен совпадать с объявлением, без потери смысла
                                и грамотно написанным, а таких запросов как правило от 300 до 20 000, в зависимости от
                                спроса и стран, городов в которых необходимо рекламироваться.");
define("DESCRIPTION_2_1", "КОЛИЧЕСТВО КЛИКОВ ПО ОТНОШЕНИЮ К
                                ПОКАЗАМ ОБЪЯВЛЕНИЯ ИЛИ ПРОСТО (CTR)");
define("DESCRIPTION_2_2", "Каждое Ваше объявление, должно быть по максимум большим на поиске, отвечать потребностям
                                клиента, содержать УТП и с призывом к действию. Тогда его будут чаще нажимать, а значит
                                Google Adwords и Яндекс Директу будет выгодней показывать Вас дешевле конкурентов.");
define("DESCRIPTION_3_1", "СООТВЕТСТВИЕ САЙТА
                                К РЕКЛАМНОЙ КАМПАНИИ");
define("DESCRIPTION_3_2", "При плохой настройки рекламной кампании, Ваш сайт будут находить и просматривать по
                                запросам, которые не относятся к Вам, а Вы будете переплачивать за просмотры сайта не
                                вашей целевой аудитории.");
define("PAY_SYSTEM", "Платежные системы");
define("PAY_SYSTEM_DESC", "Выберите платежную систему для пополнения счета");
define("PAY_SYSTEM_SUM", "Сумма к зачислению");
define("PAY_SYSTEM_RUBLES", "РУБ");
define("PAY_SYSTEM_DEPOSIT", "Пополнить счет");
define("AUTH_EMAIL_ADDRESS", "Адрес электронной почты");
define("PASSWORD", "Пароль");
define("FORM_INFO", "Данные для авторизации выдаются Вам Вашим
                            менеджером.");
define("FORM_CLOSE", "Закрыть");
define("FORM_SUM_VAL", "Сумма платежа");
define("FORM_COMMEND", "Комментарий");
define("FORM_GO_PAY", "Перейти к оплате");
define("CONTACT_ADDRESS", "Адрес: Бумажная улица, 3, Санкт-Петербург, Россия");
define("CONTACT_PHONE", "Телефон: 8 (800) 775-70-73");
define("CONTACT_EMAIL", "email: support@adwords-seo.ru");
define("CONTACT_WORK_TIME", "График работы: Работаем с 10:00 до 19:00 ПН-ПТ");
define("COME_IN", "Войти");
define("BEFORE_AMOUNT", "");
define("AFTER_AMOUNT", "<b>₽</b>");


// paysystem array
$pay_system = [
    [
        'payment type' => 'visa',
        'name' => 'Visa',
        'url' => 'images/pay_system/1logo-visa.png',
        'description' => 'Глобальная платежная система, которая обеспечивает доступ к быстрой, безопасной и надежной сети электронных платежей держателям карт, в более чем 200 странах мира.',
    ],
    [
        'payment type' => 'mastercard',
        'name' => 'MasterCard',
        'url' => 'images/pay_system/1logo-mastercard.png',
        'description' => 'международная платёжная система, транснациональная финансовая корпорация.',
    ],
    [
        'payment type' => 'payeer',
        'name' => 'Payeer',
        'url' => 'images/pay_system/1payeer.png',
        'description' => 'С помощью платёжной системы Payeer возможна оплата услуг на веб-сайтах, проведение международных переводов онлайн в большинство стран мира, прием платежей различными способами, автоматический обмен валют.',
    ],
    [
        'payment type' => 'qiwi',
        'name' => 'Qiwi',
        'url' => 'images/pay_system/1logo-qiwi-koshelek.png',
        'description' => 'Представляет собой электронную платёжную систему, позволяющую производить платежи с
        использованием различных устройств и каналов связи, как стационарных, так и мобильных.',
    ],
    [
        'payment type' => 'webmoney',
        'name' => 'WebMoney',
        'url' => 'images/pay_system/1logo-webmoney.png',
        'description' => 'Электронная система расчётов, основанная в 1998 году и принадлежащая WM Transfer
        Ltd.',
    ],
    [
        'payment type' => 'jandex',
        'name' => 'Яндекс.Деньги',
        'url' => 'images/pay_system/1logo-yandex-money.png',
        'description' => 'сервис электронных платежей в Рунете. Он позволяет принимать оплату
        электронными деньгами, наличными, с банковских карт.',
    ],
];