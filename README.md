Mask [![Build Status](https://travis-ci.org/italodom/mask.svg?branch=master)](https://travis-ci.org/italodom/mask)
===============
Para criação de máscaras de CPF, CEP, Monetária, etc

Installation
============
Instalação via composer

```
composer require italodom/mask
```

ou adicionar no seu arquivo composer.json


Uso
=====

Criando máscaras
---------------------------------
```php
// Formatando CEP
echo MaskFactory::factory(MaskTypes::MASK_CEP, '99999999')->getMasked();
// Saída: 99999-999

// Formatando CPF
echo MaskFactory::factory(MaskTypes::MASK_CPF, '33344455566')->getMasked();
// Saída: 333.444.555-88

// Formatando Máscara monetária sem o simbolo
echo MaskFactory::factory(MaskTypes::MASK_MONEY_NO_SYMBOL, '1234.56')->getMasked();
// Saída: 1.234,56

// Formatando Máscara para limpar um formato monetário
echo MaskFactory::factory(MaskTypes::MASK_CLEAR_MONEY, '1.234,56')->getMasked();
// Saída: 1234.56
```
