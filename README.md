# Design Patters

## Behavioral Design Patterns

###  Strategy
```php
$calculatorOfTax = new App\Strategy\CalculatorOfTax();
$calculatorOfTax->calc(
new App\Quote(10, 400),
new App\Strategy\Tax\Icms()
);
```

### Chain of Responsibility
```php
$calculatorOfDiscount = new App\ChainOfResponsibility\CalculatorOfDiscount();
echo $calculatorOfDiscount->calc(new App\Quote(6, 500));
```

# References
https://www.alura.com.br/

https://refactoring.guru/pt-br/design-patterns/php