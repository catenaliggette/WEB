<?php
require_once "AdsRepository.php";
require_once "Ad.php";
require_once "View.php";

class AdController{
    private AdsRepository $adsRepository;
    private View $View;
    private bool $error = false;

    public function __construct()
    {
        $this->View = new View();
        try {
            $this->adsRepository = new AdsRepository();
        }catch (mysqli_sql_exception $e){
            $this->error = true;
        }
    }

    public function isError():bool {
        return $this->error;
    }

    public function close(){
        $this->adsRepository->close();
    }

    public function post(){
        if(empty($_POST["email"]) or
            empty($_POST["category"]) or
            empty($_POST["title"]) or
            empty($_POST["description"])){
            $this->View->fieldEmpty();
            return;
        }
        $ad = new Ad ($_POST["email"],$_POST["category"],$_POST["title"],$_POST["description"]);
        $this->adsRepository->createAd($ad);
        $this->View->renderAds($this->adsRepository->getAds());

    }

    public function get(){
        $this->View->renderAds($this->adsRepository->getAds());
    }

    public function error(){
        $this->View->error();
    }
}
