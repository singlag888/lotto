<?php

class tbThirdparty_payment extends DataMapper {

    var $table = 'tbThirdparty_payment';

    function __construct($init = array(), $code_to_throw = FALSE) {
        parent::__construct();
        if (count($init) > 0) {
            foreach ($init as $key => $value) {
                $this->where($key, $value);
            }
            $this->get();
            if (!$this->exists() && ($code_to_throw !== FALSE)) {
                throw new Exception("", $code_to_throw);
            }
            return $this;
        }
    }
}