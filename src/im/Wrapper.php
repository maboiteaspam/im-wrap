<?php
namespace im\Wrap;

use st\Wrap\WrapperInterface;

class Wrapper implements WrapperInterface
{
    protected $gotData = false;
    protected $data;

    /**
     * @inheritdoc
     */
    public function wrap($data) {
        $this->data = $data;
        $this->gotData = true;
    }

    /**
     * @inheritdoc
     */
    public function hasData() {
        return $this->gotData;
    }

    /**
     * @inheritdoc
     */
    public function unwrap() {
        return $this->data;
    }
}