<?php

namespace Chuva\Php\WebScrapping;
libxml_use_internal_errors(use_errors:true);


use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use DOMXPath;

/**
 * Executor principal para o exercício de Web Scraping.
 */
class Main {

    /**
     * Função principal, cria uma instância do Scraper e a executa.
     */
    public static function run(): void {
        $dom = new \DOMDocument('1.0', 'utf-8');
        $dom->loadHTMLFile(__DIR__ . '/../../assets/origin.html');
        $xPath = new DOMXPath($dom);
        $domNodeList = $xPath->query(expression:'.//h4//*[@class="papper"]//*');
        /** @var DOMNode $elemento */
        foreach ($domNodeList as $elemento){
            echo $elemento->textcontent . PHP_EOL;
            
        }
        
 }
}