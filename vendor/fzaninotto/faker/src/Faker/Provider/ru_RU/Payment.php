<?php

namespace Faker\Provider\ru_RU;

class Payment extends \Faker\Provider\Payment
{
    /**
     * @see list of Russian banks (2015-04-04), source: http://www.banki.ru/banks/
     * @example "cat *.html | grep 'b-cb-list__name' | iconv --f windows-1251 --t utf-8 | grep -o '>.*<' | \
     * sed -r 's/&mdash;//' | sed -r 's/[\<\>]//g' | sed -r "s/(^|$)/'/g" | sed -r 's/$/,/' | sed -r 's/\&(laquo|raquo);/"/g' | \
     * sed -r 's/\s+/ /g'"
     */
    protected static $banks = array(
        'Новый Промышленный Банк',
        'Новый Символ',
        'Нокссбанк',
        'Ноосфера',
        'Нордеа Банк',
        'Нота-Банк',
        'НС Банк',
        'НСТ-Банк',
        'Нэклис-Банк',
        'Образование',
        'Объединенный Банк Промышленных Инвестиций',
        'Объединенный Банк Республики',
        'Объединенный Капитал',
        'Объединенный Кредитный Банк',
        'Объединенный Кредитный Банк  Московский филиал',
        'Объединенный Национальный Банк',
        'Объединенный Резервный Банк',
        'Океан Банк',
        'ОЛМА-Банк',
        'Онего',
        'Оней Банк',
        'ОПМ-Банк',
        'Оргбанк',
        'Оренбург',
        'ОТП Банк',
        'ОФК Банк',
        'Охабанк',
        'Первобанк',
        'Первомайский',
        'Первоуральскбанк',
        'Первый Дортрансбанк',
        'Первый Инвестиционный банк',
        'Первый Клиентский Банк',
        'Первый Чешско-Российский Банк',
        'Пересвет',
        'Пермь',
        'Петербургский Социальный Коммерческий Банк',
        'Петрокоммерц',
        'ПИР Банк',
        'Платина',
        'Плато-Банк',
        'Плюс Банк',
        'Пойдем!',
        'Почтобанк',
        'Прайм Финанс',
        'Преодоление',
        'Приморье',
        'Примсоцбанк',
        'Примтеркомбанк',
        'Прио-Внешторгбанк',
        'Приобье',
        'Приполярный',
        'Приско Капитал Банк',
        'Пробизнесбанк',
        'Проинвестбанк',
        'Прокоммерцбанк',
        'Проминвестбанк',
        'Промрегионбанк',
        'Промсвязьбанк',
        'Промсвязьинвестбанк',
        'Промсельхозбанк',
        'Промтрансбанк',
        'Промышленно-Финансовое Сотрудничество',
        'Промэнергобанк',
        'Профессионал Банк',
        'Профит Банк',
        'Прохладный',
        'Пульс Столицы',
        'Радиотехбанк',
        'Развитие',
        'Развитие-Столица',
        'Райффайзенбанк',
        'Расчетно-Кредитный Банк',
        'Расчетный Дом',
        'РБА',
        'Региональный Банк Развития',
        'Региональный Банк Сбережений',
        'Региональный Коммерческий Банк',
        'Региональный Кредит',
        'Регионфинансбанк',
        'Регнум',
        'Резерв',
        'Ренессанс',
        'Ренессанс Кредит',
        'Рента-Банк',
        'РЕСО Кредит',
        'Республиканский Кредитный Альянс',
        'Ресурс-Траст',
        'Риабанк',
        'Риал-Кредит',
        'Ринвестбанк',
        'Ринвестбанк Московский офис',
        'РИТ-Банк',
        'РН Банк',
        'Росавтобанк',
        'Росбанк',
        'Росбизнесбанк',
        'Росгосстрах Банк',
        'Росдорбанк',
        'РосЕвроБанк',
        'РосинтерБанк',
        'Роспромбанк',
        'Россельхозбанк',
        'Российская Финансовая Корпорация',
        'Российский Капитал',
        'Российский Кредит',
        'Российский Национальный Коммерческий Банк',
        'Россита-Банк',
        'Россия',
        'Рост Банк',
        'Ростфинанс',
        'Росэксимбанк',
        'Росэнергобанк',
        'Роял Кредит Банк',
        'РСКБ',
        'РТС-Банк',
        'РУБанк',
        'Рублев',
        'Руна-Банк',
        'Рунэтбанк',
        'Рускобанк',
        'Руснарбанк',
        'Русский Банк Сбережений',
        'Русский Ипотечный Банк',
        'Русский Международный Банк',
        'Русский Национальный Банк',
        'Русский Стандарт',
        'Русский Торговый Банк',
        'Русский Трастовый Банк',
        'Русский Финансовый Альянс',
        'Русский Элитарный Банк',
        'Русславбанк',
        'Руссобанк',
        'Русстройбанк',
        'Русфинанс Банк',
        'Русь',
        'РусьРегионБанк',
        'Русьуниверсалбанк',
        'РусЮгбанк',
        'РФИ Банк',
        'Саммит Банк',
        'Санкт-Петербургский Банк Инвестиций',
        'Саратов',
        'Саровбизнесбанк',
        'Сбербанк России',
        'Связной Банк',
        'Связь-Банк',
        'СДМ-Банк',
        'Севастопольский Морской банк',
        'Северный Кредит',
        'Северный Народный Банк',
        'Северо-Восточный Альянс',
        'Северо-Западный 1 Альянс Банк',
        'Северстройбанк',
        'Севзапинвестпромбанк',
        'Сельмашбанк',
        'Сервис-Резерв',
        'Сетелем Банк',
        'СИАБ',
        'Сибирский Банк Реконструкции и Развития',
        'Сибнефтебанк',
        'Сибсоцбанк',
        'Сибэс',
        'Сибэс Московский офис',
        'Синергия',
        'Синко-Банк',
        'Система',
        'Сити Инвест Банк',
        'Ситибанк',
        'СКА-Банк',
        'СКБ-Банк',
        'Славия',
        'Славянбанк',
        'Славянский Кредит',
        'Смартбанк',
        'СМБ-Банк',
        'Смолевич',
        'СМП Банк',
        'Снежинский',
        'Собинбанк',
        'Соверен Банк',
        'Советский',
        'Совкомбанк',
        'Современные Стандарты Бизнеса',
        'Содружество',
        'Соколовский',
        'Солид Банк',
        'Солидарность (Москва)',
        'Солидарность (Самара)',
        'Социнвестбанк',
        'Социнвестбанк Московский филиал',
        'Социум-Банк',
        'Союз',
        'Союзный',
        'Спецстройбанк',
        'Спиритбанк',
        'Спурт Банк',
        'Спутник',
        'Ставропольпромстройбанк',
        'Сталь Банк',
        'Стандарт-Кредит',
        'Стар Альянс',
        'СтарБанк',
        'Старооскольский Агропромбанк',
        'Старый Кремль',
        'Стелла-Банк',
        'Столичный Кредит',
        'Стратегия',
        'Строительно-Коммерческий Банк',
        'Стройлесбанк',
        'Сумитомо Мицуи',
        'Сургутнефтегазбанк',
        'СЭБ Банк',
        'Таатта',
        'Таврический',
        'Таганрогбанк',
        'Тагилбанк',
        'Тайдон',
        'Тайм Банк',
        'Тальменка-Банк',
        'Тальменка-Банк Московский филиал',
        'Тамбовкредитпромбанк',
        'Татагропромбанк',
        'Татсоцбанк',
        'Татфондбанк',
        'Таурус Банк',
        'ТверьУниверсалБанк',
        'Тексбанк',
        'Темпбанк',
        'Тендер-Банк',
        'Терра',
        'Тетраполис',
        'Тимер Банк',
        'Тинькофф Банк',
        'Тихоокеанский Внешторгбанк',
        'Тойота Банк',
        'Тольяттихимбанк',
        'Томскпромстройбанк',
        'Торгово-Промышленный Банк Китая',
        'Торговый Городской Банк',
        'Торжокуниверсалбанк',
        'Транскапиталбанк',
        'Транснациональный Банк',
        'Транспортный',
        'Трансстройбанк',
        'Траст Капитал Банк',
        'Тройка-Д Банк',
        'Тульский Промышленник',
        'Тульский Промышленник Московский офис',
        'Тульский Расчетный Центр',
        'Турбобанк',
        'Тусар',
        'ТЭМБР-Банк',
        'ТЭСТ',
        'Углеметбанк',
        'Уздан',
        'Унифин',
        'Унифондбанк',
        'Уралкапиталбанк',
        'Уралприватбанк',
        'Уралпромбанк',
        'Уралсиб',
        'Уралтрансбанк',
        'Уралфинанс',
        'Уральский Банк Реконструкции и Развития',
        'Уральский Межрегиональный Банк',
        'Уральский Финансовый Дом',
        'Ури Банк',
        'Уссури',
        'ФДБ',
        'ФИА-Банк',
        'Финам Банк',
        'Финанс Бизнес Банк',
        'Финансово-Промышленный Капитал',
        'Финансовый Капитал',
        'Финансовый Стандарт',
        'Финарс Банк',
        'Финпромбанк (ФПБ Банк)',
        'Финтрастбанк',
        'ФК Открытие (бывш. НОМОС-Банк)',
        'Флора-Москва',
        'Фольксваген Банк Рус',
        'Фондсервисбанк',
        'Фора-Банк',
        'Форбанк',
        'Форус Банк',
        'Форштадт',
        'Фьючер',
        'Хакасский Муниципальный Банк',
        'Ханты-Мансийский банк Открытие',
        'Химик',
        'Хлынов',
        'Хованский',
        'Холдинвестбанк',
        'Холмск',
        'Хоум Кредит Банк',
        'Центр-инвест',
        'Центрально-Азиатский',
        'Центрально-Европейский Банк',
        'Центркомбанк',
        'ЦентроКредит',
        'Церих',
        'Чайна Констракшн',
        'Чайнасельхозбанк',
        'Челиндбанк',
        'Челябинвестбанк',
        'Черноморский банк развития и реконструкции',
        'Чувашкредитпромбанк',
        'Эйч-Эс-Би-Си Банк (HSBC)',
        'Эко-Инвест',
        'Экономбанк',
        'Экономикс-Банк',
        'Экси-Банк',
        'Эксперт Банк',
        'Экспобанк',
        'Экспресс-Волга',
        'Экспресс-Кредит',
        'Эл Банк',
        'Элита',
        'Эльбин',
        'Энергобанк',
        'Энергомашбанк',
        'Энерготрансбанк',
        'Эно',
        'Энтузиастбанк',
        'Эргобанк',
        'Ю Би Эс Банк',
        'ЮГ-Инвестбанк',
        'Югра',
        'Южный Региональный Банк',
        'ЮМК',
        'Юниаструм Банк',
        'ЮниКредит Банк',
        'Юнистрим',
        'Япы Креди Банк Москва',
        'ЯР-Банк',
        'Яринтербанк',
        'Ярославич',
        'K2 Банк',
        'АББ',
        'Абсолют Банк',
        'Авангард',
        'Аверс',
        'Автоградбанк',
        'АвтоКредитБанк',
        'Автоторгбанк',
        'Агроинкомбанк',
        'Агропромкредит',
        'Агророс',
        'Агросоюз',
        'Адамон Банк',
        'Адамон Банк Московский филиал',
        'Аделантбанк',
        'Адмиралтейский',
        'Азиатско-Тихоокеанский Банк',
        'Азимут',
        'Азия Банк',
        'Азия-Инвест Банк',
        'Ай-Си-Ай-Си-Ай Банк (ICICI)',
        'Айви Банк',
        'АйМаниБанк',
        'Ак Барс',
        'Акибанк',
        'Аккобанк',
        'Акрополь',
        'Аксонбанк',
        'Актив Банк',
        'АктивКапитал Банк',
        'АктивКапитал Банк Московский филиал',
        'АктивКапитал Банк Санкт-Петербургский филиал',
        'Акцент',
        'Акцепт',
        'Акция',
        'Алданзолотобанк',
        'Александровский',
        'Алеф-Банк',
        'Алжан',
        'Алмазэргиэнбанк',
        'АлтайБизнес-Банк',
        'Алтайкапиталбанк',
        'Алтынбанк',
        'Альба Альянс',
        'Альта-Банк',
        'Альтернатива',
        'Альфа-Банк',
        'АМБ Банк',
        'Америкэн Экспресс Банк',
        'Анелик РУ',
        'Анкор Банк',
        'Анталбанк',
        'Апабанк',
        'Аресбанк',
        'Арзамас',
        'Арксбанк',
        'Арсенал',
        'Аспект',
        'Ассоциация',
        'БайкалБанк',
        'БайкалИнвестБанк',
        'Байкалкредобанк',
        'Балаково-Банк',
        'Балтийский Банк',
        'Балтика',
        'Балтинвестбанк',
        'Банк "Акцент" Московский филиал',
        'Банк "МБА-Москва"',
        'Банк "Санкт-Петербург"',
        'Банк АВБ',
        'Банк БКФ',
        'Банк БФА',
        'Банк БЦК-Москва',
        'Банк Город',
        'Банк Жилищного Финансирования',
        'Банк Инноваций и Развития',
        'Банк Интеза',
        'Банк ИТБ',
        'Банк Казани',
        'Банк Китая (Элос)',
        'Банк Кредит Свисс',
        'Банк МБФИ',
        'Банк Москвы',
        'Банк на Красных Воротах',
        'Банк Оранжевый (бывш. Промсервисбанк)',
        'Банк оф Токио-Мицубиси',
        'Банк Премьер Кредит',
        'Банк ПСА Финанс