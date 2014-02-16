<?php
/**
 * Description of ponci
 *
 * @author dfj
 */
class Ponci {
    /**
     * 
     * @param type $url
     */
    public static function parseUrl($url) 
    {
            $url=str_replace("http://http://","http://",$url);
            libxml_use_internal_errors(true);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);            
            $html = curl_exec($ch);
            curl_close($ch);            
            
            if(!mb_check_encoding($html, 'UTF8')) {
                $html = mb_convert_encoding($html, 'UTF-8', 'ISO-8859-2');
                $html=str_replace("iso-8859-2","utf-8",$html);
            }
            $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');
            $html = iconv("UTF-8", "UTF-8//IGNORE", $html);
           
            $dom = new DOMDocument('1.0', 'UTF-8');
            $dom->encoding = 'UTF-8';
            $dom->strictErrorChecking  = FALSE ;
            $dom->loadHTML('<?xml encoding="UTF-8">' .$html);
            $x = new DOMXPath($dom);
            foreach ($x->query('//text()') as $node) {
                $n = html_entity_decode(str_replace('r', 'l', str_replace('R','L',$node->nodeValue)));
                $node->nodeValue = $n;
            }
            $base = $dom->createElement('base');
            $body = $dom->getElementsByTagName('head')->item(0);
            $base->setAttribute("href",$url."/");
            $body->insertBefore($base, $body->firstChild);             
            return  $dom->saveHTML();
    }
    
}
