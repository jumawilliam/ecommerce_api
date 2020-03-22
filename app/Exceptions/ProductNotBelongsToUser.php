<?php

namespace App\Exceptions;

use App\Exceptions\ProductNotBelongsToUser;
use Exception;

class ProductNotBelongsToUser extends Exception
{
    public function render(){
    	return ['errors'=>'Product does not belong to you'];
    }
}
