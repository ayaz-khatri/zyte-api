<?php

include "bestbuy-script.php";
include "walmart-script.php";
include "amazon-script.php";

$apiKey = "c921f878e6ef4b2fa791379703fd43db";

/* -------------------------------------------------------------------------- */
/*                                   Bestbuy                                  */
/* -------------------------------------------------------------------------- */

$linkToScrape = "https://www.bestbuy.ca/en-ca/product/samsung-36-27-cu-ft-french-door-refrigerator-w-water-ice-dispenser-rf27t5201sr-aa-stainless-steel/14481456";

// // $linkToScrape = "https://www.bestbuy.ca/en-ca/product/bebelelo-set-of-6-baby-nursery-bundle-92-graco-modes-jogger-2-0-travel-system-stroller-with-car-seat-crib-bed/16000510";

$bestbuyProduct = scrapeBestbuy($linkToScrape, $apiKey);

echo '<pre>';
print_r($bestbuyProduct);
echo '</pre>';
die();


/* -------------------------------------------------------------------------- */
/*                                   Walmart                                  */
/* -------------------------------------------------------------------------- */

// $linkToScrape = "https://www.walmart.ca/en/ip/george-mens-christmas-shirt-red/6000206539294";

// $linkToScrape = "https://www.walmart.ca/en/ip/hyperx-cloud-ii-gaming-headset-for-pc-ps5-ps4-includes-71-virtual-surround-sound-and-usb-audio-control-box-black-red/7HAXHLZRDTDY";

// $linkToScrape = "https://www.walmart.ca/en/ip/asus-laptop-l410-14-fhd-display-intel-celeron-n4020-processor-ultra-thin-laptop-star-black-l410ma-wb01-cb-4gb-ram-64gb-storage-intel-hd-star-black/6000205412421";

// $walmartProduct= scrapeWalmart($linkToScrape, $apiKey);

// echo '<pre>';
// print_r($walmartProduct);
// echo '</pre>';
// die();




/* -------------------------------------------------------------------------- */
/*                                   Amazon                                  */
/* -------------------------------------------------------------------------- */


// $linkToScrape = "https://www.amazon.ca/Instant-Electric-Pressure-Sterilizer-Stainless/dp/B00FLYWNYQ/?_encoding=UTF8&pd_rd_w=ne5hj&content-id=amzn1.sym.0a4889f1-d999-4e04-a718-34da7dae1e8b&pf_rd_p=0a4889f1-d999-4e04-a718-34da7dae1e8b&pf_rd_r=HWSDVY5XW0WSN93RVE0V&pd_rd_wg=Ad30A&pd_rd_r=3ad9e0ab-873c-40cf-8eb3-bf753088894d&ref_=pd_gw_crs_zg_bs_2206275011&th=1";


// $linkToScrape = "https://www.amazon.ca/dp/B01IUYUXP4/ref=sspa_dk_detail_0?psc=1&pd_rd_i=B01IUYUXP4&pd_rd_w=kj55I&content-id=amzn1.sym.741af057-739f-41c7-8974-dbe2cd459234&pf_rd_p=741af057-739f-41c7-8974-dbe2cd459234&pf_rd_r=1VSFHQHKBSY06PT338KF&pd_rd_wg=7wxsB&pd_rd_r=2a8d397a-997d-425e-b672-740fa5286c7c&s=kitchen&sp_csd=d2lkZ2V0TmFtZT1zcF9kZXRhaWxfdGhlbWF0aWM";

// $amazonProduct= scrapeAmazon($linkToScrape, $apiKey);

// echo '<pre>';
// print_r($amazonProduct);
// echo '</pre>';
// die();








?>
