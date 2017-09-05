<?php

namespace ZanPHP\NovaFoundation\Foundation\Traits;

use Thrift\Type\TType;
use ZanPHP\NovaFoundation\NullResult\NovaEmptyListResult;
use ZanPHP\NovaFoundation\NullResult\NovaNullResult;

trait ServiceSpecManager
{
    /**
     * @var array
     */
    protected $inputStructSpec = [];

    /**
     * @var array
     */
    protected $outputStructSpec = [];

    /**
     * @var array
     */
    protected $exceptionStructSpec = [];

    /**
     * @param $method
     * @return array
     */
    public function getInputStructSpec($method)
    {
        return isset($this->inputStructSpec[$method]) ? $this->inputStructSpec[$method] : null;
    }

    /**
     * @param $method
     * @return array
     */
    public function getOutputStructSpec($method)
    {
        return isset($this->outputStructSpec[$method]) ? $this->outputStructSpec[$method] : null;
    }

    /**
     * @param $method
     * @return array
     */
    public function getExceptionStructSpec($method, $withNullExceptions=false )
    {
        if(false === $withNullExceptions){
            return isset($this->exceptionStructSpec[$method]) 
                        ? $this->exceptionStructSpec[$method]
                        : [];
        }
        
        if(!isset($this->exceptionStructSpec[$method]) ){
            return $this->getNullResultException();
        }
        return $this->addNullResultException($this->exceptionStructSpec[$method]);
    }

    protected function addNullResultException($specs)
    {
        $count = count($specs);
        $nulls = $this->getNullResultException();

        foreach ($nulls as $k => $null){
            $newKey = $k + $count;
            $specs[$newKey] = $null;
        }

        return $specs;
    }

    protected function getNullResultException()
    {
        return [
            1 => [
                'var' => 'novaNull',
                'type' => TType::STRUCT,
                'class' => '\\' . NovaNullResult::class,
            ],
            2 => [
                'var' => 'novaEmptyList',
                'type' => TType::STRUCT,
                'class' => '\\' . NovaEmptyListResult::class,
            ],
        ];
    }
}