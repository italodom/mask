Mask [![Build Status](https://travis-ci.org/italodom/mask.svg?branch=master)](https://travis-ci.org/italodom/mask)
===============
Para criação de máscaras de CPF, CEP, Monetária, Telefone, etc

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

// Formatando Máscara para CNPJ
echo MaskFactory::factory(MaskTypes::MASK_CNPJ, '00000000000100')->getMasked();
// Saída: 00.000.000/0001-00

// Formatando Máscara monetária sem o simbolo
echo MaskFactory::factory(MaskTypes::MASK_MONEY_NO_SYMBOL, '1234.56')->getMasked();
// Saída: 1.234,56

// Formatando Máscara para limpar um formato monetário
echo MaskFactory::factory(MaskTypes::MASK_CLEAR_MONEY, '1.234,56')->getMasked();
// Saída: 1234.56

// Formatando Máscara para telefone
echo MaskFactory::factory(MaskTypes::MASK_TELEFONE, '1122223333')->getMasked();
// Saída: (11) 2222-3333

// Formatando Máscara para telefone
echo MaskFactory::factory(MaskTypes::MASK_TELEFONE, '01133334444')->getMasked();
// Saída: (11) 3333-4444

// Formatando Máscara para telefone
echo MaskFactory::factory(MaskTypes::MASK_TELEFONE, '11944445555')->getMasked();
// Saída: (11) 94444-5555

// Formatando Máscara para telefone
echo MaskFactory::factory(MaskTypes::MASK_TELEFONE, '011955556666')->getMasked();
// Saída: (11) 95555-6666
```
