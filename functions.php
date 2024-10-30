<?php
    
    
    
    
function ibet_return_list_languages()
{
    return array(
        'en' => 'English', 
        'ru' => 'Русский', 
        'it' => 'Italiano', 
        'fr' => 'Français', 
        'es' => 'Español', 
        'cn' => '中国', 
        'de' => 'Deutsch',
        'hi' => 'हिन्दी',
        'id' => 'Bahasa Indonesia',
        'ja' => '日本語',
        'pt' => 'Português',
    );
}

function ibet_return_language_detected()
{
    $sl = substr(get_bloginfo('language'), 0, 2);

    return (in_array($sl, array_keys(ibet_return_list_languages()))) ? $sl : 'en';
}

function ibet_return_currency_list()
{
    $contents = file_get_contents(plugin_dir_path(__FILE__).'data/currencies_'.ibet_return_language_detected().'.json');

    return json_decode($contents, true);
}

function ibet_return_iframe($params, $width, $height, $signature = null, $text = null)
{
    //$target_url = strtolower('https://'.$params['fm'].(('en' != $params['lg']) ? '.'.$params['lg'] : '').'.currencyrate.today'.DIRECTORY_SEPARATOR.$params['to']);
    
    //$url = 'https://currencyrate.today/load-converter?'.http_build_query($params);
    $output = '
    <form action class="ibet-form">
    <fieldset>
    <section>
    <div class="row">
    <label class="label col col-xs-3 col-sm-4"><h4>STAKE</h4></label>
    <div class="col col-xs-4">
    <label class="input">
    <input type="text" name="a">
    </label>
    </div>
    <label class="label col col-xs-2"><h4>ODDS</h4></label>
    <div class="col col-xs-3 col-sm-2">
    <label class="input">
    <input type="text" name="b">
    </label>
    </div>
    </div>
    </section>
    
    <section>
    <div class="row">
    <label class="label col col-xs-3 col-sm-4"><h4>PAYOUT</h4></label>
    <div class="col col-xs-4">
    <label class="input">
    <input type="text" name="c">
    </label>
    </div>
    <div class="col col-xs-2"></div>
    <div class="col col-xs-3"></div>
    </div>
    </section>
    
    <section>
    <div class="row">
    <div class="col col-xs-2 col-sm-4"></div>
    <div class="col col-xs-8 col-sm-4">
    <button type="button" class="btn btn-primary btn-lg noradius" onclick="docalc(this.form);">Calculate</button>
    </div>
    <div class="col col-xs-2 col-sm-4"></div>
    </div>
    </section>
    
    </fieldset>
    </form>';
    //if ($signature) {
    //    $output .= '<p>'.(($text) ? $text.': ' : '').'<a href="'.$target_url.'" target="_blank" class="ccc-base-currency-link">'.$params['fm'].DIRECTORY_SEPARATOR.$params['to'].'</a></p>';
    //}

    return $output;
}

function ibet_print_timezone_list($code, $arr)
{
    $output_string = '';
    foreach ($arr as $v) {
        $output_string .= '<option value="'.$v[0].'"'.(($code == $v[0]) ? ' selected' : '').'>'.$v[1].'</option>'.PHP_EOL;
    }

    echo $output_string;
}

function ibet_print_select_options($code, $arr, $o = false)
{
    $output_string = '';
    foreach ($arr as $k => $v) {
        $output_string .= '<option value="'.$k.'"'.(($code == $k) ? ' selected' : '').'>'.((true === $o) ? $k.' - '.$v : $v).'</option>'.PHP_EOL;
    }

    echo $output_string;
}
