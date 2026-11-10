@extends('layouts.main')
@section('title')
    Контакты
@endsection
@section('content')
    <div class="page ">

        <h1>Типовые шаблоны договоров</h1>

        <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Файл</th>
                    <th>Тип документа</th>
                    <th>Краткое назначение</th>
                    <th>Скачать</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src="storage/img/docx.png" width=30>
                        <a href="storage/template/Agentstkiy_dogovor_el-energiya_001-2026.pdf" target="_blank" class="col-name-rus">
                            Агентский договор на электроснабжение
                        </a>
                    </td>
                    <td class="col-type">Агентский договор</td>
                    <td>Организация электроснабжения.</td>
                    <td>
                        <a href="storage/template/Agentstkiy_dogovor_el-energiya_001-2026.docx" class="btn-download" download>
                            ⬇ .docx
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="storage/img/docx.png" width=30>
                        <a href="storage/template/Proekt_dogovora_predostavlenie_infrastrukturi_2026.pdf" target="_blank" class="col-name-rus">
                            Договор на предоставление инфраструктуры
                        </a>
                    </td>
                    <td class="col-type">Договор инфраструктуры</td>
                    <td>Доступ к причалам, дорогам и инфраструктуре.</td>
                    <td>
                        <a href="storage/template/Proekt_dogovora_predostavlenie_infrastrukturi_2026.docx" class="btn-download" download>
                            ⬇ .docx
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="storage/img/docx.png" width=30>
                        <a href="storage/template/Proekt_dogovora_PRR_na_2026g.pdf" target="_blank" class="col-name-rus">
                            Договор на оказание услуг по перевалке груза
                        </a>
                    </td>
                    <td class="col-type">Договор ПРР (перевалка)</td>
                    <td>Основной производственный договор: погрузка/выгрузка.</td>
                    <td>
                        <a href="storage/template/Proekt_dogovora_PRR_na_2026g.docx" class="btn-download" download>
                            ⬇ .docx
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="storage/img/docx.png" width=30>
                        <a href="storage/template/Reestr_zayavok_na_zakluchenie_dogovorov.pdf" target="_blank" class="col-name-rus">
                            Реестр заявок на заключение договоров
                        </a>
                    </td>
                    <td class="col-type">Реестр заявок</td>
                    <td>Внутренний журнал учета обращений.</td>
                    <td>
                        <a href="storage/template/Reestr_zayavok_na_zakluchenie_dogovorov.docx" class="btn-download" download>
                            ⬇ .docx
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="storage/img/docx.png" width=30>
                        <a href="storage/template/Svedeniya_o_dostupnoy_moschnosti_terminala.pdf" target="_blank" class="col-name-rus">
                            Сведения о доступной мощности терминала
                        </a>
                    </td>
                    <td class="col-type">Справка о мощности</td>
                    <td>Производственный лимит: 20 000 тонн в месяц.</td>
                    <td>
                        <a href="storage/template/Svedeniya_o_dostupnoy_moschnosti_terminala.docx" class="btn-download" download>
                            ⬇ .docx
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="storage/img/docx.png" width=30>
                        <a href="storage/template/Tipovaya_forma_zayavki_na_zakluchenie_dogovora_na_okazanie_uslug.pdf" target="_blank" class="col-name-rus">
                            Типовая форма заявки на заключение договора
                        </a>
                    </td>
                    <td class="col-type">Бланк заявки</td>
                    <td>Первичный документ от клиента для запроса услуг.</td>
                    <td>
                        <a href="storage/template/Tipovaya_forma_zayavki_na_zakluchenie_dogovora_na_okazanie_uslug.docx" class="btn-download" download>
                            ⬇ .docx
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="storage/img/xlsx.png" width=30>
                        <a href="storage/template/Tarifi_MRTS_Terminal_2026_Kommertsiya.pdf" target="_blank" class="col-name-rus">
                            Тарифы МРТС Терминал 2026 (Коммерция)
                        </a>
                    </td>
                    <td class="col-type">Прайс-лист</td>
                    <td>Детальная таблица коммерческих тарифов.</td>
                    <td>
                        <a href="storage/template/Tarifi_MRTS_Terminal_2026_Kommertsiya.xlsx" class="btn-download" download>
                            ⬇ .xlsx
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    </div>
@endsection
