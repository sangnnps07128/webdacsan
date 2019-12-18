<?php
function base_url($uri)
{
    $url = "https://cakhotranluanhcm.chodacsansach.vn/$uri";
    return $url;
}
function base_url_home($uri)
{
    $url = "https://chodacsansach.vn/$uri";
    return $url;
}
function WordLimit($Keyword,$WordLimit){

    if (strlen($Keyword)<=$WordLimit) { return $Keyword; }
    $Keyword= substr($Keyword,0,strrpos(substr($Keyword,0,$WordLimit),' '));
    return $Keyword;
}
function utf8convert($str) {

    if(!$str) return false;

    $utf8 = array(

    'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

    'd'=>'đ|Đ',

    'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

    'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',

    'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

    'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

    'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',

    );

    foreach($utf8 as $ascii=>$uni) $str = preg_replace("/($uni)/i",$ascii,$str);

return $str;

}

function utf8tourl($text){
$text = strtolower(utf8convert($text));
$text = str_replace( "ß", "ss", $text);
$text = str_replace( "%", "", $text);
$text = preg_replace("/[^_a-zA-Z0-9 -] /", "",$text);
$text = str_replace(array('%20', ' '), '-', $text);
$text = str_replace("----","-",$text);
$text = str_replace("---","-",$text);
$text = str_replace("--","-",$text);
$text = str_replace(".","-",$text);
return $text;
}

function covert_vi_to_en($str)
{
    if(!$str) return false;
    $unicode = array(

        'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',

        'd'=>'đ',

        'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',

        'i'=>'í|ì|ỉ|ĩ|ị',

        'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',

        'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',

        'y'=>'ý|ỳ|ỷ|ỹ|ỵ',

        'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

        'D'=>'Đ',

        'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

        'I'=>'Í|Ì|Ỉ|Ĩ|Ị',

        'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

        'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

        'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',

    );
    foreach($unicode as $nonUnicode=>$uni) $str = preg_replace("/($uni)/i",$nonUnicode,$str);
    $str = trim($str);
    $str = str_replace(' ', '-', $str);
    $str = str_replace(',', '', $str);
    return $str;
}
function convert_unicode($string)
{
    //$unicodeChar = 'Ã¡|Ã |áº£|Ã£|áº¡|Äƒ|áº¯|áº±|áº³|áºµ|áº·|Ã¢|áº¥|áº§|áº©|áº«|áº­|Ã©|Ã¨|áº»|áº½|áº¹|Ãª|áº¿|á» |á»ƒ|á»…|á»‡|Ã³|Ã²|á» |Ãµ|á» |Æ¡|á»›|á» |á»Ÿ|á»¡|á»£|Ã´|á»‘|á»“|á»•|á»—|á»™|Ãº|Ã¹|á»§|Å©|á»¥|Æ°|á»©|á»«|á»­|á»¯|á»±|Ã­|Ã¬|á»‰|Ä©|á»‹|Ã½|á»³|á»·|á»¹|á»µ|Ä‘|Ã |Ã€|áº¢|Ãƒ|áº |Ä‚|áº®|áº°|áº²|áº´|áº¶|Ã‚|áº¤|áº¦|áº¨|áºª|áº¬|Ã‰|Ãˆ|áºº|áº¼|áº¸|ÃŠ|áº¾|á»€|á»‚|á»„|á»†|Ã“|Ã’|á»Ž|Ã•|á»Œ|Æ |á»š|á»œ|á»ž|á» |á»¢|Ã”|á» |á»’|á»”|á»–|á»˜|Ãš|Ã™|á»¦|Å¨|á»¤|Æ¯|á»¨|á»ª|á»¬|á»®|á»°|Ã |ÃŒ|á»ˆ|Ä¨|á»Š|Ã |á»²|á»¶|á»¸|á»´|Ä ';
    $unicodeChar = "á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ|é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|ó|ò|ỏ|õ|ọ|ơ|ớ|ờ|ở|ỡ|ợ|ô|ố|ồ|ổ|ỗ|ộ|ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|í|ì|ỉ|ĩ|ị|ý|ỳ|ỷ|ỹ|ỵ|đ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ|Ó|Ò|Ỏ|Õ|Ọ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự|Í|Ì|Ỉ|Ĩ|Ị|Ý|Ỳ|Ỷ|Ỹ|Ỵ|Đ";
    //$latinChar = 'a|a|a|a|a|a|a|a|a|a|a|a|a|a|a|a|a|e|e|e|e|e|e|e|e|e|e|e|o|o|o|o|o|o|o|o|o|o|o|o|o|o|o|o|o|u|u|u|u|u|u|u|u|u|u|u|i|i|i|i|i|y|y|y|y|y|d|A|A|A|A|A|A|A|A|A|A|A|A|A|A|A|A|A|E|E|E|E|E|E|E|E|E|E|E|O|O|O|O|O|O|O|O|O|O|O|O|O|O|O|O|O|U|U|U|U|U|U|U|U|U|U|U|I|I|I|I|I|Y|Y|Y|Y|Y|D';
    $latinChar = "a|a|a|a|a|a|a|a|a|a|a|a|a|a|a|a|a|e|e|e|e|e|e|e|e|e|e|e|o|o|o|o|o|o|o|o|o|o|o|o|o|o|o|o|o|u|u|u|u|u|u|u|u|u|u|u|i|i|i|i|i|y|y|y|y|y|d|A|A|A|A|A|A|A|A|A|A|A|A|A|A|A|A|A|E|E|E|E|E|E|E|E|E|E|E|O|O|O|O|O|O|O|O|O|O|O|O|O|O|O|O|O|U|U|U|U|U|U|U|U|U|U|U|I|I|I|I|I|Y|Y|Y|Y|Y|D";
    $arrUnicodeChar = explode("|", $unicodeChar);
    $arrLatinChar = explode("|", $latinChar);
    $string = str_replace($arrUnicodeChar, $arrLatinChar, $string);
    $string = str_replace(" ","-",$string);
    $string = str_replace(" ","-",$string);
    $string = str_replace("'","",$string);
    $string = str_replace("/","",$string);
    $string = str_replace("\\","",$string);
    $string = str_replace('"',"",$string);
    $string = str_replace(".","-",$string);
    $string = str_replace("?","",$string);
    $string = str_replace(":","",$string);
    $string = str_replace("%20"," ",$string);
    $string = str_replace("%","",$string);
    $string = str_replace("&","",$string);
    $string = str_replace(",","",$string);
    return ucfirst($string);
}
function convert_unicode_search($string)
{
    //$unicodeChar = 'Ã¡|Ã |áº£|Ã£|áº¡|Äƒ|áº¯|áº±|áº³|áºµ|áº·|Ã¢|áº¥|áº§|áº©|áº«|áº­|Ã©|Ã¨|áº»|áº½|áº¹|Ãª|áº¿|á» |á»ƒ|á»…|á»‡|Ã³|Ã²|á» |Ãµ|á» |Æ¡|á»›|á» |á»Ÿ|á»¡|á»£|Ã´|á»‘|á»“|á»•|á»—|á»™|Ãº|Ã¹|á»§|Å©|á»¥|Æ°|á»©|á»«|á»­|á»¯|á»±|Ã­|Ã¬|á»‰|Ä©|á»‹|Ã½|á»³|á»·|á»¹|á»µ|Ä‘|Ã |Ã€|áº¢|Ãƒ|áº |Ä‚|áº®|áº°|áº²|áº´|áº¶|Ã‚|áº¤|áº¦|áº¨|áºª|áº¬|Ã‰|Ãˆ|áºº|áº¼|áº¸|ÃŠ|áº¾|á»€|á»‚|á»„|á»†|Ã“|Ã’|á»Ž|Ã•|á»Œ|Æ |á»š|á»œ|á»ž|á» |á»¢|Ã”|á» |á»’|á»”|á»–|á»˜|Ãš|Ã™|á»¦|Å¨|á»¤|Æ¯|á»¨|á»ª|á»¬|á»®|á»°|Ã |ÃŒ|á»ˆ|Ä¨|á»Š|Ã |á»²|á»¶|á»¸|á»´|Ä ';
    $unicodeChar = "á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ|é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|ó|ò|ỏ|õ|ọ|ơ|ớ|ờ|ở|ỡ|ợ|ô|ố|ồ|ổ|ỗ|ộ|ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|í|ì|ỉ|ĩ|ị|ý|ỳ|ỷ|ỹ|ỵ|đ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ|Ó|Ò|Ỏ|Õ|Ọ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự|Í|Ì|Ỉ|Ĩ|Ị|Ý|Ỳ|Ỷ|Ỹ|Ỵ|Đ";
    //$latinChar = 'a|a|a|a|a|a|a|a|a|a|a|a|a|a|a|a|a|e|e|e|e|e|e|e|e|e|e|e|o|o|o|o|o|o|o|o|o|o|o|o|o|o|o|o|o|u|u|u|u|u|u|u|u|u|u|u|i|i|i|i|i|y|y|y|y|y|d|A|A|A|A|A|A|A|A|A|A|A|A|A|A|A|A|A|E|E|E|E|E|E|E|E|E|E|E|O|O|O|O|O|O|O|O|O|O|O|O|O|O|O|O|O|U|U|U|U|U|U|U|U|U|U|U|I|I|I|I|I|Y|Y|Y|Y|Y|D';
    $latinChar = "a|a|a|a|a|a|a|a|a|a|a|a|a|a|a|a|a|e|e|e|e|e|e|e|e|e|e|e|o|o|o|o|o|o|o|o|o|o|o|o|o|o|o|o|o|u|u|u|u|u|u|u|u|u|u|u|i|i|i|i|i|y|y|y|y|y|d|A|A|A|A|A|A|A|A|A|A|A|A|A|A|A|A|A|E|E|E|E|E|E|E|E|E|E|E|O|O|O|O|O|O|O|O|O|O|O|O|O|O|O|O|O|U|U|U|U|U|U|U|U|U|U|U|I|I|I|I|I|Y|Y|Y|Y|Y|D";
    $arrUnicodeChar = explode("|", $unicodeChar);
    $arrLatinChar = explode("|", $latinChar);
    $string = str_replace($arrUnicodeChar, $arrLatinChar, $string);
    $string = str_replace("'"," ",$string);
    $string = str_replace("/"," ",$string);
    $string = str_replace("\\"," ",$string);
    $string = str_replace('"'," ",$string);
    $string = str_replace("."," ",$string);
    $string = str_replace("?"," ",$string);
    $string = str_replace(":"," ",$string);
    $string = str_replace("%20"," ",$string);
    $string = str_replace("%"," ",$string);
    $string = str_replace("&"," ",$string);
    $string = str_replace(","," ",$string);
    return ucfirst($string);
}
// number phone

function formatPhoneNumber($phoneNumber) {
    $phoneNumber = preg_replace('/[^0-9]/','',$phoneNumber);

    if(strlen($phoneNumber) > 10) {
        $countryCode = substr($phoneNumber, 0, strlen($phoneNumber)-10);
        $areaCode = substr($phoneNumber, -10, 3);
        $nextThree = substr($phoneNumber, -7, 3);
        $lastFour = substr($phoneNumber, -4, 4);

        $phoneNumber = '+'.$countryCode.' ('.$areaCode.') '.$nextThree.'-'.$lastFour;
    }
    else if(strlen($phoneNumber) == 10) {
        $areaCode = substr($phoneNumber, 0, 3);
        $nextThree = substr($phoneNumber, 3, 3);
        $lastFour = substr($phoneNumber, 6, 4);

        $phoneNumber = '('.$areaCode.') '.$nextThree.'-'.$lastFour;
    }
    else if(strlen($phoneNumber) == 7) {
        $nextThree = substr($phoneNumber, 0, 3);
        $lastFour = substr($phoneNumber, 3, 4);

        $phoneNumber = $nextThree.'-'.$lastFour;
    }

    return $phoneNumber;
}


    ?>