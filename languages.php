<?php

function ibet_widget_language($lg)
{
    $lang = array();

    if ('en' == $lg) {
        $lang['preview'] = 'Preview';
        $lang['title'] = 'iBET Odds Payout Calculator';
        $lang['heading'] = 'Heading';
        $lang['from_currency'] = 'From';
        $lang['to_currency'] = 'To';
        $lang['сodes_currencies'] = 'Codes of currencies';
        $lang['сodes_currencies_open'] = 'new window will open';
        $lang['large'] = 'Large';
        $lang['straight_corners'] = 'Straight corners';
        $lang['language'] = 'Language';
        $lang['timezone'] = 'Timezone';
        $lang['theme'] = 'Theme';
        $lang['size_width'] = 'Size (width)';
        $lang['signature'] = 'Signed at bottom of widget';
        $lang['sizes']['100%'] = 'Auto size';
        $lang['background'] = 'Background color';
        $lang['generated_shortcode'] = 'Generated shortcode';
        // Themes
        $lang['themes']['primary'] = 'Dark blue';
        $lang['themes']['success'] = 'Green';
        $lang['themes']['info'] = 'Blue';
        $lang['themes']['warning'] = 'Yellow';
        $lang['themes']['danger'] = 'Red';
        $lang['themes']['default'] = 'Gray';
    } elseif ('ru' == $lg) {
        $lang['preview'] = 'Превью';
        $lang['title'] = 'iBET Калькулятор выплат шансов';
        $lang['heading'] = 'Заголовок';
        $lang['from_currency'] = 'Из';
        $lang['to_currency'] = 'В';
        $lang['сodes_currencies'] = 'Коды валют';
        $lang['сodes_currencies_open'] = 'откроется в новом окне';
        $lang['large'] = 'Крупный';
        $lang['straight_corners'] = 'Прямые углы';
        $lang['language'] = 'Язык';
        $lang['timezone'] = 'Часовой пояс';
        $lang['theme'] = 'Цветовое оформление';
        $lang['size_width'] = 'Размер (ширина)';
        $lang['signature'] = 'Подпись внизу виджета';
        $lang['sizes']['100%'] = 'Авто размер';
        $lang['background'] = 'Цвет фона';
        $lang['generated_shortcode'] = 'Шорткод для страниц';
        // Themes
        $lang['themes']['primary'] = 'Синий';
        $lang['themes']['success'] = 'Зеленый';
        $lang['themes']['info'] = 'Голубой';
        $lang['themes']['warning'] = 'Желтый';
        $lang['themes']['danger'] = 'Красный';
        $lang['themes']['default'] = 'Серый';
    } elseif ('it' == $lg) {
        $lang['preview'] = 'Anteprima';
        $lang['title'] = 'Calcolatore di pagamento delle probabilita iBET';
        $lang['heading'] = 'Intestazione';
        $lang['from_currency'] = 'Da';
        $lang['to_currency'] = 'A';
        $lang['сodes_currencies'] = 'Codici di valute';
        $lang['сodes_currencies_open'] = 'si aprirà una nuova finestra';
        $lang['large'] = 'Grande';
        $lang['straight_corners'] = 'Angoli retti';
        $lang['language'] = 'Linguaggio';
        $lang['timezone'] = 'Fuso orario';
        $lang['theme'] = 'Tema';
        $lang['size_width'] = 'Dimensioni (larghezza)';
        $lang['signature'] = 'Firmato in basso';
        $lang['sizes']['100%'] = 'Dimensione dell\'auto';
        $lang['background'] = 'Colore di sfondo';
        $lang['generated_shortcode'] = 'Shortcode generato';
        // Themes
        $lang['themes']['primary'] = 'Blu scuro';
        $lang['themes']['success'] = 'Verde';
        $lang['themes']['info'] = 'Blu';
        $lang['themes']['warning'] = 'Giallo';
        $lang['themes']['danger'] = 'Rosso';
        $lang['themes']['default'] = 'Grigio';
    } elseif ('fr' == $lg) {
        $lang['preview'] = 'Aperçu';
        $lang['title'] = 'Calculateur de gains de cotes iBET';
        $lang['heading'] = 'Titre';
        $lang['from_currency'] = 'De';
        $lang['to_currency'] = 'À';
        $lang['сodes_currencies'] = 'Codes de devises';
        $lang['сodes_currencies_open'] = 'nouvelle fenêtre s\'ouvrira';
        $lang['large'] = 'Grand';
        $lang['straight_corners'] = 'Coins droits';
        $lang['language'] = 'La langue';
        $lang['timezone'] = 'Fuseau horaire';
        $lang['theme'] = 'Thème';
        $lang['size_width'] = 'Taille (largeur)';
        $lang['signature'] = 'Signé en bas';
        $lang['sizes']['100%'] = 'Taille automatique';
        $lang['background'] = 'Couleur de fond';
        $lang['generated_shortcode'] = 'Généré Shortcode';
        // Themes
        $lang['themes']['primary'] = 'Bleu foncé';
        $lang['themes']['success'] = 'Vert';
        $lang['themes']['info'] = 'Bleu';
        $lang['themes']['warning'] = 'Jaune';
        $lang['themes']['danger'] = 'Rouge';
        $lang['themes']['default'] = 'Gris';
    } elseif ('es' == $lg) {
        $lang['preview'] = 'Avance';
        $lang['title'] = 'Calculadora de pagos de probabilidades iBET';
        $lang['heading'] = 'Título';
        $lang['from_currency'] = 'De';
        $lang['to_currency'] = 'A';
        $lang['сodes_currencies'] = 'Códigos de monedas';
        $lang['сodes_currencies_open'] = 'se abrirá una nueva ventana';
        $lang['large'] = 'Grande';
        $lang['straight_corners'] = 'Esquinas rectas';
        $lang['language'] = 'Idioma';
        $lang['timezone'] = 'Zona horaria';
        $lang['theme'] = 'Tema';
        $lang['size_width'] = 'Tamaño (ancho)';
        $lang['signature'] = 'Firmado en la parte inferior';
        $lang['sizes']['100%'] = 'Tamaño automático';
        $lang['background'] = 'Color de fondo';
        $lang['generated_shortcode'] = 'Código abreviado generado';
        // Themes
        $lang['themes']['primary'] = 'Azul oscuro';
        $lang['themes']['success'] = 'Verde';
        $lang['themes']['info'] = 'Azul';
        $lang['themes']['warning'] = 'Amarillo';
        $lang['themes']['danger'] = 'Rojo';
        $lang['themes']['default'] = 'Gris';
    } elseif ('de' == $lg) {
        $lang['preview'] = 'Vorschau';
        $lang['title'] = 'iBET Gewinnauszahlungsrechner';
        $lang['heading'] = 'Überschrift';
        $lang['from_currency'] = 'Von';
        $lang['to_currency'] = 'Zu';
        $lang['сodes_currencies'] = 'Codes von währungen';
        $lang['сodes_currencies_open'] = 'neues fenster wird geöffnet';
        $lang['large'] = 'Groß';
        $lang['straight_corners'] = 'Gerade ecken';
        $lang['language'] = 'Sprache';
        $lang['timezone'] = 'Zeitzone';
        $lang['theme'] = 'Thema';
        $lang['size_width'] = 'Größe (Breite)';
        $lang['signature'] = 'Unten signiert';
        $lang['sizes']['100%'] = 'Automatische skalierung';
        $lang['background'] = 'Hintergrundfarbe';
        $lang['generated_shortcode'] = 'Generierter kurzwahlcode';
        // Themes
        $lang['themes']['primary'] = 'Dunkelblau';
        $lang['themes']['success'] = 'Grün';
        $lang['themes']['info'] = 'Blau';
        $lang['themes']['warning'] = 'Gelb';
        $lang['themes']['danger'] = 'Rot';
        $lang['themes']['default'] = 'Grau';
    } elseif ('cn' == $lg) {
        $lang['preview'] = '预习';
        $lang['title'] = 'iBET赔率支付计算器';
        $lang['heading'] = '标题';
        $lang['from_currency'] = '从';
        $lang['to_currency'] = '至';
        $lang['сodes_currencies'] = '货币代码';
        $lang['сodes_currencies_open'] = '新窗口将打开';
        $lang['large'] = '大';
        $lang['straight_corners'] = '直角';
        $lang['language'] = '语言';
        $lang['timezone'] = '时区';
        $lang['theme'] = '颜色';
        $lang['size_width'] = '大小（宽度）';
        $lang['signature'] = '在底部签名';
        $lang['sizes']['100%'] = '自动尺寸';
        $lang['background'] = '背景颜色';
        $lang['generated_shortcode'] = '生成的简码';
        // Themes
        $lang['themes']['primary'] = '深蓝';
        $lang['themes']['success'] = '绿色';
        $lang['themes']['info'] = '蓝色';
        $lang['themes']['warning'] = '黄色';
        $lang['themes']['danger'] = '红';
        $lang['themes']['default'] = '灰色';
    } elseif ('id' == $lg) {
        $lang['preview'] = 'Preview';
        $lang['title'] = 'Kalkulator Pembayaran Odds iBET';
        $lang['heading'] = 'Heading';
        $lang['from_currency'] = 'Dari';
        $lang['to_currency'] = 'Untuk';
        $lang['сodes_currencies'] = 'Kode mata uang';
        $lang['сodes_currencies_open'] = 'jendela baru akan terbuka';
        $lang['large'] = 'Besar';
        $lang['straight_corners'] = 'Sudut lurus';
        $lang['language'] = 'Bahasa';
        $lang['timezone'] = 'Zona waktu';
        $lang['theme'] = 'Gaya';
        $lang['size_width'] = 'Ukuran (lebar)';
        $lang['signature'] = 'Masuk di bagian bawah widget';
        $lang['sizes']['100%'] = 'Ukuran Otomatis';
        $lang['background'] = 'Warna latar belakang';
        $lang['generated_shortcode'] = 'Hasilkan shortcode';
        // Themes
        $lang['themes']['primary'] = 'Biru tua';
        $lang['themes']['success'] = 'Hijau';
        $lang['themes']['info'] = 'Biru';
        $lang['themes']['warning'] = 'Kuning';
        $lang['themes']['danger'] = 'Merah';
        $lang['themes']['default'] = 'Kelabu';
    } elseif ('hi' == $lg) {
        $lang['preview'] = 'पूर्वावलोकन';
        $lang['title'] = 'आईबेट ऑड्स पेआउट कैलकुलेटर';
        $lang['heading'] = 'शीर्षक';
        $lang['from_currency'] = 'से';
        $lang['to_currency'] = 'सेवा मेरे';
        $lang['сodes_currencies'] = 'मुद्राओं के कोड';
        $lang['сodes_currencies_open'] = 'नई खिड़की खुल जाएगी';
        $lang['large'] = 'विशाल';
        $lang['straight_corners'] = 'सीधे कोनों';
        $lang['language'] = 'भाषा';
        $lang['timezone'] = 'समय क्षेत्र';
        $lang['theme'] = 'डिज़ाइन';
        $lang['size_width'] = 'आकार (चौड़ाई)';
        $lang['signature'] = 'विजेट के नीचे हस्ताक्षर किए';
        $lang['sizes']['100%'] = 'ऑटो साइज़';
        $lang['background'] = 'पीछे का रंग';
        $lang['generated_shortcode'] = 'जेनरेटेड शोर्ट';
        // Themes
        $lang['themes']['primary'] = 'गहरा नीला';
        $lang['themes']['success'] = 'हरा';
        $lang['themes']['info'] = 'नीला';
        $lang['themes']['warning'] = 'पीला';
        $lang['themes']['danger'] = 'लाल';
        $lang['themes']['default'] = 'धूसर';
    } elseif ('ja' == $lg) {
        $lang['preview'] = 'プレビュー';
        $lang['title'] = 'iBETオッズペイアウト計算機';
        $lang['heading'] = '見出し';
        $lang['from_currency'] = 'から';
        $lang['to_currency'] = 'に';
        $lang['сodes_currencies'] = '通貨コード';
        $lang['сodes_currencies_open'] = '新しいウィンドウが開きます';
        $lang['large'] = '大';
        $lang['straight_corners'] = 'ストレートコーナー';
        $lang['language'] = '言語';
        $lang['timezone'] = 'タイムゾーン';
        $lang['theme'] = 'スタイル';
        $lang['size_width'] = 'サイズ（幅）';
        $lang['signature'] = 'ウィジェットの下部に署名';
        $lang['sizes']['100%'] = '自動サイズ';
        $lang['background'] = '背景色';
        $lang['generated_shortcode'] = '生成されたショートコード';
        // Themes
        $lang['themes']['primary'] = '濃紺';
        $lang['themes']['success'] = '緑';
        $lang['themes']['info'] = '青';
        $lang['themes']['warning'] = '黄';
        $lang['themes']['danger'] = '赤';
        $lang['themes']['default'] = 'グレー';
    } elseif ('pt' == $lg) {
        $lang['preview'] = 'Visualizar';
        $lang['title'] = 'Calculadora de Pagamento de Probabilidades do iBET';
        $lang['heading'] = 'Título';
        $lang['from_currency'] = 'A partir de';
        $lang['to_currency'] = 'Para';
        $lang['сodes_currencies'] = 'Códigos de Moedas';
        $lang['сodes_currencies_open'] = 'nova janela será aberta';
        $lang['large'] = 'Ampla';
        $lang['straight_corners'] = 'Cantos retos';
        $lang['language'] = 'Língua';
        $lang['timezone'] = 'Fuso horário';
        $lang['theme'] = 'Estilo';
        $lang['size_width'] = 'Tamanho (largura)';
        $lang['signature'] = 'Assinado na parte inferior do widget';
        $lang['sizes']['100%'] = 'Tamanho automático';
        $lang['background'] = 'Cor de fundo';
        $lang['generated_shortcode'] = 'Código curto gerado';
        // Themes
        $lang['themes']['primary'] = 'Azul escuro';
        $lang['themes']['success'] = 'Verde';
        $lang['themes']['info'] = 'Azul';
        $lang['themes']['warning'] = 'Amarelo';
        $lang['themes']['danger'] = 'Vermelho';
        $lang['themes']['default'] = 'Cinzento';
    }

    $lang['sizes']['160px'] = '160px';

    return $lang;
}
