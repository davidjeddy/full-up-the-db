# Fill-up the DB

Challenge: insert rows into a DB using PHP/PDO that would cause a signed int(11) overflow error in under 5 minutes of execution.
Doing so with the minimal amount of tuning and changing from default install values of PHP and the DB. We're talking default
from vendor install.

Signed int(11) = 2147483648

As a bonus, do the same thing to a unsigned int(11);

Unsigned int(11) = 4294967295