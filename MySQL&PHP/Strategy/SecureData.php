<?php

class SecureData
{
    private $changeField;
    private $company;
    private $devdes;
    private $device;
    private $disappear;
    private $field;
    private $hookUp;
    private $lang;
    private $newData;
    private $oldData;
    private $plat;
    private $style;
    private $term;
    private $dataPack;

    public function enterData()
    {
        $this->hookUp = UniversalConnect::doConnect();
        $this->company = $this->hookUp->real_escape_string($_POST['company']);
        $this->devdes = $this->hookUp->real_escape_string($_POST['devdes']);
        $this->lang = $this->hookUp->real_escape_string($_POST['lang']);
        $this->plat = $this->hookUp->real_escape_string($_POST['plat']);
        $this->style = $this->hookUp->real_escape_string($_POST['style']);
        $this->device = $this->hookUp->real_escape_string($_POST['device']);

        $this->dataPack = [
            $this->company,
            $this->devdes,
            $this->lang,
            $this->plat,
            $this->style,
            $this->device
        ];

        $this->hookUp->close();
    }

    public function conductSearch()
    {
        $this->hookUp = UniversalConnect::doConnect();
        $this->field = $this->hookUp->real_escape_string($_POST['field']);
        $this->term = $this->hookUp->real_escape_string($_POST['term']);
        $this->dataPack = [
            $this->field,
            $this->term
        ];
        $this->hookUp->close();
    }

    public function makeChange()
    {
        $this->hookUp = UniversalConnect::doConnect();
        $this->changeField = $this->hookUp->real_escape_string($_POST['changeField']);
        $this->newData = $this->hookUp->real_escape_string($_POST['newData']);
        $this->oldData = $this->hookUp->real_escape_string($_POST['oldData']);
        $this->dataPack = [
            $this->changeField,
            $this->newData,
            $this->oldData
        ];

        $this->hookUp->close();
    }

    public function removeRecord()
    {
        $this->hookUp = UniversalConnect::doConnect();
        $this->disappear = $this->hookUp->real_escape_string($_POST['delete']);
        $this->dataPack = [
            $this->disappear
        ];
        $this->hookUp->close();
    }

    public function setEntry()
    {
        return $this->dataPack;
    }
}
