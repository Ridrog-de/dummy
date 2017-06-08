[Home](index.md) | [Installation](install.md) | [Usage](usage.md) | [Config](config.md)  

# Installation

## Require it

```
composer require ridrog/dummy
```

## Include Service Provider 

```
'providers' => [
    ...
    Ridrog\Dummy\DummyServiceProvider::class,
    ...
 ],
```

Register the Facade

```
'aliases' => [
    ...
    'Dummy' => Ridrog\Dummy\Facades\DummyFacade::class,
    ...
];
```



