<?php

namespace app\library;

class Cache
{

    public function __construct(private string $fileName)
    {   
    }

    private function filePut(string $cacheFile, string|array $cacheData)
    {
        file_put_contents($cacheFile, $cacheData);
        return json_decode($cacheData);
    }

    public function create(string|array $data, int $validadeInMin)
    {
        $cacheData = json_encode($data);

        $cacheFile = $this->fileName.".txt";

        if(file_exists($cacheFile)){
            $creationTime =  fileatime($cacheFile);
            $expiryDate = strtotime("+{$validadeInMin} minutes", $creationTime) < strtotime('now'); 

            if($expiryDate){
                return $this->filePut($cacheFile, $cacheData);
              }else{
                return json_decode(file_get_contents($cacheFile)); 
              }
        }else{
            return $this->filePut($cacheFile, $cacheData);
        }
    }
    
}