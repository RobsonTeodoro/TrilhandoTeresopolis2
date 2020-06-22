<?php
  $sandbox = true;

  if($sandbox){
    define("URL_PAGSEGURO","https://ws.sandbox.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO","https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
  }

  else{
    define("URL_PAGSEGURO","https://ws.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO","https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
  }