<?php

class InvalidShippingCostException extends \Exception {}
class BadFormattedCostException extends InvalidShippingCostException {}
class WrongShippingMethodException extends \Exception {}

try {
    throw new InvalidShippingCostException();
} catch (InvalidShippingCostException $e) {
    echo 'ERREUR!';
}

try {
    throw new BadFormattedCostException();
} catch (InvalidShippingCostException $e) {
    echo 'ERREUR 2!';
}

try {
    throw new WrongShippingMethodException();
} catch (InvalidShippingCostException $e) {
    echo 'ERREUR 3!';
}

// ERREUR!ERREUR 2!
