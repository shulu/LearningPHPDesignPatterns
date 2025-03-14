<?php

class C1 implements Product
{
    private $mfgProduct;
    private $formatHelper;
    private $countryNow;

    public function getProperties()
    {
        $this->countryNow = file_get_contents("clue.txt");
        $this->formatHelper = new FormatHelper($this->countryNow);
        $this->mfgProduct = $this->formatHelper->addTop();
        $this->mfgProduct .= $this->formatHelper->closeUp();
        return $this->mfgProduct;
    }
}
