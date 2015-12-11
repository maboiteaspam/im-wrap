# Implemented - Standard Wrapper Interface for PHP

Default implementation to wrap data.

```php
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
```

## Install

The recommended way to install this implementation is through composer.

```json
{

  "minimum-stability": "dev",
  "require": {
    "php": ">=5.5.0",
    "im/wrap": "v1.0.1"
  },
  "repositories": [
    {
      "type": "git",
      "url": "git@github.com:maboiteaspam/im-wrap.git"
    }
  ]
}

```

# see also

The standard interface to share in your projects

- https://github.com/maboiteaspam/st-wrap
