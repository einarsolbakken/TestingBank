<?php
include_once '../Model/domeneModell.php';

class AdminDBStub {
    
    function registrerKunde($kunde){
        if($kunde->personnummer == "20108824000"){
            return true;
        } 
        else {
            return false;
        }
    }
        
        function endreKonto($konto){
            if($konto->personnummer==90){
                return false;
            } else {
                return true;
            }
        }
    
    //Maja
    function endreKundeInfo($kunde){
        
        $kunde1 = new kunde();
        $kunde1->etternavn = "Kiszka";
        $kunde1->adresse = "Thereses Gate";
            
        if($kunde1->etternavn == $kunde->etternavn || $kunde1->adresse == $kunde->adresse){
            return "OK";
          }else {
            return "Wrong";
          }
    }
    
    //Maja
    function registerKonto($konto) {
        
            $kunde = new kunde();
            $kunde->personnummer = "11111111111";
            
            if($kunde->personnummer == $konto->personnummer) {
                return "OK";
            } else {
                return "Wrong!";
            }
    }
     
    //Maja
    function slettKonto($kontonummer){
        
        $konto = new konto();
        $konto->kontonummer = "1234567890";
        
        if($konto->kontonummer == $kontonummer){
            return "OK";
        }else {
            return "Wrong!";
        }
    }
     
}