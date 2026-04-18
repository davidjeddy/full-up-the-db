[!WARNING]
**⚠️ This project has been archived and is no longer maintained. ⚠️**

Github has shown it does not respect its users. Other have said it better than I can.

- https://www.theregister.com/2022/06/30/software_freedom_conservancy_quits_github/
- https://www.andrlik.org/dispatches/migrating-from-github-motivation/
- https://techresolve.blog/2025/12/27/looking-to-migrate-company-off-github-whats-the/
- https://lord.io/leaving-github/
- https://dev.to/alanwest/how-to-actually-migrate-from-github-to-codeberg-without-losing-your-mind-33bf>
> Development has moved to Codeberg:
> **➡️ https://codeberg.org/DavidJEddy/full-up-the-db**
>
> Please update your remotes:
> ```bash
> git remote set-url origin https://codeberg.org/DavidJEddy/full-up-the-db
> ```

---
# Fill-up the DB

Challenge: insert rows into a DB using PHP/PDO that would cause a signed int(11) overflow error in under 5 minutes of execution.
Doing so with the minimal amount of tuning and changing from default install values of PHP and the DB.
As stock as possible also.

Signed int(11) = 2147483648

As a bonus, do the same thing to a unsigned int(11);

Unsigned int(11) = 4294967295