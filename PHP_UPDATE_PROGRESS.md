# PHP Security Update Progress — Branch: update_php

- Site: Laravel 12.34.0 / PHP 8.4.8 (deployed local)
- CVE assessed: RCE via OOM corruption (published 2026-10-21)
- Patch available: 8.4.25 (index shows upgradable)
- Status: apt install FAILED — 404 missing archive from ondrej/php PPA
- Action taken: php8.4-fpm restarted (active), Laravel maintenance tested, caches cleared
- Next: resolve repo/package access for 8.4.25, or apply manual binary/update

--- Update 2026-10-22 ---
- PPA ondrej/php re-added; apt update berhasil
- Installed: php8.4 = 8.4.27-1+ubuntu24.04.1+deb.sury.org+1 (built Oct 21 2026)
- CVE patch applied (RCE via OOM corruption, 2026-10-21 advisory)
- php8.4-fpm restarted, status active
