<?php

interface iPhone{
    public function getState();
    public function getCountryCode(); // +420 //itu
    public function getAreaCode(); // 2 // npa
    public function getLocalCode(); // nxx // 5161
    public function getStationCode(); // 6463
    public function toString();
    
}

class Phone{
    
}