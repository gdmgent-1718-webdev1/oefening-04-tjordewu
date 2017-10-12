<?php

function whatType($watis)
{
     return "De waarde is " .gettype($watis). "<br>";
};

echo whatType("waarschijnlijk een string");
echo whatType(true);
echo whatType(1.3);
echo whatType(9);
echo whatType(['appel', 'banaan', 'citroen', 'druif']);





?>